<?php include 'header.php'?>
<div class="container-fulid">
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Career</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i style="color:black">|</i></li>
								<li style='color:black'>Career</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<div class="container">
    
     <br> <center> <a href="Tie-up Application" target=”_blank” class="btn btn-danger" style="margin-top:7px;">Tie-up Registration</a>
         <a target=”_blank” href="Affiliate Registration Form" class="btn btn-info" style="margin-top:7px;">Affilate Registration</a>
         	<!--	<br><center>All tie-up procedures will be carried out as per our terms of work and will be completed after fulfillment of necessary conditions. Don't be panic we will always there for you to provide best of us. We are happy to provide best healthcare support to our card holder at least cost. </center></br>-->
      
	<div class="row" style="margin-top:50px">
		<center><h3><u><b>Join Our Team</b></u></h3></center>
		<br>
		<center>BUSINESS OPPORTUNITY - FRANCHISE SELL AVAILABE CONTACT US NOW (LIMITED PERIOD FESTIVAL OFFER RUNNING) </center><br>
		<form action="join_team.php" method="post">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="">Leave a Message</h4><hr>
      <div class="">
        <div class="row">
          <div class="col-sm-6">
            <label>Full Name</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-user"></i></button>
              </span>
              <input id="uname" name="name" type="text" class="form-control" placeholder="Full Name">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Email</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-envelope"></i></button>
              </span>
              <input id="uemail" name="email" type="text" class="form-control" placeholder="Email">
            </div>
            <!-- /input-group --> 
          </div>
          <div class="col-sm-6">
            <label>Mobile No.</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-phone"></i></button>
              </span>
              <input id="mnumber" type="text" name="phone" class="form-control" onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="Mobile Number">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Alternate Mobile No.</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-phone"></i></button>
              </span>
              <input id="amnumber" type="text" name="alt_mobile" class="form-control" onKeyPress="if(this.value.length==10) return false;" min="10" placeholder="Alternate Mobile Number">
            </div>
            <!-- /input-group --> 
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
              <label for="sel1">ExperienceYears</label>
              <select class="form-control" id="sel1" name="exp_year">
                <option>--Select Year--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
              <label for="sel1">ExperienceMonths</label>
              <select class="form-control" id="sel1" name="exp_month">
                <option>--Select Month--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <label for="sel1">Application For</label>
              <select class="form-control" id="sel1" name="type">
                <option value="">--Select Application For--</option>
                <option value="Franchise">Franchise</option>
                <option value="Arogya Mitra">Arogya Mitra</option>
                <option value="Hospital Tie-up">Hospital Tie-up</option>
                <option value="Medical Store Tie-up">Medical Store Tie-up</option>
              </select>
            </div>
            <!-- /input-group --> 
          </div>
          <div class="col-lg-12">
            <label>Subject</label>
            <div class="input-group"> <span class="input-group-btn">
              <button class="btn btn-success" type="button"><i class="fa fa-book"></i></button>
              </span>
              <input id="subject" type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <!-- /input-group --> 
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-12">
            <label>Message Text</label>
            <div class="form-group">
              <textarea id="message" name="message" class="form-control" rows="8"></textarea>
            </div>
            <!-- /input-group --> 
          </div>
          <p id="err"></p>
          <div class="form-group">
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="checkbox">
                <label>
                <input type="checkbox" id="hs_checkbox" class="css-checkbox lrg" checked="checked"/>
                <label for="hs_checkbox" name="checkbox69_lbl" class="css-label lrg hs_checkbox">Receive Your Comments By Email</label>
                </label>
              </div>
            </div>
            <input type="hidden" name="rdt" value="Saturday 3  July 2021">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <button id="em_sub" class="btn btn-success pull-right" name="save" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>



    
  </div>
  
  </form>
		
		
		</div> 	<br></br>
	</div>
</div>
<?php include 'footer.php'?>
  