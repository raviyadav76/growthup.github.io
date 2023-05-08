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


    <!-- This is for Automatic Slideshow index pade #index.php -->
    <br></br>

    <h2 class="automatic_center" style="text-align:center">Our Courses That Will Help You Earn Money</h2>

    <div class="automatic_img_section" style="">

        <img class="mySlides" src="image/silver1.png">
        <img class="mySlides" src="image/gold1.png">
        <img class="mySlides" src="image/e-lite.png">
        <img class="mySlides" src="image/1.png">
        <img class="mySlides" src="image/2.png">
        <img class="mySlides" src="image/3.png">
        <img class="mySlides" src="image/4.png">
        <img class="mySlides" src="image/5.png">
        <img class="mySlides" src="image/6.png">
        <img class="mySlides" src="image/7.png">
        <img class="mySlides" src="image/8.png">
        <img class="mySlides" src="image/9.png">
    </div>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>

    <!-- main section start -->
    <div class="choise">
        <h2>Why Choose Us ?</h2>

        <div class="polaroid">
            <img src="image/polaroid3.png" alt="Daily payout" style="width:100%">
            <div class="choise-container">
                <p><strong>Daily Payout</strong></p>
            </div>
        </div>

        <div class="polaroid">
            <img src="image/contact2.png" alt="24/7 suport" style="width:100%">
            <div class="choise-container">
                <p><strong>24/7 Suport</strong></p>
            </div>
        </div>

        <div class="polaroid">
            <img src="image/banner1.png" alt="Up to 90% Commision" style="width:100%">
            <div class="choise-container">
                <p><strong>Up to 90% Commision</strong></p>
            </div>

        </div>
    </div>

    <!-- main section end -->
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <!-- Course section starts -->
    <div class="container">

        <h1 class="heading">our courses</h1>

        <div class="box-container">

            <div class="box">
                <img src="image/e-lite.png" alt="">
                <h3>E-Lite Package</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="1_e_lite_course.php" class="btn">view course</a>
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


    <!-- Team section start -->

    <div class="team-container">

        <h1 class="team-heading">OUR PROFICIENT TEAM</h1>

        <div class="team-box-container">

            <div class="team-box">
                <div class="image">
                    <img src="image/ravi.jpg" alt="">
                </div>
                <div class="team-content">
                    <h3>Ravi Yadav</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                    <a href="contact.php" class="btn">Contact</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
                        <span> <i class="fas fa-user"></i> CEO & Founder </span>
                    </div>
                </div>
            </div>

            <div class="team-box">
                <div class="image">
                    <img src="image/anjali image.png" alt="">
                </div>
                <div class="team-content">
                    <h3>Anjali Barman</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                    <a href="contact.php" class="btn">Contact</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
                        <span> <i class="fas fa-user"></i> Designer </span>
                    </div>
                </div>
            </div>

            <div class="team-box">
                <div class="image">
                    <img src="image/ameshwari .png" alt="">
                </div>
                <div class="team-content">
                    <h3>Ameshwari Marko</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                    <a href="contact.php" class="btn">Contact</a>
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
                        <span> <i class="fas fa-user"></i> Art Director</span>
                    </div>
                </div>
            </div>


        </div>

        <script>
        let loadMoreBtn = document.querySelector('#load-more');
        let currentItem = 3;

        loadMoreBtn.onclick = () => {
            let boxes = [...document.querySelectorAll('.container .box-container .box')];
            for (var i = currentItem; i < currentItem + 3; i++) {
                boxes[i].style.display = 'inline-block';
            }
            currentItem += 3;

            if (currentItem >= boxes.length) {
                loadMoreBtn.style.display = 'none';
            }
        }
        </script>


        <!-- Team section ends -->

        <!-- Footer section start-->

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

        <script>
        function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }
        }
        </script>

        <?php 

  if(isset($_GET['refer']) && isset($_GET['refer'])!='')
  {
    if(!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true))
    {
      $query="SELECT * FROM `registered_users` WHERE `referral_code`='$_GET[refer]'";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result)==1)
      {
        echo"
          <script defer>
            document.getElementById('refercode').value='$_GET[refer]';
            popup('register-popup');
          </script>
        ";
      }
      else
      {
        echo"
          <script>
            alert('Invalid Referral Code');
          </script>
        ";
      }
    }
  }

?>

</body>

</html>