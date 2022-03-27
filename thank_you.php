<?php 
ob_start();
include 'header.php';
include 'connect.php';

// $servername = "localhost";
// $username = "arogyagr_arogyagramin";
// $password = "arogyagramin123";
// $dbname = "arogyagr_arogyagramin";

$id = $_SESSION['enroll_id'];
$ref_id = $_SESSION['ref_id']; 
$type = $_SESSION['type'];
//echo "id >".$id."ref >".$ref_id."type >".$type;

if(isset($_SESSION['ref_id']) && isset($_SESSION['enroll_id'])){
    if($type=="family"){
        $query="UPDATE `familyhealthcard` SET `order_status`= 'PAID',`order_id`='$ref_id' WHERE `id`=" .$id.";";
    }elseif($type=="personal"){
        $query="UPDATE `personalhealthcard` SET `order_status`= 'PAID',`order_id`='$ref_id' WHERE `id`=" .$id.";";
    }
    mysqli_query($conn, "$query");
}else{
header('Location: index');
}

?>
<div class="container-fulid">
    
    
    
    <div class="container">
        <div class="row" style="margin-top:50px">
            <center>
               <br> <h2><u><b>Thank you for your successful contribution</b></u></h2></br>
                <b></b><h4 style="color:blue">Your refrence ID is <?php echo $ref_id; ?> .</h4>
                <span style="font-size:92%!important">(Note down this reference number for further verification.)<br/>(आगे के सत्यापन के लिए इस रेफरन्स नंबर को नोट कर लें।)</span><br/>
                <br><h3>One of our executive will contact you soon<b></b></h3>
                <br> <h3><b>Your small contribution will make us eligible to serve our best affordable healthcare service to the community. </b></h3>
                <br><h4>If you have any questions or inquiries. Do not hesitate to contact us on our Toll-Free number - 18008906600<b></b></h4>
                <br>
                
            
            <br>
            
            </center>
        </div> 
    </div>
    
</div>

<?php
 ob_end_flush();
 include 'footer.php'; ?>


