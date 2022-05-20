<?php 
include 'header.php';
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tie_up where id='$id'";
$result = $conn->query($sql);
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Associate's Detailed View</h2>
            <p>All our associates voluntarily provide discounts as per the information given below. Keep in mind that all of them are our allies and work voluntarily for the benefit of the society and after identifying all our health card holders, they provide discounts to them. Please don't put any pressure on them. Contact the organization in case of any inconvenience.</p>
            <div class="page-item bannercenter">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Associate's Detailed View</p>
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br><section class="about-doctor-area section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="doctor-image">
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            if($row['type'] == 'Hospital'){
                                echo '<img src="assets/new/img/hospital.png" alt="single-doctor" />';
                            }
                            if($row['type'] == 'medical'){
                                echo '<img src="assets/new/img/pharmacy.png" alt="single-doctor" />';
                            }
                            if($row['type'] == 'Lab'){
                                echo '<img src="assets/new/img/microscope.png" alt="single-doctor" />';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM tie_up where id='$id'";
            $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {?>
            <div class="col-lg-6">
                <div class="doctor-info">
                    <div class="info-top">
                        <h2><?php echo $row['hc_name']." ".$row['mstore'];?></h2>
                        <div class="info-meta d-flex align-items-center justify-content-between">
                            <span class="catagory"><i class="fas fa-map-marker-alt" style="color:#FA575D;"></i>
                                <?php echo $row['office_address'];?></span>
                            <span class="fee">Discount:<?php echo $row['percent'];?></span>
                        </div>
                    </div>
                    <div class="info-bottom">
                        <h3>Sepcialization</h3>
                        <p><?php echo $row['b'].", ".$row['b1']." ".$row['b2']." ".$row['b3']." ".$row['b4']." ".$row['b5']." ".$row['b6']." ".$row['b7']." ".$row['b8']." ".$row['b9']." ".$row['b10']." ".$row['b11'] ?>
                        </p>

                    </div>
                    <div class="info-bottom">
                        <h3>Services</h3>
                        <p> <?php echo $row['dsd']." ".$row['dsd1']." ".$row['dsd2']." ".$row['dsd3']." ".$row['dsd4']." ".$row['dsd5']." ".$row['dsd6']." ".$row['dsd7']." ".$row['dsd8']." ".$row['dsd9']." ".$row['dsd10']." ".$row['dsd11']." ".$row['dsd12']." ".$row['dsd13']." ".$row['dsd14']." ".$row['dsd15']." ".$row['dsd16']." ".$row['dsd17']." ".$row['dsd18']." ".$row['dsd19']." ".$row['dsd20']." ".$row['dsd21']." ".$row['dsd22']." ".$row['dsd23']." ".$row['dsd24']." ".$row['dsd25']." ".$row['dsd26'];
                        ?>
                        </p>
                    </div>
                    <div class="info-bottom">
                        
                        <p>  <a href="book_op" class="default-btn">Book Appoitment<span></span></a>
                        
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


<!-- <div class="container">
   
        

            </div> -->
            </section><!-- ./ benifits-section-4 -->
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