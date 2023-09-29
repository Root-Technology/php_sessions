<?php

session_start();

require_once("db.php");

if (isset($_POST)) {
    $id_post_like = mysqli_real_escape_string($conn, $_POST['id_post_like']);

    $sql = " INSERT INTO likes (id_user_like, id_post_like) VALUES ('$_SESSION[id_user]', '$id_post_like')";
    if ($conn->query($sql) === TRUE) {
        header("Location: newsfeed.php");
        exit();
    } else {
        echo $conn->error;
    }
}
