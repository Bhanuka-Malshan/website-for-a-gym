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
    <link rel="stylesheet" href="Styles/signup.css">

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
    <a href="index.php#about us">ABOUT</a>
    <a href="index.php#train with us">TRAIN WITH US</a>
    <a href="index.php#price & planning">PRICE & PLANNING</a>
    <a href="contact.php">CONTACT US</a>
</nav>

<div class="icons">
<a href="index.php" class="logo"> 
            <img src="images/Logo.png" alt="">
        </a>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

    </header>

<!-- header section ends -->   

<!-- sign up form starts -->

<section class="signup">

    <div class="row">

        <div class="box">

            <form action="PHPs/signupdb.php" method="POST" onsubmit="return validateForm()">

                    <div class="head"><p>SIGN UP</p></div>

                    <div class="name">
                        <div class="inputBox">
                            <input type="text" name="firstName" id="firstName" required-none>
                            <span>First Name</span>
                            <i></i>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="lastName" id="lastName"  >
                            <span>Last Name</span>
                            <i></i>
                        </div>
                    </div>
                    
                    <div class="name">
                        <div class="inputBox">
                            <input type="text" name="address" id="address" >
                            <span>Address</span>
                            <i></i>
                        </div>

                    </div>

                    <div class="name">
                        <div class="inputBox">
                            <input type="text" name="contactNo" id="contactNo" >
                            <span>Contact No.</span>
                            <i></i>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="occupation" id="occupation" >
                            <span>Occupation</span>
                            <i></i>
                        </div>

                    </div>

                    <div class="radio">
                        <input type="radio" name="gender" value="male" id="male"  >
                        <label for="male">Male</label>
                        <input type="radio" name="gender" value="female" id="female"  >
                        <label for="female">Female</label>

                    <select class="dropdown" name="ageRange" id="ageRange" >
                            <option selected disabled> Plan</option>
                            <option > FLEXI</option>
                            <option > OFF-PEAK</option>
                            <option > ALL ACCESS</option>
                    </select>

                    </div>
                    
                    <div class="date">
                        <div class="inputBox">
                            <input type="date" name="dob" id="dob" >
                            <span>Date of Birth</span>
                            <i></i>
                        </div>

                        <div class="inputBox">
                            <input type="text" name="nic" id="nic" >
                            <span>NIC No.</span>
                            <i></i>
                        </div>

                    </div>

                    <div class="name">
                        <div class="inputBox">
                            <input class="email" type="text" name="email" id="email" >
                            <span>email address</span>
                            <i></i>
                        </div>

                    </div>

                    <div class="name">
                        <div class="inputBox2">
                            <input type="password" name="password" id="password"  >
                            <img src="images/eye-close.png" id="eyeicon">
                            <span>Password</span>
                            <i></i>
                        </div>

                        <div class="inputBox2">
                            <input type="password" name="confirmPassword" id="password2"  >
                            <img src="images/eye-close.png" id="eyeicon2">
                            <span>Confirm Password</span>
                            <i></i>
                        </div>

                    </div>
                    
                    <div class="checkBox">
                        <div class="check">
                                <input type="checkbox" name="sms" value="Yes" id="check" >
                                <p>SMS Alerts</p>
                        </div>

                        <div class="check">
                            <input type="checkbox" name="emailNotification" value="Yes" id="check">
                            <p>email notifications</p>
                        </div>
                    </div>
                        
                <div class="submit">
                    <div class="signup">
                        <p>Alredy have an Account?</p>
                        <a href="login.php">login</a>
                    </div>
                    <input type="submit" name="submit" value="Sign Up" class="btn">
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
<script src="Script/form.js"></script>
</body>
</html>