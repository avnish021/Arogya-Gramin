<?php
if(isset($_POST)){
extract($_POST);
date_default_timezone_set("Asia/Calcutta");  
$date =  date('d-m-Y H:i:s');
include "../Classes/Database.php";
$obj = new Database();
$trnsid = $_POST['trnsid'];
if($name!=""&&!$email=""&&$quantity!=""&&$cardamt!=""&&$discount!=""&&$tot_amount!=""&&$status
!=""&&$contact!=""&&$mode!=""&&$trnsid!=""){
$vmail = $_POST['UserMail'];

$obj->Select("v_transaction","*",null,"TRANS_ID = '$trnsid'");
foreach ($obj->getResult() as list("TRANS_ID"=>$transaction));

 $arr = array("TYPE"=>$type,"TRANS_ID"=>$trnsid,"V_NAME"=>$name,"V_EMAIL"=>$_POST['UserMail'],"QUANTITY"=>$quantity,"AMOUNT_EVERY_CARD"=>$cardamt,"DISCOUNT"=>$discount
,"TOTAL_AMOUNT"=>$tot_amount,"PAYMENT_STATUS"=>$status,"ERROR_CODE"=>"","ERROR_DESCRIPTION"=>"",
    "ERROR_SOURCE"=>"","ERROR_STEP"=>""
,"ERROR_REASON"=>"","PAYMENT_ID"=>"","CONTACT"=>$contact,"MODE"=>$mode,"DATE"=>$date);

if($trnsid==$transaction){
$obj->Update("v_transaction",$arr,"TRANS_ID = '$trnsid'");
}else{
   $obj->Insert("v_transaction",$arr);
}
}elseif($payment_id!=""&&$email!=""&&$amount=!""){
$arg = array("ERROR_CODE"=>"","ERROR_DESCRIPTION"=>"","ERROR_SOURCE"=>"","ERROR_STEP"=>"","ERROR_REASON"=>"","PAYMENT_ID"=>"","RAZORPAY_PAYMENT_ID"=>$payment_id,"PAYMENT_STATUS"=>"Complete","TOTAL_AMOUNT"=>$_POST['amount']);
if($obj->Update("v_transaction",$arg,"TRANS_ID = '$trnsid'")){
$obj->Select("volunteer","*",null,"v_email = '$email'"); 
foreach ($obj->getResult() as list("personal_card"=>$personalCrd,"family_card"=>$familyCrd));
$updatemail = $_POST['email'];
if($_POST['type']=="personal_card"){
 $total_card  =$personalCrd + $quantity;
  $walletTotal = array("personal_card"=>$total_card);
 $obj->Update("volunteer",$walletTotal,"v_email = '$updatemail'");
}elseif($_POST['type']=="family_card"){
 $total_card  =$familyCrd + $quantity;
 $walletTotal = array("family_card"=>$total_card);
 $obj->Update("volunteer",$walletTotal,"v_email = '$updatemail'");
}
return true;
}else{
return false;
 }
 }elseif($_POST['errorCode']!=""){
$arr2 = array("ERROR_CODE"=>$_POST['errorCode'],"ERROR_SOURCE"=>$_POST['errorSource'],"RAZORPAY_PAYMENT_ID"=>$_POST['razorpay_payment_id'],"ERROR_STEP"=>$_POST['errorStep'],"ERROR_REASON"=>$_POST['ErrorReason'],"PAYMENT_ID"=>$_POST['PaymentID'],"TOTAL_AMOUNT"=>$_POST['amount'],"PAYMENT_STATUS"=>"Failed");
$email = $_POST['email'];
if($obj->Update("v_transaction",$arr2,"TRANS_ID = '$trnsid'")){
    return true;
}

 }
}


?>


