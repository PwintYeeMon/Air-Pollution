
<?php 
include 'NavBar.php';
include 'DBconnect.php';

if (isset($_POST['btnsubmit'])) 
{
  $cityname = $_POST['txtcityname'];
  $pollutionlevel = $_POST['txtpollutionlevel'];
  $year = $_POST['txtyear'];
  $description = $_POST['txtdescription'];

  $image1 = $_FILES['txtimage1']['name'];
  $folder = "City Images/";

  $filename1 = $folder."_".$image1;
  $copied1 = copy($_FILES['txtimage1']['tmp_name'],$filename1);
  
  $image2 = $_FILES['txtimage2']['name'];

  $filename2 = $folder."_".$image2;
  $copied2 = copy($_FILES['txtimage2']['tmp_name'],$filename2);
  
  $insert = "INSERT INTO citytbl(CityName,PollutionLevel,Year,Description,Image1,Image2) 
            VALUES ('$cityname','$pollutionlevel','$year','$description','$filename1','$filename2')";
  $ret = mysqli_query($connect,$insert);

  if ($ret) 
  {
    echo "<script>window.alert('Inserted Successfully')</script>";
  }
  else
  {
    mysqli_error($connect);
  }
}
?>

<html>
<head>
	<title>City</title>
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
              <h2 class="mb-4 text-black">City</h2>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">City Name</label>
                  <input type="text" name="txtcityname" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Pollution Level</label>
                  <input type="text" name="txtpollutionlevel" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Year</label>
                  <input type="text" name="txtyear" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Description</label>
                  <textarea type="text" name="txtdescription" class="form-control rounded-0" required></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Image1</label>
                  <input type="file" name="txtimage1" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Image2</label>
                  <input type="file" name="txtimage2" class="form-control rounded-0" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enter" name="btnsubmit" class="btn btn-primary  py-2 px-4 rounded-0">
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