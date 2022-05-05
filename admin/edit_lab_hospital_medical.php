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

$qry = mysqli_query( $conn, "select * from tie_up where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data
 
if(isset($_POST['save']))
{	 
    $doc_name = $_POST['doc_name'];
    $regis = $_POST['regis'];
    $mstore = $_POST['mstore'];
    $hc_name = $_POST['hc_name'];
    $phone =  $_POST['phone'];
    $email = $_POST['email'];
    $home_address = $_POST['home_address'];
    $office_address = $_POST['office_address'];
    $speci = $_POST['speci'];
    $oms = $_POST['oms'];
    //$photo = $_POST['photo'];
    $b = $_POST['b'];
    $dsd = $_POST['dsd'];
    $percent = $_POST['percent'];
    $mr_name = $_POST['mr_name'];
    $status = $_POST['status'];
    
        $edit = mysqli_query($conn,"update tie_up set doc_name='$doc_name', regis='$regis', mstore='$mstore', hc_name='$hc_name', phone='$phone', email='$email', home_address='$home_address', office_address='$office_address', speci='$speci', oms='$oms', b='$b', dsd='$dsd', percent='$percent', mr_name='$mr_name', status='$status' where id='$id'");
  
        if($edit)
        {
            echo "<script>alert('Update Successfully....!');window.location.href='edit_lab_hospital_medical.php?id=$id'</script>";
        }
        else
        {
            echo mysqli_error();
        }
	 mysqli_close($conn);
}
if(isset($_POST['save1']))
{	 

        $edit = mysqli_query($conn,"update tie_up set status='Approved' where id='$id'");
  
        if($edit)
        {
            echo "<script>alert('Approved....!');window.location.href='edit_lab_hospital_medical.php?id=$id'</script>";
        }
        else
        {
            echo mysqli_error();
        }
	 mysqli_close($conn);
}
if(isset($_POST['save2']))
{	 

        $edit = mysqli_query($conn,"update tie_up set status='not approved' where id='$id'");
  
        if($edit)
        {
            echo "<script>alert('Not Approved....!');window.location.href='edit_lab_hospital_medical.php?id=$id'</script>";
        }
        else
        {
            echo mysqli_error();
        }
	 mysqli_close($conn);
}
?>
<style>
.container2 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 20px;
  cursor: pointer;
  font-size: 15px;
}

/* Hide the default checkbox */
.container2 input {
  visibility: hidden;
  cursor: pointer;
}

/* Create a custom checkbox */
.mark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: lightgray;
}

.container2:hover input ~ .mark {
  background-color: gray;
}

.container2 input:checked ~ .mark {
  background-color: blue;
}

/* Create the mark/indicator (hidden when not checked) */
.mark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the mark when checked */
.container2 input:checked ~ .mark:after {
  display: block;
}

/* Style the mark/indicator */
.container2 .mark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  transform: rotate(45deg);
}
</style>
<div class="page-content">
              <div class="main-wrapper">
              <h3>Arogya Sathi Hospital Tie-Up Form</h3>

<div class="container-fluid">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     <input type="hidden" name="id" class="form-control" value='<?php echo $data['id'] ?>'>
        <div class="row">
          <div class="col-sm-6">
            <label>Doctor Name</label>
           
              
              <input id="uname" name="doc_name" type="text" class="form-control" value="<?php echo $data['doc_name'] ?>">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Registration No.</label>
           
              <input id="uemail" name="regis" type="text" class="form-control" value="<?php echo $data['regis'] ?>">
          <br>
          </div>
          <div class="col-sm-6">
            <label>Medical Store</label>
           
              <input id="mnumber" type="text" name="mstore" class="form-control" value="<?php echo $data['mstore'] ?>">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Hospital / Clinic Name</label>
            
              <input id="amnumber" type="text" name="hc_name" class="form-control" value="<?php echo $data['hc_name'] ?>">
            <br>
          </div>
          <div class="col-sm-6">
            <label>Contact Number*</label>
           
              <input id="amnumber" type="text" name="phone" class="form-control" value="<?php echo $data['phone'] ?>">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Email Address</label>
           
              
              <input id="amnumber" type="text" name="email" class="form-control" value="<?php echo $data['email'] ?>">
            <br>
          </div>
          <div class="col-sm-6">
            <label>Home Address</label>
            
            <textarea id="message" name="home_address" class="form-control" rows="8"><?php echo $data['home_address'] ?></textarea>
           <br>
          </div>
          <div class="col-sm-6">
            <label>Office Address <span style="font-size:10px;">(Hospital, Medical Store or Doctor operating address.)</span></label>
            
            
             
              <textarea id="message" name="office_address" class="form-control" rows="8"><?php echo $data['office_address'] ?></textarea>
          <br>
          </div>
          <div class="col-sm-6">
            <label>Specialization</label>
           
              
              <input id="amnumber" type="text" name="speci" class="form-control" value="<?php echo $data['speci'] ?>">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Other Medical Service of any Kind</label>
            
              
              <input id="amnumber" type="text" name="oms" class="form-control" value="<?php echo $data['oms'] ?>">
           <br>
          </div>
          <div class="col-sm-12">
            <label>Upload Documents / Image
            <span style="font-size:10px;">(Aadhaar, Photo, Card (Shop, Doctor and Hospital), You can upload total number of 5 document here.)</span></label>
            
              <input type="text" name="photo" value="<?php echo $data['photo'] ?>" class="form-control">
            
           <br>
          </div>
         
    
        <div class="col-sm-12">
            <label>Type Of Business</label>
           
            
          
              <input id="amnumber" type="text" name="b" class="form-control" value="<?php echo $data['b'],  $data['b1'], $data['b2'], $data['b3'], $data['b4'], $data['b5'], $data['b6'], $data['b7'], $data['b8'], $data['b9'], $data['b10'], $data['b11']  ?>">
              <br>
           
            <!-- /input-group --> 
          </div>
          <div class="col-sm-12">
            <label>Discount Service Details</label>
            <input id="amnumber" type="text" name="dsd" class="form-control" value="<?php echo $data['dsd'], $data['dsd1'], $data['dsd2'], $data['dsd3'], $data['dsd4'], $data['dsd5'], $data['dsd6'], $data['dsd7'], $data['dsd8'], $data['dsd9'], $data['dsd10'], $data['dsd11'], $data['dsd12'], $data['dsd13'], $data['dsd14'], $data['dsd15'], $data['dsd16'], $data['dsd17'], $data['dsd18'], $data['dsd19'], $data['dsd20'], $data['dsd21'], $data['dsd22'], $data['dsd23'], $data['dsd24'], $data['dsd25'], $data['dsd26'] ?>">
            <br>
        </div>
        <div class="col-sm-6">
            <label>Discount in percent</label>
           
              
              <input id="amnumber" type="text" name="percent" class="form-control" value="<?php echo $data['percent'] ?>">
          <br>
          </div>
          <div class="col-sm-6">
            <label>Name of MR / Executive</label>
            
              
              <input id="amnumber" type="text" name="mr_name" class="form-control" value="<?php echo $data['mr_name'] ?>">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Status</label>
            
              
        <input id="amnumber" type="text" name="status" class="form-control" value="<?php echo $data['status'] ?>">
          <br>
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            <input type="hidden" name="type" value="Hospital">
            
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Send</button>&nbsp;&nbsp;&nbsp;
              <button id="em_sub" class="btn btn-info" name="save1" type="submit">Approved</button>&nbsp;&nbsp;&nbsp;
              <button id="em_sub" class="btn btn-danger" name="save2" type="submit">Not Approved</button>
              <br><br>
           
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
  overflow-x: scroll;
  border: 1px solid #ccc;
}
</style>
<div class="container-fluid">
 <div class="row">
 <div class="container-fluid">
  
  <div id="overflowTest">
 <table id="example" class="display nowrap" style="width:100%;margin-top:20px;margin-bottom:20px;">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Doctor Name</th>
        <th>Registration No.</th>
        <th>Madical Store</th>
        <th>Hospital / Clinic Name</th>
        <th>Contact No.</th>
        <th>Email</th>
        <th>Home Address</th>
        <th>Offical Address</th>
        <th>Specialization</th>
        <th>Other Medical Service</th>
        <th>Documents Image</th>
        <th>Type Of Business</th>
        <th>Discount Service Details%</th>
        <th>Discount in percent</th>
        <th>Name of MR / Executive</th>
        <th>Status</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM tie_up";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['doc_name']."</td><td>".$row['regis']."</td><td>".$row['mstore']."</td><td>".$row['hc_name']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['home_address']."</td><td>".$row['office_address']."</td><td>".$row['speci']."</td><td>".$row['oms']."</td><td><img src='../assets/images/post/".$row['photo']."' alt='".$row['photo']."' style='hight:45px;width:45px;'></td><td>".$row['b']." ".$row['b1']." ".$row['b2']." ".$row['b3']." ".$row['b4']." ".$row['b5']." ".$row['b6']." ".$row['b7']." ".$row['b8']." ".$row['b9']." ".$row['b10']." ".$row['b11']."</td><td>".$row['dsd']." ".$row['dsd1']." ".$row['dsd2']." ".$row['dsd3']." ".$row['dsd4']." ".$row['dsd5']." ".$row['dsd6']." ".$row['dsd7']." ".$row['dsd8']." ".$row['dsd9']." ".$row['dsd10']." ".$row['dsd11']." ".$row['dsd12']." ".$row['dsd13']." ".$row['dsd14']." ".$row['dsd15']." ".$row['dsd16']." ".$row['dsd17']." ".$row['dsd18']." ".$row['dsd19']." ".$row['dsd20']." ".$row['dsd21']." ".$row['dsd22']." ".$row['dsd23']." ".$row['dsd24']." ".$row['dsd25']." ".$row['dsd26']."</td><td>".$row['percent']."</td><td>".$row['mr_name']."</td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><a href='edit_lab_hospital_medical.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></td><td style=''><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save' class='btn btn-danger' value='Delete'/></form></center></td></tr>";
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
 