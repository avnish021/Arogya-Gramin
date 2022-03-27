<?php include 'header.php'?>
<?php

include 'connect.php';
if(isset($_POST['save']))
{
  $sql1="SELECT * FROM apply_card";

  if ($result1=mysqli_query($conn,$sql1))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result1);
   
    mysqli_free_result($result1);
    } 
  $filename = $_FILES["adhar_photo"]["name"];
  $tempname = $_FILES["adhar_photo"]["tmp_name"];   
  $folder = "../assets/images/adhar_card/".$filename;
  move_uploaded_file($tempname, $folder);
    $state = $_POST['state'];
    $distric = $_POST['distric'];
    $block = $_POST['block'];
    $val3 = mb_substr($state, 0, 1, "UTF-8");
    $val1 = mb_substr($distric, 0, 1, "UTF-8");
    $val2 = mb_substr($block, 0, 1, "UTF-8");
    $application_no = $val3.$val1.$val2.'100'.$rowcount;
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $gander = $_POST['gander'];
    $adhar = $_POST['adhar'];
    $type = $_POST['type'];
    //$adhar_photo = $_POST['adhar_photo'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $full_address = $_POST['full_address'];
    $futureDate=date('d-m-Y', strtotime('+1 year'));
    $rdt = date("d-m-Y");
	 $sql = "INSERT INTO `apply_card` (`application_no`, `state`, `distric`, `block`, `name`, `fname`, `dob`, `gander`, `adhar`, `type`, `adhar_photo`, `phone`, `email`, `full_address`, `status`, `payment_screen`, `startdate`, `enddate`, `vol_email`) VALUES ('$application_no', '$state', '$distric', '$block', '$name', '$fname', '$dob', '$gander', '$adhar', '$type', '$filename', '$phone', '$email', '$full_address', 'noactive', 'none', '$rdt', '$futureDate', 'none')";
   try {
	 if (mysqli_query($conn, $sql)) {
      echo "<script>window.location.href='application_2.php?email=$email'</script>";
    //$_SESSION['email'] = $email;
    //header('location: application_2.php');
    //exit();
		//header('Location: ');
	 }
   } catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>

  
</div><div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="hs_contact_head_text">
        <h4 class="hs_contact_heading">Application Form</h4>
        <p></p>
      </div>
    </div>
  </div>
  <form action="application_form.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      
      <div class="hs_comment_form">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>State <span style="font-size:13px"></span></label>
            


         <input id="uname" name="state" type="text" class="form-control" placeholder="required"Required>
           <br>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>District <span style="font-size:13px">(Your District Name)</span>
             </label>
            
              
              <input id="uemail" name="distric" type="text" class="form-control" placeholder="required"required>
           <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Block<span style="font-size:13px"></span>
             </label>
            
              
              <input id="uemail" name="block" type="text" class="form-control" placeholder="required"required>
           <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Name<span style="font-size:13px"></span>
             </label>
            
              
              <input id="uemail" name="name" type="text" class="form-control" placeholder="required"required>
            <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Father/Husband Name 
             </label>
            
              
              <input id="uemail" name="fname" type="text" class="form-control" placeholder="required"required>
            <br>
            <!-- /input-group --> 
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>D.O.B</label>
            
              
              <input id="amnumber" type="date" name="dob" class="form-control" placeholder="required"required>
            <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Gender</label>
            
              
            <select class="form-control" id="amnumber" requi name="gander">
                
                <option value="male">Male</option>
                <option value="female">Female</option>
                
              </select>
            <br>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
        
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Aadhaar Numbar</label>
            
              
              <input id="amnumber" type="text" name="adhar" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="12" placeholder="required"required>
            <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Application Type</label>
            <br>
              <input id="amnumber" type="radio" name="type" style="height:20px;width:20px" value="Arogya Gramin Swastha Card" placeholder="required"required>&nbsp;Arogya Gramin Card
           <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Your Photo</label>
            
              
              <input id="amnumber" type="file" name="adhar_photo" accept="image/jpg, image/jpeg, application/pdf, image/png" class="form-control" placeholder="required"required>
            <br>
            <!-- /input-group --> 
          </div>
         
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Contact No.</label>
            
              
              <input id="amnumber" type="text" name="phone" class="form-control"  onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="required"required>
           <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Email (To Get Health Card)</label>
            
              
              <input id="amnumber" type="text" name="email" class="form-control" placeholder="required"required>
            <br>
            <!-- /input-group --> 
          </div>
          
         
         
          <!-- /.col-lg-6 -->
          <div class="col-lg-12">
            <label>Full Address</label>
           
              <textarea id="message" name="full_address" class="form-control" rows="8"></textarea>
           <br>
            <!-- /input-group --> 
          </div>
          
        
          <div class="form-group">
        
            <input type="hidden" name="rdt" value="Saturday 3  July 2021">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>



    
  </div>
  
  </form>

  <!--Meet Our Partners end-->
  <div class="hs_margin_60"></div>
</div>

<?php include 'footer.php'?>
