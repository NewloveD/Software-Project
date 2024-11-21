<?php
// Include database configuration
require '../login/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from form
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $new_username = trim($_POST['username']);
    $new_password = $_POST['password'];

    // Validate inputs
    if (empty($first_name) || empty($last_name) || empty($email) || empty($new_username) || empty($new_password)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } else {
        // Hash the password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Connect to MySQL
        $con = new mysqli($host, $username, $password, $dbname);

        // Check connection
        if ($con->connect_error) {
            die("Database connection failed: " . $con->connect_error);
        }

        // Insert user into the database
        $stmt = $con->prepare("INSERT INTO users (first_name, last_name, email, username, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $new_username, $hashed_password);

        if ($stmt->execute()) {
            $success = "User registered successfully!";
        } else {
            $error = "Error: " . $stmt->error;
        }

        // Clean up
        $stmt->close();
        $con->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register User</title>
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
        input[type="email"],
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
        .message {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }
        .message.success {
            color: green;
        }
        .message.error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h2>Register User</h2>
        
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Register</button>

        <!-- Display success or error message -->
        <?php 
        if (isset($success)) {
            echo "<p class='message success'>$success</p>";
        }
        if (isset($error)) {
            echo "<p class='message error'>$error</p>";
        }
        ?>
    </form>
</body>
</html>
