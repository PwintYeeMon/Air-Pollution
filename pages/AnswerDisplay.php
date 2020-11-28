<?php 
include 'NavBar.php';
include 'DBconnect.php';

$userid = $_SESSION['userid'];
$select = "SELECT * from usertbl u, questiontbl q, answertbl a 
			where u.UserID = q.UserID
			and q.QuestionID = a.QuestionID
			and q.UserID = '$userid'
			order by q.QuestionID";
$run = mysqli_query($connect,$select);
$count = mysqli_num_rows($run);
?>
<html>
<head>
	<title>Answer</title>
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
					for ($i=0; $i < $count; $i++) 
					{ 
						$num = $i+1;
						$array = mysqli_fetch_array($run);
						$questionid = $array['QuestionID'];
						$question = $array['QuestionName'];
						$answer = $array['AnswerName'];
				  ?>
					<hr>
					<div><b>Question <?php echo $num ?></b><input type='text' class='form-control rounded-0' value='<?php echo $question ?>' readonly></div>						
					<br>
					<div class='row form-group'>
						<div class='col-md-12'>
							<a class='btn btn-primary' href='AnswerDetail.php?questionid=<?php echo $questionid ?>'>See Answer</a>
						</div>
					</div>
					<hr>
			      <?php 
					}
					if ($count == 0) 
					{
						echo "<h3>Sorry,</h3>";
						echo "You have not asked any questions or <br> The questions has not been answered from our admins yet.";
						echo "<hr>";
					}
				  ?>
				   <div class='row form-group'>
						<div class='col-md-12'>
							<a class='btn btn-primary' href='ContactUs.php'>Back</a>
						</div>
					</div>
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