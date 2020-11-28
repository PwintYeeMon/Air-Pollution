<?php 
include 'NavBar.php';
include 'DBconnect.php';

$userid = $_SESSION['userid'];
$select = "SELECT * from usertbl u, searchtbl s 
			where u.UserID = s.UserID
			and s.UserID = '$userid'";
$run = mysqli_query($connect,$select);
$count = mysqli_num_rows($run);

if (isset($_POST['btndeleteall'])) 
{
	$searchid = $_GET['searchid'];
	$delete = "DELETE from searchtbl";
	$run = mysqli_query($connect,$delete);

	echo "<script>window.alert('All History Deleted')</script>";
	echo "<script>window.location='History.php'</script>";
}
?>
<html>
<head>
	<title>History</title>
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
              <div class="row form-group">
                <div class="col-md-12">
                	<table style="width:100%; height:100%; text-align:center;">
                		
                		  <tr style="height:50px">
	                			<th>Search</th>
	                			<th>Date</th>
	                			<th><button class="btn" name="btndeleteall">Delete All</button></th>
	                	  </tr>

                		  <?php  
                		  	if ($count == 0) 
					          {
					            echo "<td colspan='3'>You haven't searched anything.</td>";
					          }
							for ($i=0; $i < $count; $i++) 
							{
								$array = mysqli_fetch_array($run);
								$userid = $array['UserID'];
								$search = $array['Search'];
								$date = $array['SearchDate'];
								$searchid = $array['SearchID'];
						  ?>
						  	
							<tr>
								<td><?php echo $search ?></td>
								<td><?php echo $date ?></td>
								<td><a href="DeleteHistory.php?searchid=<?php echo $searchid ?>">&#10005</a></td>
							</tr>
						
					      <?php 
					        }
						  ?>
					</table>
		       </div>
              </div>
            </form>

            <div class="row form-group">
		      <div class="col-md-12">
		        <a class="btn btn-primary" href="AirPollutionData.php">Back</a>
		      </div>
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