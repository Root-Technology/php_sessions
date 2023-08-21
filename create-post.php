<?php
// Database connection
session_start();
require_once("db.php");

// Process form data
$caption = $_POST['caption'];
$id_user = $_SESSION['id_user'];
$image_path = "uploads/" . $_FILES['image']['name'];

// Upload image
move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

// Insert post into the database
$query = "INSERT INTO posts (user_id, caption, image_path) VALUES ('$user_id', '$caption', '$image_path')";

if ($conn->query($query) === TRUE) {
    header("Location: profile.php"); // Redirect to the user's profile page
    echo "Post created successfully!";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
