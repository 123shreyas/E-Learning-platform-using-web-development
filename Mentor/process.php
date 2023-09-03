<?php
// Database connection

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

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    
    $photoName = $_FILES['photo']['name'];
    $photoTemp = $_FILES['photo']['tmp_name'];
    $photoPath = "uploads/" . $photoName;

    move_uploaded_file($photoTemp, $photoPath);

    $sql = "INSERT INTO profiles (photo, name, age, email, address) VALUES ('$photoPath', '$name', '$age', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        header("Location: display.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
