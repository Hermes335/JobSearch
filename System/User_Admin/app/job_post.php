<?php
// Retrieve job post data from form submission
$title = $_POST['title'];
$city = $_POST['city'];
$country = $_POST['country'];
$category = $_POST['category'];
$salary = $_POST['salary'];
$jobtype = $_POST['jobtype'];
$experience = $_POST['experience'];
$description = $_POST['description'];
$responsibilities = $_POST['responsibilities'];
$requirements = $_POST['requirements'];

// Save job post data to the database (assuming you have a database connection)
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_search";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert job post data into the database
$sql = "INSERT INTO job_posts (title, city, country, category, deadline, job_type, experience, description, responsibilities, requirements)
        VALUES ('$title', '$city', '$country', '$category', '$deadline', '$jobtype', '$experience', '$description', '$responsibilities', '$requirements')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Job post created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
