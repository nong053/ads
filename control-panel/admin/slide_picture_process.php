<?php ob_start();
include("../config.inc.php");
require("class_mysql.php");
$db=new database();


	
$admin_id=$_POST['admin_id'];
$path_object="../slide_picture/$admin_id/";
	if(!is_dir($path_object)){
	umask(0);
	mkdir($path_object,0777,true);
	chmod($path_object, 0777);
}
$file_slide1=$_FILES["file_slide1"]["name"];//--ต้องแก้ไข
$file_slide2=$_FILES["file_slide2"]["name"];//--ต้องแก้ไข
$file_slide3=$_FILES["file_slide3"]["name"];//--ต้องแก้ไข
$slide_picture_link_1=$_POST['slide_picture_link_1'];
$slide_picture_link_2=$_POST['slide_picture_link_2'];
$slide_picture_link_3=$_POST['slide_picture_link_3'];
$admin_id=$_POST['admin_id'];
$slide_position_1="1";//--ต้องแก้ไข
$slide_position_2="2";//--ต้องแก้ไข
$slide_position_3="3";//--ต้องแก้ไข

//echo"file_header_bg$file_header_bg";

if($file_slide1){
	
	//echo"object_position$object_position<br>";
	
	
	
	$file_name=$file_slide1;//--ต้องแก้ไข
	
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
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="jpeg" ){
		//echo"hello $file_2<br>";
		
			$result_object=$db->selectSQL("slide_picture where slide_position='$slide_position_1' and admin_id='$admin_id'");
			$num_object=mysql_num_rows($result_object);
			$rs_object=mysql_fetch_array($result_object);
			$slide_position_edit=$rs_object[slide_position];
			$slide_picture_object_edit=$rs_object[slide_picture_object];
			
			if(is_dir($path_object))
			{
					$unlink="../slide_picture/$admin_id/$slide_picture_object_edit";
					if($unlink){
					@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
					//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
					}
				
				
				
	$object_name="work1.png";
	if(trim($_FILES["file_slide1"]["tmp_name"]) != "")
	{
		$date=date("d-m-y-H-i-s");
		$rand=rand(1,1000);
		$images = $_FILES["file_slide1"]["tmp_name"];
		$width=790; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../slide_picture/$admin_id/$object_name");
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
	}
				
				
				
				
				
				
				
				
				//echo"object_position_edit$object_position_edit";
				//echo"num_object$num_object<br>";
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE slide_picture SET slide_picture_object='$object_name',slide_picture_link='$slide_picture_link_1' where slide_position='$slide_position_1' and admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
					
				
				}else{
				
				
					$strSQL = "INSERT INTO slide_picture(slide_picture_object,slide_position,slide_picture_link,admin_id) VALUES('$object_name','$slide_position_1','$slide_picture_link_1','$admin_id')";
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
	
	
	
}else{
	echo"hello";
	$strSQL="UPDATE slide_picture SET slide_picture_link='$slide_picture_link_1' where slide_position='$slide_position_1' and admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}







if($file_slide2){
	
	//echo"object_position$object_position<br>";
	
	
	
	$file_name=$file_slide2;//--ต้องแก้ไข
	
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
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="jpeg" ){
		//echo"hello $file_2<br>";
			$result_object=$db->selectSQL("slide_picture where slide_position='$slide_position_2' and admin_id='$admin_id'");
			$num_object=mysql_num_rows($result_object);
			$rs_object=mysql_fetch_array($result_object);
			$slide_position_edit=$rs_object[slide_position];
			$slide_picture_object_edit=$rs_object[slide_picture_object];
		
			if(is_dir($path_object))
			{
					$unlink="../slide_picture/$admin_id/$slide_picture_object_edit";
					if($unlink){
					@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
					//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
					}
				
				
				
	$object_name="work2.png";
	if(trim($_FILES["file_slide2"]["tmp_name"]) != "")
	{
		$date=date("d-m-y-H-i-s");
		$rand=rand(1,1000);
		$images = $_FILES["file_slide2"]["tmp_name"];
		$width=790; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../slide_picture/$admin_id/$object_name");
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
	}

			//copy($_FILES["file_slide2"]["tmp_name"],"../slide_picture/$admin_id/work2.png");//--ต้องแก้ไข
			//echo"sucessfully";
			
				
				
				
				
				
				
				
				
				//echo"object_position_edit$object_position_edit";
				//echo"num_object$num_object<br>";
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE slide_picture SET slide_picture_object='$object_name',slide_picture_link='$slide_picture_link_2' where slide_position='$slide_position_2' and admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
					
				
				}else{
				
				
					$strSQL = "INSERT INTO slide_picture(slide_picture_object,slide_position,slide_picture_link,admin_id) VALUES('$object_name','$slide_position_2','$slide_picture_link_2','$admin_id')";
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
	
	
	
}else{
	echo"hello2";
	$strSQL="UPDATE slide_picture SET slide_picture_link='$slide_picture_link_2' where slide_position='$slide_position_2' and admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}





if($file_slide3){
	
	//echo"object_position$object_position<br>";
	
	
	
	$file_name=$file_slide3;//--ต้องแก้ไข
	
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
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="jpeg" ){
		//echo"hello $file_2<br>";
			$result_object=$db->selectSQL("slide_picture where slide_position='$slide_position_3' and admin_id='$admin_id'");
			$num_object=mysql_num_rows($result_object);
			$rs_object=mysql_fetch_array($result_object);
			$slide_position_edit=$rs_object[slide_position];
			$slide_picture_object_edit=$rs_object[slide_picture_object];
		
			if(is_dir($path_object))
			{
					$unlink="../slide_picture/$admin_id/$slide_picture_object_edit";
					if($unlink){
					@unlink($unlink);//@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
					//file_exists();ใช้ function นี้ตรวจสอบก่อนว่ามีไฟลล์ใหลบมั้ย
					}
				
				
				
	$object_name="work3.png";
	if(trim($_FILES["file_slide3"]["tmp_name"]) != "")
	{
		$date=date("d-m-y-H-i-s");
		$rand=rand(1,1000);
		$images = $_FILES["file_slide3"]["tmp_name"];
		$width=790; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../slide_picture/$admin_id/$object_name");
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
	}
			
				
				
				
				
				
				
				
				
				//echo"object_position_edit$object_position_edit";
				//echo"num_object$num_object<br>";
				if($num_object){//check ถ้ามีข้อมูลอยู่แล้วให้ทำการUpdate
					$strSQL="UPDATE slide_picture SET slide_picture_object='$object_name',slide_picture_link='$slide_picture_link_3' where slide_position='$slide_position_3' and admin_id='$admin_id'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
					
				
				}else{
				
				
					$strSQL = "INSERT INTO slide_picture(slide_picture_object,slide_position,slide_picture_link,admin_id) VALUES('$object_name','$slide_position_3','$slide_picture_link_3','$admin_id')";
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
	
	
	
}else{
	echo"hello3";
	$strSQL="UPDATE slide_picture SET slide_picture_link='$slide_picture_link_3' where slide_position='$slide_position_3' and admin_id='$admin_id'";
	$query=mysql_query($strSQL);
	if(!$query){echo"Error".mysql_error();}
}





echo"<script>window.location=\"index.php?page=slide_picture\"</script>";

?>
