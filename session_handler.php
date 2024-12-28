<?php

// Start the session and include the connection
session_start();
include('connection.php');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Get user details from session
$userId = $_SESSION['user_id'];
$user_lname = $_SESSION['user_lastname'];

// Initialize notifications if they don't exist
if (!isset($_SESSION['notifications'])) {
    $_SESSION['notifications'] = [];
}

// Function to add login notification
function addLoginNotification($userName) {
    $message = "Login successful for user: " . htmlspecialchars($userName);
    $_SESSION['notifications'][] = $message;
}

// Add login notification for the current session
addLoginNotification($user_lname);



// Get user details from session (assuming these are stored when the user logs in)
$user_id = $_SESSION['user_id'];

?>
