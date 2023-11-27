<?php
session_start();
include('config.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// User-specific logic goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Page</title>
</head>
<body>
    <h2>Welcome, Student!</h2>
    <!-- Student-specific content goes here -->
    <a href="logout.php">Logout</a>
</body>
</html>
