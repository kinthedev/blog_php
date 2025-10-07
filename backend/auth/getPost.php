<?php

include_once __DIR__ . '/../models/PostsModel.php';
$Error = "";


if ($_SERVER['PHP_SELF'] == "/miniblog/public/home.php" || $_SERVER['PHP_SELF'] == "/miniblog/frontend/watch.php") {
    if (posts() > 0) {
        $rows = posts();
    } else {
        $Error = "No post";
    }
}
if ($_SERVER['PHP_SELF'] == "/miniblog/frontend/profile/profile.php" || $_SERVER['PHP_SELF'] == "/miniblog/frontend/profile/videos.php" || $_SERVER['PHP_SELF'] == "/miniblog/frontend/profile/photos.php") {

    if (postByUser($_SESSION["id"]) > 0) {
        $rows = postByUser($_SESSION["id"]);
    } else {
        $Error = "No videos";
    }
}
