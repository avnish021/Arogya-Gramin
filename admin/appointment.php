<?php include 'header.php'?>

<?php 
 include 'connect.php';
 if(isset($_POST['save'])){
    $id = $_POST['id'];
    $time = $_POST['time'];
    $sql = "UPDATE book_appointment SET status='approved', color='green', time='$time' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href='appointment.php'</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
  }
  if(isset($_POST['save1'])){
    $id = $_POST['id'];
    $time = $_POST['time'];
    $sql = "UPDATE book_appointment SET status='False', color='red' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href='appointment.php'</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
  }
?>
<div class="page-content">
    <div class="main-wrapper">
    <style>
#overflowTest {
  
  color: white;
  padding: 15px;
  width: 100%;
  height: auto;
  overflow-x: scroll;
  border: 1px solid #ccc;
}
</style>
        <br>    <div class="container-fluid">
                <div class="row">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
  </br>
  <div id="overflowTest">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Select Department</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Date</th>
        <th>Status</th>
        <th>Disable</th>
        <th>Verifed</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM book_appointment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['select_dp']."</td><td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['rdt']."</td><td><button style='background:".$row['color'].";padding:13px;border-radius:10px;color:white'>".$row['status']."</button></td><td><center><form method='post' action=''><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save1' class='btn btn-danger' value='Disable'/></form></center></td><td><center><form method='post' action=''><input type='hidden' name='id' value='".$row['id']."'><input type='time' name='time' value='".$row['time']."'><input type='submit' name='save' class='btn btn-success' value='Verified'/></form></center></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

     
    </tbody>
  </table>
  </div>
                </div>
            </div>
    </div>
</div>
<?php include 'footer.php'?>