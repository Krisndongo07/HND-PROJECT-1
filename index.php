<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Sotar Online Service Management System</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Sotar Company</a>
    <span class="navbar-text"></span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->
<!--start header jumbotron-->
<header class="jumbotron back-image" style="background-image:url(images/Truck.jpg);">
<div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold"> WELCOME TO SOTAR</h1>
      <p class="font-italic">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
</header><!--End Header Jumbotron-->
<div class="container">
    <!-- Start Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">SOTAR Services</h3>
      <p>
        Customers will find sotar to be an invaluable partner in their projects due to its unique blend of offerings. Not only does sotar provide heavy machinery rentals, but it also specializesin the rentals of caterpillar engines,ensuring a powerful and reliable energy source for various applications. What sets sotar apart is its holistic approach- not only can customers access top-notch machinery. but the company also goes thhe extra mile by offering comprehensive maintenance services. This means that customers can focus on their tasks with peace of mind, knowing that the equipment they rely on will be in prime condition through their rental period. Sotar's commitmment to quality, performance, and customer satisfaction makes it the go-to choice for those seeking a seamless and efficient heavy machinery rental experience                                                                                                                      
      </p>

    </div>
  </div> <!--End Introduction Section-->

  <!--start services section-->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault repair</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-truck fa-8x"></i></a>
        <h4 class="mt-4">Truck maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-hard-hat fa-8x"></i></a>
        <h4 class="mt-4">Btp construction</h4>
      </div>
    </div>
  </div>
  </div> <!--end service section container-->
  <!--start registration form-->
   <?php include('UserRegistration.php') ?>
</div><!--End registration form container-->
  

<!-- Start Customers we worked already-->
<div class="jumbotron bg-danger">
  <div class="container">
    <h2 class="text-center text-white" >Customers we worked already</h2>
    <div class="row mt-5">
       <div class="col-lg-3 col-sm-6"><!-- Start 1st column -->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/box-bg1.png" class="img-fluid" style="border: radius 100px;" alt="box-bg1">
            <h4 class="card-title">Christian Tchatchouang</h4>
            <p class="card-text">The director of SOTAR Company</p>
          </div>

        </div>

       </div><!-- End 1st column -->
       <div class="col-lg-3 col-sm-6"><!-- Start 2nd column -->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/slide1.jpg" class="img-fluid" style="border: radius 100px;" alt="slide1">
            <h4 class="card-title">Steeve Tchatchouang</h4>
            <p class="card-text">The IT Engineer of SOTAR Company</p>
          </div>

        </div>

       </div><!-- End 2nd column -->
       <div class="col-lg-3 col-sm-6"><!-- Start 3rd column -->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/slide2.jpg" class="img-fluid" style="border: radius 100px;" alt="slide2">
            <h4 class="card-title">Delphine Nwafo</h4>
            <p class="card-text">The Secreteriat of SOTAR Company</p>
          </div>

        </div>

       </div><!-- End 3rd column -->
       <div class="col-lg-3 col-sm-6"><!-- Start 4th column -->
        <div class="card shadow-lg mb-2">
          <div class="card-body text-center">
            <img src="images/slide6.jpg" class="img-fluid" style="border: radius 100px;" alt="slide6">
            <h4 class="card-title">Pascal Nfor</h4>
            <p class="card-text">The Mechanical Egineer of SOTAR Company</p>
          </div>

        </div>

       </div><!-- End 4th column -->
    </div>

  </div>
  </div><!-- End Customers we worked already -->

  <!-- Start Contact Us -->
  <div class="container" id="Contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
       <!-- start 1st column-->
       <?php include('ContactForm.php') ?>
       <!-- End 1st column-->
    </div>
    <div class="col-md-4 text-center"><!-- start 2nd column -->
       <strong>Headquarter:</stong><br>
       SOTAR pvt SARL,<br>
       Bonaberi,Douala<br>
       BP- 1194<br>
       Phone number: +237 678644060<br>
       <a href="#" target="_blank">info@sotarsarl.com</a><br>
       
       
    </div><!--End second column-->

  </div><!-- End Contact Us-->
  <!-- Start Footer -->
  <footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
    <div class="row py-3">
      <div class="col-md-6"><!-- Start 1st column-->
      <span class="pr-2"> Follow Us:</span>
      <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>

      </div><!-- End 1st column-->
      <div class="col-md-6 text-right"> <!-- Start 2nd column-->
         <small>Designed by Ndongo kris &copy; 2024</small>
         <small class="ml-2"><a href="#">Admin login</a></small>
      </div>
    </div>
   </div>
  </footer>

</div>
  <!--Javascript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>
</html>