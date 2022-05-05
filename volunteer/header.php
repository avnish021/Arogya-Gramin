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
  
 
		 <!--  <html> 
                        <title>HTML with PHP</title>
                        <body>
                            <marquee 
                        <br><br><center> <p style="color:red;font-weight:bold;font-size:15px;"> Dear Partner! currently, our developer team is working on website. You may face some issues while working. please be patient will all matter resolved after a short breakpoint.  verification. प्रिय साथी! वर्तमान में, हमारी डेवलपर टीम वेबसाइट पर काम कर रही है। काम के दौरान आपको कुछ दिक्कतों का सामना करना पड़ सकता है। कृपया धैर्य रखें, सभी मामले एक छोटे ब्रेकपॉइंट के बाद हल हो जाएंगें। </p></center>
                        </marquee>
                            </body>
                         </html>-->


  
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
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
            <a href="./">
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
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'Application-Form2.php') echo 'active'; ?>">
            <a href="Application-Form2">
              <i class="fa fa-id-card"></i>
              <p>Apply Health Card</p>
            </a>
          </li>
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'personal-healthcard.php') echo 'active'; ?>">
            <a href="personal-healthcard">
              <i class="fa fa-hospital-user"></i>
              <p>Single Health Card</p>
            </a>
          </li>
          <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'family-healthcard.php') echo 'active'; ?>">
            <a href="family-healthcard">
              <i class="fa fa-users-medical"></i>
              <p>Family Health Card</p>
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