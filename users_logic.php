<?php
include 'connection.php'; // Include your DB connection logic
// Query to fetch user details along with KYC details
$query = "SELECT users.user_id, users.firstname, users.lastname, users.email, users.nationality, users.balance, users.status, users.phone, users.gender, users.avatar, kyc_details.dob, kyc_details.address, kyc_details.gov_id, kyc_details.id_number, kyc_details.status AS kyc_status
          FROM users
          LEFT JOIN kyc_details ON users.user_id = kyc_details.user_id
          ORDER BY users.firstname ASC";

$result = $conn->query($query);

$users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = [
            'user_id' => $row['user_id'],
            'name' => $row['firstname'], 
            'lastname' => $row['lastname'], 
            'email' => $row['email'],
            'nationality' => $row['nationality'],
            'balance' => $row['balance'],
            'status' => $row['status'],
            'phone' => $row['phone'] ?? '',
            'gender' => $row['gender'] ?? '',
            'avatar' => $row['avatar'] ?: substr($row['firstname'], 0, 1), // Default avatar as the first letter of the name
            // KYC details
            'dob' => $row['dob'] ?? '',
            'address' => $row['address'] ?? '',
            'gov_id' => $row['gov_id'] ?? '',
            'id_number' => $row['id_number'] ?? '',
            'kyc_status' => $row['kyc_status'] ?? 'No Kyc' // Default KYC status if not found
        ];
    }
} else {
    echo "<p>No users found in the database.</p>";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button'])) {
    // Retrieve and sanitize input data
    $user_id = intval($_POST['user_id']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone_No'] ?? '');
    $gender = trim($_POST['gender']);

    // Validate input
    if (empty($firstname) || empty($lastname) || empty($email) || empty($gender)) {
        die("All required fields must be filled out.");
    }

    // Prepare and execute the update query
    $stmt = $conn->prepare("UPDATE users SET firstname = ?, lastname = ?, email = ?, phone = ?, gender = ? WHERE user_id = ?");
    $stmt->bind_param('sssssi', $firstname, $lastname, $email, $phone, $gender, $user_id);

    if ($stmt->execute()) {
        // Display success message
        echo "<script>alert('User details updated successfully!'); window.location.href = 'users.php';</script>";
    } else {
        // Display error message
        echo "<script>alert('Error updating user details. Please try again.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>