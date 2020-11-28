<?php 
include 'NavBar.php';
?>
<html>
<head>
  <title>Contact Us</title>
</head>
<body>
<form action="FAQDisplay.php" method="post">
  <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            <form action="" metnod="post" class="p-5 bg-white">
              
              <?php 
                if ($_SESSION['userid']) 
                {
                  echo "<a class='btn btn-primary py-2 px-4 rounded-0' href='AnswerDisplay.php'>Previous questions</a>";
                }
              ?>

              <div class="row form-group">
                <div class="col-md-12">      
                  <input type="hidden" name="txtuserid" class="form-control" value="<?php echo $userid ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Question</label> 
                  <input type="text" name="txtquestion" class="form-control" placeholder="Enter Question" required>
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" name="btnsend" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Lombard Street, Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">airpollution@ap.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Air pollution occurs when harmful or excessive quantities of substances are introduced into Earth's atmosphere. Sources of air pollution include gases (such as ammonia, carbon monoxide, sulfur dioxide, nitrous oxides, methane and chlorofluorocarbons), particulates (both organic and inorganic), and biological molecules.</p>
              <p><a href="AirPollutionData.php" class="btn btn-primary  py-2 px-4 rounded-0">Learn More</a></p>
            </div>
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