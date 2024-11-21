<?php
// Start session
session_start();
require '../login/config.php'; // Include database configuration

// Handle login request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = trim($_POST['username']);
    $input_password = $_POST['password'];

    // Connect to MySQL
    $con = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Database connection failed: " . $con->connect_error);
    }

    // Query database for user
    $stmt = $con->prepare("SELECT id, password FROM users WHERE username = ?");
    if ($stmt) {
        $stmt->bind_param("s", $input_username);
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            // Verify the entered password against the stored hash
            if (password_verify($input_password, $hashed_password)) {
                // Set session and cookie for the logged-in user
                $_SESSION['user_id'] = $user_id;
                setcookie("user_login", $user_id, time() + (86400 * 30), "/"); // 30-day cookie

                // Redirect to the referring page or homepage
                $redirect_to = $_SERVER['HTTP_REFERER'] ?? '/';
                header("Location: $redirect_to");
                exit;
            } else {
                $error = "Incorrect password!";
            }
        } else {
            $error = "User not found!";
        }

        // Clean up
        $stmt->close();
    } else {
        $error = "Error preparing the database query.";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
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

    <!-- Add a button to navigate to the Sign-Up page -->
    <form action="signIn.php" method="get" style="margin-top: 10px;">
        <button type="submit">Sign Up</button>
    </form>

    <!-- Display error message if any -->
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
