<?php


// Include database connection
include('connection.php');


// Read JSON input
$data = json_decode(file_get_contents('php://input'), true);

$userId = $_SESSION['user_id'];


// Check the connection
if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Database connection failed: " . mysqli_connect_error()]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    $fromSymbol = $data['fromSymbol'] ?? null;
    $toSymbol = $data['toSymbol'] ?? null;
    $amountFrom = $data['amountFrom'] ?? 0;
    $amountTo = $data['amountTo'] ?? 0;

    if (!$fromSymbol || !$toSymbol || $amountFrom <= 0 || $amountTo <= 0) {
        echo json_encode(["status" => "error", "message" => "Invalid data"]);
        exit;
    }

    // Start a transaction
    mysqli_begin_transaction($conn);

    try {
        // Check if user has enough of the "from" cryptocurrency
        $query_check = "SELECT amount FROM transactions WHERE user_id = ? AND crypto_symbol = ? FOR UPDATE";
        $stmt_check = mysqli_prepare($conn, $query_check);
        mysqli_stmt_bind_param($stmt_check, "is", $userId, $fromSymbol);
        mysqli_stmt_execute($stmt_check);
        $result_check = mysqli_stmt_get_result($stmt_check);
        $row_check = mysqli_fetch_assoc($result_check);

        if (!$row_check || $row_check['amount'] < $amountFrom) {
            throw new Exception("Insufficient balance for $fromSymbol");
        }

        // Deduct the "from" cryptocurrency
        $query_deduct = "UPDATE transactions SET amount = amount - ? WHERE user_id = ? AND crypto_symbol = ? FOR UPDATE";;
        $stmt_deduct = mysqli_prepare($conn, $query_deduct);
        mysqli_stmt_bind_param($stmt_deduct, "dis", $amountFrom, $userId, $fromSymbol);
        mysqli_stmt_execute($stmt_deduct);

        // Add the "to" cryptocurrency
        $query_add = "UPDATE transactions SET amount = amount + ? WHERE user_id = ? AND crypto_symbol = ? FOR UPDATE";
        $stmt_add = mysqli_prepare($conn, $query_add);
        mysqli_stmt_bind_param($stmt_add, "dis", $amountTo, $userId, $toSymbol);
        mysqli_stmt_execute($stmt_add);

        // Commit the transaction
        mysqli_commit($conn);

        echo json_encode(["status" => "success", "message" => "Swap completed successfully"]);
    } catch (Exception $e) {
        // Rollback the transaction in case of an error
        mysqli_rollback($conn);
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }

    // Close the prepared statements
    mysqli_stmt_close($stmt_check);
    mysqli_stmt_close($stmt_deduct);
    mysqli_stmt_close($stmt_add);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}

// Close the database connection
mysqli_close($conn);
?>
