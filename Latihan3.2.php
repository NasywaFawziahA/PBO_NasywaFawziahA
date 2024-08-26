<?php
class kendaraan{
    var $jumlahroda=4;
    var $warna;
    var $bahanbakar="premium";
    var $harga=100000000;
    var $merek;
    var $tahunpembuatan=2004;

    //objek1
    //deklarasi objek dan instalasi objek (berada diluar class)
    $objekkendaraan1 = new kendaraan();
    //setting properties
    $objekkendaraan1 ->harga=100000000;
    $objekkendaraan1->tahunpembuatan=1999;
    //instalasi objek (pemanggilan method/function)
    echo"status hartga:".$objekkendaraan->statusharga();

    //objek2
    //deklarasi objek dan instalisasi objek(berada diluar class)
    $objekkendaraan2 = new kendaran();
    //setting properties
    $objekkendaraan2->bahanbakar="pertamax";
    $objekkendaraan2->tahunpembuatan = 1999;
    //instalasi objek(pemanggilan method/function)
    echo "<br">;
    echo"statusBBM:".$objekkendaraan2->dapatsubsidi();
    echo"<br>";
    echo"harga bekas:".$objekkendaraan2->hargasecondkendaraan();
}