<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <main>
        <header>
            <h1 style="text-align: center"> Array in PHP </h1>
        </header>
        <section>
            <h2>What is an array?</h2>
            <p>In PHP array is a collection of data values. It allow to store multiple data items in a single structure inside a single variable.
                it can store any type of data. php array can be heterogenetiy that means inside of same array we can store different type of data at the same time.

            </p>
            <h2>Types of arrays:</h2>
            <ul>
                <li>Indexed Array: we accessed by numerical index.</li>
                <li>Associative Array: we can accessed by string or numbers key</li>
                <li>Multidimensional Array: witch array that contain other array</li>
            </ul>
            <h2>How does it work?</h2>
            <p>Array allocation in memory is contiguous memory locations, where data elements are stored one after another without any space or any gaps.</p>

        </section>
    </main>
</body>
</html>


<?php 
//example of index array 
/** we can access with index */
$arr = [12, 15, 9, 6, 74, 87, 30, 40]; // it's consider as best practice 
$arr_2 = array(48, 35, 46, 46, 74, 8, 30, 40);

var_dump($arr);
echo "<br/>";
echo $arr_2;


//example of associative array
/** we can access with key */
$asso_arr = ['num1' => 10, 'num2' => 22, 'num3' => 30.30];

var_dump($asso_arr);
echo $asso_arr['num3'];

echo "<br/>";


//example of multidimensional array
$employees = [
    ["name" => "sabbir ahmed", "age" => 27],
    ["name" => "abdul mumit", "age" => 21],
    ["name" => "shohan chowdhury", "age" => 25],
];

var_dump($employees);
echo $employees[1]["name"];

echo "<br/>";

// example of heterogenetiy array
$data = [
    123,           // int
    "hello",       // str
    3.14,          // float
    new stdClass,  // obj
    [1, 2, 3]      // array
];


?>