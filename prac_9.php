<?php
session_start(); // Start the session

// Check if 'views' exists in the session
if(isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1; // Increment views count
} else {
    $_SESSION['views'] = 1; // Initialize views count
}

echo "Page Views Count: " . $_SESSION['views']; // Display the count
?>
