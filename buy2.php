<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['email']))
{
    // not logged in
    header('Location:login.php');
    exit();
}
$user_id = $_SESSION['email'];
$quantity = $_POST['quantity'];
if(isset($_GET['id']))
{	 
   
    $name = $_GET['name'];
    $description = $_GET['description'];
    $price = $_GET['price'];
    $discount = $_GET['discount'];
    
    $img = $_GET['img'];
    $after = $price - ($price *($discount / 100) );
    $total = $after * $quantity ;
    try {
	 $sql = "INSERT INTO `e-card` (`name`, `description`, `price`, `discount`, `charge`, `total`, `quantity`, `user_id`, `status`, `rdt`, `img`) VALUES ('$name', '$description', '$price', '$discount', 'Free', '$total', '$quantity', '$user_id', 'conform', 'rdt', '$img');";
  
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your Order Successfully Conform ...!');window.location.href='products.php';</script>";
		//header('Location: ');
	 }
  } 
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
	 mysqli_close($conn);
}
?>