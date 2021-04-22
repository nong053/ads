<?php  ob_start(); session_start();?>
<?php
include("../config.inc.php");

$cus_email=$_POST['cus_email'];

//echo "cus_email=".$cus_email;


if($_POST["action"]=="check_user_uq"){
	$check_uq_cus=mysqli_query($conn,"select * from customer where cus_email ='$cus_email'");

	$check_uq_rs_cus = mysqli_num_rows($check_uq_cus);
	//echo  $check_uq_rs_cus;
	if($check_uq_rs_cus>0){
		echo "false";
	}else{
		echo "true";
	}
}	
?>