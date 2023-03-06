<?php

$host = "db4free.net";
$dbname = "ona_test";
$username = "smauksteliai";
$password = "smauksteliai";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?>