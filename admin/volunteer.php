<?php include 'header.php'?>
<?php
include 'connect.php';
 
if(isset($_POST['save']))
{	 
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];   
    $folder = "assets/images/post/".$filename;
    move_uploaded_file($tempname, $folder);
    $name = $_POST['name'];
    $v_email = $_POST['v_email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $full_address = $_POST['full_address'];
    $gander = $_POST['gander'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $rdt = $_POST['rdt'];
    try {
	 if($password == $cpassword){
        $sql = "INSERT INTO `volunteer` (`name`, `v_email`, `phone`, `dob`, `full_address`, `gander`, `photo`, `password`, `cpassword`, `rdt`, `status`) VALUES ('$name', '$v_email', '$phone', '$dob', '$full_address', '$gander', '$filename', '$password', '$cpassword', '$rdt', 'True')";
  
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Upload successfully !..');window.location.href='volunteer.php'</script>";
           //header('Location: ');
        }
     }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>

</style>
<div class="page-content">
              <div class="main-wrapper">
              <h3>Volunteer Controller</h3>

<div class="container-fluid">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     
        <div class="row">
          <div class="col-sm-6">
            <label>Name</label>
           
              
              <input id="uname" name="name" type="text" class="form-control" placeholder="Your answer"required>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Email</label>
           
              <input id="uv_email" name="v_email" type="text" class="form-control" placeholder="Your answer"required>
          <br>
          </div>
          <div class="col-sm-6">
            <label>Phone</label>
           
              <input id="mnumber" type="text" name="phone" class="form-control" placeholder="Your answer"required>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Date Of Birth </label>
            
              <input id="amnumber" type="date" name="dob" class="form-control" placeholder="Your answer"required>
            <br>
          </div>
          <div class="col-sm-12">
            <label>Full Address</label>
           <textarea name="full_address" class="form-control"></textarea>
              
           <br>
          </div>
          <div class="col-sm-6">
            <label> Gender</label>
            <select name="gender" id="" class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="female">Other</option>
            </select>
             
            <br>
          </div>
          <div class="col-sm-6">
            <label>Photo</label>
              <input id="mnumber" type="file" name="photo" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Password</label>
              <input id="mnumber" type="password" name="password" class="form-control" placeholder="Your answer"required>
           <br>
          </div>
          <div class="col-sm-6">
            <label>Conform Password</label>
              <input id="mnumber" type="password" name="cpassword" class="form-control" placeholder="Your answer"required>
           <br>
         
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Save Volunteer</button>
              <br><br>

        
          </div>
        </div>
      </div>
    </div>



    
 
  </form>
</div>
<style>
#overflow {
  
  color: white;
  padding: 15px;
  width: 100%;
  
  overflow-x: scroll;
  border: 1px solid #ccc;
}
</style>
<div class="container-fluid">
 <div class="row">
 <div class="container-fluid">
 
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
 <div id='overflow'>
 <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Name</th>
        <th>v_email</th>
        <th>Phone</th>
        <th>DOB</th>
        <th>full_address</th>
        <th>Gander</th>
        <th>Date</th>
        <th>status</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM volunteer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['v_email']."</td><td>".$row['phone']."</td><td>".$row['dob']."</td><td>".$row['full_address']."</td><td>".$row['gander']."</td><td>".$row['rdt']."</td><td>".$row['status']."</td><td><a href='edit_volunteer.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></td><td><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save6' class='btn btn-danger' value='Delete'/></form></center></td></tr>";
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
</div>
<?php include 'footer.php'?>