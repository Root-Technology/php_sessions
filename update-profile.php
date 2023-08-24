<?php
session_start();
require_once("db.php");

if (isset($_POST)) {
    $id_user = $_SESSION['id_user'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    
    $website = mysqli_real_escape_string($conn, $_POST['website']);
   

    $sql = "UPDATE users SET name='$name', last_name= '$last_name', email= '$email', birthday= '$birthday', 
    gender= '$gender', phone='$phone', about= '$about', website= '$website'
     WHERE id_user='$id_user'";

    if ($conn->query($sql) === TRUE) {
        header("Location: personal_informations");
        exit();
    } else {
        echo $conn->error;
    }
    $conn->close();
}