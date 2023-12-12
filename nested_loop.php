<?php 
echo '<h1 style="text-align: center"> Nested Loops Exercise </h1> <br/>';

//loop inside loop;


for ($i = 0; $i <= 5; $i++){
    // echo $i;
    for($j = 1; $j <= $i; $j++){
        echo $j;
    }
    echo "<br/>";
}

echo "<br/>";


for ($i = 1; $i <= 100; $i = $i + 10) {
    for ($j = $i; $j < $i + 10; $j++ ){
        echo $j;
    }
    // for ($j = $i; $j <= $i + 10; $j++) {
    //     echo $j;
    // }
    echo "<br/>";
}





?>