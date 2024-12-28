<?php
session_start();
include 'connection.php';

function displayHistory()
{
    global $conn;

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        echo "User not logged in.";
        return;
    }

    // Get the logged-in user's ID
    $userId = $_SESSION['user_id'];

    // Fetch transactions for the logged-in user
    $query = "SELECT * FROM transactions WHERE user_id = '$userId' ORDER BY created_at DESC"; // Adjust column names if necessary
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error fetching transactions: " . mysqli_error($conn);
        return;
    }

    // Check if there are any transactions
    if (mysqli_num_rows($result) > 0) {
        while ($transaction = mysqli_fetch_assoc($result)) {
            // Extract transaction details
            $transactionId = htmlspecialchars($transaction['transaction_id']);
            $amount = htmlspecialchars($transaction['amount']);
            $date = htmlspecialchars($transaction['created_at']);
            $status = htmlspecialchars($transaction['status']);
            $transactionType = htmlspecialchars($transaction['transaction_type']);
            $crypto = htmlspecialchars($transaction['crypto_symbol']);
            $wallet = htmlspecialchars($transaction['wallet_address']);
            $userId = htmlspecialchars($transaction['user_id']);

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
               <!-- Transaction Card HTML -->
               <div class="transaction-card">
                <div class="transaction-header">
                    <a href="#" class="hash"><?php echo $transactionId; ?></a>
                    <div class="amount"><?php echo $amount; ?></div>
                </div>
                <div class="transaction-details">
                    <div class="detail-row">
                        <span class="label">User:</span>
                        <span class="value"><?php echo $userId; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="label">Date:</span>
                        <span class="value"><?php echo $date; ?></span>
                    </div>
                    <div class="detail-row">
                        <span class="label">Preference:</span>
                        <span class="value">High</span>
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
                                <button type="submit" class="dropdown-item">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        // Only display "No transactions found" if the result set is empty
        echo "<p>No transactions found.</p>";
    }
}
?>
