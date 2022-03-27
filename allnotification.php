<?php include 'header.php'?>
<!--header end-->

<div class="container" style="margin-top:50px;">
  <div class="row">
      <div class="col-sm-12" style="word-wrap: break-word;">
        
			<center><h2 class="hs_heading">All Notifications</h2></center><hr>
	
         
              
              <?php
include 'connect.php';

$sql = "SELECT * FROM notification";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<ul><li><a href='".$row['link']."'><i class='fa fa-calendar'></i> ".$row['rdt']."</a></li></ul><hr><a href='".$row['link']."'><h4>".$row['heading']."</h4></a><p><b>".$row['parpas']."</b><br>".$row['description']."</p><br>".$row['link']."<hr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
            
        
       
         
       
      </div>
  </div>
</div>
<?php include 'footer.php'?>
