<?php include 'header.php'?>
<div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Hospital , Medical & Lab</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
								<li style='color:black'>Hospital , Medical & Lab</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<div class="container">
	<div class="row" style="margin-top:50px">
<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tie_up where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <div class='col-md-12><div class='portfolio-item'><div class='portfolio_doctor_details'><h4 style='font-weight: 600'>".$row['hc_name']." ".$row['mstore']."</h4><hr/><h4>".$row['doc_name']."</h4><hr><p><i style='color: #00aa59' class='fa fa-map-marker'></i>&nbsp;&nbsp;".$row['office_address']."</p><hr><p><b>Business :</b> ".$row['b']." ".$row['b1']." ".$row['b2']." ".$row['b3']." ".$row['b4']." ".$row['b5']." ".$row['b6']." ".$row['b7']." ".$row['b8']." ".$row['b9']." ".$row['b10']." ".$row['b11']."</p><p>Offer : ".$row['dsd']." ".$row['dsd1']." ".$row['dsd2']." ".$row['dsd3']." ".$row['dsd4']." ".$row['dsd5']." ".$row['dsd6']." ".$row['dsd7']." ".$row['dsd8']." ".$row['dsd9']." ".$row['dsd10']." ".$row['dsd11']." ".$row['dsd12']." ".$row['dsd13']." ".$row['dsd14']." ".$row['dsd15']." ".$row['dsd16']." ".$row['dsd17']." ".$row['dsd18']." ".$row['dsd19']." ".$row['dsd20']." ".$row['dsd21']." ".$row['dsd22']." ".$row['dsd23']." ".$row['dsd24']." ".$row['dsd25']." ".$row['dsd26']."</p><hr><p><b>Discount:</b>&nbsp;&nbsp;".$row['percent']."</p><hr></div></div></div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

 

</div> 
</div>
<?php include 'footer.php'?>