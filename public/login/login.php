<?php
// Start the session
session_start();
require '../login/config.php'; // Database configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = trim($_POST['username']);
    $input_password = $_POST['password'];

    // Database connection
    $con = new mysqli($host, $username, $password, $dbname);
    if ($con->connect_error) {
        die("Database connection failed: " . $con->connect_error);
    }

    // Query to check user credentials
    $stmt = $con->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        if (password_verify($input_password, $hashed_password)) {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user_id;

            setcookie("user_login", $user_id, time() + (86400 * 30), "/"); // Set 30-day cookie

            header("Location: ../home/index.php");
            exit;
        } else {
            $error = "Incorrect password!";
        }
    } else {
        $error = "User not found!";
    }
    $stmt->close();
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Login</button>
    </form>

    <form action="signIn.php" method="get">
        <button type="submit">Sign Up</button>
    </form>

    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
