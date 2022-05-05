<?php include 'header.php'?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include 'connect.php';
 
if(isset($_POST['save']))
{	 
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];   
    $folder = "../assets/images/post/".$filename;
    move_uploaded_file($tempname, $folder);
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
    $b1 = $_POST['b1'];
    $b2 = $_POST['b2'];
    $b3 = $_POST['b3'];
    $b4 = $_POST['b4'];
    $b5 = $_POST['b5'];
    $b6 = $_POST['b6'];
    $b7 = $_POST['b7'];
    $b8 = $_POST['b8'];
    $b9 = $_POST['b9'];
    $b10 = $_POST['b10'];
    $b11 = $_POST['b11'];
    $dsd = $_POST['dsd'];
    $dsd1 = $_POST['dsd1'];
    $dsd2 = $_POST['dsd2'];
    $dsd3 = $_POST['dsd3'];
    $dsd4 = $_POST['dsd4'];
    $dsd5 = $_POST['dsd5'];
    $dsd6 = $_POST['dsd6'];
    $dsd7 = $_POST['dsd7'];
    $dsd8 = $_POST['dsd8'];
    $dsd9 = $_POST['dsd9'];
    $dsd10 = $_POST['dsd10'];
    $dsd11 = $_POST['dsd11'];
    $dsd12 = $_POST['dsd12'];
    $dsd13 = $_POST['dsd13'];
    $dsd14 = $_POST['dsd14'];
    $dsd15 = $_POST['dsd15'];
    $dsd16 = $_POST['dsd16'];
    $dsd17 = $_POST['dsd17'];
    $dsd18 = $_POST['dsd18'];
    $dsd19 = $_POST['dsd19'];
    $dsd20 = $_POST['dsd20'];
    $dsd21 = $_POST['dsd21'];
    $dsd22 = $_POST['dsd22'];
    $dsd23 = $_POST['dsd23'];
    $dsd24 = $_POST['dsd24'];
    $dsd25 = $_POST['dsd25'];
    $dsd26 = $_POST['dsd26'];
    $percent = $_POST['percent'];
    $mr_name = $_POST['mr_name'];
    $rdt = $_POST['rdt'];
    
    try {
	 $sql = "INSERT INTO `tie_up` (`doc_name`, `regis`, `mstore`, `hc_name`, `phone`, `email`, `home_address`, `office_address`, `speci`, `oms`, `photo`, `b`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `dsd`, `dsd1`, `dsd2`, `dsd3`, `dsd4`, `dsd5`, `dsd6`, `dsd7`, `dsd8`, `dsd9`, `dsd10`, `dsd11`, `dsd12`, `dsd13`, `dsd14`, `dsd15`, `dsd16`, `dsd17`, `dsd18`, `dsd19`, `dsd20`, `dsd21`, `dsd22`, `dsd23`, `dsd24`, `dsd25`, `dsd26`, `percent`, `mr_name`, `status`, `rdt`, `type`) VALUES ('$doc_name', '$regis', '$mstore', '$hc_name', '$phone', '$email', '$home_address', '$office_address', '$speci', '$oms', '$filename', '$b', '$b1', '$b2', '$b3', '$b4', '$b5', '$b6', '$b7', '$b8', '$b9', '$b10', '$b11', '$dsd', '$dsd1', '$dsd2', '$dsd3', '$dsd4', '$dsd5', '$dsd6', '$dsd7', '$dsd8', '$dsd9', '$dsd10', '$dsd11', '$dsd12', '$dsd13', '$dsd14', '$dsd15', '$dsd16', '$dsd17', '$dsd18', '$dsd19', '$dsd20', '$dsd21', '$dsd22', '$dsd23', '$dsd24', '$dsd25', '$dsd26', '$percent', '$mr_name', 'not approved', '$rdt', 'Hospital')";
  
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your Appointment successfully insert!');window.location.href='tie_up_form.php'</script>";
		//header('Location: ');
	 }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
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
     
        <div class="row">
          <div class="col-sm-6">
            <label>Doctor Name</label>
           
              
              <input id="uname" name="doc_name" type="text" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Registration No.</label>
           
              <input id="uemail" name="regis" type="text" class="form-control" placeholder="Your answer">
          <br>
          </div>
          <div class="col-sm-6">
            <label>Medical Store</label>
           
              <input id="mnumber" type="text" name="mstore" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Hospital / Clinic Name</label>
            
              <input id="amnumber" type="text" name="hc_name" class="form-control" placeholder="Your answer">
            <br>
          </div>
          <div class="col-sm-6">
            <label>Contact Number*</label>
           
              <input id="amnumber" type="text" name="phone" class="form-control"  placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Email Address</label>
           
              
              <input id="amnumber" type="text" name="email" class="form-control" placeholder="Your answer">
            <br>
          </div>
          <div class="col-sm-6">
            <label>Home Address</label>
            
            <textarea id="message" name="home_address" class="form-control" rows="8"></textarea>
           <br>
          </div>
          <div class="col-sm-6">
            <label>Office Address <span style="font-size:10px;">(Hospital, Medical Store or Doctor operating address.)</span></label>
            
            
             
              <textarea id="message" name="office_address" class="form-control" rows="8"></textarea>
          <br>
          </div>
          <div class="col-sm-6">
            <label>Specialization</label>
           
              
              <input id="amnumber" type="text" name="speci" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Other Medical Service of any Kind</label>
            
              
              <input id="amnumber" type="text" name="oms" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-12">
            <label>Upload Documents / Image
            <span style="font-size:10px;">(Aadhaar, Photo, Card (Shop, Doctor and Hospital), You can upload total number of 5 document here.)</span></label>
            
              
              <input id="amnumber" type="file" name="photo" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
           <br>
          </div>
         
    
        <div class="col-sm-12">
            <label>Type Of Business</label>
            <hr>
            
            <label class="container2">
                <input type="checkbox" name="b" value="Hospital">Hospital
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b1" value="Clinic">Clinic
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b2" value="Sonography Clinic">Sonography Clinic
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b3" value="Medical Store">Medical Store
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b4" value="Diagnostic Center">Diagnostic Center
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b5" value="Pathology Lab">Pathology Lab
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b6" value="Ambulance Service">Ambulance Service
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b7" value="Sonography Clinic">Sonography Clinic
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b8" value="Blood Bank">Blood Bank
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b9" value="Dental Clinic">Dental Clinic
                <span class="mark"></span>
            </label><br>
            <label class="container2">
                <input type="checkbox" name="b10" value="Eye Clinic">Eye Clinic
                <span class="mark"></span>
            </label><br><br>
        </div>
          <div class="col-sm-12">
            <label>Other Type Of Business Name</label>
          
              <input id="amnumber" type="text" name="b11" class="form-control" placeholder="Your answer">
              <br>
           
            <!-- /input-group --> 
          </div>
          <div class="col-sm-12">
            <label>Discount Service Details%</label>
            <hr>
            
            <label class="container2">
                <input type="checkbox" name="dsd" value="OPD">O.P.D
                <span class="mark"></span>
            </label><br>
            <label class="container2">Advice Fee
                <input type="checkbox" name="dsd1" value="Advice Fee">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Operation / Surgery
                <input type="checkbox" name="dsd2" value="Operation / Surgery">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Sonography
                <input type="checkbox" name="dsd3" value="Sonography">
                <span class="mark"></span>
            </label><br>
            <label class="container2">All Tests / Tests X-ray ECG Ultrasound
                <input type="checkbox" name="dsd4" value="All Tests / Tests X-ray ECG Ultrasound">
                <span class="mark"></span>
            </label><br>
            <label class="container2">I.P.D / I.C.U. / Operating
                <input type="checkbox" name="dsd5" value="I P D / I C U / Operating">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Dental Products Gold Payment, Root Canal Treatment
                <input type="checkbox" name="dsd6" value="Dental Products Gold Payment, Root Canal Treatment">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Allopathic / Ayurvedic / Generic / Medicines And Other Medicines
                <input type="checkbox" name="dsd7" value="Allopathic / Ayurvedic / Generic / Medicines And Other Medicines">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Surgical Literature
                <input type="checkbox" name="dsd8" value="Surgical Literature">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Treatment Of Panchromatic
                <input type="checkbox" name="dsd9" value="Treatment Of Panchromatic">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Angioplasty
                <input type="checkbox" name="dsd10" value="Angioplasty">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Neurology
                <input type="checkbox" name="dsd11" value="Neurology">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Neurosurgeon
                <input type="checkbox" name="dsd12" value="Neurosurgeon">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Cosmetic Surgery
                <input type="checkbox" name="dsd13" value="Cosmetic Surgery">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Heart Disease Surgery
                <input type="checkbox" name="dsd14" value="Heart Disease Surgery">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Gastroenterology
                <input type="checkbox" name="dsd15" value="Gastroenterology">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Plastic Surgery
                <input type="checkbox" name="dsd16" value="Plastic Surgery">
                <span class="mark"></span>
            </label><br>
            <label class="container2">C T Scan
                <input type="checkbox" name="dsd17" value="C T Scan">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Joint Replacement
                <input type="checkbox" name="dsd18" value="Joint Replacement">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Advanced Laparoscopic Surgery
                <input type="checkbox" name="dsd19" value="Advanced Laparoscopic Surgery">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Arthroscopy Surgery
                <input type="checkbox" name="dsd20" value="Arthroscopy Surgery">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Department Of Women's Disease And Obstetrics And Gynecology
                <input type="checkbox" name="dsd21" value="Department Of Women's Disease And Obstetrics And Gynecology">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Newborn Department
                <input type="checkbox" name="dsd22" value="Newborn Department">
                <span class="mark"></span>
            </label><br>
            <label class="container2">M R I
                <input type="checkbox" name="dsd23" value="M R I">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Nephrology
                <input type="checkbox" name="dsd24" value="Nephrology">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Endocrinology
                <input type="checkbox" name="dsd25" value="Endocrinology">
                <span class="mark"></span>
            </label><br>
            <label class="container2">Physiotherapy
                <input type="checkbox" name="dsd26" value="Physiotherapy">
                <span class="mark"></span>
            </label><br>
         
        </div>
        <div class="col-sm-6">
            <label>Discount in percent</label>
           
              
              <input id="amnumber" type="text" name="percent" class="form-control" placeholder="Your answer">
          <br>
          </div>
          <div class="col-sm-6">
            <label>Name of MR / Executive</label>
            
              
              <input id="amnumber" type="text" name="mr_name" class="form-control" placeholder="Your answer">
           <br>
          </div>
         
          <p id="err"></p>
          <div class="form-group">
            
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            <input type="hidden" name="type" value="Hospital">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Send</button><br><br>
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
        
        <th>Hospital / Clinic Name</th>
        <th>Registration No.</th>
        
        
        
        
        <th>Status</th>
        
        <th>Edit</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
include 'connect.php';

$sql = "SELECT * FROM tie_up where type='Hospital'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['hc_name']."</td><td>".$row['regis']."</td><td>".$row['status']."</td><td><a href='edit_lab_hospital_medical.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></a></td></tr>";
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
 