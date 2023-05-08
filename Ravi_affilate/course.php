<?php 
  require('connection.php'); 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login and Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h2>GROWTH UP</h2>
        <nav>


            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="course.php">Course</a>
            <a href="contact.php">Contacts Us</a>
            <a href="enroll.php">Enroll Now </a>
            <a href="login.php">Login</a></li>
        </nav>

        <?php 
    
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
        echo"
          <div class='user'>
            $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
            <br></br>
           <a href='user/user_profile.php'>Profile</a> 
             
          </div>
        ";
      }
      else
      {
        echo"
          <div class='sign-in-up'>
            <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
            <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
          </div>
        ";
      }
    
    ?>
    </header>



    <!-- Course section starts -->
    <div class="container">

        <h1 class="heading">our courses</h1>

        <div class="box-container">

            <div class="box">
                <img src="image/e-lite.png" alt="">
                <h3>E-Lite Package</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="1_e-lite_course.php" class="btn">view course</a>
                <a href="enroll.php" class="btn">enroll now</a>
            </div>

            <div class="box">
                <img src="image/silver1.png" alt="">
                <h3>Silver Package</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="2_silver_course.php" class="btn">view course</a>
                <a href="enroll.php" class="btn">enroll now</a>
            </div>

            <div class="box">
                <img src="image/gold1.png" alt="">
                <h3>Gold Package</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="3_gold_course.php" class="btn">view course</a>
                <a href="enroll.php" class="btn">enroll now</a>
            </div>



        </div>

    </div>
    <!-- Course section ends -->


    <!--  Rating section-->
    <div class="slideshow-container">

        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <div class="conent_image">
                <img src="image/ajay yadav.png" style="width:10%">
            </div>
            <p class="author"><strong>Ajay Yadav</strong></p>
            <h5>Star Rating</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <div class="conent_image">
                <img src="image/prasun.png" style="width:10%">
            </div>
            <p class="author"><strong>anjali Barman</strong></p>
            <h5>Star Rating</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <div class="conent_image">
                <img src="image/nandani.png" style="width:10%">
            </div>
            <p class="author"><strong>Nandani Yadav</strong></p>
            <h5>Star Rating</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <div class="conent_image">
                <img src="image/prasun.png" style="width:10%">
            </div>
            <p class="author"><strong>Prasun Pendro</strong></p>
            <h5>Star Rating</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <div class="conent_image">
                <img src="image/prasun.png" style="width:10%">
            </div>
            <p class="author"><strong>Ram Sahu</strong></p>
            <h5>Star Rating</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <div class="conent_image">
                <img src="image/ajay yadav.png" style="width:10%">
            </div>
            <p class="author">
                <strong>Ram Sahu</strong>
            </p>
            <h5>Star Rating</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <div class="mySlides">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <div class="conent_image">
                <img src="image/ajay yadav.png" style="width:10%">
            </div>
            <p class="author"><strong>Ram Sahu</strong></p>
            <h5>Star Rating</h5>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>


        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    </script>




    <!-- footer section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="foot_er">
        <p>@ GROWTH UP, All rights reserved 2023.</p>
    </div>
    <!-- Footer  section ends -->



    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>USER LOGIN</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>USER REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full Name" name="fullname">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="text" placeholder="Mobile" name="mobile">
                <input type="text" placeholder="City" name="city">
                <input type="text" placeholder="Address" name="address">
                <input type="text" placeholder="Referral Code" name="referralcode" id="refercode">
                <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
        </div>
    </div>




</body>

</html>