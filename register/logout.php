<?php
include 'config.php'; // Include the database connection and functions

// Clear the username cookie to log the user out
setCookieValue('username', '', time() - 3600); // Expire the cookie

// Redirect to the login page after logout
header("Location: login.php");
exit();
?>
