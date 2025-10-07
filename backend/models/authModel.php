<?php
require_once __DIR__ . "/../database/databaseConnection.php";

function getEmail($email)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUser($username)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT username FROM users WHERE username = ? ");
    $stmt->execute([$username]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function getId($username)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? ");
    $stmt->execute([$username]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function getUserOrEmail($usernameoremail)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT username FROM users WHERE username = ? or email = ?");
    $stmt->execute([$usernameoremail, $usernameoremail]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function checkPassword($usernameoremail)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ? or email = ?");
    $stmt->execute([$usernameoremail, $usernameoremail]);
    return $stmt->fetchColumn();
}
function insertUser($email, $username, $password)
{
    $conn = databaseConnection();
    $stmt = $conn->prepare("INSERT into users(username,email,password,avatar,background) value(?,?,?,null,null)");
    $stmt->execute([$email, $username, $password]);
}
function getUsername($value)
{
    $result =  getUser($value);
    return $result["username"];
}
function getIdUsers($value)
{
    $result =  getId($value);
    return $result["id"];
}
