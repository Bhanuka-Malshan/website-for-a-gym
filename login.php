<?php
session_start();

if (isset($_SESSION["username"]) === true){
    header("Location: user.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--custom css file link-->
    <link rel="stylesheet" href="Styles/nav_style.css">
    <link rel="stylesheet" href="Styles/login.css">

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
    <a href="signup.php" target="_blank" >
        <div  class="fas fa-user-plus" id="user-btn" ></div>
    </a>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

    </header>

<!-- header section ends -->   

<!-- sign up form starts -->

<section class="signup">

    <div class="row">

        <div class="box">

            <form action="PHPs/login_sql.php" method="POST">

                    <div class="head"><p>SIGN IN</p></div>

                    
                    <div class="name">
                        <div class="inputBox">
                            <input class="email" name="EmailAdd" type="text">
                            <span>email address</span>
                            <i></i>
                        </div>

                    </div>

                    <div class="name">
                        <div class="inputBox2">
                            <input type="password" name="Password" id="password">
                            <img src="images/eye-close.png" id="eyeicon">
                            <span>Password</span>
                            <i></i>
                        </div>

                

                    </div>
                    
   
                        
                <div class="submit">
                    <div class="signup">
                        <p>Don't have an Account?</p>
                        <a href="signup.php" target="_blank">sign up</a>
                    </div>
                    <input type="submit" name="submit" value="Log in" class="btn">
                </div>
                </form>
            </div>      
        </div>
</section>

<!-- sign up form ends -->

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