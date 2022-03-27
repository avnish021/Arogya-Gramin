<?php
include "../Classes/Database.php";
$obj = new Database();
include "header.php";
date_default_timezone_set("Asia/Calcutta");  
$date =  date('d/m/Y');
if(isset($_POST['AddRecord'])){
extract($_POST);
$registration =$_POST['registration'];
$memberN = "";
 $memberA = "";
 $memberG = "";
 $memberR = "";
if(!empty($_POST['MemberName0'])){
    $type="Family_Card";
}
if(empty($_POST['MemberName0'])){
    $type = "Personal_Card";
}
$obj->Select("crad_details","*",null,"REGISTRATION = '$registration'"); 
foreach ($obj->getResult() as list("REGISTRATION"=>$fetchReg));
if($registration==$fetchReg){
      echo '<script>alert("Record Already Saved!")</script>';   
 echo'<script>window.location.href = "/volunteer/"</script>';  
}
$img=$imageFile;
for($i=0; $i<4; $i++){
    
     if(!empty($_POST["MemberName$i"])&&!empty($_POST["MemberAge$i"])&&!empty($_POST["MemberGender$i"])&&!empty($_POST["MemberRelation$i"])){
 $memberN .= $_POST["MemberName$i"].",";
 $memberA .= $_POST["MemberAge$i"].",";
 $memberG .= $_POST["MemberGender$i"].",";
 $memberR .= $_POST["MemberRelation$i"].",";   
}
}
 
$values=array("V_ID"=>$vemail,"REGISTRATION"=>$registration,"NAME"=>$name,"GENDER"=>$gender,"DOB"=>$dob,"AADHAAR"=>$aadharno,"ADDRESS"=>$address,"BLOCK"=>$block,"DISTRICT"=>$district,"STATE"=>$state,"PINCODE"=>$pincode,"IMAGE"=>$imageFile,"MEMBER_NAME"=>$memberN,"MEMBER_AGE"=>$memberA,
"MEMBER_GENDER"=>$memberG,"MEMBER_RELATION"=>$memberR,"STATUS"=>"Initiated","TYPE"=>$type,"DATE"=>$date);
$obj->Select("volunteer","*",null,"v_email = '$v_id'"); 
foreach ($obj->getResult() as list("personal_card"=>$personalCrd,"family_card"=>$familyCrd));

if($type=="Personal_Card"&&$personalCrd>0){
$leftcrd  =$personalCrd - 1; 
$leftArr = array("personal_card"=>$leftcrd);
 $obj->Update("volunteer",$leftArr,"v_email = '$v_id'");      
}elseif($type=="Personal_Card"&&$personalCrd==0){
 echo '<script>alert("Your Personal Card Limit is Over!")</script>';   
 echo'<script>window.location.href = "/volunteer/"</script>'; 
 exit;
}

if($type=="Family_Card" && $familyCrd>0){
  $leftcrd  =$familyCrd - 1; 
$leftArr = array("family_card"=>$leftcrd);
 $obj->Update("volunteer",$leftArr,"v_email = '$v_id'");      
}elseif($type=="Family_Card"&&$familyCrd==0){
  echo '<script>alert("Your Family Card Limit is Over!")</script>';   
 echo'<script>window.location.href = "/volunteer/"</script>';
 exit;
}
if($obj->Insert("crad_details", $values)){

copy("TempImages/$imageFile", "Images/$imageFile");
 unlink("TempImages/$imageFile");
 unlink("TempImages/");


echo '<script>alert("Detais Added Successfully")</script>';   
 echo'<script>window.location.href = "/volunteer/"</script>';
}else{
    echo '<script>alert("Please Try Again")</script>'; 
     echo'<script>window.location.href = "/volunteer/"</script>';
}
}
if (isset($_POST['submit'])) {
    extract($_POST);

$uploads_dir = 'TempImages';

        $tmp_name = $_FILES["imageFile"]["tmp_name"];
        $img = basename($_FILES["imageFile"]["name"]);
        if(file_exists('TempImages/' . $_FILES['imageFile']['name'])||file_exists('Images/' . $_FILES['imageFile']['name'])){
  	
  	$ext1 = end (explode('.', $_FILES["imageFile"]["name"]));
  	
  	$img = md5 (rand()).'.'. $ext1; 
  	
}
        move_uploaded_file($tmp_name, "$uploads_dir/$img");
    

}
?>

<style>
    .container {
        margin-top: 100px;
    }
</style>


<div class="content">
    <div class="container">
        <div class="text-center padding">
            <h2>Please Verify Your Details</h2>
        </div>
        <form id="submit" enctype="multipart/form-data" name="submit" action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">

              <label for="Name">Name (नाम)<span class="required">*</span></label>
                    <input type="text" name="name" max="50" id="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter Your Full Name" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="Gender">Gender (लिंग)<span class="required">*</span></label>
                    <select name="gender" id="gender" class="form-control" readonly>
                        <option value=" <?php echo $gender; ?>"><?php echo $gender; ?></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Mobile">Date Of Birth (जन्म तिथि)<span class="required">*</span></label>
                    <input type="text" id="in_dob" value="<?php echo $dob; ?>" placeholder="Date Of Birth" class="form-control" name="dob" readonly required="true">
      <input name="registration" type="hidden" class="form-control" value="<?php echo RandomAppNo();?>"
              required>
                </div>
                <div class="form-group col-md-6">
                    <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span> </label>
                    <input name="aadharno" type="number" value="<?php echo $aadharno; ?>" id="aadharno" min="12" class="form-control" placeholder="Enter Correct Aadhaar No." readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Address">Full Address (पूरा पता)<span class="required">*</span></label>
                    <input name="address" type="text" value="<?php echo $address; ?>" id="address" class="form-control" placeholder="Enter Full Address" readonly>
                </div>

                <div class="form-group col-md-6">
                    <label for="Block">Block (प्रखंड)<span class="required">*</span>
                    </label>
                    <input name="block" type="text" value="<?php echo $block; ?>" id="block" class="form-control" placeholder="Enter Block Name" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="District">District (जिला)<span class="required">*</span> </label>
                    <input name="district" type="text" value="<?php echo $district; ?>" id="district" class="form-control" placeholder="Enter District Name" readonly>
                </div>

                <div class="form-group col-md-6">
                    <label for="State">State (राज्य)<span class="required">*</span> </label>
                    <select name="state" id="state" class="form-control" readonly>
                        <option value="<?php echo $state; ?>"><?php echo $state; ?></option>
                    </select>
                </div>
            </div>
<input name="vemail" type="hidden" value="<?php echo $v_id; ?>">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="PinCode">PIN Code (पिन कोड) <span class="required">*</span> </label>
                    <input name="pincode" type="number" value="<?php echo $pincode; ?>" id="pincode" class="form-control" placeholder="Enter Pin Code" min="6" readonly>
                </div>

                <div class="form-group col-md-6">
                    <label for="imageFile">Upload Image (फोटो अपलोड करें)<span class="required">*</span> </label>
                    <input type="text" name="imageFile" value="<?php echo $img; ?>" id="imageFile" class="form-control" onclick"imgFunction();" onchange="readURL(this);" readonly />
                    <span class="required" id="spnmsg"></span>
                </div>
            </div>

            <div class="imgContainer" id="imgbox" style="display:block;"><img id="PassportImg" style="display: block;" src="TempImages/<?php echo $img; ?>" alt="your image" required /></div>
            <div class="col-lg-12">
                <input type="checkbox" name="FamilyCard" id="FamilyCard" onclick="myFunction()" style="height:20px;width:20px" value="FamilyCard" <?php
                  if(!empty($_POST["MemberName0"])&&!empty($_POST["MemberAge0"])&&!empty($_POST["MemberGender0"])&&!empty($_POST["MemberRelation0"])){echo "checked"; } ?> disabled>&nbsp;Check if You are Applying for Family Card
            </div>
<?php 
for($i=0; $i<4; $i++){
    
     if(!empty($_POST["MemberName$i"])&&!empty($_POST["MemberAge$i"])&&!empty($_POST["MemberGender$i"])&&!empty($_POST["MemberRelation$i"])){
?>        
        
        
   <div class="form-row mt-4">
                    <div class="form-group col-md-3">
                        <label for="Name">Member Name<span class="required">*</span></label>
                        <input name="MemberName<?php echo $i; ?>" type="text" value="<?php echo $_POST["MemberName$i"]; ?>" class="form-control" placeholder="Enter Full Name" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age">Member Age<span class="required">*</span></label>
                        <input name="MemberAge<?php echo $i; ?>" type="number" value="<?php echo $_POST["MemberAge$i"]; ?>" class="form-control" placeholder="Enter Age" readonly>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="gender">Member Gender<span class="required">*</span></label>
                        <select name="MemberGender<?php echo $i; ?>" class="form-control" readonly>
                            <option value="<?php echo $_POST["MemberGender$i"]; ?>"><?php echo $_POST["MemberGender$i"]; ?></option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="relation">Relation<span class="required">*</span></label>
                        <input name="MemberRelation<?php echo $i; ?>" value="<?php echo $_POST["MemberRelation$i"]; ?>" type="text" class="form-control" placeholder="Relation With Member" readonly>
                    </div>
                </div>       
        
        
        
        
        
        
<?php        
        
    }else{
        break;
    }
}
          ?>    


<script>
    function imgFunction(){
        return false;
    }
</script>
            <button type="button" id="AddRow" style="display:none;" class="btn btn-secondary btn-sm">Add Row</button>
            <div class="form-row">
                <div class="form-group col-md-8 mt-4">
                    <a href="javascript:void();"   class="btn btn-danger" onclick="history.back()">Edit</a> <input type="submit" class="btn btn-primary mr-4 " name="AddRecord" value="Submit">
                </div>
            </div>
            </center>
    </div>
</div>
</div>
</body>

<!--Meet Our Partners end-->
<div class="hs_margin_60"></div>
</div>

<?php include 'footer.php' ?>