<?php
$server = "localhost";
$username = "root";
$password = "";
$database="csv_db 19"; 

// Create connection
$conn = new mysqli($server, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


?>
