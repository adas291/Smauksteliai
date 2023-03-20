<?php
    include '../Includes/Connect.php';
    $id = $_GET['id'];
    
    $query = "DELETE FROM CLIENT WHERE id = '$id'";

    $conn->query($query) or die($conn->error);

    header("Location: ../Client/ViewClients.php?status=RemoveSuccess");
?>