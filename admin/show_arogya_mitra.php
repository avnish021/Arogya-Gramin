<?php include 'header.php'?>
<div class="page-content">
              <div class="main-wrapper">
              <h3>Arogya Mitra...</h3><hr><br><br>

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
 <div class="row">
 <div class="container-fluid">
  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div id="overflowTest">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Date of Birth</th>
        <th>phone</th>
        <th>Education</th>
        <th>Alternate Number</th>
        <th>Email</th>
        <th>Full Address</th>
        <th>Panchayat</th>
        <th>Block</th>
        <th>District</th>
        <th>Pin</th>
        <th>State</th>
        <th>Photo</th>
        <th>Id Crad</th>
        <th>Payment Screenshot</th>
        <th>Status</th>
        <th>Update</th>
       
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM aorgya_mitra";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['fname']."</td><td>".$row['dob']."</td><td>".$row['phone']."</td><td>".$row['education']."</td><td>".$row['alt_number']."</td><td>".$row['email']."</td><td>".$row['full_address']."</td><td>".$row['panchayat']."</td><td>".$row['block']."</td><td>".$row['distric']."</td><td>".$row['pin']."</td><td>".$row['state']."</td><td><img src='../assets/images/arogya_mitra/user_photo/".$row['photo']."' alt='' style='hight:45px;width:45px;'></td><td><img src='../assets/images/arogya_mitra/user_id/".$row['id_card']."' alt='' style='hight:45px;width:45px;'></td><td><img src='../assets/images/arogya_mitra/payment_screen/".$row['payment_screen']."' alt='' style='hight:45px;width:45px;'><td>".$row['status']."</td><td style=''><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save5' class='btn btn-danger' value='Update'/></form></center></td></tr>";
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
