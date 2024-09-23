<?php
class perulangan
{

    public function loop()
    {
        $i = 0;
        do {
            $i++;
            echo $i . '<br/>';
        }
        while ($i <= 9);
    }
}

$objekperulangan = new perulangan();
echo $objekperulangan->loop() . "<br/>";
?>