<?php
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = "";     // your MySQL password
$dbname = "registration";  // <--  MAKE SURE THIS IS CORRECT

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>