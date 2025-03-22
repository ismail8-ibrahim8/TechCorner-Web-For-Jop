<?php
// insert.php

// Include the database connection file
include('dbconnect.php');

if (isset($_POST['title']) && isset($_POST['email'])) {
    // Sanitize the form data to help prevent SQL injection
    $title  = mysqli_real_escape_string($conn, $_POST['title']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "SELECT * FROM job WHERE title='$title' AND company='$email' AND created >= DATE_SUB(NOW(), INTERVAL 15 DAY)";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "You have already posted this job within the last 15 days.";
        exit();
    }

    // Construct the INSERT query
    $query = "INSERT INTO job (title, company) VALUES ('$title', '$email')";

    // Execute the query and provide feedback
    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
