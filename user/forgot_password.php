<?php require_once "controllerUserData.php"; ?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Arogyagramin | Home</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<style>
#dis{
    display : none;
}
    @media screen and (min-width: 768px) {
    #dis {
       display:block;
    }
}
</style>
</head>
<body>
<!-- header -->
<div class="container-fluid" style="background:orange;font-weight:600;color:black">
    <div class="container">
		<ul style="list-style-type:none;padding:16px;color:white;margin-bottom:10px">
            <li style="float:left"><div id="google_translate_element"></div>
<script> 
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en'
  }, 'google_translate_element');
}
</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> </li>
			<li style="float:left;margin-left:13px;"><i class="fa fa-phone" aria-hidden="true" style="color:green"></i> Toll Free : +(1800) 8906600</li>
			<li style="float:left;margin-left:13px;"><i class="fa fa-phone" aria-hidden="true" style="color:green"></i> 24x7 Support : +91 9334467080</li>
			<li style="float:left;margin-left:13px;"><i class="fa fa-envelope-o" aria-hidden="true" style="color:green"></i> Support@Arogyagramin.Com</li>
		</ul>
	
	</div>
	
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		
		<!-- header-bot -->
			<div class="col-md-2 logo_agile">
				<center><h1><a href="index.php"><img src="../images/logo1.png" style="width:150px;height:87px;" alt=""></a></h1></center>
			</div>
            <div class="col-md-3 header-middle" id='dis'>
			<span style="font-size:20px;font-weight:800;color:#FF8C00">&nbsp;&nbsp;AROGYA GRAMIN </span><span style="font-size:20px;font-weight:800;color:green"> HEALTHCARE FOUNDATION</span><br>
         <span style="font-size:12px;">Arogya Gramin Arogya Bharat Ek Mission
       </span>
		</div>
            <div class="col-md-3 header-middle" style="margin-top:10px;">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content" style="margin-top:7px;">
           <center> <a href="user/application_form.php" class="btn btn-danger" style="margin-top:7px;">Apply For Health Card</a>
            <a href="" class="btn btn-success" style="margin-top:7px;">Donation</a>
         
			<?php
                           if(isset($_SESSION['email'])){
                           ?>
                  <a href="logout.php" class="btn btn-info" style="margin-top:7px;">Logout</a>
                    <?php
                           }else{
                            ?>
                              <a href="" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="margin-top:7px;">login</a>
                             <?php
                           }
                           ?>
			  </center>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top" style="background:orange;font-weight:600;color:black">
	<div class="container-fluid">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about_us.php">About</a></li>
                    <li class=" menu__item"><a class="menu__link" href="products.php">Products</a></li>
					<li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Tie-Up<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="hospital.php">Hospital</a></li>
									<li><a href="medical.php">Medical Store</a></li>
                                    <li><a href="lab.php">Patho Lab</a></li>
								</ul>
					</li>
                    <li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Department<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="management.php">Management Team</a></li>
									<li><a href="dpo.php">DPO</a></li>
                                    <li><a href="bpo.php">BPO</a></li>
                                    <li><a href="arogyamitra.php">Arogya Mitra</a></li>
                                    <li><a href="arogyagramin.php">Arogya Gramin Kendra</a></li>
								</ul>
					</li>
                    <li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Other<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="career.php">Career</a></li>
									<li><a href="services.php">Service</a></li>
                                    <li><a href="contact_us.php">Contact</a></li>
								</ul>
					</li>
                    <li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
                                            <li><a href="https://www.facebook.com/arogyagraminhealthcarefoundation/"><i class="fa fa-facebook"></i>&nbsp;Facebook</a></li>
              <li><a href="https://twitter.com/GraminCare"><i class="fa fa-twitter"></i>&nbsp;Twitter</a></li>
              <li><a href="https://www.linkedin.com/company/arogyagramin"><i class="fa fa-linkedin"></i>&nbsp;Linkedin</a></li>
                <li><a href="https://www.youtube.com/channel/UCWuHT2-20eeI39or16hqiDg"><i class="fa fa-youtube"></i>&nbsp;youtube</a></li>
                    <li><a href="https://wa.me/message/QVWBOLAHFLZIA1"><i class="fa fa-whatsapp"></i>&nbsp;Whatsapp</a></li>
                    <li><a href="https://www.tumblr.com/blog/arogyagramin"><i class="fa fa-tumblr"></i>&nbsp;Tumblr</a></li>
                    <li><a href="https://www.instagram.com/arogyagraminhealthcare/?hl=en"><i class="fa fa-instagram"></i>&nbsp;Instagram</a></li>
								</ul>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="background:none"> 
						
						<?php
                           if(isset($_SESSION['email'])){
                           ?>
                 		<button class="" value="">
						<a href="cart.php">
							<i class="fa fa-cart-arrow-down" aria-hidden="true" style="color:black">
							<span style="float:right;color:black;text-shadow:1px 2px 3px;">
							<?php
							$user_id = $_SESSION['email'];
							include 'connect.php';
							$sql="select count('1') from `e-card` where user_id='$user_id' and status='Pandding'";
							$result=mysqli_query($conn,$sql);
							$row=mysqli_fetch_array($result);
							echo "$row[0]";
							mysqli_close($conn);
							?>
							</span>
                    <?php
                           }else{
                            ?>
                              <button class="" value="">
						<a href="cart.php">
							<i class="fa fa-cart-arrow-down" aria-hidden="true" style="color:black">
                             <?php
                           }
                           ?>
						
						
							
							</i>
					    
							</a>
					</button>
                        <button class="" value="" style="font-size:17px;" onclick="window.location.href='allnotification.php'"><i class="fa fa-bell" aria-hidden="true"></i></button>
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-12 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
						<center>
        <button class='btn btn-info' style="margin-top:7px;"><a href="admin/login.php" style="color:white">Admin Login</a></button> &nbsp;&nbsp;
    <button class='btn btn-info' style="margin-top:7px;"><a href="volunteer/login.php" style="color:white">Volunteer Login</a></button>  &nbsp;&nbsp;
    <button class='btn btn-info' style="margin-top:7px;"><a href="login.php" style="color:white">User Login</a></button> &nbsp;&nbsp;
    </center>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
	
<!-- //Modal2 -->

   
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form"></div>
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot_password.php" method="POST" autocomplete="">
                    <h2 class="text-center" style="color:green;font-weight:bold">Forgot Password</h2><hr>
                    
                    <p >Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control btn btn-info" type="submit" name="check-email" value="Continue"><hr>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
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
<div class="footer" style="background:green;color:white">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><img src="../images/logo1.png" style="width:150px;height:90px;" alt=""></h2>
			<p style="color:white">AROGYA GRAMIN HEALTHCARE FOUNDATION
Arogya Gramin Arogya Bharat Ek Mission</p>
			
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.php" style="color:white">Home</a></li>
						<li><a href="about.php" style="color:white">About Us</a></li>
						<li><a href="womens.html" style="color:white">Contact Us</a></li>
						<li><a href="about.html" style="color:white">Career</a></li>
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
								<p>Support@Arogyagramin.Com</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid" style="background:orange;color:black">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Sumitra Shree 5A, Khemniack Bypass, Kankarbagh, Patna, Bihar, 800020 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd">
					<h4>Products & Services</h4>
					<ul>
                    <li><a href="user/application_form.php" style="color:white">Health Card</a></li>
                    <hr>
                      <li><a href="products.php" style="color:white">Sanitary Napkin Ayurvedic Medicine</a></li><hr>
                      <li><a href="" style="color:white">BP & Blood Sugar Check-up</a></li><hr>
                      <li><a href="book_op.php" style="color:white">Appointment Booking</a></li><hr>
                      <li><a href="" style="color:white">Health Camp</a></li><hr>
                      <li><a href="" style="color:white">Relief Fund</a></li>
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
    Copyright © 2021 Arogyagramin. All Rights Reserved.
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
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="../js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="../js/minicart.min.js"></script>
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
<script src="../js/easy-responsive-tabs.js"></script>
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
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="load.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
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
<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>