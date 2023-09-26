<?php

session_start();

require_once("db.php");

if (isset($_POST)) {

    $post_description = mysqli_real_escape_string($conn, $_POST['post_description']);
    $post_image = mysqli_real_escape_string($conn, $_POST['post_image']);
    $post_video = mysqli_real_escape_string($conn, $_POST['post_video']);
    $post_yt = mysqli_real_escape_string($conn, $_POST['post_yt']);
    $post_user_id = mysqli_real_escape_string($conn, $_POST['post_user_id']);
    $id_post_repost = mysqli_real_escape_string($conn, $_POST['id_post_repost']);

    $sql = " INSERT INTO post (post_id_user, post_description, post_image, post_video, post_yt, repost_user_id, id_post_repost) VALUES ('$post_user_id', '$post_description', '$post_image', '$post_video', '$post_yt', '$_SESSION[id_user]', '$id_post_repost')";
    if ($conn->query($sql) === TRUE) {
        header("Location: newsfeed.php");
        exit();
    } else {
        echo $conn->error;
    }
}
