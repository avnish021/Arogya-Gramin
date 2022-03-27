<?php
include 'connect.php';
 
if(isset($_POST['save']))
{	 
    $select_dp = $_POST['select_dp'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $rdt = $_POST['rdt'];
	 $sql = "INSERT INTO `book_appointment` (select_dp, name, phone, email, rdt, time, status, color)
	 VALUES ('$select_dp', '$name', '$phone', '$email', '$rdt', '---', 'False', 'red')";
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Thanks to visit Arogya Gramin We will make contact with you shortly.');window.location.href='index.php';</script>";
		//header('Location: ');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
 
<?php include 'header.php'?>
<div class="container-fulid">
    <div class="page-head_agile_info_w3l">
    		<div class="container">
    			<h3>Book an Appointment</h3>
    			<!--/w3_short-->
    				 <div class="services-breadcrumb">
    						<div class="agile_inner_breadcrumb">
    
    						   <ul class="w3_short">
    								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
    								<li style='color:black'>Book an Appointment</li>
    							</ul>
    						 </div>
    				</div>
    	   <!--//w3_short-->
    	</div>
    </div>
     <div class="container">
	     <div class="row">
			 <div class="col-sm-6">
				<br><br> <h3><b><u>Our Goal</u></b></h3>
				 <ul><br/>
                    <li>Our customers and their safety are paramount in everything we do.</li><hr/>
                     <li>We care about the community.</li><hr/>
                     <li>We care about the environment.</li><hr/>
                     <li>Our people are our strength.</li><hr/>
                     <li>We work ethically and professionally.</li><hr/>
                    </ul>
			 </div>
			 <div class="col-sm-6" >
			<br><br> <h3><b><u>Book an Appointment</u></b></h3><br>
					<div class="row" style="background-image:url(images/ap02.jpg);background-size:100% 100%;">
						
						<div class="col-sm-8" style="background:rgba(192,192,192,0.6);">
						
					<form action="book_op.php" method="post" style="margin-top:20px;margin-bottom:20px;width:90%;">
					<select class="form-control" id="" name="select_dp">
                    <option>Select Department</option>
                    <option value="Doctor">Doctor</option>
					<option value="Hospital">Hospital</option>
					<option value="Query">Query</option>
					<option value="Franchise Partner">Franchise Partner</option>
					<option value="Appointment Book">Appointment Book</option>
                    <option value="Arogya gramin">Arogya Gramin</option>
                  </select><br>
				  <input type="text" class="form-control" id="slider_fname" name="name" placeholder="full Name  ( required )" required><br>
				  <input type="text" id="slider_phone" name="phone" class="form-control"  placeholder="Phone (required)"  onKeyPress="if(this.value.length==10) return false;" min="10" required><br>
				  <input type="email" id="slider_email" name="email" class="form-control"  placeholder="Email"><br>
				  <input type="date" id="slider_date" name="rdt" class="form-control"><br>
				  <input type="submit" name="save" id="slider_book_apo" class="btn btn-info" value="Submit">
					</form>
				
						</div>
						<div class="col-sm-4"></div>
					</div>
			 </div>
		 </div>
	   </div>
	   </div>			
</div>
<?php include 'footer.php'?>
  