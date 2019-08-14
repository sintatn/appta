<?php



################################################
### RUMUS AHP ############

function listperbandingan($value='')
{
    $d['1'] = 'Sama penting dengan';
    $d['2'] = 'Mendekati sedikit lebih penting dari';
    $d['3'] = 'Sedikit lebih penting dari';
    $d['4'] = 'Mendekati lebih penting dari';
    $d['5'] = 'Lebih penting dari';
    $d['6'] = 'Mendekati sangat penting dari';
    $d['7'] = 'Sangat penting dari';
    $d['8'] = 'Mendekati Mutlak dari';
    $d['9'] = 'Mendekati sangat penting dari';

    return $d;
}

function jumlahbobot($data, $kode_kriteria)
{
    $jumlah = 0;
    for ($i=0; $i < count($data); $i++) { 
        $jumlah = $jumlah + $data[$i]['nilai_bobot'][$kode_kriteria];
    }

    return $jumlah;
}

function bobotprioritas($nilai,$data,$kode_kriteria)
{
    $jumlah  = $nilai / jumlahbobot($data,$kode_kriteria);
    return $jumlah;
}

function prioritas($kriteria,$kode_kriteria)
{
    $jumlah = 0;
    foreach ($kriteria as $row) {
        if ($kode_kriteria == $row['kode_kriteria']) {
            foreach ($row['nilai_bobot'] as $kode_pembanding => $bobot) {
                $jumlah = $jumlah + bobotprioritas($bobot,$kriteria,$kode_pembanding);
            }
            $prioritas = $jumlah/5;
        }
    }
    return $prioritas;
}

function perkalian_matriks($nilai_bobot,$prioritas)
{
    $perkalian_matriks = $nilai_bobot*$prioritas;
    return $perkalian_matriks;
}

function consistency_measure($kriteria,$kode_kriteria)
{
    foreach ($kriteria as $row) {
        if ($kode_kriteria == $row['kode_kriteria']) {
            foreach ($row['nilai_bobot'] as $kode_pembanding => $bobot) {
                $prioritas = prioritas($kriteria,$kode_pembanding);
                $nilai[] = perkalian_matriks($bobot,$prioritas);
            }
            $nilai  = array_sum($nilai);
            $cm     = $nilai / prioritas($kriteria,$row['kode_kriteria']);
            $nilai  = null;
        }
    }
    return $cm;
}

function consistency_index($kriteria)
{
    $ci = (konsistensi_hirarki($kriteria)-5)/4;
    return $ci;
}

function consistency_ratio($kriteria)
{
    $cr = consistency_index($kriteria)/1.12;
    return $cr;
}

function konsistensi_hirarki($kriteria)
{
    $dkriteria = listkriteria();
    for ($i=0; $i < count($kriteria); $i++) { 
        $cm[] = consistency_measure($kriteria,$dkriteria[$i]);
    }
    $nilai = array_sum($cm)/5;
    return $nilai;
}


########################################################

########################################################
### WP #############

function vektor_s($nilai_bobot,$siswa)
{
    foreach ($nilai_bobot as $r) {
        $kode_kriteria = $r['kode_kriteria'];
        $nprioritas[$kode_kriteria] = prioritas($nilai_bobot,$kode_kriteria);
    }
    $jumbobot = 1;
    foreach ($siswa as $kode_kriteria => $nilai){
        $rnilai = array_sum($nilai)/count($nilai);
        $rbobot = pow($rnilai, $nprioritas[$kode_kriteria]);
        $jumbobot = $jumbobot * $rbobot;
    }
    return $jumbobot;
}

function vektor_v($vektor_s,$listbobot, $siswa, $nama_siswa)
{
    // get jumlah dari semua jurusan
    foreach ($listbobot as $row) {
        foreach ($row['nilai_bobot'] as $r) {
        $kode_kriteria = $r['kode_kriteria'];
        $nprioritas[$kode_kriteria] = prioritas($row['nilai_bobot'],$kode_kriteria);
        }

        $jumbobot = 1;
        foreach ($siswa as $row) {
            if ($nama_siswa == $row['nama_siswa']) {
                foreach ($row['nilai'] as $kode_kriteria => $nilai) {
                    $rnilai = array_sum($nilai)/count($nilai);
                    $rbobot = pow($rnilai, $nprioritas[$kode_kriteria]);
                    $jumbobot = $jumbobot * $rbobot;
                }
            }
        }
        $totalnilai[]   = $jumbobot;
    }

    $vektor_v = $vektor_s/array_sum($totalnilai);
    return $vektor_v;
}



############################


function listkriteria($value='')
{
    $kriteria = ['C01','C02','C03','C04','C05'];
    return $kriteria;
}
function get_kriteria_option($kriteria, $selected = 0){
    foreach($kriteria as $row){
    	$key = $row->kode_kriteria;
        if($key==$selected)
            $a.="<option value='$key' selected>$row->nama_kriteria</option>";
        else
            $a.="<option value='$key'>$row->nama_kriteria</option>";
    }
    return $a;
}


// kriteria

function getnamakriteria($value='')
{
	if (isset($_SESSION['nama_kriteria'])) {
		return $_SESSION['nama_kriteria'];
	}
}

function setnamakriteria($nama_kriteria)
{
	$_SESSION['nama_kriteria']	= $nama_kriteria;
}

function dropnamakriteria($value='')
{
	if (isset($_SESSION['nama_kriteria'])) {
		unset($_SESSION['nama_kriteria']);
	}
}

function bgbobot($kode_kriteria1,$kode_kriteria2)
{
    $bg = '';
    if ($kode_kriteria1 == $kode_kriteria2) {
        $bg = 'bg-danger';
    } elseif($kode_kriteria2 > $kode_kriteria1) {
        $bg = 'bg-info';
    }

    return $bg;
}