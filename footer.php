<!-- footer -->
<?php
include 'connect.php';
 
if(isset($_POST['sub']))
{
    $email = $_POST['email'];
    $rdt = $_POST['rdt'];
$sql = "INSERT INTO `sub` (`email`, `status`, `rdt`) VALUES ('$email', 'True', '$rdt')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Thank You for Subscribed Arogya Gramin');</script>";
} else {
   echo "<script>alert('Sorry Already Subscribed Arogya Gramin');</script>";
}
}
$conn->close();
?>
<div style="clear:both; margin-top:2px;">
	<br /><br /><br />
</div>
<div class="footer" style="background:#008080;color:white">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><img src="images/logo1.png" style="width:150px;height:90px;" alt=""></h2>
			<p style="color:white">AROGYA GRAMIN HEALTHCARE
AROGYA GRAMIN AROGYA BHARAT EK MISSION</p>
<p style="color:white">CIN No:-U85300BR2020NPL046121</p>

<!--Razorpay button-->
<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_ILoQSsX3a0xc4O" async> </script> </form> <br></br>
			
		
				</div>
				

	
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.php" style="color:white">Home</a></li>
						<li><a href="about_us.php" style="color:white">About Us</a></li>
						<li><a href="contact_us.php" style="color:white">Contact Us</a></li>
						<li><a href="career.php" style="color:white">Career</a></li>
						<li><a href="services.php" style="color:white">Services</a></li>
					
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Get in touch !</h4>
					<div class="w3-address">
						<div class="w3-address-grid" style="background:orange;color:black">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+91 933 446 7080</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid" style="background:orange;color:black">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>support@arogyagramin.com</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid" style="background:orange;color:black">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Sumitra Shree 5A, Khemnichack Bypass, Kankarbagh, Patna, Bihar, 800020 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd">
					<h4>Products & Services</h4>
					<ul>
                    <li><a href="apply_healthcard2.php" style="color:white">Health Card</a></li>
                    <hr>
                      <li><a href="" style="color:white">Skill Development</a></li><hr>
                      <li><a href="" style="color:white">BP & Blood Sugar Check-up</a></li><hr>
                      <li><a href="book_op.php" style="color:white">Appointment Booking</a></li><hr>
                      <li><a href="" style="color:white">Health Camp</a></li><hr>
                      <li><a href="services.php" style="color:white">More...</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>Subscribe !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					 <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
					<input type="submit" name="sub" value="Subscribe">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
	<div class="row">
			<center>
			<p style="color:orange"><a href="privacy_policy.php" style="color:orange">Privacy Policy</a> | <a href="return_policy.php" style="color:orange">Return Policy</a> | 
			<a href="shipping_policy.php" style="color:orange">Shipping Policy</a> | 
			<a href="term_condition.php" style="color:orange">Term & Condition</a></p>
    <p>Arogya Gramin Healthcare Foundation Registered under Govt. of Indian Act. 2013 ISO Certified 9001:2015</p>
    Copyright © 2021 Arogya Gramin. All Rights Reserved.
			</center>
	</div>
	</div>
</div>
<!-- //footer -->
<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102257568191811");
      chatbox.setAttribute("attribution", "page_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<!-- login -->
			
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<!-- <script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script> -->
<!-- //stats -->
<!-- start-smoth-scrolling -->
<!-- <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="load.js"></script> -->
<!-- <script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->

<!-- jQuery Lib -->
<script src="assets/new/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/new/js/vendor/popper.min.js"></script>
    <script src="assets/new/js/vendor/bootstrap.min.js"></script>
    <script src="assets/new/js/vendor/waypoints.min.js"></script>
    <script src="assets/new/js/vendor/slick.min.js"></script>
    <script src="assets/new/js/vendor/jquery.smoothscroll.min.js"></script>
    <script src="assets/new/js/vendor/jquery.ajaxchimp.min.js"></script>
    <script src="assets/new/js/vendor/venobox.min.js"></script>
    <script src="assets/new/js/vendor/odometer.min.js"></script>
    <script src="assets/new/js/vendor/jquery.isotope.v3.0.2.js"></script>
    <script src="assets/new/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/new/js/vendor/wow.min.js"></script>
    <script src="assets/new/js/volunteer.js"></script>
    <script src="assets/new/js/main.js"></script>
    <script src="assets/new/js/custom.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
<script>
  $('.marquee_text').marquee({
    direction: 'up',
    duration: 10000,
    gap: 0,
    delayBeforeStart: 0,
});

  </script>

</body>
</html>
