<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? include_once("../config.inc.php");
$action=$_POST['action'];
$$payment_bank_id=$_POST['$payment_bank_id'];
$payment_bank_name=$_POST['payment_bank_name'];
$payment_bank_ฺฺbranch=$_POST['payment_bank_ฺฺbranch'];
$payment_bank_number=$_POST['payment_bank_number'];
$payment_bank_other=$_POST['payment_bank_other'];

if($action=="add"){

if($payment_bank_name==""){
echo"<script>alert(\"กรอกชื่อธนาคารด้วยครับ\");</script>";
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_bank=product_payment_bank\"</script>";
exit();
}
//echo"payment_bank_other$payment_bank_other";
$strSQL="insert into product_payment_bank(payment_bank_name,payment_bank_number,payment_bank_ฺฺbranch,payment_bank_ฺฺother)values('$payment_bank_name','$payment_bank_number','$payment_bank_ฺฺbranch','$payment_bank_other')";
$result=mysql_query($strSQL);

if(!$result){
	echo"error".mysql_error();
	}else{
	echo"<script>alert(\"บันทึกข้อมูลธนาคารเรียบร้อยแล้ว\");</script>";
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_bank=product_payment_bank\"</script>";
	}
}
;
if($_GET['action']=="del"){
	$payment_bank_id=$_GET['payment_bank_id'];
echo"delllll.";
$strSQL="delete from product_payment_bank where payment_bank_id='$payment_bank_id'";
$result=mysql_query($strSQL);
	if(!$result){
		echo"error".mysql_error();;
	}else{
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_bank=product_payment_bank\"</script>";
	}
}
if($action=="edit"){
echo"payment_bank_other$payment_bank_other";	
	$strSQL="update product_payment_bank set payment_bank_name='$payment_bank_name',payment_bank_number='$payment_bank_number',payment_bank_ฺฺbranch='$payment_bank_ฺฺbranch',payment_bank_ฺฺother='$payment_bank_other' where payment_bank_id='$payment_bank_id'";
	$result=mysql_query($strSQL);
	if(!$result){
		echo"error".mysql_error();
		}else{
		echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_bank=product_payment_bank\"</script>";
		}
}
?>
