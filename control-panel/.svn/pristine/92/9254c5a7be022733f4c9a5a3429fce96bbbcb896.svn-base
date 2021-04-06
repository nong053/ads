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
	xmlReq.send("cat_webdir_title="+document.form1.cat_webdir_title.value+"&cat_webdir_detail="+document.form1.cat_webdir_detail.value+"&action="+document.form1.action.value);
	
}
function callBackpost(){
	if(xmlReq.readyState!=4){
	document.getElementById("Result").innerHTML="LOADING..";
	
	}else if(xmlReq.status==200){
	<!--option-->
	
	document.form1.cat_webdir_title.value="";
	document.form1.cat_webdir_detail.value="";
	<!--option-->
	document.getElementById("Result").innerHTML=xmlReq.responseText;
	/*alert('เพิ่มหมวดเว็บไชต์เรียบร้อยแล้ว');*/
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


<!--
ตัวอย่าง
<input type="button" onclick="ShowResult('test_ajax.php?')" value="click here" />-->
<!--<input type="button" onblur="postResult()" value="post ajax" />-->
<!--<div id="Result">
</div>
<div id="resultArea1"></div>
<div id="resultArea"></div>

<form name="form1"  method="post" action="">
 <input type="text" name="test"/>
 
 <input type="button" onclick="postResult('post_ajax.php')"  value="click"/>
</form>
-->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td>
        <div id="devtext_name">
        <center>
        ลำดับที่
        </center>
        </div>
    	
        <td>
        <div id="devtext_name">
        ชื่่อหมวด
        </div>
        </td>
        <td>
        <div id="devtext_name">
        รายละเอียด
        </div>
        </td>
       
       
    </tr>
    <?php 
	$strSQL="select * from cat_webdir";
	$result = mysql_query($strSQL);
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
        <?=$rs[cat_webdir_title]?>
        </td>
        <td>
        <?=$rs[cat_webdir_detail]?>
        </td>
       

    </tr>
   
    <? $i++;
	} 
	?>
</table>
<table>
	<tr>
    	<td>
         
        <div id="Result"></div>
       
        </td>
    </tr>
</table>
<table>
	<tr>
    	<td>
        เพิ่มหมวดสารบัญเว็บใหม่
        </td>
    </tr>
</table>

<form name="form1" method="post" action="">
<table>

	
    <tr>
    	<td>
        ชื่อหมวด
        </td>
        <td>
        <input type="txt" name="cat_webdir_title"/>
        </td>
    </tr>
    <tr>
    	<td>
        รายละเอียด
        </td>
        <td>
        <textarea name="cat_webdir_detail"></textarea>
        </td>
    </tr>
    <tr>
    	<td>
       <input type="hidden" name="action" value="add" />
       <input type="button" onclick="postResult('action_webdircat.php')" value="เพิ่มหมวด"/>
        </td>
    </tr>
</table>
</form>
