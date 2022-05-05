
<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        include 'connect.php';
        $user_name = $_POST["user_name"];
        $user_name = filter_var($user_name, FILTER_SANITIZE_STRING);
        $password = $_POST["password"];
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $result = mysqli_query($conn,"SELECT * FROM admin_login WHERE user_name='$user_name' and password = '$password'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["user_name"] = $row['user_name'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["user_name"])) {
    header("Location:dashboard.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 5px solid #f1f1f1;}

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
h2{
    text-align:center;
}
</style>
</head>
<body>

<br><br><h2>Admin Login</h2>
<form name="frmUser" style="width:350px; margin:auto;" method="post" action="" >
        <div class="message"></div>
  <div class="imgcontainer">
    <img src="http://arogyagramin.com/assets/images/logo1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <input type="submit" name="submit"  value="Sign In">
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='https://arogyagramin.com/'">Home</button>
    <!--<span class="psw">Forgot <a href="#">password?</a></span>
  </div>-->
</form>
</body>

</html>


