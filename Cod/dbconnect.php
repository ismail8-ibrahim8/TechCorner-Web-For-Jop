<?php
$host = "localhost";
$dbname = "auth";
$username = "root";
$password = "";

// پەیوەندی بە داتابەیسەوە
$conn = mysqli_connect($host, $username, $password, $dbname);

// پشکنینی پەیوەندی
if ($conn->connect_error) {
    die("co$connection failed: " . $conn->connect_error);
}

?>
