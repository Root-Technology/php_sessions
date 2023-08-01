<?php
session_start();
require_once("db.php");

if (!empty($_POST)) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT); // Hash the password


    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['errorMessage'] = "Email already exists";
            header("Location: index");
            exit();
        } else {
           
            $stmt = $conn->prepare("INSERT INTO users(name, last_name, email, password, birthday, gender) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $name, $last_name, $email, $password, $birthday, $gender);

            if ($stmt->execute()) {
                $id_user = $stmt->insert_id;
                $_SESSION['successMessage'] = "Account registered successfully";
                $_SESSION['id_user'] = $id_user;
                header("Location: profile");
                exit();
            } else {
                $_SESSION['errorMessage'] = "Error registering user";
                header("Location: xx");
                exit();
            }
        }
    }
