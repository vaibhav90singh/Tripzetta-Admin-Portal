<?php
$invoiceNo = $_POST['invoiceNo'];

$conn = new mysqli("localhost", "root", "nehruplace@", "invoice_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("DELETE FROM invoices WHERE invoiceNo = ?");
$stmt->bind_param("s", $invoiceNo);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conn->close();
?>
