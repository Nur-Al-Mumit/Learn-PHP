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
            <h1 style="text-align:center">Array Methods and Array Funciton</h1>
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
                    </ul>
                </li>
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
print_r(array_chunk($chunk_arr, 2, false));
echo '</pre>';



/***************************/


echo '<br> 03. array_column <br>';
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

$conunt_val = [65, 65, 48, 68, 64, 54, 'fas', 'blue'];

echo "<pre>";
print_r(array_count_values($conunt_val));
echo '</pre>';


/***************************/


echo '<br> 06. array_conut_values <br>';
/***/

$conunt_val = [65, 65, 48, 68, 64, 54, 'fas', 'blue'];

echo "<pre>";
print_r(array_count_values($conunt_val));
echo '</pre>';

/***************************/


echo '<br> 07. array_diff_assoc <br>';
/**
 * for compare array and return the unique valuse from the array
 */

$diff_arr_1 = [1, 3, 5, 7, 9, 11];
$diff_arr_2 = [1, 2, 4, 6, 8, 10];
$diff_arr_3 = [0, 2, 5, 6, 8, 11];
$diff_arr_4 = [0, 2, 5, 6, 9, 11];

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);


echo "<pre>";
print_r(array_diff_assoc($diff_arr_1, $diff_arr_2, $diff_arr_3, $diff_arr_4));
print_r($result);
echo '</pre>';




/***************************/


echo '<br> 08. array_diff_key <br>';
/**
 * for compare array and return the unique key wrother than value from the *array (opposite of array_diff_assoc)
 */

$diff_arr_1 = ['one' => 1, 'three' => 3, 'five' => 5, 'seven' => 7, 'nine' => 9, 'eleven' => 11];
$diff_arr_2 = ['one' => 1, 'two' => 2, 'four' => 4, 'six' => 6, 'eight' => 8, 'ten' => 10];
$diff_arr_3 = ['zero' => 0, 'three' => 2, 'five' => 5, 'six' => 6, 'eight' => 8, 'eleven' => 11];
$diff_arr_4 = ['zero' => 0, 'two' => 2, 'five' => 5, 'six' => 6, 'seven' => 7, 'eleven' => 11];



echo "<pre>";
print_r(array_diff_key($diff_arr_1, $diff_arr_2, $diff_arr_3, $diff_arr_4));
echo '</pre>';


/***************************/


echo '<br> 09. array_diff_uassoc <br>';
/**
 * for compare array and return the unique key wrother than value from the array (opposite of array_diff_assoc)
 */

$diff_arr_1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$diff_arr_2 = ["a" => "green", "yellow", "red"];

function diff($x, $y)
{
    // echo "valX : $x     valY : $y  <br>";
    // echo "valY : $y <br>";
    return $x >= $y;
}

echo "<pre>";
echo '<br>' . ' ';
// print_r(array_diff_assoc($diff_arr_1, $diff_arr_2));
// print_r(array_diff_uassoc($diff_arr_1, $diff_arr_2, 'diff'));

// $array1 = [1, 2, 3, 4];
// $array2 = [2, 3, 5];
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['a' => 4, 'd' => 3];
// print_r(array_diff_assoc($array1, $array2));
// print_r(array_diff($array1, $array2));
// print_r(array_diff_key($array1, $array2));
echo '</pre>';



echo '<br> 10. array_fill_keys <br>';
/**
 * for fill value in specifying keys
 * take two peramiter 1st is array witch will be the key of new value
 * second one is the value witch want to set for every key
 */

$keys = ['foo', 5, 10, 'bar'];

$new_arr = array_fill_keys($keys, 'newval');

echo "<pre>";
echo '<br>' . ' ';
print_r($new_arr);
echo '</pre>';


echo '<br> 10. array_fill <br>';
/**
 * for fill value in an array
 * take three peramiter 1st is start_index witch will be the starting index
 * second one is count number of element to insert. count >= 0 ;
 * last one is the value witch use to filling;
 */

$x = array_fill(-3, 5, 'alhamdulillah');

echo "<pre>";
echo '<br>' . ' ';
print_r($x);
echo '</pre>';



echo '<br> 11. in_array <br>';
/**
 * for checking a value is exists or not in an array
 * takes 3 parameters
 * 1. needle: the search value
 * 2. haystack: the array 
 * 3. strict: control comparison if true then it will also check the type of needle and by default it false;
 * 
 */

$find_val = [65, 65, 48, 68, 64, 54];

if (in_array('65', $find_val)) {
    echo '<br>' . ' 65 founded';
}
if (!(in_array('65', $find_val, true))) {
    echo '<br>' . '65 type is not same';
}
echo '<br>';




echo '<br> 12. array_key_exists <br>';

/**
 * 
 */

$search_arr = ['one' => 1, 'three' => 3, 5 => 5, '7' => 7, 'nine' => 9];

if (array_key_exists('5', $search_arr)) {
    echo "<br> The element is in the array";
}
if (key_exists('three', $search_arr)){
    echo "<br> The element is in the array (in updated php versoin)";
}
    // echo "<pre>";
    // print_r(in_array('54', $find_val));
    // echo '</pre>';



    echo '<br> 13. array_map <br>';

/**
 *
 *
 */

function map_func($val)
{
    return $val * 2;
}

$map_arr = ['one' => 1, 'three' => 3, 5 => 5, '7' => 7, 'nine' => 9];


$a = [1, 2, 3, 4, 5];
$b = ['one', 'two', 'three', 'four', 'five'];
// $c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

// $d = array_map(null, $a, $b, $c);
$d = array_map(null, $a, $b);

echo "<pre>";
// print_r($map_arr);
// print_r(array_map('map_func', $map_arr));
print_r(array_map('map_func', range(3, 6))); //Performing a zip operation
// print_r(array_map(fn($val)=> $val * 2, $map_arr));
// print_r($d);
echo '</pre>';


echo '<br> 14. array_merge <br>';

/**
 * 
 * 
 * 
 * 
 */

// $mer_arr   = ['one' => 1, 'three' => 3, 5 => 5, '7' => 7, 'nine' => 9];
// $mer_arr_2 = ['one' => 1, 'three' => 3, 5 => 9, '7' => 17, 'nine' => 10];
$mer_arr   = ['one' => 1, 'three' => 3];
$mer_arr_2 = ['five' => 5, 'nine' => 9];
// $mer_arr   = [1 => 1, 3 => 3];
// $mer_arr_2 = [5 => 5, 9 => 9];


echo "<pre>";
print_r(array_merge($mer_arr, $mer_arr_2));
// print_r($mer_arr + $mer_arr_2);
echo '</pre>';




echo '<br> 15. array_push <br>';

/**
 * 
 */

// $push_arr   = ['one', 'three'];
$push_arr   = ['one' => 1, 'three' => 3];
$push_arr_2 = ['five', 'nine'];
// array_push($push_arr, 'five', 'nine');
// array_push($push_arr, $push_arr_2);
// array_push($push_arr, 'one', 'three');
array_push($push_arr, $push_arr_2);

echo "<pre>";
print_r($push_arr);
echo '</pre>';


echo '<br> 16. array_replace <br>';

/**
 * 
 */

$base = ['one', 'two', 'three', 'four'];
$replace_arr   = [1 =>'five', 10 => 'nine'];



echo "<pre>";
print_r(array_replace($base, $replace_arr));
echo '</pre>';


echo '<br> 17. array_reverse <br>';

/**
 * 
 */

$base = ['one', 'two', 'three', 'four'];
// $base = ['one', 'two'=>2, 'three', 'four'];
// $base = ['one'=>1, 'two'=>2, 'three'=>3, 'four'=>4];



echo "<pre>";
print_r(array_reverse($base, true));
// print_r(array_reverse($base));
echo '</pre>';


echo '<br> 18. array_slice <br>';

/**
 * 
 */

$slice_arr = ["a", "b", "c", "d", "e"];
// $base = ['one', 'two'=>2, 'three', 'four'];
// $base = ['one'=>1, 'two'=>2, 'three'=>3, 'four'=>4];



echo "<pre>";
print_r(array_slice($slice_arr, 2));
print_r(array_slice($slice_arr, -2));
print_r(array_slice($slice_arr, 2, 1));
print_r(array_slice($slice_arr, -2, 1));
print_r(array_slice($slice_arr, 2, 3, true));
echo '</pre>';



echo '<br> 19. array_splice <br>';

/**
 *
 * array_splice(
 *     array &$array,
 *     int $offset,
 *     ?int $length = null,
 *     mixed $replacement = []
 * ): array 
 */

$splice_arr = ["a", "b", "c", "d", "e"];
// $base = ['one', 'two'=>2, 'three', 'four'];
// $base = ['one'=>1, 'two'=>2, 'three'=>3, 'four'=>4];



echo "<pre>";
// print_r(array_splice($splice_arr, 2));
print_r($splice_arr);
// print_r(array_splice($splice_arr, 3));
// print_r(array_splice($splice_arr, 0, 1));
// print_r(array_splice($splice_arr, 2, 0));
// print_r(array_splice($splice_arr, 1, 2));
// print_r(array_splice($splice_arr, 4, -1));
print_r(array_splice($splice_arr, 3, -1, ["black", 'red']));
print_r($splice_arr);
// print_r(array_splice($splice_arr, 2, 1, ['x', 'y']));
// print_r(array_slice($slice_arr, 2, 3, true));
echo '</pre>';




echo '<br> 20. array_sum <br>';

/**
 *
 */

$sum_arr = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];


echo "<pre>";
// print_r($splice_arr);
echo 'sum: ' . array_sum($sum_arr);
echo '</pre>';


echo '<br> 21. array_unique <br>';

/**
 * it has a second parameter flags it is optional
 */

$unique_arr = ['one' => 1, 'three' => 3, 'two' => 2, 'three' => 3, 'four' => 4, 5, 5, 6, 6, 9, 8, 7, 9, 7, 8, 9, 7, 8];
$unique_arr_2 = ['5', '5.0', 5, '6', 6, 6.0, '6.0', '6', 9, 8, '7', '9', 7, 8, 9, 7, '8.8'];


echo "<pre>";
// print_r(array_unique($unique_arr));
// print_r(array_unique($unique_arr_2));
$res = array_unique($unique_arr_2);
// print_r(array_values($res));
print_r($res);
echo '</pre>';



echo '<br> 22. array_unshift <br>';

/**
 * fore adding element to the beginning of an array 
 */

$foods = [
    'apples' => [
        'McIntosh' => 'red',
        'Granny Smith' => 'green',
    ],
    'oranges' => [
        'Navel' => 'orange',
        'Valencia' => 'orange',
    ],
];

$vegetables = [
    'lettuce' => [
        'Iceberg' => 'green',
        'Butterhead' => 'green',
    ],
    'carrots' => [
        'Deep Purple Hybrid' => 'purple',
        'Imperator' => 'orange',
    ],
    'cucumber' => [
        'Kirby' => 'green',
        'Gherkin' => 'green',
    ],
    'cumber' => [
        'Kirby' => 'green',
        'Gherkin' => 'green',
    ],
];

echo "<pre>";
$res = array_unshift($foods, $vegetables);
print_r($res);
print_r($foods);
echo '</pre>';


echo '<br> 23. array_flip <br>';

/**
 * 
 */

$flip_arr  = ['one' => 1, 'three' => 3, 'two' => 2, 'three' => 3, 'four' => 4];


$flip_res = array_flip($flip_arr);

echo "<pre>";
print_r($flip_arr);
print_r($flip_res);
echo '</pre>';









?>