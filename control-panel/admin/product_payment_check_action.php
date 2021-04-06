<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? include_once("../config.inc.php");
$action=$_POST['action'];
$$product_payment_check_id=$_POST['$product_payment_check_id'];
$product_payment_check_fullname=$_POST['product_payment_check_fullname'];
$product_payment_check_email=$_POST['product_payment_check_email'];
$product_payment_check_tel=$_POST['product_payment_check_tel'];
$product_payment_check_other=$_POST['product_payment_check_other'];
$product_payment_check_type=$_POST['product_payment_check_type'];
echo "product_payment_check_type$product_payment_check_type";
$product_payment_check_amount=$_POST['product_payment_check_amount'];
$product_payment_check_date=$_POST['product_payment_check_date'];
$product_payment_check_time=$_POST['product_payment_check_time'];


$product_payment_check_bankname=$_POST['product_payment_check_bankname'];
$product_payment_check_invoice=$_POST['product_payment_check_invoice'];



if($action=="add"){
//echo"payment_bank_other$payment_bank_other";
$strSQL="insert into product_payment_check(payment_bank_name,payment_bank_number,payment_bank_ฺฺbranch,payment_bank_ฺฺother)values('$payment_bank_name','$payment_bank_number','$payment_bank_ฺฺbranch','$payment_bank_other')";
$result=mysql_query($strSQL);

if(!$result){
	echo"error".mysql_error();
	}else{
	echo"<script>alert(\"บันทึกข้อมูลธนาคารเรียบร้อยแล้ว\");</script>";
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_check=product_payment_check\"</script>";
	}
}
;
if($_GET['action']=="del"){
	$product_payment_check_id=$_GET['product_payment_check_id'];
echo"delllll.";
$strSQL="delete from product_payment_check where product_payment_check_id='$product_payment_check_id'";
$result=mysql_query($strSQL);
	if(!$result){
		echo"error".mysql_error();;
	}else{
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_check\"</script>";
	}
}
if($action=="edit"){
//echo"payment_bank_other$payment_bank_other";	
	$strSQL="update product_payment_check set product_payment_check_fullname='$product_payment_check_fullname',product_payment_check_email='$product_payment_check_email',product_payment_check_tel='$product_payment_check_tel',product_payment_check_other='$product_payment_check_other',product_payment_check_type='$product_payment_check_type',product_payment_check_amount='$product_payment_check_amount',product_payment_check_date='$product_payment_check_date',product_payment_check_time='$product_payment_check_time',product_payment_check_bankname='$product_payment_check_bankname',product_payment_check_invoice='$product_payment_check_invoice' where product_payment_check_id='$product_payment_check_id'";
	$result=mysql_query($strSQL);
	if(!$result){
		echo"error".mysql_error();
		}else{
		echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_check&action=detail&product_payment_check_id=$product_payment_check_id&action=detail\"</script>";
		}
}
?>
