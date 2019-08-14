<?php

/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author 		Firman Setiawan
 * @copyright	Copyright (c) Firman Setiawan
 *
 */

namespace app\Models;

#####################################
## EXAMPLE FOR CONTROLLER
#####################################

use app\Core\ModelClass;

class Metode extends ModelClass
{
	private $table = 'bobot_kriteria'; // isi dengan nama tabel sesuai dengan model yang digunakan

	function __construct()
	{
		parent::__construct(); // memanggil fungsi construct induk class
		$this->_db->table($this->table); // set untuk pemanggilan fungsi database
	}

	public function perbandingankriteria($kode_jurusan)
	{
		// list data kriteria
		$kriteria = $this->listkriteria();
			foreach ($kriteria as $row) {
				$kode_kriteria = $row->kode_kriteria;
				$this->_db->table('bobot_kriteria');
				$this->_db->part("SUM(nilai_bobot) as jumlah");
				$this->_db->where("kode_perbandingan ='$kode_kriteria' AND kode_jurusan ='$kode_jurusan'");
				$bobot_kriteria = $this->_db->fetch('obj');

				$result[$kode_kriteria]	=  round(($bobot_kriteria[0]->jumlah),3);
			}
		return $result;
	}

	public function bobot_prioritas($kode_jurusan='P001')
	{
		$perbandingankriteria = $this->perbandingankriteria($kode_jurusan);
		// list data kriteria
		$kriteria = $this->listkriteria();
			foreach ($kriteria as $row) {
				$kode_kriteria = $row->kode_kriteria;
				$this->_db->table('bobot_kriteria');
				$this->_db->where("kode_kriteria ='$kode_kriteria' AND kode_jurusan ='$kode_jurusan'");
				$bobot_kriteria = $this->_db->fetch('obj');
				foreach ($bobot_kriteria as $r) {
					$nilai_bobot 	= $r->nilai_bobot;
					$kode_kriteriapembanding = $r->kode_perbandingan;
					$rnilai[] = $nilai_bobot/$perbandingankriteria[$kode_kriteriapembanding];
				}
				$result[$kode_kriteria]	=  array_sum($rnilai)/5;
				$rnilai 								= null;
			}
		return $result;
	}

	// WP
	public function getnilai($nisn)
	{
		// kriteria
		$kriteria = $this->listkriteria();
		foreach ($kriteria as $row) {
			$kode_kriteria 	= $row->kode_kriteria;
			$this->_db->table('data_kriteria');
			$this->_db->where("kode_kriteria='$kode_kriteria'");
			$data_kriteria = $this->_db->fetch('obj');
			$jumlah = 0;
			foreach ($data_kriteria as $r) {
				$id_datakriteria 	= $r->id_datakriteria;
				$this->_db->table('nilai');
				$this->_db->where("id_datakriteria='$id_datakriteria' AND nisn='$nisn'");
				$nilai 	= $this->_db->fetch('id');
				$jumlah = $jumlah + $nilai->nilai;
			}
			$result[$kode_kriteria]	= ($jumlah/count($data_kriteria));

		}
		return $result;
	}
	public function perhitungan($datanisn)
	{
		$bobot_prioritas = $this->bobot_prioritas('P001');

		// print_r($bobot_prioritas);


		$siswa 	= $this->listsiswa();
		// nilai yang di inputkan dibandingkan dengan siswa lainnya,, 
			foreach ($this->listjurusan() as $row) {
				$kode_jurusan = $row->kode_jurusan;

				foreach ($siswa as $r) {
					$nisn 	= $r->nisn;
					$nilai 	= $this->getnilai($nisn);
					$jumlah = 1;
					foreach ($this->bobot_prioritas($kode_jurusan) as $kriteria => $value) {
						$jumlah = $jumlah * pow($nilai[$kriteria],$value);
					}
					$nsiswa[]	=	$jumlah; 
					if ($nisn == $datanisn) {
						$dnisn[$kode_jurusan] 	= $jumlah;	
					}
					
				}

				$result[$kode_jurusan]	= array_sum($nsiswa);
				$nsiswa 								= null;
			}

		foreach ($dnisn as $keykode => $vnilai) {
			$nresult[$keykode]	= $result[$keykode]; 
		}

		asort($nresult);

		$kode_jurusan = array_keys($nresult);
		
		// kode sebelumnya
		//return end($kode_jurusan);
		
		// kode baru
		for($i=0; $i < count($kode_jurusan); $i++){
			$kdjurusan = $kode_jurusan[$i];
			$this->_db->table('jurusan');
			$djurusan = $this->_db->fetchid($kdjurusan);
			$namajurusan[] = $djurusan->nama_jurusan;
		}
		
		asort($namajurusan);
		return $namajurusan;
	}

	// other
	public function listkriteria()
	{
		$this->_db->table('kriteria');
		return $this->_db->fetch('obj');
	}

		// other
	public function listsiswa()
	{
		$this->_db->table('siswa');
		return $this->_db->fetch('obj');
	}

	public function listjurusan()
	{
		$this->_db->table('jurusan');
		return $this->_db->fetch('obj');
	}
}