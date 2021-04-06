<?php session_start(); ob_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../config.inc.php");

$Knowledge_detail=$_POST['Knowledge_detail'];
$Knowledge_title=$_POST['Knowledge_title'];
$Knowledge_detail_eng=$_POST['Knowledge_detail_eng'];
$Knowledge_title_eng=$_POST['Knowledge_title_eng'];
$action_Knowledge=$_POST['action_Knowledge'];
$member_user_id=$_SESSION['member_user_id'];
echo"action_Knowledge:$action_Knowledge<br>";




$action_Knowledge_del=$_GET['action_Knowledge_del'];
$Knowledge_del_id=$_GET['Knowledge_del_id'];
$Knowledge_id=$_POST['Knowledge_id'];
$Knowledge_link=$_POST['Knowledge_link'];

echo"11$Knowledge_detail";
echo"22$Knowledge_title";
echo"33$action_Knowledge";

if($action_Knowledge=="edit"){
	//echo"hello edit<br>";
	//echo"Knowledge_title$Knowledge_title<br>";
	//echo"Knowledge_detail$Knowledge_detail<br>";
	//echo"Knowledge_id$Knowledge_id<br>";
$strSQL="update knowledge set Knowledge_title='$Knowledge_title',Knowledge_link='$Knowledge_link',Knowledge_detail='$Knowledge_detail',Knowledge_title_eng='$Knowledge_title_eng',Knowledge_detail_eng='$Knowledge_detail_eng' where Knowledge_id=$Knowledge_id" ;
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
	/*echo"<script>window.location=\"index.php?page=Knowledge\";</script>";*/
	header('location:index.php?page=Knowledge');
	
	}
}


if($action_Knowledge=="add"){
	$strSQL="insert into 	knowledge(Knowledge_title,Knowledge_link,Knowledge_detail,Knowledge_title_eng,Knowledge_detail_eng,admin_id)values('$Knowledge_title','$Knowledge_link','$Knowledge_detail','$Knowledge_title_eng','$Knowledge_detail_eng','$member_user_id')";
	$result=mysql_query($strSQL);
	if(!$result){echo"error".mysql_error();}else{
	/*echo"<script>window.location=\"index.php?page=Knowledge\";</script>";*/}
	header('location:index.php?page=Knowledge');
}


if($action_Knowledge_del=="del"){
	$strSQL="delete from knowledge where Knowledge_id=$Knowledge_del_id";
	$result=mysql_query($strSQL);
	if(!$result){echo"error".mysql_error();}else{
		/*echo"<script>window.location=\"index.php?page=Knowledge\";</script>";}*/
		header('location:index.php?page=Knowledge');
		}
	}

?>