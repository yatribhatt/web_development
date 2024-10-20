<?php
// MySQL connection settings
$servername = "localhost"; // Use the appropriate server name or IP address
$username = "root";        // Use the correct MySQL username
$password = "";            // Use the correct MySQL password
$dbname = "mydatabase";    // Use your actual database name

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert data into MySQL table
$sql = "INSERT INTO users (name, address, email, phone) VALUES ('$name', '$address', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <a href='display.php'>View Users</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
