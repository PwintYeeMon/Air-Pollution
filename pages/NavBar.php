<?php 
session_start();
include 'DBconnect.php';
error_reporting(0);

$userid = $_SESSION['userid'];
$select1 = "SELECT * from usertbl where UserID = '$userid'";

$ret1 = mysqli_query($connect,$select1);
$array1 = mysqli_fetch_array($ret1);
$count1 = mysqli_num_rows($ret1);

$adminid = $_SESSION['adminid'];
$select2 = "SELECT * from admintbl where AdminID = '$adminid'";

$ret2 = mysqli_query($connect,$select2);
$array2 = mysqli_fetch_array($ret2);
$count2 = mysqli_num_rows($ret2);
 ?>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap bg-white">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            
            <div class="col-6 col-md-6 col-lg-2">
              <a href="HomePage.php" class="d-flex align-items-center site-logo">
                <span class="fl-bigmug-line-cube29 mr-3 cube-bg"></span>
                <span>Air&nbsp</span>
                <span>Pollution</span>
              </a>
            </div>

            <div class="col-6 col-md-6 col-lg-10">
              <ul class="unit-4 ml-auto text-right">

                <li class="text-left">
                  <a href="#">
                    <div class="d-flex align-items-center block-unit">
                      <div class="icon mr-0 mr-md-4">
                        <span class="fl-bigmug-line-headphones32 h3"></span>
                      </div>
                      <div class="d-none d-lg-block">
                        <span class="d-block text-gray-500 text-uppercase">24/7 Support</span>
                        <span class="h6">1-800-200-3911</span>
                      </div>
                    </div>
                  </a>
                </li>


                <li class="text-left">
                  <a href="https://www.gmail.com">
                    <div class="d-flex align-items-center block-unit">
                      <div class="icon mr-0 mr-md-4">
                        <span class="fl-bigmug-line-email64 h5"></span>
                      </div>
                      <div class="d-none d-lg-block">
                        <span class="d-block text-gray-500 text-uppercase">Email</span>
                        <span class="h6">airpollution@ap.com</span>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="text-left">
                  <a target="_blank" href="https://www.facebook.com">
                    <div class="d-flex align-items-center block-unit">
                      <div class="icon mr-0 mr-md-4">
                        <span class="fl-bigmug-line-chat55 h2"></span>
                      </div>
                      <div class="d-none d-lg-block">
                          <span class="d-block text-gray-500 text-uppercase">Follow us on Facebook</span>
                          <span class="h6">AP Air Pollution</span>
                        </a>
                      </div>
                    </div>
                  </a>
                </li>


              </ul>
            </div>

            

          </div>
          
        </div>
      </div>
      <div class="site-navbar bg-dark">
        <div class="container py-1">
          <div class="row align-items-center">

            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-left" role="navigation">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active"><a href="HomePage.php">Home</a></li>
                  <li><a href="AirPollutionData.php">City</a></li>
                  <li class="has-children">
                    <a>Account</a>
                    <ul class="dropdown arrow-top">
                      <?php 
                        if ($count1 == 1 && $count2 == 0) 
                        { 
                          echo "<li><a href='UserAccount.php?userid=".$array1['UserID']."'>".$array1['UserName']."</a></li>";
                          echo "<li><a href='UserFormUpdate.php?userid=".$array1['UserID']."'>Update Profile</a></li>";
                          echo "<li><a href='UserFormChangePassword.php?userid=".$array1['UserID']."'>Change Password</a></li>";
                          echo "<li><a href='LogOut.php'>LogOut</a></li>";
                        } 
                        elseif ($count1 == 0 && $count2 == 1) 
                        { 
                          echo "<li><a>".$array2['AdminName']."</a></li>";
                          echo "<li><a href='LogOut.php'>LogOut</a></li>";
                        }
                        elseif ($count1 == 0 && $count2 == 0) 
                        { ?>
                          <li class='has-children'>
                            <a>User</a>
                            <ul class='dropdown'>
                            <li><a href='UserLogInForm.php'>LogIn</a></li>
                            <li><a href='UserRegistrationForm.php'>Register</a></li>
                            </ul>
                          </li>
                          <li class='has-children'>
                            <a>Admin</a>
                            <ul class='dropdown'>
                            <li><a href='AdminLogInForm.php'>LogIn</a></li>
                            </ul>
                          </li>
                      <?php
                        }
                      ?>
                    </ul>
                  </li>
                  <?php 
                    if ($count1 == 1 || $count2 == 1) 
                    { 
                      echo "<li class='has-children'>";
                      echo "<a>Data Entry</a>";
                      echo "<ul class='dropdown arrow-top'>";
                      echo "<li><a href='CityData.php'>City Entry</a></li>";
                      if ($count2 == 1) 
                      {
                        echo "<li><a href='ProductEntry.php'>Product Entry</a></li>";
                      }
                      echo "</ul>";
                      echo "</li>";
                    } 
                  ?>
                  <?php 
                    if ($count1 == 1 || $count1 == 0 && $count2 == 0)
                    {
                      echo "<li><a href='ContactUs.php'>Contact</a></li>";
                      echo "<li><a href='FAQDisplay.php'>FAQ</a></li>";
                    }
                    elseif ($count2 == 1)
                    {
                      echo "<li><a href='QuestionDisplay.php'>Questions</a></li>";
                    }
                   ?>
                </ul>
              </nav>
            </div>
            <?php 
              if ($count1 == 0 && $count2 == 1) 
              { 
                echo "<div class='col-8 col-md-8 col-lg-4 text-right'>";
                echo "<a href='AdminRegistrationForm.php' class='btn btn-primary btn-outline-primary rounded-0 text-white py-2 px-4'>Register</a>";
                echo "&nbsp";
                echo "<a href='AdminLogInForm.php' class='btn btn-primary btn-primary rounded-0 py-2 px-4'>Login</a>";
                echo "</div>";
              }
              elseif ($count1 == 0 && $count2 == 0) 
              { 
                echo "<div class='col-8 col-md-8 col-lg-4 text-right'>";
                echo "<a href='UserRegistrationForm.php' class='btn btn-primary btn-outline-primary rounded-0 text-white py-2 px-4'>Register</a>";
                echo "&nbsp";
                echo "<a href='UserLogInForm.php' class='btn btn-primary btn-primary rounded-0 py-2 px-4'>Login</a>";
                echo "</div>";
              } 
              elseif ($count1 == 0 && $count2 == 0 || $count1 == 1 && $count2 == 0)
              {
                echo "<div class='col-8 col-md-8 col-lg-4 text-right'>";
                echo "<a href='SignUp.php' type='submit' class='btn py-2 px-4 btnsignup' title='Get a FREE air pollution testing kit!' style='background-color:red;color:white;''>Sign Up</a>";
                echo "</div>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</body>
</html>