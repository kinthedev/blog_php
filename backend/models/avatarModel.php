<?php
require_once __DIR__ . "/../database/databaseConnection.php";

function setAvatar($avatar)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("UPDATE users set avatar = ? where  username = ? ");
    $stmt->execute([$avatar, $_SESSION["username"]]);
}
function getAvatar()
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT avatar from users where username = ? ");
    $stmt->execute([$_SESSION["username"]]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
