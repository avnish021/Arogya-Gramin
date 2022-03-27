<?php

include "../Classes/Database.php";
$obj = new Database();
$ID=base64_decode($_GET['RegId']);
if(!empty($ID)){
if($obj->Select("crad_details","*",null, "REGISTRATION='$ID'")){
foreach($obj->getResult() as list("V_ID"=>$vemail,"REGISTRATION"=>$registration,"NAME"=>$name,"GENDER"=>$gender,"DOB"=>$dob,"AADHAAR"=>$aadharno,"ADDRESS"=>$address,"BLOCK"=>$block,"DISTRICT"=>$district,"STATE"=>$state,"PINCODE"=>$pincode,"IMAGE"=>$imageFile,"MEMBER_NAME"=>$memberN,"MEMBER_AGE"=>$memberA,
"MEMBER_GENDER"=>$memberG,"MEMBER_RELATION"=>$memberR,"STATUS"=>$status,"TYPE"=>$type));
$MemberName = explode(",",$memberN);
$MemberAge = explode(",",$memberA);
$MemberGender = explode(",",$memberG);
$MemberRelation = explode(",",$memberR);
}
}else{
    exit;
}
if(isset($_POST['UpdateRecord'])){
extract($_POST);
 $memberN = "";
 $memberA = "";
 $memberG = "";
 $memberR = "";
if($_POST['FamilyCard']=="FamilyCard"){
    $type="Family_Card";
} else{
    $type = "Personal_Card";
}
for($i=0; $i<4; $i++){
    
     if(!empty($_POST["MemberName$i"])&&!empty($_POST["MemberAge$i"])&&!empty($_POST["MemberGender$i"])&&!empty($_POST["MemberRelation$i"])){
$memberN .= $_POST["MemberName$i"].",";
 $memberA .= $_POST["MemberAge$i"].",";
 $memberG .= $_POST["MemberGender$i"].",";
 $memberR .= $_POST["MemberRelation$i"].",";   
}
}
$uploads_dir = '/volunteer/Images';
 $tmp_name = $_FILES["imageFile"]["tmp_name"]; 
 $image = basename($_FILES["imageFile"]["name"]);
if(file_exists('Images/' . $_FILES['imageFile']['name'])){
  	
  	$ext1 = end (explode('.', $_FILES["imageFile"]["name"]));
  	
  	$image = md5 (rand()).'.'. $ext1; 
  	
}
move_uploaded_file($tmp_name, "$uploads_dir/$image");
$values=array("V_ID"=>$vemail,"REGISTRATION"=>$registration,"NAME"=>$name,"GENDER"=>$gender,"DOB"=>$dob,"AADHAAR"=>$aadharno,"ADDRESS"=>$address,"BLOCK"=>$block,"DISTRICT"=>$district,"STATE"=>$state,"PINCODE"=>$pincode,"MEMBER_NAME"=>$memberN,"MEMBER_AGE"=>$memberA,
"MEMBER_GENDER"=>$memberG,"MEMBER_RELATION"=>$memberR,"STATUS"=>$status,"TYPE"=>$type);
if($obj->Update("crad_details", $values,"REGISTRATION='$registration'")){
    
    echo '<script>alert("Detais Updated Successfully")</script>';   
 echo'<script>window.location.href = "/admin"</script>';
    
}else{
        echo '<script>alert("Some error! Please Try After Some Time")</script>';   
 echo'<script>window.location.href = "/admin/"</script>';
}

}
?>
<?php include 'header.php' ?>
<style>
    .container {
        margin-top: 10px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="page-content">
              <div class="main-wrapper">
                  
    <div class="container">
        <div class="text-center padding">
            <h2>Update Details</h2>
        </div>
        <form id="submit" enctype="multipart/form-data" name="submit" action="" method="post">
            
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Status<span class="required">*</span><span style="color:blue;"> (Please type Status in Capitalize Form Like Approved)</span></label>
                    <input type="text" name="status" max="50" id="status" value="<?php echo $status; ?>" class="form-control" placeholder="Enter Status" required>
                </div>
                
                 <div class="form-group col-md-6">
                    <label for="Name">Registration<span class="required">*</span></label>
                    <input type="text" name="r" max="50" id="r" value="<?php echo $registration; ?>" class="form-control" placeholder="" readonly>
                </div>
            
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name (नाम)<span class="required">*</span></label>
                    <input type="text" name="name" max="50" id="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter Your Full Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Gender">Gender (लिंग)<span class="required">*</span></label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value=" <?php echo $gender; ?>"><?php echo $gender; ?></option>
                         <option value="Male">Male</option>
              <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Mobile">Date Of Birth (जन्म तिथि)<span class="required">*</span></label>
                    <input type="text" id="in_dob" value="<?php echo $dob; ?>" placeholder="Date Of Birth" class="form-control" name="dob" required>
      <script> $(function () {
    $("#in_dob").datepicker({
      dateFormat: 'dd-mm-yy',
      yearRange: '-120:+0',
      changeYear: true,
      changeMonth: true
    });
  });</script>
                </div>
                <div class="form-group col-md-6">
                    <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span> </label>
                    <input name="aadharno" type="number" value="<?php echo $aadharno; ?>" id="aadharno" min="12" class="form-control" placeholder="Enter Correct Aadhaar No." required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Address">Full Address (पूरा पता)<span class="required">*</span></label>
                    <input name="address" type="text" value="<?php echo $address; ?>" id="address" class="form-control" placeholder="Enter Full Address" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="Block">Block (प्रखंड)<span class="required">*</span>
                    </label>
                    <input name="block" type="text" value="<?php echo $block; ?>" id="block" class="form-control" placeholder="Enter Block Name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="District">District (जिला)<span class="required">*</span> </label>
                    <input name="district" type="text" value="<?php echo $district; ?>" id="district" class="form-control" placeholder="Enter District Name" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="State">State (राज्य)<span class="required">*</span> </label>
                    <select name="state" id="state" class="form-control" required>
                        <option value="<?php echo $state; ?>"><?php echo $state; ?></option>
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
<input name="vemail" type="hidden" value="<?php echo $v_id; ?>">
<input name="registration" type="hidden" value="<?php echo $registration; ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="PinCode">PIN Code (पिन कोड) <span class="required">*</span> </label>
                    <input name="pincode" type="number" value="<?php echo $pincode; ?>" id="pincode" class="form-control" placeholder="Enter Pin Code" min="6" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="imageFile">Upload Image (फोटो अपलोड करें)<span class="required">*</span> </label>
                    <input type="file" name="imageFile" value="" id="imageFile" class="form-control" onclick"imgFunction();" onchange="readURL(this);"  />
                    <span class="required" style="color:red;" id="spnmsg"></span>
                </div>
            </div>
<style>
    .imgContainer{
        width:3cm;
         height:3.5cm;
         margin:10px;
    }
    #PassportImg{
      width:3cm;
         height:3.5cm;
         margin:10px;  
    }
      .imgContainer img{
        width:3cm;
         height:3.5cm;
         object-fit:cover;
    }
</style>
            <div class="imgContainer" id="imgbox" style="display:block;"><img id="PassportImg" style="display: block;" src="/volunteer/Images/<?php echo $imageFile; ?>" alt="your image"/></div>
            <div class="col-lg-12">
                <input type="checkbox" name="FamilyCard" id="FamilyCard" onclick="myFunction()" style="height:20px;width:20px" value="FamilyCard" <?php
                  if(!empty($MemberName['0'])&&!empty($MemberAge['0'])&&!empty($MemberGender['0'])&&!empty($MemberRelation['0'])){echo "checked"; } ?> >&nbsp;Check if You are Applying for Family Card
            </div>
            
            
            <?php
       if(empty($MemberName)){
           $MemberName = array("1","2");
           echo count($MemberName);
       }
       echo "<script> var rows = ".(count($MemberName)-1)."</script>"; 
       
      ?>
        <div id="button"> 
        <div id="familyDetails" class="mt-4 mb-4" style="<?php if(!empty($MemberName['0'])&&!empty($MemberAge['0'])&&!empty($MemberGender['0'])&&!empty($MemberRelation['0'])){ echo "display:block;"; }else{ echo "display:none;";} ?>">  
  <?php 
for($i=0; $i<4; $i++){
    
     if(!empty($MemberName[$i])&&!empty($MemberAge[$i])&&!empty($MemberGender[$i])&&!empty($MemberRelation[$i])){
?>        

    
   <div class="form-row ">
    
                    <div class="form-group col-md-3">
                        <label for="Name">Member Name<span class="required">*</span></label>
                        <input name="MemberName<?php echo $i; ?>" type="text" value="<?php echo $MemberName[$i]; ?>" class="form-control" placeholder="Enter Full Name" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age">Member Age<span class="required">*</span></label>
                        <input name="MemberAge<?php echo $i; ?>" type="number" value="<?php echo $MemberAge[$i]; ?>" class="form-control" placeholder="Enter Age" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="gender">Member Gender<span class="required">*</span></label>
                        <select name="MemberGender<?php echo $i; ?>" class="form-control" required>
                            <option value="<?php echo  $MemberGender[$i]; ?>"><?php echo $MemberGender[$i]; ?></option>
                             <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="relation">Relation<span class="required">*</span></label>
                        <input name="MemberRelation<?php echo $i; ?>" value="<?php echo $MemberRelation[$i]; ?>" type="text" class="form-control" placeholder="Relation With Member" required>
                    </div>
                </div>   
                
             

<?php        
        
    }else{
        break;
    }
}
          ?>    

        </div>
        
    <button type="button" id="AddRow" style="display:block;" class="btn btn-secondary btn-sm">Add Row</button>    
        
  </div>      
<script>
    function imgFunction(){
        return false;
    }
</script>
            
            <div class="form-row">
                <div class="form-group col-md-8 mt-4">
              <input type="submit" class="btn btn-primary mr-4 " name="UpdateRecord" value="Update">
                </div>
            </div>
            </center>
    </div>
</div>
</div>
</div>
</body>
<script>


  var content = document.getElementById("familyDetails");
function myFunction() {
    var checkBox = document.getElementById("FamilyCard");
    if (checkBox.checked == true) {
      content.style.display = "block";
      document.getElementById("AddRow").style.display = "block";
    } else {
    
    content.innerHTML = ` `;
        rows = 0;
 
      content.style.display = "none";
      document.getElementById("AddRow").style.display = "none";
    }
  }

  document.getElementById("AddRow").addEventListener("click", function () {
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

  
 

  // Image Validation
  $(function () {
    $("#imageFile").change(function () {
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

      reader.onload = function (e) {
        $('#PassportImg')
          .attr('src', e.target.result)
          .width(100)
          .height(120);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!--Meet Our Partners end-->
<div class="hs_margin_60"></div>
</div>
