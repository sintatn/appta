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

class Admin extends ModelClass
{
	private $table = 'admin'; // isi dengan nama tabel sesuai dengan model yang digunakan

	function __construct()
	{
		parent::__construct(); // memanggil fungsi construct induk class
		$this->_db->table($this->table); // set untuk pemanggilan fungsi database
	}

	public function ceklogin($value='')
	{
		$this->settable($this->table);
		return $this->proseslog();
	}

	public function nilaisiswa($value='')
	{
		$this->_db->table('siswa');
		$siswa = $this->_db->fetch('obj');

		foreach ($siswa as $row) {
			$nisn 	= $row->nisn;
			$this->_db->table('kriteria');
			$kriteria 	= $this->_db->fetch('obj');

			foreach ($kriteria as $r) {
				$kode_kriteria 	= $r->kode_kriteria;

				$this->_db->table('nilai','data_kriteria');
				$this->_db->where("nisn='$nisn' AND kode_kriteria = '$kode_kriteria'");
				$nilai = $this->_db->fetchjoin('obj');
				foreach ($nilai as $rr) {
					$rnilai[]		= $rr->nilai;
				}

				$nama_kriteria[] 	= $r->nama_kriteria;
				$nnilai[]					= $rnilai;
				$rnilai = null;
			}
			$dd['nama_kriteria']	= $nama_kriteria;
			$dd['nilai']					= $nnilai;
			$nama_kriteria 				= null;
			$nnilai 				= null;

			$d['nama_siswa']	= $row->nama_siswa;
			$d['nilai']				= $dd; 

		}

		return $d;
	}

	public function updateadmin($kode_admin)
	{
		$d['nama_admin']		= $_POST['nama_admin'];
		$d['username']		= $_POST['username'];

		$this->_db->table('admin');
		return $this->_db->update($d,$kode_admin);
	}
	
}