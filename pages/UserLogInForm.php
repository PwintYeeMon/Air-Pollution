<?php 
include 'NavBar.php';
include 'DBconnect.php';

$select1 = "SELECT UserName from Usertbl";
$run = mysqli_query($connect,$select1);
$count1 = mysqli_num_rows($run);

if (isset($_POST['btnsubmit'])) 
{
  $username = $_POST['txtusername'];
  $password = $_POST['txtpassword'];
  $hashedpassword = md5($password);
  $notsame = 0;

  for ($i=0; $i < $count1; $i++) 
  { 
    $array1 = mysqli_fetch_array($run); 
    if ($username != $array1['UserName']) 
    {
      $notsame ++;
    }
  }

  if ($notsame == $count1)
  {
    echo "<script>window.alert('Cannot Find Your Account. Please Register First.')</script>";
    echo "<script>window.location='UserRegistrationForm.php'</script>";
  }
  else
  {
    $select = "SELECT * from usertbl where UserName = '$username' and Password ='$hashedpassword'";
    $ret = mysqli_query($connect,$select);
    $count = mysqli_num_rows($ret);
    $array = mysqli_fetch_array($ret);

    if ($count == 1) 
    {
      $_SESSION['userid'] = $array['UserID'];
      $_SESSION['username'] = $array['UserName'];
      $_SESSION['password'] = $array['Password'];

      echo "<script>window.alert('Login Successful!')</script>";
      echo "<script>window.location='Homepage.php'</script>";
    } 
    elseif ($_SESSION['errorcounter']) 
    {
      $countno = $_SESSION['errorcounter'];
      if ($countno == 1) 
      {
        $_SESSION['errorcounter'] = 2;
        echo "<script>window.alert('Password Incorrect. Login Failed! Login Attempt - 2')</script>";
      } 
      else 
      {
        $_SESSION['errorcounter'] = 3;
        echo "<script>window.alert('Password Incorrect. Login Failed! Your account is locked for 10 mins')</script>";
        echo "<script>window.location='LoginTimer.php'</script>";
      }
      
    } 
    elseif ($hashedpassword != $array['Password']) 
    {
      $_SESSION['errorcounter'] = 1;
      echo "<script>window.alert('Password Incorrect. Login Failed! Login Attempt - 1')</script>";
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
              <h2 class="mb-4 text-black">Log in</h2>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="username">User Name</label>
                  <input type="username" name="txtusername" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Password</label>
                  <input type="password" id="password" name="txtpassword" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group mb-2">
                <div class="col-md-12">
                  <p>No account yet? <a href="UserRegistrationForm.php">Register</a></p>
                </label>
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