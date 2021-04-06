<?php ob_start();
include("../config.inc.php");
require("class_mysql.php");
$db=new database();


	
	
$path_object="../object_system/";
	if(!is_dir($path_object)){
	umask(0);
	mkdir($path_object,777);
}
$file_header_bg=$_FILES["file_header_bg"]["name"];//--ต้องแก้ไข
$file_header_logo=$_FILES["file_header_logo"]["name"];//--ต้องแก้ไข
$file_header_banner=$_FILES["file_header_banner"]["name"];//--ต้องแก้ไข

//echo"file_header_bg$file_header_bg";
if($file_header_bg){
	
	//echo"object_position$object_position<br>";
	$object_width=$_POST['header_bg_width'];//--ต้องแก้ไข
	$object_height=$_POST['header_bg_height'];//--ต้องแก้ไข
	$object_color=$_POST['header_bg_color'];//--ต้องแก้ไข
	$object_position="header_bg";//--ต้องแก้ไข
	$file_name="$file_header_bg";//--ต้องแก้ไข
	
	//echo"file:$file_name<br>";
	$file_array=explode(".",$file_name);
	$file_1=$file_array[0];
	$file_2=$file_array[1];
	$file_1=strtolower($file_1);
	$file_2=strtolower($file_2);
	$now=date("dmyihs");
	$file_1=$file_1.$now.'.'.$file_2;
	//echo "file1:= $file_1<br>";
	//echo "file2:= $file_2<br>";
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="jpeg" or $file_2=="swf"){
		//echo"hello $file_2<br>";
		
		
			if(is_dir($path_object))
			{
			$object_name=$file_1;
			//echo"object_name$object_name<br>";
			copy($_FILES["file_header_bg"]["tmp_name"],"../object_system/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				$result_object=$db->selectSQL("object_system where object_position='$object_position'");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_position_edit=$rs_object[object_position];
				$object_name_edit=$rs_object[object_name];
				
				
				$unlink="../object_system/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				
				
				}
				
				
				//echo"object_position_edit$object_position_edit";
				//echo"num_object$num_object<br>";
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
					$strSQL="UPDATE object_system SET object_name='$object_name',object_position='$object_position',object_color='$object_color',object_width='$object_width',object_height='$object_height' where object_position='$object_position_edit'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
				
				}else{
				
				
					$strSQL = "INSERT INTO object_system(object_name,object_position,object_color,object_width,object_height) VALUES('$object_name','$object_position','$object_color','$object_width','$header_height')";
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
	
}//if($file_header_bg)
	



if($file_header_logo){
	
	//echo"object_position$object_position<br>";
	$object_width=$_POST['logo_width'];//--ต้องแก้ไข
	$object_height=$_POST['logo_height'];//--ต้องแก้ไข
	$object_color=$_POST['logo_color'];//--ต้องแก้ไข
	$object_position="logo";//--ต้องแก้ไข
	$file_name="$file_header_logo";//--ต้องแก้ไข
	
	//echo"file:$file_name<br>";
	$file_array=explode(".",$file_name);
	$file_1=$file_array[0];
	$file_2=$file_array[1];
	$file_1=strtolower($file_1);
	$file_2=strtolower($file_2);
	$now=date("dymhis");
	$file_1=$file_1.$now.'.'.$file_2;
	//echo "file1:= $file_1<br>";
	//echo "file2:= $file_2<br>";
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="png" or $file_2=="swf"){
		//echo"hello $file_2<br>";
		
		
			if(is_dir($path_object))
			{
			$object_name=$file_1;
			//echo"object_name$object_name<br>";
			copy($_FILES["file_header_logo"]["tmp_name"],"../object_system/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
				
				
				
				$result_object=$db->selectSQL("object_system where object_position='$object_position'");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_position_edit=$rs_object[object_position];
				$object_name_edit=$rs_object[object_name];
				
				
				$unlink="../object_system/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				
				
				}
				
				
				//echo"object_position_edit$object_position_edit";
				//echo"num_object$num_object<br>";
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
					$strSQL="UPDATE object_system SET object_name='$object_name',object_position='$object_position',object_color='$object_color',object_width='$object_width',object_height='$object_height' where object_position='$object_position_edit'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
				
				}else{
				
				
					$strSQL = "INSERT INTO object_system(object_name,object_position,object_color,object_width,object_height) VALUES('$object_name','$object_position','$object_color','$object_width','$object_height')";
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
	
}//if($file_header_bg)




if($file_header_banner){
	
	//echo"object_position$object_position<br>";
	$object_width=$_POST['banner_width'];//--ต้องแก้ไข
	$object_height=$_POST['banner_height'];//--ต้องแก้ไข
	$object_color=$_POST['banner_color'];//--ต้องแก้ไข
	$object_position="banner";//--ต้องแก้ไข
	$file_name="$file_header_banner";//--ต้องแก้ไข
	
	//echo"file:$file_name<br>";
	$file_array=explode(".",$file_name);
	$file_1=$file_array[0];
	$file_2=$file_array[1];
	$file_1=strtolower($file_1);
	$file_2=strtolower($file_2);
	$now=date("hdmyis");
	$file_1=$file_1.$now.'.'.$file_2;
	//echo "file1:= $file_1<br>";
	//echo "file2:= $file_2<br>";
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="png" or $file_2=="swf"){
		//echo"hello $file_2<br>";
		
		
			if(is_dir($path_object))
			{
			$object_name=$file_1;
			//echo"object_name$object_name<br>";
			copy($_FILES["file_header_banner"]["tmp_name"],"../object_system/".$object_name);//--ต้องแก้ไข
			//echo"sucessfully";
				
				
				
				$result_object=$db->selectSQL("object_system where object_position='$object_position'");
				$num_object=mysql_num_rows($result_object);
				$rs_object=mysql_fetch_array($result_object);
				$object_position_edit=$rs_object[object_position];
				$object_name_edit=$rs_object[object_name];
				
				
				$unlink="../object_system/$object_name_edit";
				if($unlink){
				@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
				
				
				}
				
				
				//echo"object_position_edit$object_position_edit";
				//echo"num_object$num_object<br>";
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการลบของเดิม
					$strSQL="UPDATE object_system SET object_name='$object_name',object_position='$object_position',object_color='$object_color',object_width='$object_width',object_height='$object_height' where object_position='$object_position_edit'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
				
				}else{
				
				
					$strSQL = "INSERT INTO object_system(object_name,object_position,object_color,object_width,object_height) VALUES('$object_name','$object_position','$object_color','$object_width','$object_height')";
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
	
}//if($file_header_bg)
echo"<script>window.location=\"index.php?page=style_system&select_page=picture_style&page_style=header\"</script>";

?>
