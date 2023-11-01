<?php

session_start();

require_once("db.php");

if (isset($_POST)) {
    $id_post_like = mysqli_real_escape_string($conn, $_POST['id_post_like']);
    $id_like = mysqli_real_escape_string($conn, $_POST['id_like']);

    
    $sql = "DELETE FROM likes WHERE id_user_like = $_SESSION[id_user] AND id_post_like = $id_post_like AND id_like = $id_like";
    if ($conn->query($sql) === TRUE) {
        header("Location: newsfeed.php");
        exit();
    } else {
        echo $conn->error;
    }
}
