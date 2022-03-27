<?php include 'header.php'?>
<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string

$qry = mysqli_query( $conn, "select * from add_product where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data
if(isset($_POST['save']))
{	 
    
    $id = $_POST['id'];
    $prodcut_name = $_POST['prodcut_name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $photo = $_POST['photo'];
    $status = $_POST['status'];
    $after_discount = $price - ($price *($discount / 100) );
    try {

        $edit = mysqli_query($conn,"update add_product set prodcut_name='$prodcut_name', price='$price', discount='$discount', description='$description', after_discount='$after_discount', photo='$photo', status='$status' where id='$id'");
  
        if($edit)
        {
         echo "<script>alert('Your Product Upload successfully !..');window.location.href='edit_product.php?id=$id'</script>";
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

        $edit = mysqli_query($conn,"update add_product set status='True' where id='$id'");
  
        if($edit)
        {
         echo "<script>alert('True !..');window.location.href='edit_product.php?id=$id'</script>";
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

        $edit = mysqli_query($conn,"update add_product set status='False' where id='$id'");
  
        if($edit)
        {
         echo "<script>alert('False !..');window.location.href='edit_product.php?id=$id'</script>";
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
              <h3>Add Products</h3>

<div class="container-fluid">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     <input type="hidden" name="id" class="form-control" value='<?php echo $data['id'] ?>'>
        <div class="row">
          <div class="col-sm-6">
            <label>Product Name</label>
           
              
              <input id="uname" name="prodcut_name" type="text" class="form-control" value='<?php echo $data['prodcut_name'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Photo</label>
           
              <input id="uemail" name="photo" type="text" class="form-control" value='<?php echo $data['photo'] ?>'>
             
          <br>
          </div>
          <div class="col-sm-6">
            <label>Price</label>
           
              <input id="mnumber" type="text" name="price" class="form-control" value='<?php echo $data['price'] ?>'>
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Discount</label>
            
              <input id="amnumber" type="text" name="discount" class="form-control" value='<?php echo $data['discount'] ?>'>
            <br>
          </div>
          <div class="col-sm-6">
            <label>Status</label>
            
        <input id="amnumber" type="text" name="status" class="form-control" value='<?php echo $data['status'] ?>'>
            <br>
          </div>
          <div class="col-sm-12">
            <label>Description</label>
           <textarea name="description" class="form-control"><?php echo $data['description'] ?></textarea>
              
           <br>
         
            
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Send</button>&nbsp;&nbsp;&nbsp;
               <button id="em_sub" class="btn btn-info" name="save1" type="submit">Status True</button>&nbsp;&nbsp;&nbsp;
                <button id="em_sub" class="btn btn-danger" name="save2" type="submit">Status False</button>
              <br><br>
          
          </div>
        </div>
      </div>
    </div>



    
 
  </form>

</div>
<style>
#overflowTest {
  
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
  <div id="overflowTest">
  <table class="table table-bordered table-striped" id="tblData">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Product Name</th>
        <th>Photo</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Final Price</th>
        <th>Description</th>
        <th>status</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include 'connect.php';

$sql = "SELECT * FROM add_product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['prodcut_name']."</td><td><img src='../assets/images/product/".$row['photo']."' alt='' style='hight:45px;width:45px;'></td><td>Rs".$row['price']."</td><td>".$row['discount']."%</td><td>".$row['after_discount']."</td><td>".$row['description']."</td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><a href='edit_product.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></td><td><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save2' class='btn btn-danger' value='Delete'/></form></center></td></tr>";
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