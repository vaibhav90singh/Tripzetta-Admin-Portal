<?php
header('Content-Type: application/json');

// Step 1: Connect to MySQL
// $host = 'localhost';
// $username = 'root';
// $password = ''; // Change this if you have a password
// $database = 'invoice_db';

$conn = new mysqli("localhost", "root", "", "invoice_db");

// Step 2: Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Database connection failed']));
}

// Step 3: Fetch invoices from database
$sql = "SELECT * FROM invoices ORDER BY id DESC";
$result = $conn->query($sql);

$invoices = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $invoices[] = $row;
    }
}

// Step 4: Send JSON response
echo json_encode($invoices);

$conn->close();
?>
