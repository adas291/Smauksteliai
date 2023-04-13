<?php
    include '../Includes/Connect.php';
    $id = $_GET['id'];


    // $query1 = 
    // "DELETE FROM ACADEMIC_GROUP WHERE id = (SELECT `fk_ACADEMIC_GROUP_id` FROM `PROJECT` WHERE id = $id);";

    $query2 = "DELETE FROM `PROJECT` WHERE id = $id;";
    
    $conn->begin_transaction();

    // $result1 = $conn->query($query1);
    $result2 = $conn->query($query2);

    if($result1) {
        echo "Error: " . $conn->error;
        $conn->rollback();
    }
    else {
        $conn->commit();
    }

    $conn->close();
    header("Location: ../Project/ViewProjects.php?status=RemoveSuccess");
?>