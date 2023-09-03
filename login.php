<?php
session_start();
// Database configuration
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'test';

// Create a database connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['email'], $_POST['password'])) {
    $_SESSION['email'] = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $_SESSION['email'], $password);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there is a matching user
    if ($result->num_rows > 0) {
        // User found, perform desired actions (e.g., redirect to a dashboard page)
        

        echo "Login successful";
        header("location:Mentor/index.php");
        exit();
    } else {
        // Invalid credentials, show error message or perform desired actions
        echo "Invalid email or password";
        header("location:login.html");
    }

    // Close the statement
    $stmt->close();
}

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $email = isset($_POST['email']) ? $_POST['email'] : '';
       $register_date = isset($_POST['register_date']) ? $_POST['register_date'] : '';
       $course = isset($_POST['course']) ? $_POST['course'] : '';
      
  
     
                  $stmt = $conn->prepare("INSERT INTO course_registration (name, email, register_date, course) VALUES (?, ?, ?, ?)");
              
                   // Bind the parameters
                 $stmt->bind_param("ssss", $name, $email, $register_date, $course);
              
                   // Execute the query
                   if ($stmt->execute()) {
                            echo "User registered successfully";
                          header('location:Mentor/index.php');
                        }else {
                        echo "Error: " . $stmt->error;
                       }
                   // Close the statement
                   $stmt->close();
               }



// Close the database connection
$conn->close();
?>
