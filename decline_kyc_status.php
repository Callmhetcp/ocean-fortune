<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id']) && isset($_POST['decline_kyc'])) {
    $userId = mysqli_real_escape_string($conn, $_POST['user_id']);

    $query = "UPDATE kyc_details SET status = 'Unverified' WHERE user_id = '$userId'";

    if (mysqli_query($conn, $query)) {
        header("Location: users.php?message=KYC+declined"); // Redirect to a success page
        exit;
    } else {
        echo "Error updating KYC status: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
mysqli_close($conn);
?>
