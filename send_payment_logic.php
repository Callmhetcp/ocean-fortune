<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection.php');

if (!$conn) {
    echo json_encode(['success' => false, 'error' => 'Database connection failed: ' . mysqli_connect_error()]);
    exit;
}

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (
    isset($data['transactionId']) &&
    isset($data['cryptoSymbol']) &&
    isset($data['amount']) &&
    isset($data['walletAddress'])
) {
    $transactionId = mysqli_real_escape_string($conn, $data['transactionId']);
    $cryptoSymbol = mysqli_real_escape_string($conn, $data['cryptoSymbol']);
    $amount = mysqli_real_escape_string($conn, $data['amount']);
    $walletAddress = mysqli_real_escape_string($conn, $data['walletAddress']);

    session_start();
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['success' => false, 'error' => 'User not logged in.']);
        exit;
    }
    $userId = $_SESSION['user_id'];

    $kycQuery = "SELECT dob, address, gov_id, id_number, status FROM kyc_details WHERE user_id = '$userId'";
    $result = mysqli_query($conn, $kycQuery);

    if (!$result) {
        echo json_encode(['success' => false, 'error' => 'Error checking KYC details: ' . mysqli_error($conn)]);
        exit;
    }

    if (mysqli_num_rows($result) === 0) {
        echo json_encode(['success' => false, 'error' => 'KYC details not found. Please complete your KYC.']);
        exit;
    }

    $row = mysqli_fetch_assoc($result);

    if (
        empty($row['dob']) ||
        empty($row['address']) ||
        empty($row['gov_id']) ||
        empty($row['id_number'])
    ) {
        echo json_encode(['success' => false, 'error' => 'Incomplete KYC details. Please complete your KYC before withdrawing.']);
        exit;
    }

    if ($row['status'] != 'Verified') {
        echo json_encode(['success' => false, 'error' => 'Your KYC status is unverified. Withdrawal is not allowed.']);
        exit;
    }

    if (!is_numeric($amount) || $amount <= 0) {
        echo json_encode(['success' => false, 'error' => 'Invalid amount. Please enter a positive number.']);
        exit;
    }

    $status = "Pending";
    $transactionType = "Withdrawal";

    $query = "INSERT INTO transactions (user_id, transaction_id, crypto_symbol, amount, wallet_address, transaction_type, status)
              VALUES ('$userId', '$transactionId', '$cryptoSymbol', '$amount', '$walletAddress', '$transactionType', '$status')";

    if (mysqli_query($conn, $query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error inserting transaction: ' . mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input data.']);
}

mysqli_close($conn);
?>
