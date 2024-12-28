<?php
include 'connection.php';

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "User not logged in.";
    exit;
}

// Get the logged-in user's ID from session
$userId = $_SESSION['user_id'];

// Query to get the user's balance from the users table
$query = "SELECT balance FROM users WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $userId);
$stmt->execute();
$stmt->bind_result($balance);
$stmt->fetch();
$stmt->close();

if ($balance !== null) {
    // Display the balance on the dashboard
} else {
    echo "User balance not found.";
    exit;
}
?>