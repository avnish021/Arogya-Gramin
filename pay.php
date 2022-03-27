<?php include 'header.php'?>
<style>
             td{
                 padding:10px;
             }
            </style>
    <div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container" style="background:rgba(0,0,0,0.50)">
			<h3 style="color:white"><i class="fa fa-money" aria-hidden="true"></i>Pay Order</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
								<li style='color:white'>Pay Order</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700" rel="stylesheet" type="text/css"><script src="checkout.js"></script>
<script>window.DISABLE_CHATBOT = true;
</script>

    <div class="container">
    <?php
include 'connect.php';
$user_id = $_SESSION['email'];
$sum = 0;
$result = mysqli_query($conn,"SELECT * FROM `e-card` where user_id='$user_id' and status='Pandding'");
while($row = mysqli_fetch_assoc($result)){
  $multi = $row['quantity'] * $row['price'];
  $sum += $row['total'];
		echo "<div class='row' style='box-shadow:0px 0px 10px 0px;margin-top:10px;'><div class='col-sm-8'style='margin-top:20px;'><div class='row'><div class='col-sm-6'><center><img src='assets/images/product/".$row['img']."' alt='' style='width:80%'><br><a href='remove.php?id=".$row['id']."' class='btn btn-danger'>Remove Product</a><hr></center></div><div class='col-sm-6'><h4><b>".$row['name']."</b></h4><p>".$row['description']."</p><br><br>Rs. ".$row['price']."<br><b>Quantity</b>&nbsp; ".$row['quantity']."&nbsp;<hr><br></div></div></div><div class='col-sm-4' style='margin-top:30px;'><table style='width:100%;padding:30px;'><tr><td>Price (".$row['quantity']." item)</td> <td><span style=''>Rs. ".$multi."</span></td></tr><br><tr><td>Discount</td> <td><span style=''>".$row['discount']."%</span></td></tr><br><tr><td>Delivery Charges</td> <td><span style=''>Free</span></td></tr><tr><td><b>Total Amount</b></td> <td><span style=''><b>Rs. ".$row['total']."</b></span></td></tr></table></div></div>";
    
        }
        echo "<center><br/><b class='btn btn-info'>Total : Rs. $sum</b>&nbsp;&nbsp;<button class='btn btn-danger' style='background:orange;border:orange;' id='paybtn' type='button'>Payment Now</button><center>";
mysqli_close($conn);
?>
    </div>
      

<!--
-->



    
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--<![endif]--><script>if(typeof jQuery == 'undefined')
  document.write(decodeURI("%3Cscript src='/assets/jquery-1.11.3.min.js'%3E%3C/script%3E"));</script>
  <script src="/app.js"></script>
<script async="" src="https://cdn.razorpay.com/static/analytics/bundle.js" onload="initAnalytics()"></script>
<script>function padStart(str) {return ('0' + str).slice(-2)}function demoSuccessHandler(transaction) {$('#paymentID').text(transaction.razorpay_payment_id);var paymentDate = new Date();$('#paymentDate').text(padStart(paymentDate.getDate()) + '.' + padStart(paymentDate.getMonth() + 1) + '.' + paymentDate.getFullYear() + ' ' + padStart(paymentDate.getHours()) + ':' + padStart(paymentDate.getMinutes()));setTimeout(function() {showModal('#demo-receipt-modal');}, 150);}</script>
 <?php
include 'connect.php';
$user_id = $_SESSION['email'];
$sum = 0;
$result = mysqli_query($conn,"SELECT * FROM `e-card` where user_id='$user_id' and status='Pandding'");
while($row = mysqli_fetch_assoc($result)){
  $multi = $row['quantity'] * $row['price'];
  $sum += $row['total'];
  $name = $row['name'];
		echo "";
    
        }
        echo "<script>var options = {key: 'rzp_live_3kSQpfqJydewRq', amount: '".$sum."00', name: '".$name."', description: '".$row['name']."', image: 'assets/images/logo1.png', handler: demoSuccessHandler, modal: { handleback: true}}</script>";
mysqli_close($conn);
?>
<script>window.r = new Razorpay(options);
document.getElementById('paybtn').onclick = function(){
  r.open()
  $('#optinchat-container').hide();
}</script>
  
<div class="hs_margin_60"></div>

</div>
<?php include 'footer.php'?>