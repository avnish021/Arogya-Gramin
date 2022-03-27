<?php include 'header.php'?>
<div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Department</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
								<li style='color:black'>Department</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<style>
    img:-moz-broken{
  opacity: 0;
}
img:-moz-broken{
  opacity: 0;
}

body {
  background-color: white;
}

img {  
  position: relative;
}

img::after {  
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: white;
}
</style>
<div class="container">
	<div class="row" style="margin-top:50px;margin-bottom:50px">
<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM dpo_bpo where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <div class='col-md-12><div class='portfolio-item'><div class='portfolio_doctor_details'><h4>".$row['post']."</h4><hr/><img src='assets/images/bpo_dpo/".$row['photo']."' style='width:200px;height:200px;' onerror='this.style.display='none''/><h4 style='font-weight: 600'>".$row['name']."</h4><hr><p><i style='color: #00aa59' class='fa fa-map-marker'></i>&nbsp;&nbsp;".$row['office_address']."</p><hr><p><b>District</b>&nbsp;&nbsp;".$row['distric']."<p><hr><p><b>Block :</b>&nbsp;&nbsp;".$row['block']."<p></div></div></div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

 

</div> 
</div>
<?php include 'footer.php'?>