<?php 
include 'DBconnect.php';
include 'NavBar.php';

if (isset($_GET['questionid'])) 
{
	$questionid = $_GET['questionid'];
	$select = "SELECT * from usertbl u, questiontbl q 
			where u.UserID = q.UserID
			and q.QuestionID = '$questionid'";
	$run = mysqli_query($connect,$select);
	$array = mysqli_fetch_array($run);
}

if (isset($_POST['btnpost'])) 
{
	$reply = $_POST['txtreply'];
	$questionid = $_POST['txtquestionid'];
  $adminid = $_POST['txtadminid'];

	$insert = "INSERT into answertbl(AnswerName,QuestionID,AdminID)
				values ('$reply','$questionid','$adminid')";
	$ret = mysqli_query($connect,$insert);
  $update = "UPDATE questiontbl set Status = 'Done' 
        where QuestionID = '$questionid'";
  $run = mysqli_query($connect,$update);

	if ($ret) 
	{
		echo "<script>window.alert('Answered Successfully')</script>";
		echo "<script>window.location='QuestionDisplay.php'</script>";
	}
}
 ?>
 <html>
 <head>
 	<title>AdminAnswer</title>
 </head>
 <body>
 	<div class="site-section bg-light">
    <div class="container">
       	<div class="row">
          <div class="col-md-12 col-lg-6 mb-5">
            <form action=" " method="post" enctype="multipart/form-data" class="p-5 bg-white"> 

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Question</label>
                  <input type="text" name="txtquestion" class="form-control rounded-0" value="<?php echo $array['QuestionName']; ?>" readonly>
 				           <input type="hidden" name="txtquestionid" value="<?php echo $array['QuestionID'] ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Asked by</label>
                  <input type="text" name="txtusername" class="form-control rounded-0" value="<?php echo $array['UserName']; ?>" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Reply</label>
                  <input type="text" name="txtreply" class="form-control rounded-0" required>
                </div>
              </div>
              <input type="hidden" name="txtadminid" class="form-control" value="<?php echo $adminid ?>">
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Reply" name="btnpost" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
 </body>
 </html>