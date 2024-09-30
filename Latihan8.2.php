<?php
class segitiga
{
    public $tinggi;
    public $lebar;

    function __construct($tinggi, $lebar)
    {
        $this->tinggi = $tinggi;
        $this->lebar = $lebar;

    }

    function luas()
    {
        $luas = $this->tinggi * $this->lebar / 2;
        echo "tinggi segitiga = " . $this->tinggi . "<br/>";
        echo "lebar segitiga =" . $this->lebar . "<br/>";
        echo "<br/><b>luas lingkaran =$luas<b/>";
    }
}
$segitiga = new segitiga(200, 500);
$segitiga->luas();
?>