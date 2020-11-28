<?php 
include 'NavBar.php';
include 'DBconnect.php';

if (isset($_POST['btnsend'])) 
{
  $question = $_POST['txtquestion'];
  if (isset($_SESSION['userid'])) 
  {
    $userid = $_SESSION['userid'];
  }
  else
  {
    echo "<script>window.alert('Please LogIn to your account first')</script>";
    echo "<script>window.location='UserLogInForm.php'</script>";
  }
}

if (isset($_POST['btncontinue'])) 
{
  $userquestion = $_POST['txtquestion'];
  $userid = $_POST['txtuserid'];

  $insert = "INSERT into questiontbl (QuestionName,UserID) 
              values ('$userquestion','$userid')";
  $run = mysqli_query($connect,$insert);
  if($run)
  {
    echo "<script>window.alert('Your question is being asked')</script>";
    echo "<script>window.location='ContactUs.php'</script>";
  }
  else
  {
    mysqli_error($run);
  }
}
?>
<html>
<head>
  <title>FAQ</title>
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
  <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Asked Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is air pollution?<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Air pollution is a type of environmental pollution that affects the air and is usually caused by smoke or other harmful gases, mainly oxides of carbon, sulphur and nitrogen. In other words, air pollution is the contamination of air due to the presence or introduction of a substance which has a poisonous effect.</p>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">What causes air pollution?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Air pollution occurs when harmful or excessive quantities of substances are introduced into Earth's atmosphere. Sources of air pollution include gases (such as ammonia, carbon monoxide, sulphur dioxide, nitrous oxides, methane and chlorofluorocarbons), particulates (both organic and inorganic), and biological molecules.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">What are the effects of air pollution?<span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Long-term health effects from air pollution include heart disease, lung cancer, and respiratory diseases such as emphysema. Air pollution can also cause long-term damage to people's nerves, brain, kidneys, liver, and other organs. Some scientists suspect air pollutants cause birth defects.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">What is the solution of air pollution?<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>The most basic solution for air pollution is to move away from fossil fuels, replacing them with alternative energies like solar, wind and geothermal. Producing clean energy is crucial. But equally important is to reduce our consumption of energy by adopting responsible habits and using more efficient devices.</p>
                </div>
              </div>
            </div>

          </div>
          </div>
        </div>
      
      </div>
    </div>

    <form action="" method="post" class="p-5 bg-white">

      <div class="row form-group">
        <div class="col-md-12">      
          <input type="hidden" name="txtuserid" class="form-control" value="<?php echo $userid ?>">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12"> 
          <input type="hidden" value="<?php echo $question ?>" name="txtquestion" class="form-control" placeholder="Enter Question">
        </div>
      </div>
      <?php 
        if ($question !== null) 
        { ?>
          <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" value="Continue to ask Question" name="btncontinue" class="btn btn-primary  py-2 px-4 rounded-0">
          </div>
          </div>
      <?php } ?>
    </form>

</body>
</html>
<?php 
include 'Footer.php';
?>