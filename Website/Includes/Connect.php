<?php

$host = "db4free.net";
$dbname = "ona_test";
$username = "smauksteliai";
$password = "smauksteliai";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

//railway: 

// $host = "containers-us-west-190.railway.app";
// $dbname = "ona";
// $username = "root";
// $password = "7txJV6V6oqCDC1tYwTkt";
// $port = "8018";

// $conn = new mysqli($host, $username, $password, $dbname, $port);

// // Check connection
// if ($conn -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $conn -> connect_error;
//   exit();
// }

// postgres:


// $host = "postgres://ona_user:z28XvIMKZVjlnFry1I302U4HqQnRfoil@dpg-cg2fe8ak728relp6eqpg-a.frankfurt-postgres.render.com/ona";
// $dbname = "ona";
// $username = "ona_user";
// $password = "z28XvIMKZVjlnFry1I302U4HqQnRfoil";
// $port = "5432";

// // $conn = new mysqli($host, $username, $password, $dbname, $port);
// // $conn = new PDO($host, $username, $password, $dbname, $port);
// $conn = new PDO($host, $username, $password, $dbname, $port);

// // Check connection
// if ($conn -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $conn -> connect_error;
//   exit();
// }
