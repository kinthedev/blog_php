<?php
require_once __DIR__ . "/../database/databaseConnection.php";

function posts()
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT posts.id,posts.userid,posts.content,posts.image,posts.created_at,users.username,users.avatar from posts inner join users on posts.userid = users.id");
    $stmt->execute();
    return $stmt->fetchAll();
}
function postByUser($id)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT * from posts where userid = ?");
    $stmt->execute([$id]);
    return $stmt->fetchAll();
}
