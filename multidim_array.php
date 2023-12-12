<?php 

echo '<h1 style="text-align: center"> Multidimensional Array </h1> <br/>';

//example of multidimensional array
$employees = [
    ["name" => "sabbir ahmed", "age" => 27],
    ["name" => "abdul mumit", "age" => 21],
    ["name" => "shohan chowdhury", "age" => 25],
];


// print multidimensional array with nested foreach loop 

foreach($employees as $employee){
    foreach ($employee as $k => $info){
        echo $k . '<br/>';
        echo $info . '<br/>';
    }
    echo '<br/>';
}

?>