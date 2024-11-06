<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../public/styles/index.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            
            <form action="../controllers/UserController.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
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
                <a href="login.php">Already have an account? Login</a>
            </form>
        </div>
    </div>
</body>
</html>