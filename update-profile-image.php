<?php
session_start();
require_once("db.php");

if (isset($_POST)) {
    $id_user = $_SESSION['id_user'];
    $uploadOk = true;
    $folder_dir = "uploads/profile/";
    $base = basename($_FILES['profile_image']['name']); // mydocs/images/myprofile.jpg -> myprofile.jpg
    $imageFileType = pathinfo($base, PATHINFO_EXTENSION); // .png .jpg

    $file = "";


    if (file_exists($_FILES['profile_image']['tmp_name'])) {
        if ($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'PNG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'JPEG') {
            if ($_FILES['profile_image']['size'] < 10000000) {

                $file = uniqid() . "." . $imageFileType; //434hbsjfsfd.jpg

                $filename = $folder_dir . $file; //uploads/profile/434hbsjfsfd.jpg

                move_uploaded_file($_FILES['profile_image']['tmp_name'], $filename);
            } else {
                $_SESSION['uploadError'] = "Wrong Size. Max Size Allowed: 10MB";
                $uploadOk = false;
            }
        } else {
            $_SESSION['uploadError'] = "Wrong Format. Only jpg or png allowed.";
            $uploadOk = false;
        }
    }

    if ($uploadOk == false) {
        header("Location: profile");
        exit();
    }

    $sql = "UPDATE users SET profile_image='$file' WHERE id_user='$id_user'";

    if ($conn->query($sql) === TRUE) {
        header("Location: profile");
        exit();
    } else {
        echo $conn->error;
    }
    $conn->close();
}