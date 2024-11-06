<?php
session_start();
include '../config/dbconfig.php';

if (isset($_POST['register'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Check if username is already taken
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->rowCount() > 0) {
        $_SESSION['message'] = "Username is already taken.";
        header("Location: ../views/register.php");
        exit();
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert user into the database
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        if ($stmt->execute([$username, $hashedPassword])) {
            $_SESSION['message'] = "Registration successful!";
            header("Location: ../views/register.php");
            exit();
        } else {
            $_SESSION['message'] = "Error: Could not register user.";
            header("Location: ../views/register.php");
            exit();
        }
    }
}

if (isset($_POST['login'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Fetch user from the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../views/welcome.php");
        exit();
    } else {
        $_SESSION['message'] = "Invalid username or password.";
        header("Location: ../views/login.php");
        exit();
    }
}
?>