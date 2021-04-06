<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$edit_banner_id=$_POST['edit_banner_id'];
$banner_detail=$_POST['banner_detail'];

//echo"11$edit_banner_id<br>";
//echo"22$banner_detail<br>";

 //edit bannerif(copy($_FILES["filUpload"]["tmp_name"],"../home_banner/".$_FILES["filUpload"]["name"])){

// edit banner $strSQL="update home_banner set banner_name='".$_FILES["filUpload"]["name"]."',banner_detail='$banner_detail' where banner_id=$edit_banner_id";
	
	$strSQL="update home_banner set banner_detail='$banner_detail' where banner_id=$edit_banner_id";
	$result=mysql_query($strSQL);
	if(!$result){
	echo"error".mysql_error();
	}
	else{
		echo"<script>window.location=\"index.php?page=home\";</script>";
		}
	
	

//edit banner}
/*
$strSQL="update home_banner set banner_name='test1',banner_detail='test2' where banner_id=1";
	$result=mysql_query($strSQL);
	if(!$result){
	echo"error".mysql_error();
	}else{echo"okk";}
	*/
?>