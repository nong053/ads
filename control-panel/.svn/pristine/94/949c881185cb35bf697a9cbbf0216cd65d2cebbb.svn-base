<? ob_start();
$db=new database();
?>
<?php 
//Check User and Management by User Start
//ทำการ select admin_id ออกมาจาก table box_style
$query_home="select admin_id from box_style WHERE
box_style.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_home=$obj_manage_data->select_data_proc($query_home);
$rs_num=mysql_num_rows($result_home);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

//ทำการเพิ่มข้อมูลเมื่อมี User ใหม่เข้ามา
if(!$rs_num){
$table="box_style";
$field="admin_id";
$values = $rs_admin_id['admin_id'];
$obj_manage_data->insert_data($table,$field,$values);
}
//##### Check table home end #####

//include("fckeditor/fckeditor.php");

$values = $rs_admin_id['admin_id'];
if($_SESSION['admin_status']=="3"){
echo"admin here";
$values=1;
}
//Check User and Management by User End

$result_box= $db->selectSQL("box_style where admin_id='".$values."'");
$rs_box=mysql_fetch_array($result_box);
$box_num=mysql_num_rows($result_box);

$box_header=$rs_box[box_header];
$box_header_color=$rs_box[box_header_color];
$box_border_color=$rs_box[box_border_color];
$box_border_style=$rs_box[box_border_style];
$box_color_bg=$rs_box[box_color_bg];
$box_color=$rs_box[box_color];
$box_color_over=$rs_box[box_color_over];
$box_color_overed=$rs_box[box_color_overed];
$box_font_color=$rs_box[box_font_color];



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

<div id="box_style">
<div id="box_style_l" style="float:left">
<form method="post" action="style_box_process.php" name="box" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        Box Header(ภาพ)
        </td>
        <td>
        <input type="file"  name="box_header" value="<?=$box_header?>"/>
        <a href="preview_box_style.php?admin_id=<?=$rs_admin_id['admin_id']?>&want=preview&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>
       Box Header(สี)
        </td>
        <td>
        <input type="Text" name="box_header_color" value="<?=$box_header_color?>">
       <a href="javascript:TCP.popup(document.forms['box'].elements['box_header_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
     <tr>
    	<td>
       สีตัวอักษร
        </td>
        <td>
        <input type="Text" name="box_font_color" value="<?=$box_font_color?>">
       <a href="javascript:TCP.popup(document.forms['box'].elements['box_font_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>สีเส้นขอบ(สี)</td>
        <td>
        <input type="Text" name="box_border_color" value="<?=$box_border_color?>">
       <a href="javascript:TCP.popup(document.forms['box'].elements['box_border_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>รูปแบบเส้นขอบ(รูปแบบ)</td>
        <td>
        
       <?
		 
		 switch($box_border_style){
			 case'dotted':$selected_repeat1="selected";break;
			 case'double':$selected_repeat2="selected";break;
			 case'solid':$selected_repeat3="selected";break;
			 
			 case'':$selected_repeat0="selected";break;
			 
			
		 }
		 
		 ?>
         
         <select name="box_border_style">
         
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
        สีพื้นหลัง(สี)
        </td>
        <td>
       <input type="Text" name="box_color_bg" value="<?=$box_color_bg?>">
       <a href="javascript:TCP.popup(document.forms['box'].elements['box_color_bg'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>
        เมื่อยังไม่คลิ๊ก(สี)
        </td>
        <td>
        <input type="Text" name="box_color" value="<?=$box_color?>">
       <a href="javascript:TCP.popup(document.forms['box'].elements['box_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0" ></a>
        </td>
    </tr>
    <tr>
    	<td>เมื่อนำเม้าท์ไปวาง(สี)</td>
        <td>
        <input type="Text" name="box_color_over" value="<?=$box_color_over?>">
       <a href="javascript:TCP.popup(document.forms['box'].elements['box_color_over'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>เมื่อคลิ๊กแล้ว(สี) </td>
        <td>
        <input type="Text" name="box_color_overed" value="<?=$box_color_overed?>">
       <a href="javascript:TCP.popup(document.forms['box'].elements['box_color_overed'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
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