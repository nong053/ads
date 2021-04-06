<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
/*get ajax*/
var xmlReq;
function getResult(txt){
	/*alert(txt);*/
	if(window.XMLHttpRequest){
		xmlReq = new XMLHttpRequest();
	}else{
		xmlReq = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlReq.onreadystatechange = callBackget;
	xmlReq.open("GET",txt+new Date().getTime(),true);
	xmlReq.send(null);
}
function callBackget(){
	if(xmlReq.readyState !=4){
	document.getElementById("Result").innerHTML="LOADING...";
	}else if(xmlReq.status==200){
	document.getElementById("Result").innerHTML=xmlReq.responseText;
	location.reload(true);
	}
}

/*post ajax*/
function postResult(txt){
	
	if(window.XMLHttpRequest){
	xmlReq = new XMLHttpRequest();
	}else{
	xmlReq = new ActiveXOject("Microsoft.XMLHTTP");
	}
	xmlReq.onreadystatechange = callBackpost;
	xmlReq.open("POST",txt,true);
	xmlReq.setRequestHeader("content-Type","application/x-www-form-urlencoded");/*?????*/
	xmlReq.send("hotel_cat_name="+document.form1.hotel_cat_name.value+"&hotel_cat_zone="+document.form1.hotel_cat_zone.value+"&hotel_cat_province="+document.form1.hotel_cat_province.value+"&hotel_cat_map="+document.form1.hotel_cat_map.value+"&action="+document.form1.action.value+"&hotel_cat_id="+document.form1.hotel_cat_id.value);
	
}
function callBackpost(){
	if(xmlReq.readyState!=4){
	document.getElementById("Result").innerHTML="LOADING..";
	
	}else if(xmlReq.status==200){
	<!--option-->
	/*
	document.form1.webdir_url.value="";
	document.form1.webdir_homepage.value="";
	document.form1.webdir_detail.value="";
	document.form1.webdir_tag1.value="";
	document.form1.webdir_tag2.value="";
	document.form1.webdir_tag3.value="";
	document.form1.webdir_keyword.value="";
	document.form1.webdir_email.value="";
	document.form1.webdir_status.value="";*/
	<!--option-->
	document.getElementById("Result").innerHTML=xmlReq.responseText;
	/*alert('เพิ่มหมวดเว็บไชต์เรียบร้อยแล้ว');*/
	location.reload(true);
	
	}
}

</script>
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
<table width="100%">
<tr>
	<td>
    ลำดับ
    </td>
	<td>
    ชื่อโรงแรม
    </td>
    <td>
    ภาค
    </td>
    <td>
    จังหวัด
    </td>
    <td>
    แผนที่
    </td>
    <td>
    จัดการ
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
    <a href="#" onClick="getResult('action_hotel_cat?hotel_cat_id=<?=$rs_hotel_cat[hotel_cat_id]?>&action=del&')">
    ลบ
    </a> 
    &nbsp;
    <a href="index.php?page=hotel_system&select_page=hotel_cat&hotel_cat_id=<?=$rs_hotel_cat[hotel_cat_id]?>&action=edit&hotel_cat_zone=<?=$rs_hotel_cat[hotel_cat_zone]?>&hotel_cat_province=<?=$rs_hotel_cat[hotel_cat_province]?>">
    แก้ไข
    </a>
    </td>
</tr>
<?
$i++;
}
?>


</table>
<br>
<?php
$action2=$_GET['action'];
$hotel_cat_id=$_GET['hotel_cat_id'];
$hotel_cat_zone=$_GET['hotel_cat_zone'];
$hotel_cat_province=$_GET['hotel_cat_province'];

if($action2=="edit"){
$result_hotel=$db->table("hotel_cat where hotel_cat_id='$hotel_cat_id'");
$rs_hotel=mysql_fetch_array($result_hotel);
echo $rs_hotel[hotel_cat_name];
$txt_title="แก้ไขข้อมูล";
$action="edit";
}else{
$action="add";
$txt_title="เพิ่มข้อมูล";
}
?>
<form name="form1" method="post">
<table>
<tr>
	<td>
    ชื่อโรงแรม
    </td>
    <td>
    <input type="txt" name="hotel_cat_name" value="<?=$rs_hotel[hotel_cat_name]?>">
    </td>
</tr>

<tr>
	<td>
    ภาค
    </td>
    <td>
    
    <select name="hotel_cat_zone">
	<?
   $result_zone=$db->table("zone");
   while($rs_zone=mysql_fetch_array($result_zone)){
  		 if($hotel_cat_zone==$rs_zone[zone_id]){
   		?>
    	<option selected="selected" value="<?=$rs_zone[zone_id]?>"><?=$rs_zone[zone_name]?></option>
		<?
		 }else{
	   ?>
	   <option value="<?=$rs_zone[zone_id]?>"><?=$rs_zone[zone_name]?></option>
       <?
   		 }
   }
	?>
    </select>
    </td>
</tr>
<tr>
	<td>
    จังหวัด
    </td>
    <td>
    <select name="hotel_cat_province">
    <?
   $result_province=$db->table("province");
   while($rs_province=mysql_fetch_array($result_province)){
	   if($hotel_cat_province==$rs_province[province_id]){
   ?>
    <option selected="selected" value="<?=$rs_province[province_id]?>"><?=$rs_province[province_name]?></option>
	<?
	   }else{
	 ?>
	<option value="<?=$rs_province[province_id]?>"><?=$rs_province[province_name]?></option>
    <?	
	}
   }
	?>
    </select>
    </td>
</tr>
<tr>
	<td>
    แผนที่ google map
    </td>
    <td>
    <textarea name="hotel_cat_map"><?=$rs_hotel[hotel_cat_map]?></textarea>
    </td>
</tr>
</table>
<table>
	<tr>
    	<td>
		<input type="button" onclick="postResult('action_hotel_cat')" value="<?=$txt_title?>">
        <input type="hidden" name="action" value="<?=$action?>">
        <input type="hidden" name="hotel_cat_id" value="<?=$hotel_cat_id?>">
    	</td>
        <td>
		<input type="reset" value="Reset">
    	</td>
    </tr>
</table>
</form>