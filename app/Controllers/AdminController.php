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


#####################################
## EXAMPLE FOR CONTROLLER
#####################################

use app\Core\Controller; // alias namespace

// panduan untuk nama controller harus sesuai dengan nama file
class AdminController extends Controller
{
	function __construct()
	{
		parent::__construct();
        $this->setsession('admin');
        $data['admin']      = $this->model()->readid('admin',$_SESSION['admin']);
        $this->setdata($data);
		// kode yang akan dijalankan terus ketika controller dipanggil
	}
	  
	  // method default dan harus ada di setiap controller
    public function index()
    {
     	// tulis kode disini
        // $this->adminpage('admin/beranda');
        $this->redirect('admin/datajurusan');
    }

    public function datajurusan($value='')
    {
        $data['jurusan']    = $this->model()->read('jurusan');
        $this->adminpage('jurusan/datajurusan',$data);
    }

    ###################################################
    // KRITERIA
    public function datakriteria($value='')
    {
        $data['kriteria'] = $this->model()->read('kriteria','obj');
    	$this->adminpage('kriteria/datakriteria',$data);
    }

    public function editkriteria($id_kriteria)
    {
        $data['kriteria'] = $this->model()->readid('kriteria',$id_kriteria);
        $this->adminpage('kriteria/editkriteria',$data);
    }

    public function updatekriteria($id_kriteria)
    {
        $this->model('kriteria')->updateriteria($id_kriteria);
        $this->popup('data berhasil diperbaharui','admin/datakriteria');
    }

    public function datasubkriteria()
    {
        if (isset($_POST['id_kriteria'])) {
            $id_kriteria            = $_POST['id_kriteria'];
            $data['subkriteria']    = $this->model('kriteria')->datasubkriteria($id_kriteria);
            setnamakriteria($id_kriteria);
        }
        $data['kriteria'] = $this->model()->read('kriteria','obj');
        $this->adminpage('kriteria/datasubkriteria',$data);
    }

    public function databobotkriteria($kode_jurusan='P001')
    {
        if (isset($_POST['kode_jurusan']))
            $kode_jurusan            = $_POST['kode_jurusan'];
        $data['bobotkriteria']    = $this->model('kriteria')->databobotkriteria($kode_jurusan);
        $data['data_kriteria']  = $this->model()->read('kriteria','obj');
        $data['jurusan']        = $this->model()->read('jurusan','obj');
        $data['kriteria']        = $this->model()->read('kriteria','obj');
        $data['kode_jurusan']     = $kode_jurusan;
        $this->adminpage('kriteria/databobotkriteria',$data);
    }

    public function ubahbobot($kode_jurusan)
    {
        $cek = $this->model('kriteria')->ubahbobot($kode_jurusan);
        if ($cek) {
            $this->popup('nilai perbandingan sudah dirubah','admin/databobotkriteria/'.$kode_jurusan);
        } else {
            $this->popup('kode perbandingan tidak boleh sama','admin/databobotkriteria/'.$kode_jurusan);
        }
    }


    ###################################################
    public function perhitungan($kode_jurusan='P001')
    {
        if (isset($_POST['kode_jurusan'])) {
            $kode_jurusan            = $_POST['kode_jurusan'];
        }
        $data['kriteria']       = $this->model('kriteria')->databobotkriteria($kode_jurusan);
        $data['siswa']          = $this->model('kriteria')->nilai_siswa();
        $data['data_kriteria']  = $this->model()->read('kriteria','obj');
        $data['jurusan']        = $this->model()->read('jurusan','obj');
        $data['label']          = $this->model('kriteria')->labelkriteria($kode_jurusan);
        $data['listbobot']      = $this->model('kriteria')->listbobot();
        $data['kode_jurusan']   = $kode_jurusan;
        $this->adminpage('perhitungan/perhitunganahp',$data);
    }

    public function rekomendasi($value='')
    {
        $data['siswa']    = $this->model('siswa')->listsiswa('siswa');
        $this->adminpage('admin/rekomendasi',$data);
    }

    // PENGATURAN
    public function pengaturan($value='')
    {
        $data['admin']    = $this->model()->readid('admin',$_SESSION['admin']);
        $this->adminpage('admin/pengaturan',$data);
    }

    public function updateadmin($kode_admin)
    {
        $this->model('admin')->updateadmin($kode_admin);
        $this->popup('data berhasil diperbaharui','admin/pengaturan');
    }

    // SISWA
    public function hapus($table,$link,$id)
    {
        $this->model()->deleteid($table,$id);
        $this->popup('data berhasil terhapus','admin/'.$link);
    }

    // LOGOUT

    public function logout($value='')
    {
        unset($_SESSION['admin']);
        $this->popup('Anda Keluar dari sistem','home/login');
    }
}
