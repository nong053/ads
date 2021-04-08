<?php session_start();
include("../config.inc.php");
$cus_id=$_POST['cus_id'];
$cus_title_name=$_POST['cus_title_name'];
$cus_first_name=$_POST['cus_first_name'];
$cus_last_name=$_POST['cus_last_name'];
$cus_birthday_dd=$_POST['cus_birthday_dd'];
$cus_birthday_mm=$_POST['cus_birthday_mm'];
$cus_birthday_yyyy=$_POST['cus_birthday_yyyy'];
$cus_email=$_POST['cus_email'];
$cus_tel=$_POST['cus_tel'];
$cus_show_tel=$_POST['cus_show_tel'];
$cus_tel2=$_POST['cus_tel2'];
$cus_province=$_POST['rdg_address_province_id'];
$cus_district=$_POST['rdg_address_district_id'];
$cus_sub_district=$_POST['rdg_address_sub_district_id'];
$cus_village_no=$_POST['cus_village_no'];
$cus_road=$_POST['cus_road'];
$cus_postal_code=$_POST['cus_postal_code'];
$cus_other=$_POST['cus_other'];
$cus_company=$_POST['cus_company'];
$cus_update=date("Y-m-d H:i:s");







if($_POST['paramAction']=="updateProfile"){
	//echo "cus_other".$cus_other;
	//$strSQL1="update customer set ";
	//$result1=mysqli_query($conn,$strSQL1);
	$strSQL="update customer set 
	cus_title_name='$cus_title_name',
	cus_first_name='$cus_first_name',cus_last_name='$cus_last_name',
	cus_birthday_dd='$cus_birthday_dd',cus_birthday_mm='$cus_birthday_mm',
	cus_birthday_yyyy='$cus_birthday_yyyy',cus_email='$cus_email',
	cus_tel='$cus_tel',cus_show_tel='$cus_show_tel',
	cus_tel2='$cus_tel2',cus_province='$cus_province',
	cus_district='$cus_district',cus_sub_district='$cus_sub_district',
	cus_village_no='$cus_village_no',cus_road='$cus_road',
	cus_postal_code='$cus_postal_code',
	cus_other='$cus_other',
	cus_company='$cus_company',
	
	cus_update='$cus_update'
	
	where cus_id='$cus_id'
	";
	$result=mysqli_query($conn,$strSQL);
	if($result){
		echo'["success"]';
	}else{
		echo mysqli_error();
	}

}
if($_POST['paramAction']=="selectIDPDSD"){
	$strSQLCus="select * from customer where cus_id='$ses_cus_id'";
	$resultCus=mysqli_query($conn,$strSQLCus);
	$rsCus=mysqli_fetch_array($resultCus);
	echo "{\"cus_province\":\"".$rsCus['cus_province']."\",\"cus_district\":\"".$rsCus['cus_district']."\",\"cus_sub_district\":\"".$rsCus['cus_sub_district']."\"}";
}


if($_POST['paramAction']=="updatePass"){
	$cus_new_pass=$_POST['cus_new_pass'];
	$strSQL="update customer set
	cus_pass='$cus_new_pass'
	where cus_id='$cus_id'
	";
	$result=mysqli_query($conn,$strSQL);
	if($result){
		echo'["success"]';
	}else{
		echo mysqli_error();
	}
	
}


?>