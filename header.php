<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?

					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';

			n.queue = [];
			t = b.createElement(e);
			t.async = !0;

			t.src = v;
			s = b.getElementsByTagName(e)[0];

			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',

			'https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '631993320792590');

		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=631993320792590&ev=PageView&noscript=1" /></noscript>

	<!-- End Facebook Pixel Code -->
	<title>Arogyagramin | Home</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />

	<link rel="stylesheet" href="assets/new/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/new/css/themify-icons.css">
	<link rel="stylesheet" href="assets/new/css/elegant-line-icons.css">
	<link rel="stylesheet" href="assets/new/css/animate.min.css">
	<link rel="stylesheet" href="assets/new/css/charitian-icons.min.css">
	<link rel="stylesheet" href="assets/new/css/odometer.min.css">
	<link rel="stylesheet" href="assets/new/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/new/css/slick.min.css">
	<link rel="stylesheet" href="assets/new/css/slider.css">
	<link rel="stylesheet" href="assets/new/css/venobox/venobox.css">
	<link rel="stylesheet" href="assets/new/css/main.css">
	<link rel="stylesheet" href="assets/new/css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">

	<script src="assets/new/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="https://kit.fontawesome.com/9c4a1edced.js"></script>

	<!-- <script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->

	<!--//tags -->

	<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">

	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/main.css" rel='stylesheet' type='text/css' /> -->

	<!-- //for bootstrap working -->

	<!-- <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

	<style>
		#dis {

			display: none;
		}

		@media screen and (min-width: 768px) {
			#dis {
				display: block;
			}
		}
	</style> -->
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start':

					new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],

				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =

				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);

		})(window, document, 'script', 'dataLayer', 'GTM-WDFVDPC');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body class="header-1">
	<div class="site-preloader-wrap">
		<div class="spinner"></div>
	</div>
	<header class="header header-one">
		<div class="top-header-one top-bar">
			<div class="containerone">
				<div class="top-bar-inner">
					<div class="top-left">
						<ul>
							<li>
								<div id="google_translate_element"></div>
								<script>
									function googleTranslateElementInit() {
										new google.translate.TranslateElement({
											pageLanguage: 'en',
											includedLanguages: 'hi,en',
											layout: google.translate.TranslateElement.InlineLayout.SIMPLE
										}, 'google_translate_element');
									}
								</script>
								<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
							</li>
							<li>Toll Free :<a href="tel:18008906600">1800 890 6600</a></li>
							<li>Healthcard :<a href="tel:18008898286">1800 889 8286</a></li>
							<li>Email: <a href="mailto:support@arogyagramin.com"> support@arogyagramin.com</a></li>
							<li>12A & 80G</li>
							<li>
								<?php
								if (isset($_SESSION['email'])) {
								?>
									<a href="logout.php">Logout</a>
								<?php
								} else {
								?>
									<a href="" data-toggle="modal" data-target="#myModal">login</a>
								<?php

								}

								?>
							</li>
						</ul>
					</div>
					<div class="top-right">
						<ul class="top-social">
							<li><a href="https://www.facebook.com/arogyagraminhealthcarefoundation" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCWuHT2-20eeI39or16hqiDg" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/company/arogyagramin" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="https://twitter.com/GraminCare" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/arogyagraminhealthcare/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://g.page/r/Cai6mR-r-KAoEBA" target="_blank"><i class="fa-solid fa-location-dot"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- /.top-bar -->
		<div class="primary-header-one primary-header">
			<div class="containerone">
				<div class="primary-header-inner pt-3">
					<div class="header-logo">
						<a href="index.php" class="d-flex">
							<img src="images/logo1.png" alt="Logo" style="width:130px;height:70px;" />
							<!-- <span id="arogyaone">AROGYA GRAMIN</span> -->
							<!-- <span id="arogyatwo">HEALTHCARE FOUNDATION</span> -->
							<!-- <h3>HEALTHCARE FOUNDATION</h3>							 -->
							<div>
								<h5 id="arogyaone">AROGYA&nbsp;GRAMIN</h5>
								<h5 id="arogyatwo">HEALTHCARE&nbsp;FOUNDATION</h5>
								<h5 id="arogyathree">Arogya Gramin Arogya Bharat Ek Mission</h5>
							</div>
						</a>
					</div><!-- /.header-logo -->
					<div class="header-menu-wrap">
						<ul class="dl-menu">
							<li><a href="index.php">Home</a>

							</li>
							<li><a href="javascript:void(0)">Tie-Up</a>
								<ul>
									<li><a href="hospital.php">Hospital</a></li>
									<li><a href="medical.php">Medical Store</a></li>
									<li><a href="lab.php">Patho Lab</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Department</a>
								<ul>
									<li><a href="management.php">Management Team</a></li>
									<li><a href="dpo.php">Dpo</a></li>
									<li><a href="bpo.php">Bpo</a></li>
									<li><a href="arogyamitra.php">Arogya Mitra</a></li>
									<li><a href="arogyamin.php">Arogya Center</a></li>
								</ul>
							</li>

							<li><a href="services.php">Services</a>

							</li>
							<li><a href="career.php">Carrer</a>
							</li>
							<li><a href="https://www.arogyagramin.in/">Blog</a></li>
							<li><a href="apply_healthcard2">Apply</a></li>
							<li><a href="about_us.php">About</a></li>
							<li><a href="contact_us.php">Contact Us</a></li>
						</ul>
					</div><!-- /.header-menu-wrap -->
					<div class="header-right">
						<a class="header-btn" href="https://rzp.io/l/vifXuc31">Donate Now<span></span></a>
						<!-- Burger menu -->
						<div class="mobile-menu-icon">
							<div class="burger-menu">
								<div class="line-menu line-half first-line"></div>
								<div class="line-menu"></div>
								<div class="line-menu line-half last-line"></div>
							</div>
						</div>
					</div><!-- /.header-right -->
				</div><!-- /.primary-header-one-inner -->
			</div>
		</div><!-- /.primary-header-one -->
	</header><!-- /.header-one -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDFVDPC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- header -->
	<!-- //header -->

	<!-- Modal1 -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">

		<div class="modal-dialog">

			<!-- Modal content-->

			<div class="modal-content support-modal">

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body modal-body-sub_agile" style="border-top:2px solid white; border-bottom:2px solid white;">

					<div class="col-md-12 modal_body_left modal_body_left1">
						<center><img src="./assets/images/logo1.png" class="mt-4" style="width:150px;height:87px;" alt="">
						</center>
						<h3 class="agileinfo_sign mt-5 text-center">Sign In <span>Now</span></h3>

						<center>

							<button class='button-6 first-button' style="margin-top:7px;">
								<a target=”_blank” href="admin/login.php">
									<p>
										<img src="./assets/images/admin.png" class="admin-image" />
									</p>
									Admin Login
								</a></button> &nbsp;&nbsp;

							<button class='button-6 two-button' style="margin-top:7px; margin-left:2rem"><a target=”_blank” href="volunteer/login.php">
									<p>
										<img src="./assets/images/team.png" class="admin-image" />
									</p>
									Partner Login
								</a></button> &nbsp;&nbsp;

							<!-- <button class='btn btn-info' style="margin-top:7px;"><a href="login.php" style="color:white">User Login</a></button> &nbsp;&nbsp;-->

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