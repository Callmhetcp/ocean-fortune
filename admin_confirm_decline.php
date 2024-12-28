<?php
session_start();
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    // Decode JSON input data
    $inputData = json_decode(file_get_contents('php://input'), true);

    if (isset($inputData['transaction_id'], $inputData['action'])) {
        $transactionId = mysqli_real_escape_string($conn, $inputData['transaction_id']);
        $action = mysqli_real_escape_string($conn, $inputData['action']);

        // Fetch transaction details
        $query = "SELECT * FROM transactions WHERE transaction_id = ? AND status = 'Pending'";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $transactionId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $transaction = $result->fetch_assoc();
            $amount = $transaction['amount'];
            $transactionType = $transaction['transaction_type']; // Deposit or Withdrawal
            $userId = $transaction['user_id'];

            // Determine the new status
            $newStatus = ($action === 'confirm') ? 'completed' : (($action === 'decline') ? 'failed' : '');

            if ($newStatus) {
                // Update the transaction status
                $updateQuery = "UPDATE transactions SET status = ? WHERE transaction_id = ?";
                $updateStmt = $conn->prepare($updateQuery);
                $updateStmt->bind_param('ss', $newStatus, $transactionId);

                if ($updateStmt->execute()) {
                    if ($action === 'confirm' && $newStatus === 'completed') {
                        // Update user's balance based on transaction type
                        if ($transactionType === 'Deposit') {
                            $balanceUpdateQuery = "UPDATE users SET balance = balance + ? WHERE user_id = ?";
                        } elseif ($transactionType === 'Withdrawal') {
                            $balanceUpdateQuery = "UPDATE users SET balance = balance - ? WHERE user_id = ?";
                        } else {
                            echo json_encode(['status' => 'error', 'message' => 'Invalid transaction type']);
                            exit;
                        }

                        $balanceStmt = $conn->prepare($balanceUpdateQuery);
                        $balanceStmt->bind_param('di', $amount, $userId);

                        if ($balanceStmt->execute()) {
                            echo json_encode([
                                'status' => 'success',
                                'message' => 'Transaction confirmed and balance updated successfully',
                                'newStatus' => $newStatus
                            ]);
                        } else {
                            echo json_encode(['status' => 'error', 'message' => 'Failed to update balance']);
                        }
                        $balanceStmt->close();
                    } else {
                        echo json_encode([
                            'status' => 'success',
                            'message' => 'Transaction updated successfully',
                            'newStatus' => $newStatus
                        ]);
                    }
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to update transaction']);
                }
                $updateStmt->close();
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Invalid action']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Transaction not found or already processed']);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Missing required data']);
    }
    exit; // End the script here for POST requests
}






function displayTransactions()
{
    global $conn;

    if (!isset($_SESSION['user_id'])) {
        echo "User not logged in.";
        return;
    }

    

    $query = "SELECT t.*, u.firstname, u.lastname 
              FROM transactions t
              JOIN users u ON t.user_id = u.user_id
              ORDER BY t.created_at DESC";
    
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error fetching transactions: " . mysqli_error($conn);
        return;
    }

    if (mysqli_num_rows($result) > 0) {
        while ($transaction = mysqli_fetch_assoc($result)) {
            $transactionId = htmlspecialchars($transaction['transaction_id']);
            $amount = htmlspecialchars($transaction['amount']);
            $date = htmlspecialchars($transaction['created_at']);
            $status = htmlspecialchars($transaction['status']);
            $transactionType = htmlspecialchars($transaction['transaction_type']);
            $crypto = htmlspecialchars($transaction['crypto_symbol']);
            $wallet = htmlspecialchars($transaction['wallet_address']);
            $firstname = htmlspecialchars($transaction['firstname']);
            $lastname = htmlspecialchars($transaction['lastname']);

            if ($status == "Completed") {
                $bg = "rgba(34, 197, 94, 0.2)";
                $color = " #00c853";
            }elseif($status == "Failed"){
                $bg = "rgba(239, 68, 68, 0.2)";
                $color = " #ff3d3d";
            }else{
                $bg = "rgba(236, 239, 68, 0.2)";
                $color = " #eab308";
                
            }

            if ($transactionType == "Deposit") {
                $bg2 = "rgba(34, 197, 94, 0.2)";
                $color2 = " #00c853";
            }else{
                $bg2 = "rgba(239, 68, 68, 0.2)";
                $color2 = " #ff3d3d";
            }
            ?>
           
      
            <!-- Transaction Card -->
            <div class="transaction-card" data-status="<?php echo $status; ?>" data-transaction-id="<?php echo $transactionId; ?>">
                <div class="transaction-header">
                    <a href="#" class="hash"><?php echo $transactionId; ?></a>
                    <div class="amount"><?php echo $amount; ?></div>
                </div>
                <div class="transaction-details">
                    <div class="detail-row">
                        <span class="label">Date:</span>
                        <span class="value"><?php echo date('Y-m-d', strtotime($date)); ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="label">Crypto:</span>
                        <span class="value"><?php echo $crypto; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="label">Wallet:</span>
                        <span class="value"><?php echo $wallet; ?></span>
                    </div>
                    <div class="status-row">
                        <div>
                            <span class="status-badge" style="background: <?php echo $bg;?>; color: <?php echo $color;?>;">
                                <?php echo ucfirst($status); ?>
                            </span>

                            <br>
                            <span class="type-badge credit" 
                                  style="background-color: <?php echo $bg2 ?>; color: <?php echo $color2 ?>;">
                                <?php echo $transactionType; ?>
                            </span>
                        </div>
                        <div class="transaction-dropdown">
                            <button class="dropdown-button"><i class="fa fa-sort-down"></i></button>
                            <div class="transaction-dropdown-menu">
                                <button type="button" class="popup_trigger dropdown-item" data-transaction-id="<?php echo $transactionId; ?>" data-status="<?php echo $status; ?>" data-firstname="<?php echo $firstname; ?>" data-lastname="<?php echo $lastname; ?>">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
        }
    } else {
        echo "<p>No transactions found.</p>";
    }
}
?>


<!-- Confirm/Decline Popup -->
<section class="confirm_decline">
    <div class="bg_overlay">
        <div class="popup_box">
            <div class="toast-container" id="toastContainer"></div>
            <div class="wrapper">
                <header>
                    <div>
                        Confirm/Decline    
                        <h3 class=""> 
                            <p class="firstname"></p>
                            <p class="lastname"></p>
                        </h3>
                        transaction
                    </div>
                    <i class="material-icons close_confirm_decline">close</i>
                </header>
                <main class="question">
                    <span>Are you sure you want to confirm/decline this transaction?</span>
                </main>
                <footer class="confirm_decline_buttons">
                    <div class="wrapper">
                        <button id="close" class="close" type="button">Close</button>
                        <button onclick="confirmTransaction()" id="confirm" class="btn confirm" type="button">Confirm</button>
                        <button onclick="declineTransaction()" id="decline" class="btn decline" type="button">Decline</button>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</section>






    
