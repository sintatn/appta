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

class User extends ModelClass
{
	private $table = ''; // isi dengan nama tabel sesuai dengan model yang digunakan

	function __construct()
	{
		parent::__construct(); // memanggil fungsi construct induk class
		$this->_db->table($this->table); // set untuk pemanggilan fungsi database
	}

	public function forminputnilai($value='')
	{
		// data kriteria
		$this->_db->table('kriteria');
		$kriteria = $this->_db->fetch('obj');
		if ($kriteria) {
			foreach ($kriteria as $row) {
				$kode_kriteria 				= $row->kode_kriteria;

				$this->_db->table('data_kriteria');
				$this->_db->where("kode_kriteria = '$kode_kriteria'");
				$data_kriteria 				= $this->_db->fetch('obj');
				if ($data_kriteria) {
					$d['nama_kriteria']		= $row->nama_kriteria;
					$d['link']						= $row->link;
						foreach ($data_kriteria as $r) {
							$this->_db->table('sub_kriteria');
							$sub_kriteria 					= $this->_db->fetchid($r->kode_sub);
							$dd['sub_kriteria'] 		= $sub_kriteria->nama_sub;
							$dd['id_datakriteria']	= $r->id_datakriteria;
							$resultdd[]							= $dd;
						}
					$d['sub_kriteria'] 					= $resultdd;
					$resultdd 									= null;
					$result[]	= $d;
				}
			}
			return $result;
		} else {
			return NULL;
		}
	}

	public function simpannilai($value='')
	{
		// post data
		$nisn 								= $_POST['nisn'];
		// simpan siswa

		$s['nisn']						= $nisn;
		$s['nama_siswa']			= $_POST['nama_siswa'];
		$s['alamat_siswa']		= $_POST['alamat_siswa'];
		$s['tgl_input']				= setdatetime();
		$s['pilihan_jurusan']	= NULL;

		$this->_db->table('siswa');
		$this->_db->insert($s);

		// simpan nilai
		for ($i=0; $i < count($_POST['id_datakriteria']); $i++) { 
			$n['nisn']						= $nisn;
			$n['id_datakriteria']	= $_POST['id_datakriteria'][$i];
			$n['nilai']						= $_POST['nilai'][$i];

			$this->_db->table('nilai');
			$this->_db->insert($n);
		}
		return $nisn;
	}
	
}