<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php 
include("../config.inc.php");
$picturecat_name=trim($_POST['picturecat_name']);
$picturecat_detail=trim($_POST['picturecat_detail']);
$picturecat_name_eng=trim($_POST['picturecat_name_eng']);
$picturecat_detail_eng=trim($_POST['picturecat_detail_eng']);
$admin_id=trim($_POST['admin_id']);

$strSQL="select * from picturecat where picturecat_name='$picturecat_name' and admin_id='$admin_id'";
$result=mysql_query($strSQL) or die (mysql_error());
if($rs=mysql_fetch_array($result)){
	echo"<script>alert(\"มีข้อมูลอยู่แล้ว\");</script>";
	echo"<script>window.location=\"index.php?page=picturecat\"</script>";
	exit();
}


if($picturecat_name==""){
	echo"<script>alert(\"ไม่มีข้อมูล\");</script>";
	echo"<script>window.location=\"index.php?page=picturecat\"</script>";
	exit();
}

$strSQL="insert into picturecat(picturecat_name,picturecat_name_eng,picturecat_detail,picturecat_detail_eng,admin_id)VALUES('$picturecat_name','$picturecat_name_eng','$picturecat_detail','$picturecat_detail_eng','$admin_id')";
$ok=mysql_query($strSQL);
if(!$ok){echo"error".mysql_error();}

$strSQL2="select * from picturecat where picturecat_name='$picturecat_name' and admin_id='$admin_id'";
$result2=mysql_query($strSQL2);
if(!result2){
echo"erorr".mysql_error();
}
$rs=mysql_fetch_array($result2);
$picturecat_id=$rs["picturecat_id"];

/*
$picturecat_path="../picture/".$admin_id."/";
if(!is_dir($picturecat_path)){
umask(0);
mkdir($picturecat_path,0777);
}
*/
$picturecat_path="../picture/".$admin_id."/".$picturecat_id."/";
if(!is_dir($picturecat_path)){
umask(0);
mkdir($picturecat_path,0777);

}	

//header("Location:index.php?page=picturecat");
echo"<script>window.location=\"index.php?page=picturecat\"</script>";


?>