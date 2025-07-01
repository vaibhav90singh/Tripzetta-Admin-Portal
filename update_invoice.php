<?php
header('Content-Type: application/json');

// Database config
// $host = 'localhost';
// $user = 'root';
// $password = ''; // Update if needed
// $dbname = 'invoice_db'; // Update this to your DB name

$conn = new mysqli("localhost", "root", "", "invoice_db");
if ($conn->connect_error) {
    echo json_encode(['error' => 'Connection failed: ' . $conn->connect_error]);
    exit;
}

// Sanitize inputs
function clean($data, $conn) {
    return mysqli_real_escape_string($conn, trim($data));
}

$invoiceNo = clean($_POST['invoiceNo'], $conn);
$date = clean($_POST['date'], $conn);
$place = clean($_POST['place'], $conn);
$customer = clean($_POST['customer'], $conn);
$address = clean($_POST['address'], $conn);
$gstin = clean($_POST['gstin'], $conn);
$state = clean($_POST['state'], $conn);
$status = clean($_POST['status'], $conn);
$service = clean($_POST['service'], $conn);
$sac = clean($_POST['sac'], $conn);
$taxType = clean($_POST['taxType'], $conn);
$value = floatval($_POST['value']);
$sgst = floatval($_POST['sgst']);
$cgst = floatval($_POST['cgst']);
$igst = floatval($_POST['igst']);

// Update query
$sql = "UPDATE invoices SET 
  date='$date',
  place='$place',
  customer='$customer',
  address='$address',
  gstin='$gstin',
  state='$state',
  status='$status',
  service='$service',
  sac='$sac',
  taxType='$taxType',
  value=$value,
  sgst=$sgst,
  cgst=$cgst,
  igst=$igst
  WHERE invoiceNo='$invoiceNo'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['error' => 'Update failed: ' . $conn->error]);
}

$conn->close();
?>
