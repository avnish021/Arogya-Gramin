<?php 
include 'header.php';
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM dpo_bpo where id='$id'";
$result = $conn->query($sql);
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Department Details</h2>
            <div class="page-item bannercenter">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Department Details</p>
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br>
<section class="about-doctor-area section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="doctor-image">
                    <img src="assets/new/img/manager.png" alt="" />
                </div>
            </div>
            <?php
          $sql = "SELECT * FROM dpo_bpo where id='$id'";
            $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {?>
            <div class="col-lg-6">
                <div class="doctor-info">
                    <div class="info-top">
                        <h2><?php echo $row['post'];?></h2>
                        <div class="info-meta d-flex align-items-center justify-content-between">
                            <span class="catagory"><i class="fas fa-map-marker-alt" style="color:#FA575D;"></i>
                                <?php echo $row['office_address'];?></span>
                            <!-- <span class="fee">Discount:<?php echo $row['percent'];?></span> -->
                        </div>
                    </div>
                    <div class="info-bottom">
                        <h3>Name: &nbsp; <span class="font-weight-normal"><?php echo$row['name'];?></span></h3>
                    </div>
                    <div class="info-bottom">
                        <h3>Block: &nbsp; <span class="font-weight-normal"><?php echo $row['block'];?></span></h3>
                    </div>
                    <div class="info-bottom">
                        <h3>District: &nbsp; <span class="font-weight-normal"><?php echo $row['distric'];?></span></h3>
                    </div>
                    <div class="info-bottom">
                        <p> <a href="book_op" class="default-btn">Book Appoitment<span></span></a>
                        </p>
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
</section>
<section class="cta-section-3 bd-bottom padding">
	<div class="container">
		<div class="cta-wrap text-center">
			<div class="section-heading mb-40 text-center">
				<span class="sub-heading">How You Can Help</span>
				<h2>Help Us To Become More Effective!</h2>
				<p>We are working hard to give our best in the community. We expect a small contribution from you. <br>We hope that you will cooperate with us in the public interest.</p>
			</div><!-- /.section-heading -->
			<a href="donation_page.php" class="default-btn">Make a donation<span></span></a>
		</div>
	</div>
</section>
<div class="sponsor-section">
    <div class="container">
        <div class="slider sponsor-carousel nav-style">
            <div class="sponsor-item">
                <img src="assets/images/partner/1.jpg" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/2.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/3.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/4.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/5.jpg" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/6.png" alt="sponsor" width="100" height="70">
            </div>
            <div class="sponsor-item">
                <img src="assets/images/partner/7.png" alt="sponsor" width="100" height="70">
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>