<?php

// Retrieve environment variables
$host = "localhost";
$dbname = "user_auth_system";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>