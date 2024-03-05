<?php
$arry_col = [
    ['id' => 01, 'first_name' => 'first', 'last_name' => 'last'],
    ['id' => 02, 'first_name' => 'John', 'last_name' => 'Doe'],
    ['id' => 03, 'first_name' => 'Alice', 'last_name' => 'Johnson'],
    ['id' => 04, 'first_name' => 'Bob', 'last_name' => 'Smith'],
    ['id' => 05, 'first_name' => 'Eva', 'last_name' => 'Green'],
    ['id' => 06, 'first_name' => 'Michael', 'last_name' => 'Brown'],
];

// print_r(array_column($arry_col, "first_name", "last_name"));

class User
{
    public $username;

    public function __construct($usern)
    {
        $this->username = $usern;
    }
}

$users = [
    new User('user_1'),
    new User('user_2'),
    new User('user_3'),
];


echo "<pre>";

print_r(array_column($users, "username"));
echo '</pre>';
