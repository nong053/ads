<? ob_start();
$db=new database();
?>
<?php 
//Check User and Management by User Start
//ทำการ select admin_id ออกมาจาก table content_style
$query_home="select admin_id from content_style WHERE
content_style.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_home=$obj_manage_data->select_data_proc($query_home);
$rs_num=mysql_num_rows($result_home);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

//ทำการเพิ่มข้อมูลเมื่อมี User ใหม่เข้ามา
if(!$rs_num){
$table="content_style";
$field="admin_id";
$admin_id = $rs_admin_id['admin_id'];
$obj_manage_data->insert_data($table,$field,$admin_id);
}
//##### Check table home end #####

//include("fckeditor/fckeditor.php");

$admin_id = $rs_admin_id['admin_id'];
if($_SESSION['admin_status']=="3"){
echo"admin here";
$admin_id=1;
}
//Check User and Management by User End

$result_content= $db->selectSQL("content_style where admin_id='".$admin_id."'");
$rs_content=mysql_fetch_array($result_content);
$box_num=mysql_num_rows($result_content);

$content_header=$rs_content[content_header];
$content_header_color=$rs_content[content_header_color];
$content_border_color=$rs_content[content_border_color];
$content_border_style=$rs_content[content_border_style];
$content_width=$rs_content[content_width];
$content_height=$rs_content[content_height];
$content_font_color=$rs_content[content_font_color];
$content_bg_color=$rs_content[content_bg_color];




?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--สี-->
<script language=JavaScript src="javascript/picker.js"></script>
<!--สี-->
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

<div id="conent_style">
<div id="box_style_l" style="float:left">
<form method="post" action="style_content_process.php" name="content" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        Box Header(ภาพ)
        </td>
        <td>
        <input type="file"  name="content_header" value="<?=$content_header?>"/>
        <a href="preview_content_style.php?admin_id=<?=$admin_id?>&want=preview&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>
       Box Header(สี)
        </td>
        <td>
        <input type="Text" name="content_header_color" value="<?=$content_header_color?>">
       <a href="javascript:TCP.popup(document.forms['content'].elements['content_header_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>
       สีตัวอักษร
        </td>
        <td>
        <input type="Text" name="content_font_color" value="<?=$content_font_color?>">
       <a href="javascript:TCP.popup(document.forms['content'].elements['content_font_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>
       สีพื้นหลัง
        </td>
        <td>
        <input type="Text" name="content_bg_color" value="<?=$content_bg_color?>">
       <a href="javascript:TCP.popup(document.forms['content'].elements['content_bg_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    
    	<td>สีเส้นขอบ(สี)</td>
        <td>
        <input type="Text" name="content_border_color" value="<?=$content_border_color?>">
       <a href="javascript:TCP.popup(document.forms['content'].elements['content_border_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>รูปแบบเส้นขอบ(รูปแบบ)</td>
        <td>
        
       <?
		 
		 switch($content_border_style){
			 case'dotted':$selected_repeat1="selected";break;
			 case'double':$selected_repeat2="selected";break;
			 case'solid':$selected_repeat3="selected";break;
			 case'':$selected_repeat0="selected";break;
		 }
		 
		 ?>
         
         <select name="content_border_style">
         
         	<option value="" <?=$selected_repeat0?>>
            ไม่เลื่อก
            </option>
         	<option value="dotted" <?=$selected_repeat1?>>
            dotted
            </option>
            <option value="double" <?=$selected_repeat2?>>
            double
            </option>
            <option value="solid" <?=$selected_repeat3?>>
            solid
            </option>
            
         </select>
        </td>
    </tr>
    <tr>
    	<td>
        ขนาด Header
        </td>
        <td>
        Width:<input type="text"  value="<?=$content_width?>" name="content_width"  style="width:30px;"/>Height:<input type="text" value="<?=$content_height?>" name="content_height" style="width:30px;" />
        </td>
    </tr>
    <tr>
    	<td>
        
        </td>
        <td>
		<input type="hidden" name="admin_id" id="admin_id" value="<?= $rs_admin_id['admin_id']?>">
        <input type="submit"  value="Submit"/>
        </td>
    </tr>
</table>
</form>
</div>
<div id="box_style_r" style="float:left;">
	<div id="detail_style" style="width:450px; padding:5px; border:#CCC 1px solid; background-color:#FFC">
   Detail ...
    </div>
</div>
<br style="clear:both" />
</div>