<?php

$servername = "localhost";
$username = "arslan";
$password = "123456789";
$dbname="test";

// Create connection
$con = new mysqli($servername, $username, $password,$dbname );
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>