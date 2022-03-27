<?php include 'header.php'?>
<style>
    #s{
        height:120px;
        width:90%;
        margin:0px auto;
        box-shadow:0px 0px 10px 0px;
        background:white;
        border-radius:10px;
    }
</style>
<div class="content" style="background:white;margin-top:100px;">
        <div class="row">
           <div class="col-md-3" style="cursor:pointer;" onclick="window.location.href=''">
               <div id='s'>
                   <center><h4><i class="fa fa-home" style="margin-top:30px;"></i></h4><h6>Home</h6></center>
               </div>
           </div>
           <div class="col-md-3"  style="cursor:pointer;"   onclick="window.location.href='CBR-Transaction'">
               <div id='s'>
                   <center><h4><i class="fa fa-bank" style="margin-top:30px;"></i></h4><h6>CBR Transection</h6></center>
               </div>
           </div>
           <div class="col-md-3"  style="cursor:pointer;"   onclick="window.location.href='Application-Form'">
               <div id='s'>
                   <center><h4><i class="fa fa-id-card" style="margin-top:30px;"></i></h4><h6>Apply Health Card</h6></center>
               </div>
           </div>
           <div class="col-md-3"  style="cursor:pointer;"  onclick="window.location.href='Show-Helth-Card'">
               <div id='s'>
                   <center><h4><i class="fa fa-eye" style="margin-top:30px;"></i></h4><h6>View Health Card</h6></center>
               </div>
           </div>
        </div>
</div>
<?php include 'footer.php'?>