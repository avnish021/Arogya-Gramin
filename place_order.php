<?php include 'header.php'?>
<?php
include 'connect.php';
$email = $_SESSION['email'];
    
    $qry = mysqli_query( $conn, "select * from usertable where email='$email'"); // select query
    $data = mysqli_fetch_array($qry); // fetch data
    
if(isset($_POST['save']))
{	 
    
    $mobile = $_POST['mobile'];
    $alt_mobile = $_POST['alt_mobile'];
    $full_address = $_POST['full_addr'];
    
    try {

        $edit = mysqli_query($conn,"update usertable set full_address='$full_address', mobile='$mobile', alt_mobile='$alt_mobile' where email='$email'");
  
        if($edit)
        {
         echo "<script>alert('Your Address Upload successfully !..');window.location.href='pay.php?'</script>";
		//header('Location: ');
	 }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>
<div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container" style="background:rgba(0,0,0,0.50)">
			<h3 style="color:white">Delivery Address Setup</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <div class="container">
   <div class="row" style="margin-top:30px;margin-bottom:20px;">
       <div class="col-lg-2 col-md-5 col-sm-5">
     
     
    </div>
    <div class="col-lg-8 col-md-7 col-sm-7">
      
      <div class="hs_comment_form">
      <form action="place_order.php" method="post">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Mobile Number</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-phone"></i></button>
              </span>
              <input id="uname" type="text" name="mobile" class="form-control" value='<?php echo $data['mobile'] ?>' required>
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Optional Number</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-phone"></i></button>
              </span>
              
              <input id="uemail" type="text" name="alt_mobile" class="form-control" value='<?php echo $data['alt_mobile'] ?>'>
            </div>
            <!-- /input-group --> 
          </div>
        
          <div class="col-lg-12">
            <div class="form-group">
                <label>Full Address</label>
              <textarea id="message" name="full_addr" class="form-control" rows="8"><?php echo $data['full_address'] ?></textarea>
            </div>
            <!-- /input-group --> 
          </div>
          <p id="err"></p>
          <div class="form-group">
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="checkbox">
               
              </div>
            </div>
            
           
            <div class="col-lg-4 col-md-4 col-sm-12">
              <button id="em_sub" class="btn btn-success pull-right" name="save" type="submit">Update Address</button>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  
  </div>
  
   </div>
  <?php include 'footer.php'?>