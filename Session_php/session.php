<?php
// Set the session save path
session_save_path('C:\xampp\htdocs\WEB Lab\Session_php');
session_start();

$maxSessions = 3; // Maximum number of concurrent sessions allowed for a user

if (!isset($_SESSION['session_count'])) {
    $_SESSION['session_count'] = 1;
} else {
    $_SESSION['session_count']++;

    if ($_SESSION['session_count'] > $maxSessions) {
        session_unset();
        session_destroy();
        echo "Maximum session limit exceeded. Please log in again.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>
    <h1>PHP Session Example</h1>
    
    <?php
    echo "Session active. Session count: " . $_SESSION['session_count'];
    ?>
    
    <!-- Your additional HTML content can go here -->
    
</body>
</html>
