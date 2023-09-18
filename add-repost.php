<?php

session_start();

require_once("db.php");

if (isset($_POST)) {

    $post_description = mysqli_real_escape_string($conn, $_POST['post_description']);
    $post_image = mysqli_real_escape_string($conn, $_POST['post_image']);
    $post_video = mysqli_real_escape_string($conn, $_POST['post_video']);
    $post_yt = mysqli_real_escape_string($conn, $_POST['post_yt']);
    $repost_user_id = mysqli_real_escape_string($conn, $_POST['repost_user_id']);

    $sql = " INSERT INTO post (post_id_user, post_description, post_image, post_video, post_yt, repost_user_id) VALUES ('$_SESSION[id_user]', '$post_description', '$post_image', '$post_video', '$post_yt', '$repost_user_id')";
    if ($conn->query($sql) === TRUE) {
        header("Location: newsfeed.php");
        exit();
    } else {
        echo $conn->error;
    }
}
