<?php
    include_once 'Connect.php';

    $name = $_POST['name'];
    $additional = $_POST['additional'];
    $manager = $_POST['manager'];


    $sql = "INSERT INTO CLIENT (name, additional_info, manager_id) VALUES ('$name', '$additional', '$manager')";

    $conn->query($sql) or die($conn->error);


    header("Location: ../Client/NewClient.php?status=succes");
?>