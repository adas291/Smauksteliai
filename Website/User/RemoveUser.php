<?php
    include '../Includes/Connect.php';
    $member_id = $_GET['id'];

    include '../Includes/RemoveUserInclude.php';

    $conn->close();

    header("Location: ../User/ViewUsers.php?status=RemoveSuccess");
?>