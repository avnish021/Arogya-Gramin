<?php
session_start();
if(!isset($_SESSION['v_email']))
{
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
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/user/assets/demo/demo.css" rel="stylesheet" />
  <link href="../assets/css/volunteer.css" rel="stylesheet" />
  <!--Calender UI-->
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="all.js"></script>
        
</head>
<style>
    /*@media only screen and (max-width:600px){*/
    /*    .sidebar {*/
    /*        opacity:0;*/
    /*        position:relative;*/
    /*        left:-100;*/
    /*        display:none;*/
    /*    }*/
    /*}*/
</style>
<body class="">
  <div class="wrapper" >
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="/volunteer/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/images/logo1.png" style="width:170px;">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="/volunteer/" class="simple-text logo-normal">
          Arogya Gramin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'volunteer') echo 'active'; ?>">
            <a href="volunteer">
              <i class="fa fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'CBR-Transaction.php') echo 'active'; ?>">
            <a href="CBR-Transaction">
              <i class="fa fa-bank"></i>
              <p>CBR Transaction</p>
            </a>
          </li>
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'Application-Form.php') echo 'active'; ?>">
            <a href="Application-Form">
              <i class="fa fa-id-card"></i>
              <p>Apply Health Card</p>
            </a>
          </li>
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'personal-healthcard.php') echo 'active'; ?>">
            <a href="personal-healthcard">
              <i class="fa fa-eye"></i>
              <p>Personal healthcard</p>
            </a>
          </li>
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'family-healthcard.php') echo 'active'; ?>">
            <a href="family-healthcard">
              <i class="fa fa-eye"></i>
              <p>Family healthcard</p>
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
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background:#0459A3">
        <div class="container-fluid" >
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <style>
             
                    .fa-bars{
                        color:#fff;
                        padding:10px;
                        font-size:30px;
                        margin-right:10px;
                    }
                      .fa-bars:hover{
                          background:deeppink;
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
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                <h6><i class="fa fa-user"></i><?php echo $_SESSION['v_email'] ?></h6>
                  <p>
                    
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     
 
      <!-- End Navbar -->
      <!-- <div class="container"> -->
