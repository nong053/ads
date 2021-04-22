<?php  ob_start(); session_start();?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include("../config.inc.php");
// require("../class_mysql.php");
// $db = new database();
$cus_email=$_POST['cus_email'];
$cus_first_name=$_POST['cus_first_name'];
$cus_last_name=$_POST['cus_last_name'];
$cus_tel=$_POST['cus_tel'];
$cus_pass=$_POST['cus_pass'];








$cus_date=date("d-m-y:h:i:s");
$strSQL="insert into customer(cus_email,cus_enable,cus_pass,cus_first_name,cus_last_name,cus_tel,cus_date,cus_update)VALUES
('$cus_email','P','$cus_pass','$cus_first_name','$cus_last_name','$cus_tel','$cus_date','$cus_date')";
$sucess=mysqli_query($conn,$strSQL)or die(mysqli_error());

if($sucess){

$result_cus=mysqli_query($conn,"select * from customer where cus_email ='$cus_email'");
$re_cus = mysqli_fetch_array($result_cus);
$_SESSION['cus_id']=$re_cus['cus_id'];
$_SESSION['cus_pass']=$re_cus['cus_password'];
$_SESSION['cus_first_name']=$re_cus['cus_first_name'];
$_SESSION['cus_last_name']=$re_cus['cus_last_name'];
$_SESSION['ses_cus_email']=$re_cus['cus_email'];


//echo "ses_cus_email=".$_SESSION['ses_cus_email'];


/*
		$result_admin=mysqli_query($conn,"select * from admin where admin_id='1'");
		$rs_admin = mysqli_fetch_array($result_admin);

		//ส่งmailให้ผู้ดูแลระบบ
		$strTo = $result_admin[admin_email];
		$strSubject = "สมัครสมาชิก";
		$strHeader =$result_admin[admin_website] ;
		$strMessage = "เข้าไปตรวจสอบระบบ Back office ด้วยครับ คุณ$cus_fullname สมัครสมาชิก:ชื่อเข้าใช้ระบบ=$cus_email รหัสผ่าน=$cus_password";
		$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //		
		
		
		
		//ส่งให้สมาชิก
		$strTo2 = $cus_email;
		$strSubject2 = "สมัครสมาชิก";
		$strHeader2 =$result_admin[admin_website] ;
		$strMessage2 = " คุณ $cus_fullname ได้ทำการสมัครสมาชิกเว็บไชต์:$result_admin[admin_website]เรียบร้อยแล้ว ชื่อเข้าใช้ระบบ=$cus_email รหัสผ่าน=$cus_password";
		$flgSend = @mail($strTo2,$strSubject2,$strMessage2,$strHeader2);  // @ = No Show Error //
	*/
}else{
		echo"error".mysqli_error();
}

echo"<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
echo"<meta http-equiv=\"refresh\" content=\"0; URL='../index.php'\">";
?>