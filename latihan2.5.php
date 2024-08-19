<?php
$X = 5;
$y = 10;

function myTest(){
    $GLOBALS['y'] = $GLOBALS['X'] + $GLOBALS['Y'];
}

myTest();
echo $y;
?>