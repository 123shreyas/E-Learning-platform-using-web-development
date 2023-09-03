<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LearnIndia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Mentor/assets/img/favicon.png" rel="icon">
  <link href="Mentor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Mentor/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Mentor/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Mentor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Mentor/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Mentor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Mentor/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Mentor/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Mentor/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<form method="POST" action="login.php">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">LearnIndia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="Mentor/index.php">Home</a></li>
          <li><a href="Mentor/about.php">About</a></li>
          <li><a href="Mentor/courses.php">Courses</a></li>
          <li><a href="Mentor/trainers.php">Trainers</a></li>
          <li><a href="Mentor/events.php">Events</a></li>
          <li><a href="Mentor/contact.php">Contact</a></li><br>
          <li><a><div class="nav-link nav-profile d-flex align-items-center pe-0">
          <div id="display-image">

            <img src="Mentor/assets/img/profile-img1.jpg" alt="Profile" class="rounded-circle profile-picture">
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              session_start();
               echo $_SESSION['email'];
              ?>
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Mentor/profile.php"> Create Profile</a></li>  
            <li><a class="dropdown-item" href="Mentor/display.php">Profile</a></li>
              
              <li><a class="dropdown-item" href="course.php">My Courses</a></li>
              <li><a class="dropdown-item"><a class="btn btn-light" href="logout.php" role="button">logout</a></a></li>
            </ul>
          </div>
        </div><!-- End Profile Iamge Icon -->
      </a></li>  
      </ul><!-- End Profile Nav -->
      <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>MY COURSES</h2>
        <p>Your cources are Waiting for you. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container mt-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Courses</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                 include 'cserver.php'; ?>
            </tbody>
        </table>
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>LearnIndia</h3>
        <p>
          Ashta, Walwa, <br>
          Maharashtra,416301 <br><br>
          <strong>Phone:</strong> +919975591394<br>
          <strong>Email:</strong> learnindiacoltd@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/contact.php">contact us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/Readme.txt">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/Readme.txt">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our cources</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/course-details/web-course.php">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/course-details/c-course.php">c programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/course-details/c++-course.php">c++ programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/course-details/python-course.php">python programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/course-details/ai-course.php">Artificial Intelligence</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Mentor/course-details/ml-course.php">Machine Learning</a></li>
          
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>for any problem contact Us through Email and stay updated with Our Newsletter.</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>LearnIndia</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">LearnIndia.Co.Ltd</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Mentor/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Mentor/assets/vendor/aos/aos.js"></script>
  <script src="Mentor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Mentor/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Mentor/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Mentor/assets/js/main.js"></script>

</body>

</html>