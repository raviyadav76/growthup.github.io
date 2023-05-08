<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username']))

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- nagivation css link  -->
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
    <!-- this code is for profile page  -->



    <div class="body_head">
        <h1 style=" text-align: center"> User Profile</h1>
        <div class=" row">
            <div class="col-4">
                <div class="user_info">
                    <div class="image">
                        <h1></h1><?php echo $_SESSION['username'];?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="user-info">
                    <h3>PERSONAL INFORMATION</h3>
                    <p>Name</p>
                    <div class="user-name">

                    </div>
                    <p>User Id</p>
                    <div class="user-name">

                    </div>
                    <p>Mobile</p>
                    <div class="user-name">

                    </div>
                    <p>City</p>
                    <div class="user-name">

                    </div>
                    <p>Address</p>
                    <div class="user-name">

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="note">
                    <h3 style=" text-align: left;">Dashbord</h3>
                    <div class="danger">
                        <p>Today earning</p>
                        <p><strong>

                                <?php 
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
      echo"<h1 style='text-align: center; margin-top: 200px;'> WELCOME TO GROWTH UP -  $_SESSION[username]</h1>";
      $query="SELECT * FROM `registered_users` WHERE `username`='$_SESSION[username]'";
      $result=mysqli_query($con,$query);
      $result_fetch=mysqli_fetch_assoc($result);

      echo"<h3 class='box'> 
        Your Referral Code: $result_fetch[referral_code] 
      </h3>";
      echo"<h3 class='box'> 
        Your Referral Earning: $result_fetch[referral_point] 
      </h3>";

      echo"<h3 class='box'>
        Your Referral Link: 
          <a href='http://localhost/referral system/?refer=$result_fetch[referral_code]'>
            http://localhost/referral system/?refer=$result_fetch[referral_code]
          </a> 
      </h3>";
      
    }
  ?>
                                <?php echo "₹";    echo "800";?>
                            </strong></p>
                    </div>
                    <div class="danger">
                        <p>Last 7 Days Earning</p>
                        <p><strong>
                                <?php echo "₹";    echo "800";?>
                            </strong></p>
                    </div>
                    <div class="danger">
                        <p>All Time Earning</p>
                        <p><strong>
                                <?php echo "₹";    echo "800";?>
                            </strong></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>