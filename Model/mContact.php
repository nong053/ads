<?php session_start();
$cus_id=$_SESSION['ses_cus_id'];
include("../config.inc.php");






if($_POST['paramAction']=="sendEmail"){
	//echo 'sendEmail1' ;
	$contact_detail=$_POST['contact_detail'];
	$contact_fullname=$_POST['contact_fullname'];
	$contact_email=$_POST['contact_email'];
	$admin_id=$_POST['admin_id'];
	$rdg_id=$_POST['rdg_id'];
	
	
	//echo "admin_id=".$admin_id;

	$srtSQL2="select * from customer where cus_id=3";
	$result2=mysql_query($srtSQL2);
	$rs2=mysql_fetch_array($result2);
	//ส่งให้เจ้าของประกาศ
	$strTo2 = $rs2['cus_email'];
	$strSubject2 = "สอบถามข้อมูลประกาศ(www.adsthaidd.com)";
	$strHeader2 ="สอบถามประกาศเลขที่ $rdg_id";
	$strMessage2 = " คุณ $contact_fullname สอบถามเกี่ยวกับประกาศของท่านดังนี้ $contact_detail ข้อมูลติดต่อกลับเบอร์โทร $contact_tel E-mail $contact_email ";

	//echo "Email=".$strTo2;

	$flgSend = mail($strTo2,$strSubject2,$strMessage2,$strHeader2);  // @ = No Show Error //
	//echo $flgSend ;
	if($flgSend){
		echo'["success"]';
	}else{
		echo mysql_error();
	}
	
}
if($_POST['paramAction']=="saveContract"){
	
	$contact_detail=$_POST['contact_detail2'];
	$contact_fullname=$_POST['contact_fullname2'];
	$contact_email=$_POST['contact_email2'];
	$admin_id=$_POST['admin_id2'];
	$rdg_id=$_POST['rdg_id2'];
	
	$contact_date=date("Y-m-d H:i:s");
	$strSQL="insert into contact(contact_detail,contact_fullname,contact_tel,contact_email,admin_id,contact_date)
	values(
	'$contact_detail','$contact_fullname','$contact_tel','$contact_email','$admin_id','$contact_date'
	)";
	$reslut=mysql_query($strSQL);
	if($reslut){
	echo'["success"]';
	}else{
	echo mysql_error();
	}
	
}

?>