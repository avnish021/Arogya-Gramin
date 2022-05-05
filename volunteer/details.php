<?php
session_start();
if (!isset($_SESSION['v_email'])) {
  // not logged in
  header('Location:login');
  exit();
}
$v_id = $_SESSION['v_email'];
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/user/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Arogya Gramin Partner
  </title>
  
 

  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/user/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/user/assets/css/custom.css?v=2.0.1" rel="stylesheet" />
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="../assets/user/assets/demo/demo.css" rel="stylesheet" />
  <link href="../assets/css/volunteer.css" rel="stylesheet" />
  <!--Calender UI-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://kit.fontawesome.com/9c4a1edced.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
  <script src="all.js"></script>

</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/images/logo1.png" style="width:170px;">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a class="simple-text logo-normal">
          Arogya Gramin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<button <a herf="#" onclick="window.close()" class="btn btn-primary"></a></button>
            <a href="./">
              <i class="fa fa-home"></i>
              <p>Go Back</p>
            </a>
          </li>

          <li>
            <a href="logout">
              <i class="fa fa-user"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background:#FF9A00">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <style>
                .fa-bars {
                  color: #fff;
                  padding: 10px;
                  font-size: 30px;
                  margin-right: 10px;
                }

                .fa-bars:hover {
                  background: deeppink;
                }
              </style>
              <i class="fa fa-bars"></i>
            </div>
            <a class="navbar-brand" href="javascript:;">Arogya Gramin Partner</a>
          </div>
    
        
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab" style="background:white"></span>
            <span class="navbar-toggler-bar navbar-kebab" style="background:white"></span>
            <span class="navbar-toggler-bar navbar-kebab" style="background:white"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <h6><i class="fa fa-user"></i><?php echo $_SESSION['v_email'] ?></h6>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<?php
ob_start();

include 'connect.php';

ob_start();
$id = $_GET['id'];
$type = $_GET['type'];

if ($type == "family") {
    $query = "SELECT * FROM `familyhealthcard` WHERE `id`=" . $id . ";";
    $rs = mysqli_query($conn, "$query");
    $row = $rs->fetch_assoc();
} elseif ($type == "personal") {
    $query = "SELECT * FROM `personalhealthcard` WHERE `id`=" . $id . ";";
    $rs = mysqli_query($conn, "$query");
    $row = $rs->fetch_assoc();
} else {
    header('Location: personal-healthcare.php');
}

if (isset($_POST["personalApply"])) {
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
    $card_status = ucwords($_POST["card_status"]);

    $query = "UPDATE `personalhealthcard` SET `email`= '$email',`name`='$name',`gender`='$gender',`dob`='$dob',`aadhar`='$aadhar',`mobile`='$mobile',`address`='$address',`block`='$block',`district`='$district',`state`='$state',`pin`='$pin',`card_status`='$card_status' WHERE `id`=" . $id . ";";
    $rs = mysqli_query($conn, "$query") or die(mysqli_error($conn));
    if (!$rs) {
        echo "<script>alert('Issue while updating.')</script>";
    } else {
        echo "<script>alert('Updation Succeessful! ')</script>";
    }
}

if (isset($_POST["familyApply"])) {
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
    $card_status = ucwords($_POST["card_status"]);
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
    $query = "UPDATE `familyhealthcard` SET `email`='$email',`name`='$name',`gender`='$gender',`dob`='$dob',`aadhar`='$aadhar',`mobile`='$mobile',`address`='$aadhar',`block`='$block',`district`='$district',`state`='$state',`pin`='$pin', `card_status`='$card_status',`first_member_name`='$first_member_name',`first_member_age`='$first_member_age',`first_member_gender`='$first_member_gender',`first_member_relation`='$first_member_relation',`second_member_name`='$second_member_name',`second_member_age`='$second_member_age',`second_member_gender`='$second_member_gender',`second_member_relation`='$second_member_relation',`third_member_name`='$third_member_name',`third_member_age`='$third_member_age',`third_member_gender`='$third_member_gender',`third_member_relation`='$third_member_relation',`fourth_member_name`='$fourth_member_name',`fourth_member_age`='$fourth_member_age',`fourth_member_gender`='$fourth_member_gender',`fourth_member_relation`='$fourth_member_relation' WHERE `id`=" . $id . ";";
    //echo $query;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    $rs = mysqli_query($conn, "$query") or die(mysqli_error($conn));
    if (!$rs) {
        echo "<script>alert('Issue while updating.')</script>";
    } else {
        echo "<script>alert('Updation Succeessful! ')</script>";
    }
}
?>
<div class="content" id="cardbox">
   
    <div>
        <div class="text-center padding">
            <h2 class="card-heading">Personal information</h2>
        </div>
        <form id="family" enctype="multipart/form-data" name="family" action="" method="post" style="margin-top: 22px;">
        <fieldset <?php if(strtolower($row['card_status']) == "approve") echo "disabled"; ?>>    
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name (नाम)<span class="required">*</span></label>
                    <input type="text" name="name" max="50" id="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter Your Full Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Email">Email (ईमेल)<span class="required">*</span></label>
                    <input type="email" name="email" max="50" id="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter Your email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Mobile">Mobile (मोबाइल)<span class="required">*</span></label>
                    <input type="mobile" name="mobile" max="10" min="10" id="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" placeholder="Enter Your Mobile" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Gender">Gender (लिंग)<span class="required">*</span></label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?> </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                         <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Mobile">Date Of Birth (जन्म तिथि)<span class="required">*</span></label>
                    <input type="date" id="in_dob" value="<?php echo $row['dob']; ?>" placeholder="Date Of Birth" class="form-control" name="dob" required="true">

                </div>
                <div class="form-group col-md-6">
                    <label for="aadharno">Aadhaar Number (आधार संख्या)<span class="required">*</span> </label>
                    <input name="aadhar" type="number" id="aadharno" value="<?php echo $row['aadhar']; ?>" min="12" class="form-control" placeholder="Enter Correct Aadhaar No." required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Address">Full Address (पूरा पता)<span class="required">*</span></label>
                    <input name="address" type="text" id="address" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Enter Full Address" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="Block">Block (प्रखंड)<span class="required">*</span>
                    </label>
                    <input name="block" type="text" id="block" value="<?php echo $row['block']; ?>" class="form-control" placeholder="Enter Block Name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="District">District (जिला)<span class="required">*</span> </label>
                    <input name="district" type="text" id="district" value="<?php echo $row['district']; ?>" class="form-control" placeholder="Enter District Name" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="State">State (राज्य)<span class="required">*</span> </label>
                    <select name="state" id="state" class="form-control" required>
                        <option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?> </option>
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
                    <input name="pin" type="number" id="pincode" value="<?php echo $row['pin']; ?>" class="form-control" placeholder="Enter Pin Code" min="6" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="card">Card Status</label>
                    <select name="card_status" id="card_status" class="form-control" required>
                        <option value="<?php echo $row['card_status']; ?>"><?php echo $row['card_status']; ?> </option>
                       <!-- <option value="Approve">Approve</option>
                        <option value="Disapprove">Disapprove</option>-->
                    </select>
                </div>
            </div>
            <?php if ($type == "personal") { ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <?php if(strtolower($row['card_status']) != "approve"){ ?>
                        <button type="submit" name="personalApply" value="personalApply" class="btn btn-primary">Update</button>
                        <button <a herf="#" onclick="window.close()" class="btn btn-danger">close</a></button>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if ($type == "family") { ?>

                <div class="col-lg-12">
                    <h2 style="margin-bottom:22px;">Members information</h2>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="Name">1st Member Name<span class="required">*</span></label>
                        <input name="MemberName0" type="text" value="<?php echo $row['first_member_name']; ?>" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age">Age<span class="required">*</span></label>
                        <input name="MemberAge0" type="number" value="<?php echo $row['first_member_age']; ?>" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="gender">Gender<span class="required">*</span></label>
                        <select name="MemberGender0" class="form-control">
                            <option value="<?php echo $row['first_member_gender']; ?>"><?php echo $row['first_member_gender']; ?> </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="relation">Relation<span class="required">*</span></label>
                        <input name="MemberRelation0" type="text" value="<?php echo $row['first_member_relation']; ?>" class="form-control" placeholder="Relation With Member">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="Name">2nd Member Name<span class="required">*</span></label>
                        <input name="MemberName1" type="text" value="<?php echo $row['second_member_name']; ?>" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age">Age<span class="required">*</span></label>
                        <input name="MemberAge1" type="number" value="<?php echo $row['second_member_age']; ?>" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="gender">Gender<span class="required">*</span></label>
                        <select name="MemberGender1" class="form-control">
                            <option value="<?php echo $row['second_member_gender']; ?>"><?php echo $row['second_member_gender']; ?> </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="relation">Relation<span class="required">*</span></label>
                        <input name="MemberRelation1" type="text" value="<?php echo $row['second_member_relation']; ?>" class="form-control" placeholder="Relation With Member">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="Name">3rd Member Name<span class="required">*</span></label>
                        <input name="MemberName2" type="text" value="<?php echo $row['third_member_name']; ?>" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age">Age<span class="required">*</span></label>
                        <input name="MemberAge2" type="number" value="<?php echo $row['third_member_age']; ?>" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="gender">Gender<span class="required">*</span></label>
                        <select name="MemberGender2" class="form-control">
                            <option value="<?php echo $row['third_member_gender']; ?>"><?php echo $row['third_member_gender']; ?> </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                             <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="relation">Relation<span class="required">*</span></label>
                        <input name="MemberRelation2" type="text" value="<?php echo $row['third_member_relation']; ?>" class="form-control" placeholder="Relation With Member">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="Name">4th Member Name<span class="required">*</span></label>
                        <input name="MemberName3" type="text" value="<?php echo $row['fourth_member_name']; ?>" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age">Age<span class="required">*</span></label>
                        <input name="MemberAge3" type="number" value="<?php echo $row['fourth_member_age']; ?>" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="gender">Gender<span class="required">*</span></label>
                        <select name="MemberGender3" class="form-control">
                            <option value="<?php echo $row['fourth_member_gender']; ?>"><?php echo $row['fourth_member_gender']; ?> </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="relation">Relation<span class="required">*</span></label>
                        <input name="MemberRelation3" type="text" value="<?php echo $row['fourth_member_relation']; ?>" class="form-control" placeholder="Relation With Member">
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <?php if(strtolower($row['card_status']) != "approve") { ?>
                        <button type="submit" name="familyApply" value="familyApply" class="btn btn-primary">Update</button>
                        <button <a herf="#" onclick="window.close()" class="btn btn-danger">close</a></button>
                        <?php } ?>
                    </div>

                </div>

            <?php } ?>
        
        
        
        
        </fieldset>
    </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
<?php include 'footer.php';
ob_end_flush(); ?>