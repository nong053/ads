<? ob_start();
require("class_mysql.php");
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
.title{
float:left;
width:80px;
font-weight:bold;
text-align:right;
}
.detail{
float:right;
width:300px;
}
</style>
<div id="dev_text" style="font-size:13px; font-weight:bold; color:#FFF; padding:5px; background-color:#333;">
	       จัดการโลโก้
	</div>
<div id="box_style">
<div id="box_style_l" style="float:left">
<?php 

//Check User and Management by User Start
//ทำการ select admin_id ออกมาจาก table object_system
$query_home="select admin_id from object_system WHERE
object_system.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_home=$obj_manage_data->select_data_proc($query_home);
$rs_num=mysql_num_rows($result_home);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

//ทำการเพิ่มข้อมูลเมื่อมี User ใหม่เข้ามา
if(!$rs_num){
$admin_id=$rs_admin_id['admin_id'];
//add recode header_bg
$table="object_system";
$field="object_position,admin_id";
$values = "'header_bg','".$admin_id."'";
$obj_manage_data->insert_data($table,$field,$values);
//add recode  	header_logo
$table="object_system";
$field="admin_id,object_position";
$values = " '".$admin_id."','header_logo'";
$obj_manage_data->insert_data($table,$field,$values);

//add recode header_banner
$table="object_system";
$field="admin_id,object_position";
$values = " '".$admin_id."','header_banner'";
$obj_manage_data->insert_data($table,$field,$values);
}
//##### Check table home end #####

//include("fckeditor/fckeditor.php");

$values = $rs_admin_id['admin_id'];
if($_SESSION['admin_status']=="3"){

$values=1;
}
//Check User and Management by User End

//counter Background
$result_counter_bg = $db->selectSQL("object_system where object_position='counter_bg' and admin_id='".$values."'");
$rs_counter_bg=mysql_fetch_array($result_counter_bg);
$counter_num=mysql_num_rows($result_counter_bg);
$counter_bg_color=$rs_counter_bg[object_color];
$counter_bg_width=$rs_counter_bg[object_width];
$counter_bg_height=$rs_counter_bg[object_height];


//Title top Background
$result_header_title_bg = $db->selectSQL("object_system where object_position='header_title_bg' and admin_id='".$values."'");
$rs_header_title_bg=mysql_fetch_array($result_header_title_bg);
$header_title_num=mysql_num_rows($result_header_title_bg);
$header_title_bg_color=$rs_header_title_bg[object_color];
$header_title_bg_width=$rs_header_title_bg[object_width];
$header_title_bg_height=$rs_header_title_bg[object_height];

$result_header_bg = $db->selectSQL("object_system where object_position='header_bg' and admin_id='".$values."'");
$rs_header_bg=mysql_fetch_array($result_header_bg);
$header_num=mysql_num_rows($result_header_bg);
$header_bg_color=$rs_header_bg[object_color];
$header_bg_width=$rs_header_bg[object_width];
$header_bg_height=$rs_header_bg[object_height];

$result_header_logo = $db->selectSQL("object_system where object_position='header_logo'  and admin_id='".$values."'");
$rs_header_logo=mysql_fetch_array($result_header_logo);
$header_logo_color=$rs_header_logo[object_color];
$header_logo_width=$rs_header_logo[object_width];
$header_logo_height=$rs_header_logo[object_height];

$result_header_banner = $db->selectSQL("object_system where object_position='header_banner'  and admin_id='".$values."'");
$rs_header_banner=mysql_fetch_array($result_header_banner);
$header_banner_color=$rs_header_banner[object_color];
$header_banner_width=$rs_header_banner[object_width];
$header_banner_height=$rs_header_banner[object_height];

?>

<form method="post" action="style_header_process.php" name="tcp_test" enctype="multipart/form-data">
<table >
	<!-- 
	<tr>
    	<td>
        พื้นหลัง	Top  Title
        </td>
        <td>
        <input type="file"  name="file_header_title_bg" />
        <a href="preview_style_object.php?want=preview&object_position=header_title_bg&admin_id=<?=$rs_admin_id['admin_id']?>&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
         
        </td>
        <td>
        width:<input type="text" name="header_title_bg_width" style="width:30px;" value="<?=$header_title_bg_width?>"/>
        height:<input type="text" name="header_title_bg_height" style="width:30px;" value="<?=$header_title_bg_height?>"/>
        <input type="hidden" name="header_title_num" value="<?=$header_title_num?>" />
        </td>
        <td>
       color:<input type="Text" name="header_title_bg_color" value="<?=$header_title_bg_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_title_bg_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
	<tr>
    	<td>
        พื้นหลังนับจำนวนผู้เข้าชม
        </td>
        <td>
        <input type="file"  name="file_counter_bg" />
        <a href="preview_style_object.php?want=preview&object_position=counter_bg&admin_id=<?=$rs_admin_id['admin_id']?>&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
         
        </td>
        <td>
        width:<input type="text" name="counter_bg_width" style="width:30px;" value="<?=$counter_bg_width?>"/>
        height:<input type="text" name="counter_bg_height" style="width:30px;" value="<?=$counter_bg_height?>"/>
        <input type="hidden" name="counter_num" value="<?=$counter_num?>" />
        </td>
        <td>
       color:<input type="Text" name="counter_bg_color" value="<?=$counter_bg_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['counter_bg_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
	<tr>
    	<td>
        พื้นหลัง	Header
        </td>
        <td>
        <input type="file"  name="file_header_bg" />
        <a href="preview_style_object.php?want=preview&object_position=header_bg&admin_id=<?=$rs_admin_id['admin_id']?>&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
         
        </td>
        <td>
        width:<input type="text" name="header_bg_width" style="width:30px;" value="<?=$header_bg_width?>"/>
        height:<input type="text" name="header_bg_height" style="width:30px;" value="<?=$header_bg_height?>"/>
        <input type="hidden" name="header_num" value="<?=$header_num?>" />
        </td>
        <td>
       color:<input type="Text" name="header_bg_color" value="<?=$header_bg_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_bg_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
     -->
    <tr bgcolor="#f8f8f8">
    	<td >
    	<div class="title">
        		รูปภาพ:
        </div></td><td>
        <div class='detail'>
        <input type="file"  name="file_header_logo"/>
        <a href="preview_style_object.php?want=preview&object_position=header_logo&admin_id=<?=$rs_admin_id['admin_id']?>&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        		ดูตัวอย่าง
        </a>
        </div>
        
        
        
      
         
        </td>
    </tr>
    <tr  bgcolor="#f8f8f8">
         <td >
         <div class="title">ขนาด</div></td><td>
         <div class="detail">
        ความกว้าง:
        <input type="text" name="header_logo_width" style="width:30px;" value="<?=$header_logo_width?>"/>
        ความสูง:<input type="text" name="header_logo_height" style="width:30px;" value="<?=$header_logo_height?>"/>
        </div>
        
        
        </td>
    </tr>
    <tr  bgcolor="#f8f8f8">
         <td >
          <div class="title">กำหนดสี</div></td><td>
          <div class="detail">
    		   สีพื้นหลังโลโก้:<input type="Text" name="header_logo_color" value="<?=$header_logo_color?>">
       		<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_logo_color'])"><img width="15" height="13" src="../images_system/color3.png"></a>
        	</div>
        
        </td>
    </tr>
    
    
    
    <!-- 
    <tr>
    	<td>
        Banner
        </td>
        <td>
        <input type="file"  name="file_header_banner"/>
         <a href="preview_style_object.php?want=preview&object_position=header_banner&admin_id=<?=$rs_admin_id['admin_id']?>&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
         <td>
        width:<input type="text" name="header_banner_width" style="width:30px;" value="<?=$header_banner_width?>"/>
        height:<input type="text" name="header_banner_height" style="width:30px;" value="<?=$header_banner_height?>"/>
        </td>
         <td>
       color:<input type="Text" name="header_banner_color" value="<?=$header_banner_color?>">
       <a href="javascript:TCP.popup(document.forms['tcp_test'].elements['header_banner_color'])"><img width="15" height="13" src="../images_system/App_Store.png"></a>
        </td>
    </tr>
    
     -->
    
</table>
<br>
<input type="hidden" name="admin_id" id="admin_id" value="<?= $rs_admin_id['admin_id']?>">
<input type="submit"  value="ตกลง"/>
</form>


</div>
<!-- 
<div id="box_style_r" style="float:left;">
	<div id="detail_style" style="width:510px; padding:5px; border:#CCC 1px solid; background-color:#FFC">
Detail ...
    </div>
</div>
 -->
<br style="clear:both" />
</div>


