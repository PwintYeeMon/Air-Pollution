<?php 
include 'NavBar.php';
include 'DBconnect.php';

$userid = $_SESSION['userid'];
$select = "SELECT * from producttbl p, signuptbl s where p.ProductID = s.ProductID and s.UserID = '$userid'";
$run = mysqli_query($connect,$select);
$array = mysqli_fetch_array($run);

$productname = $array['ProductName'];
$image = $array['Image'];
$date = $array['Date'];
 ?>
<html>
<head>
	<title>Air Pollution Data</title>
</head>
<body>
  <form action="" method="post" class="p-5 bg-white">
	<div class="site-section">
      <div class="container" style="text-align:center;">
      	<hr>
        	<h1>THANKS FOR SIGNING UP</h1>
        <hr>
        	<h3>this air pollution kit you have chosen <br> will be delivered to you in next few days</h3>
        <hr>
        <div class="row mb-5">

        	<div class="col-md-6 col-lg-4 mb-4 ">
      		  <div class="post-entry" style="background-color:#7cbd1e">
	             <div class="text p-4">
	              <h2 class="h5 text-white"><a><?php echo $productname ?></a></h2>
	            </div>
	          </div>
	        </div>
      		<div class="col-md-6 col-lg-4 mb-4 ">
      		  <div class="post-entry bg-white">
	            <div class="image">
	              <img src="<?php echo $image ?>" alt="Image" class="img-fluid">
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-4 mb-4 ">
      		  <div class="post-entry" style="background-color:#7cbd1e">
	            <div class="image">
	              <br>
	              <h2 class="h5 text-white"><a><?php echo $date ?></a></h2>
	              <br>
	            </div>
	          </div>
	        </div>
	        
        </div>
      </div>
    </div>
  </form> 
</body>
</html>
 <?php 
include 'Footer.php'
  ?>