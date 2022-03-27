<?php include 'header.php'?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>C<span>ontact Us </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Contact</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <!--/contact-->
   <?php
include 'connect.php';
if(isset($_POST['save']))
{	 
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email_1 = $_POST['email_1'];
    $rdt = $_POST['rdt'];
    try {
	 $sql = "INSERT INTO `contact_us` (`name`, `phone`, `email`, `subject`, `message`, `email_1`, `rdt`) VALUES ('$name', '$phone', '$email', '$subject', '$message', '$email_1', '$rdt')";
  
	 if (mysqli_query($conn, $sql)) {
    $sender = "From: arogya001@arvisa.in";
    if(mail($email, $subject, $message, $sender)){
      echo "<script>alert('Your Message Upload successfully !..');window.location.href='contact.php'</script>";
        exit();
    }else{
        echo "Error: " . $conn->error;
        
    }
         
		//header('Location: ');
	 }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
     <center>
	 <h2><br><b>Get in touch with us</b></h2><hr>
        <p style="font-weight:bold">Feel free to contact anyone for any problem, information or service, we will be happy to help you.</p>
     <br>
	 </center>
       
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-7">
      <h4 ><b>Leave a Message</b></h4><hr>
      <div class="hs_comment_form">
      <form action="" method="post">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Full Name</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-user"></i></button>
              </span>
              <input id="uname" type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Email</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-envelope"></i></button>
              </span>
              <input id="uemail" type="hidden" name="email" value="support@arogyagramin.com">
              <input id="uemail" type="text" name="email_1" class="form-control" placeholder="Email">
            </div>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Mobile No.</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-phone"></i></button>
              </span>
              <input id="uname" type="text" name="phone" class="form-control" onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="Mobile No.">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Subject</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-book"></i></button>
              </span>
              <input id="uemail" type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-12">
            <div class="form-group">
              <textarea id="message" name="message" class="form-control" rows="8"></textarea>
            </div>
            <!-- /input-group --> 
          </div>
          <p id="err"></p>
          <div class="form-group">
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="checkbox">
                <label>
                <input type="checkbox" id="hs_checkbox" class="css-checkbox lrg" checked="checked"/>
                <label for="hs_checkbox" name="checkbox69_lbl" class="css-label lrg hs_checkbox">Receive Your Comments By Email</label>
                </label>
              </div>
            </div>
            
            <input type="hidden" name="rdt" value="Saturday 3  July 2021">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <button id="em_sub" class="btn btn-success pull-right" name="save" type="submit">Send</button>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
    <div class="col-lg-4 col-md-5 col-sm-5">
      <h4 ><b>Contact</b></h4> <hr>
      <div class="hs_contact">
        <ul style="list-style-type:none;">
          <li> 
            <p style="font-weight:bold"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Sumitra Shree 5A, Khemnichack Bypass, Kankarbagh, Patna, Bihar, 800020</p>
          </li>
		  <hr>
          <li> 
            <p style="font-weight:bold"><i class="fa fa-phone"></i>&nbsp;&nbsp; 1800 8906600,&nbsp;&nbsp; +91 9334467080</p>
            
          </li>
		  <hr>
          <li>
            <p style="font-weight:bold"> <i class="fa fa-envelope"></i>&nbsp;&nbsp; <a href="Mailto:support@arogyagramin.com" style="font-weight:bold">support@arogyagramin.com</a></p>
          </li>
        </ul>
      </div>
         </div>
  </div>
  <div class="row" style="margin-top:40px;">
    <div class="col-lg-12">
      <div class="hs_contact_head_text">
        <h3 ><b>All Contact Number Department</b></h3><hr>
        <p></p>
      </div>
    </div>
</div>
<div class="hs_margin_60"></div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
     <h4><b>24x7 Support - </b>9334467080</h4><hr>
     <h4><b>Relationship Manager - </b>9334469054</h4><hr>
     <h4><b>Executive Sales Manager - </b>9334469051</h4><hr>
     <h4><b>Operational Manager - </b>9334469053</h4><hr>
     <h4><b>Medical Support - </b>9334469059</h4><hr>
     <h4><b>Medical Support - </b>7667302077</h4><hr>
     <h4><b>Business Development Manager - </b>9334469057</h4><hr>
     <h4><b>IT Department  - </b>9334469055</h4><hr>
     <h4><b>Sales Executive - </b>9334469052</h4><hr>
     <h3><b>(Note: Please do any work only after checking our offical number)</b></h3><hr>
    </div>
</div>
<div class="hs_margin_60"></div>

  
  

</div>


<!--/grids-->

<div class="contact-w3-agile1 map" data-aos="flip-right">
			
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7624.526634832133!2d85.14959971674429!3d25.595029799273796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed593206350de7%3A0x28a0f8ab1f99baa8!2sArogya%20Gramin%20Healthcare%20Foundation!5e0!3m2!1sen!2sin!4v1625478930939!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

	   </div>
<!--grids-->
<?php include 'footer.php'?>