<?php include 'header.php'?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string

$qry = mysqli_query( $conn, "select * from dpo_bpo where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['save']))
{	 
    $id = $_POST['id'];
    $id_card = $_POST['id_card'];
    $post = $_POST['post'];
    $distric = $_POST['distric'];
    $block = $_POST['block'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $raddress = $_POST['raddress'];
    $office_address = $_POST['office_address'];
    $status = $_POST['status'];
   
    try {
        $edit = mysqli_query($conn,"update dpo_bpo set id_card='$id_card', post='$post', distric='$distric', block='$block', name='$name', fname='$fname', phone='$phone', email='$email', raddress='$raddress', office_address='$office_address', status='$status' where id='$id'");
  
        if($edit)
        {
         echo "<script>alert('Your Dpo_bpo Upload successfully !..');window.location.href='edit_dpo_bpo.php?id=$id'</script>";
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
        $edit = mysqli_query($conn,"update dpo_bpo set status='True' where id='$id'");
  
        if($edit)
        {
         echo "<script>alert('True !..');window.location.href='edit_dpo_bpo.php?id=$id'</script>";
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
        $edit = mysqli_query($conn,"update dpo_bpo set status='False' where id='$id'");
  
        if($edit)
        {
         echo "<script>alert('False !..');window.location.href='edit_dpo_bpo.php?id=$id'</script>";
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
              <h3>Employee Details</h3><hr><br>

<div class="container-fluid">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     <input type="hidden" name="id" class="form-control" value='<?php echo $data['id'] ?>'>
        <div class="row">
          <div class="col-sm-6">
          <label>ID card number <span style="font-size:13px">(If issued)</span>
</label>
           
              
              <input id="uname" name="id_card" type="text" class="form-control"value='<?php echo $data['id_card'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
          <label>Your Service Type <span style="font-size:13px">(Post)</span></label>
          <input id="uname" name="post" type="text" class="form-control" value='<?php echo $data['post'] ?>'>
          <br>
          </div>
          <div class="col-sm-6">
          <label>Name of District</label>
          <input id="uname" type="text" name="distric" class="form-control" value='<?php echo $data['distric'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
          <label>Block</label>
            
              <input id="amnumber" type="text" name="block" class="form-control" value='<?php echo $data['block'] ?>'>
            <br>
          </div>
          <div class="col-sm-6">
            <label>Name</label>
            <input id="amnumber" type="text" name="name" class="form-control" value='<?php echo $data['name'] ?>'>
           <br>
          </div>
          <div class="col-sm-6">
            <label>Father Name</label>
            <input id="amnumber" type="text" name="fname" class="form-control" value='<?php echo $data['fname'] ?>'>
           <br>
          </div>
          <div class="col-sm-6">
            <label>Phone No.</label>
            <input id="amnumber" type="text" name="phone" class="form-control" value='<?php echo $data['phone'] ?>'>
           <br>
          </div>
          <div class="col-sm-6">
            <label>Email</label>
            <input id="amnumber" type="text" name="email" class="form-control" value='<?php echo $data['email'] ?>'>
           <br>
          </div>
          <div class="col-sm-6">
          <label>Residence Address</label>
            <textarea id="message" name="raddress" class="form-control" rows="8"><?php echo $data['raddress'] ?></textarea>
           <br>
          </div>
          <div class="col-sm-6">
          <label>Office Address</label>
            <textarea id="message" name="office_address" class="form-control" rows="8"><?php echo $data['office_address'] ?></textarea>
           <br>
          </div>
          <div class="col-sm-6">
            <label>Status</label>
            <input id="amnumber" type="text" name="status" class="form-control" value='<?php echo $data['status'] ?>'>
           <br>
         
            
            
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            <div class="col-sm-12">
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Send</button> &nbsp;&nbsp;&nbsp;
              <button id="em_sub" class="btn btn-info" name="save1" type="submit">Status True</button>&nbsp;&nbsp;&nbsp;
              <button id="em_sub" class="btn btn-danger" name="save2" type="submit">Status False</button>
              <br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>



    
 
  </form>

</div>
<style>
#overflowTest {
  
  color: black;
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
 
  <br>
  <div id="overflowTest">
   <table id="example" class="display nowrap" style="width:100%;margin-top:20px;margin-bottom:20px;">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>ID Card</th>
        <th>Post</th>
        <th>District</th>
        <th>Block</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Residence Address</th>
        <th>Office Address</th>
        <th>Photo</th>
        <th>Adhar</th>
        <th>Pan</th>
        <th>Agreement Signed copy</th>
        <th>Passbook</th>
        <th>ID Photo</th>
        <th>Status</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM dpo_bpo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['id_card']."</td><td>".$row['post']."</td><td>".$row['distric']."</td><td>".$row['block']."</td><td>".$row['name']."</td><td>".$row['fname']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['raddress']."</td><td>".$row['office_address']."</td><td><img src='../assets/images/bpo_dpo/".$row['photo']."' alt='' style='hight:60px;width:60px;'></td><td><img src='../assets/images/bpo_dpo/".$row['adhar']."' alt='' style='hight:60px;width:60px;'></td><td><img src='../assets/images/bpo_dpo/".$row['pan']."' alt='' style='hight:60px;width:60px;'></td><td><img src='../assets/images/bpo_dpo/".$row['agreement']."' alt='' style='hight:60px;width:60px;'><td><img src='../assets/images/bpo_dpo/".$row['passbook']."' alt='' style='hight:60px;width:60px;'></td><td><img src='../assets/images/bpo_dpo/".$row['id_photo']."' alt='' style='hight:60px;width:60px;'></td></td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><a href='edit_dpo_bpo.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></td><td style='text-aling:center;'><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save1' class='btn btn-danger' value='Delete'/></form></center></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

     
    </tbody>
  </tfoot>
   <tr>
        <th>Sr.No.</th>
        
        <th>Hospital / Clinic Name</th>
        <th>Registration No.</th>
        
        
        
        
        <th>Status</th>
        
        <th>Edit</th>
       
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
 