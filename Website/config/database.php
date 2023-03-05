<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'adomas');
    define('DB_PASS', 'adomas123');
    define('DB_NAME', 'tps');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    echo 'CONNECTED';
?>