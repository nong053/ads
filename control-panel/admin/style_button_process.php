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
$button_bg=$_FILES["button_bg"]["name"];//--ต้องแก้ไข
$button=$_FILES["button"]["name"];//--ต้องแก้ไข
$button_over=$_FILES["button_over"]["name"];//--ต้องแก้ไข
$button_overed=$_FILES["button_overed"]["name"];//--ต้องแก้ไข


if($button_bg){
	$button_bg_color=$_POST['button_bg_color'];//--ต้องแก้ไข
	$file_name=$button_bg;//--ต้องแก้ไข
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
			copy($_FILES["button_bg"]["tmp_name"],"../object_system/$admin_id/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				$result_object=$db->selectSQL("button_style where admin_id='$admin_id'");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_name_edit=$rs_object[button_bg];//--ต้องแก้ไข
				
				
				$unlink="../object_system/$admin_id/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟ้องถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				}

				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE button_style SET button_bg='$object_name',button_bg_color='$button_bg_color' where admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
				}else{
					$strSQL = "INSERT INTO button_style(button_bg,button_bg_color,admin_id) VALUES('$object_name','$button_bg_color','$admin_id')";
					$objQuery = mysql_query($strSQL);	
					if($objQuery){
					}else{
						echo"error".mysql_error();
					}
				}//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
			}
		
	}
	
}else{//if($file_header_bg)
	$button_bg_color=$_POST['button_bg_color'];//--ต้องแก้ไข
	$strSQL="UPDATE button_style SET button_bg_color='$button_bg_color' where admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}



if($button){
	$button_color=$_POST['button_color'];//--ต้องแก้ไข
	$file_name=$button;//--ต้องแก้ไข
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
			copy($_FILES["button"]["tmp_name"],"../object_system/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				$result_object=$db->selectSQL("button_style where admin_id='$admin_id'");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_name_edit=$rs_object[button];//--ต้องแก้ไข
				
				
				$unlink="../object_system/$admin_id/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟ้องถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				}
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE button_style SET button='$object_name',button_color='$button_color' where admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
				}else{
					$strSQL = "INSERT INTO button_style(button,button_color,admin_id) VALUES('$object_name','$button_color','$admin_id')";
					$objQuery = mysql_query($strSQL);	
					if($objQuery){
					}else{
						echo"error".mysql_error();
					}
				}//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
			}
		
	}
	
}else{//if($file_header_bg)
	$button_color=$_POST['button_color'];//--ต้องแก้ไข
	$strSQL="UPDATE button_style SET button_color='$button_color' where admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}


if($button_over){
	$button_over_color=$_POST['button_over_color'];//--ต้องแก้ไข
	$file_name=$button_over;//--ต้องแก้ไข
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
			copy($_FILES["button_over"]["tmp_name"],"../object_system/$admin_id/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				$result_object=$db->selectSQL("button_style");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_name_edit=$rs_object[button_over];//--ต้องแก้ไข
				
				
				$unlink="../object_system/$admin_id/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				
				
				}

				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE button_style SET button_over='$object_name',button_over_color='$button_over_color' where admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
				}else{
					$strSQL = "INSERT INTO button_style(button_over,button_over_color,admin_id) VALUES('$object_name','$button_over_color','$admin_id')";
					$objQuery = mysql_query($strSQL);	
					if($objQuery){
					}else{
						echo"error".mysql_error();
					}
				}//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
			}
		
	}
	
}else{//if($file_header_bg)
	$button_over_color=$_POST['button_over_color'];//--ต้องแก้ไข
	$strSQL="UPDATE button_style SET button_over_color='$button_over_color' where admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}


if($button_overed){
	$button_overed_color=$_POST['button_overed_color'];//--ต้องแก้ไข
	$file_name=$button_overed;//--ต้องแก้ไข
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
			copy($_FILES["button_overed"]["tmp_name"],"../object_system/$admin_id/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				$result_object=$db->selectSQL("button_style");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_name_edit=$rs_object[button_overed];//--ต้องแก้ไข
				
				
				$unlink="../object_system/$admin_id/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				
				
				}

				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE button_style SET button_overed='$object_name',button_overed_color='$button_overed_color' where admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
				}else{
					$strSQL = "INSERT INTO button_style(button_overed,button_overed_color,admin_id) VALUES('$object_name','$button_overed_color','$admin_id')";
					$objQuery = mysql_query($strSQL);	
					if($objQuery){
					}else{
						echo"error".mysql_error();
					}
				}//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
			}
		
	}
	
}else{//if($file_header_bg)
	$button_overed_color=$_POST['button_overed_color'];//--ต้องแก้ไข
	$strSQL="UPDATE button_style SET button_overed_color='$button_overed_color' where admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}
// นอกเหนือจากตัวอื่น
$button_font_color=$_POST['button_font_color'];
$button_font_over_color=$_POST['button_font_over_color'];
$button_width=$_POST['button_width'];
$button_hieght=$_POST['button_hieght'];

$strSQL="UPDATE button_style SET button_font_color='$button_font_color',button_font_over_color='$button_font_over_color',button_width='$button_width',button_hieght='$button_hieght' where admin_id='$admin_id'";

$query_end=mysql_query($strSQL);
if(!$query_end){echo"error".mysql_error();}

echo"<script>window.location=\"index.php?page=style_system&select_page=picture_style&page_style=main_menu\"</script>";
?>
