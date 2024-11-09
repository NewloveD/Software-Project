<?php
session_start();

// Unset session and delete cookie
session_unset();
session_destroy();
setcookie("user_login", "", time() - 3600, "/"); // Expire cookie

// Redirect to home page
header("Location: /");
exit;
?>
