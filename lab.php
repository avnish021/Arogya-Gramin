<?php 
include 'header.php';
include 'connect.php';
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Pathlo Lab</h2>
            <div class="page-item">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Pathlo Lab</p>
            </div>
        </div>
    </div>
</section>
<section class="event-section-2 bd-bottom padding">
    <div class="container">
        <div class="row">
            <?php
			   $sql = "SELECT * FROM tie_up where type='lab'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-4 col-md-6 padding-15">
                <div class="event-item">
                    <div class="event-thumb">
                        <img src="assets/new/img/microscope.png" alt="event" class="" style="padding:60px">
                        <div class="date bg-red">
                            <h3><?php echo $row['percent']." OFF";?></h3>
                        </div>
                    </div>
                    <div class="event-content text-center">
                        <a href="hospital_lab_medical_read.php?id=<?php echo $row['id']; ?>">
                            <h3><?php echo $row['hc_name'];?></h3>
                        </a>
                        <ul class="event-list">
                            <li><i class="fas fa-map-marker-alt"></i><?php echo $row['office_address'];?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
                }
                } else {
                echo "No patho lab found";
                }
                ?>
        </div>
    </div>
</section>



<?php include 'footer.php'?>