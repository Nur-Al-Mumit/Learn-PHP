<?php

echo '<h1 style="text-align: center"> Global and Local Variable </h1> <br/>';


$golobal = 10;
$global = 20;

function printGlobal()
{
    // global $golobal, $global;
    global $golobal;
    // echo $golobal . ' inside of fucntion ' . $global . '<br/>';
    $global = 66;
    $golobal = 55;
    $x = 10;
    echo $golobal . 'inside of funciton <br/>';
}

printGlobal();
echo $golobal . 'out side of function' . '<br/>';
echo $golobal . ' out side of function ' . $global . '<br/>';
