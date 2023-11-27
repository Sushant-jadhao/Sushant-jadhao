<?php
include 'config.php'; // Database connection and functions

// Process login form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validateUser($username, $password)) {
        // User is valid, set a cookie with the username
        setCookieValue('username', $username, 3600); // 1 hour expiration
        header("Location: welcome.php"); // Redirect to a welcome page
        exit();
    } else {
        $loginError = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Login</title>
</head>

<body>
    <div class="container">
        <h1>User Login</h1>

        <!-- Login Form -->
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit" name="login">Login</button>
        </form>

        <?php
        if (isset($loginError)) {
            echo "<p class='error'>$loginError</p>";
        }
        ?>

        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>

</html>
