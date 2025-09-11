<?php
require_once __DIR__ . "/auth_function.php";
require_once __DIR__ . "/../models/authModel.php";

$usernameoremail = sanitizeInput($_POST["usernameoremail"] ?? "");
$password = sanitizeInput($_POST["password"] ?? "");
$usernameoremailErr = $passErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($usernameoremail)) {
        $usernameoremailErr = "Username or email is required";
    } else {
        if (!getUserOrEmail($usernameoremail)) {
            $usernameoremailErr = "Username or email is wrong";
        }
    }
    if (empty($password)) {
        $passErr = "Password is required";
    }
    if (empty($usernameoremailErr) && empty($passwordErr)) {
        if (checkPassword($usernameoremail) == $password) {
            header("Location: ../public/home.php");
        } else {
            $passErr = "Password is wrong";
        }
    }
}
