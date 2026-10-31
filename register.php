<?php
// Sign-up: checks the details, hashes the password, and saves the user.
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Please use the sign-up form.');
}

$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 6) {
    exit('Please enter a name, a valid email and a password of at least 6 characters.');
}

// Never store the plain password. Store a hash of it instead.
$hash = password_hash($password, PASSWORD_DEFAULT);

// A prepared statement keeps user input out of the SQL text (stops SQL injection).
$stmt = $conn->prepare('INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $name, $email, $hash);

try {
    $stmt->execute();
    header('Location: ../frontend/main.html');
    exit;
} catch (mysqli_sql_exception $e) {
    exit('That username or email is already registered.');
}
