<?php include 'header.php'?>
<?php require_once 'controllerUserData.php'; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset_code');
            }
        }else{
            header('Location: user_otp.php');
        }
    }
}else{
    header('Location: login_user.php');
}
?>
    <title>Arogyagramin | Home</title>
    <style>
#overflowTest {
  
  color: white;
  padding: 15px;
  width: 100%;
  height: 500px;
  overflow-y: scroll;
  border: 1px solid #ccc;
}
</style>
<style>
    #ar{
      margin-top:15px;
    }
    #img1{
       width:80%;
       border:3px solid white;
       
    }
    #img1:hover{
        width: 90%;
        border: 3px solid green;
        background: orange;
    }
    #tex{
        color:white;
    }
    #tex:hover{
        color:black;
    }
    </style>
<div class="content" style="margin-top:100px">
    <div class="row">
     <div class="col-md-12" style="background:white;min-height:500px;">
     
      <div class="row">
       
      <?php
include 'connect.php';

$sql = "SELECT * FROM add_product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='col-md-4' id='tex'><center><img id='img1' src='../assets/images/product/".$row['photo']."' alt=''/><h5 style='color:black'><b>".$row['prodcut_name']."</b><br><i class='fa fa-inr'></i>&nbsp;&nbsp;<s>".$row['price']."</s></h5><p style='color:black'>Discount &nbsp;&nbsp;".$row['discount']." %</p><p style='color:black'><i style='color: #00aa59' class='fa fa-inr'></i>&nbsp;&nbsp;".$row['after_discount']."</p><span style='font-size:11px;'>".$row['description']."</span><br><button class='btn btn-danger' style='margin-top:20px;background:orange;border:orange;'><span style='font-size:13px;'><a href='../buy.php?id=".$row['id']."' style='color:white'>Order Now</a></span></button></center></div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
      </div>
     
     </div>
    </div>

</div>
    
<?php include 'footer.php'?>