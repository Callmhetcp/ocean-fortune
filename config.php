<?php

// Enforce strict session handling
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// Set session cookie parameters only if no session is active
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 1800, // 30 minutes
        'domain' => 'localhost', // Adjust for production (e.g., your domain)
        'path' => '/',
        'secure' => false, // Use true if using HTTPS
        'httponly' => true,
        'samesite' => 'Strict' // Adjust based on application needs
    ]);

    session_start(); // Start the session after setting cookie parameters
}

// Handle session regeneration for security
if (!isset($_SESSION['last_regeneration'])) {
    // First-time session setup
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
} else {
    // Check if regeneration is needed
    $interval = 60 * 30; // 30 minutes
    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}

// No redundant `session_regenerate_id()` calls
?>
