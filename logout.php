<?php
session_start(); // Start the session

session_unset();

// Destroy the session to log the user out
session_destroy();

// Redirect the user to the login page
header('Location: login.php?msg=You have logged out successfully');
exit();
?>
