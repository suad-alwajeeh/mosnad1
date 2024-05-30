<?php
// Start the session
session_start();

// Check if the logout form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Destroy the session and all its data
    session_destroy();

    // Redirect the user to the login page
    header("Location: ../pages/login.php");
    exit;
}
?>