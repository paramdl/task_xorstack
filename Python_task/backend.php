<?php

// Step 1: Establish database connection
$host = "http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=regsister&table=data"; // Replace with your database hostname
$user = "username"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "regsister"; // Replace with your database name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Retrieve form data using POST method
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$countryCode = $_POST['countryCode'];
$contactNumber = $_POST['contactNumber'];
$education = $_POST['education'];
$percentage = $_POST['percentage'];
$username = $_POST['username'];
$password = $_POST['password'];

// Step 3: Insert data into database table
$sql = "INSERT INTO users (firstName, lastName, dob, gender, countryCode, contactNumber, education, percentage, username, password)
VALUES ('$firstName', '$lastName', '$dob', '$gender', '$countryCode', '$contactNumber', '$education', '$percentage', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Step 4: Close database connection
mysqli_close($conn);

?>
