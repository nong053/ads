<?php ob_start();
include("../config.inc.php");
require("class_mysql.php");
$db=new database();


	
	
$path_object="../object_system/";
	if(!is_dir($path_object)){
	umask(0);
	mkdir($path_object,777);
}
$file_header=$_FILES["file_header"]["name"];//--ต้องแก้ไข
$file_logo=$_FILES["file_logo"]["name"];//--ต้องแก้ไข
$file_banner=$_FILES["file_banner"]["name"];//--ต้องแก้ไข

//echo"file_header$file_header";
if($file_header){
	
	//echo"object_position$object_position<br>";
	$object_width=$_POST['header_width'];//--ต้องแก้ไข
	$object_hight=$_POST['header_height'];//--ต้องแก้ไข
	$object_color=$_POST['header_color'];//--ต้องแก้ไข
	$object_position="header";//--ต้องแก้ไข
	$file_name="$file_header";//--ต้องแก้ไข
	
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
			copy($_FILES["file_header"]["tmp_name"],"../object_system/".$object_name);//--ต้องแก้ไข
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
					$strSQL="UPDATE object_system SET object_name='$object_name',object_position='$object_position',object_color='$object_color',object_width='$object_width',object_hight='$object_hight' where object_position='$object_position_edit'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
				
				}else{
				
				
					$strSQL = "INSERT INTO object_system(object_name,object_position,object_color,object_width,object_hight) VALUES('$object_name','$object_position','$object_color','$object_width','$header_higth')";
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
	
}//if($file_header)
	



if($file_logo){
	
	//echo"object_position$object_position<br>";
	$object_width=$_POST['logo_width'];//--ต้องแก้ไข
	$object_hight=$_POST['logo_height'];//--ต้องแก้ไข
	$object_color=$_POST['logo_color'];//--ต้องแก้ไข
	$object_position="logo";//--ต้องแก้ไข
	$file_name="$file_logo";//--ต้องแก้ไข
	
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
			copy($_FILES["file_logo"]["tmp_name"],"../object_system/".$object_name);//--ต้องแก้ไข
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
					$strSQL="UPDATE object_system SET object_name='$object_name',object_position='$object_position',object_color='$object_color',object_width='$object_width',object_hight='$object_hight' where object_position='$object_position_edit'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
				
				}else{
				
				
					$strSQL = "INSERT INTO object_system(object_name,object_position,object_color,object_width,object_hight) VALUES('$object_name','$object_position','$object_color','$object_width','$object_hight')";
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
	
}//if($file_header)




if($file_banner){
	
	//echo"object_position$object_position<br>";
	$object_width=$_POST['banner_width'];//--ต้องแก้ไข
	$object_hight=$_POST['banner_height'];//--ต้องแก้ไข
	$object_color=$_POST['banner_color'];//--ต้องแก้ไข
	$object_position="banner";//--ต้องแก้ไข
	$file_name="$file_banner";//--ต้องแก้ไข
	
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
			copy($_FILES["file_banner"]["tmp_name"],"../object_system/".$object_name);//--ต้องแก้ไข
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
					$strSQL="UPDATE object_system SET object_name='$object_name',object_position='$object_position',object_color='$object_color',object_width='$object_width',object_hight='$object_hight' where object_position='$object_position_edit'";
					$query=mysql_query($strSQL);
					if(!$query){echo"Error".mysql_error();}
					
				
				}else{
				
				
					$strSQL = "INSERT INTO object_system(object_name,object_position,object_color,object_width,object_hight) VALUES('$object_name','$object_position','$object_color','$object_width','$object_hight')";
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
	
}//if($file_header)
echo"<script>window.location=\"index.php?page=style_system&select_page=picture_style&page_style=header\"</script>";

?>

















<? ob_start();
$db=new database();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language=JavaScript src="javascript/picker.js"></script>
<style>
#devtext_title{	
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#devtext a{
	color:#000;
	text-decoration:none;

	 
}
</style>

<div id="box_style">
<div id="box_style_l" style="float:left">
<?php 
//require("class_mysql.php");

$result_header = $db->selectSQL("object_system where object_position='header'");
$rs_header=mysql_fetch_array($result_header);
$header_color=$rs_header[object_color];
$header_width=$rs_header[object_width];
$header_height=$rs_header[object_hight];

$result_logo = $db->selectSQL("object_system where object_position='logo'");
$rs_logo=mysql_fetch_array($result_logo);
$logo_color=$rs_logo[object_color];
$logo_width=$rs_logo[object_width];
$logo_height=$rs_logo[object_hight];

$result_banner = $db->selectSQL("object_system where object_position='banner'");
$rs_banner=mysql_fetch_array($result_banner);
$banner_color=$rs_banner[object_color];
$banner_width=$rs_banner[object_width];
$banner_height=$rs_banner[object_hight];

?>
<form method="post" action="style_header_process.php" name="tcp_test" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        พื้นหลัง	Header
        </td>
        <td>
        <input type="file"  name="file_header" />
        <a href="preview_style_object.php?want=preview&object_position=header&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
         
        </td>
        <td>
        width:<input type="text" name="header_width" style="width:30px;" value="<?=$header_width?>"/>
        height:<input type="text" name="header_height" style="width:30px;" value="<?=$header_height?>"/>
        </td>
        <td>
       color:<input type="Text" name="header_color" value="<?=$header_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
    <tr>
    	<td>
        LOGO
        </td>
        <td>
        <input type="file"  name="file_logo"/>
         <a href="preview_style_object.php?want=preview&object_position=logo&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
         <td>
        width:<input type="text" name="logo_width" style="width:30px;" value="<?=$logo_width?>"/>
        height:<input type="text" name="logo_height" style="width:30px;" value="<?=$logo_height?>"/>
        </td>
         <td>
       color:<input type="Text" name="logo_color" value="<?=$logo_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['logo_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
    <tr>
    	<td>
        Banner
        </td>
        <td>
        <input type="file"  name="file_banner"/>
         <a href="preview_style_object.php?want=preview&object_position=banner&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
         <td>
        width:<input type="text" name="banner_width" style="width:30px;" value="<?=$banner_width?>"/>
        height:<input type="text" name="banner_height" style="width:30px;" value="<?=$banner_height?>"/>
        </td>
         <td>
       color:<input type="Text" name="banner_color" value="<?=$banner_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['banner_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
    
</table>
<input type="submit"  value="OK SICKAREC"/>
</form>


</div>
<div id="box_style_r" style="float:left;">
	<div id="detail_style" style="width:510px; padding:5px; border:#CCC 1px solid; background-color:#FFC">
    detail_style detail_style detail_style detail_style detail_style detail_style detail_style
    detail_style detail_style detail_style detail_style detail_style detail_style detail_style
    detail_style detail_style detail_style detail_style detail_style detail_style detail_style
    detail_style detail_style detail_style detail_style detail_style detail_style detail_style
    </div>
</div>
<br style="clear:both" />
</div>


