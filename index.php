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
    <link rel="stylesheet" href="Styles/index_style.css">

</head>
<body>
   
<!-- header section starts -->

    <header class="header">
        <a href="index.php" class="logo"> 
            <img src="images/Logo.png" alt="">
        </a>
    
<!-- Navigation Bar -->
    <nav class="navbar">
        <a href="#home">HOME</a>
        <a href="#about us">ABOUT US</a>
        <a href="#train with us">TRAIN WITH US</a>
        <a href="#price & planning">PRICE & PLANNING</a>
        <a href="contact.php">CONTACT US</a>
         
    </nav>

    <div class="icons">
        <a href="login.php">
        <div  class="fas fa-user" id="user-btn" ></div>
        </a>
        
        
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

        </header>

<!-- header section ends -->


<!-- Home section Starts -->

    <Section class="home" id="home">

        <div class="content">
            <h3>it's time to get stronger</h3>
            <p>If you’re looking for fitness, wellness, relaxation and exclusivity, then Underground Fitness is the place to be in Sri Lanka...</p>
            <a href="#price & planning" class="btn">Join with us</a>
        </div>
    </Section>

<!-- Home section Ends -->

<!-- About Section Starts -->

    <section class="about" id="about us">
        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/background_main-img2.jpg" alt=""> 
            </div>

            <div class="content">
                
                <p>We are passionate about creating a fitness community that is inclusive, encouraging and empowering for everyone.</p>
                <p>We are dedicated to providing a space that you feel welcomed at each and every time you visit, and we pass no judgement on whether that’s once a fortnight or five days week. We’re just here to help you reach your goals!</p>
                <p>We believe the latest equipment, a continually refreshed offering with accredited and passionate trainers and coaches help to support and encourage you to reach your health and fitness goals.</p>
                <p>Step inside a Underground Fitness Gym today to see and feel the difference for yourself. </p>
                <a href="readmore.php" class="btn">read more</a>

            </div>
        </div>

    </section>
 
<!-- About Section Ends -->

<!-- BMI Section Start -->

    <section class="BMI" id='BMI'>

        <div class="row">
 
            <div class="content">

                <h3>CALCULATE YOUR BODY MASS INDEX (BMI)</h3>
                <p>If you’re looking for fitness, wellness, relaxation and exclusivity, then Underground Fitness is the place to be in Sri Lanka...</p>
                
                <div class="buttn">
                    <button onclick="togglePopup()">Calculate Your BMI Now</button>
                </div>
                
            </div>

            <div class="popup" id="popup1">
                <div class="overlay"></div>
                <div class="content">
                    <div class="closebtn" onclick="togglePopup()">&times;</div>

                    <div class="box2">
                        <h1>BMI Calculator</h1>
                        <div class="content2">
            
                            <div class="input">
                                <label for="height">Height (cm) </label>
                                <input type="number" id="height" required>
                            </div>
            
                            <div class="input">
                                <label for="weight">Weight (km)</label>
                                <input type="number" id="weight">
                            </div>
            
                            <div class="bttn">
                            <button id="calculate">Calculate BMI</button>
                            </div>
            
                        </div>
            
                        <div class="results">
                            <p>Your BMI is</p>
                            <div id="results">00.00</div>
                            <p class="comment"> </p>
                        </div>
            
                    </div>
                    
                </div>
            </div>

            <div class="image">
                <img src="images/background_main-img3.jpg" alt=""> 
            </div>

        </div>

    </section>

<!-- BMI Section Ends -->

<!-- Team section Starts -->

    <section class="train with us" id="train with us">

         <h1 class="heading"> <span>our</span> team </h1>

        <div class="trainers">

            <div class="trainer">

                <img src="Images/gym_trainer1.jpg" alt="">
                
                <div class="content">
            
                    <h3>James Marsden</h3>
                    <p>Founder & Owner</p>
                    <p>15+ years eperience</p>

                </div>
 
            </div>


            <div class="trainer">
                <img src="Images/gym_trainer2.jpg" alt="">
               
                <div class="content">
                    
                    <h3>Lucy Lawless</h3>
                    <p>Trainer</p>
                    <p>7+ years eperience</p>

                </div>
               
            </div>

            <div class="trainer">
                <img src="Images/gym_trainer3.jpg" alt="">
                
                <div class="content">
                    
                    <h3>William Shatner</h3>
                    <p>Trainer</p>
                    <p>9+ years eperience</p>

                </div>
                
            </div>

        </div>

    </section>


<!-- Team section Ends -->

<!-- Pricing Section Starts -->

<section class="price" id="price & planning">

    <h1 class="heading"> <span>price &</span> Planning</h1>

    <div class="grid">

        <div class="box flexi">
            <div class="title">FLEXI</div>
            <img src="images/flexi.png" alt="">
            <div class="price">
                <b>Rs 1500</b>
                <span>per month</span>
            </div>

            <div class="content">

                <h2></h2>
                <h2><span class="fas fa-check-double"></span> 12 classess per month</h2>
                <h2><span class="fas fa-check-double"></span> 3 classess per week</h2>
                <h2><span class="fas fa-check-double"></span> no joining fees</h2>
                
            </div>

            <a href="signup.php" class="btn" target="_blank">JOIN TODAY</a>

        </div>
        
        <div class="box all">
            
            <div class="title">ALL ACCESS</div>

            <img src="Images/all-access.png" alt="">

            <div class="price">
                <b>Rs 4000</b>
                <span>per month</span>
            </div>

            <div class="content">

                <h2></h2>
                <h2><span class="fas fa-check-double"></span> Unlimited classess per month</h2>
                <h2><span class="fas fa-check-double"></span> 3 classess per day</h2>
                <h2><span class="fas fa-check-double"></span> no joining fees</h2>
                
            </div>
            <div class="buttn">
            <a href="signup.php" class="buttn" target="_blank">JOIN TODAY</a>
            </div>

        </div>

        <div class="box off">
            <div class="title">OFF-PEAK</div>
            
            <img src="images/off-peak.png" alt="">

            <div class="price">
                <b>Rs 2500</b>
                <span>per month</span>
            </div>

            <div class="content">

                <h2></h2>
                <h2><span class="fas fa-check-double"></span> 20 classess per month</h2>
                <h2><span class="fas fa-check-double"></span> 5 classess per week</h2>
                <h2><span class="fas fa-check-double"></span> no joining fees</h2>

            </div>

            <a href="signup.php" class="btn" target="_blank">JOIN TODAY</a>

        </div>

    </div>

</section>

<!-- Pricing Section Ends -->

<!-- Service Section Starts -->

    <section class="services" id="services">

        <h1 class="heading"> <span>Our</span> services </h1>

        <div class="container">
                <div class="item item-1">
                    <img src="images/Services/s1.PNG" alt="">
                    <h2>Great Equipment</h2>
                    <P>WE PROVIDE YOU THE NEWEST & GRETEST EQUIPMENTS TO TRAIN.</P>
                </div>
                <div class="item item-2">
                    <img src="images/Services/s2.png" alt="">
                    <h2>Individual Attention</h2>
                    <P>OUR TRAINER WILL ALWAYS MONITOR YOU PROCESS OF TRAINING AND WILL BE 100% AVAILABLE.</P>
                </div>
                <div class="item item-3">
                    <img src="images/Services/s3.PNG" alt="">
                    <h2>Open Hours</h2>
                    <P>WE ARE OPEN FROM 6:00 A.M - 22:30 P.M EVERYDAY EXCEPT SUNDAY.</P>
                </div>
                <div class="item item-4">
                    <img src="images/Services/s4.PNG" alt="">
                    <h2>Friendly Environment</h2>
                    <P>WE HAVE A HEALTHY ENVIRONMENT TO WORKOUT AND GREAT PEOPLE TO HAGOUT WITH.</P>
                </div>
                <div class="item item-5">
                    <img src="images/Services/s5.PNG" alt="">
                    <h2>Health & Dietary Support</h2>
                    <P>WE WILL PROVIDE DIETARY SUPPORT EACH AND EVERY INDIVIDUAL'S BODY CONDITION.</P>
                </div>
                <div class="item item-6">
                    <img src="images/Services/s6.PNG" alt="">
                    <h2>Individual Charts</h2>
                    <P>WE WILL PROVIDE YOU A WORKOUT CHART FOCUSED ON YOUR BODY.</P>
                </div>
                <div class="item item-7">
                    <img src="images/Services/s7.PNG" alt="">
                    <h2>For Ladies Too</h2>
                    <P>WE ALSO PROVIDE EXCLUSIVELY FOR LADIES, GROUP FITNESS CLASSES CONDUCTED BY A PROFESSIONALS.</P>
                </div>
                <div class="item item-8">
                    <img src="images/Services/s8.PNG" alt="">
                    <h2>Athletic Training</h2>
                    <P>SPORTS SPECIFIC SAQ TRAINING (SPEED /AGILITY / QUICKNESS).</P>
                </div>
                <div class="item item-9">
                    <img src="images/Services/s9.PNG" alt="">
                    <h2>Children Fitness</h2>
                    <P>CHILDREN'S FITNESS CLASS - LADDER AND CONE DRILLS TRAINING.</P>
                </div>

        </div>

    </section>

<!-- Service Section Ends -->

<!-- Contact Section Starts -->

    <section class="contact us" id="contact us">

        <h1 class="heading"> <span> Feed</span>back </h1>

        <div class="row">

            <form action="PHPs/feedback.php" method="POST">


                <h3>How is Your Overall Experience?</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="userName" placeholder="Name" required>
                </div>

                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="userEmail" placeholder="Email" required>
                </div>

                <div class="inputBox3">
                    <span class="fas fa-message"></span>
                    <textarea  id="massage" placeholder="Comment" name="message" rows="5" cols="90" required></textarea>
                </div>

                <input type="submit" name="submit" value="Submit" class="btn">

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