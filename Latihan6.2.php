<?php
class perulangan
{

    public function loop()
    {
        for ($i = 15; $i > 0; $i--) {
            echo $i;
            echo "<br/>";
        }
    }
}
$objekperulangan = new perulangan();
echo "jenis perulangan lainnya " . " <br/>";
echo $objekperulangan->loop() . "<br/>";

?>