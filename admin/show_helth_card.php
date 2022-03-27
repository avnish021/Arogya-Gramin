<?php include 'header.php'?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="page-content">
              <div class="main-wrapper">
              <h3>Health Card Details...</h3>

<style>
#overflowTest {

}
</style>
<div class="container-fluid">
 <div class="row">
 <div class="container-fluid">
  
 
  <div id="overflowTest">
  <table id="example" class="display nowrap" style="width:100%;margin-top:20px;margin-bottom:20px;">
   <thead>
     <tr>
        <th>Sr.No.</th>
        <th>Registration Number</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Gander</th>
        <th>Status</th>
        <th>Edit</th>
    
      </tr>
    </thead>
    <tbody>
    <?php
include 'connect.php';

$sql = "SELECT * FROM apply_card";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['application_no']."</td><td>".$row['name']."</td><td>".$row['fname']."</td><td>".$row['gander']."</td><td>".$row['status']."</td><td style=''><center><a href='check_health_card.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></a></center></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

     
    </tbody>
 </tfoot>
  
         <tr>
        <th>Sr.No.</th>
        <th>Registration Number</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Gander</th>
        <th>Status</th>
        <th>Edit</th>
    
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
 