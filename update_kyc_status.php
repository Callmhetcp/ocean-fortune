<?php
include 'connection.php'; // Include your DB connection logic

// Check if the form is submitted
if (isset($_POST['approve_kyc'])) {
    $user_id = intval($_POST['user_id']);

    // Update the KYC status to 'Verified'
    $stmt = $conn->prepare("UPDATE kyc_details SET status = 'Verified' WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        // Redirect back to the users page or show a success message
        echo "<script>alert('KYC Approved and status updated!'); window.location.href = 'users.php';</script>";
    } else {
        // Display error message if the update fails
        echo "<script>alert('Error approving KYC. Please try again.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
