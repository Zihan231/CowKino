<?php
require_once '../model/DataBase.php';
require_once '../model/users.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['submit'])) {

    // 1. Sanitize Inputs
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // 2. Validation Logic
    if (empty($fullname) || empty($email) || empty($phone) || empty($password)) {
        echo "All fields are required!";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        // In a real project, redirect back with an error:
        // header('location: ../register.html?error=password_mismatch');
        exit;
    }

    // 3. Call Model to Insert User
    $status = InsertUser($fullname, $password, $email, $phone);

    if ($status === true) {
        // Success
        header('location: ../view/login.php');
    } elseif ($status === "email_exists") {
        // Error: Email taken
        echo "Error: This email is already registered!";
    } else {
        // Error: Database failed
        echo "Error: Could not create account.";
    }
} else {
    // If someone tries to access this file directly without submitting form
    header('location: ../view/register.php');
}
