<!-- footer -->
<?php
include 'connect.php';

if (isset($_POST['sub'])) {
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
<section class="widget-section padding">
	<div class="widget-bg"></div>
	<div class="container">
		<div class="widget-wrap row">
			<div class="col-lg-3 col-md-6 sm-padding sm-padding">
				<div class="widget-box">
					<img src="images/logo1.png" style="width:150px;height:90px;" alt="">
					<p>Arogya Gramin Healthcare Foundation</p>
					<p>CIN No:-U85300BR2020NPL046121</p>
					<!--Razorpay button-->
					<form>
						<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_ILoQSsX3a0xc4O" async> </script>
					</form>
					<!-- <div class="chat_for_bussiness mt-2">
						<a href="https://wa.me/message/QVWBOLAHFLZIA1">Chat us For Business Partnership</a>
					</div> -->
					<ul class="widget-social mt-4">
						<li class="facebook"><a href="https://www.facebook.com/arogyagraminhealthcarefoundation"><i class="fab fa-facebook-f"></i></a></li>
						<li class="youtube"><a href="https://www.youtube.com/channel/UCWuHT2-20eeI39or16hqiDg"><i class="fab fa-youtube"></i></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/company/arogyagramin"><i class="fab fa-linkedin"></i></a></li>
						<li class="twitter"><a href="https://twitter.com/GraminCare"><i class="fab fa-twitter"></i></a></li>
						<li class="instagram"><a href="https://www.instagram.com/arogyagraminhealthcare/?hl=en"><i class="fab fa-instagram"></i></a></li>
						<li class="g-plus"><a href="https://g.page/r/Cai6mR-r-KAoEBA"><i class="fa-solid fa-location-dot"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 sm-padding sm-padding">
				<div class="widget-box">
					<div class="widget-title">
						<h3>Products & Services</h3>
					</div>
					<ul class="widget-item">
						<li><a href="apply_healthcard2.php">Health Card</a></li>
						<!--<li><a href="#">Sanitary Napkin Ayurvedic Medicine</a></li>-->
						<li><a href="#">BP & Blood Sugar Check-up</a></li>
						<li><a href="book_op.php">Appointment Booking</a></li>
						<li><a href="#">Health Camp</a></li>
						<!--<li><a href="#">Relief Fund</a></li>-->
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 sm-padding sm-padding">
				<div class="widget-box pl-50">
					<div class="widget-title">
						<h3>OUR INFORMATION</h3>
					</div>
					<ul class="widget-item">
						<li><a href="/">Home</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<li><a href="contact_us.php">Contact Us</a></li>
						<li><a href="privacy_policy.php">Privacy Policy</a></li>
						<li><a href="return_policy.php">Return Policy</a></li>
						<!--<li><a href="shipping_policy.php">Shipping Policy</a></li>-->
						<li><a href="term_condition.php">Term & Condition</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 sm-padding sm-padding">
				<div class="widget-box">
					<div class="widget-title">
						<h3>Headquaters</h3>
					</div>
					<ul class="widget-contact">
						<li>
							<i class="fas fa-map-marker-alt"></i>
							<span>Sumitra Shree 5A, Hanuman Nagar, Kankarbagh, Patna, Bihar, 800020</span>
						</li>
						<li>
							<i class="fas fa-envelope"></i>
							<span>support@arogyagramin.com</span>
						</li>
						<li>
							<i class="fas fa-phone"></i>
							<span>(1800) 8898 286</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section><!-- ./ widget-section -->

<footer class="footer-section text-center">
	<div class="container">
		<p>Copyright © 2021 Arogya Gramin. All Rights Reserved.</p>
	</div>
</footer><!-- /.footer-section -->

<!-- <div id="scrollup">
	<button id="scroll-top" class="scroll-to-top"><i class="ti-angle-up"></i></button>
</div> -->

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
			xfbml: true,
			version: 'v11.0'
		});
	};

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
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
	$(document).ready(function() {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
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

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

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

</body>

</html>