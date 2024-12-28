<?php
session_start(); // Start the session

// Check if the user is logged in and the user ID is available in the session
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id']; // Fetch the user ID

// Get the payment details from the POST request
$data = json_decode(file_get_contents('php://input'), true);

$transactionId = $data['transactionId'];
$cryptoSymbol = $data['cryptoSymbol'];
$amount = $data['amount'];
$walletAddress = $data['walletAddress'];
$status = "Pending"; // Set the status to Pending by default

// Include the database connection
include('connection.php');

// Prepare the SQL query to insert the payment details into the database
$query = "INSERT INTO payments (transaction_id, crypto_symbol, amount, wallet_address, status, user_id)
          VALUES ('$transactionId', '$cryptoSymbol', '$amount', '$walletAddress', '$status', '$user_id')";

// Execute the query
if (mysqli_query($conn, $query)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

// Close the database connection
mysqli_close($conn);
?>
<?php
