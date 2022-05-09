<?php
include 'header.php';
include 'connect.php';
?>
<section class="contact-section bg-grey padding">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-7 sm-padding">
        <div class="contact-form">
          <div class="form-heading">
            <h3>Get in Touch With Us</h3>
            <p>Feel free to contact anyone for any problem, information or service, we will be happy to help you.</p>
          </div>
          <form action="" method="post" id="ajax_contact" class="form-horizontal">
            <div class="form-group colum-row row">
              <div class="col-sm-6">
                <input type="text" id="contact-firstname" name="name" class="form-control" placeholder="Name" required>
              </div>
              <input type="hidden" name="email" value="support@arogyagramin.com">
              <div class="col-sm-6">
                <input type="email" id="contact-email" name="email_1" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <input type="text" id="contact-phone" name="phone" class="form-control" placeholder="Phone Number" onKeyPress="if(this.value.length==10) return false;" min="10" required>
              </div>
              <div class="col-sm-6">
                <input type="text" id="contact-firstname" name="subject" class="form-control" placeholder="Subject" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <textarea id="contact-message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message" required></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <input type="checkbox" id="hs_checkbox" class="css-checkbox lrg" checked="checked" />
                Receive Your Comments By Email
              </div>
            </div>
            <button id="submit" class="default-btn" type="submit">Send Message<span></span></button>
            <div id="form-messages" class="alert" role="alert"></div>
          </form>
        </div>
      </div>
      <div class="col-lg-5 sm-padding">
        <div class="contact-content">
          <div class="contact-item mb-40">
            <h3>Get In Touch.</h3>
            <ul class="contact-details">
              <li><i class="fas fa-map-marker-alt"></i> Sumitra Shree 5A, Khemnichack Bypass, Kankarbagh, Patna, Bihar, 800020</li>
              <li><i class="fas fa-envelope"></i>support@arogyagramin.com</li>
              <li><i class="fas fa-phone"></i>Toll Free General Enquiry: (1800) 8906 600</li>
              <li><i class="fas fa-phone"></i>Healthcard/ Medical: (1800) 8898 286</li>
            </ul>
          </div>
          <div class="contact-item">
            <h3>Department Email ID For Support</h3>
            <ul class="contact-info">
              <li><i class="far fa-dot-circle"></i>Healthcard/IT Support: arogyagraminit@gmail.com</li>
              <li>(Note: Please do any work only after checking our offical number)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="map-wrapper">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7624.526634832133!2d85.14959971674429!3d25.595029799273796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed593206350de7%3A0x28a0f8ab1f99baa8!2sArogya%20Gramin%20Healthcare%20Foundation!5e0!3m2!1sen!2sin!4v1625478930939!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div><!-- /#google-map -->

<?php

if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $email_1 = $_POST['email_1'];
  $rdt = $_POST['rdt'];
  try {
    $sql = "INSERT INTO `contact_us` (`name`, `phone`, `email`, `subject`, `message`, `email_1`, `rdt`) VALUES ('$name', '$phone', '$email', '$subject', '$message', '$email_1', '$rdt')";
    if (mysqli_query($conn, $sql)) {
      $sender = "From: arogya001@arvisa.in";
      if (mail($email, $subject, $message, $sender)) {
        echo "<script>alert('Your Message Upload successfully !..');window.location.href='contact.php'</script>";
        exit();
      } else {
        echo "Error: " . $conn->error;
      }
    }
  } catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
  mysqli_close($conn);
}
?>
<?php include 'footer.php' ?>