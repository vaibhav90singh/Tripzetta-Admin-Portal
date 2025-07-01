<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "invoice_db";

$conn = new mysqli("localhost", "root", "", "invoice_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$invoiceNo = $_POST['invoiceNo'];
$date = $_POST['date'];
$place = $_POST['place'];
$customer = $_POST['customer'];
$address = $_POST['address'];
$gstin = $_POST['gstin'];
$state = $_POST['state'];
$service = $_POST['service'];
$sac = $_POST['sac'];
$taxType = $_POST['taxType'];
$value = $_POST['value'];
$sgst = $_POST['sgst'];
$cgst = $_POST['cgst'];
$igst = $_POST['igst'];

$sql = "INSERT INTO invoices (invoiceNo, date, place, customer, address, gstin, state, service, sac, taxType, value, sgst, cgst, igst)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssddd", $invoiceNo, $date, $place, $customer, $address, $gstin, $state, $service, $sac, $taxType, $value, $sgst, $cgst, $igst);

if ($stmt->execute()) {
  header("Location: success.html");
exit();

} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
