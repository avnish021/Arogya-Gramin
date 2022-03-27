<?php
include 'connect.php';
if(isset($_POST['save'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM tie_up WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href='tie_up_form.php'</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
}
if(isset($_POST['save1'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM dpo_bpo WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href='dpo_bpo_emp.php'</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
}
if(isset($_POST['save2'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM add_product WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href='product_add.php'</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
}
if(isset($_POST['save3'])){
  $id = $_POST['id'];
  $sql = "DELETE FROM cpr WHERE id='$id'";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='cpr.php'</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}
if(isset($_POST['save4'])){
  $id = $_POST['id'];
  $sql = "UPDATE usertable SET status='False' WHERE id='$id'";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='user_login.php'</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}
if(isset($_POST['save5'])){
  $id = $_POST['id'];
  $sql = "UPDATE aorgya_mitra SET status='approved' WHERE id='$id'";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='show_arogya_mitra.php'</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}
if(isset($_POST['save6'])){
  $id = $_POST['id'];
  $sql = "DELETE FROM volunteer WHERE id='$id'";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='volunteer.php'</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}
// sql to delete a record


$conn->close();
?>