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
        $website = mysqli_real_escape_string($conn, $_POST['website']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $about =mysqli_real_escape_string($conn,$_POST['about']);
        $birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);



$sql = "UPDATE users SET name='$name', last_name= '$last_name', email= '$email', birthday= '$birthday', gender= '$gender', website= '$website',  phone= '$phone', about ='$about', birthplace ='$birthplace', status= '$status', country = '$country' WHERE id_user='$id_user'";
       // $sql = "UPDATE users SET name='$_POST[name]', last_name='$_POST[last_name]', email='$_POST[email]', birthday='$_POST[birthday]', gender='$_POST[gender]' WHERE id_user='$id_user'";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">alert("User updated successfully")</script>';
        header("Location: profile.php"); // Redirect to the user's profile page
        exit();
    } else {
        echo '<script type="text/javascript">alert("User not updated. Error: ' . $conn->error . '")</script>';
    }
    $conn->close();
}



// $name = mysqli_real_escape_string($conn, $_POST['name']);
// $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
// $gender = mysqli_real_escape_string($conn, $_POST['gender']);
// $about = mysqli_real_escape_string($conn, $_POST['about']);
// $website = mysqli_real_escape_string($conn, $_POST['website']);
// $phone = mysqli_real_escape_string($conn, $_POST['phone']);

// $sql = "UPDATE users SET name='$name', last_name= '$last_name', email= '$email', birthday= '$birthday', 
//     gender= '$gender', about= '$about', website= '$website', phone= '$phone'
//      WHERE id_user='$id_user'";