<?php include 'header.php'?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string

$qry = mysqli_query( $conn, "select * from cpr where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data
if(isset($_POST['save']))
{	 
    $id = $_POST['id'];
    $qunt = $_POST['qunt'];
    $rate = $_POST['rate'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $placed = $_POST['placed'];
    $status = $_POST['status'];
    try {
        $edit = mysqli_query($conn,"update cpr set qunt='$qunt', rate='$rate', price='$price', discount='$discount', placed='$placed', status='$status' where id='$id'");
  
        if($edit){
         echo "<script>alert('Your CPR Transaction Upload successfully !..');window.location.href='edit_cpr.php?id=$id'</script>";
		//header('Location: ');
	 }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
if(isset($_POST['save1']))
{	 
 
    try {
        $edit = mysqli_query($conn,"update cpr set status='False' where id='$id'");
  
        if($edit){
         echo "<script>alert('False !..');window.location.href='edit_cpr.php?id=$id'</script>";
		//header('Location: ');
	 }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
if(isset($_POST['save2']))
{	 
 
    try {
        $edit = mysqli_query($conn,"update cpr set status='True' where id='$id'");
  
        if($edit){
         echo "<script>alert('True !..');window.location.href='edit_cpr.php?id=$id'</script>";
		//header('Location: ');
	 }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>

</style>
<div class="page-content">
              <div class="main-wrapper">
              <h3>CBR Transaction</h3>

<div class="container-fluid">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     <input type="hidden" name="id" class="form-control" value='<?php echo $data['id'] ?>'>
        <div class="row">
          <div class="col-sm-6">
            <label>Quantity</label>
           
              
              <input id="uname" name="qunt" type="text" class="form-control" value='<?php echo $data['qunt'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Rate/unit</label>
           
              <input id="uemail" name="rate" type="text" class="form-control" value='<?php echo $data['rate'] ?>'>
          <br>
          </div>
          <div class="col-sm-6">
            <label>Pricing</label>
           
              <input id="mnumber" type="text" name="price" class="form-control" value='<?php echo $data['price'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Discount</label>
            
              <input id="amnumber" type="text" name="discount" class="form-control" value='<?php echo $data['discount'] ?>'>
            <br>
          </div>
          <div class="col-sm-6">
            <label>Status</label>
            
            <input id="amnumber" type="text" name="status" class="form-control" value='<?php echo $data['status'] ?>'>
            <br>
          </div>
          <div class="col-sm-6">
            <label>Order Placed</label>
           <textarea name="placed" class="form-control"><?php echo $data['placed'] ?></textarea>
              
           <br>
        
            
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
           
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Make Payment</button>&nbsp;&nbsp;&nbsp;
               <button id="em_sub" class="btn btn-info" name="save2" type="submit">Status True</button>&nbsp;&nbsp;&nbsp;
                <button id="em_sub" class="btn btn-danger" name="save1" type="submit">Status False</button>
              <br><br>

           
          </div>
        </div>
      </div>
    </div>



    
 
  </form>
</div>
<style>
#overflow {
  
  
  padding: 15px;
  width: 100%;
  
  overflow-x: scroll;
  border: 1px solid #ccc;
}
</style>
<div class="container-fluid">
 <div class="row">
 <div id="overflow">
 
 
   <table id="example" class="display nowrap" style="width:100%;margin-top:20px;margin-bottom:20px;">
                  <thead>
                  <tr>
        <th>Sr.No.</th>
        <th>Quantity</th>
        <th>Rate/unit</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Order Placed</th>
        <th>status</th>
        <th>Date</th>
       
        <th>Edit</th>
        <th>Delete</th>
      </tr>
        </thead>
                      <tbody>
                                     
                      <?php
include 'connect.php';
$user_type = $_SESSION['v_email'];
$sql = "SELECT * FROM cpr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['qunt']."</td><td>".$row['rate']."</td><td>Rs".$row['price']."</td><td>".$row['discount']."%</td><td>".$row['placed']."</td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><center><a href='edit_cpr.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></a></center></td><td><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save3' class='btn btn-danger' value='Delete'/></form></center></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
                                  
        </tbody>
        <tfoot>
        <th>Sr.No.</th>
        <th>Quantity</th>
        <th>Rate/unit</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Order Placed</th>
        <th>status</th>
        <th>Date</th>
        <th>Edit</th>
         <th>Delete</th>
                                        
          </tr>
           </tfoot>
        </table>
       
 </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
    
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    
    
 </div>
</div>


 </div>
</div>
</div>
</div>
<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  <a href="https://arvisaitsolution.com/" target="_blank">Arogyagramin</a> from Arvisa IT Solutions. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 

