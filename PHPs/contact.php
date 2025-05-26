<?php
    include 'config.php';

    if (isset($_POST['submit'])){

            $name       = $_POST['userName'];
            $email      = $_POST['userEmail'];
            $contact_no = $_POST['userContactNo'];

        $sql= "insert into getintouch (name,email,contact_no) values('{$name}','{$email}',{$contact_no})";

        $statement = mysqli_query($conn, $sql);
        
        if($statement){
            echo "<script>alert('Done'); window.location.href='../index.php';</script>";
        }else{
            echo'Error';
        }
    }else{
        echo "<script>alert('Error'); window.location.href='../index.php';</script>";
    }
?>