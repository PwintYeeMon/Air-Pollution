<?php 
include 'NavBar.php';
include 'DBconnect.php';

$userid = $_GET['userid'];
$select = "SELECT * from usertbl where UserID = '$userid'";
$ret = mysqli_query($connect,$select);
$array = mysqli_fetch_array($ret);

if (isset($_POST['btnchange'])) 
{
  $userid = $_POST['txtuserid'];
	$password = $array['Password'];
  $currentpassword = $_POST['txtcurrentpassword'];
	$newpassword = $_POST['txtnewpassword'];
  $confirmnewpassword = $_POST['txtconfirmnewpassword'];
	$hashedcurrentpassword = md5($currentpassword);
  $hashednewpassword = md5($newpassword);

	if ($password != $hashedcurrentpassword) 
  {
    echo "<script>window.alert('Current Password is wrong. Re-enter your password')</script>";
  }
  elseif ($newpassword != $confirmnewpassword) 
  {
    echo "<script>window.alert('New Passwords do not match. Re-enter your password')</script>";
  }
  else
  {
    $update = "UPDATE usertbl 
              set Password = '$hashednewpassword'
              where UserID = '$userid'";
    $ret1 = mysqli_query($connect,$update);

    if ($ret1) 
    {
      echo "<script>window.alert('Password Changed Successfully.')</script>";
      echo "<script>window.location='Homepage.php'</script>";
    } 
    else
    {
      mysqli_error($connect);
    }
  }
}
 ?>

<html>
<head>
	<title>Change Password</title>
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
              <input type='hidden' name="txtuserid" value="<?php echo $array['UserID'] ?>">
              <h2 class="mb-4 text-black">Change Password</h2>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Current Password</label>
                  <input type="password" name="txtcurrentpassword" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">New Password</label>
                  <input type="password" name="txtnewpassword" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Confirm New Password</label>
                  <input type="password" name="txtconfirmnewpassword" class="form-control rounded-0" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Change" name="btnchange" class="btn btn-primary  py-2 px-4 rounded-0">
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