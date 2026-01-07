<?php
session_start();
require_once '../model/users.php';

// 1. Check if the form was actually submitted
if (isset($_POST['submit'])) {

    // 2. Input Sanitization Function
    function sanitize($data) {
        $data = trim($data);                 // Remove extra spaces
        $data = stripslashes($data);         // Remove backslashes
        $data = htmlspecialchars($data);     // Convert special chars to HTML entities
        return $data;
    }

    // 3. Apply Sanitization
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);

    // Extra validation for email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    // 4. Call the Login Model
    $status = Login($email, $password);

    if ($status != false) {
        // Login Success
        $_SESSION['status'] = true;
        // Accessing the 'name' from the returned array $status
        $_SESSION['user_name'] = $status['name']; 
        
        // Redirect to home page
        header('location: ../index.php'); 
        exit();
    } else {
        // Login Failed
        echo "Invalid email or password";
        // Optional: header('location: ../login.php?error=invalid_credentials');
    }

} else {
    // If user tries to access this page directly
    header('location: ../view/login.php');
}
?>