<?php 
include 'NavBar.php';
include 'DBconnect.php';

$username = $_SESSION['username'];
$select = "SELECT * from usertbl where UserName = '$username'";

$ret = mysqli_query($connect,$select);
$array = mysqli_fetch_array($ret);


 ?>

<html>
<head>
	<title></title>
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

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url('Air Pollution Images/9.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5">Be a part of SOLUTION</h1>
              <h1 class="mb-5">not part of POLLUTION</h1>
              <p>
                <a href="AirPollutionData.php" class="btn btn-primary py-3 px-5 rounded-0">Air Pollution Data</a>
                <a href="SignUp.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0">Get In Touch</a>
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url('Air Pollution Images/1.gif');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5">Reduce air polllution and Increase your life span</h1>
              <p>
                <a href="AirPollutionData.php" class="btn btn-primary py-3 px-5 rounded-0">Air Pollution Data</a>
                <a href="SignUp.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0">Get In Touch</a>
              </p>
            </div>
          </div>
        </div>
      </div>  

       <div class="site-blocks-cover overlay" style="background-image: url('Air Pollution Images/3.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5">Save the Earth!</h1>
              <p>
                <a href="AirPollutionData.php" class="btn btn-primary py-3 px-5 rounded-0">Air Pollution Data</a>
                <a href="SignUp.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0">Get In Touch</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <h2>Don't let our future grow up in SMOKE!</h2>
          </div>
        </div>
        <div class="row hosting">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">

            <div class="unit-2 text-center border py-5 h-100 bg-white">
              <span class="icon fl-bigmug-line-paper122 text-primary"></span>
              <h3 class="h4 text-black">Air Pollution Data</h3>
              <p class="mb-4 text-gray-500">air pollution level per city</p>
              <p><a href="AirPollutionData.php" class="btn btn-primary py-2 px-4 rounded-0">View Details</a></p>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            
            <div class="unit-2 text-center border py-5 h-100 bg-white">
              <span class="icon fl-bigmug-line-airplane86 text-primary"></span>
              <h3 class="h4 text-black">Home Pollution Testing Kit</h3>
              <p class="mb-4 text-gray-500">get a free one by signing up</p>
              <p><a href="SignUp.php" class="btn btn-primary py-2 px-4 rounded-0">View Details</a></p>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            
            <div class="unit-2 text-center border py-5 h-100 bg-white">
              <span class="icon fl-bigmug-line-hot67 text-primary"></span>
              <h3 class="h4 text-black">Frequently Asked Questions</h3>
              <p class="mb-4 text-gray-500">read to know more about air pollution effects</p>
              <p><a href="FAQDisplay.php" class="btn btn-primary py-2 px-4 rounded-0">View Details</a></p>
            </div>

          </div>
        </div>
      
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center text-left">
            <div class="col-md-7">
              <h1 class="mb-2">Satisfied Clients</h1>
              <p class="mb-5">Many accessible features once you have logged in</p>
              <p>
                <a href="UserRegistrationForm.php" class="btn btn-primary py-3 px-5 rounded-0">Register Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>  

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Prevent Air Pollution</h2>
          </div>
        </div>
        <div class="row hosting">

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">

            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-equalization3"></span>
                </div>
                <h2 class="h5">Causes of air pollution</h2>
              </div>
              <div class="unit-3-body">
                <p>Air pollution occurs when harmful or excessive quantities of substances are introduced into Earth's atmosphere. Sources of air pollution include gases (such as ammonia, carbon monoxide, sulfur dioxide, nitrous oxides, methane and chlorofluorocarbons), particulates (both organic and inorganic), and biological molecules.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4">
            
            <div style="margin-left:-25px;margin-top:'">
              <iframe style="margin-top:90px;" width="400" height="225" src="https://www.youtube.com/embed/e6rglsLy1Ys" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="600">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-hot67"></span>
                </div>
                <h2 class="h5">How to prevent them</h2>
              </div>
              <div class="unit-3-body">
                <p>The most basic solution for air pollution is to move away from fossil fuels, replacing them with alternative energies like solar, wind and geothermal. Producing clean energy is crucial. But equally important is to reduce our consumption of energy by adopting responsible habits and using more efficient devices.</p>
              </div>
            </div>

          </div>
          

        </div>
      
      </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
        var myMap;
        var myLatlng = new google.maps.LatLng(51.507351,-0.127758);
        function initialize() {
            var mapOptions = {
                zoom: 5,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP  ,
                scrollwheel: false
            }
            myMap = new google.maps.Map(document.getElementById('map'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: myMap,
                title: 'Name Of Business',
                icon: 'http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png'
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <div id="map" style="width:100%; height: 500px;">

    </div>
    <br>
</div>
</body>
</html>

<?php 
include 'Footer.php';
 ?>