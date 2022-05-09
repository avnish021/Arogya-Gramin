<?php 
include 'header.php';
include 'connect.php';
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Hospitals</h2>
            <div class="page-item">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Hospitals</p>
            </div>
        </div>
    </div>
</section>

<section class="event-section-2 bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="event-item">
                        <div class="event-thumb">
                            <img src="assets/new/img/event-1-450x420.jpg" alt="event">
                            <div class="date bg-red">
                                <h3>28<span>Jan</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-center">
                            <a href="event-details.html">
                                <h3>Fight For Right Cause</h3>
                            </a>
                            <ul class="event-list">
                                <li><i class="fas fa-clock"></i>10:00 AM</li>
                                <li><i class="fas fa-map-marker-alt"></i>New Work</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="event-item">
                        <div class="event-thumb">
                            <img src="assets/new/img/event-2-450x420.jpg" alt="event">
                            <div class="date bg-yellow">
                                <h3>28<span>sep</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-center">
                            <a href="event-details.html">
                                <h3>Education For Children</h3>
                            </a>
                            <ul class="event-list">
                                <li><i class="fas fa-clock"></i>09:00 AM</li>
                                <li><i class="fas fa-map-marker-alt"></i>New Work</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="event-item">
                        <div class="event-thumb">
                            <img src="assets/img/event-3-450x420.jpg" alt="event">
                            <div class="date bg-blue">
                                <h3>28<span>Feb</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-center">
                            <a href="#">
                                <h3>Help For Education</h3>
                            </a>
                            <ul class="event-list">
                                <li><i class="fas fa-clock"></i>11:00 AM</li>
                                <li><i class="fas fa-map-marker-alt"></i>New Work</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="event-item">
                        <div class="event-thumb">
                            <img src="assets/img/event-4-450x420.jpg" alt="event">
                            <div class="date bg-purple">
                                <h3>28<span>Jun</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-center">
                            <a href="event-details.html">
                                <h3>Water For Children</h3>
                            </a>
                            <ul class="event-list">
                                <li><i class="fas fa-clock"></i>12:00 AM</li>
                                <li><i class="fas fa-map-marker-alt"></i>New Work</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="event-item">
                        <div class="event-thumb">
                            <img src="assets/img/event-5-450x420.jpg" alt="event">
                            <div class="date bg-green">
                                <h3>28<span>Aug</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-center">
                            <a href="event-details.html">
                                <h3>Protect The Eco System</h3>
                            </a>
                            <ul class="event-list">
                                <li><i class="fas fa-clock"></i>01:00 AM</li>
                                <li><i class="fas fa-map-marker-alt"></i>New Work</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="event-item">
                        <div class="event-thumb">
                            <img src="assets/img/event-6-450x420.jpg" alt="event">
                            <div class="date bg-pink">
                                <h3>28<span>Mar</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-center">
                            <a href="event-details.html">
                                <h3>Help For Rohingya People</h3>
                            </a>
                            <ul class="event-list">
                                <li><i class="fas fa-clock"></i>08:00 AM</li>
                                <li><i class="fas fa-map-marker-alt"></i>New Work</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="event-section-2 bd-bottom padding">
    <div class="container">
        <div class="row">
            <?php
				
				$sql = "SELECT * FROM tie_up where type='Hospital'";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-4 col-md-6 padding-15">
                <div class="event-item">
                    <div class="event-thumb">
                        <img src="assets/new/img/hospital.png" alt="event">
                        <div class="date bg-red">
                            <h3><?php echo $row['percent']." OFF";?></h3>
                        </div>
                    </div>
                    <div class="event-content text-center">
                        <a href="event-details.html">
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
                echo "0 results";
                }


                ?>

        </div>
    </div>
</section>
<!-- 
    <section class="event-section bd-bottom padding">
        <div class="container">
            <div class="section-heading mb-40 text-center">
                <span class="sub-heading">Hospitals</span>
                <h2>Hospitals</h2>
                <p>Charitable giving as a religious act or duty is referred to as alms. The name <br>stems from the most
                    obvious expression of the virtue of charity.</p>
            </div><!-- /.section-heading -->
<div class="slider hospital-carousel nav-style carousel-dots">
    <?php
				
				$sql = "SELECT * FROM tie_up where type='Hospital'";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) { ?>



    <div class="event-item">

        <div class="event-thumb">
            <img src="assets/new/img/hospital.png" alt="event">
            <div class="date bg-red">
                <h3><?php echo $row['percent']." OFF";?></h3>
            </div>
        </div>
        <div class="event-content text-center">
            <a href="event-details.html">
                <h3><?php echo $row['hc_name'];?></h3>
            </a>
            <ul class="event-list">

                <li><i class="fas fa-map-marker-alt"></i><?php echo $row['office_address'];?></li>
            </ul>
        </div>
    </div>

    <!-- echo "<div class='col-sm-4' style='margin-top:20px;'>
                    <div style='box-shadow:0px 10px 10px 0px;width:96%;border-radius:6px;height:300px'>
                        <div style='width:98%;margin-top:20px;margin-bottom:20px;margin-left:7px;'>
                            <h4><br><b>".$row['hc_name']."</b></h4><br><span><i
                                    class='fa fa-map'></i>&nbsp;&nbsp;".$row['office_address']."</span><br><br><span><b>Discount
                                    :</b>&nbsp;&nbsp;".$row['percent']."</span>
                            <hr><a href='hospital_lab_medical_read.php?id=".$row[' id']."' class='btn btn-success'>Read
                                More</a>
                            <hr>
                        </div>
                    </div>
                </div>"; -->
    <?php
                }
                } else {
                echo "0 results";
                }


                ?>

</div>
</div>
</section> -->

<!-- ./ event-section -->


<div class="container">
    <div class="row" style="margin-top:50px">
        <center>
            <h3><u><b>Hospital</b></u></h3>
        </center>
        <br>
        <?php
            include 'connect.php';
            
            $sql = "SELECT * FROM tie_up where type='Hospital'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='col-sm-4' style='margin-top:20px;'><div style='box-shadow:0px 10px 10px 0px;width:96%;border-radius:6px;height:300px'><div style='width:98%;margin-top:20px;margin-bottom:20px;margin-left:7px;'><h4><br><b>".$row['hc_name']."</b></h4><br><span ><i class='fa fa-map'></i>&nbsp;&nbsp;".$row['office_address']."</span><br><br><span><b>Discount :</b>&nbsp;&nbsp;".$row['percent']."</span><hr><a href='hospital_lab_medical_read.php?id=".$row['id']."' class='btn btn-success'>Read More</a><hr></div></div></div>";
                }
            } else {
                echo "0 results";
            }
            
            $conn->close();
        ?>

    </div> <br></br>
</div>
</div>


<?php include 'footer.php'?>