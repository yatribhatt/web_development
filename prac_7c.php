<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Stored credentials (in a file or database)
    $stored_username = "admin"; // This should ideally be hashed in real applications
    $stored_password = "12345"; // Use password_hash() for security in real apps

    // Check if the provided credentials match the stored ones
    if ($username === $stored_username && $password === $stored_password) {
        echo "Login successful! Welcome, " . $username;
    } else {
        echo "Invalid username or password.";
    }
}
?>
