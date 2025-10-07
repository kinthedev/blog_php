<?php
include_once __DIR__ . '/../database/databaseConnection.php';
session_start();
function deletePost($idPost)
{
    $conn = databaseConnection();

    $stmt = $conn->prepare("DELETE FROM posts where id = ? and userid = ?");

    $stmt->execute([$idPost, $_SESSION['id']]);
}
