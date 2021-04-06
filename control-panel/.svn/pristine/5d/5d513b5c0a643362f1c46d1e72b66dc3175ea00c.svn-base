
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#div_preview{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:13px;
}
</style>
<div id="div_preview">
<?

require("class_mysql.php");
$db=new database();
$admin_id=$_GET['admin_id'];
if($_GET['want']=="preview"){
	
	$object_position=$_GET['object_position'];
	//echo"object_position------->$object_position";
	$result_preview = $db->selectSQL("object_system where object_position='$object_position' and admin_id='$admin_id'");
	$rs_preview=mysql_fetch_array($result_preview);
	$preview_object=$rs_preview[object_name];
	echo"preview_object---->$preview_object";
	$img="../object_system/$admin_id/$preview_object";
	if(!$preview_object){
		echo"ไม่มีไฟล์ข้อมูล";
	}else{
	?>
    
    <img src="<?=$img?>" />
    <a href="preview_style_object.php?del_file=<?=$img?>&object_position=<?=$object_position?>">ลบไฟล์นี้</a>
    <?
	}
	
	
}
if($_GET['del_file']){
	
	@unlink($_GET['del_file']);
	include("../config.inc.php");
	$object_position=$_GET['object_position'];
	echo"object_position$object_position";
	$strSQL="update object_system set object_name='' where object_position='$object_position' and admin_id=$and admin_id";
	mysql_query($strSQL);
	
	
	
}
?>
</div>