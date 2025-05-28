<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
include 'db_connection.php';

// Initialize error array
$errors = [];

// Validate and sanitize input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    $middlename = trim(filter_input(INPUT_POST, 'middlename', FILTER_SANITIZE_STRING));
    $user = trim(filter_input(INPUT_POST, 'USERNAME', FILTER_SANITIZE_STRING));
    $pass = trim($_POST['password']);
    $confirm_pass = trim($_POST['confirm_password']);
    $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
    $address = trim(filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING));
    $contact = trim(filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING));

    // Validation
    if (empty($firstname)) $errors[] = "First name is required";
    if (empty($lastname)) $errors[] = "Last name is required";
    if (empty($user)) $errors[] = "Username is required";
    if (strlen($pass) < 8) $errors[] = "Password must be at least 8 characters";
    if ($pass !== $confirm_pass) $errors[] = "Passwords do not match";
    if (empty($date)) $errors[] = "Date of birth is required";
    if (empty($address)) $errors[] = "Address is required";
    if (empty($contact)) $errors[] = "Contact number is required";

    // Check if username already exists
    $check_sql = "SELECT id FROM users WHERE username = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $user);
    $check_stmt->execute();
    $check_stmt->store_result();
    if ($check_stmt->num_rows > 0) {
        $errors[] = "Username already exists";
    }
    $check_stmt->close();

    // If no errors, proceed with registration
    if (empty($errors)) {
        // Hash the password
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        // Debug logging
        error_log("Registering user: $user");
        error_log("Hashed password length: " . strlen($hashed_pass));

        // Insert into database
        $sql = "INSERT INTO users (firstname, lastname, middlename, username, password, date_of_birth, address, contact) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssssssss", 
                $firstname, 
                $lastname, 
                $middlename, 
                $user, 
                $hashed_pass, 
                $date, 
                $address, 
                $contact
            );

            if ($stmt->execute()) {
                $stmt->close();
                $conn->close();
                echo "<script>
                    alert('Account created successfully!'); 
                    window.location.href='login.html';
                </script>";
                exit();
            } else {
                $errors[] = "Registration failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $errors[] = "Database error: " . $conn->error;
        }
    }
}

// If there are errors, display them and go back
if (!empty($errors)) {
    $error_string = implode("\\n", $errors);
    echo "<script>
        alert('$error_string'); 
        window.history.back();
    </script>";
    exit();
}

$conn->close();
?>