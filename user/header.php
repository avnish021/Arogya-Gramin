<?php require_once 'controllerUserData.php'; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset_code');
            }
        }else{
            header('Location: user_otp.php');
        }
    }
}else{
    header('Location: login_user.php');
}
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/user/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/logo1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Arogya Gramin User
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/user/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/user/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=".." href="../assets/user/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <!--<a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/images/logo1.png" >
          </div>
           <p>CT</p> 
        </a>-->
        <a href="" class="simple-text logo-normal">
        
           <div class="logo-image-big">
            <img src="../assets/images/logo1.png" style="width:70px;height:40px;">
          </div> 
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="../products.php">
              <i class="fa fa-product-hunt"></i>
              <p>Product</p>
            </a>
          </li>
         <!-- <li>
            <a href="#">
              <i class="fa fa-bank"></i>
              <p>CBR Transection</p>
            </a>
          </li>-->
          <li>
            <a href="application_form.php">
              <i class="fa fa-id-card"></i>
              <p>Apply Health Card</p>
            </a>
          </li>
          <li>
            <?php echo "<a href='health_card.php?email=".$_SESSION['email']."'><i class='fa fa-eye'></i> <p>Check Helth Card Status</p></a>";?>
          </li>
          <li>
            <a href="logout_user.php">
              <i class="fa fa-user"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background:#0459A3">
        <div class="container-fluid" >
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1" style="background:white"></span>
                <span class="navbar-toggler-bar bar2" style="background:white"></span>
                <span class="navbar-toggler-bar bar3" style="background:white"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">AROGYA GRAMIN</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab" style="background:white"></span>
            <span class="navbar-toggler-bar navbar-kebab" style="background:white"></span>
            <span class="navbar-toggler-bar navbar-kebab" style="background:white"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" style="background:white" placeholder="Search...">
                <div class="input-group-append" style="background:white">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split" ></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="../cart.php">
                  <i class="fa fa-shopping-cart"></i><i>
    <span style="background: rgba(0,0,0);width: auto;color: white;height: auto;margin: 0;border-radius: 50%;position:absolute;" class="badge">
    <?php
							$user_id = $_SESSION['email'];
							include 'connect.php';
							$sql="select count('1') from `e-card` where user_id='$user_id' and status='Pandding'";
							$result=mysqli_query($conn,$sql);
							$row=mysqli_fetch_array($result);
							echo "$row[0]";
							mysqli_close($conn);
							?>
  </span>
     </i>
                  <p>
                    
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                <h6><i class="fa fa-user"></i><?php echo $fetch_info['name'] ?></h6>
                  <p>
                    
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
         
        </div>
        <div class="modal-body">
        <ul>
          <li class="active ">
            <a href="index.php" style="color:black">
              <i class="fa fa-home"></i> &nbsp;Home
            </a>
          </li>
          <hr>
          <li>
            <a href="#" style="color:black">
              <i class="fa fa-bank"></i> CBR Transection
              <p></p>
            </a>
          </li>
          <hr>
          <li>
            <a href="application_form.php" style="color:black">
              <i class="fa fa-id-card"></i> Apply Health Card
              <p></p>
            </a>
          </li>
          <hr>
         <li>
             <?php echo "<a href='health_card.php?email=".$_SESSION['email']."' style='color:black'><i class='fa fa-eye'></i> Check Helth Card Status<p></p></a>";?>
          </li>
          <hr>
          <li>
            <a href="logout_user" style="color:black">
              <i class="fa fa-user"></i> Logout
              <p></p>
            </a>
          </li>
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      <!-- End Navbar -->
      <div class="container">
  
  

