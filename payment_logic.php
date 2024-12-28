<?php
// Include the database connection

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection
include('connection.php');

if (!$conn) {
    echo json_encode(['success' => false, 'error' => 'Database connection failed: ' . mysqli_connect_error()]);
    exit;
}


// Set headers for JSON response
header('Content-Type: application/json');

// Decode the JSON request body
$data = json_decode(file_get_contents('php://input'), true);

// file_put_contents('log.txt', print_r($data, true));


// Ensure the required fields are received
if (
    isset($data['transactionId']) &&
    isset($data['cryptoSymbol']) &&
    isset($data['amount']) &&
    isset($data['walletAddress']) &&
    isset($data['qrCode']) // QR Code added here
) {
    // Sanitize and assign input values
    $transactionId = mysqli_real_escape_string($conn, $data['transactionId']);
    $cryptoSymbol = mysqli_real_escape_string($conn, $data['cryptoSymbol']);
    $amount = mysqli_real_escape_string($conn, $data['amount']);
    $walletAddress = mysqli_real_escape_string($conn, $data['walletAddress']);
    $qrCode = mysqli_real_escape_string($conn, $data['qrCode']); // Sanitize the QR code
    
    // Fetch the user ID from the session
    session_start();
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['success' => false, 'error' => 'User not logged in.']);
        exit;
    }
    $userId = $_SESSION['user_id'];

    // Insert payment details into the database
    $status = "Pending"; // Default status for new payments
    $transactionType = "deposit"; // Set the transaction type
    $query = "INSERT INTO transactions (user_id, transaction_id, crypto_symbol, amount, wallet_address, qr_code, transaction_type, status)
              VALUES ('$userId', '$transactionId', '$cryptoSymbol', '$amount', '$walletAddress', '$qrCode', '$transactionType', '$status')";

    // Execute the query and handle the result
    if (mysqli_query($conn, $query)) {
        echo json_encode(['success' => true]);
    } else {
        // Respond with an error if the query fails
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
} else {
    // Respond with an error if required fields are missing
    echo json_encode(['success' => false, 'error' => 'Invalid input data.']);
}

// Close the database connection
mysqli_close($conn);
?>
