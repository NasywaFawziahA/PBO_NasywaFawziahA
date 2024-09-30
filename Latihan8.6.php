<?php
class manusia
{
    //properties (ancapsulation)
    public $nama = "ardi";
    var $kelas = "si2";

    //method manusia
    function tampilkan_nama()
    {
        return $this->nama;
    }
    public function tampilkan_kelas()
    {
        return $this->kelas;
    }
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo "nama:" . $manusia->tampilkan_nama() . "<br/>";
echo "kelas:" . $manusia->tampilkan_kelas();
?>