<?php session_start();
include("../config.inc.php");
$rdg_id=$_POST['rdg_id'];
$cus_id=$_SESSION['cus_id'];
if($_POST['paramAction']=="savePost"){
	
	$strSQL="insert into realty_save_post(cus_id,rdg_id)values('$cus_id','$rdg_id')";
	$result=mysql_query($strSQL);
	if($result){
		echo'["success"]';
	}
}
if($_POST['paramAction']=="checkUnique"){
	$strSQL="select * from realty_save_post where cus_id='$cus_id' and  rdg_id='$rdg_id'";
	$result=mysql_query($strSQL);
	$num=mysql_num_rows($result);
	//echo $num;
	
	if($num>0){
		echo'["already"]';
	}else{
		echo'["unique"]';
	}
}
if($_POST['paramAction']=="del"){
	$strSQL="delete from realty_save_post where rdg_id='$rdg_id'";
	$result=mysql_query($strSQL);
	if($result){
		echo'["success"]';
	}
}

?>