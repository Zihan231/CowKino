<?php
require_once __DIR__ . '/DataBase.php';

function InsertCow($name, $price, $breed, $age, $weight, $photo_url, $description)
{
    global $conn;

    // Simple query
    $query = "INSERT INTO cows (name, price, breed, age, weight, photo_url, description) 
              VALUES ('$name', '$price', '$breed', '$age', '$weight', '$photo_url', '$description')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Return true if successful, false otherwise
    if ($result) {
        return true;
    } else {
        return false;
    }
}
?>