<?php include 'header.php'?>
<div class="page-content">
              <div class="main-wrapper">
              <h3>Subscriber...</h3>

<style>
#overflowTest {
  
  color: white;
  padding: 15px;
  width: 100%;
  height: auto;
  overflow-x: scroll;
  border: 1px solid #ccc;
}
</style>
<div class="container-fluid">
 <div class="row">
 <div class="container-fluid">
  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div id="overflowTest">
  <table class="table table-bordered table-striped" id="tblData">
    <thead>
      <tr>
        <th>Sr.No.</th>
       
        <th>Email</th>
      <th>Date</th>
        <th>Status</th>
       
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM sub";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['email']."</td><td>".$row['rdt']."</td><td>".$row['status']."</td></tr>";
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