<?php session_start();?>
<?
$userUrlId=$_GET['userUrlId'];
if($userUrlId!=""){
$_SESSION['member_user_url']=$userUrlId;
}
//Usering on hosting
//echo"<script>window.location=\"../index.php?page=home\"</script>";

	function __autoload($filename){
		require_once $filename.".php";
		}
	$obj_manage_data = new manage_data();
	$result_admin=$obj_manage_data->select_data("admin where admin_username=$userUrlId");
	$rs_num=mysql_num_rows($result_admin);
	echo"$rs_num";
	//echo"<script>window.location=\"./index.php?page=home\"</script>";
?>

