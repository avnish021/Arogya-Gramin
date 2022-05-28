<?php include 'header.php';

date_default_timezone_set("Asia/Kolkata");
$id = $_SESSION['enroll_id']; 
$type = $_SESSION['type'];
$mobile = $_SESSION['mobile'];
$email = $_SESSION['email'];
$OrderId = time();
$_SESSION['ref_id'] = $OrderId;


// $id=1;
// $type='family';
if ($type=="family") {
        $amt = 149;
}elseif ($type=="personal") {
    $amt = 99;

}

?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Payment Process</h2>
            <p>.<br>After successful payment, your health card will be delivered to you on your Email or What's app within 7 working day <br> Please complete your Paymet below</p>
            <div class="page-item bannercenter">
                <a href="#"><i class="ti-home"></i>Home </a>
                <p>Make Payment</p>
            </div>
        </div>
    </div>

  <!--  <section class="cta-section-3 bd-bottom padding">
	<div class="container">
		<div class="cta-wrap text-center">
			<div class="section-heading mb-40 text-center">
				<span class="sub-heading">Paymnet Process</span>
				<h2>Please complete your Payment </h2>
				<p>We are using secure server and do not store your payment information <br>After compilation of your payment one of our executive will contact you </p>
			</div><!-- /.section-heading 
			<a href="tel:18008898286" class="default-btn">Click To Call<span></span></a>
		</div>
        
	</div>
</section>-->



</section>
<!--<div class="container-fulid">
    
    <div class="container">
        <div class="row" style="margin-top:50px">
            <center>
                <br><h3><u><b>Thank you for chosing us</b></u></h3>
                <br><h4>Please complete payment, We will contact you after successfull payment.</h4>
            
            <br>
            <div class ="form-row">
                <div class="form-group col-md-12">
                <input type="textbox" name="amt" id="amt" value="Amount is ₹ <?php echo $amt.$IDa; ?>" readonly/><br/><br/>
                <button type="submit" name="pay" value="pay" class="btn btn-primary" id="btn" onclick="pay_now()" >Pay Now</button>
                </div>
                <br><h5>(After successful payment, your health card will be delivered to you on your Email or What's app within 7 working day)</h5>
                 <br><h3>You can contact us on - 18008906600</h3>
                  <h4>(Email ID - support@arogyagramin.com)</h4>
                <br> <br> <h4>किसी भी तरह की धोखाधड़ी से बचने के लिए कृपया पेमेंट करते समय "आरोग्य ग्रामीण हेल्थकेयर फाउंडेशन" के नाम को सत्यापित जरूर करें।  </h4>
               <h4>   <h4>(Please verify the name of "Arogya Gramin Healthcare Foundation" while making the payment to avoid any fraud.)</h4></h4>
            </div>
            </center>
        </div> 
    </div>
</div>-->

  <section class="cta-section-3 bd-bottom padding">
	<div class="container">
		<div class="cta-wrap text-center">
			<div class="section-heading mb-40 text-center">
				<span class="sub-heading">Paymnet Process</span>
				<h2>Please complete your Payment </h2>
				<p>We are using secure server and do not store your payment information in our server <br>After compilation of your payment one of our executive will contact you </p>
			</div><!-- /.section-heading -->
            <div class="form-group col-md-12">
                <input type="textbox" name="amt" id="amt" value="Amount is ₹ <?php echo $amt.$IDa; ?>" readonly/><br/><br/>
                <!--<button type="submit" name="pay" value="pay" class="btn btn-primary" id="btn" onclick="pay_now()" >Pay Now</button>-->
                </div>
			<a type="submit" name="pay" value="pay" class="default-btn" id="btn" onclick="pay_now()"> Pay Now<span></span></a>
		</div>
        
	</div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay_now(){
        
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt,
               success:function(result){
                   var options = {
                        "key": "rzp_live_KHhJGZnUXeC3f7", 
                        "amount": <?php echo $amt; ?>*100, 
                        "currency": "INR",
                        "name": "Arogya Gramin Healthcare Foundation",
                        "prefill": {
                                    "email": "<?php echo $email; ?>",
                                    "contact": "<?php echo $mobile; ?>"
                                },
                        "notes": {
                                "refrence": "<?php echo $OrderId; ?>",
                                },
                        "description": "Healthcard Transaction",
                        "image": "https://www.arogyagramin.com/images/logo1.png",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               
                               success:function(result){
                                   window.location.href="thank_you.php";
                                   
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
    
</script>
<?php 

include 'footer.php';?>
