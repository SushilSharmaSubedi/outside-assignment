<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/outside-assignment/php-assignment/day-3/user_auth_system/public/styles/index.css">
    <script src="/outside-assignment/php-assignment/day-3/user_auth_system/app.js"></script>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="../controllers/UserController.php" method="post" onsubmit="return validateForm()">
                <input type="text" name="username" placeholder="Username" >
                <span id="usernameError" class="error-message"></span>
                <input type="password" name="password" placeholder="Password" >
                <span id="passwordError" class="error-message"></span>
            <?php
            session_start();
            if (isset($_SESSION['message'])) {
                echo "<p class='error-message'>" . $_SESSION['message'] . "</p>";
                unset($_SESSION['message']); // Clear the message after displaying
            }
            ?>
                <button type="submit" name="login">Login</button>
                <a href="register.php">Don't have an account? Register</a>
            </form>
        </div>
    </div>
</body>
</html>