<?php
class guru{
    var $nama_nama = array ("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class Murid {
    var$nama_siswa;
    var$NIS;
    var$kelas;
    var$alamat;
}

class kurikulum {
    var$tahun_akademik;
    var$sks_matkul;
}

class mobil {
    var$jumlahroda=4;
    var$warna="merah";
    var$bahanbakar="pertamax";
    var $harga="120000000";
    var $merek='A';

    Public function statusHarga()
    {
        if ($this->harga >50000000) $status ='mahal';
        return $status;
    }
}

$ObjekBMW = new mobil; //ini adalah objek BMW dari class mobil
$ObjekTesla =new mobil; //ini adalah objek Tesla dari class mobil
$ObjekAudi = new mobil; //ini adalah objek Audi dari class mobil

?>