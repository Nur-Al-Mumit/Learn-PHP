<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>key cast and overwrite</title>
</head>
<body>
    <h1 style='text-align:center' >Array Key's Type Casting and Overwriting</h1>
    <h2>key casts will occur: </h2>
    <ul>
        <li>if valid decimal integer inside "" then it will cast in valid decimal integer</li>
        <li>boolval also cast into integer, flase cast 0 and true cast 1 as key </li>
        <li>null cast into "" empty string</li>
        <li>floatval cast into integer the fraction part will trim</li>
    </ul>

    <pre>
    $array = array(
    1   => "a",
    "1"  => "b",
    1.9  => "c",
    true => "d",
    );
    </pre>
    <?php 
    $array = array(
        1   => "a",
        "1"  => "b",
        1.9  => "c",
        true => "d",
    );
    echo "<pre>";
    print_r($array);
    echo"</pre>";
    echo "<br>";
    ?>

    <pre>
    $array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);
    </pre>
    <?php 
    $array = array(
        1    => 'a',
        '1'  => 'b', // the value "a" will be overwritten by "b"
        1.5  => 'c', // the value "b" will be overwritten by "c"
        -1 => 'd',
        '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
        '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
        true => 'g', // the value "c" will be overwritten by "g"
        false => 'h',
        '' => 'i',
        null => 'j', // the value "i" will be overwritten by "j"
        'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
        2 => 'l', // the value "k" will be overwritten by "l"
    );
    
    echo "<pre>";
    print_r($array);
    echo"</pre>";
    echo "<br>";
    ?>
</body>
</html>


<?php



?>