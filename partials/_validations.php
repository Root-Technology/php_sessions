<?php

session_start();
if (empty($_SESSION['id_user'])) {
    header("location: index");
    exit();
} else {
    $id_user = $_SESSION['id_user'];
}
