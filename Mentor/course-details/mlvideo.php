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
            <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4K8dU0tEyiA" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="container mt-5">
    <div class="row justify-content">
        <div class="col-md-12">
            <h2>Introduction to Machine Learning</h2>
            <h3>This Cource covered following points:</h3>
            <div class="accordion" id="machineLearningAccordion">
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="definitionHeading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#definitionCollapse" aria-expanded="true" aria-controls="definitionCollapse">
                            1. Introduction to Machine Learning
                        </button>
                    </h2>
                    <div id="definitionCollapse" class="accordion-collapse collapse show" aria-labelledby="definitionHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Definition and applications of machine learning.
                            <br>
                            Overview of supervised, unsupervised, and reinforcement learning.
                            <br>
                            Role of machine learning in various fields.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="dataPreprocessingHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dataPreprocessingCollapse" aria-expanded="false" aria-controls="dataPreprocessingCollapse">
                            2. Data Preprocessing
                        </button>
                    </h2>
                    <div id="dataPreprocessingCollapse" class="accordion-collapse collapse" aria-labelledby="dataPreprocessingHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Techniques for cleaning and transforming data.
                            <br>
                            Importance of feature scaling and normalization.
                            <br>
                            Handling missing data and outliers.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="supervisedAlgorithmsHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#supervisedAlgorithmsCollapse" aria-expanded="false" aria-controls="supervisedAlgorithmsCollapse">
                            3. Supervised Learning Algorithms
                        </button>
                    </h2>
                    <div id="supervisedAlgorithmsCollapse" class="accordion-collapse collapse" aria-labelledby="supervisedAlgorithmsHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Understanding linear regression and its applications.
                            <br>
                            Logistic regression for classification tasks.
                            <br>
                            Decision trees and random forests for predictive modeling.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="unsupervisedAlgorithmsHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#unsupervisedAlgorithmsCollapse" aria-expanded="false" aria-controls="unsupervisedAlgorithmsCollapse">
                            4. Unsupervised Learning Algorithms
                        </button>
                    </h2>
                    <div id="unsupervisedAlgorithmsCollapse" class="accordion-collapse collapse" aria-labelledby="unsupervisedAlgorithmsHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Exploring clustering techniques such as k-means and hierarchical clustering.
                            <br>
                            Understanding dimensionality reduction using PCA.
                            <br>
                            Applications of unsupervised learning in data exploration.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="modelEvaluationHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modelEvaluationCollapse" aria-expanded="false" aria-controls="modelEvaluationCollapse">
                            5. Model Evaluation and Validation
                        </button>
                    </h2>
                    <div id="modelEvaluationCollapse" class="accordion-collapse collapse" aria-labelledby="modelEvaluationHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Splitting data into training and testing sets.
                            <br>
                            Cross-validation techniques for robust model assessment.
                            <br>
                            Common evaluation metrics like accuracy, precision, recall.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="neuralNetworksHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#neuralNetworksCollapse" aria-expanded="false" aria-controls="neuralNetworksCollapse">
                            6. Introduction to Neural Networks and Deep Learning
                        </button>
                    </h2>
                    <div id="neuralNetworksCollapse" class="accordion-collapse collapse" aria-labelledby="neuralNetworksHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Basics of artificial neural networks (ANN).
                            <br>
                            Activation functions and network layers.
                            <br>
                            Overview of deep learning and its applications.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="frameworksHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#frameworksCollapse" aria-expanded="false" aria-controls="frameworksCollapse">
                            7. Introduction to TensorFlow or PyTorch
                        </button>
                    </h2>
                    <div id="frameworksCollapse" class="accordion-collapse collapse" aria-labelledby="frameworksHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Setting up frameworks for deep learning.
                            <br>
                            Creating simple neural networks using TensorFlow or PyTorch.
                            <br>
                            Hands-on exercises with neural network models.
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="applicationsHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#applicationsCollapse" aria-expanded="false" aria-controls="applicationsCollapse">
                            8. Real-Life Applications of Machine Learning
                        </button>
                    </h2>
                    <div id="applicationsCollapse" class="accordion-collapse collapse" aria-labelledby="applicationsHeading" data-bs-parent="#machineLearningAccordion">
                        <div class="accordion-body">
                            Machine learning in image recognition and computer vision.
                            <br>
                            Natural language processing and text analysis.
                            <br>
                            Recommender systems and personalized recommendations.
                        </div>
                    </div>
                </div>
                
                <!-- Add more accordion items for the remaining main points -->
                
            </div>
        </div>
    </div>
</div>
          </div>
        </div>
      </div>
    </section><!-- End Cource Details Section -->`

   
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