<?php
    include '../Includes/Connect.php';
    $id = $_GET['id'];

    $conn->begin_transaction();

    $query1 = "DELETE FROM MEMBER WHERE fk_CLIENT_id = '$id'";
    $result1 = $conn->query($query1);


    $query2 = "DELETE FROM CLIENT WHERE id = '$id'";
    $result2 = $conn->query($query2);


    if ($result1 && $result2) {

    $conn->commit();
    } else {

    $conn->rollback();
    echo "Error: " . $conn->error;
    }

    header("Location: ../Client/ViewClients.php?status=RemoveSuccess");
?>