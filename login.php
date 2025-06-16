<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare('SELECT password FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && hash('sha256', $password) === $row['password']) {
        echo 'Login successful!';
    } else {
        echo 'Invalid username or password';
    }
} else {
    header('Location: login.html');
    exit();
}
?>
