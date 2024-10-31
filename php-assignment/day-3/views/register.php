<?php
require_once __DIR__ . '/../controllers/AuthController.php';
$authController = new AuthController();
$error = $authController->register();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit"><a href="login.php">Register</a></button>
    </form>
    <p>Already registered? <a href="login.php">Login here</a>.</p>
</body>
</html>
