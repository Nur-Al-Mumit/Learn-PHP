<?php

// php variables

$var = 'variable';
$rain = false;
$num = 555;
$num_2 = 555.55;
$arr = array('x', 'y', 'z');
// $x = null;

// check variable's type and value
// var_dump($var);
// var_dump($rain);
// var_dump($num);
// var_dump($num_2);
// var_dump($arr);
// var_dump($x);


// constant variables in php
/*
syntax: define(variable_name, value, case_insensitive)
1.don't need $ signe berfore variable name
2.by default case_insensitive is false. if false, i have to use as same as variable name declared, when true i can chaged the varibale name's case
3.constant variables are global
*/
define('chmod', 777, true);
// echo '<br/>', chmod;
// echo '<br/>', chmod;
// echo '<br/>', chmod;


// Arithmetic Oparetors

$num_x = 18;
$num_y = 7;

// echo $num_x + $num_y, '<br/>';
// echo $num_x - $num_y, '<br/>';
// echo $num_x * $num_y, '<br/>';
// echo $num_x / $num_y, '<br/>';
// echo $num_x % $num_y, '<br/>';
// echo $num_x ** $num_y,'<br/>';


/* 
Comparison operators
excp. Spaceship <=>
it reurns 1 if a > b, 0 a == b and -1 a < b

and not equal has two signs
1. !=
2. <>

*/

// $a = 10;
// $b = 11 ;
// echo $a <=> $b;  



/*
Logical Operators 

and (&&), or (||), not (!), exclusive OR (XOR)
*/



/*
if Statement  in php 
two type of syntax

if(){};
if(): endif;
*/

if ($a > $b){
    echo 'a is greater than b';
}else{
    echo 'b is greater than a';
};

// exclusive OR (XOR) 

if(true xor true){
    echo 'val: true, true';
}elseif(true xor false){
    echo 'val: true, false';
}elseif(false xor true){
    echo 'val: false, true';
}elseif(false xor false){
    echo 'val: false, false';
}


// (.) this is cocatinaiton sing

$x = 0;
while ($x <=10){
    echo 'alhamdulillah <br/>';
    $x++;
}








?>
