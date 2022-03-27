<?php
include 'connect.php';
$user_id = $_GET['user_id'];
$sql = "UPDATE `e-card` SET status='conform' WHERE user_id='$user_id'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Your Order Successful..!');window.location.href='products.php';</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>