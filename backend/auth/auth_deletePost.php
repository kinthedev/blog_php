<?php

include_once __DIR__ . '/../models/deletePostModel.php';
include_once __DIR__ . '/../models/authModel.php';


if (isset($_POST["delete"])) {
    $idPost = $_GET['idPost'];
    echo $idPost;
    deletePost($idPost);
    header("Location: ../../public/home.php");
    exit();
}
