<?php
    $conn->begin_transaction();

    $query1 = "DELETE FROM TEACHER WHERE fk_MEMBER_id = '$member_id'";
    $result1 = $conn->query($query1);


    $query2 = "DELETE FROM MEMBER WHERE id = '$member_id'";
    $result2 = $conn->query($query2);


    if ($result1 && $result2) {

    $conn->commit();
    } else {

    $conn->rollback();
    echo "Error: " . $conn->error;
    }
?>