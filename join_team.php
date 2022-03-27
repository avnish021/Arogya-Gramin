<?php
include 'connect.php';
 
if(isset($_POST['save']))
{	 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $alt_mobile = $_POST['alt_mobile'];
    $exp_year =  $_POST['exp_year'];
    $exp_month = $_POST['exp_month'];
    $type = $_POST['type'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $rdt = $_POST['rdt'];
	 $sql = "INSERT INTO `career` (`name`, `email`, `phone`, `alt_mobile`, `exp_year`, `exp_month`, `type`, `subject`, `message`, `rdt`) VALUES ('$name', '$email', '$phone', '$alt_mobile', '$exp_year', '$exp_month', '$type', '$subject', '$message', '$rdt');";
	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Your Appointment successfully insert!');window.location.href='index.php';</script>";
		//header('Location: ');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>