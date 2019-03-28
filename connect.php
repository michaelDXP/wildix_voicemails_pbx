<?php
$servername = "your_mysql_database_address";
$username = "your_database_username";
$password = "your_database_password";
$database = "your_cdr_database_name";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: Check wallboard power or internet connection");
 
} 
?>