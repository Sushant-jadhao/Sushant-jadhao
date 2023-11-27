<?php
include 'config.php'; // Include the database connection and functions

// Get the logged-in username from the cookie
$loggedInUsername = getCookieValue('username');

// Redirect to login page if the user is not logged in
if (empty($loggedInUsername)) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>

<body>
    <div class="container">
        <h1>Welcome, <?php echo $loggedInUsername; ?>!</h1>

        <p>This is your secure space. Feel free to explore!</p>

        <form method="post" action="logout.php">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
</body>

</html>
