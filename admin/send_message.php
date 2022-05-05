<?php include 'header.php'?>
<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string
$qry = mysqli_query( $conn, "select * from contact_us where id='$id'"); // select query
$data = mysqli_fetch_array($qry); // fetch data
if(isset($_POST['save'])) // when click on Update button
{
    
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sender = "From: arogya001@arvisa.in";
    if(mail($email, $subject, $message, $sender)){
      echo "<script>alert('Your Message Upload successfully !..');</script>";
        exit();
    }else{
        echo "Error: " . $conn->error;
        
    }
    mysqli_close($conn);
}
?>

</style>
<div class="page-content">
              <div class="main-wrapper">
              <h3>Send Reply Message</h3>

<div class="container-fluid">
  <form action="" method="post">
  <div class="row">
    <div class="col-sm-12">
     <!-- <h4 class="hs_heading">Form Fill</h4>-->
     
        <div class="row">
          <div class="col-sm-6">
            <label>Email</label>
              <input id="uname" name="email" type="text" class="form-control" value="<?php echo $data['email_1'] ?>">
           <br>
          </div>
          <div class="col-sm-6">
            <label>Email</label>
              <input id="uname" name="subject" type="text" class="form-control" value="<?php echo $data['subject'] ?>">
           <br>
          </div>
          <!-- /.col-lg-6 -->

          <div class="col-sm-12">
            <label>Reply Message</label>
           <textarea name="message" class="form-control"></textarea>
              
           <br>
         
            <input type="hidden" name="rdt" value="<?php echo date("l j \ F Y")?>">
           
              <button id="em_sub" class="btn btn-success" name="save" type="submit">Send</button><br>
           <hr>
          </div>
        </div>
      </div>
    </div>



    
 
  </form>

</div>

</div>
</div>
<?php include 'footer.php'?>
