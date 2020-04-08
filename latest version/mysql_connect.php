<?php

$host = "localhost";
$user = "root";
$password = "admin";
$database = "hr_schema";
$port = "3306";
$socket = "MySQL";

// Create connection
$connection = mysqli_connect(
    $host,
    $user,
    $password,
    $database,
    $port,
    $socket);

// Check connection
//if (!$connection) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connection Successful", "<br/>";

// $value_to_insert = mysqli_real_escape_string($connection,$_POST['name']);
// $sql = "INSERT INTO $table (name) VALUES ('$value_to_insert')";
// if (mysqli_query($connection, $sql)) {
//     echo "New record created successfully", "<br/>";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_connect_error();
// }

//sleep(3);

//mysqli_close($connection);
