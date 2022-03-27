<?php include 'header.php'?>
<div class="page-content" style="margin-top:130px;">
              <div class="main-wrapper">
              <h3>Health Card Details...</h3>

<style>

#overflowTest {
  
  color: white;
  padding: 15px;
  width: 100%;
  
  overflow-x: scroll;
  border: 1px solid #ccc;
}
</style>
<div class="container-fluid">
 <div class="row">
 <div class="container-fluid">
  <?php
  include "../Classes/Database.php";
  
  $obj = new Database();
  $v_id=$_SESSION['v_email'];
  $condition=" AND STATUS = 'Initiated'" ;

  $obj->Select("crad_details","*",null,"V_ID='$v_id'"."AND STATUS!='Approved'" ,null,null);

  ?>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div id="overflowTest">
  <table class="table table-bordered table-striped">
    <style>
        th{
    padding:0;
    font-size:12px;
}
td{
    padding:0;
    font-size:12px;
}
    </style>  
      
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Registration Number</th>
       
        <th>Name</th>
  
        <th>Date Of Birth</th>
        <th>Gander</th>
        <th>Application Type</th>
        <th>Aadhar card number</th>
       
        <th>complete address</th>
        <th>Status</th>
        <th>Edit</th>
        
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
include '../admin/connect.php';
foreach($obj->getResult() as list("ID"=>$id,'REGISTRATION'=>$registration,"DISTRICT"=>$district,"BLOCK"=>$block,"NAME"=>$name,"DOB"=>$dob,"GENDER"=>$gender
,"TYPE"=>$type,"AADHAAR"=>$aadhar,"IMAGE"=>$image,"V_ID"=>$vid,"ADDRESS"=>$address,"STATUS"=>$status)){
?>

<tr>
<td><?php echo $id; ?></td>
        <td><?php echo $registration; ?></td>
      
        <td><?php echo $name; ?></td>

        <td><?php echo $dob; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $type; ?></td>
        <td><?php echo $aadhar; ?></td>
       
        <td><?php echo $address; ?></td>
        <td><?php echo $status; ?></td>
        <td><a href="Edit-Health-Card?RegId=<?php echo base64_encode($registration);?>" class="btn btn-primary btn-sm">Edit</a></td>
        </tr>
<?php
}
?>


     
    </tbody>
  </table>
  </div>
</div>


 </div>
</div>
</div>
<div class="container-fluid" style="margin-top:50px;">
 <div class="row">
 <div class="container-fluid">
 <center> <h3><b>Approved Health Card </b></h3><hr></center>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div id="overflowTest">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Registration Number</th>
       
        <th>Name</th>
  
        <th>Date Of Birth</th>
        <th>Gander</th>
        <th>Application Type</th>
        <th>Aadhar card number</th>
       
        <th>complete address</th>
        <th>Status</th>
          </tr>
    </thead>
    <tbody id="myTable">
     <?php
include '../admin/connect.php';
 $obj->Select("crad_details","*",null,"V_ID='$v_id'"."AND STATUS='Approved'" ,null,null);
foreach($obj->getResult() as list("ID"=>$id,'REGISTRATION'=>$registration,"DISTRICT"=>$district,"BLOCK"=>$block,"NAME"=>$name,"DOB"=>$dob,"GENDER"=>$gender
,"TYPE"=>$type,"AADHAAR"=>$aadhar,"IMAGE"=>$image,"V_ID"=>$vid,"ADDRESS"=>$address,"STATUS"=>$status)){
?>

<tr>
<td><?php echo $id; ?></td>
        <td><?php echo $registration; ?></td>
      
        <td><?php echo $name; ?></td>

        <td><?php echo $dob; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $type; ?></td>
        <td><?php echo $aadhar; ?></td>
       
        <td><?php echo $address; ?></td>
        <td><?php echo $status; ?></td>
    
        </tr>
<?php
}
?>

    </tbody>
  </table>
  </div>
</div>


 </div>
</div>
</div>
</div>
<?php include 'footer.php'?>
