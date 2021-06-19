<?php
$server = "localhost";
$username = "root";
$password = "";
$database="users"; 

// Create connection
$con = new mysqli($server, $username, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }


?>
