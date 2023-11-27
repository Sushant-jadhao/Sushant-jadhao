<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $is_admin = isset($_POST['is_admin']) ? 1 : 0;

    $sql = "INSERT INTO users (username, password, is_admin) VALUES ('$username', '$password', $is_admin)";
    $result = $conn->query($sql);

    if ($result) {
        $success = "Registration successful!";
    } else {
        $error = "Registration failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
    <?php if (isset($success)) { echo "<p style='color: green;'>$success</p>"; } ?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <label for="is_admin">Admin:</label>
        <input type="checkbox" name="is_admin">
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
