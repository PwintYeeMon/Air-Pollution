<?php 
include 'NavBar.php';
include 'DBconnect.php';

$select = "SELECT * from citytbl";
$run = mysqli_query($connect,$select);
$count = mysqli_num_rows($run);

if (isset($_POST['btnsearch'])) 
{
  $search = $_POST['txtsearch'];
  $searchselect = "SELECT * from citytbl where CityName = '$search'";
  $run = mysqli_query($connect,$searchselect);
  $count = mysqli_num_rows($run);

  if (isset($_SESSION['userid'])) 
  {
    $userid = $_SESSION['userid'];
    $date = date('Y-m-d');
    $insert = "INSERT into searchtbl(Search,SearchDate,UserID)
              values ('$search','$date','$userid')";
    $ret = mysqli_query($connect,$insert);
  }
  else
  {
    echo "<script>window.alert('Please LogIn to your account first')</script>";
    echo "<script>window.location='UserLogInForm.php'</script>";
  }
}
 ?>
<html>
<head>
	<title>Air Pollution Data</title>
</head>
<body>
  <form action="" method="post" class="p-5 bg-white">
    <div class="row form-group">
      <div class="col-md-12">
        <input type="text" name="txtsearch" required>
        <input type="submit" value="Search" name="btnsearch" class="btn btn-primary">
      </div>
    </div>
	 <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <?php 

          for ($i=0; $i < $count; $i++) 
          { 
          	$array = mysqli_fetch_array($run);
            $cityid = $array['CityID'];
      			$cityname = $array['CityName'];
      			$year = $array['Year'];
      			$image1 = $array['Image1'];
            $image2 = $array['Image2'];
      		  ?>
      			<div class="col-md-6 col-lg-4 mb-4 ">
              <div class="post-entry bg-white">
                <div class="image">
                  <img src="<?php echo $image1 ?>" alt="Image" class="img-fluid">
                </div>
                <div class="text p-4">
                  <h2 class="h5 text-black"><a><?php echo $cityname ?></a></h2>
                  <a href='AirPollutionDetail.php?cityid=<?php echo $cityid ?>' class="btn btn-primary rounded-0">View Details</a>
                </div>
              </div>
            </div>
          <?php 
          } 
          if ($count == 0) 
          {
            echo "<h3>No Results for <b>".$search."</b>.</h3>";
          }
          ?>
          </div>
      </div>
    </div>
    <?php 
      if ($_SESSION['userid']) 
      {
        echo "<a class='btn btn-primary' href='History.php'>Searched History</a>";
      }
    ?>
  </form> 
</body>
</html>
 <?php 
include 'Footer.php'
  ?>