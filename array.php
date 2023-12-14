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
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br/>";
// echo $arr_2;


//example of associative array
/** we can access with key */
$asso_arr = ['num1' => 10, 'num2' => 22, 'num3' => 30.30];
echo "<pre>";
print_r($asso_arr);
echo "</pre>";
echo $asso_arr['num3'];

echo "<br/>";


echo "example of multidimensional array <br/>";
$employees = [
    ["name" => "sabbir ahmed", "age" => 27],
    ["name" => "abdul mumit", "age" => 21],
    ["name" => "shohan chowdhury", "age" => 25],
];

echo "<pre>";
echo $employees[1]["name"];
print_r($employees);
echo "</pre>";

echo "<br/>";

echo "example of heterogenetiy array <br/>";
$data = [
    123,           // int
    "hello",       // str
    3.14,          // float
    new stdClass,  // obj
    [1, 2, 3]      // array
];

echo "<pre>";
print_r($data);
echo "</pre>";

echo "<br/>";

echo "<div>";

$arr = array(5 => 1, 12 => 2);
echo '$arr = array(5 => 1, 12 => 2) <br>';

$arr[] = 56;    
echo "\$arr[] = 56;    
<br> This is the same as \$arr[13] = 56;
<br> at this point of the script";

echo "<pre>";
print_r($arr);
echo"</pre>";
echo "<br>";
echo "</div>";


echo '$arr["x"] = 42;
 <br> This adds a new element to
 <br> the array with key "x"';

$arr["x"] = 42;
 // This adds a new element to
 // the array with key "x"

 echo "<pre>";
var_dump($arr);
echo"</pre>";
echo "<br>";


                
echo "unset(\$arr[5]); // This removes the element from the array";
unset($arr[5]); // This removes the element from the array
echo "<pre>";
var_dump($arr);
echo"</pre>";
echo "<br>";

echo "unset(\$arr);    // This deletes the whole array";
unset($arr);    // This deletes the whole array
echo "<pre>";
var_dump($arr);
echo"</pre>";
echo "<br>";



echo ' Create a simple array.';
$array = array(1, 2, 3, 4, 5);
echo "<pre>";
print_r($array);
echo"</pre>";
echo "<br>";

echo "Now delete every item, but leave the array itself intact:";
echo "<pre>foreach (\$array as \$i => \$value) {
    unset(\$array[\$i]);
}</pre>";
foreach ($array as $i => $value) {
    unset($array[$i]);
}
echo "<pre>";
print_r($array);
echo"</pre>";
echo "<br>";



echo "Append an item (note that the new key is 5, instead of 0). <br>";
echo "\$array[] = 6 <br>";
$array[] = 6;

echo "<pre>";
print_r($array);
echo"</pre>";
echo "<br>";


echo " Re-index:";

echo "<pre>\$array = array_values(\$array);
\$array[] = 7;</pre>";

$array = array_values($array);
$array[] = 7;

echo "<pre>";
print_r($array);
echo"</pre>";
echo "<br>";


?>