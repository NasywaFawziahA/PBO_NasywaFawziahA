<?php
function myTest(){
    static $X = 0;
    echo $X;
    $X++;
}


myTest();
myTest();
myTest();
?>