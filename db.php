<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
$host = getenv('host');
$port = getenv('port');
$username = getenv('username');
$password = getenv('password');
$database = getenv('database');
$con = mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
