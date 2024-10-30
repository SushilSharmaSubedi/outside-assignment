<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = htmlspecialchars(trim($_POST["username"]));
            $password = htmlspecialchars(trim($_POST["password"]));
            
            if ($this->userModel->getUserByUsername($username)) {
                return "Username already exists.";
            }

            if ($this->userModel->register($username, $password)) {
                header("Location: /views/login.php");
                exit();
            } else {
                return "Registration failed.";
            }
        }
    }

    public function login() {
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = htmlspecialchars(trim($_POST["username"]));
            $password = htmlspecialchars(trim($_POST["password"]));
            
            $user = $this->userModel->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION["user_id"] = $user["id"];
                header("Location: /views/welcome.php");
                exit();
            } else {
                return "Invalid username or password.";
            }
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /views/login.php");
        exit();
    }
}
?>
