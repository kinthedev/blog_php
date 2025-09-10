<?php

require_once __DIR__ . "\config.php";

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successful";
} catch (PDOException $e) {
    echo "" . $e->getMessage() . "";
}
