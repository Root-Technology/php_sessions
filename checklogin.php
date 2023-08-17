<?php
session_start();
require_once("db.php");

if (isset($_POST)) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['id_user'] = $row['id_user'];
            echo "ok";
            // header("location: index.php?search");
        } else {
            // $_SESSION["message"] = "Wrong Creds";
            // header("location: ../adminlogin.php");
            echo "error 1";
        }
    } else {
        // $_SESSION["message"] = "Wrongs Creds or Account Desactivated";
        // header("location: ../adminlogin.php");
        echo "error 2";
    }
}
