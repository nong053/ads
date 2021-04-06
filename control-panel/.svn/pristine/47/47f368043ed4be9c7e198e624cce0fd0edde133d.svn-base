
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#div_preview{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:13px;
}
</style>
<div id="div_preview">
<?
$button=$_GET['button'];
$admin_id=$_GET['admin_id'];
require("class_mysql.php");
$db=new database();
if($_GET['want']=="preview"){

	$result_preview = $db->selectSQL("button_style where admin_id='$admin_id'");
	$rs_preview=mysql_fetch_array($result_preview);
	$preview_object=$rs_preview[$button];
	echo"preview_object---->$preview_object";
	$img="../object_system/$admin_id/$preview_object";
	if(!$preview_object){
		echo"ไม่มีไฟล์ข้อมูล";
	}else{
	?>
    <img src="<?=$img?>" />
    <a href="preview_button_style.php?del_file=<?=$img?>&button=<?=$button?>">ลบไฟล์นี้</a>
    <?
	}
}
if($_GET['del_file']){
	$button=$_GET['button'];
	@unlink($_GET['del_file']);
	include("../config.inc.php");
	$strSQL="update button_style set $button=''";
	mysql_query($strSQL);	
}
?>
</div>