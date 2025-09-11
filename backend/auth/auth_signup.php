<?php
require_once __DIR__ . "/auth_function.php";
require_once __DIR__ . "/../models/authModel.php";

$username = sanitizeInput($_POST["username"] ?? "");
$email = sanitizeInput($_POST["email"] ?? "");
$password = sanitizeInput($_POST["password"] ?? "");
$confirmPassword = sanitizeInput($_POST["confirmPassword"] ?? "");
$nameErr = $emailErr = $passErr = $matchPassword = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //check username
    if (empty($username)) {
        $nameErr = "Username is required";
    } else {
        if (!validationUser($username)) {
            $nameErr = "Username is invalid ";
        } elseif (getUser($username)) {
            $nameErr = "User already exists";
        }
    }
    //check email
    if (empty($email)) {
        $emailErr = "Email is required";
    } else {
        if (!validationEmail($email)) {
            $emailErr = "Email is invalid";
        } elseif (getEmail($email)) {
            $emailErr = "Email already exists";
        }
    }
    //check password
    if (empty($password) || empty($confirmPassword)) {
        $passErr = "Password is required";
    } else {
        if (!validationPassword($password, $confirmPassword)) {
            $passErr = "Password is not match";
        }
    }


    if (empty($nameErr) && empty($passErr) && empty($matchPassword) && empty($emailErr)) {
        insertUser($username, $email, $password);
        header("Location: ../frontend/login.php");
        exit();
    }
}
