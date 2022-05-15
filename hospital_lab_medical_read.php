<?php 
include 'header.php';
include 'connect.php';
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Tie-Up Details</h2>
            <div class="page-item bannercenter">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Tie-Up Details</p>
            </div>
        </div>
    </div>
</section>
<section class="about-doctor-area section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="doctor-image">
                    <img src="assets/new/img/profile4.jpg" alt="single-doctor" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="doctor-info">
                    <div class="info-top">
                        <h2>Gnik Conrel</h2>
                        <div class="info-meta d-flex align-items-center justify-content-between">
                            <span class="catagory">Gynycologist</span>
                            <span class="fee">Fee: $50</span>
                        </div>
                    </div>
                    <div class="info-bottom">
                        <h3>About The Doctor</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors.</p>
                        <a href="../signin.html" class="primary-btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="container">
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
            <div class="card p-5" style="border: none;">
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
                
</div> -->
<section class="testimonials-section bd-bottom bg-grey padding">
        <div class="container">
            <div class="section-heading mb-40 text-center">
                <span class="sub-heading">Clients Testimonial</span>
                <h2>What Other People are Saying</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div><!-- /.section-heading -->
            <div class="slider testimonials-carousel nav-style carousel-dots">
                <div class="testi-item">
                    <div class="testi-content">
                        <p>"Remember, if you ever need a helping hand, you’ll find one at the end of your arm. As you grow older, you will discover that you have two hands: one for helping yourself, the other for helping others."</p>
                    </div>
                    <div class="testi-info">
                        <img src="assets/new/img/testi-1.png" alt="thumb">
                        <h3>Kyle Frederick<span>Envato.Inc</span></h3>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="testi-content">
                        <p>"Remember, if you ever need a helping hand, you’ll find one at the end of your arm. As you grow older, you will discover that you have two hands: one for helping yourself, the other for helping others."</p>
                    </div>
                    <div class="testi-info">
                        <img src="assets/new/img/testi-2.png" alt="thumb">
                        <h3>Jérémie Ambroise<span>Charitian.Ceo</span></h3>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="testi-content">
                        <p>"Remember, if you ever need a helping hand, you’ll find one at the end of your arm. As you grow older, you will discover that you have two hands: one for helping yourself, the other for helping others."</p>
                    </div>
                    <div class="testi-info">
                        <img src="assets/new/img/testi-3.png" alt="thumb">
                        <h3>Ana Luiza Oliveira<span>Themeforest.Ceo</span></h3>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="testi-content">
                        <p>"Remember, if you ever need a helping hand, you’ll find one at the end of your arm. As you grow older, you will discover that you have two hands: one for helping yourself, the other for helping others."</p>
                    </div>
                    <div class="testi-info">
                        <img src="assets/new/img/testi-4.png" alt="thumb">
                        <h3>Marcos Fernando<span>Facebook.Org</span></h3>
                    </div>
                </div>
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