<?php
require 'db.php'; // Your database connection script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if the username already exists
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        // Username already exists
        header("Location: register.php?error=username_exists");
        exit;
    }

    // Proceed with user registration
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute(['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT)]);

    // Redirect to login or another page
    header("Location: login.php");
    exit;
}
?>
