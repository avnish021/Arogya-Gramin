<?php
session_start();
include('connect.php');


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($conn,"update `familyhealthcard` SET `order_status`='complete',payment_id='$order_id' where id='".$_SESSION['OID']."'");
    
}
?>