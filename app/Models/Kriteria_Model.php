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

class Kriteria extends ModelClass
{
	private $table = 'kriteria'; // isi dengan nama tabel sesuai dengan model yang digunakan

	function __construct()
	{
		parent::__construct(); // memanggil fungsi construct induk class
		$this->_db->table($this->table); // set untuk pemanggilan fungsi database
	}

	public function updatekriteria($id_kriteria)
	{
		$d['nama_kriteria']	= $_POST['nama_kriteria'];
		$d['atribut']				= $_POST['atribut'];

		return $this->_db->update($id_kriteria);
	}

	public function datasubkriteria($kode_kriteria)
	{
		$this->_db->table('data_kriteria');
		$this->_db->where("kode_kriteria ='$kode_kriteria'");
		$kriteria = $this->_db->fetch('obj');

		foreach ($kriteria as $row) {
			$this->_db->table('sub_kriteria');
			$sub_kriteria = $this->_db->fetchid($row->kode_sub);

			$d['kode_kriteria']	= $kode_kriteria;
			$d['nama_sub']			= $sub_kriteria->nama_sub;

			$result[]						= $d;
		}

		return $result;
	}

	public function databobotkriteria($kode_jurusan)
	{
		$this->_db->table('kriteria');
		$kriteria = $this->_db->fetch('obj');

		foreach ($kriteria as $row) {
			$kode_kriteria = $row->kode_kriteria;
			$this->_db->table('bobot_kriteria');
			$this->_db->where("kode_jurusan='$kode_jurusan' AND kode_kriteria='$kode_kriteria'");
			$bobot_kriteria	= $this->_db->fetch('obj');

			foreach ($bobot_kriteria as $r) {

				$nilai_bobot[$r->kode_perbandingan]	= $r->nilai_bobot;
			}

			$d['kode_kriteria']		= $row->kode_kriteria;
			$d['nama_kriteria']		= $row->nama_kriteria;
			$d['nilai_bobot']			= $nilai_bobot;
			$nilai_bobot 					= null;

			$result[]							= $d;
		}

		return $result;
	}

	public function listbobot($value='')
	{
		$this->_db->table('jurusan');
		$jurusan = $this->_db->fetch('obj');

		foreach ($jurusan as $row) {
			$kode_jurusan = $row->kode_jurusan;
			$d['nama_jurusan']	= $row->nama_jurusan;
			$d['nilai_bobot']					= $this->databobotkriteria($kode_jurusan);

			$result[]						= $d;
		}
		return $result;
	}


	public function ubahbobot($kode_jurusan)
	{
		$id1 	= $_POST['ID1'];
		$id2 	= $_POST['ID2'];
		$nilai= $_POST['nilai'];

		if ($id1 == $id2) {
			return FALSE;
		} else {
			// update data 1

			$this->_db->table('bobot_kriteria');
			$this->_db->where("kode_kriteria='$id1' AND kode_perbandingan='$id2' AND kode_jurusan='$kode_jurusan'");
			$bobot_kriteria1 = $this->_db->fetch('id');
			$id_bobotkriteria1 	= $bobot_kriteria1->id_bobotkriteria;
			$d['nilai_bobot']		= $nilai;
			$this->_db->table('bobot_kriteria');
			$this->_db->update($d,$id_bobotkriteria1);

			$this->_db->table('bobot_kriteria');
			$this->_db->where("kode_kriteria='$id2' AND kode_perbandingan='$id1' AND kode_jurusan='$kode_jurusan'");
			$bobot_kriteria2 = $this->_db->fetch('id');
			$id_bobotkriteria2 	= $bobot_kriteria2->id_bobotkriteria;
			$dd['nilai_bobot']		= ($nilai/($nilai*$nilai));
			$this->_db->table('bobot_kriteria');
			$this->_db->update($dd,$id_bobotkriteria2);
			return TRUE;
		}
	}
	
	public function labelkriteria()
	{
		$this->_db->table('kriteria');
		$kriteria = $this->_db->fetch('obj');

		foreach ($kriteria as $row) {
			$kode_kriteria = $row->kode_kriteria;
			$this->_db->table('data_kriteria');
			$this->_db->where("kode_kriteria='$kode_kriteria'");
			$data_kriteria = $this->_db->fetch('obj');

			foreach ($data_kriteria as $r) {
				$kode_sub 	= $r->kode_sub;
				$this->_db->table('sub_kriteria');
				$sub_kriteria = $this->_db->fetchid($kode_sub);
				$listsub[]				= $sub_kriteria->label;
			}
			$d['nama_kriteria']	= $row->nama_kriteria;
			$d['sub_kriteria']	= $listsub;
			$listsub 						= null;
			$result[]						= $d;

		}
		return $result;
	}

	public function nilai_siswa($value='')
	{
		// siswa

		$this->_db->table('siswa');
		$this->_db->opsi(" order by tgl_input DESC");
		$siswa = $this->_db->fetch('obj');

		foreach ($siswa as $b) {
			$nisn 	= $b->nisn;
			$this->_db->table('kriteria');
			$kriteria = $this->_db->fetch('obj');

			foreach ($kriteria as $row) {
				$kode_kriteria = $row->kode_kriteria;
				$this->_db->table('data_kriteria');
				$this->_db->where("kode_kriteria='$kode_kriteria'");
				$data_kriteria = $this->_db->fetch('obj');

				foreach ($data_kriteria as $r) {
					$id_datakriteria 	= $r->id_datakriteria;
					$this->_db->table('nilai');
					$this->_db->where("id_datakriteria='$id_datakriteria' AND nisn='$nisn'");
					$nilai = $this->_db->fetch('id');
					$listnilai[]				= $nilai->nilai;
				}
				$dd[$kode_kriteria]		= $listnilai;
				$listnilai 						= null;
			}
			$d['nama_siswa']		= $b->nama_siswa;
			$d['nilai']					= $dd;
			$result[]						= $d;
		}

		return $result;
	}
}