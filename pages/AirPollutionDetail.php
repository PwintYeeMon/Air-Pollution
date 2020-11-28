<?php 
include 'NavBar.php';
include 'DBconnect.php';

if (isset($_GET['cityid'])) 
{
	$cityid = $_GET['cityid'];
	$select = "SELECT * from citytbl 
			where CityID = '$cityid'";
	$run = mysqli_query($connect,$select);

   	$array = mysqli_fetch_array($run);

	$cityname = $array['CityName'];
	$year = $array['Year'];
	$description = $array['Description'];
	$image1 = $array['Image1'];
	$image2 = $array['Image2'];
	$level = $array['PollutionLevel'];
}
?>
<html>
<head>
	<title>Air Pollution Detail</title>
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
  <form action="" method="post" class="p-5 bg-white">
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">

        	<div class="col-md-6 col-lg-4 mb-4 ">
              <div class="bg-white">
                <div class="image">
                  	<div class="text p-4">
	                  <h2 class="h2" style="color:#7cbd1e;"><?php echo $cityname ?></h2>
	                  <span class="text-uppercase date d-block mb-2"><small>&bullet; <?php echo $year ?></small></span>
	                  <span class="text-uppercase date d-block mb-2"><small>&bullet; Pollution Level - <?php echo $level ?></small></span>
	                  <p class="mb-0"><?php echo $description ?></p>	
                	</div>
                </div>
           	  </div>
            </div>
      		<div class="col-md-6 col-lg-4 mb-4 ">
              <div class="post-entry bg-white">
                <div class="image">
                  <img src="<?php echo $image2 ?>" alt="Image" class="img-fluid">
                </div>
           	  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 ">
              <div class="post-entry bg-white">
                <div class="image">
                  <img src="<?php echo $image1 ?>" alt="Image" class="img-fluid">
                </div>
           	  </div>
            </div>
            <div class="p-4">
              <a href='AirPollutionData.php' class="btn btn-primary py-2 px-4">Back</a>
            </div>
          </div>
      </div>
    </div>
  </form> 
</body>
</html>
<?php 
include 'Footer.php';
 ?> 