<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

$hostname = "localhost";
$user = "root";
$password = "";
// $database = "shopping";
$database = "finalyear";
// Create connection
$con = mysqli_connect($hostname, $user, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";
?>
