<?php
    include '../Includes/Connect.php';
    $updateId = $_GET['id'];
    
    $query = "UPDATE MEMBER SET ";
    foreach ($_POST as $key => $value) {
        if ($key == 'fk_CLIENT_id' && $value == -1)
        {
            $query = $query . " $key = NULL,";
        }

        else if ($value != '') {
            $query = $query . " $key = '$value',";
        }
    }
    $query = substr($query, 0, -1);
    $query = $query . " WHERE id = $updateId";
    $conn->query($query) or die($conn->error);
    header("Location: ../User/ViewUsers.php?status=success");
?>