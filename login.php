<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db_connection.php';
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.html");
    exit();
}

// Clear any existing session data
session_unset();

$username = trim($_POST['USERNAME'] ?? '');
$password = trim($_POST['password'] ?? '');

// Debug logging
error_log("Login attempt - Username: $username");

$sql = "SELECT id, username, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    error_log("Prepare failed: " . $conn->error);
    echo "Database error. Check error log.";
    exit();
}

$stmt->bind_param("s", $username);
if (!$stmt->execute()) {
    error_log("Execute failed: " . $stmt->error);
    echo "Database error. Check error log.";
    exit();
}

$stmt->store_result();

if ($stmt->num_rows == 1) {
    $stmt->bind_result($id, $db_username, $hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $db_username;
        $_SESSION['logged_in'] = true;

        $stmt->close();
        $conn->close();

        header("Location: dashboard.php");
        exit();
    }
}

$stmt->close();
$conn->close();
header("Location: login.html?error=invalid");
exit();
?>
