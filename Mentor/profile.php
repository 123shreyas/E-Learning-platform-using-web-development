<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LearnIndia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .profile-pic {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
    }

    /* Style for the "Choose File" button */
    .custom-file-input::-webkit-file-upload-button {
        visibility: hidden;
    }
    .custom-file-input::before {
        content: 'Choose File';
        display: inline-block;
        background: linear-gradient(to bottom, #f9f9f9, #e3e3e3);
        border: 1px solid #ccc;
        padding: 5px 10px;
        border-radius: 3px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-weight: 700;
        font-size: 10pt;
    }
    .custom-file-input:hover::before {
        border-color: black;
    }
    .custom-file-input:active::before {
        background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
    }
</style>

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
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="contact.php">Contact</a></li><br>
          <li><a><div class="nav-link nav-profile d-flex align-items-center pe-0">
          <div id="display-image">

            <img src="assets/img/profile-img1.jpg" alt="Profile" class="rounded-circle profile-picture">
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
             <?php
                
                echo $_SESSION['email'];
              ?> 
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php"> Create Profile</a></li>
              <li><a class="dropdown-item" href="display.php">Profile</a></li>              
              <li><a class="dropdown-item" href="../course.php">My Courses</a></li>
              <li><a class="dropdown-item"><a class="btn btn-light" href="../logout.php" role="button">logout</a></a></li>
            </ul>
          </div>
        </div><!-- End Profile Iamge Icon -->
      </a></li>  
      </ul><!-- End Profile Nav -->
      <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
 </form>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Profile Page</h2>
            </div>
    </div><!-- End Breadcrumbs -->

    <div class="container col-md-4">
        <form action="process.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="profile-pic-container">
                    <label for="photo" class="profile-pic-label">
                        <img src="profile.jpg"alt="Profile Picture" class="profile-pic hidden" id="profile-pic">
                        <div class="upload-overlay">
                            <i class="fas fa-camera"></i>
                        </div>
                    </label>
                    <input type="file" class="custom-file-input" id="photo" name="photo">
                </div>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <script>
        // Display uploaded profile picture
        document.getElementById('photo').addEventListener('change', function (event) {
            const profilePic = document.getElementById('profile-pic');
            profilePic.src = URL.createObjectURL(event.target.files[0]);
        });
    </script>

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
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">contact us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Readme.txt">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Readme.txt">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our cources</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/web-course.php">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/c-course.php">c programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/c++-course.php">c++ programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/python-course.php">python programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/ai-course.php">Artificial Intelligence</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="course-details/ml-course.php">Machine Learning</a></li>
          
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
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>