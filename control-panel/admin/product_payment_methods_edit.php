<?
$product_payment_methods_detail=$_POST['product_payment_methods_detail'];
include_once("../config.inc.php");
$strSQL="update product_payment_methods set product_payment_methods_detail='$product_payment_methods_detail' where product_payment_methods_id=1";
$result=mysql_query($strSQL);
if(!$result){echo"error".mysql_error();
}else{
	echo"<script>alert(\"แก้ไขข้อมูลเรียบร้อยแล้ว\")</script>";
	echo"<script> window.location=\"index.php?page=ecommerce_system&select_ecommerce=product_payment_methods\"</script>";

	}
?>