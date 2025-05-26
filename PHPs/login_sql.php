<?php

include 'config.php';
require_once 'functions.php';

if (isset($_POST["submit"])){
    $mail = $_POST["EmailAdd"];
    $passwd = $_POST["Password"];  

    loginUser($conn, $mail, $passwd);
}
else{
    header('Location: ../login.php');
}
?>

