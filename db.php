<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "test";

//create connection
$con = mysqli_connect($serverName, $userName, $password, $dbName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

