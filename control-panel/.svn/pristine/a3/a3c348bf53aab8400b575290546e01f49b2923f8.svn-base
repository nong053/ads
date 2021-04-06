<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
 #dev_picturetext{
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:14px;
	 
	 font-weight:bold;
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="13%">
        <div id="dev_picturetext">
        ลำดับที่
        </div>
        </td>
        <td width="26%">
        <div id="dev_picturetext">
        ชื่อธนาคาร
        </div>
        </td>
        <td width="19%">
        <div id="dev_picturetext">
        สาขา
        </div>
        </td>
        <td width="25%">
        <div id="dev_picturetext">
        เลขที่บัญชี	
        </div>
        </td>
        <td width="17%">
        <div id="dev_picturetext">
        จัดการ
        </div>
        </td>
    </tr>
    <?
	include_once("../config.inc.php");
	$strSQL="select * from product_payment_bank";
	$result=mysql_query($strSQL);
	
	while($rs=mysql_fetch_array($result)){
	$i=1;	
	
	?>
    <tr>
    	<td>
        <center>
        <?=$i?>
        </center>
        </td>
        <td>
        <?=$rs[payment_bank_name]?>
        </td>
        <td>
        <?=$rs[payment_bank_number]?>
        </td>
        <td>
        <?=$rs[payment_bank_ฺฺbranch]?>
        </td>
        <td>
        <a href="#">
        <img src="images/b_drop.png"  border="0"/>
        ลบ
        </a>
        <a href="#">
        <img src="images/b_edit.png" border="0" />
        แก้ไข
        </a>
        </td>
        
    </tr>
    <?
	$i++;
    } 
	?>
</table>
<?
$action=$_GET['action'];
if($action=="edit"){
	$payment_bank_id=$_GET['payment_bank_id'];
	
	$strSQL="select * from product_payment_bank where payment_bank_id'$payment_bank_id'";
	$result=mysql_query($strSQL);
	$action="edit";
	$payment_bank_name=$rs['payment_bank_name'];
	$payment_bank_ฺฺbranch=$rs['payment_bank_ฺฺbranch'];
	$payment_bank_number=$rs['payment_bank_number'];
	$payment_bank_other=$rs['payment_bank_other'];
}else{
	$action="add";
	$payment_bank_name="";
	$payment_bank_ฺฺbranch="";
	$payment_bank_number="";
	$payment_bank_other="";
	}
?>
<form action="product_payment_bank_action.php" method="post">
<table>
	<tr>
    	<td>
        ชื่อธนาคาร
        </td>
        <td>
        <input type="text" name="payment_bank_name" value="<?=$payment_bank_name?>" />
        </td>
        
    </tr>
     <tr>
    	<td>
        สาขา
        </td>
        <td>
        <input type="text" name="payment_bank_ฺฺbranch" value="<?=$payment_bank_ฺฺbranch?>"  />
        </td>
        
    </tr>
    <tr>
    	<td>
        เลขที่บัญชี
        </td>
        <td>
        <input type="text" name="payment_bank_number" value="<?=$payment_bank_number?>"  />
        </td>
        
    </tr>
   
    <tr>
    	<td>
        รายละเอียดเพิ่มเติม
        </td>
        <td>
        <textarea name="payment_bank_other"><?=$payment_bank_other?></textarea>
        </td>
    </tr>
    	<td>
        </td>
    	<td>
        <input type="hidden" name="action" value="add" />
        <input type="submit" value="Submit" />
        </td>
    </tr>
</table>
</form>
</body>
</html>