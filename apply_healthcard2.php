<?php include 'header.php';
ob_start();
include 'connect.php';

//Global declaration
$date = date('Y-m-d');
$time = date('H:i:s');
$author = "self";

if (isset($_POST["personalApply"])) {
  $id = time();
  $name = ucwords($_POST["name"]);
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = $_POST["email"];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $gender = ucwords($_POST["gender"]);
  $dob = $_POST["dob"];
  $aadhar = $_POST["aadhar"];
  $mobile = $_POST["mobile"];
  $address = ucwords($_POST["address"]);
  $address = filter_var($address, FILTER_SANITIZE_STRING);
  $block = ucwords($_POST["block"]);
  $block = filter_var($block, FILTER_SANITIZE_STRING);
  $district = ucwords($_POST["district"]);
  $district = filter_var($district, FILTER_SANITIZE_STRING);
  $state = ucwords($_POST["state"]);
  $pin = $_POST["pin"];
  //$pass = date("Y").strtoupper($name, 4);
  $password = "password";
  $type = "personal";
  $filename = $_FILES["imageFile"]["name"];
  $tempname = $_FILES["imageFile"]["tmp_name"];
  $folder = "assets/images/post" . $filename;

  move_uploaded_file($tempname, $folder);

  $query = "INSERT INTO `personalhealthcard` (`id`, `date`, `time`, `author`, `email`, `name`, `gender`, `dob`, `aadhar`, `mobile`, `address`, `block`, `district`, `state`, `pin`, `password`, `card_status`, `image`, `order_id`, `order_amount`, `order_status`, `order_time`)

                         VALUES ('$id', '$date', '$time', '$author', '$email', '$name', '$gender', '$dob', '$aadhar', '$mobile', '$address', '$block', '$district', '$state', '$pin', '$password', 'applied', '$filename', NULL, NULL, 'Unpaid', NULL);";

  $rs = mysqli_query($conn, "$query") or die(mysqli_error($conn));
  if (!$rs) {
    echo "<script>alert('Invalid Registration')</script>";
  } else {
    $_SESSION['enroll_id'] = $id;
    $_SESSION['type'] = $type;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['email'] = $email;
    echo "<script>window.location.href='payment-redirect.php';</script>";
    exit;
    //header('Location: payment-redirect.php');
  }
}

if (isset($_POST["familyApply"])) {
  $id = time();
  $name = ucwords($_POST["name"]);
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = $_POST["email"];
  $gender = ucwords($_POST["gender"]);
  $dob = $_POST["dob"];
  $aadhar = $_POST["aadhar"];
  $mobile = $_POST["mobile"];
  $address = ucwords($_POST["address"]);
  $address = filter_var($address, FILTER_SANITIZE_STRING);
  $block = ucwords($_POST["block"]);
  $block = filter_var($block, FILTER_SANITIZE_STRING);
  $district = ucwords($_POST["district"]);
  $district = filter_var($district, FILTER_SANITIZE_STRING);
  $state = ucwords($_POST["state"]);
  $pin = $_POST["pin"];
  $type = "family";

  $filename = $_FILES["imageFile"]["name"];
  $tempname = $_FILES["imageFile"]["tmp_name"];
  $folder = "assets/images/post" . $filename;
  move_uploaded_file($tempname, $folder);

  if (!empty($_POST["MemberName0"])) {
    $first_member_name = ucwords($_POST["MemberName0"]);
    $first_member_name = filter_var($first_member_name, FILTER_SANITIZE_STRING);
    $first_member_age = $_POST["MemberAge0"];
    $first_member_gender = ucwords($_POST["MemberGender0"]);
    $first_member_relation = ucwords($_POST["MemberRelation0"]);
    $first_member_relation = filter_var($first_member_relation, FILTER_SANITIZE_STRING);
  } else {
    $first_member_name = NULL;
    $first_member_age = NULL;
    $first_member_gender = NULL;
    $first_member_relation = NULL;
  }

  if (!empty($_POST["MemberName1"])) {
    $second_member_name = ucwords($_POST["MemberName1"]);
    $second_member_name = filter_var($second_member_name, FILTER_SANITIZE_STRING);
    $second_member_age = $_POST["MemberAge1"];
    $second_member_gender = ucwords($_POST["MemberGender1"]);
    $second_member_relation = ucwords($_POST["MemberRelation1"]);
    $second_member_relation = filter_var($second_member_relation, FILTER_SANITIZE_STRING);
  } else {
    $second_member_name = NULL;
    $second_member_age = NULL;
    $second_member_gender = NULL;
    $second_member_relation = NULL;
  }

  if (!empty($_POST["MemberName2"])) {
    $third_member_name = ucwords($_POST["MemberName2"]);
    $third_member_name = filter_var($third_member_name, FILTER_SANITIZE_STRING);
    $third_member_age = $_POST["MemberAge2"];
    $third_member_gender = ucwords($_POST["MemberGender2"]);
    $third_member_relation = ucwords($_POST["MemberRelation2"]);
    $third_member_relation = filter_var($third_member_relation, FILTER_SANITIZE_STRING);
  } else {
    $third_member_name = NULL;
    $third_member_age = NULL;
    $third_member_gender = NULL;
    $third_member_relation = NULL;
  }

  if (!empty($_POST["MemberName3"])) {
    $fourth_member_name = ucwords($_POST["MemberName3"]);
    $forth_member_name = filter_var($forth_member_name, FILTER_SANITIZE_STRING);
    $fourth_member_age = $_POST["MemberAge3"];
    $fourth_member_gender = ucwords($_POST["MemberGender3"]);
    $fourth_member_relation = ucwords($_POST["MemberRelation3"]);
    $foruth_member_relation = filter_var($fourth_member_relation, FILTER_SANITIZE_STRING);
  } else {
    $fourth_member_name = NULL;
    $fourth_member_age = NULL;
    $fourth_member_gender = NULL;
    $fourth_member_relation = NULL;
  }

  $query = "INSERT INTO `familyhealthcard` (`id`, `date`, `time`, `author`, `email`, `name`, `gender`, `dob`, `aadhar`, `mobile`, `address`, `block`, `district`, `state`, `pin`, `password`, `card_status`, `image`, `order_id`, `order_amount`, `order_status`, `order_time`, `first_member_name`, `first_member_age`, `first_member_gender`, `first_member_relation`, `second_member_name`, `second_member_age`, `second_member_gender`, `second_member_relation`, `third_member_name`, `third_member_age`, `third_member_gender`, `third_member_relation`, `fourth_member_name`, `fourth_member_age`, `fourth_member_gender`, `fourth_member_relation`) 

                                    VALUES ('$id', '$date', '$time', '$author', '$email', '$name', '$gender', '$dob', '$aadhar', '$mobile', '$address', '$block', '$district', '$state', '$pin', '123456', 'Applied', '$filename', 'NULL', 'NULL', 'Unpaid', 'NULL', '$first_member_name', '$first_member_age', '$first_member_gender', '$first_member_relation', '$second_member_name', '$second_member_age', '$second_member_gender', '$second_member_relation', '$third_member_name', '$third_member_age', '$third_member_gender', '$third_member_relation', '$fourth_member_name', '$fourth_member_age', '$fourth_member_gender', '$fourth_member_relation');";

  $rs = mysqli_query($conn, "$query") or die(mysqli_error($conn));
  if (!$rs) {
    echo "<script>alert('Invalid Registration')</script>";
  } else {
    $_SESSION['enroll_id'] = $id;
    $_SESSION['type'] = $type;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['email'] = $email;
    echo "<script>window.location.href='payment-redirect.php';</script>";
    exit;
    //header('Location: payment-redirect.php');

  }
}
?>



<section class="page-header padding">
  <div class="overlay"></div>
  <div class="container">
    <div class="page-content text-center">
      <h2>Apply Health Card</h2>
      <p>Grat to look you here! Apply your Arogya Gramin Card now to avail all affordable healthcare services.
        <br> Your card will be delivered throughout the Email you are providing.
      </p>
      <div class="page-item bannercenter">
        <a href="/"><i class="ti-home"></i>Home </a>
        <p>Apply Health Card</p>
      </div>
    </div>
  </div>
</section><!-- /.page-header -->
<div class="row">
  <div class="col-md-5">
    <section class="contact-section padding">
      <div class="container">
        <div class="mb-5 text-justify">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur, vel in accusantium eaque, recusandae praesentium eos commodi repellendus optio dignissimos eveniet laborum a perspiciatis minima perferendis ipsa, velit sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur, vel in accusantium eaque, recusandae praesentium eos commodi repellendus optio dignissimos eveniet laborum a perspiciatis minima perferendis ipsa, velit sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur, vel in accusantium eaque, recusandae praesentium eos commodi repellendus optio dignissimos eveniet laborum a perspiciatis minima perferendis ipsa, velit sit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequatur, vel in accusantium eaque, recusandae praesentium eos commodi repellendus optio dignissimos eveniet laborum a perspiciatis minima perferendis ipsa, velit sit!
        </div>
      </div>
    </section>

  </div>
  <div class="col-md-7">
    <section class="contact-section bg-grey padding">
      <div class="container">
        <div class="mb-5">
          <div class="col d-flex justify-content-center text-center">
            <Button class="default-btn-info mr-2" id="single-button">Single Healthcard</Button>
            <Button class="default-btn-outline ml-2" id="family-button">Family Healthcard</Button>
          </div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="col-md-12 sm-padding">
            <div class="contact-form">
              <div id="single" class="px-1 py-2">
                <h3 class="text-center mb-5">Application for Single Health Card</h3>
                <form id="personal" enctype="multipart/form-data" name="personal" action="" method="post">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Name">Name (नाम)<span class="required">*</span></label>
                      <input type="text" name="name" max="50" class="form-control" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Email">Email (ईमेल)<span class="required">*</span></label>
                      <input type="email" name="email" max="50" class="form-control" placeholder="Enter Your Email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Mobile">Mobile (मोबाइल)<span class="required">*</span></label>
                      <input type="number" name="mobile" min="6000000000" max="9999999999" class="form-control" placeholder="Enter Your Mobile" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Gender">Gender (लिंग)<span class="required">*</span></label>
                      <select name="gender" class="form-control" required>
                        <option value="" selected disabled>--Select Your Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Mobile">Date Of Birth (जन्म तिथि)<span class="required">*</span></label>
                      <input type="date" placeholder="Date Of Birth" class="form-control" name="dob" required="true">
                    </div>
                    <div class="col-md-6">
                      <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span>
                      </label>
                      <input name="aadhar" type="number" min="100000000000" max="999999999999" class="form-control" placeholder="Enter Correct Aadhaar No." required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Address">Full Address (पूरा पता)<span class="required">*</span></label>
                      <input name="address" type="text" class="form-control" placeholder="Enter Full Address" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Block">Block (प्रखंड)<span class="required">*</span>
                      </label>
                      <input name="block" type="text" class="form-control" placeholder="Enter Block Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="District">District (जिला)<span class="required">*</span> </label>
                      <input name="district" type="text" class="form-control" placeholder="Enter District Name" required>
                    </div>
                    <div class="col-md-6">
                      <label for="State">State (राज्य)<span class="required">*</span> </label>
                      <select name="state" class="form-control" required>
                        <option value="" selected disabled>--Select State--</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="PinCode">PIN Code (पिन कोड) <span class="required">*</span> </label>
                      <input name="pin" type="number" class="form-control" placeholder="Enter Pin Code" min="100000" max="999999" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Photo">Photo (तस्वीर) <span class="required">*</span> </label>
                      <input type="file" name="imageFile" id="imageFile" class="form-control" onchange="readURL(this)">
                      <span class="required" id="spnmsg"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <button type="submit" name="personalApply" value="personalApply" class="default-btn">Apply</button>
                    </div>
                  </div>
                </form>
              </div>
              <div id="family" class="px-1 py-2">
                <h3 class="text-center mb-5">Application for Family Health Card</h3>
                <form id="family" enctype="multipart/form-data" name="family" action="" method="post">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Name">Name (नाम)<span class="required">*</span></label>
                      <input type="text" name="name" max="50" class="form-control" placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Email">Email (ईमेल)<span class="required">*</span></label>
                      <input type="email" name="email" max="50" class="form-control" placeholder="Enter Your email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Mobile">Mobile (मोबाइल)<span class="required">*</span></label>
                      <input type="number" name="mobile" min="6000000000" max="9999999999" class="form-control" placeholder="Enter Your Mobile" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Gender">Gender (लिंग)<span class="required">*</span></label>
                      <select name="gender" class="form-control" required>
                        <option value="" selected disabled>--Select Your Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Mobile">Date Of Birth (जन्म तिथि)<span class="required">*</span></label>
                      <input type="date" placeholder="Date Of Birth" class="form-control" name="dob" required="true">
                    </div>
                    <div class="col-md-6">
                      <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span>
                      </label>
                      <input name="aadhar" type="number" min="100000000000" max="999999999999" class="form-control" placeholder="Enter Correct Aadhaar No." required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Address">Full Address (पूरा पता)<span class="required">*</span></label>
                      <input name="address" type="text" class="form-control" placeholder="Enter Full Address" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Block">Block (प्रखंड)<span class="required">*</span></label>
                      <input name="block" type="text" class="form-control" placeholder="Enter Block Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="District">District (जिला)<span class="required">*</span> </label>
                      <input name="district" type="text" class="form-control" placeholder="Enter District Name" required>
                    </div>
                    <div class="col-md-6">
                      <label for="State">State (राज्य)<span class="required">*</span> </label>
                      <select name="state" class="form-control" required>
                        <option value="" selected disabled>--Select State--</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="PinCode">PIN Code (पिन कोड) <span class="required">*</span> </label>
                      <input name="pin" type="number" class="form-control" placeholder="Enter Pin Code" min="100000" max="999999" required>
                    </div>
                    <div class="col-md-6">
                      <label for="Photo">Photo (तस्वीर) <span class="required">*</span> </label>
                      <input type="file" name="imageFile" id="imageFile" class="form-control" onchange="readURL(this)" placeholder="Your answer">
                      <span class="required" id="spnmsg"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <h3 style="margin-bottom:22px;">Members information</h3>
                      <div id="familyDetails" class="mt-4" style="display:none;">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <button type="button" id="AddRow" class="btn btn-warning">Add members</button>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <button type="submit" class="default-btn" name="familyApply" value="Apply">Apply</button>
                    </div>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<div class="row mt-5 mb-3">
  <div class="col-12 d-flex justify-content-center">
    <h4>To know more about Arogya Gramin Health Card click button below</h4>
  </div>
  <div class="col-12 d-flex justify-content-center">
    <a href="https://www.arogyagramin.in/2022/03/blog-post.html" target="_blank" class="btn btn-danger mr-2">Read More Hindi</a>
    <a href="tel:18008898286" class="btn btn-success ml-2">Click to Call</a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  var content = document.getElementById("familyDetails");
  var rows = 0;
  document.getElementById("AddRow").addEventListener("click", function() {
    var HTMLcontent = document.getElementById("familyDetails");
    if (rows !== 4) {
      var html = `<div id="inputFormRow">
      <div class="form-row" >
            <div class="form-group col-md-6">
              <label for="Name">Member Name<span class="required">*</span></label>
              <input name="MemberName${rows}" type="text" class="form-control"
                placeholder="Enter Full Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="age">Member Age<span class="required">*</span></label>
              <input name="MemberAge${rows}" type="number" class="form-control"
                placeholder="Enter Age" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="gender">Member Gender<span class="required">*</span></label>
              <select name="MemberGender${rows}" class="form-control" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                  <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="relation">Relation<span class="required">*</span></label>
              <input name="MemberRelation${rows}" type="text" class="form-control"
                placeholder="Relation With Member" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-12">
              <button type="button" id="removeRow" class=" btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
            </div>
            </div>
      </div>
      <br>
      </div>`;
      $('#familyDetails').append(html);
      rows++;
    }
  });
  content.style.display = "block";
  document.getElementById("AddRow").style.display = "block";

  // remove row
  $(document).on('click', '#removeRow', function() {
    $(this).closest('#inputFormRow').remove();
    rows--;
  });
</script>
<script>
  $('#single').show();
  $('#family').hide();
  $(document).on('click', '#single-button', function() {
    $('#single').show();
    $('#family').hide();
    $('#single-button').addClass("default-btn-info");
    $('#family-button').addClass("default-btn-outline");
    $('#single-button').removeClass("default-btn-outline-info");
    $('#family-button').removeClass("default-btn");
  });
  $(document).on('click', '#family-button', function() {
    $('#single').hide();
    $('#family').show();
    $('#single-button').addClass("default-btn-outline-info");
    $('#family-button').addClass("default-btn");
    $('#single-button').removeClass("default-btn-info");
    $('#family-button').removeClass("default-btn-outline");
  });
</script>
<?php include 'footer.php' ?>