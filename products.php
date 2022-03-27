<?php
session_start();
if(!isset($_SESSION['email']))
{
    // not logged in
    header('Location:login.php');
    exit();
}
?>
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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
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
				<center><h1><a href="index.php"><img src="images/logo1.png" style="width:150px;height:87px;" alt=""></a></h1></center>
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

<div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Product</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
								<li style='color:black'>Products</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container" style="margin-bottom:30px;">
		    <h3 class="wthree_text_info">Our Products</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list" style="background:none">
								<li style="background:none;width:100%">Products</li>
							
						</ul>
					<div class="">
					<!--/tab_one-->
						<div class="">
						<?php
							include 'connect.php';
							$result = mysqli_query($conn,"SELECT * FROM `add_product`");
							while($row = mysqli_fetch_assoc($result)){
									echo "<form method='post' action='product2.php?id=".$row['id']."&name=".$row['prodcut_name']."&description=".$row['description']."&price=".$row['price']."&discount=".$row['discount']."&img=".$row['photo']."'><input type='hidden' name='id' value='".$row['id']."'><div class='col-md-3 product-men'><div class='men-pro-item simpleCart_shelfItem'><div class='men-thumb-item'><img src='assets/images/product/".$row['photo']."' alt='' class='pro-image-front' style='height:270px;'><img src='assets/images/product/".$row['photo']."' alt='' class='pro-image-back' style='height:270px;'><div class='men-cart-pro'><div class='inner-men-cart-pro'><a href='buy.php?id=".$row['id']."' class='link-product-add-cart'>Buy Now</a></div></div></div><div class='item-info-product '><h4><a href='buy.php?id=".$row['id']."'>".$row['prodcut_name']."</a></h4><div class='info-product-price'><span class='item_price'<i style='color: #00aa59' class='fa fa-inr'></i>&nbsp;&nbsp;".$row['after_discount']."/-</span><del><i style='color: #00aa59' class='fa fa-inr'></i> ".$row['price']."/-</del><br>off &nbsp;".$row['discount']." % <br><p><b>Quantity:<b><input type='number' name='quantity' class='form-control' required></p></div><div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2'><a href='prodcut2.php?id=".$row['id']."&name=".$row['prodcut_name']."&description=".$row['description']."'><input type='submit' value='Add to cart' class='button'></a></div></div></div></div></form>";
									}
							mysqli_close($conn);
							?>

							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
<!--who we are start-->

<?php include 'footer.php'?>