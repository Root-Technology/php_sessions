<?php
// Database connection
session_start();
require_once("db.php");

// Process form data
$caption = $_POST['caption'];
$user_id = 1; // Replace with the actual user ID
$image_path = "uploads/" . $_FILES['image']['name'];

// Upload image
move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

// Insert post into the database
$query = "INSERT INTO posts (user_id, caption, image_path) VALUES ('$user_id', '$caption', '$image_path')";

if ($conn->query($query) === TRUE) {
    echo "Post created successfully!";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
