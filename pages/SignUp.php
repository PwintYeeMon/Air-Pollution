<?php 
include 'NavBar.php';
include 'DBconnect.php';

if (isset($_SESSION['userid'])) 
{
  $userid = $_SESSION['userid'];
  $username = $_SESSION['username'];
}
else
{
  echo "<script>window.alert('Please LogIn to your account first')</script>";
  echo "<script>window.location='UserLogInForm.php'</script>";
}

if (isset($_POST['btnsubmit'])) 
{
  $reason = $_POST['txtreason'];
  $date = $_POST['txtdate'];
  $productid = $_POST['optproductid'];
  $userid = $_SESSION['userid'];

  $userselect = "SELECT Status from usertbl where UserID = '$userid'";
  $userrun = mysqli_query($connect,$userselect);
  $statusarray = mysqli_fetch_array($userrun); 

  if ($statusarray['Status'] == null) 
  {
    $insert = "INSERT INTO signuptbl(Reason,Date,UserID,ProductID) 
            VALUES ('$reason','$date','$userid','$productid')";
    $ret = mysqli_query($connect,$insert);
    $update = "UPDATE usertbl set status = 'Received' where UserID = '$userid'";
    $updateret = mysqli_query($connect,$update);

    if ($ret) 
    {
      echo "<script>window.location='Thank.php'</script>";
    }
    else
    {
      mysqli_error($connect);
    }
  } 
  else
  {
    echo "<script>window.alert('You have already received')</script>";
    echo "<script>window.location='HomePage.php'</script>";
  }
}
?>

<html>
<head>
  <title>Sign Up</title>
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
              <h2 class="mb-4 text-black">Sign Up</h2>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">UserName</label>
                  <input type="text" value="<?php echo $username ?>" class="form-control rounded-0" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Date</label>
                  <input type="date" name="txtdate" value="<?php echo date('Y-m-d') ?>" class="form-control rounded-0" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Reason</label>
                  <textarea type="text" name="txtreason" class="form-control rounded-0" required></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Please choose free Air Pollution Kit</label><br>
                  <select class="form-control rounded-0" name="optproductid">
                    <?php
                      $select = "SELECT * from producttbl";
                      $run = mysqli_query($connect,$select);
                      $count = mysqli_num_rows($run);

                      for ($i=0; $i < $count; $i++) 
                      { 
                        $array = mysqli_fetch_array($run);
                        $productid = $array['ProductID'];
                        $productname = $array['ProductName'];

                        echo "<option value='$productid'>$productname</option>";
                      }
                    ?>
                  </select>
                </div>
              </div>
            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Done" name="btnsubmit" class="btn btn-primary  py-2 px-4 rounded-0">
                  <input type="reset" value="Cancel" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4">

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Wanna get up-to-date information from us?</h3>
              <p>Follow us right now to get notifications and receive a free air pollution testing kit.</p>
            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Lombard Street, Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">airpollution@ap.com</a></p>
            </div>
            
          </div>

          
        </div>
      </div>
    </div>
</body>
</html>

<?php 
include 'Footer.php';
 ?>