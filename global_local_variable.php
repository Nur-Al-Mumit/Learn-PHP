<?php 

echo '<h1 style="text-align: center"> Global and Local Variable </h1> <br/>';


$golobal = 10;
$global = 20;

function printGlobal(){
    global $golobal, $global;
    echo $golobal. ' inside of fucntion ' . $global . '<br/>';
    $global = 66;
    $golobal = 55;
    $x = 10;
}

printGlobal();
// echo $golobal . 'out side of function';
// echo $golobal. ' out side of function ' . $global . '<br/>';


?>