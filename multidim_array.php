<?php 

echo '<h1 style="text-align: center"> Multidimensional Array </h1> <br/>';

//example of multidimensional associative array
$employees = [
    ["name" => "sabbir ahmed", "age" => 27],
    ["name" => "abdul mumit", "age" => 21],
    ["name" => "shohan chowdhury", "age" => 25],
    ["name" => "abdul jalil chowdhury", "age" => 30],
];


// print multidimensional array with nested foreach loop 

foreach($employees as $employee){
    foreach ($employee as $k => $info){
        echo $k . '<br/>';
        echo $info . '<br/>';
    }
    echo '<br/>';
}


echo "<table>";
foreach($employees as $employee){
    // print_r($employee);
    echo "<tr>";
    foreach($employee as $key => $info){
        echo "<td>$key</td>";
        echo "<td>$info</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";


$arrays = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15],
    [16, 17, 18, 19, 20],
    [21, 22, 23, 24, 25]
];


$total_row = 0;

foreach($arrays as $array){
    foreach($array as $num){
        $total_row += $num;
        echo $num . ' ';
    }
    echo "<br>";
    echo 'row total : ' . $total_row . "<br>";
    $total_row = 0;
}

echo "<br>";


$total_col = 0;

foreach($arrays as $key => $array){
    foreach($array as $x => $num){
        $total_col += $arrays[$x][$key];
    }
    echo "<br>" . "total_col : " . $total_col;
    $total_col = 0;
}

// for($i = 0; $i < count($arrays); $i++){
//     for($j = 0; $j < count($arrays); $j++){
//         echo ($arrays[$j][$i]);
//         echo "<br>";
//     }
//     echo "<br>";
// }


?>