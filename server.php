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
if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User registered successfully";
       header("location:login.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
        header("location:register.html");
    }

    // Close the statement
    $stmt->close();
}

 
   

// Close the database connection
$conn->close();
?>
