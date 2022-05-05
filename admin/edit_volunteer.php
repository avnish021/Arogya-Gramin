<?php include 'header.php'?>
<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string
$qry = mysqli_query( $conn, "select * from volunteer where id='$id'"); // select query
$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['save']))
{	
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $full_address = $_POST['full_address'];
    $gander = $_POST['gander'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    try {
        $edit = mysqli_query($conn,"update volunteer set name='$name', email='$v_email', phone='$phone', dob='$dob', full_address='$full_address', passowrd='$password', gander='$gander', status='$status' where id='$id'");
  
        if($edit){
            echo "<script>alert('Upload successfully !..');window.location.href='edit_volunteer.php?id=$id'</script>";
           //header('Location: ');
        }
   
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
if(isset($_POST['save1']))
{	
    
    try {
        $edit = mysqli_query($conn,"update volunteer set status='True' where id='$id'");
  
        if($edit){
            echo "<script>alert('True !..');window.location.href='edit_volunteer.php?id=$id'</script>";
           //header('Location: ');
        }
   
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
if(isset($_POST['save2']))
{	
  
    try {
        $edit = mysqli_query($conn,"update volunteer set status='False' where id='$id'");
  
        if($edit){
            echo "<script>alert('False !..');window.location.href='edit_volunteer.php?id=$id'</script>";
           //header('Location: ');
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
     <input type="hidden" name="id" class="form-control" value='<?php echo $data['id'] ?>'>
        <div class="row">
          <div class="col-sm-6">
            <label>Name</label>
           
              
              <input id="uname" name="name" type="text" class="form-control" value='<?php echo $data['name'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Email</label>
           
              <input id="uemail" name="v_email" type="text" class="form-control" value='<?php echo $data['v_email'] ?>'>
          <br>
          </div>
          <div class="col-sm-6">
            <label>Phone</label>
           
              <input id="mnumber" type="text" name="phone" class="form-control" value='<?php echo $data['phone'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Date Of Birth </label>
            
              <input id="amnumber" type="text" name="dob" class="form-control" value='<?php echo $data['dob'] ?>'>
            <br>
          </div>
          <div class="col-sm-12">
            <label>Full Address</label>
           <textarea name="full_address" class="form-control"><?php echo $data['full_address'] ?></textarea>
              
           <br>
          </div>
          <div class="col-sm-6">
            <label> Gander</label>
            <input id="amnumber" type="text" name="gander" class="form-control" value='<?php echo $data['gander'] ?>'>
            </select>
             
            <br>
          </div>
          <div class="col-sm-6">
            <label>Password</label>
              <input id="mnumber" type="text" name="password" class="form-control" value='<?php echo $data['password'] ?>'>
           <br>
          </div>
          <div class="col-sm-6">
            <label>status</label>
              <input id="mnumber" type="text" name="status" class="form-control" value='<?php echo $data['status'] ?>'>
           <br>
         
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Save Volunteer</button>&nbsp;&nbsp;&nbsp;&nbsp;
              <button id="em_sub" class="btn btn-info" name="save1" type="submit">Approved</button>&nbsp;&nbsp;&nbsp;&nbsp;
              <button id="em_sub" class="btn btn-danger" name="save2" type="submit">Not Approved</button>
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
     
 <table class="table table-bordered table-striped" id="tblData">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>DOB</th>
        <th>full_address</th>
        <th>Gander</th>
        <th>Date</th>
        <th>status</th>
        <th>Update</th>
        <th>Permanent Delete</th>
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
 <button onclick="exportTableToExcel('tblData', 'members-data')" class="btn btn-info">Export Table Data To Excel File</button>
</div>


 </div>
</div>
</div>
</div>
<script>
    function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
<?php include 'footer.php'?>