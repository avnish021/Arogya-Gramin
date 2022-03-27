<?php include 'header.php'?>
<div class="page-content">
              <div class="main-wrapper">
              <h3>User Order</h3>
  <link rel="stylesheet" href="css/table.css">
<div class="container-fluid">
 <div class="row">
 <div class="container-fluid">
    <style>
  .btn-small,.btn,.btn-info{
      padding:5px 8px;
  }

</style>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div id="overflowTest">
  <table class="styled-table">
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
        <th>Date</th>
        <th>View Address</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM `e-card` where status='conform'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['description']."</td><td>".$row['price']."</td><td>".$row['discount']."</td><td>".$row['quantity']."</td><td>".$row['charge']."</td><td>".$row['total']."</td><td>".$row['user_id']."</td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><a href='view_address.php?email=".$row['user_id']."' class='btn btn-info btn-small'>View Address</a></td></tr>";
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
</div>
<?php include 'footer.php'?>