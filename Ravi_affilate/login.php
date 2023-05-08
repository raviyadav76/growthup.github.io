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

    <!--enroll page -->
    <!-- this is for lofin button -->

    <div class="body_head">
        <h1 style=" text-align: center; color:white;"> User Login Page</h1>
        <div class=" text_row">
            <div class="col-4">
                <div class="user-info">
                    <div class="profile_image">
                        <div class="image">
                            <img src="image/polaroid1.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text_row">
            <div class="col-4">
                <div class="user-info">
                    <h1 style="font-size:40px">Welcome To GROWTH UP</h1>
                    <h3>The easiest way to earn money from affiliate marketing</h3>
                    <div class='sign-in-up'>
                        <?php
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                        {
                        echo"
                        <div class='user'>
                            $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                        </div>
                        ";
                        }
                        else
                        {
                        echo"
                        <div class='sign-in-up'>
                           <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                        </div>
                        ";
                        }
                        ?>
                    </div>
                    <p>Click here for access all services</p>
                    <img src="image/growth-logo.png" width="200" height="200">
                </div>
            </div>
        </div>
    </div>

    <!-- this  section is ends -->


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