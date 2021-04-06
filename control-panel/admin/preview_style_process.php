
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#div_preview{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:13px;
}
</style>
<div id="div_preview">
<?
echo"test";
require("class_mysql.php");
$db=new database();
if($_GET['want']=="preview"){
	
	$bg_id=$_GET['bg_id'];
	echo"bg_id---->$bg_id";
	$admin_id=$_GET['admin_id'];
	//echo"object_position------->$object_position";
	$result_preview = $db->selectSQL("bg_style where admin_id='$admin_id'");
	$rs_preview=mysql_fetch_array($result_preview);
	$preview_object=$rs_preview[bg_name];
	
	echo"preview_object---->$preview_object";
	$img="../object_system/$admin_id/$preview_object";
	if(!$preview_object){
		echo"ไม่มีไฟล์ข้อมูล";
	}else{
	?>
    
    <img src="<?=$img?>" />
    <a href="preview_style_process.php?del_file=<?=$img?>">ลบไฟล์นี้</a>
    <?
	}
	
	
}
if($_GET['del_file']){
	
	@unlink($_GET['del_file']);
	include("../config.inc.php");
	$object_position=$_GET['object_position'];
	echo"object_position$object_position";
	$strSQL="update bg_style set bg_name=''";
	mysql_query($strSQL);
	
	
	
}
?>
</div>