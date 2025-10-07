<?php
include_once __DIR__ . '/../models/uploadModel.php';
session_start();
$target_dir = "../videos/";

if (isset($_POST["upload"])) {
    $content = $_POST["content"];
    $fileName = basename($_FILES["video"]["name"]);
    $targetFilePath = $target_dir . $fileName;
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $targetFilePath)) {
        uploadFile($content, $fileName);
        header("Location: ../../public/home.php");
        exit();
    }
}
