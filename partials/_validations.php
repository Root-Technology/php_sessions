<?php

session_start();
require_once("db.php");
if (empty($_SESSION['id_user'])) {
    header("location: index");
    exit();
} else {
    $id_user = $_SESSION['id_user'];
}


$name = $email = $lastname = $profileimage = $headerimage = $birthday = $degree = $phone = $countryname = $placeofbirth = $gender = $website = $phone = $about = $birthplace = $status = $country = "";

$sql = "SELECT * FROM users WHERE id_user= $id_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $lastname = $row['last_name'];
        $birthday =  $row['birthday'];
        $profileimage = $row['profile_image'];
        $headerimage = $row['header_image'];
        $gender =  $row['gender'];
        $website = $row['website'];
        $phone = $row['phone'];
        $about = $row['about'];
        $birthplace = $row['birthplace'];
        $status = $row['status'];
        $country = $row['country'];
    }
}



// Retrieve posts from the database
$query = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['caption'] . "</h3>";
        echo "<img src='" . $row['image_path'] . "' alt='Post Image'>";
        echo "</div>";
    }
} else {
    echo "No posts found.";
}

$conn->close();
?>




