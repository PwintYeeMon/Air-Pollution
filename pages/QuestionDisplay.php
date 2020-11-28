<?php 
include 'NavBar.php';
include 'DBconnect.php';

$select = "SELECT * from usertbl u, questiontbl q 
			where u.UserID = q.UserID
			order by q.QuestionID";
$run = mysqli_query($connect,$select);
$count = mysqli_num_rows($run);
?>
<html>
<head>
	<title>Questions</title>
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
						$array = mysqli_fetch_array($run);

						$questionid = $array['QuestionID'];
						$question = $array['QuestionName'];
						$username = $array['UserName'];
						$status = $array['Status'];

						echo "<hr>";
						echo "<div><h4>QuestionID : $questionid</h4></div>";
						echo "<div><b>Question</b><input type='text' class='form-control rounded-0' value='$question' readonly></div>";
						echo "<div><b>Asked By</b><input type='text' class='form-control rounded-0' value='$username' readonly></div>";
						echo "<div><b>Status</b><input type='text' class='form-control rounded-0' value='$status' readonly></div>";
						echo "<br>";
						echo "<div class='row form-group'>";
						echo "<div class='col-md-12'>";
						echo "<a class='btn btn-primary' href='QuestionDetail.php?questionid=$questionid'>Reply</a>";
						echo "</div>";
						echo "</div>";
						echo "<hr>";
					}
				 ?>
                </div>
              </div>
            </form>
          </div>

          
        </div>
      </div>
    </div>
</body>
</html>