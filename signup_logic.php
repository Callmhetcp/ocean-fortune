<?php 	
require 'connection.php';

if (isset($_POST['signup_btn'])) {
    signup();
}

function signup()
{
    global $conn;

    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $conf_pass = mysqli_real_escape_string($conn, $_POST['conf_pass']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // Check for password match
    if ($conf_pass == $password) {
        // Check if email is taken
        $select = "SELECT * FROM users WHERE email = '$email'";
        $qry = mysqli_query($conn, $select);

        if (mysqli_num_rows($qry) < 1) {
            // Hash password
            $options = [
                'cost' => 12
            ];
            $hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);

            // Generate a 6-digit random user ID
            do {
                $user_id = random_int(100000, 999999); // Generate random 6-digit number
                // Check if this user ID already exists
                $check_id_query = "SELECT * FROM users WHERE user_id = '$user_id'";
                $check_id_result = mysqli_query($conn, $check_id_query);
            } while (mysqli_num_rows($check_id_result) > 0); // Repeat if the ID already exists

            // Insert details including the random unique user_id
            $insert = "INSERT INTO users (user_id, firstname, lastname, email, nationality, state, dob, gender, password, phone,role) 
                       VALUES ('$user_id', '$firstname', '$lastname', '$email', '$nationality', '$state', '$dob', '$gender', '$hashedPwd', '$phone','user')";

            $sql = mysqli_query($conn, $insert);

            if ($sql) {
                // Redirect user to login
                header('Location:login.php?msg=Signup success, please login');
                exit();
            } else {
                $GLOBALS['ERROR'] = "Unexpected error, please try again"; 
            }
        } else {
            // Display error
            $GLOBALS['ERROR'] = "Email already in use!";
        }
    } else {
        // Display error
        $GLOBALS['ERROR'] = "Passwords mismatch";
    }
}
?>
