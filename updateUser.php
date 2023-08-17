<?php
session_start();
require_once("db.php");

if (isset($_POST)) {
    $id_user = $_SESSION['id_user'];

    $sql = "UPDATE users SET name='$_POST[name]', last_name='$_POST[last_name]', email='$_POST[email]', birthday='$_POST[birthday]', gender='$_POST[gender]' WHERE id_user='$id_user'";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">alert("User updated successfully")</script>';
        header("Location: profile.php"); // Redirect to the user's profile page
        exit();
    } else {
        echo '<script type="text/javascript">alert("User not updated. Error: ' . $conn->error . '")</script>';
    }
    $conn->close();
}
