<?php
session_start();
require_once("db.php");

if (isset($_POST['update_password'])) {
    $id_user = $_SESSION['id_user'];
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_new_password = mysqli_real_escape_string($conn, $_POST['confirm_new_password']);

    // Fetch the user's current password hash from the database
    $query = "SELECT password FROM users WHERE id_user='$id_user'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $current_password_hash = $row['password'];

        // Verify the old password provided
        if (password_verify($current_password, $current_password_hash)) {
            // Check if new password and confirm password match
            if ($new_password === $confirm_new_password) {
                // Hash the new password
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                // Update the password in the database
                $update_query = "UPDATE users SET password='$new_password_hash' WHERE id_user='$id_user'";

                if ($conn->query($update_query) === TRUE) {
                    echo "Password updated successfully";
                    // You can also redirect the user to a different page after the password update
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "New password and confirm password do not match";
            }
        } else {
            echo "Incorrect current password";
        }
    } else {
        echo "User not found";
    }
}
?>
