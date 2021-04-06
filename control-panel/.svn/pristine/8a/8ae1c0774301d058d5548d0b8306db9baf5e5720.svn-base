<? ob_start();
$db=new database();
?>
<?php 
//Check User and Management by User Start
//ทำการ select admin_id ออกมาจาก table footer_style
$query_home="select admin_id from button_style WHERE
button_style.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_home=$obj_manage_data->select_data_proc($query_home);
$rs_num=mysql_num_rows($result_home);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

//ทำการเพิ่มข้อมูลเมื่อมี User ใหม่เข้ามา
if(!$rs_num){
$table="button_style";
$field="admin_id";
$admin_id= $rs_admin_id['admin_id'];
$obj_manage_data->insert_data($table,$field,$admin_id);
}
//##### Check table home end #####

//include("fckeditor/fckeditor.php");

$admin_id= $rs_admin_id['admin_id'];
if($_SESSION['admin_status']=="3"){
echo"admin here";
$admin_id=1;
}
//Check User and Management by User End

$result_button= $db->selectSQL("button_style  where admin_id='".$admin_id."'");
$rs_button=mysql_fetch_array($result_button);
$button_num=mysql_num_rows($result_button);

$button_bg=$rs_button[button_bg];
$button_bg_color=$rs_button[button_bg_color];
$button=$rs_button[button];
$button_color=$rs_button[button_color];
$button_over=$rs_button[button_over];
$button_over_color=$rs_button[button_over_color];
$button_overed=$rs_button[button_overed];
$button_overed_color=$rs_button[button_overed_color];

$button_font_color = $rs_button[button_font_color];
$button_font_over_color = $rs_button[button_font_over_color];
$button_width = $rs_button[button_width];
$button_hieght = $rs_button[button_hieght];


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
<form method="post" action="style_button_process.php" name="button" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        พื้นหลัง(ทั่วไป)(ภาพ)
        </td>
        <td>
        <input type="file"  name="button_bg" value="<?=$button_bg?>"/>
        <a href="preview_button_style.php?admin_id=<?=$admin_id?>&want=preview&button=button_bg&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>
        พื้นหลัง(ทั่วไป)(สี)
        </td>
        <td>
        <input type="Text" name="button_bg_color" value="<?=$button_bg_color?>">
       <a href="javascript:TCP.popup(document.forms['button'].elements['button_bg_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>เมนูหลัก(ภาพ)</td>
        <td>
        <input type="file"  name="button" value="<?=$button?>"/>
        <a href="preview_button_style.php?admin_id=<?=$admin_id?>&want=preview&button=button&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>เมนูหลัก(สี)</td>
        <td>
        <input type="Text" name="button_color" value="<?=$button_color?>">
       <a href="javascript:TCP.popup(document.forms['button'].elements['button_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>
        เมื่อนำเม้าท์ไปวาง(ภาพ)
        </td>
        <td>
        <input type="file"  name="button_over" value="<?=$button_over?>"/>
        <a href="preview_button_style.php?admin_id=<?=$admin_id?>&want=preview&button=button_over&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>
        เมื่อนำเม้าท์ไปวาง(สี)
        </td>
        <td>
        <input type="Text" name="button_over_color" value="<?=$button_over_color?>">
       <a href="javascript:TCP.popup(document.forms['button'].elements['button_over_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0" ></a>
        </td>
    </tr>
    <tr>
    	<td>
        เมื่อคลิ๊กแล้ว(ภาำพ)
        </td>
        <td>
        <input type="file"  name="button_overed" value="<?=$button_overed?>"/>
        <a href="preview_button_style.php?admin_id=<?=$admin_id?>&want=preview&button=button_overed&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>เมื่อคลิ๊กแล้ว(สี)</td>
        <td>
        <input type="Text" name="button_overed_color" value="<?=$button_overed_color?>">
       <a href="javascript:TCP.popup(document.forms['button'].elements['button_overed_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    
    <tr>
    	<td>สีตัวอักษร</td>
        <td>
        <input type="Text" name="button_font_color" value="<?=$button_font_color?>">
       <a href="javascript:TCP.popup(document.forms['button'].elements['button_font_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    <tr>
    	<td>สีตัวอักษร(เมื่อนำเมาส์ไปวาง)</td>
        <td>
        <input type="Text" name="button_font_over_color" value="<?=$button_font_over_color?>">
       <a href="javascript:TCP.popup(document.forms['button'].elements['button_font_over_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
    
    <tr>
    	<td>ความกว้างของปุ๋ม</td>
        <td>
        <input type="Text" name="button_width" value="<?=$button_width?>">
      
        </td>
    </tr>
    <tr>
    	<td>ความสูงของปุ๋ม</td>
        <td>
        <input type="Text" name="button_hieght" value="<?=$button_hieght?>">
      
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