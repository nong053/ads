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
	xmlReq.send("seo_tag1="+document.form1.seo_tag1.value+"&seo_tag2="+document.form1.seo_tag2.value+"&seo_tag3="+document.form1.seo_tag3.value+"&seo_keyword="+document.form1.seo_keyword.value+"&seo_position="+document.form1.seo_position.value+"&action="+document.form1.action.value+"&admin_id="+document.form1.admin_id.value);	
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
        ????????????????????????
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
        
    </tr>
    <?php

$member_user_url=trim($_SESSION['member_user_url2']);
//??????????????? select admin_id ???????????????????????? admin
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
    </tr>
    <?
	$i++;
	}
	?>
</table>
<div id="Result">
</div>
<br style="clear:both">
<form name="form1" method="post">
<table>
	<tr>
    	<td>
        ?????????????????????1
        </td>
        <td>
        <input type="txt"  name="seo_tag1"/>
        </td>
    </tr>
    <tr>
    	<td>
        ?????????????????????2
        </td>
        <td>
        <input type="txt"  name="seo_tag2"/>
        </td>
    </tr>
    <tr>
    	<td>
        ?????????????????????3
        </td>
        <td>
        <input type="txt"  name="seo_tag3"/>
        </td>
    </tr>
    <tr>
    	<td>
        ????????????????????????????????????
        </td>
        <td>
        <textarea name="seo_keyword"></textarea>
        </td>
    </tr>
    <tr>
    	<td>
        ?????????????????????
        </td>
        <td>
        <select name="seo_position">
        	
            <?php
			$strSQL="select * from main_menu where admin_id='".$rs_admin['admin_id']."'";
			$result=mysql_query($strSQL);
			while($rs=mysql_fetch_array($result)){
            ?>
        	<option value="<?=$rs[main_menu_id]?>"><?=$rs[main_menu_name]?></option>
            <?
			}
			?>
        </select>
        </td>
    </tr>
   
</table>
<table>
	<tr>
    	<td>
        <input name="action" value="add" type="hidden">
		<input name="admin_id" value="<?=$rs_admin['admin_id']?>" type="hidden">
        <input type="button" onclick="postResult('action_seo.php')" value="??????????????? SEO" />
        </td>
    </tr>
</table>
</form>
