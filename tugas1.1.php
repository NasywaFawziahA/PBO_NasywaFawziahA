<?php
class laptop {
    //merek laptop
}
$objekAsus = new laptop;
?>


<?php
class laptop {
        //ini adalah atribut/properties dari laptop
        var $warna= "Silver";
        var $harga= "10000000";
        var $merek= 'Asus';
        //deklarasi method
        public function statusHarga()
        {
            if ($this ->harga>10000000)$status ='Mahal';
            else $status = 'Murah';
            return $status;
        }
    }
