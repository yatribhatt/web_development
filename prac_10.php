<?php
// Allow requests from any origin (CORS policy)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myrestapi";

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON input data (from POST request)
$data = json_decode(file_get_contents("php://input"));

// Check if username and email fields exist in the input
if(isset($data->username) && isset($data->email)) {
    $username = $data->username;
    $email = $data->email;

    // Insert data into MySQL table
    $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "User added successfully"]);
    } else {
        echo json_encode(["message" => "Error: " . $sql . " " . $conn->error]);
    }
} else {
    echo json_encode(["message" => "Invalid input"]);
}

$conn->close();
?>


