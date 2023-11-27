<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'user_auth';

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to set a cookie
function setCookieValue($name, $value, $expiry)
{
    setcookie($name, $value, time() + $expiry, '/');
}

// Function to get a cookie value
function getCookieValue($name)
{
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : '';
}
