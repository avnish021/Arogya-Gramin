<?php include 'header.php' ?>
<style>
  th {
    padding: 2px;
  }

  .preview {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background: #fff;
    z-index: 99;
    display: none;
    height: 100%;
  }
</style>
<div class="content" id="cardbox">
  <div>
    <div class="text-center padding">
      <h2 class="card-heading1">Apply For Health Card</h2>
    </div>
    <form id="submit" enctype="multipart/form-data" name="submit" action="Preview-Application" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Name">Name (नाम)<span class="required">*</span></label>
          <input type="text" name="name" max="50" id="name" class="form-control" placeholder="Enter Your Full Name" required>
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
          <input type="text" id="in_dob" placeholder="Date Of Birth" class="form-control" name="dob" readonly required="true">
          <script>
            $(function() {
              $("#in_dob").datepicker({
                dateFormat: 'dd-mm-yy',
                yearRange: '-120:+0',
                changeYear: true,
                changeMonth: true
              });
            });
          </script>
        </div>
        <div class="form-group col-md-6">
          <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span> </label>
          <input name="aadharno" type="number" id="aadharno" min="12" class="form-control" placeholder="Enter Correct Aadhaar No." required>
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
          <input name="pincode" type="number" id="pincode" class="form-control" placeholder="Enter Pin Code" min="6" required>
        </div>
        <div class="form-group col-md-6">
          <label for="imageFile">Upload Image (फोटो अपलोड करें)<span class="required">*</span> </label>
          <input type="file" name="imageFile" id="imageFile" class="form-control" onchange="readURL(this);" />
          <span class="required" id="spnmsg"></span>
        </div>
      </div>
      <div class="imgContainer" id="imgbox" style="display:none;"><img id="PassportImg" style="display: block;" src="#" alt="your image" required /></div>
      <div class="col-lg-12">
        <input type="checkbox" name="FamilyCard" id="FamilyCard" onclick="myFunction()" style="height:20px;width:20px" value="FamilyCard">&nbsp;Check if You are Applying for Family Card
      </div>
      <div id="familyDetails" class="mt-4" style="display:none;">
      </div>
      <button type="button" id="AddRow" style="display:none;" class="btn btn-secondary btn-sm">Add Row</button>
      <div class="form-row">
        <div class="form-group col-md-8 mt-4">
          <input type="reset" class="btn btn-danger mr-4 " name="Reset" value="Reset"> <input type="submit" class="btn btn-primary mr-4 " name="submit" value="Next">
        </div>
      </div>
  </div>
</div>
<script>
  var content = document.getElementById("familyDetails");
  var rows = 0;
  document.getElementById("AddRow").addEventListener("click", function() {
    var HTMLcontent = document.getElementById("familyDetails");
    if (rows !== 4) {
      content.innerHTML += `<div class="form-row">
            <div class="form-group col-md-3">
              <label for="Name">Member Name<span class="required">*</span></label>
              <input name="MemberName${rows}" type="text" class="form-control"
                placeholder="Enter Full Name" required>
            </div>
            <div class="form-group col-md-3">
              <label for="age">Member Age<span class="required">*</span></label>
              <input name="MemberAge${rows}" type="number" class="form-control"
                placeholder="Enter Age" required>
            </div>
            <div class="form-group col-md-3">
              <label for="gender">Member Gender<span class="required">*</span></label>
              <select name="MemberGender${rows}" class="form-control" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="relation">Relation<span class="required">*</span></label>
              <input name="MemberRelation${rows}" type="text" class="form-control"
                placeholder="Relation With Member" required>
            </div>
          </div>`;
      rows++;
    }
  })

  function myFunction() {
    var checkBox = document.getElementById("FamilyCard");
    if (checkBox.checked == true) {
      content.style.display = "block";
      document.getElementById("AddRow").style.display = "block";
    } else {
      content.style.display = "none";
      document.getElementById("AddRow").style.display = "none";
    }
  }
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
</script>

<?php include 'footer.php' ?>