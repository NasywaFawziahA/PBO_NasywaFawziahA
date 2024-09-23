<?php
class perulangan
{

    public function loop()
    {
        $array = array('subang', 'bandung', 'jakarta', 'surabaya', 'yogyakarta');
        foreach ($array as $key) {
            echo $key . "<br/>";
        }
    }
}

$objekperulangan = new perulangan();
echo "nama-nama kota dipulai jawa : " . "<br/>";
echo $objekperulangan->loop() . "<br/>";
?>