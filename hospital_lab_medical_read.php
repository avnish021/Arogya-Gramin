<?php 
include 'header.php';
include 'connect.php';
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Tie-Up Details</h2>
            <div class="page-item">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Tie-Up Details</p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row align-items-center vh-100">
        <?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM tie_up where id='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			?>
        <div class="col-6 mx-auto" id="cardbox">
            <div class="card p-5">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold"><?php echo $row['hc_name']." ".$row['mstore'];?></h3>
                    <p class="card-text"><?php echo $row['doc_name'];?></p>
                    <ul class="event-list">
						<p><b>Business:</b><?php echo $row['b']." ".$row['b1']." ".$row['b2']." ".$row['b3']." ".$row['b4']." ".$row['b5']." ".$row['b6']." ".$row['b7']." ".$row['b8']." ".$row['b9']." ".$row['b10']." ".$row['b11']."</p><p><b>Offer</b> : ".$row['dsd']." ".$row['dsd1']." ".$row['dsd2']." ".$row['dsd3']." ".$row['dsd4']." ".$row['dsd5']." ".$row['dsd6']." ".$row['dsd7']." ".$row['dsd8']." ".$row['dsd9']." ".$row['dsd10']." ".$row['dsd11']." ".$row['dsd12']." ".$row['dsd13']." ".$row['dsd14']." ".$row['dsd15']." ".$row['dsd16']." ".$row['dsd17']." ".$row['dsd18']." ".$row['dsd19']." ".$row['dsd20']." ".$row['dsd21']." ".$row['dsd22']." ".$row['dsd23']." ".$row['dsd24']." ".$row['dsd25']." ".$row['dsd26'];?>
					</p>
					<p><b>Discount:</b><?php echo $row['percent'];?></p>
					<li><i class="fas fa-map-marker-alt"></i><?php echo $row['office_address'];?></li>
		
                </div>
            </div>
        </div>
    </div>
    <?php
                }
                } else {
                echo "No result";
                }
                ?>
</div>


<?php include 'footer.php'?>