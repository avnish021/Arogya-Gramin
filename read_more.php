<?php 
include 'header.php';
include 'connect.php';
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Department Details</h2>
            <div class="page-item">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Department Details</p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row align-items-center vh-100">
        <?php
	$id = $_GET['id'];
  $sql = "SELECT * FROM dpo_bpo where id='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			?>
        <div class="col-6 mx-auto" id="cardbox">
            <div class="card p-5">
                <div class="card-body">
                    <h3 class="card-title font-weight-bold"><?php echo $row['post'];?></h3>
                    <p class="card-text"><?php echo$row['name'];?></p>
                    <ul class="event-list">
                        </p>
                        <p><b>Block:</b>&nbsp;<?php echo $row['block'];?></p>
                        <p><b>Distric:</b>&nbsp;<?php echo $row['distric'];?></p>
                        <li><i class="fas fa-map-marker-alt"></i><?php echo $row['office_address'];?></li>
    </ul>
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
</div>
<?php include 'footer.php'?>