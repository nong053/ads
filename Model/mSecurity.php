<?php session_start();
include("../config.inc.php");
if($_POST['paramAction']=="loginAction"){
	$cus_email=$_POST["cus_email"];
	$cus_password=$_POST["cus_password"];
	$strSQL="select * from customer where cus_email='$cus_email' and cus_pass='$cus_password'";
	$result=mysqli_query($conn,$strSQL);
	$rsNum=mysqli_num_rows($result);
	if($rsNum!=0){
		$rs=mysqli_fetch_array($result);
		$_SESSION['ses_cus_id']=$rs["cus_id"];
		$_SESSION['ses_cus_enable']=$rs["cus_enable"];
		$_SESSION['ses_cus_email']=$cus_email;
		$_SESSION['ses_cus_first_name']=$rs["cus_first_name"];
		$_SESSION['ses_cus_password']=$cus_password;
		
		echo'["success"]';
	}else{
		echo'["not_success"]';
	}

	
}
if($_POST['paramAction']=="checkEmailAction"){
	$cus_email=$_POST["cus_email"];
	$strSQL="select * from customer where cus_email='$cus_email'";
	$result=mysqli_query($conn,$strSQL);
	$rsNum=mysqli_num_rows($result);
	if($rsNum!=0){
		echo'["email_is_already"]';
	}else{
		echo'["email_is_ok"]';
	}
}

if($_POST['paramAction']=="forgotPassword"){

	$cus_email=$_POST["cus_email"];
	$strSQL="select * from customer where cus_email='$cus_email'";
	$result=mysqli_query($conn,$strSQL);
	$rsNum=mysqli_num_rows($result);
	$rs=mysqli_fetch_array($result);
		
	if($rsNum!=0){

		$strTo2 = $cus_email;
		$strSubject2 = "รหัสผ่านสำหรับเข้าใช้งานเว็บไซต์(www.adskosana.com)";
		$strHeader2 ="";
		$strMessage2 = "รหัสผ่านของท่านคือ". $rs['cus_pass'];
		$flgSend = @mail($strTo2,$strSubject2,$strMessage2,$strHeader2);  // @ = No Show Error //
		if($flgSend){
			echo'["success"]';
		}else{
			echo '["error"]';
			//echo mysqli_error($conn);
		}

	}


	

}

if($_POST['paramAction']=="logoutAction"){
	// session_unset( $_SESSION['ses_cus_id'] );
	// session_unset( $_SESSION['ses_cus_email'] );
	// session_unset( $_SESSION['ses_cus_password'] );
	session_destroy();
	
	echo'["success"]';
}


?>