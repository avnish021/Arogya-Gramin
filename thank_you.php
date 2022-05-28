<?php 
ob_start();
include 'header.php';
include 'connect.php';

// $servername = "localhost";
// $username = "arogyagr_arogyagramin";
// $password = "arogyagramin123";
// $dbname = "arogyagr_arogyagramin";

$id = $_SESSION['enroll_id'];
$ref_id = $_SESSION['ref_id']; 
$type = $_SESSION['type'];
//echo "id >".$id."ref >".$ref_id."type >".$type;

if(isset($_SESSION['ref_id']) && isset($_SESSION['enroll_id'])){
    if($type=="family"){
        $query="UPDATE `familyhealthcard` SET `order_status`= 'PAID',`order_id`='$ref_id' WHERE `id`=" .$id.";";
    }elseif($type=="personal"){
        $query="UPDATE `personalhealthcard` SET `order_status`= 'PAID',`order_id`='$ref_id' WHERE `id`=" .$id.";";
    }
    mysqli_query($conn, "$query");
}else{
header('Location: index');
}

?>

<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Payment Successful</h2>
            <p>.<br>Your payment for membership is received successfully, Please note down your refrence number which is mentioned below <br> One of our executive will contact you within seven working day</p>
            <div class="page-item bannercenter">
                <a href="#"><i class="ti-home"></i>Home </a>
                <p>Thank You</p>
            </div>
        </div>
    </div>
</section>

<section class="about-section-3 bd-bottom padding">
	<div class="container">
		<div class="about-wrap row d-flex align-items-center">
			<div class="col-md-6 sm-padding">
				<div class="section-heading text-left">
					<span class="sub-heading">About</span>
					<h2>Great! We received your payment successfully</h2>
					<p class="text-justify">Your small contribution will make us eligible to serve our best affordable healthcare service to the community. </p>
                    
                    <h2 style="color:red">Your refrence ID is <?php echo $ref_id; ?> </h2>
                    
                    <span style="font-size:100%!important">(Note down for further verification.)</span></br>
                   <br> <h2>Thank you for your successful contribution</h2>
                    <h4>If you have any questions or inquiries. Do not hesitate to contact us on our Toll-Free number - 1800 8898 286</h4>
				</div><!-- /.section-heading -->
			</div>
			<div class="col-md-6 sm-padding">
				<div class="about-img">
					<img src="images/ok-ge3d28df0c_1280.png" alt="arogya gramin">
				</div>
			</div>
		</div>
	</div>
   <!-- <center>
    <br> <h3><b>(Your small contribution will make us eligible to serve our best affordable healthcare service to the community.) </b></h3>
    <p>Your small contribution will make us eligible to serve our best affordable healthcare service to the community. </p>   
</center>-->

</section>

<section class="cta-section-3 bd-bottom padding">
	<div class="container">
		<div class="cta-wrap text-center">
			<div class="section-heading mb-40 text-center">
				<span class="sub-heading">How I Can Help</span>
				<h2>Do not hesitate! Please call us if you want any information.</h2>
				<p>We are commited to provide affrodable healthcare support to all people <br> at their nearest Hospital, Medical Store, Lab, Clinic etc.</p>
			</div><!-- /.section-heading -->
			<a href="tel:18008898286" class="default-btn">Click To Call<span></span></a>
		</div>
	</div>
</section>

<!--<div class="container-fulid">
    
    
    
    <div class="container">
        <div class="row" style="margin-top:50px">
            <center>
               <!--<br> <h2><u><b>Thank you for your successful contribution</b></u></h2></br>
                <b></b><h4 style="color:blue">Your refrence ID is <?php echo $ref_id; ?> .</h4>
                <span style="font-size:92%!important">(Note down this reference number for further verification.)<br/>(आगे के सत्यापन के लिए इस रेफरन्स नंबर को नोट कर लें।)</span><br/>
<br><h3>One of our executive will contact you soon<b></b></h3>
                <br> <h3><b>Your small contribution will make us eligible to serve our best affordable healthcare service to the community. </b></h3>
                <br><h4>If you have any questions or inquiries. Do not hesitate to contact us on our Toll-Free number - 18008906600<b></b></h4>
                <br>
                
            
            <br>
            
            </center>
        </div> 
    </div>
    
</div>-->



<?php
 ob_end_flush();
 include 'footer.php'; ?>


