<?php

$host = "localhost";
$username = "root";
$password = "";
$dataBase = "ona";

$conn = new mysqli($host, $username, $password, $dataBase);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?>