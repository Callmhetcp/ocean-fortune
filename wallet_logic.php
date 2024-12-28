<?php
include 'connection.php';

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "User not logged in.";
    exit;
}

// Get the logged-in user's ID from session
$userId = $_SESSION['user_id'];

// Query to get the user's crypto data from the database
$query = "SELECT crypto_symbol,transaction_type, amount FROM transactions WHERE user_id = ? AND status = 'completed'";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $userId);
$stmt->execute();
$result = $stmt->get_result();

// Sum the amounts for each crypto_symbol
$cryptoData = [];
while ($row = $result->fetch_assoc()) {
    $symbol = $row['crypto_symbol'];
    $amount = floatval($row['amount']); // Ensure the amount is a number
    $type = $row['transaction_type'];
    if ($type=== 'Deposit') {
        //add amount for deposit
        if (isset($cryptoData[$symbol])) {
            $cryptoData[$symbol] += $amount;
        } else {
            $cryptoData[$symbol] = $amount;
        }
    } elseif ($type === 'Withdrawal') {
        // Subtract amount for withdrawals
        if (isset($cryptoData[$symbol])) {
            // Check if the balance is sufficient (greater than or equal to the withdrawal amount)
        if ($cryptoData[$symbol] >= $amount) {
            // Subtract amount for withdrawals
            $cryptoData[$symbol] -= $amount;
        }
        } else {
            $cryptoData[$symbol] = -$amount; // Initialize with negative value
        }
    }
}

$stmt->close();
?>