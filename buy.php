<?php include 'header.php'?>
<style>
             td{
                 padding:16px;
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
<div class="container">
<div class="row" style="margin-top:30px;">
<?php
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM `add_product` where id='$id'");
while($row = mysqli_fetch_assoc($result)){
		echo "<form method='post' action='product2.php?id=".$row['id']."&name=".$row['prodcut_name']."&description=".$row['description']."&price=".$row['price']."&discount=".$row['discount']."&img=".$row['photo']."'><input type='hidden' name='id' value='".$row['id']."'><div class='row' style='box-shadow:0px 0px 10px 0px;margin-top:10px;margin-bottom:20px;border-radius:6px;'><div class='col-sm-8'style='margin-top:20px;'><div class='row'><div class='col-sm-6'><center><img src='assets/images/product/".$row['photo']."' alt='' style='width:80%'><hr></center></div><div class='col-sm-6'><h4><b>".$row['prodcut_name']."</b></h4><p>".$row['description']."</p><br><br>Rs. ".$row['price']."<br><b>Quantity</b>&nbsp; <input type='number' name='quantity' class='form-control' style='width:80px;' required>&nbsp;<hr><br></div></div></div><div class='col-sm-4' style='margin-top:30px;'><table style='width:100%;padding:30px;'><tr><td>Price</td> <td><span style=''>Rs. ".$row['price']."</span></td></tr><br><tr><td>Discount</td> <td><span style=''>".$row['discount']."%</span></td></tr><br><tr><td>Delivery Charges</td> <td><span style=''>Free</span></td></tr><tr><td><b>Total Amount</b></td> <td><span style=''><b>Rs. ".$row['after_discount']."</b></span></td></tr><tr><td colspan='2'><a href='prodcut2.php?id=".$row['id']."&name=".$row['prodcut_name']."&description=".$row['description']."' style='float:right'><input type='submit' value='Buy Product' class='btn btn-info'></a></td><tr></table></div></div></form>";
        }
mysqli_close($conn);
?>

<div class="hs_margin_60"></div>
</div> 
</div>
<?php include 'footer.php'?>