<?php
    include 'config.php';

    if (isset($_POST['submit'])) {
        $name    = $_POST['userName'];
        $email   = $_POST['userEmail'];
        $comment = $_POST['message'];

        $sql = "INSERT INTO feedback (name, email, comment) VALUES ('{$name}', '{$email}', '{$comment}')";

        $statement = mysqli_query($conn, $sql);
        
        if ($statement) {
            echo "<script>alert('Done'); window.location.href='../index.php';</script>";
        } else {
            echo 'Error';
        }
    } else {
        echo "<script>alert('Error'); window.location.href='../index.php';</script>";
    }
?>
