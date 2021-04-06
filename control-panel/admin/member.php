<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<!-- sexy ligthbox-->
<script src="mootools.js" type="text/javascript"></script>
<script src="sexylightbox.packed.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexylightbox.css" type="text/css" media="all" />

<script type="text/javascript">
  window.addEvent('domready', function(){
    new SexyLightBox();
    new SexyLightBox({find:'sexywhite',color:'white', OverlayStyles:{'background-color':'#000'}});
  });
</script>
<!-- sexy ligthbox-->

<!-- -->
<style type="text/css">
 #dev_picturetext{
	 padding:5px;
	 background-color:#dedede;
	 color:black;
	
	 
	 font-weight:bold;
 }
  #dev_picturetext2{
	 padding:5px;
	 /*font-size:14px;*/
	 font-weight:bold;
	 float:left;
	 width:130px;
 }
 #dev_check{
	 border:#CCC dotted 1px;
	 float:left;
	 width:auto;
	 padding:5px;
	 padding-left:20px;
	 padding-right:20px;
	 -moz-border-radius:5px;
	-webkit-border-radius:15px;
	 
	 
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
 #dev_title{
	border:#09C 5px solid;
	background-color:#09F;
	-moz-border-radius:5px;
	-webkit-border-radius:15px;
	padding:5px;
	color:#FFF;
	font-weight:bold;
}
-->
</style>
</head>

<body>
<?
include_once("../config.inc.php");
$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก admin
$query_admin="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin=$obj_manage_data->select_data_proc($query_admin);
$rs_admin=mysql_fetch_array($result_admin);
if(!$rs_admin){
$admin_id=0;
}else{
$admin_id=$rs_admin['admin_id'];
}
if($_SESSION['admin_status']=="3"){
$admin_id=1;
}

$cus_id=$_GET['cus_id'];

$detail_cus=$_GET['detail_cus'];
if($detail_cus=="detail_cus"){
$strSQL="select c.*,p.PROVINCE_NAME,am.AMPHUR_NAME,d.DISTRICT_NAME from customer c
LEFT JOIN province p
on c.cus_province=p.PROVINCE_ID
LEFT JOIN amphur am 
on am.AMPHUR_ID=c.cus_district
LEFT JOIN district d
on d.DISTRICT_ID=c.cus_sub_district
 where cus_id='$cus_id' and admin_id='$admin_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);

/*
include_once("class_mysql.php");
$db = new database();
$result_customer = $db->tableSQL("customer where cus_id='$cus_id' and admin_id='$admin_id'");
$rs_customer = mysql_fetch_array($result_customer);
*/
?>

<div id="dev_title">
ข้อมูลสมาชิก
</div>
<form method="post" action="member_action.php" enctype="multipart/form-data">
<table width="100%" cellpadding="0" cellspacing="0">
	
	<tr>
    	<td>
        <div id="dev_picturetext2">
        ชื่อ-นามสกุล:
        </div>
        <div id="dev_picturetext2" style="width:350px;">
        <img src="../member_img/<?=$rs[cus_pic]?>"  border="0" width="100"/><br> 
        <? 
		if($_GET['action2']=="edit"){
			$submit="บันทึกการแก้ไข";
			?>
             <input type="file" name="cus_pic" /> 
         	<input type="text" name="cus_first_name" value="<?=$rs[cus_first_name]?>"/>  -
         	<input type="text" name="cus_last_name" value="<?=$rs[cus_last_name]?>"/>  
            <? 
		}else{
			$submit="แก้ไข";
		?>
        <?
        if($rs[cus_title_name]==1){
        	$cus_title_name="นาย";
        }else if($rs[cus_title_name]==2){
        	$cus_title_name="นาง";
        }else if($rs[cus_title_name]==3){
        	$cus_title_name="นางสาว";
        }
		echo $cus_title_name." ".$rs[cus_first_name]." ".$rs[cus_last_name];
        }
		?>
        </div>
        </td>
    </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        อนุญาติให้ใช้งาน:
        </div>
        <div id="dev_check">
         	<?php 
         	if($rs[cus_enable]=="P"){
         		echo"<font color='red'>รอการอนุมัติ</font>";
         	}else{
         		echo"<font color='green'>อนุมัติเรียบร้อย</font>";
         	}
         	?>
         	
           
        </div>
        </td>
    </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        E-mail:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	<input type="text" name="cus_email" value="<?=$rs[cus_email]?>"/>
            <? 
			}else{
			?>
         <?=$rs[cus_email]?>
          <?
			}
			?>
        </div>
        </td>
    </tr>
    <tr style='display:none;'>
        <td >
        <div id="dev_picturetext2">
        User:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	<input type="text" name="cus_user" value="<?=$rs[cus_user]?>"/>
            <? 
			}else{
			?>
         <?=$rs[cus_user]?>
            <?
			}
			?>
        </div>
        </td>
     </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        Pass:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	<input type="text" name="cus_pass" value="<?=$rs[cus_pass]?>"/>
            <? 
			}else{
			?>
         <?=$rs[cus_pass]?>
         <?
			}
			?>
        </div>
        </td>
     </tr>
     <tr>
        <td>
        	<div id="dev_picturetext2">
	       	วัน/เดือน/ปีเกิด
	       </div>
           <div id="dev_check">
        	
	       	<?=$rs['cus_birthday_dd']?>-<?=$rs['cus_birthday_mm']?>-<?=$rs['cus_birthday_yyyy']?>
	       </div>
        </td>
    </tr>
    <tr style='display:none;'>
        <td>
        <div id="dev_picturetext2">
        บริษัท:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	<input type="text" name="cus_company" value="<?=$rs[cus_company]?>"/>
            <? 
			}else{
			?>
        	 <?=$rs[cus_company]?>
        	<?
			}
			?>
        </div>
        </td>
    </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        ที่อยู่:
        </div>
        <div id="dev_check">
       		จังหวัด: <?=$rs['PROVINCE_NAME']?><br>
       		อำเภอ/เขต: <?=$rs['AMPHUR_NAME']?><br>
       		ตำบล/แขวง: <?=$rs['DISTRICT_NAME']?><br>
       		รหัสไปรษณีย์: <?=$rs['cus_postal_code']?><br>
       		บ้านเลขที่: <?=$rs['cus_village_no']?><br>
       		ถนน, ซอย: <?=$rs['cus_road']?><br>
       		
        </div>
        </td>
    </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        เบอร์โทร:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	<input type="text" name="cus_tel" value="<?=$rs[cus_tel]?>"/>
            <? 
			}else{
			?>
         <?=$rs[cus_tel]?>
         <?
			}
			?>
        </div>
        </td>
    </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        เบอร์โทร2:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	<input type="text" name="cus_tel2" value="<?=$rs[cus_tel2]?>"/>
            <? 
			}else{
			?>
         <?=$rs[cus_tel2]?>
         <?
			}
			?>
        </div>
        </td>
    </tr>
    <tr style='display: none;'>
        <td>
        <div id="dev_picturetext2">
        แฟกซ์:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	<input type="text" name="cus_fax" value="<?=$rs[cus_fax]?>"/>
            <? 
			}else{
			?>
         <?=$rs[cus_fax]?>
         <?
			}
			?>
        </div>
        </td>
    </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        หมายเหตุ:
        </div>
        <div id="dev_check">
        <? 
			if($_GET['action2']=="edit"){
			
			?>
            	
                <textarea name="cus_other"><?=$rs[cus_other]?></textarea>
            <? 
			}else{
			?>
         <?=$rs[cus_other]?>
         <?
			}
			?>
        </div>
        </td>
    </tr>
    <tr>
    	<td>
        <div id="dev_button" style="margin-left:140px;"> 
			<?
			if($_GET['action2']=="edit"){//บันทึกไปแกไข
			?>
            <input type="submit" value="<?=$submit?>" />
            <input type="hidden" value="<?=$cus_id?>" name="cus_id" />
            <input type="hidden" value="edit" name="action" />
            <input type="button" onclick="parent.location='index.php?page=member_system'" value="ยกเลิกการแก้ไข" />
            <?
			}else{
			?>
            <!-- แก้ไข-->
           	<input  type="button" onclick="parent.location='index.php?page=member_system&cus_id=<?=$cus_id?>&detail_cus=detail_cus&action2=edit'"  value="<?=$submit?>"/>
            <input type="button" onclick="parent.location='index.php?page=member_system'"  value="ย้อนกลับ"/>
           <?
			}
		   ?> 
           
            </div>
        </td>
    </tr>
</table>
</form>
<? 
}else{
?>
<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td>
        <center>
        <div id="dev_picturetext">
        ลำดับ
        </div>
        </center>
        </td>
        <td>
         <div id="dev_picturetext">
        ชื่อ-นามสกุล
        </div>
        </td>
        <td>
         <div id="dev_picturetext">
        เปิดใช้งาน
        </div>
        </td>
        <td>
         <div id="dev_picturetext">
        E-mail
        </div>
        </td>
        
        <td>
         <div id="dev_picturetext">
        Password
        </div>
        </td>
        <td>
        <center>
         <div id="dev_picturetext">
        จัดการ
        </div>
        </center>
        </td>
        
    </tr>
    <tr>
    	<td>
         
        </td>
    </tr>
    
<?

$strSQL="select * from customer";
$result=mysql_query($strSQL);
$i=1;
$j=1;
while($rs=mysql_fetch_array($result)){
$bgcolor=($j++%2)?'#FFFFCC':'#FFFFFF';
//echo"color$bgcolor";
?>
	<tr bgcolor="<?=$bgcolor?>" >
    	<td>
        <center>
        <?=$i?>
        </center>
        </td>
        <td>
        <?=$rs['cus_first_name']?>  <?=$rs['cus_last_name']?>
        
        </td>
        <td>
        <div id="dev_picturelink">
        
        <a href="member_action.php?cus_id=<?=$rs[cus_id]?>&action2=check_member&order_status=<?=$rs[cus_enable]?>&TB_iframe=true&height=210&width=315" rel="sexylightbox">
        <img src="images/announcement.gif" border="0" />
        <?
        if($rs[cus_enable]=="Yes"){
        	
        	echo"อนุมัติเรียบร้อย";
        }else{
			echo"รอการอนุมัติ";
        	
        }
        
        
        ?>
        </a>
        </div>
        </td>
        <td>
        <?=$rs[cus_email]?>
        
        </td>
        <td>
        <?=$rs[cus_pass]?>
        
        </td>
        <td>
        <div id="dev_picturelink">
        <center>
       
        <a href="index.php?page=member_system&cus_id=<?=$rs[cus_id]?>&detail_cus=detail_cus" />
        <img src="images/knowledgebase.gif" border="0" />
       <!-- <img src="images/b_edit.png"  border="0"/>-->
        ดูข้อมูล
        </a>
        <a href="member_action2.php?cus_id=<?=$rs[cus_id]?>&action=del">
        <img src="images/b_drop.png" border="0" />
        ลบ 
        </a>
        </center>
        </div>
        </td>
    </tr>
	
<?

$i++;
}
?>
</table>
<?
}//if
?>
</body>
</html>