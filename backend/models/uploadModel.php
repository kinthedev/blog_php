<?php
include_once __DIR__ . '/../database/databaseConnection.php';

function uploadFile($content, $fileName)
{
    $conn = databaseConnection();

    $stmt = $conn->prepare("INSERT into posts(userid,content,image) value(?,?,?)");
    $stmt->execute([$_SESSION["id"], $content, $fileName]);
}
