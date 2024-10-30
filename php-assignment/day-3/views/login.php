<?php
require_once __DIR__ . '/../controllers/AuthController.php';
$authController = new AuthController();
$error = $authController->login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="welcome.php">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
        <p>Not registered? <a href="register.php">Register here</a>.</p>
    </form>
</body>
</html>
