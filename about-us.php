<?php
session_start();

if (!isset($_SESSION['email_user'])) {
  // Jika belum login
  $loginButton = '<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>';
  $signupButton = '<li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>';
  $userGreeting = '';
  $logoutButton = '';
} else {
  // Jika sudah login
  $loginButton = '';
  $signupButton = '';
  $userGreeting = '<li class="nav-item"><a class="nav-link" href="#">Hello, ' . $_SESSION['nama_user'] . '</a></li>';
  $logoutButton = '<li class="nav-item"><a class="nav-link" href="backend/logout.php">Logout</a></li>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">


  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


  <title>Segitiga Bermuda </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Segitiga <em>Bermuda</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="alusista.php">Alusista</a></li>
            
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item active" href="about-us.php">About Us</a>
                <a class="dropdown-item" href="testimonials.php">Pelaporan</a>
              </div>
            </li>

            <?php echo $loginButton; ?>
            <?php echo $signupButton; ?>
            <?php echo $userGreeting; ?>
            <?php echo $logoutButton; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>about us</h4>
            <h2>Our Team</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">

      <!-- Start Column 1 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid mb-5">
        <h3 clas><a href="#"><span class="">Ramanda</span> Danny</a></h3>
        <span class="d-block position mb-4">Project Manager,Programmer.</span>
        <p>Separated they live in.
          Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
          ocean.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
      </div>
      <!-- End Column 1 -->

      <!-- Start Column 2 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" class="img-fluid mb-5">

        <h3 clas><a href="#"><span class="">Indra</span> Saputra</a></h3>
        <span class="d-block position mb-4">Documentasi.</span>
        <p>Separated they live in.
          Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
          ocean.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

      </div>
      <!-- End Column 2 -->

      <!-- Start Column 3 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid mb-5">
        <h3 clas><a href="#"><span class="">Febrian</span> Trio</a></h3>
        <span class="d-block position mb-4">Programmer.</span>
        <p>Separated they live in.
          Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
          ocean.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
      </div>
      <!-- End Column 3 -->

      <!-- Start Column 4 -->
      <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid mb-5">

        <h3 clas><a href="#"><span class="">Irsyad</span> Muza</a></h3>
        <span class="d-block position mb-4">Analysis.</span>
        <p>Separated they live in.
          Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
          ocean.</p>
        <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>


      </div>
      <!-- End Column 4 -->



    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright © 2020 SegitigaBermuda - Template by: <a href="https://www.phpjabbers.com/">SegitigaBermuda.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>