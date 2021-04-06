<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
/*get ajax*/
var xmlReq;
function getResult(txt){
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
	/*alert(txt);*/
	if(window.XMLHttpRequest){
	xmlReq = new XMLHttpRequest();
	}else{
	xmlReq = new ActiveXOject("Microsoft.XMLHTTP");
	}
	xmlReq.onreadystatechange = callBackpost;
	xmlReq.open("POST",txt,true);
	xmlReq.setRequestHeader("content-Type","application/x-www-form-urlencoded");/*?????*/
	xmlReq.send("seo_tag1="+document.form1.seo_tag1.value+"&seo_tag2="+document.form1.seo_tag2.value+"&seo_tag3="+document.form1.seo_tag3.value+"&seo_keyword="+document.form1.seo_keyword.value+"&seo_position="+document.form1.seo_position.value+"&action="+document.form1.action.value+"&seo_id="+document.form1.seo_id.value+"&admin_id="+document.form1.admin_id.value);	
}
function callBackpost(){
	if(xmlReq.readyState!=4){
	document.getElementById("Result").innerHTML="LOADING..";
	
	}else if(xmlReq.status==200){
	/*document.form1.test.value="";
	document.form1.jobcat_position.value="";
	document.form1.jobcat_title.value="";
	document.form1.jobcat_detail.value="";*/
	document.getElementById("Result").innerHTML=xmlReq.responseText;
	location.reload(true);	
	
	}
}

</script>


<style>
#devtext_name{
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#dev_l{
border-left:#dedede solid 1px;
border-top:#dedede solid 1px;
border-bottom:#dedede solid 1px;
background:#efefef;
	padding:5px;
	font-weight:bold;
	font-size:13px;
}
#dev_r{
border-top:#dedede solid 1px;
border-bottom:#dedede solid 1px;
background:#efefef;
border-right:#dedede solid 1px;
	padding:5px;
	font-weight:bold;
	font-size:13px;
}
</style>

<table boder="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td>
        <div id="devtext_name">
        <center>
        ลำดับที่
        </center>
        </div>
        </td>
        <td>
        <div id="devtext_name">
        TAG1
        </div>
        </td>
        <td>
        <div id="devtext_name">
        TAG2
        </div>
        </td>
        <td>
        <div id="devtext_name">
        TAG3
        </div>
        </td>
        <td>
        <div id="devtext_name">
        KEY WORD
        </div>
        </td>
        <td>
        <div id="devtext_name">
        POSITION
        </div>
        </td>
        <td>
        <div id="devtext_name">
        จัดการ
        </div>
        </td>
        
    </tr>
    <?php
	$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin=mysql_fetch_array($result_admin);

    $strSQL="select * from seo where admin_id='".$rs_admin['admin_id']."'";
	$result=mysql_query($strSQL);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    <tr>
    	<td>
        <center>
        <?=$i?>
        </center>
        </td>
        <td>
        <?=$rs[seo_tag1]?>
        </td>
        <td>
        <?=$rs[seo_tag2]?>
        </td>
        <td>
        <?=$rs[seo_tag3]?>
        </td>
        <td>
        <?=$rs[seo_keyword]?>
        </td>
        <td>
        <?
		$seo_position=$rs[seo_position]?>
        <?php
			$strSQL2="select * from main_menu where main_menu_id='$seo_position' and admin_id='".$rs_admin['admin_id']."'";
			$result2=mysql_query($strSQL2);
			$rs2=mysql_fetch_array($result2);
				echo $rs2[main_menu_name];
			?>
        </td>
   
    	<td>
       <a href="#" onclick="getResult('action_seo.php?action=del&seo_id=<?=$rs[seo_id]?>&admin_id=<?=$rs_admin['admin_id']?>')">
        ลบ1
        </a>
        &nbsp;
        <a href="index.php?page=seo_system&select_page=seo_edit_del&action=edit&seo_id=<?=$rs[seo_id]?>&admin_id=<?=$rs_admin['admin_id']?>">
        แก้ไข
        </a>
        </td>
    </tr>
    <?
	$i++;
	}
	?>
</table>
<div id="Result">
</div>
<br style="clear:both">

<?php

$action=$_GET['action'];
if($action=="edit"){
	
	$seo_id=$_GET['seo_id'];
	$admin_id=$_GET['admin_id'];
	/*$jobcat_position=$_GET['jobcat_position'];
	$jobcat_title=$_GET['jobcat_title'];
	$jobcat_detail=$_GET['jobcat_detail'];*/

	$strSQL="select * from seo where seo_id='".$seo_id."'";
	$result=mysql_query($strSQL);
	$rs2=mysql_fetch_array($result);
	
	
	/*echo"webdir_cat<br>";
	echo"$cat_webdir_title<br>";
	echo"$webdir_id<br>";*/
	
?>
<form name="form1" method="post">
<table>
	<tr>
    	<td>
        คำค้นหา1
        </td>
        <td>
        <input type="txt"  name="seo_tag1" value="<?=$rs2[seo_tag1]?>"/>
        </td>
    </tr>
    <tr>
    	<td>
        คำค้นหา2
        </td>
        <td>
        <input type="txt"  name="seo_tag2" value="<?=$rs2[seo_tag2]?>"/>
        </td>
    </tr>
    <tr>
    	<td>
        คำค้นหา3

        </td>
        <td>
        <input type="txt"  name="seo_tag3" value="<?=$rs2[seo_tag3]?>"/>
        </td>
    </tr>
    <tr>
    	<td>
        กลุ่มคำค้นหา
        </td>
        <td>
        <textarea name="seo_keyword"><?=$rs2[seo_keyword]?></textarea>
        </td>
    </tr>
    <tr>
    	<td>
        ตำแหน่ง
        </td>
        <td>
        
        <select name="seo_position">
        	
            <?php
			$seo_position=$rs2[seo_position];
			$strSQL="select * from main_menu where admin_id='".$rs_admin['admin_id']."'";
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
    
   
</table>
<table>
	<tr>
    	<td>
        <input name="action" value="edit" type="hidden">
        <input name="seo_id" value="<?=$rs2[seo_id]?>" type="hidden">
		<input name="admin_id" value="<?=$rs_admin['admin_id']?>" type="hidden">
        <input type="button" onclick="postResult('action_seo.php')" value="แก้ไข SEO" />
        </td>
    </tr>
</table>
</form>
<?
}
?>