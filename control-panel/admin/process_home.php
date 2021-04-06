<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../config.inc.php");
$home_detail=$_POST['home_detail'];
$home_title=$_POST['home_title'];
$home_detail_eng=$_POST['home_detail_eng'];
$admin_id=$_POST['admin_id'];

$strSQL="update home set home_title='$home_title',home_detail='$home_detail',home_detail_eng='$home_detail_eng' where admin_id='$admin_id'";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
	echo"<script>window.location=\"index.php?page=home\";</script>";
	
	}
?>