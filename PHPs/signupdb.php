<?php
include 'config.php';
require_once 'functions.php';

if (isset($_POST['submit'])) {
    $FirstName = $_POST['firstName'];
    $LastName = $_POST['lastName'];
    $Address = $_POST['address'];
    $ContactNo = $_POST['contactNo'];
    $Occupation = $_POST['occupation'];
    $Gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $AgeRange = $_POST['ageRange'];
    $DOB = $_POST['dob'];
    $NIC = $_POST['nic'];
    $EmailAdd = $_POST['email'];
    $Password = $_POST['password'];
    $SMS = isset($_POST['sms']) ? $_POST['sms'] : 'No';
    $EmailNotification = isset($_POST['emailNotification']) ? $_POST['emailNotification'] : 'No';

    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    $nicExists = nicExists($conn, $NIC);
    $emailExists = emailExists($conn, $EmailAdd);

    if ($nicExists) {
        echo "<script>alert('NIC Exists'); window.location.href='../signup.php';</script>";
        exit();
    }

    if ($emailExists) {
        echo "<script>alert('Email Exists'); window.location.href='../signup.php';</script>";
        exit();
    }

    createUser($conn, $FirstName, $LastName, $Address, $ContactNo, $Occupation, $Gender, $AgeRange, $DOB, $NIC, $EmailAdd, $hashedPassword, $SMS, $EmailNotification);
    exit();
} 
?>