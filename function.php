<?php

echo '<h1 style="text-align: center"> Function in php </h1> <br/>';

/**
 * function are used for:
 * 1. code reusability: for use same blocks of code multiple times
 * 2. for make code modular: we can break down our code into smaller bolcks
 * 3. Abstraction: for hide implementation logics, for make our code more concise
 * 
 */

 function sum(){
    echo 'this is the sum function';
 }

 //function with peramiter
 /**
  * we pass parameters for:
  * 1. provide data
  * 2. for Reusability
  */
//  we can set default value of peramitter
function sumWithInputs($num1 = 5, $num2 = 10){
    echo 'this are functions peramiter'. $num1 . ' ' . $num2 . "<br/>";
 }

 echo sumWithInputs();

function totalSum($num1 = 5, $num2 = 10){
    $result = $num1 + $num2;
    echo 'Total'. $result . "<br/>";
 };

 echo totalSum() . "<br/>";

 //  we can also return a value from function,for resive the return value we need to stor function in a variable. and the function will be anonimous function


$total = function($num1 = 5, $num2 = 10){
    $result = $num1 + $num2;
    // echo 'Total'. $result;
    return $result;
};

echo $total(5,5);


// recursive functions


?>