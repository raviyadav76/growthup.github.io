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
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <header>
        <h2>GROWTH UP</h2>
        <nav>


            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Course</a>
            <a href="#">Contacts Us</a>

        </nav>

        <?php 
    
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
        echo"
          <div class='user'>
            $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
<br></br>
           <a href='user_profile.php'>Profile</a> 
             
            
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

    <div class="user">
        <div class="col-2 bar">
            <div class="image">
                <img src="image/growth-logo.png" alt="">
                <h1 style=" text-align:center; font-size: 17px;">Welcome <br><?php echo $_SESSION['username']; ?></h1>
                <ul>
                    <li><a href="#">My Course</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="affilate-program.php">Affilate Program</a></li>
                    <li><a href="#">Traning</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Offer</a></li>
                    <li><a href="#">Official Document</a></li>
                </ul>
            </div>
        </div>


        <div class="col-9">
            <div class="container">

                <h1 class="heading">Gold Package Course</h1>

                <div class="box-container">

                    <div class="box">
                        <img src="image/7.png" alt="">
                        <h3>INSTAGRAM MASTERY</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                        <a href="#" class="btn">read more</a>
                    </div>

                    <div class="box">
                        <img src="image/8.png" alt="">
                        <h3> VIDEO EDITING MASTERY</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                        <a href="#" class="btn">read more</a>
                    </div>

                    <div class="box">
                        <img src="image/9.png" alt="">
                        <h3>Pro Lead Generation</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                        <a href="#" class="btn">read more</a>
                    </div>


                </div>

            </div>
        </div>
    </div>

</body>

</html>