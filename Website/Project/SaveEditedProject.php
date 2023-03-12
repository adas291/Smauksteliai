<?php
include '../Includes/Connect.php';
$updateId = $_GET['id'];

$query = "UPDATE PROJECT SET ";
foreach ($_POST as $key => $value) {
    if ($value != '') {
        $query = $query . " $key = '$value',";
    }
}
$query = substr($query, 0, -1);
$query = $query . " WHERE id = $updateId";
$conn->query($query) or die($conn->error);
header("Location: ../Project/ViewProjects.php?status=success");