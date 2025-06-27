<?php
header('Content-Type: application/json');

$invoiceNo = $_GET['invoiceNo'] ?? '';

if (!$invoiceNo) {
  echo json_encode(['error' => 'No invoice number provided']);
  exit;
}

$mysqli = new mysqli("localhost", "root", "", "invoice_db");

if ($mysqli->connect_error) {
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

$stmt = $mysqli->prepare("SELECT * FROM invoices WHERE invoiceNo = ?");
$stmt->bind_param("s", $invoiceNo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
  echo json_encode(['error' => 'Invoice not found']);
  exit;
}

$row = $result->fetch_assoc();
echo json_encode($row);
?>
