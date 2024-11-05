<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/styles/index.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="welcome.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <a href="register.php">Don't have an account? Register</a>
            </form>
        </div>
    </div>
</body>
</html>