<?php
$X =5;
$Y =10;

Function myTest(){
    global $X, $y;
    $y = $x + $y;
}
myTest();
echo $y;
?>