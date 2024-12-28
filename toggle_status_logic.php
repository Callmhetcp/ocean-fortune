<?php
include 'connection.php'; // Include your DB connection logic

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the user ID and new status
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : null;
    $status = isset($_POST['status']) ? htmlspecialchars($_POST['status']) : null;

    // Validate the input data
    if ($user_id && ($status === 'enabled' || $status === 'disabled')) {
        // Update the user's status in the database
        $stmt = $conn->prepare("UPDATE users SET status = ? WHERE user_id = ?");
        $stmt->bind_param('si', $status, $user_id);


        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = 'User status updated successfully.';
        } else {
            $response['message'] = 'Failed to update user status.';
        }

        $stmt->close();
    } else {
        $response['message'] = 'Invalid input data.';
    }
}

echo json_encode($response);
$conn->close();
?>
