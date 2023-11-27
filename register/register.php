<?php
include 'config.php'; // Database connection and functions

// Process registration form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $newUsername = $_POST['newUsername'];
    $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $newUsername, $newPassword);
    $stmt->execute();

    // For simplicity, we set a cookie with the username
    setCookieValue('username', $newUsername, 3600); // 1 hour expiration
    header("Location: welcome.php"); // Redirect to a welcome page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Registration</title>
</head>

<body>
    <div class="container">
        <h1>User Registration</h1>

        <!-- Registration Form -->
        <form method="post">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>
            <br>
            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>
            <br>
            <button type="submit" name="register">Register</button>
        </form>

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>

</html>
