<?php session_start();?>
<?php
include("../config.inc.php");
$cus_id=$_SESSION['cus_id'];
$rdg_id=$_POST['rdg_id'];

if($_POST['paramAction']=="getMap"){
	$strSQL="select * from realty_data_general 
	where 
	 rdg_id='$rdg_id'";
	
	$result=mysqli_query($conn,$strSQL);
	$rs=mysqli_fetch_array($result);
	echo $rs['rdg_map'];
}

?>