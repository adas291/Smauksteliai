<?php
include '../Includes/Connect.php';
$updateId = $_GET['id'];

$query = "UPDATE CLIENT SET ";
foreach ($_POST as $key => $value) {
    if ($value != '') {
        $query = $query . " $key = '$value',";
    }
}
$query = substr($query, 0, -1);
$query = $query . " WHERE id = $updateId";
$conn->query($query) or die($conn->error);
header("Location: ../Client/ViewClients.php?status=success");