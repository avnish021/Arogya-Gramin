<?php include 'header.php'?>
<div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Management Team</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
								<li style='color:black'>Management Team</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<div class="container">
	<div class="row" style="margin-top:50px">
		<center><h3><u><b>Management Team</b></u></h3></center>
		<br>
			<?php
            include 'connect.php';
            
            $sql = "SELECT * FROM dpo_bpo where post='Management Team'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='col-sm-4' style='margin-top:20px;'><div style='box-shadow:0px 10px 10px 0px;width:96%;border-radius:6px;height:300px'><div style='width:98%;margin-top:20px;margin-bottom:20px;margin-left:7px;'><h4><br><b>".$row['name']."</b></h4><br><span ><i class='fa fa-map'></i>&nbsp;&nbsp;".$row['office_address']."</span><br><br><span><b><i class='fa fa-phone'></i> </b>&nbsp;&nbsp;".$row['phone']."</span><hr><a href='read_more.php?id=".$row['id']."' class='btn btn-success'>Read More</a><hr></div></div></div>";
                }
            } else {
                echo "0 results";
            }
            
            $conn->close();
        ?>
		
		
		</div>	<br></br>
	
	</div>
</div>
<?php include 'footer.php'?>
  