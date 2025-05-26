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
    <link rel="stylesheet" href="Styles/contact.css">

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
        <a href="#">CONTACT US</a>
         
    </nav>

    <div class="icons">
        <a href="login.php">
        <div  class="fas fa-user" id="user-btn" ></div>
        </a>
        <!-- <div  class="fas fa-user" id="user-btn" ></div> -->
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

        </header>

<!-- header section ends -->



<!-- Contact Section Starts -->

    <section class="contact us" id="contact us">

        <h1 class="heading">  </h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12172.588342381163!2d14.434388698827426!3d50.10554087858023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470beb4cc6fc6263%3A0xfe6a5fc821f2508!2sUnderground%20Fitness!5e0!3m2!1sen!2slk!4v1687535461646!5m2!1sen!2slk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="PHPs/contact.php" method="POST">

                <div class="address">
                    <h1>Underground Fittnes</h1>
                    
                    <h2><span>Address : </span> No: 165, New Kandy road, Welivita Junction, Malabe 32350</h2>
                    <p><span>Phone : </span>+9476 042 3394</p>
                </div>

                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="userName" placeholder="Name" required>
                </div>

                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="userEmail" placeholder="Email" required>
                </div>

                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" name="userContactNo" placeholder="Contact No." required>
                </div>

                <input type="submit" name="submit" value="contact now" class="btn">

            </form>

        </div>

    </section>

<!-- Contact Section Ends -->

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
<script src="Script/BMI.js"></script>

</body>
</html>