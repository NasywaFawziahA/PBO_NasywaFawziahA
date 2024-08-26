<?php
class kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;
    function statusharga()
    {
        if ($this->harga > 50000000)
            $status = 'mahal';
        else
            $status = 'murah';
        return $status;
    }
}
$objekkendaraan1 = new kendaraan();
$objekkendaraan1->merek = "yamaha MIO";//set properti
$objekkendaraan1->harga = "10000000";//set properti

$objekkendaraan2 = new kendaraan();
$objekkendaraan2->merek = "toyota avanza";//set properti
$objekkendaraan2->harga = "100000000";//set properti

$objekkendaraan3 = new kendaraan();
$objekkendaraan3->merek = "yamaha AEROX";//set properti
$objekkendaraan3->harga = "600000009";//set properti

echo "merek: " . $objekkendaraan2->merek;//merek:toyota avanza
echo "<br>";
echo "nominal harga:" . $objekkendaraan2->harga;//nominal harga : 100000000
echo "<br>";
echo "status harga kendaraan : " . $objekkendaraan2->statusharga();//status harga kendaraan : mahal
?>