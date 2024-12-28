<?php
include 'connection.php'; // Include your DB connection logic

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    // Retrieve and sanitize inputs
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : null;
    $wallet = isset($_POST['wallet']) ? htmlspecialchars($_POST['wallet']) : null;
    $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : null;

    // Validate input data
    if (!$user_id || !$wallet || !$amount || $amount <= 0) {
        echo "<script>alert('Invalid input. Please select a wallet and enter a valid amount.'); window.location.href = 'your_previous_page.php';</script>";
        exit;
    }

    // Generate a random transaction_id (combine random number and timestamp for uniqueness)
    $transaction_id = strtoupper(uniqid('TXN') . rand(100000, 999999));

    // Update the user's balance in the `users` table
    $stmt = $conn->prepare("UPDATE users SET balance = balance + ? WHERE user_id = ?");
    $stmt->bind_param('di', $amount, $user_id);

    // Execute the update query
    if ($stmt->execute()) {
        // Assign fixed values to variables
        $transaction_type = 'Deposit';
        $wallet_address = 'Profit';
        $qr_code = 'admin';
        $status = 'Completed';

        // Record the transaction in the `transactions` table
        $stmt2 = $conn->prepare("INSERT INTO transactions (transaction_id, user_id, crypto_symbol, amount, transaction_type, wallet_address, qr_code, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt2->bind_param('sisdssss', $transaction_id, $user_id, $wallet, $amount, $transaction_type, $wallet_address, $qr_code, $status);

        if ($stmt2->execute()) {
            echo "<script>alert('Balance added successfully and transaction recorded.'); window.location.href = 'users.php';</script>";
        } else {
            echo "<script>alert('Failed to record transaction.'); window.location.href = 'users.php';</script>";
        }

        $stmt2->close();
    } else {
        echo "<script>alert('Failed to update balance. Please try again later.'); window.location.href = 'users.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
