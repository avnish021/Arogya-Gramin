<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
      include 'connect.php';
      $v_email = $_POST["v_email"];
      $v_email = filter_var($v_email, FILTER_SANITIZE_STRING);
        $password = $_POST["password"];
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $result = mysqli_query($conn,"SELECT * FROM volunteer WHERE v_email='$v_email' and password = '$password'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["v_email"] = $row['v_email'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Website Under Maintenence! ";
        //  Invalid Username or Password!
        }
    }
    if(isset($_SESSION["v_email"])) {
    header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
 
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
body
{
  background-image: url('Login page.jpg');
  background-color: #cccccc;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  img.avatar {
  width: 40%;
 
}
}


</style>
</head>
<body>

<h2>Partner Login</h2>
<form name="frmUser" method="post" action="" >
        <div class="message"></div>
  <div class="imgcontainer">
    <img src="http://arogyagramin.com/assets/images/logo1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="v_email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <input type="submit" name="submit"  value="Sign In">
    <!-- <div></div><span class="psw">Forgot <a href="#">password?</a></span></div>
  </div>-->
 

  <div class="container" style="background-color:#f1f1f1">
    <br><button type="button" class="cancelbtn" onclick="location.href='https://arogyagramin.com/'">Home</button>
     <button type="button" class="cancelbtn" onclick="location.href='tel:9334467080'">Call to become Parner</button>
    <h3></h3>(Want to become a partner please contact us)</h3>
   

  </div>
</form>

</body>

   <center>
 <p>Arogya Gramin Healthcare Foundation Registered under Govt. of Indian Act. 2013 ISO Certified 9001:2015</p>
    Copyright © 2021 Arogya Gramin. All Rights Reserved.
			</center>
</html>


