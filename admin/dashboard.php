<?php include 'header.php'?>

<div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Arogyagramin Admin Panel</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly !</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> <?php echo date("l j \ F Y")?>
                    </button>
                   
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/logo1.png" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Bihar</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today’s Appointment</p>
                      <p class="fs-30 mb-2"><u><a href="appointment.php" style='font-size:14px;color:white'>Check Appointment</a></u> <?php


include 'connect.php';
$sql="select count('1') from book_appointment where status='False'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo " <a class='nav-link notifications-dropdown' href='#' id='notificationsDropDown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>$row[0]</a>";
mysqli_close($conn);
?></p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Appointment</p>
                      <p class="fs-30 mb-2"> <?php


include 'connect.php';
$sql="select count('1') from book_appointment";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo " <a class='nav-link notifications-dropdown' href='#' id='notificationsDropDown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>$row[0]</a>";
mysqli_close($conn);
?></p>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Health Card</p>
                      <p class="fs-30 mb-2">
                      <?php


include 'connect.php';
$sql="select count('1') from apply_card";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Arogya-Mitra</p>
                      <p class="fs-30 mb-2">
                      <?php


include 'connect.php';
$sql="select count('1') from aorgya_mitra";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total User</p>
                      <p class="fs-30 mb-2">
                      <?php


include 'connect.php';
$sql="select count('1') from usertable";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Customer</p>
                      <p class="fs-30 mb-2">0</p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Volunteer</p>
                      <p class="fs-30 mb-2">
                      <?php


include 'connect.php';
$sql="select count('1') from volunteer";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Product</p>
                      <p class="fs-30 mb-2">
                      <?php


include 'connect.php';
$sql="select count('1') from add_product";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                     
                    </div>
                  </div>
                </div>
             
               
                
              </div>
            </div>
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Hospital</p>
                      <p class="fs-30 mb-2">
                      <?php
include 'connect.php';
$sql="select count('1') from tie_up where type='Hospital'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Medical</p>
                      <p class="fs-30 mb-2">
                      <?php
include 'connect.php';
$sql="select count('1') from tie_up where type='medical'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Lab</p>
                      <p class="fs-30 mb-2">
                      <?php
include 'connect.php';
$sql="select count('1') from tie_up where type='Lab'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Department</p>
                      <p class="fs-30 mb-2">
                      <?php
include 'connect.php';
$sql="select count('1') from dpo_bpo";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                     
                    </div>
                  </div>
                </div>
             
               
                
              </div>
            </div>
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total CBR Transection</p>
                      <p class="fs-30 mb-2">
                      <?php
include 'connect.php';
$sql="select count('1') from cpr";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Order</p>
                      <p class="fs-30 mb-2">0</p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Verified Health Card</p>
                      <p class="fs-30 mb-2">
                      <?php
include 'connect.php';
$sql="select count('1') from apply_card where status='True'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>
                      </p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Subscriber</p>
                      <p class="fs-30 mb-2"><?php
include 'connect.php';
$sql="select count('1') from sub";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?></p>
                     
                    </div>
                  </div>
                </div>
             
               
                
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">CBR Transection</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>id</th>
                          <th>Quantity</th>
                          <th>Rate/Unit</th>
                          <th>Price</th>
                          <th>Discount</th>
                          <th>Order Placed</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>  
                      </thead>
                      <tbody>
                      <?php
include 'connect.php';

$sql = "SELECT * FROM cpr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['qunt']."</td><td>".$row['rate']."</td><td>Rs".$row['price']."</td><td>".$row['discount']."%</td><td>".$row['placed']."</td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><a href='edit_cpr.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></td><td><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save3' class='btn btn-danger' value='Delete'/></form></center></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
                    
                      </tbody>
                    </table>
                    <hr>
                    <button class="btn btn-success" onclick="window.location.href='cpr.php'">Add New</button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Contact & Enquiry</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Date</th>
                          <th>Send Message</th>
                      
                        </tr>  
                      </thead>
                      <tbody>
                      <?php
include 'connect.php';

$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email_1']."</td><td>".$row['phone']."</td><td>".$row['subject']."</td><td>".$row['message']."</td><td>".$row['rdt']."</td><td><center><a href='send_message.php?id=".$row['id']."'><button class='btn btn-info'>Send Reply</button></a></center></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
                    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        <!--  <div class="row">
            <div class="col-md-6 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">CBR Transection</p>
                  <div class="table-responsive">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th class="pl-0  pb-2 border-bottom">Admin</th>
                          <th class="border-bottom pb-2">Volunteer</th>
                          <th class="border-bottom pb-2">Customer</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pl-0">0</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">0</p></td>
                          <td class="text-muted">0</td>
                        </tr>
                    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
           <!-- <div class="col-md-6 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Appointment</p>
                  <ul class="icon-data-list">
                    
                    <?php
include 'connect.php';

$sql = "SELECT * FROM book_appointment where status='False'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li><div class='d-flex'><img src='images/logo1.png' alt='user'><div><p class='text-info mb-1'>".$row['name']."</p><p class='mb-0'>Department : ".$row['select_dp']."</p><small>".$row['rdt']."</small><center><form method='post' action='appointment.php'><input type='hidden' name='id' value='".$row['id']."'><input type='time' name='time' value='".$row['time']."'><input type='submit' name='save' class='btn btn-success' value='Verified'/></form></center></div></div></li>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      

<?php include 'footer.php'?>
         