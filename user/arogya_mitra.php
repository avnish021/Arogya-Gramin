<?php include 'header.php'?>
<?php
include 'connect.php';

if(isset($_POST['save']))
{
  //$filename = $_FILES["adhar_photo"]["name"];
  //$tempname = $_FILES["adhar_photo"]["tmp_name"];   
  //$folder = "assets/images/adhar_card/".$filename;
  //move_uploaded_file($tempname, $folder);
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $alt_number = $_POST['alt_number'];
    $email = $_POST['email'];
    $full_address = $_POST['full_address'];
    $panchayat = $_POST['panchayat'];
    $block = $_POST['block'];
    $distric = $_POST['distric'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];
    
	 $sql = "INSERT INTO `aorgya_mitra` (`name`, `fname`, `dob`, `phone`, `education`, `alt_number`, `email`, `full_address`, `panchayat`, `block`, `distric`, `pin`, `state`, `photo`, `id_card`, `payment_screen`, `status`) VALUES ('$name', '$fname', '$dob', '$phone', '$education', '$alt_number', '$email', '$full_address', '$panchayat', '$block', '$distric', '$pin', '$state', 'none', 'none', 'none', 'not verify')";
   try {
	 if (mysqli_query($conn, $sql)) {
            $_SESSION['phone'] = $phone;
            header('location: arogya_mitra_2');
            exit();
        
		//header('Location: ');
	 }
   } catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>
<div class="content" style="margin-top:70px;">
  <div class="row">
    <div class="col-lg-12">
      <div class="hs_contact_head_text">
        <h4 class="hs_contact_heading">Arogya Mitra Application (आरोग्य मित्र आवेदन )</h4>
        <p></p>
      </div>
    </div>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      
      <div class="hs_comment_form">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Arogya Mitra Name  <span style="font-size:13px"> (आरोग्‍य मित्र का नाम)</span></label>
           
              
              <input id="uname" name="name" type="text" class="form-control" placeholder="">
           <br>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Father Name  <span style="font-size:13px">(पिता का नाम)</span>
             </label>
           
              
              <input id="uemail" name="fname" type="text" class="form-control" placeholder="">
            <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Date of Birth  <span style="font-size:13px">(जन्म की तारीख)</span>
             </label>
           
              
              <input id="uemail" name="dob" type="date" class="form-control" placeholder="">
           <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Contact number (संपर्क संख्या)
             </label>
           
              
              <input id="uemail" name="phone" type="text" class="form-control"  onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="">
            <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Heigh Education Qualification (उच्च शैक्षणिक योग्यता) <span style="font-size:13px"></span>
             </label>
           
              
            <select class="form-control" id="amnumber" name="education">
                
                <option value="Matric">Matric (मैट्रिक)</option>
                <option value="Intermediate">Intermediate (इंटर)</option>
                <option value="MatriGraduationc">Graduation (स्‍नातक)</option>
                <option value="Post Graduation">Post Graduation (स्नातकोत्तर)</option>
                <option value="Unqualified">Unqualified (अपरिपक्व)</option>
                
              </select>
           <br>
            <!-- /input-group --> 
          </div>
          
          
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Alternat contact number (वैकल्पिक संपर्क नंबर)</label>
           
              
              <input id="amnumber" type="text" name="alt_number" class="form-control"  onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="">
          <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Email Address (ईमेल पता)</label>
           
            <input id="amnumber" type="text" name="email" class="form-control" placeholder="">
           <br>
            
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->

          <!-- /.col-lg-6 -->
          <div class="col-lg-12">
            <label>Village/City/Ward no/ House no (गाँव / शहर / वार्ड नं / घर नं)</label>
            
              <textarea id="message" name="full_address" class="form-control" rows="8"></textarea>
            <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Panchayat (पंचायत)</label>
           
              
              <input id="amnumber" type="text" name="panchayat" class="form-control" placeholder="">
         <br>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Block (प्रखंड) *</label>
           
              
              <input id="amnumber" type="text" name="block" class="form-control" placeholder="">
          <br>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>District (जिला) *</label>
           
              
              <input id="amnumber" type="text" name="distric" class="form-control" placeholder="">
          <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Pin Code (पिन कोड)</label>
           
              <input id="amnumber" type="text" name="pin" class="form-control" placeholder="">
            <br>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>State (राज्य)</label>
           
                
            <select class="form-control" id="amnumber" name="state">
               <option selected="true" disabled="disabled">-------Select State (राज्य)--------- </option>
                <option value="Bihar">Bihar (बिहार)</option>
                <option value="Jharkhand">Jharkhand (झारखण्ड)</option>
                
                
              </select><br>
           
            <!-- /input-group --> 
          </div>
          <p id="err"></p>
          <div class="form-group">
            <div class="col-lg-8 col-md-8 col-sm-12">
             
            </div>
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
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

