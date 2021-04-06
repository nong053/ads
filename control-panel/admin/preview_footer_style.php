
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
$admin_id=$_GET['admin_id'];
if($_GET['want']=="preview"){
	
	
	
	$result_preview = $db->selectSQL("footer_style where admin_id='$admin_id'");
	$rs_preview=mysql_fetch_array($result_preview);
	$preview_object=$rs_preview[footer_bg];
	echo"preview_object---->$preview_object";
	$img="../object_system/$admin_id/$preview_object";
	if(!$preview_object){
		echo"ไม่มีไฟล์ข้อมูล";
	}else{
	?>
    
    <img src="<?=$img?>" />
    <a href="preview_footer_style.php?del_file=<?=$img?>">ลบไฟล์นี้</a>
    <?
	}
	
	
}
if($_GET['del_file']){
	
	@unlink($_GET['del_file']);
	include("../config.inc.php");
	$strSQL="update footer_style set footer_bg=''";
	mysql_query($strSQL);
	
	
	
}
?>
</div>