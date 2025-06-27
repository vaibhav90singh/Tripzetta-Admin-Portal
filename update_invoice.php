<?php
header('Content-Type: application/json');

$host = "localhost";
$user = "root";
$pass = "";
$db = "invoice_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed."]));
}

// Get data from JS
$data = json_decode(file_get_contents("php://input"), true);
if (!$data) {
    die(json_encode(["error" => "No data received."]));
}

// Prepare and update
$stmt = $conn->prepare("UPDATE invoices SET date=?, place=?, customer=?, address=?, gstin=?, state=?, service=?, sac=?, taxType=?, value=?, sgst=?, cgst=?, igst=?, status=? WHERE invoiceNo=?");
$stmt->bind_param(
    "sssssssssssssss",
    $data['date'],
    $data['place'],
    $data['customer'],
    $data['address'],
    $data['gstin'],
    $data['state'],
    $data['description'],
    $data['sac'],
    $data['taxType'],
    $data['value'],
    $data['sgst'],
    $data['cgst'],
    $data['igst'],
    $data['status'],
    $data['invoiceNo']
);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Update failed."]);
}

$conn->close();
?>
