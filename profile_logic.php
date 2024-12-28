<?php
include 'connection.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Retrieve user details from session
$user_id = $_SESSION['user_id'];
$user_fname = $_SESSION['user_firstname'];
$user_lname = $_SESSION['user_lastname'];
$email = $_SESSION['user_email'];
$phone = $_SESSION['user_phone'];

// Initialize feedback messages
$update_success = '';
$update_error = '';
$kyc_message = '';

// Handle profile update
if (isset($_POST['update_profile'])) {
    $new_fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $new_lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $new_email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $update_query = "UPDATE users SET 
                        firstname = '$new_fname', 
                        lastname = '$new_lname', 
                        email = '$new_email', 
                        phone = '$new_phone' 
                     WHERE user_id = $user_id";

    if (mysqli_query($conn, $update_query)) {
        $_SESSION['user_firstname'] = $new_fname;
        $_SESSION['user_lastname'] = $new_lname;
        $_SESSION['user_email'] = $new_email;
        $_SESSION['user_phone'] = $new_phone;

        $update_success = 'Profile updated successfully.';
    } else {
        $update_error = 'Error updating profile: ' . mysqli_error($conn);
    }
}

// Handle password change
if (isset($_POST['change_password_btn'])) {
    $current_password = mysqli_real_escape_string($conn, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    $query = "SELECT password FROM users WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        if (password_verify($current_password, $stored_password)) {
            if ($new_password === $confirm_password) {
                $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

                $update_query = "UPDATE users SET password = '$hashed_password' WHERE user_id = '$user_id'";
                if (mysqli_query($conn, $update_query)) {
                    $update_success = 'Password updated successfully.';
                } else {
                    $update_error = 'Error updating password. Please try again later.';
                }
            } else {
                $update_error = 'New password and confirm password do not match.';
            }
        } else {
            $update_error = 'Current password is incorrect.';
        }
    } else {
        $update_error = 'User not found.';
    }
}

/// Initialize feedback and KYC details variables
$kyc_message = '';
$dob = '';
$address = '';
$gov_id = '';
$id_number = '';
$status = 'KYC Not Submitted';

// Fetch existing KYC details
$kyc_query = "SELECT dob, address, gov_id, id_number,status FROM kyc_details WHERE user_id = ?";
$stmt = mysqli_prepare($conn, $kyc_query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $kyc_data = mysqli_fetch_assoc($result);
    $dob = $kyc_data['dob'] ?? '';
    $address = $kyc_data['address'] ?? '';
    $gov_id = $kyc_data['gov_id'] ?? '';
    $id_number = $kyc_data['id_number'] ?? '';
    $status = $kyc_data['status'] ?? 'KYC Not Submitted'; // Get the status

}

// Handle KYC submission
if (isset($_POST['submit_kyc'])) {
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $gov_id = mysqli_real_escape_string($conn, $_POST['gov_id']);
    $id_number = mysqli_real_escape_string($conn, $_POST['id_number']);

    // Check if KYC details already exist for the user
    $check_query = "SELECT * FROM kyc_details WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        // Update existing KYC details
        $update_query = "UPDATE kyc_details SET dob = ?, address = ?, gov_id = ?, id_number = ?, status = 'Unverified' WHERE user_id = ?";
        $stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($stmt, "ssssi", $dob, $address, $gov_id, $id_number, $user_id);
        if (mysqli_stmt_execute($stmt)) {
            $kyc_message = 'KYC details updated successfully.';
        } else {
            $kyc_message = 'Error updating KYC details: ' . mysqli_error($conn);
        }
    } else {
        // Insert new KYC details
        $insert_query = "INSERT INTO kyc_details (user_id, dob, address, gov_id, id_number, status) VALUES (?, ?, ?, ?, ?, 'Unverified')";
        $stmt = mysqli_prepare($conn, $insert_query);
        mysqli_stmt_bind_param($stmt, "issss", $user_id, $dob, $address, $gov_id, $id_number);
        if (mysqli_stmt_execute($stmt)) {
            $kyc_message = 'KYC details submitted successfully.';
        } else {
            $kyc_message = 'Error submitting KYC details: ' . mysqli_error($conn);
        }
    }
}
?>
