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
echo '<br> 01. array_change_key_case <br>';
/**
 * change the case of all keys in array 
 * it take's two perameters (array[the array to work on] and case[CASE_UPPER OR CASE_LOWER])
 * it's return an new array 
*/ 

$change_key_func = ['element_1' => 5, 'element_2' => 7];
echo "<pre>";
print_r(array_change_key_case($change_key_func, CASE_UPPER));
print_r(array_change_key_case($change_key_func, CASE_LOWER));
echo '</pre>';

/***************************/


echo '<br> 02. array_chunk <br>';
/**
 * this function split and array into chunks
 * it takes 3 parameters; working array, length [length of every chunk(last chunk may less then length)] and pereserve_keys witch is false by default if set true keys will be preserved. if false it will reindex the chunk numerically 
 * it return a multidimensional array with numerically indexed witch starting with zero 
*/

// $chunk_arr = ['element_1' => 5, 'element_2' => 7, ];
$chunk_arr = [5, 7, 8, 6, 4, 3];

echo "<pre>";
print_r(array_chunk($chunk_arr, 2));
echo '</pre>';



/***************************/


echo '<br> 03. array_chunk <br>';
/**
 * this take woring array, column_key and index_key
 * 
 */

$column_arr = [
    ['id' => 01, 'first_name' => 'first', 'last_name' => 'last'],
    ['id' => 02, 'first_name' => 'John', 'last_name' => 'Doe'],
    ['id' => 03, 'first_name' => 'Alice', 'last_name' => 'Johnson'],
    ['id' => 04, 'first_name' => 'Bob', 'last_name' => 'Smith'],
    ['id' => 05, 'first_name' => 'Eva', 'last_name' => 'Green'],
    ['id' => 06, 'first_name' => 'Michael', 'last_name' => 'Brown'],
];


echo "<pre>";
$first_name = array_column($column_arr, 'first_name', 'id');


print_r($first_name);
echo '</pre>';



/***************************/


echo '<br> 04. array_combine <br>';
/***/

$a = array('green', 'red', 'yellow', 'y');
$b = array('avocado', 'apple', 'banana', 'x');
$c = array_combine($a, $b);



echo "<pre>";
print_r($c);
echo '</pre>';


/***************************/


echo '<br> 05. array_conut_values <br>';
/***/

$conunt_val = [65, 65,48,68,64,54, 'fas', 'blue'];

echo "<pre>";
print_r(array_count_values($conunt_val));
echo '</pre>';


/***************************/


echo '<br> 06. array_conut_values <br>';
/***/

$conunt_val = [65, 65,48,68,64,54, 'fas', 'blue'];

echo "<pre>";
print_r(array_count_values($conunt_val));
echo '</pre>';

/***************************/


echo '<br> 07. array_diff_assoc <br>';
/**
 * for compare array and return the unique valuse from the array
*/

$diff_arr_1 = [1,3,5,7,9,11];
$diff_arr_2 = [1,2,4,6,8,10];
$diff_arr_3 = [0,2,5,6,8,11];
$diff_arr_4 = [0,2,5,6,9,11];


echo "<pre>";
print_r(array_diff_assoc($diff_arr_1, $diff_arr_2, $diff_arr_3, $diff_arr_4));
echo '</pre>';




/***************************/


echo '<br> 08. array_diff_key <br>';
/**
 * for compare array and return the unique key wrother than value from the array (opposite of array_diff_assoc)
*/

$diff_arr_1 = ['one' => 1, 'three' => 3, 'five' => 5, 'seven' => 7, 'nine' => 9, 'eleven' => 11];
$diff_arr_2 = ['one' => 1, 'two' => 2, 'four' => 4, 'six' => 6, 'eight' => 8, 'ten' => 10];
$diff_arr_3 = ['zero' => 0, 'two' => 2, 'five' => 5, 'six' => 6, 'eight' => 8, 'eleven' => 11];
$diff_arr_4 = ['zero' => 0, 'two' => 2, 'five' => 5, 'six' => 6, 'seven' => 7, 'eleven' => 11];



echo "<pre>";
print_r(array_diff_assoc($diff_arr_1, $diff_arr_2, $diff_arr_3, $diff_arr_4));
echo '</pre>';


/***************************/


echo '<br> 09. array_diff_uassoc <br>';
/**
 * for compare array and return the unique key wrother than value from the array (opposite of array_diff_assoc)
*/

$diff_arr_1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$diff_arr_2 = ["a" => "green", "yellow", "red"];



echo "<pre>";
print_r(array_diff_assoc($diff_arr_1, $diff_arr_2));
echo '<br>' . ' ';
print_r(array_diff_uassoc($diff_arr_1, $diff_arr_2));
echo '</pre>';








?>