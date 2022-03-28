<?php include 'header.php'?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include 'connect.php';
 
 // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query( $conn, "select * from apply_card where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['save'])) // when click on Update button
{
    $id = $_POST['id'];
    $application_no = $_POST['application_no'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $gander = $_POST['gander'];
    $dob = $_POST['dob'];
    $block = $_POST['block'];
    $distric = $_POST['distric'];
    $adhar = $_POST['adhar'];
    $type = $_POST['type'];
    $adhar_photo = $_POST['adhar_photo'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $full_address = $_POST['full_address'];
    $payment_screen = $_POST['payment_screen'];
    $status = $_POST['status'];
    
	
    $edit = mysqli_query($conn,"update apply_card set application_no='$application_no', name='$name', fname='$fname', gander='$gander', dob='$dob', block='$block', distric='$distric', adhar='$adhar', type='$type', adhar_photo='$adhar_photo', phone='$phone', email='$email', full_address='$full_address', payment_screen='$payment_screen', status='$status' where id='$id'");
	
    if($edit)
    {
        echo "<script>alert('Update Successfully....!');window.location.hraf='check_health_card.php'</script>";
    }
    else
    {
        echo mysqli_error();
    }
}
if(isset($_POST['save1'])){
        $id = $_POST['id'];
        $edit = mysqli_query($conn,"update apply_card set status='True' where id='$id'");
	
    if($edit)
    {
        echo "<script>alert('Verifed Successfully....!');window.location.hraf='check_health_card.php'</script>";
    }
    else
    {
        echo mysqli_error();
    }
}
    if(isset($_POST['save2'])){
        $id = $_POST['id'];
        $edit = mysqli_query($conn,"update apply_card set status='False' where id='$id'");
	
    if($edit)
    {
        echo "<script>alert('Not Verifed Successfully....!');window.location.hraf='check_health_card.php'</script>";
    }
    else
    {
        echo mysqli_error();
    }
}    	
    mysqli_close($conn);

?>
<div class="page-content">
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row" stlye="margin-top:30px;">
              <form action="" method="post" style="width:100%">
              <table style="width:100%;broder-radius:10px;" border='2'>
                    <tr><td><h5><b>Application Number</b></h5></td><td>&nbsp;&nbsp;
                    <input type="hidden" name="id" class="form-control" value='<?php echo $data['id'] ?>'>
                        <input type="text" name="application_no" class="form-control" value='<?php echo $data['application_no'] ?>'><br></td></tr>
                    <tr><td><h5><b>Name</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="name" class="form-control" value='<?php echo $data['name'] ?>'><br></td></tr>
                    <tr><td><h5><b>Father Name</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="fname" class="form-control" value='<?php echo $data['fname'] ?>'><br></td></tr>
                    <tr><td><h5><b>Gander</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="gander" class="form-control" value='<?php echo $data['gander'] ?>'><br></td></tr>
                    <tr><td><h5><b>Date of Birth</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="dob" class="form-control" value='<?php echo $data['dob'] ?>'><br></td></tr>
                    <tr><td><h5><b>Block</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="block" class="form-control" value='<?php echo $data['block'] ?>'><br></td></tr>
                    <tr><td><h5><b>District</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="distric" class="form-control" value='<?php echo $data['distric'] ?>'><br></td></tr>
                    <tr><td><h5><b>Adhar Number</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="adhar" class="form-control" value='<?php echo $data['adhar'] ?>'><br></td></tr>
                    <tr><td><h5><b>Type</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="type" class="form-control" value='<?php echo $data['type'] ?>'><br></td></tr>
                    <tr><td><h5><b>Adhar Photo</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="adhar_photo" class="form-control" value='<?php echo $data['adhar_photo'] ?>'><br></td></tr>
                    <tr><td><h5><b>Phone</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="phone" class="form-control" value='<?php echo $data['phone'] ?>'><br></td></tr>
                    <tr><td><h5><b>Email</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="email" class="form-control" value='<?php echo $data['email'] ?>'><br></td></tr>
                    <tr><td><h5><b>Full Adress</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="full_address" class="form-control" value='<?php echo $data['full_address'] ?>'><br></td></tr>
                    <tr><td><h5><b>Status</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="status" class="form-control" value='<?php echo $data['status'] ?>'><br></td></tr>
                    <tr><td><h5><b>Payment ScreenShots</b></h5></td><td>&nbsp;&nbsp;<input type="hidden" name="payment_screen" class="form-control" value='<?php echo $data['payment_screen'] ?>'><?php echo "<img src='../assets/images/arogya_mitra/payment_screen/".$data['payment_screen']."' style='height:200px;width:300px'>" ?><br></td></tr>
                    
                </table>
                <center><br><input type="submit" Value="Update" name="save" class="btn btn-info">&nbsp;&nbsp;<input type="submit" Value="Verifed" name="save1" class="btn btn-success">&nbsp;&nbsp;<input type="submit" Value="Delete" name="save2" class="btn btn-danger">&nbsp;&nbsp;<a href="View_health_card.php?id=<?php echo $data['id'] ?>" class='btn btn-info'><i class="fa fa-eye"></i></a></center>
              </form>
               
            </div>
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
   <div class="container-fluid" style="margin-top:30px;">
 <div class="row">
 <div class="container-fluid">
  
 
  <div id="overflowTest">
  <table id="example" class="display nowrap" style="width:100%;margin-top:20px;margin-bottom:20px;">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Registration Number</th>
        <th>Distric</th>
        <th>Block</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Date Of Birth</th>
        <th>Gander</th>
        <th>Application Type</th>
        <th>Aadhar card number</th>
        <th>Aadhar card Image</th>
        <th>Phone number</th>
        <th>E-mail</th>
        <th>complete address</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM apply_card";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['application_no']."</td><td>".$row['distric']."</td><td>".$row['block']."</td><td>".$row['name']."</td><td>".$row['fname']."</td><td>".$row['dob']."</td><td>".$row['gander']."</td><td>".$row['type']."</td><td>".$row['adhar']."</td><td><img src='../assets/images/post/".$row['adhar_photo']."' alt='".$row['adhar_photo']."' style='hight:45px;width:45px;'></td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['full_address']."</td><td>".$row['status']."</td><td style=''><center><a href='check_health_card.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></a></center></td><td style=''><center><a href='' class='btn btn-danger'><i class='fa fa-trash'></i></a></center></td></tr>";
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
        <th>Registration Number</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Gander</th>
        <th>Application Type</th>
        <th>Aadhar card number</th>
        <th>Aadhar card Image</th>
        <th>Phone number</th>
        <th>E-mail</th>
        <th>complete address</th>
        <th>Status</th>
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
 