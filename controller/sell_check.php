<?php
session_start();
require_once '../model/cows.php';

// 1. Check if user is logged in
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: ../view/login.php?error=must_login');
    exit();
}

// 2. Check if form submitted
if (isset($_POST['submit'])) {

    // Helper: Sanitize Input
    function sanitize($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // 3. Get & Sanitize Data
    $cowName = sanitize($_POST['cowName']);
    $breed = sanitize($_POST['breed']);
    $price = sanitize($_POST['price']);
    $weight = sanitize($_POST['weight']);
    $age = sanitize($_POST['age']);
    $description = sanitize($_POST['description']);
    
    // 4. Validate Inputs
    if (empty($cowName) || empty($breed) || empty($price) || empty($weight) || empty($age)) {
        echo "Error: All fields are required.";
        exit();
    }

    if (!is_numeric($price) || !is_numeric($weight) || !is_numeric($age)) {
        echo "Error: Price, Weight, and Age must be valid numbers.";
        exit();
    }

    // 5. Handle Image Upload to 'upload' folder
    $photo_url = "";

    if (isset($_FILES['cowImage']) && $_FILES['cowImage']['error'] === 0) {
        $fileName = $_FILES['cowImage']['name'];
        $fileTmpName = $_FILES['cowImage']['tmp_name'];
        $fileSize = $_FILES['cowImage']['size'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowed = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($fileExt, $allowed)) {
            if ($fileSize < 5000000) { // 5MB Limit
                
                // Generate unique name
                $newFileName = uniqid('COW_', true) . "." . $fileExt;
                
                // --- KEY CHANGE HERE ---
                // We define the target folder as '../upload/' (Root directory)
                $uploadDir = '../upload/';
                $uploadDest = $uploadDir . $newFileName;

                // Create 'upload' folder if it doesn't exist
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Move file
                if (move_uploaded_file($fileTmpName, $uploadDest)) {
                    // Success: Save just the filename to DB
                    $photo_url = $newFileName;
                } else {
                    echo "Error: Failed to move uploaded file.";
                    exit();
                }

            } else {
                echo "Error: File size too large (Max 5MB).";
                exit();
            }
        } else {
            echo "Error: Invalid file type.";
            exit();
        }
    } else {
        echo "Error: Please upload a photo.";
        exit();
    }

    // 6. Call Model
    $status = InsertCow($cowName, $price, $breed, $age, $weight, $photo_url, $description);

    if ($status === true) {
        // Redirect to Buy page to see the new listing
        header('location: ../view/buy.php?msg=ad_posted'); 
        exit();
    } else {
        echo "Database Error: Could not post ad.";
    }

} else {
    header('location: ../view/sell.php');
}
?>