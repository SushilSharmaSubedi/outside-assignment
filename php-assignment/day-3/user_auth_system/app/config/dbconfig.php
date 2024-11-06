<?php
include __DIR__ . '/../../.env';
$host = $host;
$dbname = $dbname;
$username = $username;
$password = $password;
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully";
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>