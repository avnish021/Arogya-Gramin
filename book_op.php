<?php 
include 'header.php';
include 'connect.php';
if(isset($_POST['save']))
{	 
    $select_dp = $_POST['select_dp'];
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $phone = $_POST['phone'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $rdt = $_POST['rdt'];
	 $sql = "INSERT INTO `book_appointment` (select_dp, name, phone, email, rdt, time, status, color)
	 VALUES ('$select_dp', '$name', '$phone', '$email', '$rdt', '---', 'False', 'red')";
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Thanks to visit Arogya Gramin We will make contact with you shortly.');window.location.href='index.php';</script>";
		//header('Location: ');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Appointment Booking</h2>
            <p>Being on time for appointments and meetings is a phase of self-discipline and evidence of self-respect.<br> Punctuality is a courteous complement the intelligent person pays to his associates.</p>
            <div class="page-item bannercenter">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>Appointment Booking</p>
            </div>
        </div>
    </div>
</section>
<section class="about-section-4 bd-bottom padding">
    <div class="container">
        <div class="about-wrap row d-flex align-items-center">
            <div class="col-md-6 sm-padding">
                <div class="section-heading text-left mb-20">
                    <span class="sub-heading">Our Thinking</span>
                    <h2>Frame of Mind</h2>
                    <ul class="about-list mb-20">
                        <li><i class="fas fa-thumbs-up"></i>Our customers and their safety are paramount in everything we do.
                        </li>
                        <li><i class="fas fa-thumbs-up"></i>We care about the community.</li>
                        <li><i class="fas fa-thumbs-up"></i>We care about the environment.
                        </li>
                        <li><i class="fas fa-thumbs-up"></i>Our people are our strength.
                        </li>
                        <li><i class="fas fa-thumbs-up"></i>We work ethically and professionally.</li>
                    </ul>
                </div><!-- /.section-heading -->
                <a href="services.php" class="default-btn">Learn More<span></span></a>
            </div>
			<div class="col-lg-6 col-md-6  sm-padding">
                <form action="book_op.php" method="post" id="volunteer-form" class="form-horizontal appointment-form">
                    <div class="section-heading">
                        <span>Appointment</span>
                        <h3>Book an Appointment</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <select class="form-control" name="select_dp">
                                <option>Select Department</option>
                                <option value="Doctor">Doctor Appoitment</option>
                                <option value="Hospital">Hospital Appoitment</option>
                                <option value="Query">Question or Query</option>
                                <option value="Franchise Partner">For Franchise</option>
                                
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="text" id="volunteer-form-name" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-12">
                            <input type="number" id="volunteer-form-phone" name="phone" class="form-control" placeholder="Phone No" onKeyPress="if(this.value.length==10) return false;" min="10" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="email" id="volunteer-email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="date" id="volunteer-phone" name="rdt" class="form-control" required> 
                        </div>
                    </div>
                    <button id="volunteer-submit" class="default-btn" name="save" type="submit">Submit
                        <span></span></button>
                    <div id="volunteer-form-messages" class="alert" role="alert"></div>
                </form>
            </div>
        </div>
    </div>
</section><!-- ./ about-section -->


<?php include 'footer.php'?>