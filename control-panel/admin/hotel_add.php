<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- pic up date-->
<script type="text/javascript" src="../sum_js/date.js"></script>
<link type="text/css" href="../sum_js/date.css" rel="stylesheet" type="text/css" />
<!-- pic up date-->
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#devtext_name{
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
</style>
</head>
<?
$name_hotel=$_SESSION['name_hotel'];
$title_hotel=$_SESSION['title_hotel'];
$detail_hotel=$_SESSION['detail_hotel'];
$price_hotel=$_SESSION['price_hotel'];
$promotion_hotel=$_SESSION['promotion_hotel'];
$detail_promotion_hotel=$_SESSION['detail_promotion_hotel'];
$map_hotel=$_SESSION['map_hotel'];
$date_hotel=$_SESSION['date_hotel'];
$province_name=$_SESSION['province_name'];
?>

<body>
<?php
class database{
	function table($table)
	{
			include("../config.inc.php");
			$strSQL="select * from $table";
			$result=mysql_query($strSQL);
			
			return $result;
		
	}
}
$db = new database();
?>
<div id="Result">
</div>
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td width="14%">
    <div id="devtext_name">
    ลำดับ
    </div>
    </td>
	<td width="23%">
    <div id="devtext_name">
    ชื่อโรงแรม
    </div>
    </td>
    <td width="11%">
    <div id="devtext_name">
    ภาค
    </div>
    </td>
    <td width="16%">
    <div id="devtext_name">
    จังหวัด
    </div>
    </td>
    <td width="17%">
    <div id="devtext_name">
    แผนที่
    </div>
    </td>
    <td width="19%">
    <div id="devtext_name">
    <center>
    
    จัดการ
    </center>
    </div>
    </td>
</tr>
<?

$result_hotel_cat=$db->table("hotel_cat");
$i=1;
while($rs_hotel_cat=mysql_fetch_array($result_hotel_cat)){

?>
<tr>
	<td>
    <?=$i?>
    </td>
    <td>
    <?=$rs_hotel_cat[hotel_cat_name]?>
    </td>
	<td>
    <?=$rs_hotel_cat[hotel_cat_zone]?>
    </td>
    <td>
    <?=$rs_hotel_cat[hotel_cat_province]?>
    </td>
    <td>
    <?=$rs_hotel_cat[hotel_cat_map]?>
    </td>
    <td>
    <center>
    <a href="index.php?page=hotel_system&select_page=hotel_add&hotel_cat_id=<?=$rs_hotel_cat[hotel_cat_id]?>&action=add&hotel_cat_name=<?=$rs_hotel_cat[hotel_cat_name]?>">
    เพิ่มละเอียด
    </a>
    </center>
    </td>
</tr>
<?
$i++;
}
?>


</table>
<br>
<?php
if(($_GET['action']=="add") or ($_GET['edit_hotel']=="edit_hotel")){

//$new_hotel=$_GET['new_hotel'];รับจาก action_hotel
$id_hotel2=$_GET['id_hotel'];//รับจาก action_hotel
$hotel_cat_name=$_GET['hotel_cat_name'];
$hotel_cat_id=$_GET['hotel_cat_id'];
$edit_pic_hotel=$_GET['edit_pic_hotel'];
	if($_GET['edit_hotel']=="edit_hotel"){
		$action="edit";
	}else{
		$action="add";
	}
?>
<!--<div id="dev_text" style="font-size:18px; font-weight:bold; color:#FFF; padding:5px; background-color:#333;">
BIG BANNER 800 X 400 px
</div>-->

    
	<table cellpadding="0" cellspacing="0" width="100%">
    	<tr>
        	<td width="10%">
            <div id="devtext_name">
            <center>
            ลำดับ
            </center>
            </div>
            </td>
            <td width="50%">
            <div id="devtext_name">
            รายละเอียดของโรงแรม(<?=$hotel_cat_name?>)
            </div>
            </td>
            <td width="21%">
            <div id="devtext_name">
            <center>
            แก้ไขข้อมูล
            </center>
            </div>
            </td>
        </tr>
        <?
		$strSQL="select * from hotel_add where hotel_cat_id='$hotel_cat_id'";
		$result=mysql_query($strSQL);
		if(!$result){
			echo"error".mysql_error();
		}else{
			$i=1;
			while($rs=mysql_fetch_array($result)){
				$name_hotel=$rs[name_hotel];
				$id_hotel=$rs[id_hotel];
		
		?>
        <tr>
        	<td>
            <center>
            <?=$i?>
            </center>
            </td>
            <td>
           	<?=$name_hotel?>
            </td>
            <td>
            <center>
            <!--
            <a href="index.php?page=hotel&select_page=add_picfile&id_hotel=<?=$id_hotel?>">
            เพิ่ม
            </a>
            &nbsp;-->
            
            
            <a href="index.php?page=hotel_system&select_page=hotel_add&id_hotel=<?=$id_hotel?>&edit_hotel=edit_hotel&name_hotel=<?=$name_hotel?>&hotel_cat_id=<?=$hotel_cat_id?>&hotel_cat_name=<?=$hotel_cat_name?>">
            <img src="../images_system/b_insrow.png" border="0" />
            </a>
            &nbsp;
            <a href="action_hotel.php?id_hotel=<?=$id_hotel?>&action=delete_success_hotel&name_hotel=<?=$name_hotel?>&hotel_cat_id=<?=$hotel_cat_id?>&hotel_cat_name=<?=$hotel_cat_name?>">
            <img src="../images_system/b_drop.png" border="0" />
            </a>
            </center>
            </td>
        </tr>
        <?
			$i++;
			}//while
		
  	
	}//if result
	?>
    </table>
    

    <?
	$result_hotel=$db->table("hotel_add where id_hotel='$id_hotel2'");
	/*echo"hotel_id$id_hotel2";*/
	$rs_hotel=mysql_fetch_array($result_hotel);
	
	?>

<form action="action_hotel.php" method="post">
<table width="100%">

<tr>
	<td>
    จัดการ เพิ่มข้อมูลโรงแรม:&nbsp;<?=$_GET['hotel_cat_name']?>
    </td>
</tr>
<tr>
	<td>
    แนะนำโรงแรม
    </td>
</tr>
<tr>
    <td>
    <input type="txt" name="name_hotel" value="<?=$rs_hotel[name_hotel]?>" />
    </td>
</tr>


  
    <!--ประเทศ-->
<tr>
	<td>
    ตำแหน่งที่แสดงข้อมูลโรงแรมบนเว็บเพจ
    </td>
</tr>
<tr>
	<td>
    <select name="position_id">
        	
            <?php
			$position_id=$rs2[position_id];
			$strSQL="select * from main_menu";
			$result=mysql_query($strSQL);
			while($rs=mysql_fetch_array($result)){
			if($seo_position==$rs[main_menu_id]){
            ?>
        	<option selected="selected" value="<?=$rs[main_menu_id]?>"><?=$rs[main_menu_name]?></option>
            <?
			}else{
			?>
            <option  value="<?=$rs[main_menu_id]?>"><?=$rs[main_menu_name]?></option>
            <?
			}
		}
			?>
        </select>
    </td>
</tr>
<tr>
	<td>
    	
    ข้อมูลโรงแรมเบื้องต้น
    </td>
</tr>
<tr>
	<td>
    	<!--CKEditor-->
    <textarea cols="80" id="title_hotel" name="title_hotel" rows="10" ><?=$rs_hotel[title_hotel]?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'title_hotel',{

          
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            } );
        //]]>
    </script>
    <!--CKEditor-->
    </td>
</tr>
<tr>
	<td>
    ข้อมูล โรงแรมแบบละเอียด
    </td>
</tr>
<tr>
	<td>
    <!--CKEditor-->
    <textarea cols="80" id="detail_hotel" name="detail_hotel" rows="10" ><?=$rs_hotel[detail_hotel]?>
    </textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'detail_hotel',{

          
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            } );
        //]]>
    </script>
    <!--CKEditor-->
    </td>
</tr>
<tr>
	<td>
    เพิ่มแผนที่ google map
    </td>
</tr>

<tr>
	<td>
    <textarea name="map_hotel"><?=$rs_hotel[map_hotel]?></textarea>
    </td>
</tr>

<tr>
	<td>
    ราคา 
    </td>
<tr>
</tr>
    <td>
    <input type="text" name="price_hotel" value="<?=$rs_hotel[price_hotel]?>" />
    </td>
</tr>

<tr>
	<td>
   ราคา โปรโมชั่น
    </td>
</tr>
<tr>
    <td>
    <input type="text" name="promotion_hotel" value="<?=$rs_hotel[promotion_hotel]?>" />
    </td>
</tr>
<tr>
	<td>
    รายละเอียดโปรโมชั่น
    </td>
</tr>

<tr>
    <td><textarea name="detail_promotion_hotel" cols="50" rows="10"><?=$rs_hotel[detail_promotion_hotel]?></textarea></td>
</tr>


<tr>
	<td>
    <input type="hidden" value="<?=$_GET['hotel_cat_id']?>" name="hotel_cat_id" />
    <input type="hidden" value="<?=$action?>" name="action" />
   <!-- เพิ่มข้อมูลใหม่
    <input type="hidden" value="new_tour" name="new_tour" />-->
   <!-- เพิ่มข้อมูลใหม่-->
    <input type="submit" value="บันทึกข้อมูล" style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;" />
    <input type="reset" value="ยกเลิก" style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;"  />
    </td>
</tr>

</table>
</form>
<?
}
?>
</body>
</html>