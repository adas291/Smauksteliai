<?php
include_once '../Includes/Connect.php';
$title = $_POST['title'];
$city = $_POST['city'];
$comments = $_POST['comments'];
$material = $_POST['material'];
$subject = $_POST['subject'];
$manager = $_POST['manager'];
$startDate = $_POST['sdate'];
$ahours = $_POST['ahours'];
// echo var_dump($subject);

$sql = "INSERT INTO PROJECT(title, city, fk_QUALIFICATION_id, fk_MANAGER_id, fk_TEACHING_MATERIAL_id, additional_info, start_date, academic_hours_per_project) VALUES('$title', '$city', '$subject', $manager, '$material', '$comments', '$startDate', '$ahours')";
echo $sql;

$conn->query($sql) or die($conn->error);

header("Location: ../Project/ViewProjects.php?status=succes");
