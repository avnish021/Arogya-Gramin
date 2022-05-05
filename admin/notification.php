<?php include 'header.php'?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
include 'connect.php';
 
if(isset($_POST['save']))
{	 
    
    $heading = $_POST['heading'];
    $parpas = $_POST['parpas'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $rdt = $_POST['rdt'];
    try {
	 $sql = "INSERT INTO `notification` (`heading`, `parpas`, `description`, `link`, `rdt`, `status`) VALUES ('$heading', '$parpas', '$description', '$link', '$rdt', 'True')";
  
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your NOtification Upload successfully !..');window.location.href='notification.php'</script>";
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
              <h3>Notification</h3>

<div class="container-fluid">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     
        <div class="row">
          <div class="col-sm-6">
            <label>Heading</label>
           
              
              <input id="uname" name="heading" type="text" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Purpose</label>
           
              <input id="uemail" name="parpas" type="text" class="form-control" placeholder="Your answer">
          <br>
          </div>
          <div class="col-sm-6">
            <label>Link</label>
           
              <input id="mnumber" type="text" name="link" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Date</label>
            
              <input id="amnumber" type="date" name="rdt" class="form-control" placeholder="Your answer">
            <br>
          </div>
          <div class="col-sm-6">
            <label>Description</label>
           <textarea name="description" class="form-control"></textarea>
              
           <br>
        
            
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
           
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Add Notification</button>
              <br><br>

           
          </div>
        </div>
      </div>
    </div>



    
 
  </form>
</div>
<style>
#overflow {
  
  color: black;
  padding: 15px;
  width: 100%;
  
  overflow-x: scroll;
  border: 1px solid #ccc;
}
</style>
<div class="container-fluid">
 <div class="row">
 <div id="overflow">
 
 
   <table id="example" class="display nowrap" style="width:100%;margin-top:20px;margin-bottom:20px;">
                  <thead>
                  <tr>
       
        <th>Headeing</th>
        <th>Purpose</th>
        <th>Description</th>
        <th>Link</th>
        <th>status</th>
        <th>Date</th>
        <th>Delete</th>
      </tr>
        </thead>
                      <tbody>
                                     
                      <?php
include 'connect.php';

$sql = "SELECT * FROM notification";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr style='background:green;color:white'><td style='background:green;color:white'>".$row['heading']."</td><td>".$row['parpas']."</td><td>".$row['description']."</td><td>".$row['link']."</td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><center><a href='n_delete.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-trash'></i></a></center></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
                                  
        </tbody>
        <tfoot>
       <tr>
        
        <th>Headeing</th>
        <th>Purpose</th>
        <th>Description</th>
        <th>Link</th>
        <th>status</th>
        <th>Date</th>
        <th>Delete</th>
      </tr>
           </tfoot>
        </table>
       
 </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
    
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    
    
 </div>
</div>


 </div>
</div>
</div>
</div>
<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  <a href="https://arvisaitsolution.com/" target="_blank">Arogyagramin</a> from Arvisa IT Solutions. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>