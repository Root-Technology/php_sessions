<?php

session_start();
require_once("db.php");
if (empty($_SESSION['id_user'])) {
    header("location: index");
    exit();
} else {
    $id_user = $_SESSION['id_user'];
}


$name = $email = $lastname = $profileimage = $coverimage = $birthday = $degree = $phone = $countryname = $placeofbirth = $gender = "";

$sql = "SELECT * FROM users WHERE id_user= $id_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $lastname = $row['last_name'];
        $birthday =  $row['birthday'];
        $profileimage = $row['profile_image'];
        $coverimage = $row['cover_image'];
        $gender =  $row['gender'];
    }
}