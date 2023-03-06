<?php
    include_once 'Connect.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sex = $_POST['sex'];
    $bday = $_POST['bday'];
    $pnumber = $_POST['pnumber'];
    $email = $conn->escape_string( $_POST['email']);
    $country = $_POST['country'];
    $city = $_POST['city'];
    $role = $_POST['role'];
    $client = $_POST['client'];

    if ($client == '-') 
    {
        $sql = "INSERT INTO MEMBER (fname, surname, birth_day, phone_number, country, email, city, sex, fk_ROLE_name) VALUES ('$fname', '$lname', '$bday', '$pnumber', '$country', '$email', '$city', '$sex', '$role')";
    }
    
    else
    {
    $sql = "INSERT INTO MEMBER (fname, surname, birth_day, phone_number, country, email, city, sex, fk_ROLE_name, fk_CLIENT_id) VALUES ('$fname', '$lname', '$bday', '$pnumber', '$country', '$email', '$city', '$sex', '$role', '$client')";
    }

    $conn->query($sql) or die($conn->error);

    $memberID = $conn->insert_id;

    if ($role == 'teacher')
    {
        $sql = "INSERT INTO TEACHER (fk_MEMBER_id) VALUES ('$memberID')";
        $conn->query($sql) or die($conn->error);
    }

    header("Location: ../User/NewUser.php?status=succes");
?>