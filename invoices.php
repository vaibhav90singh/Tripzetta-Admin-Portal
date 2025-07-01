<?php
$conn = new mysqli("localhost", "root", "", "invoice_db");
$result = $conn->query("SELECT * FROM invoices");

while ($row = $result->fetch_assoc()) {
  $json = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
  echo "
    <tr>
    <td>{$row['id']}</td>
      <td>{$row['invoiceNo']}</td>
      <td>{$row['date']}</td>
      <td>₹{$row['place']}</td>
      <td>
        <button onclick='openWhatsappPopupFromRow(this)' data-invoice='$json'>
          Send WhatsApp
        </button>
      </td>
    </tr>
  ";
}
?>
