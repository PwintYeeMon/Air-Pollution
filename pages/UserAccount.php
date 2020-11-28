<?php 
include 'NavBar.php';
include 'DBconnect.php';

$userid = $_GET['userid'];
$select = "SELECT * from usertbl where UserID = '$userid'";
$ret = mysqli_query($connect,$select);
$array = mysqli_fetch_array($ret);

if (isset($_POST['btnupdate'])) 
{
  echo "<script>window.location='UserFormUpdate.php?userid=$userid'</script>";
}
elseif (isset($_POST['btnlogout'])) 
{
  echo "<script>window.location='LogOut.php'</script>";
}
 ?>

<html>
<head>
	<title>User Update</title>
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
              <h2 class="mb-4 text-black">User Information</h2>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" name="txtfullname" class="form-control rounded-0" value="<?php echo $array['FullName']; ?>" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="username">User Name</label>
                  <input type="text" name="txtusername" class="form-control rounded-0" value="<?php echo $array['UserName']; ?>" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="txtemail" class="form-control rounded-0" value="<?php echo $array['Email']; ?>" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="date">Date Of Birth</label>
                  <input type="date" name="txtdob" class="form-control rounded-0" value="<?php echo $array['DOB']; ?>" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="postcode">Postcode</label>
                  <input type="number" name="txtpostcode" class="form-control rounded-0" value="<?php echo $array['Postcode']; ?>" readonly>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update" name="btnupdate" class="btn btn-primary  py-2 px-4 rounded-0">
                  <input type="submit" value="LogOut" name="btnlogout" class="btn btn-primary  py-2 px-4 rounded-0">
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