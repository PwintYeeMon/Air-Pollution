<?php 
include 'NavBar.php';
include 'DBconnect.php';

if (isset($_POST['btnsubmit'])) 
{
  $adminname = $_POST['txtadminname'];
  $password = $_POST['txtpassword'];
  $hashedpassword = md5($password);

  $select = "SELECT * from Admintbl where AdminName = '$adminname' and Password ='$hashedpassword'";
  $ret = mysqli_query($connect,$select);
  $count = mysqli_num_rows($ret);
  $array = mysqli_fetch_array($ret);

  if ($count == 1) 
  {
    $_SESSION['adminid'] = $array['AdminID'];
    $_SESSION['adminname'] = $array['AdminName'];
    $_SESSION['password'] = $array['Password'];

    echo "<script>window.alert('Login Successful!')</script>";
    echo "<script>window.location='Homepage.php'</script>";
  } 
  else 
  {
    if ($_SESSION['errorcounter']) 
    {
      $countno = $_SESSION['errorcounter'];
      if ($countno == 1) 
      {
        $_SESSION['errorcounter'] = 2;
        echo "<script>window.alert('Login Failed! Login Attempt - 2')</script>";
      } 
      else 
      {
        $_SESSION['errorcounter'] = 2;
        echo "<script>window.alert('Login Failed! Your account is locked for 10 mins')</script>";
        echo "<script>window.location='LoginTimer.php'</script>";
      }
      
    } 
    else 
    {
      $_SESSION['errorcounter'] = 1;
      echo "<script>window.alert('Login Failed! Login Attempt - 1')</script>";
    }
  }
}
 ?>

<html>
<head>
	<title>User Log In</title>
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
<div class="site-section bg-light">
    <div class="container">
       	<div class="row">

          <div class="col-md-12 col-lg-6 mb-5">
          
            
            
            <form action=" " method="post" enctype="multipart/form-data" class="p-5 bg-white">
              <h2 class="mb-4 text-black">Admin Log in</h2>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="username">Admin Name</label>
                  <input type="text" name="txtadminname" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Password</label>
                  <input type="password" id="password" name="txtpassword" class="form-control rounded-0" required>
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Login" name="btnsubmit" class="btn btn-primary  py-2 px-4 rounded-0">
                  <input type="reset" value="Cancel" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          
        </div>
      </div>
    </div>
</body>
</html>

<?php 
include 'Footer.php';
 ?>