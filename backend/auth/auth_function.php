<?php


function validationEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function validationUser($username)
{
    return preg_match("/^[a-zA-Z-' 1-9]*$/", $username);
}
function validationPassword($password, $confirmPassword)
{
    if ($password != $confirmPassword) {
        return false;
    }
    return true;
}
function sanitizeInput($text)
{
    $text = htmlspecialchars($text);
    $text = trim($text);
    return $text;
}
