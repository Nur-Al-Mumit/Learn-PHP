<?php 

echo "<h1> PHP LOOPS </h1>";

$loops = array('while', 'do/while', 'for', 'forEach');

echo '<h3> While loop <br/> </h3>';
$i = 0;
while($i <= count($loops)){
    echo $loops[$i] . '<br/>';
    $i++;
};


echo '<h3> Do/While loop </h3> <br/>';
echo "do{
    echo '\$loops[\$i]' . '<br/>';
    '\$i++';
}while('\$i' <= count(\$loops));
<br/> <br/> ";
$i = 0;
do{
    echo $loops[$i]. '<br/>';
    $i++;
}while($i <= count($loops));


echo '<h3>For Loop</h3>';

for($i = 0; $i <= count($loops); $i++){
    echo $loops[$i]. '<br/>';
}

// functions

function sum($x, $y){
    echo $x + $y;
}
echo sum(4,5);

// function mi

?>