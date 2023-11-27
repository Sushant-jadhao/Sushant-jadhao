<?php
session_start();
include('config.php');

if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header('Location: login.php');
    exit();
}

// Admin-specific logic goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <!-- Admin-specific content goes here -->
    <a href="logout.php">Logout</a>
</body>
</html>
