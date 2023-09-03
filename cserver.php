<?php
session_reset();
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

$email =$_SESSION['email']; // Replace with the email for which you want to retrieve the courses

$sql = "SELECT course FROM course_registration WHERE email = '$email'";
$result = $conn->query($sql);

// // Step 3: Fetch and display the results
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr>";
//         echo "<td>" . $row["course"] . "<button href='Mentor/course-details/mlvideo.php'>View Video</button></td>";
//         echo "</tr>";
//     }
// } else {
//     echo "<tr><td colspan='1'>No courses found for the given email.</td></tr>";
// }


if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Course</th><th>videos</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $courseName = $row["course"];
        echo "<tr>";
        echo "<td>" . $courseName . "</td>";
        echo "<td><a href='Mentor/course-details/" . getCourseURL($courseName) . "'>Continue Learning..</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No courses found for the given email.</p>";
}

function getCourseURL($courseName) {
    // Create a mapping of course names to their respective URLs
    $courseURLs = array(
        'Basics of Python' => 'pyvideo.php',
        'Introduction to Artificial Intelligence (AI)' => 'aivideo.php',
        'Fundamentals of C' => 'cvideo.php',
        'Web Design' => 'webvideo.php',
        'Introduction to Machine Learning' => 'mlvideo.php',
        'Programming in C++: Introduction and Specialization' => 'c++video.php',
        // Add more courses as needed
    );
    // If the course name exists in the mapping, return its URL; otherwise, return a default URL
    return isset($courseURLs[$courseName]) ? $courseURLs[$courseName] : 'notfound.php';
}
// Close the database connection
$conn->close();
?>
