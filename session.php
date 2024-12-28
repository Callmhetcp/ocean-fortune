<?php

$_SESSION['id'] = $user_id;

session_start();  // Start the session to access session variables

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];  // Retrieve the user ID from the session
    echo "The user ID is: " . $user_id;
} else {
    echo "User is not logged in.";
}

?>