<?php 
echo '<h1 style="text-align: center"> Array in PHP </h1> <br/>';

//example of index array 
/** we can access with index */
$arr = [12, 15, 9, 6, 74, 87, 30, 40]; // it's consider as best practice 
$arr_2 = array(48, 35, 46, 46, 74, 8, 30, 40);

var_dump($arr);
echo "<br/>";
echo $arr_2;


//example of associative array
/** we can access with key */
$asso_arr = ['num1'=> 10, 'num2' => 22, 'num3'=> 30.30];

var_dump($asso_arr);
echo $asso_arr['num3'];
?>