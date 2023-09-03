<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>LearnIndia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            <li><a>
                <div class="nav-link nav-profile d-flex align-items-center pe-0">
                  <div id="display-image">
                    <img src="assets/img/profile-img1.jpg" alt="Profile" class="rounded-circle profile-picture">
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-secondary btn-sm d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?php
                      session_start();
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Learning Today,<br>Leading Tomorrow</h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
        <a href="courses.php" class="btn-get-started">Get Started</a>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Welcome to LearnIndia</h3>
              <p class="fst-italic">
                Welcome to LearnIndia, your premier destination for high-quality and accessible e-learning solutions! We are a cutting-edge online education platform dedicated to empowering learners of all ages and backgrounds to unlock their true potential and achieve their academic and professional goals. At LearnIndia, we believe that education is the key to individual and societal growth, and we are committed to making learning an enjoyable and enriching experience for everyone.
              </p>

              <p>
                Whether you are a student looking to excel academically, a professional seeking to upskill or switch careers, or simply an avid learner hungry for knowledge, LearnIndia welcomes you with open arms. Join us on this exciting journey of discovery and growth, and let's pave the way for a brighter future together!

                At LearnIndia, education knows no boundaries - because knowledge has the power to transform lives.

                Start your learning journey with LearnIndia today!
              </p>

            </div>
          </div>

        </div>
      </section><!-- End About Section -->



      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="content">
                <h3>Why Choose LearnIndia?</h3>
                <p>
                  Your premier destination for high-quality and accessible e-learning solutions! We are a cutting-edge online education platform dedicated to empowering learners of all ages and backgrounds to unlock their true potential and achieve their academic and professional goals.
                </p>
                <div class="text-center">
                  <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4>Free cources</h4>
                      <p>LearnIndia can provide free cources.which can make you skilled developer.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Trained Teachers</h4>
                      <p>We Have well Trained teacher from across world.which can be well Educated and having Work Experience.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-images"></i>
                      <h4>Fun and Learn</h4>
                      <p>We are Adding features Within upcoming Days.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End Why Us Section -->



      <!-- ======= Popular Courses Section ======= -->
      <section id="popular-courses" class="courses">
        <section id="courses" class="courses">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>Courses</h2>
              <p>Popular Courses</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <h1>Popular Cources</h1>
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                  <img src="assets/img/new/c++ (1).jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>Programming</h4>

                    </div>

                    <h3><a href="course-details/c++-course.php">Programming in C++: Introduction and Specialization</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem
                      tempore.</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <span>Antonio</span>
                      </div>
                      <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;50
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;65
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                  <img src="assets/img/new/machine-learning-3.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>Programming</h4>

                    </div>

                    <h3><a href="course-details/ml-course.php">Introduction to Machine Learning</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem
                      tempore.</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                        <span>Lana</span>
                      </div>
                      <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;35
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;42
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="course-item">
                  <img src="assets/img/new/Intro-to-AI-Naimo.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>Content</h4>

                    </div>

                    <h3><a href="course-details/ai-course.php">Introduction to Artificial Intelligence (AI)</a></h3>
                    <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem
                      tempore.</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                        <span>Brandon</span>
                      </div>
                      <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;20
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;85
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->

            </div>

          </div>
        </section><!-- End Courses Section -->
        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
          <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Walter White</h4>
                    <span>Web Development</span>
                    <p>

                    </p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Sarah Jhinson</h4>
                    <span>Programming</span>
                    <p>
                      Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>William Anderson</h4>
                    <span>Programming</span>
                    <p>
                      Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                    </p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Trainers Section -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>