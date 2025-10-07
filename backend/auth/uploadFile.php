<?php
include_once __DIR__ . '/../models/uploadModel.php';

session_start();
$target_dir = "../photos/";

if (isset($_POST["upload"])) {
    $content = $_POST["content"];
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $targetFile = $target_dir . $fileName;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        uploadFile($content, $fileName);
        header("Location: ../../public/home.php");
        exit();
    }
}
