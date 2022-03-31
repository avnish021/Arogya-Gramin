<?php include 'header.php'?>
<?php
include 'connect.php';
 
 // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query( $conn, "select * from apply_card where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['save'])) // when click on Update button
{
    $id = $_POST['id'];
    $application_no = $_POST['application_no'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $gander = $_POST['gander'];
    $dob = $_POST['dob'];
    $block = $_POST['block'];
    $distric = $_POST['distric'];
    $adhar = $_POST['adhar'];
    $type = $_POST['type'];
    $adhar_photo = $_POST['adhar_photo'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $full_address = $_POST['full_address'];
    $payment_screen = $_POST['payment_screen'];
    $status = $_POST['status'];
	$edit = mysqli_query($conn,"update apply_card set application_no='$application_no', name='$name', fname='$fname', gander='$gander', dob='$dob', block='$block', distric='$distric', adhar='$adhar', type='$type', adhar_photo='$adhar_photo', phone='$phone', email='$email', full_address='$full_address', payment_screen='$payment_screen', status='$status' where id='$id'");	
    if($edit)
    {
        echo "<script>alert('Update Successfully....!');window.location.hraf='check_health_card.php'</script>";
    }
    else
    {
        echo mysqli_error();
    }
}
if(isset($_POST['save1'])){
        $id = $_POST['id'];
        $edit = mysqli_query($conn,"update apply_card set status='True' where id='$id'");
	
    if($edit)
    {
        echo "<script>alert('Verifed Successfully....!');window.location.hraf='check_health_card.php'</script>";
    }
    else
    {
        echo mysqli_error();
    }
}
    if(isset($_POST['save2'])){
        $id = $_POST['id'];
        $edit = mysqli_query($conn,"update apply_card set status='False' where id='$id'");
	
    if($edit)
    {
        echo "<script>alert('Not Verifed Successfully....!');window.location.hraf='check_health_card.php'</script>";
    }
    else
    {
        echo mysqli_error();
    }
}    	
    mysqli_close($conn);

?>
<div class="page-content" style="margin-top:130px;">
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row" stlye="margin-top:30px;">
              <form action="" method="post" style="width:100%">
              <table style="width:100%;broder-radius:10px;" border='2'>
                    <tr><td><h5><b>Application Number</b></h5></td><td>&nbsp;&nbsp;
                    <input type="hidden" name="id" class="form-control" value='<?php echo $data['id'] ?>'>
                        <input type="text" name="application_no" class="form-control" value='<?php echo $data['application_no'] ?>'><br></td></tr>
                    <tr><td><h5><b>Name</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="name" class="form-control" value='<?php echo $data['name'] ?>'><br></td></tr>
                    <tr><td><h5><b>Father Name</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="fname" class="form-control" value='<?php echo $data['fname'] ?>'><br></td></tr>
                    <tr><td><h5><b>Gander</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="gander" class="form-control" value='<?php echo $data['gander'] ?>'><br></td></tr>
                    <tr><td><h5><b>Date of Birth</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="dob" class="form-control" value='<?php echo $data['dob'] ?>'><br></td></tr>
                    <tr><td><h5><b>Block</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="block" class="form-control" value='<?php echo $data['block'] ?>'><br></td></tr>
                    <tr><td><h5><b>District</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="distric" class="form-control" value='<?php echo $data['distric'] ?>'><br></td></tr>
                    <tr><td><h5><b>Adhar Number</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="adhar" class="form-control" value='<?php echo $data['adhar'] ?>'><br></td></tr>
                    <tr><td><h5><b>Type</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="type" class="form-control" value='<?php echo $data['type'] ?>'><br></td></tr>
                    <tr><td><h5><b>Adhar Photo</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="adhar_photo" class="form-control" value='<?php echo $data['adhar_photo'] ?>'><br></td></tr>
                    <tr><td><h5><b>Phone</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="phone" class="form-control" value='<?php echo $data['phone'] ?>'><br></td></tr>
                    <tr><td><h5><b>Email</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="email" class="form-control" value='<?php echo $data['email'] ?>'><br></td></tr>
                    <tr><td><h5><b>Full Adress</b></h5></td><td>&nbsp;&nbsp;<input type="text" name="full_address" class="form-control" value='<?php echo $data['full_address'] ?>'><br></td></tr>
                    <tr><td><h5><b>Payment ScreenShots</b></h5></td><td>&nbsp;&nbsp;<input type="hidden" name="payment_screen" class="form-control" value='<?php echo $data['payment_screen'] ?>'><?php echo "<img src='../assets/images/arogya_mitra/payment_screen/".$data['payment_screen']."' style='height:200px;width:300px'>" ?><br></td></tr>
                    
                </table>
                <center><br><input type="submit" Value="Update" name="save" class="btn btn-info">&nbsp;&nbsp;</center>
              </form>               
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>