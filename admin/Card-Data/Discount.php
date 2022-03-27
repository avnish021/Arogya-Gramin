<?php
include "../../Classes/Database.php";
$obj = new Database();
if(isset($_POST['vmail'])&&isset($_POST['funit'])&&isset($_POST['fdiscount'])&&isset($_POST['punit'])&&isset($_POST['pdiscount'])){
    extract($_POST);
    $values = array("V_EMAIL"=>$vmail,"PERSONAL_CARD_RATE"=>$punit,"PERSONAL_DISCOUNT"=>$pdiscount,"FAMILY_CARD_RATE"=>$funit,"FAMILY_CARD_DISCOUNT"=>$fdiscount);
    	$obj->Select("card_discount", "*", null, "V_EMAIL='$vmail'", null, null);
    	foreach($obj->getResult() as list("V_EMAIL"=>$email));
if($email==$vmail){
if($obj->Update("card_discount",$values,"V_EMAIL = '$vmail'")){
echo '<div class="alert alert-success">Record Update Successful</div>' ;   
} 
}else{
if($obj->Insert("card_discount",$values)){
echo '<div class="alert alert-success">Record Added Successful</div>' ;       
}
}
}
?>