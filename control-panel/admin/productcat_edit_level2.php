<meta http-equiv="content-type" content="text/html; charcet=utf-8" />
<?php 
include("../config.inc.php");
$productcat_level2_id=$_POST['productcat_level2_id'];
$productcat_name=$_POST['productcat_name'];
$productcat_detail=$_POST['productcat_detail'];
$productcat_name_eng=trim($_POST['productcat_name_eng']);
$productcat_detail_eng=trim($_POST['productcat_detail_eng']);
$admin_id=trim($_POST['admin_id']);
$strSQL="update productcat_level2 set productcat_name='$productcat_name',productcat_detail='$productcat_detail',productcat_name_eng='$productcat_name_eng',productcat_detail_eng='$productcat_detail_eng' where productcat_level2_id='$productcat_level2_id' and admin_id='$admin_id'";
$result=mysql_query($strSQL);
if(!$result){
echo"nonon".mysql_error();
}else{
	echo"<script>alert(\"Edit Data is Success\");</script>";
	
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=productcat_level2\"</script>";
	exit();	
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=productcat_level2\"</script>";
	
//header("Location:index.php?page=productcat");
/*echo"<script>window.location=\"index.php?page=productcat\";</script>";*/
}
?>