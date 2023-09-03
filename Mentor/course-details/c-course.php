<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LearnIndia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
          <li><a class="active" href="../index.php">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../courses.php">Courses</a></li>
          <li><a href="../trainers.php">Trainers</a></li>
          <li><a href="../events.php">Events</a></li>
          <li><a href="../contact.php">Contact</a></li><br>
          <li><a><div class="nav-link nav-profile d-flex align-items-center pe-0">
          <div id="display-image">

            <img src="../assets/img/profile-img1.jpg" alt="Profile" class="rounded-circle profile-picture">
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              session_start();
               echo $_SESSION['email'];
              ?>
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../profile.php"> Create Profile</a></li>  
            <li><a class="dropdown-item" href="../display.php">Profile</a></li>              
              <li><a class="dropdown-item" href="../../course.php">My Courses</a></li>
              <li><a class="dropdown-item"><a class="btn btn-light" href="../../logout.php" role="button">logout</a></a></li>
            </ul>
          </div>
        </div><!-- End Profile Iamge Icon -->
      </a></li>  
      </ul><!-- End Profile Nav -->
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Course Details</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="../assets/img/new/c language.jpg" class="img-fluid" alt="">
           
            <!-- <div class="container mt-5">
    <div class="row justify-content">
        <div class="col-md-6"> -->
        <div class="container mt-5">
    <div class="row justify-content">
        <div class="col-md-12">
            <h2>Fundamentals of C</h2>
            <h3>Main Points covered in This Course are:</h3>
            <div class="accordion" id="cProgrammingAccordion">
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="introHeading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#introCollapse" aria-expanded="true" aria-controls="introCollapse">
                            1. Introduction to C Programming
                        </button>
                    </h2>
                    <div id="introCollapse" class="accordion-collapse collapse show" aria-labelledby="introHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Brief history and significance of C language.
                            <br>
                            Overview of C's role in software development.
                            <br>
                            Basic structure of a C program.
                            <br>
                            Setting up a C development environment.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="variablesHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#variablesCollapse" aria-expanded="false" aria-controls="variablesCollapse">
                            2. Variables and Data Types
                        </button>
                    </h2>
                    <div id="variablesCollapse" class="accordion-collapse collapse" aria-labelledby="variablesHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Understanding data types (int, float, char, etc.).
                            <br>
                            Declaring and initializing variables.
                            <br>
                            Typecasting and its importance.
                            <br>
                            Constants and literals.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="controlFlowHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#controlFlowCollapse" aria-expanded="false" aria-controls="controlFlowCollapse">
                            3. Control Flow
                        </button>
                    </h2>
                    <div id="controlFlowCollapse" class="accordion-collapse collapse" aria-labelledby="controlFlowHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Conditional statements (if, else, switch).
                            <br>
                            Looping constructs (for, while, do-while).
                            <br>
                            Break and continue statements.
                            <br>
                            Handling logical expressions.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="functionsHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#functionsCollapse" aria-expanded="false" aria-controls="functionsCollapse">
                            4. Functions and Modular Programming
                        </button>
                    </h2>
                    <div id="functionsCollapse" class="accordion-collapse collapse" aria-labelledby="functionsHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Defining and using functions.
                            <br>
                            Function prototypes and header files.
                            <br>
                            Scope and lifetime of variables.
                            <br>
                            Modular code design and reusability.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="arraysPointersHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#arraysPointersCollapse" aria-expanded="false" aria-controls="arraysPointersCollapse">
                            5. Arrays and Pointers
                        </button>
                    </h2>
                    <div id="arraysPointersCollapse" class="accordion-collapse collapse" aria-labelledby="arraysPointersHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Creating and manipulating arrays.
                            <br>
                            Pointers and their significance.
                            <br>
                            Pointer arithmetic and memory management.
                            <br>
                            Dynamic memory allocation (malloc, calloc, realloc, free).
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="stringsCharHandlingHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#stringsCharHandlingCollapse" aria-expanded="false" aria-controls="stringsCharHandlingCollapse">
                            6. Strings and Character Handling
                        </button>
                    </h2>
                    <div id="stringsCharHandlingCollapse" class="accordion-collapse collapse" aria-labelledby="stringsCharHandlingHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Working with strings and string functions.
                            <br>
                            ASCII and Unicode character representation.
                            <br>
                            Input/output of strings.
                            <br>
                            String manipulation techniques.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="structuresFileHandlingHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#structuresFileHandlingCollapse" aria-expanded="false" aria-controls="structuresFileHandlingCollapse">
                            7. Structures and File Handling
                        </button>
                    </h2>
                    <div id="structuresFileHandlingCollapse" class="accordion-collapse collapse" aria-labelledby="structuresFileHandlingHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Defining and using structures.
                            <br>
                            Nesting structures and arrays within structures.
                            <br>
                            File handling operations (open, read, write, close).
                            <br>
                            Reading and writing structured data to files.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="advancedConceptsHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#advancedConceptsCollapse" aria-expanded="false" aria-controls="advancedConceptsCollapse">
                            8. Advanced Concepts
                        </button>
                    </h2>
                    <div id="advancedConceptsCollapse" class="accordion-collapse collapse" aria-labelledby="advancedConceptsHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Preprocessor directives and macros.
                            <br>
                            Enumerations and bitwise operators.
                            <br>
                            Function pointers and callbacks.
                            <br>
                            Multidimensional arrays and matrices.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="errorHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#errorCollapse" aria-expanded="false" aria-controls="errorCollapse">
                            9. Error Handling and Debugging
                        </button>
                    </h2>
                    <div id="errorCollapse" class="accordion-collapse collapse" aria-labelledby="errorHeading" data-bs-parent="#cProgrammingAccordion">
                        <div class="accordion-body">
                            Common programming errors and their causes.
                            <br>
                            Debugging techniques and tools.
                            <br>
                            Handling exceptions and errors gracefully.
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--             
        </div>
    </div>
</div> -->

    
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Trainer</h5>
              <p><a href="#">Walter White</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Fee</h5>
              <p>Free</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>cource-details</h5>
              <p>Fundamentals of C</p>
            </div>

            
              <a class="btn btn-success" href="cregister.php" role="button">Enroll Now</a>
            

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    

   
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
          <li><i class="bx bx-chevron-right"></i> <a href="../index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../contact.php">contact us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../Readme.txt">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="../Readme.txt">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our cources</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="web-course.php">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="c-course.php">c programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="c++-course.php">c++ programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="python-course.php">python programming</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="ai-course.php">Artificial Intelligence</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="ml-course.php">Machine Learning</a></li>
          
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
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>