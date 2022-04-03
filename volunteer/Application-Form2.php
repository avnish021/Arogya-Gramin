<?php include 'header.php';
ini_set('display_errors', 1);
include 'connect.php';
include "../Classes/Database.php";
$v_email = $_SESSION['v_email'];
$obj = new Database();
$obj->Select("card_discount", "*", null, "V_EMAIL='$v_id'", null, null);
foreach ($obj->getResult() as list(
  "PERSONAL_CARD_RATE" => $cardrate, "PERSONAL_DISCOUNT" => $discount,
  "FAMILY_CARD_RATE" => $familycrdrate, "FAMILY_CARD_DISCOUNT" => $familyCrdDis
));
$obj->Select("volunteer", "phone,personal_card,family_card,name", null, "v_email='$v_id'", null, null);
foreach ($obj->getResult() as list("phone" => $phone, "personal_card" => $plimit, "family_card" => $flimit, "name" => $vname));

//Global declaration
$date = date('Y-m-d');
$time = date('H:i:s');
$author = '';
if (isset($_SESSION['ID'])) {
  $author = $_SESSION['ID'];
}

if (isset($_POST["personalApply"])) {
  if ($plimit > 0) {
    $id = time();
    $name = ucwords($_POST["name"]);
    $email = $_POST["email"];
    $gender = ucwords($_POST["gender"]);
    $dob = $_POST["dob"];
    $aadhar = $_POST["aadhar"];
    $mobile = $_POST["mobile"];
    $address = ucwords($_POST["address"]);
    $block = ucwords($_POST["block"]);
    $district = ucwords($_POST["district"]);
    $state = ucwords($_POST["state"]);
    $pin = $_POST["pin"];
    //$pass = date("Y").strtoupper($name, 4);
    $password = "password";
    $type = "personal";
    $newlimit = $plimit - 1;
    $filename = $_FILES["imageFile"]["name"];
    $tempname = $_FILES["imageFile"]["tmp_name"];
    $folder = "assets/images/post" . $filename;
    move_uploaded_file($tempname, $folder);

    $query = "INSERT INTO `personalhealthcard` (`id`, `date`, `time`, `author`, `email`, `name`, `gender`, `dob`, `aadhar`, `mobile`, `address`, `block`, `district`, `state`, `pin`, `password`, `card_status`, `image`, `order_id`, `order_amount`, `order_status`, `order_time`)
                             VALUES ('$id', '$date', '$time', '$author', '$email', '$name', '$gender', '$dob', '$aadhar', '$mobile', '$address', '$block', '$district', '$state', '$pin', '$password', 'applied', '$filename', 0000, 00, 'By Volunteer', '$time');";
    $rs = mysqli_query($conn, "$query") or die(mysqli_error($conn));
    if (!$rs) {
      echo "<script>alert('Invalid Registration')</script>";
    } else {
      echo "<script>alert('Registration Successful')</script>";
      $update_query = "UPDATE `volunteer` SET `personal_card`='$newlimit' WHERE `id`='$author'";
      $update_rs = mysqli_query($conn, "$update_query") or die(mysqli_error($conn));
    }
  } else {
    echo "<script>alert('Your transaction limit is over!')</script>";
  }
}
if (isset($_POST["familyApply"])) {
  if ($flimit > 0) {
    $id = time();
    $name = ucwords($_POST["name"]);
    $email = $_POST["email"];
    $gender = ucwords($_POST["gender"]);
    $dob = $_POST["dob"];
    $aadhar = $_POST["aadhar"];
    $mobile = $_POST["mobile"];
    $address = ucwords($_POST["address"]);
    $block = ucwords($_POST["block"]);
    $district = ucwords($_POST["district"]);
    $state = ucwords($_POST["state"]);
    $pin = $_POST["pin"];
    $type = "family";
    $newlimit = $flimit - 1;
    $filename = $_FILES["imageFile"]["name"];
    $tempname = $_FILES["imageFile"]["tmp_name"];
    $folder = "assets/images/post" . $filename;
    move_uploaded_file($tempname, $folder);

    if (!empty($_POST["MemberName0"])) {
      $first_member_name = ucwords($_POST["MemberName0"]);
      $first_member_age = $_POST["MemberAge0"];
      $first_member_gender = ucwords($_POST["MemberGender0"]);
      $first_member_relation = ucwords($_POST["MemberRelation0"]);
    } else {
      $first_member_name = NULL;
      $first_member_age = NULL;
      $first_member_gender = NULL;
      $first_member_relation = NULL;
    }
    if (!empty($_POST["MemberName1"])) {
      $second_member_name = ucwords($_POST["MemberName1"]);
      $second_member_age = $_POST["MemberAge1"];
      $second_member_gender = ucwords($_POST["MemberGender1"]);
      $second_member_relation = ucwords($_POST["MemberRelation1"]);
    } else {
      $second_member_name = NULL;
      $second_member_age = NULL;
      $second_member_gender = NULL;
      $second_member_relation = NULL;
    }
    if (!empty($_POST["MemberName2"])) {
      $third_member_name = ucwords($_POST["MemberName2"]);
      $third_member_age = $_POST["MemberAge2"];
      $third_member_gender = ucwords($_POST["MemberGender2"]);
      $third_member_relation = ucwords($_POST["MemberRelation2"]);
    } else {
      $third_member_name = NULL;
      $third_member_age = NULL;
      $third_member_gender = NULL;
      $third_member_relation = NULL;
    }
    if (!empty($_POST["MemberName3"])) {
      $fourth_member_name = ucwords($_POST["MemberName3"]);
      $fourth_member_age = $_POST["MemberAge3"];
      $fourth_member_gender = ucwords($_POST["MemberGender3"]);
      $fourth_member_relation = ucwords($_POST["MemberRelation3"]);
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
      echo "<script>alert('Registration Successful')</script>";
      $update_query = "UPDATE `volunteer` SET `family_card`='$newlimit' WHERE `id`='$author'";
      $update_rs = mysqli_query($conn, "$update_query") or die(mysqli_error($conn));
    }
  } else {
    echo "<script>alert('Please purchase the limit of transaction!')</script>";
  }
}
?>
<!--<div class="rt-container">-->
<div class="content" id="cardbox">
  <!-- <div class="btn-group btn-group-toggle mt-2" data-toggle="buttons">
    <label class="btn btn-secondary active">
      <input type="radio" name="options" id="option2" autocomplete="off"> Single Card Limit : <?php //echo $plimit; ?>
    </label>
    <label class="btn btn-secondary active">
      <input type="radio" name="options" id="option3" autocomplete="off"> Family Card Limit : <?php //echo $flimit; ?>
    </label>
  </div> -->
  <br>
  <h5 class="text-center mb-5 mt-2">Welcome! Apply Arogya Gramin Card Now.</h5>
  <!-- Rounded tabs -->
  <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
    <li class="nav-item flex-sm-fill">
      <a id="home-tab" data-toggle="tab" href="#single" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Single Healthcard</a>
    </li>
    <li class="nav-item flex-sm-fill">
      <a id="profile-tab" data-toggle="tab" href="#family" role="tab" aria-controls="profile" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Family Healthcard</a>
    </li>
  </ul>
  <div id="myTabContent" class="tab-content">
    <div id="single" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-1 py-4 show active">
      <div>
        <form id="personal" enctype="multipart/form-data" name="personal" action="" method="post" style="margin-top: 22px;">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Name">Name (नाम)<span class="required">*</span></label>
              <input type="text" name="name" max="50" id="name" class="form-control" placeholder="Enter Your Full Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Email">Email (ईमेल)<span class="required">*</span></label>
              <input type="email" name="email" max="50" id="email" class="form-control" placeholder="Enter Your Email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Mobile">Mobile (मोबाइल)<span class="required">*</span></label>
              <input type="mobile" name="mobile" min="6000000000" max="9999999999" id="mobile" class="form-control" placeholder="Enter Your Mobile" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Gender">Gender (लिंग)<span class="required">*</span></label>
              <select name="gender" id="gender" class="form-control" required>
                <option value="">Select Your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Mobile">Date Of Birth (जन्म तिथि)<span class="required">*</span></label>
              <input type="date" id="in_dob" placeholder="Date Of Birth" class="form-control" name="dob" required="true">
            </div>
            <div class="form-group col-md-6">
              <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span> </label>
              <input name="aadhar" type="number" id="aadharno" min="100000000000" max="999999999999" class="form-control" placeholder="Enter Correct Aadhaar No." required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Address">Full Address (पूरा पता)<span class="required">*</span></label>
              <input name="address" type="text" id="address" class="form-control" placeholder="Enter Full Address" required>
            </div>

            <div class="form-group col-md-6">
              <label for="Block">Block (प्रखंड)<span class="required">*</span>
              </label>
              <input name="block" type="text" id="block" class="form-control" placeholder="Enter Block Name" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="District">District (जिला)<span class="required">*</span> </label>
              <input name="district" type="text" id="district" class="form-control" placeholder="Enter District Name" required>
            </div>

            <div class="form-group col-md-6">
              <label for="State">State (राज्य)<span class="required">*</span> </label>
              <select name="state" id="state" class="form-control" required>
                <option value="">Select State</option>
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
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="PinCode">PIN Code (पिन कोड) <span class="required">*</span> </label>
              <input name="pin" type="number" id="pincode" class="form-control" placeholder="Enter Pin Code" min="100000" max="999999" equired>
            </div>
            <div class="form-group col-md-6">
              <label for="Photo">Photo (तस्वीर) <span class="required">*</span> </label>
              <input type="file" name="imageFile" id="imageFile" class="form-control" onchange="readURL(this)" placeholder=" Your answer">
              <span class="required" id="spnmsg"></span>
            </div>
          </div>
          <div class="imgContainer" id="imgbox" style="display:none;"><img id="PassportImg" style="display: block;" src="#" alt="your image" required /></div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <button type="submit" name="personalApply" value="personalApply" class="btn btn-primary">Apply</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="family" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-1 py-4">
      <div>
        <form id="family" enctype="multipart/form-data" name="family" action="" method="post" style="margin-top: 22px;">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Name">Name (नाम)<span class="required">*</span></label>
              <input type="text" name="name" max="50" id="name" class="form-control" placeholder="Enter Your Full Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Email">Email (ईमेल)<span class="required">*</span></label>
              <input type="email" name="email" max="50" id="email" class="form-control" placeholder="Enter Your email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Mobile">Mobile (मोबाइल)<span class="required">*</span></label>
              <input type="mobile" name="mobile" min="6000000000" max="9999999999" id="mobile" class="form-control" placeholder="Enter Your Mobile" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Gender">Gender (लिंग)<span class="required">*</span></label>
              <select name="gender" id="gender" class="form-control" required>
                <option value="">Select Your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Mobile">Date Of Birth (जन्म तिथि)<span class="required">*</span></label>
              <input type="date" id="in_dob" placeholder="Date Of Birth" class="form-control" name="dob" required="true">

            </div>
            <div class="form-group col-md-6">
              <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span> </label>
              <input name="aadhar" type="number" id="aadharno" min="100000000000" max="999999999999" class="form-control" placeholder="Enter Correct Aadhaar No." required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Address">Full Address (पूरा पता)<span class="required">*</span></label>
              <input name="address" type="text" id="address" class="form-control" placeholder="Enter Full Address" required>
            </div>

            <div class="form-group col-md-6">
              <label for="Block">Block (प्रखंड)<span class="required">*</span></label>
              <input name="block" type="text" id="block" class="form-control" placeholder="Enter Block Name" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="District">District (जिला)<span class="required">*</span> </label>
              <input name="district" type="text" id="district" class="form-control" placeholder="Enter District Name" required>
            </div>

            <div class="form-group col-md-6">
              <label for="State">State (राज्य)<span class="required">*</span> </label>
              <select name="state" id="state" class="form-control" required>
                <option value="">Select State</option>
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
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="PinCode">PIN Code (पिन कोड) <span class="required">*</span> </label>
              <input name="pin" type="number" id="pincode" class="form-control" placeholder="Enter Pin Code" min="100000" max="999999" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Photo">Photo (तस्वीर) <span class="required">*</span> </label>
              <input type="file" name="imageFile" id="imageFile" class="form-control" onchange="readURL(this)" placeholder=" Your answer">
              <span class="required" id="spnmsg"></span>
            </div>
          </div>
          <div>
            <h4>Members information</h4>
          </div>
          <div id="familyDetails" class="mt-4" style="display:none;">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <button type="button" id="AddRow" class="btn btn-warning">Add members</button>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="submit" class="btn btn-primary mr-4 " name="familyApply" value="Apply">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End rounded tabs -->

  <div class="col-rt-12" style="margin-top:0px;">
         <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary active">
            <input type="radio" name="options" id="option2" autocomplete="off"> Single Card Limit : <?php echo $plimit; ?>
          </label>
          <label class="btn btn-secondary active">
            <input type="radio" name="options" id="option3" autocomplete="off"> Family Card Limit : <?php echo $flimit; ?>
          </label>
         </div>
        </div>
</div>
<!--</div>-->
<!--</section>-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
  var content = document.getElementById("familyDetails");
  var rows = 0;
  document.getElementById("AddRow").addEventListener("click", function() {
    var HTMLcontent = document.getElementById("familyDetails");
    if (rows !== 4) {
      content.innerHTML += `<div class="form-row" >
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
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="relation">Relation<span class="required">*</span></label>
              <input name="MemberRelation${rows}" type="text" class="form-control"
                placeholder="Relation With Member" required>
            </div>
          </div>`;
      rows++;
    }
  })

  // Image Validation
  $(function() {
    $("#imageFile").change(function() {
      // Get uploaded file extension
      var extension = $(this).val().split('.').pop().toLowerCase();

      // Create array with the files extensions that we wish to upload
      var validFileExtensions = ['jpeg', 'jpg', 'JPEG', 'JPG'];
      //Check file extension in the array.if -1 that means the file extension is not in the list.
      if ($.inArray(extension, validFileExtensions) == -1) {
        $('#spnmsg').text("Failed!! Please upload jpg file only.").show();
        $('#PassportImg').hide();
        // Clear fileuload control selected file
        $(this).replaceWith($(this).val('').clone(true));
        //Disable Submit Button
        $('#btnSubmit').prop('disabled', true);
      } else {
        // Check and restrict the file size to 50 KB.
        if ($(this).get(0).files[0].size > (50000)) {
          $('#spnmsg').text("Failed!! Max allowed file size is 50kb").show();
          $('#PassportImg').hide();

          // Clear fileuload control selected file
          $(this).replaceWith($(this).val('').clone(true));

          //Disable Submit Button
          $('#btnSubmit').prop('disabled', true);
        } else {
          //Clear and Hide message span
          $('#spnmsg').text('').hide();
          $('#PassportImg').show();
          //Enable Submit Button
          $('#btnSubmit').prop('disabled', false);
        }
      }
    });
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      document.getElementById("imgbox").removeAttribute("style");
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#PassportImg')
          .attr('src', e.target.result)
          .width(150)
          .height(200);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
  content.style.display = "block";
  document.getElementById("AddRow").style.display = "block";
</script>

<?php include 'footer.php' ?>