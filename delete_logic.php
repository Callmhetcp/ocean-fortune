<?php
include 'connection.php'; // Include your DB connection logic

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button'])) {
    // Retrieve and sanitize the user ID
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : null;

    if ($user_id === null) {
        die("Invalid user ID.");
    }

    // Prepare and execute the delete query
    $stmt = $conn->prepare("DELETE FROM users WHERE user_id = ?");
    $stmt->bind_param('i', $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('User deleted successfully!'); window.location.href = 'users.php';</script>";
    } else {
        echo "<script>alert('Error deleting user. Please try again.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
