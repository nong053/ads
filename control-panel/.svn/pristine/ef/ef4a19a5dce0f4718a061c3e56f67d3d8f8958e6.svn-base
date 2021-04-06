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
	xmlReq.send("webdir_cat="+document.form1.webdir_cat.value+"&webdir_url="+document.form1.webdir_url.value+"&webdir_homepage="+document.form1.webdir_homepage.value+"&webdir_detail="+document.form1.webdir_detail.value+"&webdir_tag1="+document.form1.webdir_tag1.value+"&webdir_tag2="+document.form1.webdir_tag2.value+"&webdir_tag3="+document.form1.webdir_tag3.value+"&webdir_keyword="+document.form1.webdir_keyword.value+"&webdir_mail="+document.form1.webdir_mail.value+"&webdir_status="+document.form1.webdir_status.value+"&action="+document.form1.action.value+"&webdir_id="+document.form1.webdir_id.value);
	
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
        </td>
        <td>
        <div id="devtext_name">
        หมวดเว็บ
        </div>
        </td>
    	<td>
        <div id="devtext_name">
        โฮมเำพจ
        </div>
        </td>
        
        <td>
        <div id="devtext_name">
        รายละเอียดเว็บ
        </div>
        </td>
        <td>
        <div id="devtext_name">
        สถานะเว็บ
        </div>
        </td>
         <td>
        <div id="devtext_name">
        <center>
        จัดการ
        </center>
        </div>
        </td>
       
    </tr>
    <?php 
	$strSQL="select * from webdir";
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
        <?
        $cat_webdir_id=$rs[webdir_cat];
		$strSQL2="select * from cat_webdir where cat_webdir_id='$cat_webdir_id'";
		$result2=mysql_query($strSQL2);
		$rs2=mysql_fetch_array($result2);
		$cat_webdir_title=$rs2[cat_webdir_title];
		echo $rs2[cat_webdir_title];
		
		?>

        </td>
        <td>
        <?=$rs[webdir_homepage]?>

        </td>
        <td>
        <?=$rs[webdir_detail]?>
        </td>
        <td>
        <?=$rs[webdir_status]?>
        </td>
       	<td>
        <center>
        <a href="index.php?page=web_directory&select_page=webdir_edit_del&action=edit&webdir_id=<?=$rs[webdir_id]?>&cat_webdir_title=<?=$cat_webdir_title?>&webdir_cat=<?=$rs[webdir_cat]?>" >
        แก้ไข 
        </a>
        
        &nbsp;
        <a href="#" onclick="getResult('action_webdir.php?action=del&webdir_id=<?=$rs[webdir_id]?>&')" > 
        ลบ
        </a>
        </center>
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
<?
$action=$_GET['action'];
if($action=="edit"){
	$webdir_id=$_GET['webdir_id'];
	$cat_webdir_title=$_GET['cat_webdir_title'];
	$webdir_cat=$_GET['webdir_cat'];
	
	
	$strSQL="select * from webdir where webdir_id='$webdir_id'";
	$result=mysql_query($strSQL);
	$rs2=mysql_fetch_array($result);
	
	
	/*echo"webdir_cat<br>";
	echo"$cat_webdir_title<br>";
	echo"$webdir_id<br>";*/
	
?>
<table>
	<tr>
    	<td>
        <b>
        แก้ไขเว็บไชต์
        </b>
        </td>
    </tr>
</table>

<form name="form1" method="post" action="">
<table>

	<tr>
    	<td>
        หมวดสาระบัญ
        </td>
        <td>
        
        <select name="webdir_cat">
        <?php
		$strSQL="select * from cat_webdir";
		$result=mysql_query($strSQL);
		while($rs=mysql_fetch_array($result)){
			if($webdir_cat==$rs[cat_webdir_id]){
			?>
        	<option selected="selected" value="<?=$rs[cat_webdir_id]?>"><?=$rs[cat_webdir_title]?></option>
         	<?
			}else{
			?>
            <option value="<?=$rs[cat_webdir_id]?>"><?=$rs[cat_webdir_title]?></option>
         	<?
			}
		}
		 ?>
        </select>
        </td>
    </tr>
    <tr>
    	<td>
        URL:
        </td>
        <td>
        <input type="txt" name="webdir_url" value="<?=$rs2[webdir_url]?>"/>
        </td>
    </tr>
    <tr>
    	<td>
        โอมเพจ
        </td>
        <td>
        <input type="txt" name="webdir_homepage" value="<?=$rs2[webdir_homepage]?>">
        </td>
    </tr>
    <tr>
    	<td>
        รายละเอียดเว็บ
        </td>
        <td>
        <textarea name="webdir_detail"><?=$rs2[webdir_detail]?></textarea>
        </td>
    </tr>
    <tr>
    	<td>
       Tag1
        </td>
        <td>
        <input type="txt" name="webdir_tag1" value="<?=$rs2[webdir_tag1]?>">
        </td>
    </tr>
    <tr>
    	<td>
        Tag2
        </td>
        <td>
        <input type="txt" name="webdir_tag2" value="<?=$rs2[webdir_tag2]?>">
        </td>
    </tr>
    <tr>
    	<td>
        Tag3
        </td>
        <td>
        <input type="txt" name="webdir_tag3" value="<?=$rs2[webdir_tag3]?>">
        </td>
    </tr>
    <tr>
    	<td>
        Keyword
        </td>
        <td>
        <textarea name="webdir_keyword"><?=$rs2[webdir_keyword]?></textarea>
        </td>
    </tr>
    <tr>
    	<td>
        email:
        </td>
        <td>
        <input type="txt" name="webdir_mail" value="<?=$rs2[webdir_mail]?>">
        </td>
    </tr>
    <tr>
    	<td>
        สถานะการแสดงผล
        </td>
        <td>
        <select name="webdir_status">
        <option value="check">รอตรวจสอบ</option>
        <option value="show">แสดงผล</option>
        <option value="stop">ระงับการแสดงผล</option>
        </select>
        </td>
    </tr>
    
    
    <tr>
    	<td>
       <input type="hidden" name="action" value="edit" />
       <input type="hidden" name="webdir_id" value="<?=$rs2[webdir_id]?>" />
       <input type="button" onclick="postResult('action_webdir.php')" value="แก้ไขเว็บ"/>
        </td>
    </tr>
</table>
</form>
<?
}
?>