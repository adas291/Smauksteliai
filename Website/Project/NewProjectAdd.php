<?php
include_once '../Includes/Connect.php';
$title = $_POST['title'];
$city = $_POST['city'];
$comments = $_POST['comments'];
$material = $_POST['material'];
$subject = $_POST['subject'];
$manager = $_POST['manager'];

echo var_dump($material);
echo var_dump($subject);
echo var_dump($manager);



$sql = "INSERT INTO PROJECT(title, city, fk_QUALIFICATION_name, fk_MANAGER_id, fk_TEACHING_MATERIAL_id, additional_info) VALUES('$title', '$city', '$subject', $manager, '$material', '$comments')";
echo $sql;

$conn->query($sql) or die($conn->error);

header("Location: ../Project/NewProject.php?status=succes");
