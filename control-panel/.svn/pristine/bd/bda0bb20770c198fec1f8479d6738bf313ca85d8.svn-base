<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php 
include("../config.inc.php");
$productcat_name=trim($_POST['productcat_name']);
$productcat_detail=trim($_POST['productcat_detail']);
$productcat_name_eng=trim($_POST['productcat_name_eng']);
$productcat_detail_eng=trim($_POST['productcat_detail_eng']);
$admin_id=trim($_POST['admin_id']);

$strSQL="select * from productcat where productcat_name='$productcat_name' and admin_id='$admin_id'";
$result=mysql_query($strSQL) or die (mysql_error());
if($rs=mysql_fetch_array($result)){
	echo"<script>alert(\"มีข้อมูลอยู่แล้ว\");</script>";
	echo"<script>window.location=\"index.php?page=productcat\"</script>";
	exit();
}


if($productcat_name==""){
	echo"<script>alert(\"ใส่ชื่อหมวดสินค้าด้วยครับ\");</script>";
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=productcat\"</script>";
	exit();
}
$strSQL="insert into productcat(productcat_name,productcat_detail,productcat_name_eng,productcat_detail_eng,admin_id)VALUES('$productcat_name','$productcat_detail','$productcat_name_eng','$productcat_detail_eng','$admin_id')";
$ok=mysql_query($strSQL);
if(!$ok){echo mysql_error();}

$strSQL2="select * from productcat where productcat_name='$productcat_name' and admin_id ='$admin_id'";
$result2=mysql_query($strSQL2);
if(!result2){
echo"erorr".mysql_error();
}
$rs=mysql_fetch_array($result2);
$productcat_id=$rs[productcat_id];

$product_path="../product/";
if(!is_dir($product_path)){
umask(0);
mkdir($product_path,0777);
}

$productcat_path="../product/".$productcat_id."/";
if(!is_dir($productcat_path)){
umask(0);
mkdir($productcat_path,0777);
}	

//header("Location:index.php?page=productcat");
echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=productcat\"</script>";


?>