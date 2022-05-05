<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Arogyagramin Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo1.png" />
  <!-- <head> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
<!-- Bootstrap CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="icon" type="image/png" href="https://magadhnidhi.in/wp-content/uploads/2020/01/magadhlogo-300x273.jpg">
<!-- Bootstrap JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--jQuery CSS-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- jQuery JS-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Sweetalert Javascript CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Font Awesome-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>

<link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script src="js/all.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style>
    table {
        font-size: 12px;
    }

    .dt-button.red {
        color: orange;
        background: #4527a0;
    }

    table {
        border: 1px solid red;
        overflow: scroll;
    }

    th {
        text-transform: uppercase;
        background-color: #3c40c6;
        color: #fff;
    }

    td {
        word-wrap: break-word;
        background-color: #F8EFBA;

    }

    .formcard {

        margin: 10px;
        padding-bottom: 20px;
        padding: 10px;
        background-color: #9dcbed;

    }

    body.waiting * {
        cursor: wait;
    }

    .flex-container {
        display: flex;
        width: 100%;
        height: 60px;
        justify-content: space-evenly;
        align-items: center;
        margin: 60px auto auto auto;

    }

    .container2 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 20px;
        cursor: pointer;
        font-size: 15px;
    }

    /* Hide the default checkbox */
    .container2 input {
        visibility: hidden;
        cursor: pointer;
    }

    /* Create a custom checkbox */
    .mark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: lightgray;
    }

    .container2:hover input~.mark {
        background-color: gray;
    }

    .container2 input:checked~.mark {
        background-color: blue;
    }

    /* Create the mark/indicator (hidden when not checked) */
    .mark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the mark when checked */
    .container2 input:checked~.mark:after {
        display: block;
    }

    /* Style the mark/indicator */
    .container2 .mark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        transform: rotate(45deg);
    }
    .disableSorting{
        width: 100px;
        overflow: hidden;
    
    }
</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="#"><img src="images/logo1.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo1.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/logo1.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href='logout.php'>
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
              
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
           
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
          
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
            <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'Discount.php') echo 'active'; ?>">
            <a class="nav-link" href="Discount">
              <i class="fa fa-hospital-o menu-icon"></i>
              <span class="menu-title">Add Discount</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'Transaction-Details.php') echo 'active'; ?>">
            <a class="nav-link" href="Transaction-Details">
              <i class="fa fa-hospital-o menu-icon"></i>
              <span class="menu-title">Transaction</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'personal-healthcare.php') echo 'active'; ?>">
            <a class="nav-link" href="personal-healthcare">
              <i class="fa fa-hospital-o menu-icon"></i>
              <span class="menu-title">Personal healthcard</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'family-healthcare.php') echo 'active'; ?>">
            <a class="nav-link" href="family-healthcare">
              <i class="fa fa-hospital-o menu-icon"></i>
              <span class="menu-title">Family healthcard</span>
            </a>
          </li>
           <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'appointment.php') echo 'active'; ?>">
            <a class="nav-link" href="appointment.php">
              <i class="fa fa-hospital-o menu-icon"></i>
              <span class="menu-title">Appointment</span>
            </a>
          </li>
          <!-- <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'Card-Details.php') echo 'active'; ?>">
            <a class="nav-link" href="Card-Details">
              <i class="fa fa-hospital-o menu-icon"></i>
              <span class="menu-title">Card Details</span>
            </a>
          </li>-->
         
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'tie_up_form.php') echo 'active'; ?>">
            <a class="nav-link" href="tie_up_form.php">
              <i class="fa fa-hospital-o menu-icon"></i>
              <span class="menu-title">Hospital Tie-Up</span>
            </a>
          </li>
           
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'tie_up_medical.php') echo 'active'; ?>">
            <a class="nav-link" href="tie_up_medical.php">
              <i class="fa fa-medkit menu-icon"></i>
              <span class="menu-title">Medical Tie-Up</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'tie_up_lab.php') echo 'active'; ?>">
            <a class="nav-link" href="tie_up_lab.php">
              <i class="fa fa-flask menu-icon"></i>
              <span class="menu-title">Lab Tie-Up</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'show_helth_card.php') echo 'active'; ?>">
            <a class="nav-link" href="show_helth_card.php">
              <i class="fa fa-id-card menu-icon"></i>
              <span class="menu-title">Helth Card Show</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'show_arogya_mitra.php') echo 'active'; ?>">
            <a class="nav-link" href="show_arogya_mitra.php">
              <i class="fa fa-id-card menu-icon"></i>
              <span class="menu-title">Arogya-Mitra</span>
            </a>
          </li>
         
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'user_login.php') echo 'active'; ?>">
            <a class="nav-link" href="user_login.php">
              <i class="fa fa-user menu-icon"></i>
              <span class="menu-title">User Control</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'volunteer.php') echo 'active'; ?>">
            <a class="nav-link" href="volunteer.php">
              <i class="fa fa-user-o menu-icon"></i>
              <span class="menu-title">Volunteer Control</span>
            </a>
          </li>
        <!--  <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'cpr.php') echo 'active'; ?>">
            <a class="nav-link" href="cpr.php">
              <i class="fa fa-bank menu-icon"></i>
              <span class="menu-title">CBR Transection</span>
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-cog menu-icon"></i>
              <span class="menu-title">Site Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-map menu-icon"></i>
              <span class="menu-title">Address Setup</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'dpo_bpo_emp.php') echo 'active'; ?>">
            <a class="nav-link" href="dpo_bpo_emp.php">
              <i class="fa fa-building-o menu-icon"></i>
              <span class="menu-title">Department</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'contact_enquiry.php') echo 'active'; ?>">
            <a class="nav-link" href="contact_enquiry.php">
              <i class="fa fa-question-circle menu-icon"></i>
              <span class="menu-title">Contacts & Enquiry</span>
            </a>
          </li>
          
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'product_add.php') echo 'active'; ?>">
            <a class="nav-link" href="product_add.php">
              <i class="fa fa-shopping-cart menu-icon"></i>
              <span class="menu-title">Add Product</span>
            </a>
          </li>
          <!--<li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'check_order.php') echo 'active'; ?>">
            <a class="nav-link" href="check_order.php">
              <i class="fa fa-eye menu-icon"></i>
              <span class="menu-title">Check Order</span>
            </a>
          </li>-->
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'subscriber.php') echo 'active'; ?>">
            <a class="nav-link" href="subscriber.php">
              <i class="fa fa-rocket menu-icon"></i>
              <span class="menu-title">Subscriber</span>
            </a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'notification.php') echo 'active'; ?>">
            <a class="nav-link" href="notification.php">
              <i class="fa fa-bell menu-icon"></i>
              <span class="menu-title">Notification</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" style="padding: 0 0 !important;">