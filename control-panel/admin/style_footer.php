<? ob_start();
$db=new database();
?>
<?php 

//Check User and Management by User Start
//ทำการ select admin_id ออกมาจาก table footer_style
$query_home="select admin_id from footer_style WHERE
footer_style.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_home=$obj_manage_data->select_data_proc($query_home);
$rs_num=mysql_num_rows($result_home);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

//ทำการเพิ่มข้อมูลเมื่อมี User ใหม่เข้ามา
if(!$rs_num){
$table="footer_style";
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

$result_footer = $db->selectSQL("footer_style where admin_id='".$admin_id."'");
$rs_footer=mysql_fetch_array($result_footer);
$footer_num=@mysql_num_rows($rs_footer);
$footer_bg=$rs_footer[footer_bg];
$footer_repeat=$rs_footer[footer_repeat];
$footer_color=$rs_footer[footer_color];
?>
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
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<!-- สี-->
<script language=JavaScript src="javascript/picker.js"></script>
<!-- สี-->
<div id="box_style">
<div id="box_style_l" style="float:left">
<form method="post" action="style_footer_process.php" name="footer" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        รูปพื้นหลัง
        </td>
    <tr>
    </tr>
        <td>
        <input type="file"  name="footer_bg"/>
        <a href="preview_footer_style.php?admin_id=<?=$admin_id?>&want=preview&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        preview
        </a>
        </td>
    </tr>
    <tr>
    	<td>
        รูปแบบพื้นหลัง
        </td>
     <tr>
    </tr>
        <td>
		<?
		 
		 switch($footer_repeat){
			 case'inherit':$selected_repeat1="selected";break;
			 case'no-repeat':$selected_repeat2="selected";break;
			 case'repeat':$selected_repeat3="selected";break;
			 case'repeat-x':$selected_repeat4="selected";break;
			 case'repeat-y':$selected_repeat5="selected";break;
			 case'':$selected_repeat0="selected";break;
			 
			
		 }
		 
		 ?>
         <select name="footer_repeat">
         
         	<option value="" <?=$selected_repeat0?>>
            ไม่เลื่อก
            </option>
         	<option value="inherit" <?=$selected_repeat1?>>
            inherit
            </option>
            <option value="no-repeat" <?=$selected_repeat2?>>
            no-repeat
            </option>
            <option value="repeat" <?=$selected_repeat3?>>
            repeat
            </option>
            <option value="repeat-x" <?=$selected_repeat4?>>
            repeat-x
            </option>
            <option value="repeat-y" <?=$selected_repeat5?>>
            repeat-y
            </option>
         </select>
        </td>
    </tr>
   
    <tr>
    	<td>
        สีพื้นหลัง
        </td>
     <tr>
    </tr>
        <td>
         <input type="Text" name="footer_color" value="<?=$footer_color?>">
       <a href="javascript:TCP.popup(document.forms['footer'].elements['footer_color'])"><img width="15" height="13" src="../images_system/App_Store.png" border="0"></a>
        </td>
    </tr>
   
    <tr>
    	<td>
        
        </td>
     <tr>
    </tr>
        <td>
		<input type="hidden" name="admin_id" id="admin_id" value="<?= $rs_admin_id['admin_id']?>">
        <input type="submit"  value="Submit"/>
        </td>
    </tr>
</table>
</form>
<div id="box_style_r" style="float:left;">
	<div id="detail_style" style="width:auto; padding:5px; border:#CCC 1px solid; background-color:#FFC">
Detail ...
    </div>
</div>
<br style="clear:both" />
</div>
</div>
