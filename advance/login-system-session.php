<?php
/**
 * Copyright (c) 2024 silrag184
 *
 * This file is part of the PHP Practice Projects.
 * Licensed under the MIT License.
 * See the LICENSE file distributed with this source code for more information.
 */

session_start();

// Hardcoded credentials for demonstration
$valid_username = "user";
$valid_password = "password";

$message = "";

// Handle logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: advance/login-system-session.php");
    exit();
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: advance/login-system-session.php");
        exit();
    } else {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login System Using Sessions</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 400px; margin: auto; }
        .message { color: red; }
        .welcome { margin-bottom: 20px; }
        form { display: flex; flex-direction: column; }
        label { margin-top: 10px; }
        input[type="text"], input[type="password"] { padding: 8px; font-size: 1em; }
        input[type="submit"] { margin-top: 20px; padding: 10px; font-size: 1em; cursor: pointer; }
        a.logout { display: inline-block; margin-top: 20px; color: blue; text-decoration: none; }
        a.logout:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['username'])): ?>
            <div class="welcome">
                <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                <a href="?action=logout" class="logout">Logout</a>
            </div>
        <?php else: ?>
            <h2>Login</h2>
            <?php if ($message): ?>
                <div class="message"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>
            <form method="post" action="advance/login-system-session.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required autofocus>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Login">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
