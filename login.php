<?php
// Login: finds the user and checks the password against the saved hash.
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Please use the login form.');
}

$name     = trim($_POST['name'] ?? '');
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare('SELECT password_hash FROM users WHERE name = ?');
$stmt->bind_param('s', $name);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if ($user && password_verify($password, $user['password_hash'])) {
    $_SESSION['user'] = $name;
    header('Location: ../frontend/main.html');
    exit;
}

exit('Wrong username or password.');
