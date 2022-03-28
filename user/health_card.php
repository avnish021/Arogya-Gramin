
<?php include 'header.php'?>
      <title>Arogyagramin | Health Card</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
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
       border:3px solid orange;
       
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
       <style>
           #h{
               display:block;
               color:red;
               font-weight:600px;
               font-size:17px;
           }
           #s{
               display:none;
           }
           #card{
                margin-left:30%;
                margin-top:15%;
           }
           @media screen and (max-width: 768px) {
            #card{
                margin-left:30%;
                margin-top:2%;
                font-size:12px;
           }
           #h{
               display:none;
           }
           #s{
               display:block;

           }
}
       </style>
       
      <?php
include 'connect.php';
$email = $_GET['email'];
$sql = "SELECT * FROM apply_card where email='$email' and status='True'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div id='html-content-holder' style='width:100%;'><div class='col-md-10' id='h' style='margin:auto;background-image:url(../assets/images/slider/0001.jpg);background-size:100% 100%;height:500px;margin-top:20px;'><div id='card'><br><br><br><br><span style='font-weight:bold;'>".$row['name']."<span><br><br><span style='font-weight:bold;'>".$row['application_no']."<span><br><hr><span style='font-weight:bold;'>".$row['gander']."<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-weight:bold;'>".$row['dob']."<span><br><br><span style='font-weight:bold;'>".$row['full_address']."<span><br><hr><span style='font-weight:bold;'> 1 Year (".$row['startdate']." To ".$row['enddate'].")<span></div></div>  <div class='col-md-12 ' id='s' style='margin:auto;background-image:url(../assets/images/slider/0001.JPG);background-size:100% 100%;height:300px;margin-top:20px;'><div id='card'><br><br><br><span style='font-weight:bold;'>".$row['name']."<span><br><br><span style='font-weight:bold;'>".$row['application_no']."<span><br><br><span style='font-weight:bold;'>".$row['gander']."<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-weight:bold;'>".$row['dob']."<span><br><br><span style='font-weight:bold;'>".$row['full_address']." <span><br><span style='font-weight:bold;'> 1 Year(".$row['startdate']." To ".$row['enddate'].")<span></div></div></div><div class='col-md-10 ' id='h' style='margin:auto;background-image:url(../assets/images/slider/0004.jpg);background-size:100% 100%;height:500px;margin-top:20px;'></div><div class='col-md-12' id='s' style='margin:auto;background-image:url(../assets/images/slider/0004.jpg);background-size:100% 100%;height:500px;margin-top:20px;'></div>";
    }
} else {
    echo "<center><br><h5 style='color:green'>Congratulation! Your form is submitted successfully We will notify you after Verification within 7 workings days. Thank you !</h5></center>";
}

$conn->close();
?>
      </div>
</div>
     </div>
    </div>
 
</div>
<script>
$(document).ready(function(){
  
    $("#btn-Convert-Html2Image").hide();
    $("#d2").hide();
    $("#d1").hide();
  $("#btn-Preview-Image").click(function(){
    $("#btn-Convert-Html2Image").show();
    $("#d2").show();
     $("#d1").show();
  });
});
</script>
<input id="btn-Preview-Image" type="button" value="View And Download" class="btn btn-danger"/>
<a id="d2" href="../assets/images/slider/0004.jpg" class="btn btn-info" style="float:right" download>page 2 Download</a>
<a id="btn-Convert-Html2Image" href="#" class="btn btn-info" style="float:right">page 1 Download</a>

    <br/>
    <div id="previewImage" style="width:100%">

    </div>
    <center><img id="d1" src="../assets/images/slider/0004.jpg" style='width:83%'></center>


<script>
$(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "Arogya_health_card.jpg").attr("href", newData);
	});

});

</script>
<?php include 'footer.php'?>