<?php include 'header.php'?>
<?php
include 'connect.php';
$user_id = $_GET['email'];

if(isset($_POST['save3'])){
$id = $_POST['id'];
$rdt = $_POST['rdt'];
$dld = $_POST['dld'];
$sql = "UPDATE `e-card` SET admin_status='Accept', color='blue', rdt='$rdt', dld='$dld' WHERE user_id='$user_id'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Your Order Successful..!');window.location.href='view_address.php?email=$user_id';</script>";
} else {
  echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>
<div class="page-content">
              <div class="main-wrapper">
              <h3>View Address And Accept Order</h3>

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
<div class="container-fluid">
 <div class="row" style='margin-top:40px;'>
 <div class="container-fluid">
 <?php
include 'connect.php';
$email = $_GET['email'];
$sql = "SELECT * FROM `usertable` where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'><div class='col-sm-3'><b>Name :-</b> ".$row['name']."</div><div class='col-sm-3'><b>Email :-</b> ".$row['email']."</div><div class='col-sm-3'><b>Address : -</b> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['city']."&nbsp;&nbsp;".$row['full_address']."</div><div class='col-sm-3'><b>Contact Number:-</b> ".$row['mobile'].", ".$row['alt_mobile']."</div></div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<br>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div id="overflowTest">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Product Name</th>
        <th>description</th>
        <th>price</th>
        <th>discount</th>
        <th>Quantity</th>
        <th>Delivery Charge</th>
        <th>Total Price</th>
        <th>Email</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';
$user_id = $_GET['email'];
$sql = "SELECT * FROM `e-card` where status='conform' and user_id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr style='background:".$row['color'].";color:white'><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['description']."</td><td>".$row['price']."</td><td>".$row['discount']."</td><td>".$row['quantity']."</td><td>".$row['charge']."</td><td>".$row['total']."</td><td>".$row['user_id']."</td><td>".$row['status']."</td></tr>";
    }
    echo "<form action='' method='post'><tr><th><label>Delivery Total Days</label>: <input type='text' name='rdt' value='".$row['rdt']."'><input type='hidden' name='id' value='".$row['id']."'></th><th>Delivery Last Date :<input type='date' name='dld' ></th><th><input type='submit' name='save3' class='btn btn-success' value='Accept Order'></th></tr><form>";
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
</div>
<?php include 'footer.php'?>