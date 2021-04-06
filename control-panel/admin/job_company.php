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
	xmlReq.send("jobcat_title="+document.form1.jobcat_title.value+"&jobcat_detail="+document.form1.jobcat_detail.value+"&jobcat_bgcolor="+document.form1.jobcat_bgcolor.value+"&action="+document.form1.action.value);	
}
function callBackpost(){
	if(xmlReq.readyState!=4){
	document.getElementById("Result").innerHTML="LOADING..";
	
	}else if(xmlReq.status==200){
	/*document.form1.test.value="";*/
	document.form1.jobcat_bgcolor.value="";
	document.form1.jobcat_title.value="";
	document.form1.jobcat_detail.value="";
	document.getElementById("Result").innerHTML=xmlReq.responseText;
	location.reload(true);	
	
	}
}

</script>
<script language=JavaScript src="javascript/picker.js"></script>

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
        <td></td>
       
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
    	<td style='font-weight: bold; text-align:right;'>
      อสังหาริมทรัพย์
        </td>
        <td>
        <input type="txt"  name="jobcat_title"/>
        </td>
    </tr>
   
    <tr>
    	<td style='font-weight: bold; text-align:right; vertical-align: top; '>
        รายละเอียด
        </td>
        <td>
        <textarea name="jobcat_detail"></textarea>
        </td>
    </tr>
     <tr>
    	<td style='font-weight: bold; text-align:right;'>
        พื้นหลัง
        </td>
        <td>
        <input type='text' name="jobcat_bgcolor" >
        <a href="javascript:TCP.popup(document.forms['form1'].elements['jobcat_bgcolor'])"><img width="15" height="13" src="../images_system/color3.png"></a>
        </td>
    </tr>
   
</table>
<table>
	<tr>
    	<td>
        <input name="action" value="add" type="hidden">
        <input type="button" onclick="postResult('action_job_company.php')" value="ตกลง" />
        </td>
    </tr>
</table>
</form>
