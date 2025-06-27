<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "tripzetta_db");

if ($conn->connect_error) {
  echo json_encode(["success" => false, "error" => "DB connection failed"]);
  exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin_users WHERE email=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  echo json_encode(["success" => true]);
} else {
  echo json_encode(["success" => false]);
}
?>
