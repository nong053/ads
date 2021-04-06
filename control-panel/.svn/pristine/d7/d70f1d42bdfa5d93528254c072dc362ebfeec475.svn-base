<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
 #dev_picturetext{
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:15px;
	 
	 font-weight:bold;
 }
  #dev_picturetext2{
	 padding:5px;
	 font-size:14px;
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="dev_title" >
จัดการสถานะการชำระเงิน
</div>
<?
$order_status=$_GET['order_status'];
$order_id=$_GET['order_id'];
//echo"order_status$order_status";
?>
<br style="clear:both" />
<div id="dev_title">
<form action="product_check_order_action.php" method="post">
<table>
	<tr>
    <? /*
	$strSQL="select * from cus_order order_id='$order_id'";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);*/
	if($order_status=="Yes"){
	$selected1="checked";}else{$selected2="checked";}
	?>
     	<td width="343"><input type="radio"  name="order_status" value="Yes" <?=$selected1?> />&nbsp; ชำระเงินเรียบร้อยแล้ว
        </td>
    </tr>
    <tr>
     	<td><input type="radio" name="order_status" value="No"  <?=$selected2?>/>&nbsp; ยังไม่ชำระเงิน
        </td>
    </tr>
    <tr>
    	<td>
        <input type="submit" value="บันทึกการเปลี่ยนแปลง" />
        <input type="hidden" value="change_status" name="action_status" />
        <input type="hidden" value="<?=$order_id?>" name="order_id" />
        <input type="button" onclick="parent.location='index.php?page=ecommerce_system&select_ecommerce=product_check_order'" value="ยกเลิกการแปลี่ยนแปลง" />
        </td>
    </tr>
</table>
</form>
</div>
</body>
</html>