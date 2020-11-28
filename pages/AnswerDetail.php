<?php 
include 'NavBar.php';
include 'DBconnect.php';

if (isset($_GET['questionid'])) 
{
	$questionid = $_GET['questionid'];
	$select = "SELECT * from questiontbl q, answertbl a, admintbl ad 
			where q.QuestionID = a.QuestionID
			and a.AdminID = ad.AdminID
			and q.QuestionID = '$questionid'
			order by q.QuestionID";
	$run = mysqli_query($connect,$select);
	$count = mysqli_num_rows($run);

	$select1 = "SELECT * from questiontbl q, answertbl a, admintbl ad 
			where q.QuestionID = a.QuestionID
			and a.AdminID = ad.AdminID
			and q.QuestionID = '$questionid'
			order by q.QuestionID";
	$run1 = mysqli_query($connect,$select1);
}
?>
<html>
<head>
	<title>Answer Detail</title>
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
                  <?php 
                  	$array = mysqli_fetch_array($run1);

					$question = $array['QuestionName'];
					$answer = $array['AnswerName'];
					$adminname = $array['AdminName'];
				  ?>
					<hr>
					<div><b>Question</b><input type='text' class='form-control rounded-0' value='<?php echo $question ?>' readonly></div>
				  <?php 
					for ($i=0; $i < $count; $i++) 
					{
						echo "<br>";
						echo "<div><b>Answer :</b> $answer</div>";
						echo "<div><b>Answered By :</b> $adminname</div>";
				  } ?>
					<br>
					<div class='row form-group'>
						<div class='col-md-12'>
							<a class='btn btn-primary' href='AnswerDisplay.php'>Back</a>
						</div>
					</div>
					<hr>
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