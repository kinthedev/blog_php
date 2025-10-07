<?php
session_start();
include_once __DIR__ . "/../models/avatarModel.php";
$target_dir = "../avatar/";

if (isset($_POST["upload"])) {
    $fileName = basename($_FILES["avatar"]["name"]);
    $targetFile = $target_dir . $fileName;
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetFile)) {
        setAvatar($fileName);
        header("Location: ../../frontend/profile/profile.php");
        exit();
    }
}
