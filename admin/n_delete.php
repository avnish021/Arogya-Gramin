<?php
include 'connect.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM notification WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href='notification.php'</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }


// sql to delete a record


$conn->close();
?>