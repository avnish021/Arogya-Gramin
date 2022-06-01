<?php include 'header.php' ?>
<section class="page-header padding">
  <div class="overlay"></div>
  <div class="container">
    <div class="page-content text-center">
      <h2>Join Our Team</h2>
      <p>Do the best you can in every task, no matter how unimportant it may seem at the time.<br> No one learns more about a problem than the person at the bottom<br> Don't suffer, start building your career join our team.</p>
      <div class="page-item bannercenter">
        <a href="index.php"><i class="ti-home"></i>Home </a>
        <p>Career</p>
      </div>
    </div>
  </div>
</section><!-- /.page-header -->
<section class="contact-section bg-grey padding">
  <div class="container">
    <div class="row mb-5">
      <div class="col d-flex justify-content-center text-center">
        <a href="Tie-up Application" target=”_blank” class="default-btn mr-2" style="margin-top:7px;">Tie-up Registration</a>
        <a target=”_blank” href="Affiliate Registration Form" class="default-btn-info ml-2" style="margin-top:7px;">Affilate Registration</a>
      </div>
    </div>
    <div class="row d-flex align-items-center">
      <div class="col-lg-12 sm-padding">
        <div class="contact-form">
          <div class="form-heading">
            <h3>Join Our Team</h3>
            <p>Business Opportunity - Franchise sell available contact us now (Limited Period Festival Offer Running)</p>
          </div>
          <form action="join_team.php" method="post" id="ajax_contact" class="form-horizontal">
            <div class="form-group colum-row row">
              <div class="col-sm-6">
                <input type="text" id="contact-firstname" name="name" class="form-control" placeholder="Name" required>
              </div>
              <div class="col-sm-6">
                <input type="email" id="contact-email" name="email_1" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <input type="number" id="contact-phone" name="phone" class="form-control" placeholder="Phone Number" onKeyPress="if(this.value.length==10) return false;" min="10" required>
              </div>
              <div class="col-sm-6">
                <input type="number" id="contact-firstname" name="alt_mobile" class="form-control" onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="Alternate Phone Number" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <select class="form-control" name="exp_year">
                  <option selected disabled>--Select Experience Year--</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control" name="exp_month">
                  <option selected disabled>--Select Experience Month--</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <select class="form-control" name="type">
                  <option value="" selected disabled>--Select Application For--</option>
                  <option value="Franchise">Franchise</option>
                  <option value="Arogya Mitra">Arogya Mitra</option>
                  <option value="Hospital Tie-up">Hospital Tie-up</option>
                  <option value="Medical Store Tie-up">Medical Store Tie-up</option>
                </select>
              </div>
              <div class="col-sm-6">
                <input type="text" id="contact-email" name="subject" class="form-control" placeholder="Subject" required>
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
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y") ?>">
            <button id="submit" class="default-btn" type="submit" name="save">Send<span></span></button>
            <div id="form-messages" class="alert" role="alert"></div>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</section>


<?php include 'footer.php' ?>