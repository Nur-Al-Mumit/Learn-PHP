<?php 

$employees = [
    ["name" => "sabbir ahmed", "age" => 27],
    ["name" => "abdul mumit", "age" => 21],
    ["name" => "shohan chowdhury", "age" => 25],
];


foreach ($employees as list("name" => $name, "age" => $age )){
    echo $name . '<br>';
    echo $age . '<br>';
}


echo '<br>';


$employees = [
    ["sabbir ahmed",27],
    ["abdul mumit",21],
    ["shohan chowdhury",25],
    ["abdul jalil chowdhury", 30],
];

foreach ($employees as list($name, $age)){
    echo $name . "<br>";
    echo $age . "<br>";
}

?>