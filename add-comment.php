<?php

session_start();

require_once("db.php");

if (isset($_POST)) {

    $comment = mysqli_real_escape_string($conn, $_POST['comment_description']);
    $comment_post_id = mysqli_real_escape_string($conn, $_POST['comment_post_id']);


    $sql = " INSERT INTO comments (comment_id_user, comment, comment_post_id) VALUES ('$_SESSION[id_user]', '$comment', '$comment_post_id')";
    if ($conn->query($sql) === TRUE) {
        header("Location: newsfeed.php");
        exit();
    } else {
        echo $conn->error;
    }
}
