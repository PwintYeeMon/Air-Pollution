
<?php 
include 'NavBar.php';
include 'DBconnect.php';

if (isset($_POST['btnsubmit'])) 
{
  $productname = $_POST['txtproductname'];

  $image = $_FILES['txtimage']['name'];
  $folder = "Kit Images/";

  $filename = $folder."_".$image;
  $copied = copy($_FILES['txtimage']['tmp_name'],$filename);
  
  $insert = "INSERT INTO producttbl(ProductName,Image) 
            VALUES ('$productname','$filename')";
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
              <h2 class="mb-4 text-black">Air Pollution Testing Kit</h2>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Product Name</label>
                  <input type="text" name="txtproductname" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Image</label>
                  <input type="file" name="txtimage" class="form-control rounded-0" required>
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