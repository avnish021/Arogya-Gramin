<?php include 'header.php'?>
<?php
include 'connect.php';
 
if(isset($_POST['save']))
{	 
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];   
    $folder = "../assets/images/product/".$filename;
    move_uploaded_file($tempname, $folder);

    $prodcut_name = $_POST['prodcut_name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $rdt = $_POST['rdt'];
    $after_discount = $price - ($price *($discount / 100) );
    try {
	 $sql = "INSERT INTO `add_product` (`prodcut_name`, `photo`, `price`, `discount`, `after_discount`, `description`, `rdt`, `status`) VALUES ('$prodcut_name', '$filename', '$price', '$discount', '$after_discount', '$description', '$rdt', 'Flase')";
  
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your Product Upload successfully !..');window.location.href='product_add'</script>";
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
  <link rel="stylesheet" href="css/table.css">
<div class="page-content">
              <div class="main-wrapper">
              <h3>Add Products</h3>

<div class="container-fluid">
  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     
        <div class="row">
          <div class="col-sm-6">
            <label>Product Name</label>
           
              
              <input id="uname" name="prodcut_name" type="text" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Photo</label>
           
              <input id="uemail" name="photo" type="file" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Your answer">
          <br>
          </div>
          <div class="col-sm-6">
            <label>Price</label>
           
              <input id="mnumber" type="text" name="price" class="form-control" placeholder="Your answer">
           <br>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-sm-6">
            <label>Discount</label>
            
              <input id="amnumber" type="text" name="discount" class="form-control" placeholder="Your answer">
            <br>
          </div>
          <div class="col-sm-12">
            <label>Description</label>
           <textarea name="description" class="form-control"></textarea>
              
           <br>
         
            
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
            
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Send</button><br><br>
          
          </div>
        </div>
      </div>
    </div>



    
 
  </form>
  <style>
  .btn-small{
      padding:5px 8px;
  }

</style>
</div>
<div class="container-fluid">
 <div class="row">
 <div class="container-fluid">
 
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div id="overflowTest">
  <table class="styled-table" style="margin-left:0; overflow:scroll;">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Product Name</th>
        <th>Photo</th>
        <th>Price</th>
        <th>Discount</th>
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
        echo "<tr><td>".$row['id']."</td><td>".$row['prodcut_name']."</td><td><img src='../assets/images/product/".$row['photo']."' alt='' style='hight:45px;width:45px;'></td><td>Rs".$row['price']."</td><td>".$row['discount']."%</td><td>".$row['description']."</td><td>".$row['status']."</td><td>".$row['rdt']."</td><td><a href='edit_product.php?id=".$row['id']."' class='btn btn-info'><i class='fa fa-edit'></i></td><td><center><form method='post' action='delete.php'><input type='hidden' name='id' value='".$row['id']."'><input type='submit' name='save2' class='btn btn-danger' value='Delete'/></form></center></td></tr>";
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
