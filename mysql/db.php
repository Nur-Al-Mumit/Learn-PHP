<?php
$servername = "localhost";
$username = "root";
$password = "myDB158370++-";
$dbname = "testDB";

/** Connect to MySQL **/

$first_conn = new mysqli($servername, $username, $password, $dbname);

if ($first_conn->connect_error) {
    die("failed" . $first_conn->connect_error);
}
echo "alhamdulillah connect <br>";

/** Create a MySQL Database **/

// $sql = "CREATE DATABASE testDB";
// if ($first_conn->query($sql) === true){
//     echo "db created";
// }else{
//     echo 'Error';
// }

/** CREATE TABLE **/

// $sql = "CREATE TABLE testData(
//     id  INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     age VARCHAR(30),
//     email VARCHAR(20)
// )";

// if ($first_conn->query($sql) === true) {
//     echo 'table created';
// } else {
//     echo $first_conn->error;
// }

/** MySQL Insert Data **/

$sql = "INSERT INTO testData (name,age,email)
VALUES ('ABDUL MUMIT', '21', 'NURALMUMIT@ROOTSOFTIT.COM')";

if($first_conn->query($sql) === true){
    echo "data inserted";
}else{
    echo $first_conn->error;
}

$first_conn->close();

