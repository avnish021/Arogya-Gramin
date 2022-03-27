<?php include 'header.php'?>
<style>
             td{
                 padding:10px;
             }
            </style>
<div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container" style="background:rgba(0,0,0,0.50)">
			<h3 style="color:white"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>My Cart</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
								<li style='color:white'>My Cart</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
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
        echo "<center><br/><b class='btn btn-info'>Total : Rs. $sum</b>&nbsp;&nbsp;<b class='btn btn-danger' style='background:orange;border:orange;'><span style='font-size:13px;'><a href='place_order.php'>Place Order</a></span></b><center>";
mysqli_close($conn);
?>
  </div>
<?php include 'footer.php'?>