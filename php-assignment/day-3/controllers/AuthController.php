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

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    
                    header("Location: /views/welcome.php");
                    exit();
                } else {
                    return "Password does not match.";
                }
            } else {
                return "Username does not exist.";
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
