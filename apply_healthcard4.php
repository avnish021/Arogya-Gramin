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

  $filename = $_FILES["photo"]["name"];
  $tempname = $_FILES["photo"]["tmp_name"];
  $folder = "assets/images/post" . $filename;
  move_uploaded_file($tempname, $folder);


  $query = "INSERT INTO `personalhealthcard` (`id`, `date`, `time`, `author`, `email`, `name`, `gender`, `dob`, `aadhar`, `mobile`, `address`, `block`, `district`, `state`, `pin`, `password`, `card_status`, `image`, `order_id`, `order_amount`, `order_status`, `order_time`)
                         VALUES ('$id', '$date', '$time', '$author', '$email', '$name', '$gender', '$dob', '$aadhar', '$mobile', '$address', '$block', '$district', '$state', '$pin', '$password', 'applied', '$filename', NULL, NULL, NULL, NULL);";
  $rs = mysqli_query($conn, "$query") or die(mysqli_error($conn));
  if (!$rs) {
    echo "<script>alert('Invalid Registration')</script>";
  } else {
    header('Location: payment-redirect.php?id=' . $id . '&type=' .$type . '&no=' .$mobile. '&email=' .$email);
    //$_SESSION['ID'] = mysqli_insert_id($conn);
    //echo "<script>alert('New personal healthcard successfully added!<br/> We will contact you on your provided contact details.')</script>";
  }
}
if (isset($_POST["familyApply"])) {
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

  $filename = $_FILES["photo"]["name"];
  $tempname = $_FILES["photo"]["tmp_name"];
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
                                    VALUES ('$id', '$date', '$time', '$author', '$email', '$name', '$gender', '$dob', '$aadhar', '$mobile', '$address', '$block', '$district', '$state', '$pin', '123456', 'Applied', '$filename', 'NULL', 'NULL', 'NULL', 'NULL', '$first_member_name', '$first_member_age', '$first_member_gender', '$first_member_relation', '$second_member_name', '$second_member_age', '$second_member_gender', '$second_member_relation', '$third_member_name', '$third_member_age', '$third_member_gender', '$third_member_relation', '$fourth_member_name', '$fourth_member_age', '$fourth_member_gender', '$fourth_member_relation');";

  $rs = mysqli_query($conn, "$query") or die(mysqli_error($conn));
  if (!$rs) {
    echo "<script>alert('Invalid Registration')</script>";
  } else {
    header('Location: payment-redirect.php?id=' . $id . '&type=' .$type . '&no=' .$mobile. '&email=' .$email);
    //$_SESSION['OID'] = mysqli_insert_id($conn);
    $_SESSION["ID"] = $id;
    $_SESSION["lastname"] = "Parker";
  }
}
?>

<!DOCTYPE html>
<html>
	<style>

    .tab-wrap {
      -webkit-transition: 0.3s box-shadow ease;
      transition: 0.3s box-shadow ease;
      border-radius: 2px;
      max-width: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      position: relative;
      list-style: none;
      background-color: #fff;
      margin: 40px 0;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    /*.tab-wrap:hover {*/
    /*  box-shadow: 0 12px 23px rgba(0, 0, 0, 0.23), 0 10px 10px rgba(0, 0, 0, 0.19);*/
    /*}*/

    .tab {
      display: none;
    }

    .tab:checked:nth-of-type(1)~.tab__content:nth-of-type(1) {
      opacity: 1;
      -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
      position: relative;
      top: 0;
      z-index: 100;
      -webkit-transform: translateY(0px);
      transform: translateY(0px);
      text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(2)~.tab__content:nth-of-type(2) {
      opacity: 1;
      -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
      position: relative;
      top: 0;
      z-index: 100;
      -webkit-transform: translateY(0px);
      transform: translateY(0px);
      text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(3)~.tab__content:nth-of-type(3) {
      opacity: 1;
      -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
      position: relative;
      top: 0;
      z-index: 100;
      -webkit-transform: translateY(0px);
      transform: translateY(0px);
      text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(4)~.tab__content:nth-of-type(4) {
      opacity: 1;
      -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
      position: relative;
      top: 0;
      z-index: 100;
      -webkit-transform: translateY(0px);
      transform: translateY(0px);
      text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(5)~.tab__content:nth-of-type(5) {
      opacity: 1;
      -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease;
      transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
      position: relative;
      top: 0;
      z-index: 100;
      -webkit-transform: translateY(0px);
      transform: translateY(0px);
      text-shadow: 0 0 0;
    }

    .tab:first-of-type:not(:last-of-type)+label {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .tab:not(:first-of-type):not(:last-of-type)+label {
      border-radius: 0;
    }

    .tab:last-of-type:not(:first-of-type)+label {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .tab:checked+label {
      background-color: #fff;
      box-shadow: 0 -1px 0 #fff inset;
      cursor: default;
    }

    .tab:checked+label:hover {
      box-shadow: 0 -1px 0 #fff inset;
      background-color: #fff;
    }

    .tab+label {
      box-shadow: 0 -1px 0 #eee inset;
      border-radius: 6px 6px 0 0;
      cursor: pointer;
      display: block;
      text-decoration: none;
      color: #333;
      -webkit-box-flex: 3;
      -ms-flex-positive: 3;
      flex-grow: 3;
      text-align: center;
      background-color: #f2f2f2;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      text-align: center;
      -webkit-transition: 0.3s background-color ease, 0.3s box-shadow ease;
      transition: 0.3s background-color ease, 0.3s box-shadow ease;
      height: 50px;
      box-sizing: border-box;
      padding: 15px;
    }

    .tab+label:hover {
      background-color: #f9f9f9;
      box-shadow: 0 1px 0 #f4f4f4 inset;
    }

    .tab__content {
      padding: 10px 25px;
      background-color: transparent;
      position: absolute;
      width: 100%;
      z-index: -1;
      opacity: 0;
      left: 0;
      -webkit-transform: translateY(-3px);
      transform: translateY(-3px);
      border-radius: 6px;
    }

    /* boring stuff */
    body {
      font-family: 'Helvetica', sans-serif;
      background-color: #e7e7e7;
      color: #777;
      font-weight: 300;
    }

    .container {
      margin: 0 auto;
      display: block;
      max-width: 800px;
    }

    .container>*:not(.tab-wrap) {
      padding: 0 80px;
    }

    h1,
    h2 {
      margin: 0;
      color: #444;
      text-align: center;
      font-weight: 400;
    }

    h2.heading {
      font-size: 2em;
      margin-bottom: 8px;
    }


    h2 {
      font-size: 1em;
      margin-bottom: 0;
    }

    h3 {
      font-weight: 400;
    }

    p {
      line-height: 1.6;
      margin-bottom: 20px;
    }

    /* Demo.CSS */
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900');

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }
    label{
        font-weight:100;
    }

    article,
    header,
    section,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section,
    summary {
      display: block;
    }
    header-bot{
     background: #FFFFFF!important;
    }
    body {
      background: #FFFFFF none repeat scroll 0 0;
      color: #222;
      font-family: "Raleway", sans-serif;
      font-size: 100%;
      line-height: 24px;
      margin: 0;
      padding: 0;
    }

    a {
      font-family: "Raleway", sans-serif;
      text-decoration: none;
      outline: none;
    }

    a:hover,
    a:focus {
      color: #373e18;
    }

    section {
      float: left;
      width: 100%;
      margin-top: 3em;
      margin-bottom: 2em;
    }

    h2 {
      color: #1a0e0e;
      font-size: 26px;
      font-weight: 700;
      margin: 0;
      line-height: normal;
      text-transform: uppercase;
    }

    h2 span {
      display: block;
      padding: 0;
      font-size: 18px;
      opacity: 0.7;
      margin-top: 5px;
      text-transform: uppercase;
    }

    #float-right {
      float: right;
    }

    /* ******************************************************
	Header
*********************************************************/

    .ScriptTop {
      background: #fff none repeat scroll 0 0;
      float: left;
      font-size: 0.69em;
      font-weight: 600;
      line-height: 2.2;
      padding: 12px 0;
      text-transform: uppercase;
      width: 100%;
    }

    /* To Navigation Style 1*/
    .ScriptTop ul {
      margin: 24px 0;
      padding: 0;
      text-align: left;
    }

    .ScriptTop li {
      list-style: none;
      display: inline-block;
    }

    .ScriptTop li a {
      background: #6a4aed none repeat scroll 0 0;
      color: #fff;
      display: inline-block;
      font-size: 14px;
      font-weight: 600;
      padding: 5px 18px;
      text-decoration: none;
      text-transform: capitalize;
    }

    .ScriptTop li a:hover {
      background: #000;
      color: #fff;
    }


    /* Header*/
    .ScriptHeader {
      float: left;
      width: 100%;
      padding-top: 3em;
    }

    .rt-heading {
      border-bottom: solid 1px #8b73ef;
      padding-bottom: 10px;
      margin: 0 auto;
    }

    .ScriptHeader h1 {
      color: #6a4aed;
      font-size: 28px;
      font-weight: 700;
      margin: 0;
      line-height: normal;
    }

    .ScriptHeader h2 {
      color: #8b73ef;
      font-size: 18px;
      font-weight: 400;
      margin: 5px 0 0;
      line-height: normal;

    }

    .ScriptHeader h1 span {
      display: block;
      padding: 0;
      font-size: 22px;
      opacity: 0.7;
      margin-top: 5px;
      text-transform: uppercase;
    }

    .ScriptHeader span {
      display: block;
      padding: 0;
      font-size: 22px;
      opacity: 0.7;
      margin-top: 5px;
    }

    /* ******************************************************
	Responsive Grids
*********************************************************/
    .rt-container {
      margin: 0 auto;
      padding-left: 12px;
      padding-right: 12px;
    }

    .rt-row:before,
    .rt-row:after {
      display: table;
      line-height: 0;
      content: "";
    }

    .rt-row:after {
      clear: both;
    }

    [class^="col-rt-"] {
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -o-box-sizing: border-box;
      -ms-box-sizing: border-box;
      padding: 0 15px;
      min-height: 1px;
      position: relative;
    }


    @media (min-width: 768px) {
      .rt-container {
        width: 750px;
      }

      [class^="col-rt-"] {
        float: left;
        width: 49.9999999999%;
      }

      .col-rt-6,
      .col-rt-12 {
        width: 100%;
      }

    }

    @media (min-width: 1200px) {
      .rt-container {
        width: 1170px;
      }

      .col-rt-1 {
        width: 16.6%;
      }

      .col-rt-2 {
        width: 30.33%;
      }

      .col-rt-3 {
        width: 50%;
      }

      .col-rt-4 {
        width: 67.664%;
      }

      .col-rt-5 {
        width: 83.33%;
      }


    }

    @media only screen and (min-width:240px) and (max-width: 768px) {

      .ScriptTop h1,
      .ScriptTop ul {
        text-align: center;
      }

      .ScriptTop h1 {
        margin-top: 0;
        margin-bottom: 15px;
      }

      .ScriptTop ul {
        margin-top: 12px;
      }

      .ScriptHeader h1,
      .ScriptHeader h2,
      .scriptnav ul {
        text-align: center;
      }

      .scriptnav ul {
        margin-top: 12px;
      }

      #float-right {
        float: none;
      }

    }
    
    
  </style>

  <section style="margin: right 2px; background-color:#FFFFFF;">
     
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="demo-section">
            <center>
                      <h2>UNDER CONSTRUCTION</h2>
                <h3>Alert - Do not use this form to appy your health card this is a testing form</h3>
                <b><p class="tabBox">Welcome! Apply your Arogya Gramin Card to avail all affordable healthcare services.</p></b>
            </center>
        </div>
        <div class="tab-wrap">
          <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
          <label for="tab1" class="tabBox" data-tab="1">Single Healthcard</label>
          <input type="radio" id="tab2" name="tabGroup1" class="tab">
          <label for="tab2" class="tabBox" data-tab="2">Family Healthcard</label>
          <div class="tab__content">
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

             <!-- <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="District">District (जिला)<span class="required">*</span> </label>
                  <input name="district" type="text" id="district" class="form-control" placeholder="Enter District Name" required>
                </div>-->
                
                <!--Add by me-->
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="District">District (जिला)<span class="required">*</span> </label>
                    <select name="district" id="district" class="form-control" required>
                     
                          <option value="">Select State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    </select>
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
                  <input id="mnumber" type="file" name="photo" class="form-control" placeholder="Your answer">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <button type="submit" name="personalApply" value="personalApply" class="btn btn-primary">Apply</button>
                </div>
              </div>
            </form>
          </div>
          <div class="tab__content">
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
                  <input id="mnumber" type="file" name="photo" class="form-control" placeholder="Your answer">
                </div>
              </div>
              <div class="col-lg-12">
                <h3 style="margin-bottom:22px;">Members information</h3>
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

        <div class="demo-section">
          <!--<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Morbi mattis ullamcorper velit. Pellentesque posuere. Etiam ut purus mattis mauris sodales aliquam. Praesent nec nisl a purus blandit viverra.</p>-->
        </div>
      </div>
    </div>
  </section>
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
    content.style.display = "block";
    document.getElementById("AddRow").style.display = "block";
  </script>



  <?php
  ob_end_flush();
  include 'footer.php';
  ?>