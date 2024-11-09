<?php
session_start();

// Check if the user is logged in
if (!isset($_COOKIE['user_login'])) {
    header("Location: login.php");
    exit;
}

// Welcome message and sign-out option
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome!</h2>
    <p>You are logged in.</p>
    <a href="logout.php">Sign Out</a>
</body>
</html>
