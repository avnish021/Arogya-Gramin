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
    $folder = "../assets/images/bpo_dpo/".$filename;
    $filename1 = $_FILES["adhar"]["name"];
    $tempname1 = $_FILES["adhar"]["tmp_name"];   
    $folder1 = "../assets/images/bpo_dpo/".$filename1;
    $filename2 = $_FILES["pan"]["name"];
    $tempname2 = $_FILES["pan"]["tmp_name"];   
    $folder2 = "../assets/images/bpo_dpo/".$filename2;
    $filename3 = $_FILES["agreement"]["name"];
    $tempname3 = $_FILES["agreement"]["tmp_name"];   
    $folder3 = "../assets/images/bpo_dpo/".$filename3;
    $filename4 = $_FILES["passbook"]["name"];
    $tempname4 = $_FILES["passbook"]["tmp_name"];   
    $folder4 = "../assets/images/bpo_dpo/".$filename4;
    $filename5 = $_FILES["id_photo"]["name"];
    $tempname5 = $_FILES["id_photo"]["tmp_name"];   
    $folder5 = "../assets/images/bpo_dpo/".$filename5;
    move_uploaded_file($tempname, $folder);
    move_uploaded_file($tempname1, $folder1);
    move_uploaded_file($tempname2, $folder2);
    move_uploaded_file($tempname3, $folder3);
    move_uploaded_file($tempname4, $folder4);
    move_uploaded_file($tempname5, $folder5);
    $rdt = $_POST['rdt'];
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
    
    try {
	 $sql = "INSERT INTO `dpo_bpo` (`rdt`, `id_card`, `post`, `distric`, `block`, `name`, `fname`, `phone`, `email`, `raddress`, `office_address`, `photo`, `adhar`, `pan`, `agreement`, `passbook`, `id_photo`, `status`, `userid`) VALUES ('$rdt', '$id_card', '$post', '$distric', '$block', '$name', '$fname', '$phone', '$email', '$raddress', '$office_address', '$filename', '$filename1', '$filename2', '$filename3', '$filename4', '$filename5', 'True', 'userid')";
  
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your Dpo_bpo Upload successfully !..');window.location.href='dpo_bpo_emp.php'</script>";
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
     
        <div class="row">
          <div class="col-sm-6">
          <label>ID card number <span style="font-size:13px">(If issued)</span>
</label>
           
              
              <input id="uname" name="id_card" type="text" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
          <label>Your Service Type <span style="font-size:13px">(Post)</span></label>
          <select class="form-control" id="sel1" name="post">
                <option>--Select Your Service Type--</option>
                <option value="DPO">DPO</option>
                <option value="BPO">BPO</option>
                <option value="arogya_m">Arogya Mitra</option>
                <option value="arogya_g">Arogya Gramin</option>
                <option value="mmt">Management Team</option>
                
              </select>
          <br>
          </div>
          <div class="col-sm-6">
          <label>Name of District</label>
          <input id="uname" type="text" name="distric" class="form-control" placeholder="">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
          <label>Block</label>
            
              <input id="amnumber" type="text" name="block" class="form-control" placeholder="Your answer">
            <br>
          </div>
          <div class="col-sm-6">
            <label>Name</label>
            <input id="amnumber" type="text" name="name" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Father Name</label>
            <input id="amnumber" type="text" name="fname" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Phone No.</label>
            <input id="amnumber" type="text" name="phone" class="form-control" onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Email</label>
            <input id="amnumber" type="text" name="email" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
          <label>Residence Address</label>
            <textarea id="message" name="raddress" class="form-control" rows="8"></textarea>
           <br>
          </div>
          <div class="col-sm-6">
          <label>Office Address</label>
            <textarea id="message" name="office_address" class="form-control" rows="8"></textarea>
           <br>
          </div>
          <div class="col-sm-6">
            <label><label>Photo</label></label>
            <input id="amnumber" type="file" name="photo" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Upload Aadhaar</label>
            <input id="amnumber" type="file" name="adhar" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
          <label>Upload PAN</label>
            <input id="amnumber" type="file" name="pan" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Upload Your Agreement Signed copy</label>
            <input id="amnumber" type="file" name="agreement" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Passbook <span style="font-size:13px;">(1st page of passbook)</span></label>
            <input id="amnumber" type="file" name="passbook" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Upload Your ID Card </label>
            <input id="amnumber" type="file" name="id_photo" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
           <br>
          </div>
          <p id="err"></p>
          <div class="form-group">
            
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Send</button><br><br><br>
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
 