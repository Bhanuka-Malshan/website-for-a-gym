<?php
function nicExists($conn, $NIC) {
    $sql = "SELECT * FROM signup WHERE NIC = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $NIC);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) { 
        return true;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function emailExists($conn, $EmailAdd) {
    $sql = "SELECT * FROM signup WHERE EmailAdd = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $EmailAdd);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; // Return the entire row
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $FirstName, $LastName, $Address, $ContactNo, $Occupation, $Gender, $AgeRange, $DOB, $NIC, $EmailAdd, $hashedPassword, $SMS, $EmailNotification) {
    $sql = "INSERT INTO signup (FirstName, LastName, Address, ContactNo, Occupation, Gender, Plan, DOB, NIC, EmailAdd, Password, SMS, EmailNotification)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssssss", $FirstName, $LastName, $Address, $ContactNo, $Occupation, $Gender, $AgeRange, $DOB, $NIC, $EmailAdd, $hashedPassword, $SMS, $EmailNotification);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    echo "<script>alert('Done'); window.close();</script>";
}


function loginUser($conn, $mail, $passwd) {
    $emailExists = emailExists($conn, $mail);
    if ($emailExists === false) {
        echo "<script>alert('Email Invalid'); window.location.href='../login.php';</script>";
        exit();
    }
    $hashedPassword = $emailExists["Password"];
    $checkPassword = password_verify($passwd, $hashedPassword);

    if ($checkPassword === false) {
        echo "<script>alert('Password Invalid'); window.location.href='../login.php'; </script>";
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["username"] = $emailExists["EmailAdd"];
        $_SESSION["name1"] = $emailExists["FirstName"];
        $_SESSION["name2"] = $emailExists["LastName"];
        $_SESSION["plan"] = $emailExists["Plan"];
        header("Location:../user.php");
        exit();
    }
}

