<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/outside-assignment/php-assignment/day-3/user_auth_system/public/styles/index.css"/>
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
                $messageClass = isset($_SESSION['message_type']) && $_SESSION['message_type'] === 'success' ? 'success-message' : 'error-message';
                echo "<p class='$messageClass'>" . $_SESSION['message'] . "</p>";
                unset($_SESSION['message']); // Clear the message after displaying
                unset($_SESSION['message_type']); // Clear the message type after displaying
                }
                ?>
                <button type="submit" name="register">Register</button>
                <a href="/outside-assignment/php-assignment/day-3/user_auth_system/app/views/login.php">Already have an account? Login</a>
            </form>
        </div>
    </div>
</body>
</html>