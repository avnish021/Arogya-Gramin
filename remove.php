<?php
include 'connect.php';
session_start();
    $id = $_GET['id'];
    $sql = "DELETE FROM `e-card` WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href='cart.php'</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }

?>