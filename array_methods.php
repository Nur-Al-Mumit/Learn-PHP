<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <main>
        <section>
            <h1 style="text-align:center" >Array Methods and Array Funciton</h1>
            <h2>Is array methods and array funciton is same ? No, Here's a deeper dive</h2>
            <h3>Array Funciton: </h3>
            <ul>
                <li>This oparate on the entire array and return a new array based on the applied oparation on it</li>
                <li>the original array remains untouched</li>
                <li>many functions work with any iterable data</li>
                <li>examples: <ul>
                    <li>array_map</li>
                    <li>array_filter</li>
                    <li>array_reduce, and more....</li>
                </ul></li>
            </ul>
            <h3>Array Methods: </h3>
            <ul>
                <li>it's operate directly on the original array</li>

                <li>can't directly work with other iterable </li>
                <li>can use (=>) arrow notation for ArrayObject it provides object oriented way to work array</li>

            </ul>
            <div>

            </div>
        </section>
    </main>
</body>
</html>



<?php 
// echo '<h1 style="text-align: center"> Array Methods </h1> <br/>';

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);

?>