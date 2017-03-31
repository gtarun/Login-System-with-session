<?php

$host = "vp2016.cmxqtqdqyohf.us-east-1.rds.amazonaws.com";
$port = "3306";
$username = "karan";
$password = "karan_ums";
$database = "karan_ums";

$con = mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
