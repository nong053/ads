<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language=JavaScript src="javascript/picker.js"></script>
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
	/*alert(txt);*/
	if(window.XMLHttpRequest){
	xmlReq = new XMLHttpRequest();
	}else{
	xmlReq = new ActiveXOject("Microsoft.XMLHTTP");
	}
	xmlReq.onreadystatechange = callBackpost;
	xmlReq.open("POST",txt,true);
	xmlReq.setRequestHeader("content-Type","application/x-www-form-urlencoded");/*?????*/
	xmlReq.send("jobcat_title="+document.form1.jobcat_title.value+"&jobcat_detail="+document.form1.jobcat_detail.value+"&jobcat_bgcolor="+document.form1.jobcat_bgcolor.value+"&action="+document.form1.action.value+"&jobcat_id="+document.form1.jobcat_id.value);	
	
}
function callBackpost(){
	if(xmlReq.readyState!=4){
	document.getElementById("Result").innerHTML="LOADING..";
	
	}else if(xmlReq.status==200){
	/*document.form1.test.value="";*/

	document.form1.jobcat_title.value="";
	document.form1.jobcat_detail.value="";
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
   หมวดอสังหาริมทรัพย์
        </div>
        </td>
        <td>
        <div id="devtext_name">
  รายละเอียด
        </div>
        </td>
        <td>
        <div id="devtext_name">
  สีพื้นหลัง
        </div>
        </td>
        
        <td>
        <div id="devtext_name">
        จัดการ
        </div>
        </td>
        
    </tr>
    <?php
    $strSQL="select * from realty_type_cate";
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
        <?=$rs[rtc_name]?>
        </td>
        <td>
        <?=$rs[rtc_detail]?>
        </td>
       
       <td>
       <div style="width:50px; height:15px; background:<?=$rs[rtc_bg_color]?>">
        
        </div>
       </td>
        <td>
        <!-- 
        <a href="#" onclick="getResult('action_job_company.php?action=del&jobcat_id=<?=$rs[rtc_id]?>&')">
       <img border="0" src="../images_system/b_drop.png">
        </a>&nbsp;
         -->
        <a href="index.php?page=job_system&select_page=job_company_edit_del&action=edit&jobcat_id=<?=$rs[rtc_id]?>">
       <img border="0" src="../images_system/b_edit.png">
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


<?
$action=$_GET['action'];
if($action=="edit"){
	$jobcat_id=$_GET['jobcat_id'];
	/*$jobcat_position=$_GET['jobcat_position'];
	$jobcat_title=$_GET['jobcat_title'];
	$jobcat_detail=$_GET['jobcat_detail'];*/
	
	
	$strSQL="select * from realty_type_cate where rtc_id='$jobcat_id'";
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
        หมวดอสังหาริมทรัพย์
        </td>
        <td>
        <input type="txt" disabled  name="jobcat_title" value="<?=$rs2[rtc_name]?>"/>
        </td>
    </tr>
   
    <tr>
    	<td>
        รายละเอียด
        </td>
        <td>
        <textarea name="jobcat_detail"><?=$rs2[rtc_detail]?></textarea>
        </td>
    </tr>
    <tr>
    	<td>
        พื้นหลัง
        </td>
        <td>
        <input type='text' name="jobcat_bgcolor" value='<?=$rs2[rtc_bg_color]?>'>
        <a href="javascript:TCP.popup(document.forms['form1'].elements['jobcat_bgcolor'])"><img width="15" height="13" src="../images_system/color3.png"></a>
        </td>
    </tr>
   
</table>
<table>
	<tr>
    	<td>
        <input name="action" value="edit" type="hidden">
        <input name="jobcat_id" value="<?=$rs2[rtc_id]?>" type="hidden">
        <input type="button" onclick="postResult('action_job_company.php')" value="ตกลง" />
        </td>
    </tr>
</table>
</form>
<?
}
?>
