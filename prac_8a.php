<?php
// MySQL connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from MySQL
$sql = "SELECT name, address, email, phone FROM users";
$result = $conn->query($sql);

// Display data in an HTML table
if ($result->num_rows > 0) {
    echo "<h2>Registered Users</h2>";
    echo "<table border='1'><tr><th>Name</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
