<?php 

echo '<h1 style="text-align: center"> continue and break statement </h1> <br/>';


/**
 * continue, skip exsicute the after code
 * break, exits the loop 
 */


/**
 * porblem 1:
 * sikp the even numbers
 */

 for ($i = 0; $i <= 10; $i++){
    if($i % 2 ==0){
        continue;
    }
    echo $i. "<br/>";
 }

/**
 * porblem 2:
 * close the loops when got desire number
 */

 for ($i = 0; $i <= 10; $i++){
    if($i == 7){
        break;
    }
    echo $i;
 }

echo "<br/>";
//  goto statement 

for ($i = 0; $i <= 10; $i++){
    if($i == 5){
        goto gretter_than_5;
    }
    echo $i;
 }

 gretter_than_5:
 echo 'this is gretter_than_5';

?>
