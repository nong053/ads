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
$content_header=$_FILES["content_header"]["name"];//--ต้องแก้ไข

	$content_header_color=$_POST['content_header_color'];//--ต้องแก้ไข
	$content_border_color=$_POST['content_border_color'];//--ต้องแก้ไข
	echo"content_border_color$content_border_color";
	$content_border_style=$_POST['content_border_style'];//--ต้องแก้ไข
	$content_width=$_POST['content_width'];//--ต้องแก้ไข
	$content_height=$_POST['content_height'];//--ต้องแก้ไข
	$content_font_color=$_POST['content_font_color'];//--ต้องแก้ไข
	$content_bg_color=$_POST['content_bg_color'];//--ต้องแก้ไข
	
	
	
	
	
if($content_header){
	
//echo"content_header:$content_header";
	
	$file_name=$content_header;//--ต้องแก้ไข
	
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
			//echo"object_name$object_name<br>";
			copy($_FILES["content_header"]["tmp_name"],"../object_system/$admin_id/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				$result_object=$db->selectSQL("content_style where admin_id='$admin_id'");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_name_edit=$rs_object[content_header];//--ต้องแก้ไข
				
				
				$unlink="../object_system/$admin_id/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				
				
				}

				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE content_style SET content_header='$object_name',content_header_color='$content_header_color',content_border_color='$content_border_color',content_border_style='$content_border_style',content_width='$content_width',content_height='$content_height',content_font_color='$content_font_color',content_bg_color='$content_bg_color' where admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
				}else{
					$strSQL = "INSERT INTO content_style(content_header,content_header_color,content_border_color,content_border_style,content_width,content_height,content_font_color,content_bg_color,admin_id) VALUES('$object_name','$content_header_color','$content_border_color','$content_border_style','$content_width','$content_height','$content_font_color','$content_bg_color','$admin_id')";
					$objQuery = mysql_query($strSQL);	
					if($objQuery){
					}else{
						echo"error".mysql_error();
					}
				}//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
			}
		
	}
	
}else{//if($file_header_bg)

	$strSQL="UPDATE content_style SET content_header_color='$content_header_color',content_border_color='$content_border_color',content_border_style='$content_border_style',content_width='$content_width',content_height='$content_height',content_font_color='$content_font_color',content_bg_color='$content_bg_color' where admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}
echo"<script>window.location=\"index.php?page=style_system&select_page=picture_style&page_style=content\"</script>";
?>
