<?php include 'header.php'?>
<?php
include 'connect.php';

if(isset($_POST['save']))
{
    
   $phone = $_SESSION['phone'];
  $filename = $_FILES["photo"]["name"];
  $tempname = $_FILES["photo"]["tmp_name"];   
  $folder = "../assets/images/arogya_mitra/user_photo/".$filename;
  $filename1 = $_FILES["id_card"]["name"];
  $tempname1 = $_FILES["id_card"]["tmp_name"];   
  $folder1 = "../assets/images/arogya_mitra/user_id/".$filename1;
  $filename2 = $_FILES["payment_screen"]["name"];
  $tempname2 = $_FILES["payment_screen"]["tmp_name"];   
  $folder2 = "../assets/images/arogya_mitra/payment_screen/".$filename2;
  move_uploaded_file($tempname, $folder);
  move_uploaded_file($tempname1, $folder1);
  move_uploaded_file($tempname2, $folder2);
	 //$sql = "UPDATE `aorgya_mitra` SET `` = '$filename' WHERE id = '$id'";
     $sql = "UPDATE aorgya_mitra SET photo='$filename', id_card='$filename1', payment_screen='$filename2' WHERE phone='$phone'";
   try {
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your Appointment successfully insert!');window.location.href='arogya_mitra';</script>";
		//header('Location: ');
	 }
   } catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>
<div class="content" style="margin-top:70px">
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
            <label>Photo (आपका अपना तस्वीर)
<span style="font-size:13px"> Upload your recent passport size photo (अपना हालिया पासपोर्ट आकार का फोटो अपलोड करें)  </span></label>
           
              
              <input id="uname" name="photo" type="file" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="">
           
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>ID Card (पहचान पत्र)
<span style="font-size:13px">Upload any of one valid Id card like Aadhaar, Passport, Driving license, Rasan Card, Voter Id card, etc.</span>
             </label>
          
              
              <input id="uemail" name="id_card" type="file" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="">
           
            <!-- /input-group --> 
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <label>Make Payment

             </label>
            <div class="input-from"> 
            <center><img src="../assets/images/arogya_mitra/payment_screen/payment.png" style="width:70%" alt=""></center><br><br>
            </div>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Upload Screenshot of Payment
             </label>
            
              
              <input id="uemail" name="payment_screen" type="file" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="">
          
      <br>
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Save</button>
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

