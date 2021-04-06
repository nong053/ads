<?php ob_start();
include("../config.inc.php");
require("class_mysql.php");
$db=new database();


	
	
$path_object="../object_system/$admin_id";
	if(!is_dir($path_object)){
	umask(0);
	mkdir($path_object,777);
}
$box_header=$_FILES["box_header"]["name"];//--ต้องแก้ไข

	$box_header_color=$_POST['box_header_color'];//--ต้องแก้ไข
	$box_border_color=$_POST['box_border_color'];//--ต้องแก้ไข
	
	$box_border_style=$_POST['box_border_style'];//--ต้องแก้ไข
	$box_color_bg=$_POST['box_color_bg'];//--ต้องแก้ไข
	$box_color=$_POST['box_color'];//--ต้องแก้ไข
	$box_color_over=$_POST['box_color_over'];//--ต้องแก้ไข
	$box_color_overed=$_POST['box_color_overed'];//--ต้องแก้ไข
	$box_font_color=$_POST['box_font_color'];//--ต้องแก้ไข
	$admin_id=$_POST['admin_id'];
	
	
if($box_header){
	
//echo"box_header:$box_header";
	
	$file_name=$box_header;//--ต้องแก้ไข
	
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
			copy($_FILES["box_header"]["tmp_name"],"../object_system/$admin_id/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				$result_object=$db->selectSQL("box_style where admin_id='$admin_id'");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_name_edit=$rs_object[box_header];//--ต้องแก้ไข
				
				
				$unlink="../object_system/$admin_id/$object_name_edit";
				echo"unlink$unlink";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟ้องถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				}

				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE box_style SET box_header='$object_name',box_header_color='$box_header_color',box_border_color='$box_border_color',box_border_style='$box_border_style',box_color_bg='$box_color_bg',box_color='$box_color',box_color_over='$box_color_over',box_color_overed='$box_color_overed',box_font_color='$box_font_color' where admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
				}else{
					$strSQL = "INSERT INTO box_style(box_header,box_header_color,box_border_color,box_border_style,box_color_bg,box_color,box_color_over,box_color_overed,box_font_color,admin_id) VALUES('$object_name','$box_header_color','$box_border_color','$box_border_style','$box_color_bg','$box_color','$box_color_over','$box_color_overed','box_font_color','$admin_id')";
					$objQuery = mysql_query($strSQL);	
					if($objQuery){
					}else{
						echo"error".mysql_error();
					}
				}//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
			}
		
	}
	
}else{//if($file_header_bg)

	$strSQL="UPDATE box_style SET box_header_color='$box_header_color',box_border_color='$box_border_color',box_border_style='$box_border_style',box_color_bg='$box_color_bg',box_color='$box_color',box_color_over='$box_color_over',box_color_overed='$box_color_overed',box_font_color='$box_font_color' where admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}
//echo"<script>window.location=\"index.php?page=style_system&select_page=picture_style&page_style=box\"</script>";

?>
