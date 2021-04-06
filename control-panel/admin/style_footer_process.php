<?php ob_start();
include("../config.inc.php");
require("class_mysql.php");
$db=new database();


	
$admin_id=$_POST['admin_id'];
$path_object="../object_system/$admin_id";
	if(!is_dir($path_object)){
	umask(0);
	mkdir($path_object,777);
}
$file_bg=$_FILES["footer_bg"]["name"];//--ต้องแก้ไข
$footer_repeat=$_POST['footer_repeat'];//--ต้องแก้ไข
$footer_color=$_POST['footer_color'];//--ต้องแก้ไข

$file_name=$file_bg;//--ต้องแก้ไข

if($file_bg){
	
	echo"inside";
	$file_array=explode(".",$file_name);
	$file_1=$file_array[0];
	$file_2=$file_array[1];
	$file_1=strtolower($file_1);
	$file_2=strtolower($file_2);
	$now=date("dmyihs");
	$file_1=$file_1.$now.'.'.$file_2;
	
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="jpeg" or $file_2=="swf"){
		
		
		
			if(is_dir($path_object))
			{
			$object_name=$file_1;
			
			copy($_FILES["footer_bg"]["tmp_name"],"../object_system/$admin_id/".$object_name);//--ต้องแก้ไข
				$result_object=$db->selectSQL("footer_style");
				$num_object=mysql_num_rows($result_object);
				echo"num_objec$num_object";
				$rs_object=mysql_fetch_array($result_object);
				//$object_position_edit=$rs_object[bg_position];
				$object_name_edit=$rs_object[footer_bg];
				
				
				$unlink="../object_system/$admin_id/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				
				
				}
				
				
				//echo"object_position_edit$object_position_edit";
				//echo"num_object$num_object<br>";
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdateและแก้ไขรูปภาพ
					$strSQL="UPDATE footer_style SET footer_bg='$object_name',footer_repeat='$footer_repeat',footer_color='$footer_color' where admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error1".mysql_error();}
					
				
				}else{
				echo"Inseart";
				
					$strSQL = "INSERT INTO footer_style(footer_bg,footer_repeat,footer_color,admin_id) VALUES('$object_name','$footer_repeat','$footer_color','$admin_id')";
					$objQuery = mysql_query($strSQL);	
					if($objQuery){
					/*echo"<script>window.location=\"index.php?page=$pic_type\";</script>";*/
					//echo"sucessfully";
					}else{
						echo"error".mysql_error();
					}
				}//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
			}
		
	}
	
}else{//if($file_header_bg)
	//ไม่มีการแก้ไขรูปภาพ
	$strSQL="UPDATE footer_style SET footer_repeat='$footer_repeat',footer_color='$footer_color' where admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}






echo"<script>window.location=\"index.php?page=style_system&select_page=picture_style&page_style=footer\"</script>";

?>
