<?php include 'header.php'?>
<?php
include 'connect.php';

if(isset($_POST['save']))
{
    
   $email = $_GET['email'];
  
  $filename2 = $_FILES["payment_screen"]["name"];
  $tempname2 = $_FILES["payment_screen"]["tmp_name"];   
  $folder2 = "../assets/images/arogya_mitra/payment_screen/".$filename2;
  
  move_uploaded_file($tempname2, $folder2);
   
    
	 //$sql = "UPDATE `aorgya_mitra` SET `` = '$filename' WHERE id = '$id'";
     $sql = "UPDATE apply_card SET payment_screen='$filename2' WHERE email='$email'";
   try {
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your Appointment successfully insert!');window.location.href='health_card.php?email=$email';</script>";
		//header('Location: ');
	 }
   } catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="hs_contact_head_text">
      <h6>आवेदन पत्र</h6>
        <p></p>
      </div>
    </div>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row" style="margin-top:100px">
    <div class="col-lg-12 col-md-12 col-sm-12">
      
      <div class="hs_comment_form">
        <div class="row">
         
          <div class="col-lg-12 col-md-12 col-sm-12">
            <label>Make Payment

             </label>
            <div class="input-from"> 
            <center><img src="../assets/images/arogya_mitra/payment_screen/payment.PNG" style="width:70%" alt=""></center><br>
            </div>
            <!-- /input-group --> 
          </div>
          <div class="col-md-8">
            <label>Upload Screenshot of Payment</label>
              <input id="uemail" name="payment_screen" type="file" class="form-control" accept="image/jpg, image/jpeg, application/pdf, image/png" placeholder="">
         <br>
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Save</button>
            </div>
          
        </div>
      </div>
    </div>



    
  </div>
  
  </form>
  <div class="hs_margin_60"></div>
</div>
<?php include 'footer.php'?>
