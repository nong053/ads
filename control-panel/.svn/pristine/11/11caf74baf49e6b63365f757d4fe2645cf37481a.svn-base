<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../config.inc.php");
$cus_rule_th=$_POST['cus_rule_th'];
$cus_rule_eng=$_POST['cus_rule_eng'];


$strSQL="update customer_rule set cus_rule_th='$cus_rule_th',cus_rule_eng='$cus_rule_eng'";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
	echo"<script>window.location=\"index.php?page=member_system&select_member=member_rule\";</script>";
	
	}
?>