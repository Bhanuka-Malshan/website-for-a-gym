<?php
session_start();

if (isset($_SESSION["username"])!== true){
    echo "<script>alert('You must have to login first'); window.location.href='login.php'; </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>underground Fitness</title>
    <link rel="icon" href="Images/Title_logo2.png" type="image/gif/png">

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!--custom css file link-->
    <link rel="stylesheet" href="Styles/nav_style.css">
    <link rel="stylesheet" href="Styles/user.css">

</head>
<body>

 <!-- header section starts -->

 <header class="header">
        <a href="index.php" class="logo"> 
            <img src="images/Logo.png" alt="">
        </a>

<!-- Navigation Bar -->
<nav class="navbar">
    <a href="index.php">HOME</a>
    <a href="index.php#about us">ABOUT US</a>
    <a href="index.php#train with us">TRAIN WITH US</a>
    <a href="index.php#price & planning">PRICE & PLANNING</a>
    <a href="contact.php">CONTACT US</a>
</nav>

<div class="icons">
    <a href="PHPs/logout.php" >
        <div  class="fas fa-arrow-right-from-bracket" id="user-btn" ></div>
    </a>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

    </header>

<!-- header section ends -->  
<section class="boxx">
    <div class="name">
        <h1>Hey, <?php 
                        if (isset($_SESSION["username"])) {
                            echo $_SESSION["name1"]."  " .$_SESSION["name2"];
                            
                        }   
                    ?> 
        </h1>
    </div>

    <div class="welcome">
    <h2>Welcome to Underground Fitness</h2>
    </div>

    <div class="welcome">
    <h2>Your Plan is <span><?php 
                        if (isset($_SESSION["username"])) {
                            echo $_SESSION["plan"];
                            
                        }   
                    ?>,</span>
    </h2>
    </div>

    <div class="box2">
        <p>Dear <?php 
                        if (isset($_SESSION["username"])) {
                            echo $_SESSION["name1"];
                            
                        }   
                    ?>, 
            <br> <span> This page is under maintain. We will inform you when finish the maintenance</span></p>
    </div>

</section>
<!-- Footer section starts -->

<section class="footer">

    <div class="share">

        <a href= "https://www.facebook.com/login/" target="_blank" class = "fab fa-facebook-f"></a>
        <a href= "https://twitter.com/login" target="_blank" class = "fab fa-twitter"></a>
        <a href= "https://www.instagram.com/accounts/login/" target="_blank" class = "fab fa-instagram"></a>
        <a href= "https://www.linkedin.com/login" target="_blank" class = "fab fa-linkedin"></a>

    </div>

    <div class="credit">created by <span>Gihan, Bhanuka & Kavishka </span>all right reserved</div>

</section>

<!-- Footer section ends -->

<!-- custom js file link -->
<script src="Script/script.js"></script>
<script src="Script/signup.js"></script>


</body>
</html>