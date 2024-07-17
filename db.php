<?php
$servername = "localhost";
$username = "school_user";
$password = "password";
$dbname = "rishton_school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
