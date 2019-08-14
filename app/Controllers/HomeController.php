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

namespace app\Controllers;

// package untuk class HomeController

use app\Core\Controller; // alias namespace

// Controller class system
class HomeController extends Controller

{
		
 	function __construct()
	{
		parent::__construct();
		// kode yang akan dijalankan terus ketika controller dipanggil
	}

    public function index()
    {
        $this->homepage('user/home');
    }

    public function inputnilai($value='')
    {
        $data['datakriteria']   = $this->model('user')->forminputnilai();
    	$this->homepage('user/inputnilai',$data);
    }

    public function simpannilai($value='')
    {
        $nisn = $this->model('user')->simpannilai();
        $this->redirect('home/perhitungan/'.$nisn);
    }

    public function ceklogin($value='')
    {
        $cek = $this->model('admin')->ceklogin();
        if ($cek) {
            $this->popup('login berhasil','admin');
        } else {
            $this->popup('login gagal','home/login');
        }
    }
    public function login($value='')
    {
      $this->view('admin/login');
    }

    public function perhitungan($nisn)
    {
        $data['jurusan'] = $this->model('metode')->perhitungan($nisn);
        $data['siswa']      = $this->model()->readid('siswa',$nisn);
        $this->model('siswa')->updatejurusan($nisn,$data['jurusan'][5]);
        $this->homepage('user/hasil',$data);
    }
}
