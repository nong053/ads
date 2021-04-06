<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</head>

<body>
<?
$product_payment_check_id=$_GET['product_payment_check_id'];
if($_GET['action']=="detail"){

$strSQL="select * from product_payment_check where product_payment_check_id='$product_payment_check_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
//echo"$rs[product_payment_check_fullname]";

?>
<div id="dev_title">
รายละเอียดการชำระเงิน
</div>
<form action="product_payment_check_action.php" method="post">
<table width="100%">
	<tr>
    	<td width="80%">
        <div id="dev_picturetext2">
        ชื่อ-นามสกุล:
        </div>
		<?
		if($_GET['action2']=="edit"){
			$submit="บันทึกการแก้ไข";
		?>
        <input type="text" name="product_payment_check_fullname" value="<?=$rs[product_payment_check_fullname]?>" />
        <? 
		}else{
			$submit="แก้ไขข้อมูล";
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_fullname]?>
        </div>
		<?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        อีเมลล์:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_email" value="<?=$rs[product_payment_check_email]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_email]?>
        </div>
        <?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        เบอร์โทร:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_tel" value="<?=$rs[product_payment_check_tel]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_tel]?>
        </div>
        <?
		}
		?>
        </td>
        
    </tr>
    
    <tr>
    	<td>
        <div id="dev_picturetext2">
        รูปแบบการชำระเงิน:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_type" value="<?=$rs[product_payment_check_type]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_type]?>
        </div>
        <?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        จำนวนเงิน:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_amount" value="<?=$rs[product_payment_check_amount]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_amount]?>
        </div>
        <?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        ชำระเงินวันที่:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_date" value="<?=$rs[product_payment_check_date]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_date]?>
        </div>
        <?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        เวลา:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_time" value="<?=$rs[product_payment_check_time]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_time]?>
        </div>
        <?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        ชื่อธนาคาร:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_bankname" value="<?=$rs[product_payment_check_bankname]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_bankname]?>
        </div>
        <?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        ใบสั่งซื้อเลขที่:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_order_id" value="<?=$rs[product_payment_check_order_id]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_order_id]?>
        </div>
        <?
		}
		?>
        </td>
       
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        Invoice:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <input type="text" name="product_payment_check_invoice" value="<?=$rs[product_payment_check_invoice]?>" />
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_invoice]?>
        </div>
        <?
		}
		?>
        </td>
       
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        หมายเหตุ:
        </div>
        <?
		if($_GET['action2']=="edit"){
		?>
        <textarea name="product_payment_check_other" cols="40" rows="8"><?=$rs[product_payment_check_other]?></textarea>
        <? 
		}else{
		?>
        <div id="dev_check">
        <?=$rs[product_payment_check_other]?>
        </div>
        <?
		}
		?>
        </td>
        
      	
    </tr>
    <tr>
    	<td>
        <div id="dev_picturetext2">
        รูป/เอกสาร:
        </div>
       
        <div id="dev_check">
        <?=$rs[product_payment_check_invoice_pic]?>
        <!--<img src="images/Camera.png"/>-->
        </div>
       
        </td>
        
      	<tr>
        	
            <td>
            <div id="dev_button" style="margin-left:140px;"> 
			<?
			if($_GET['action2']=="edit"){
			?>
            <input type="submit" value="<?=$submit?>" />
            <input type="hidden" value="<?=$product_payment_check_id?>" name="product_payment_check_id" />
            <input type="hidden" value="edit" name="action" />
            <input type="button" onclick="parent.location='index.php?page=ecommerce_system&select_ecommerce=product_payment_check&action=detail&product_payment_check_id=<?=$product_payment_check_id?>&action=detail'" value="ยกเลิกการแก้ไข" />
            <?
			}else{
			?>
            <input type="button" onclick="parent.location='index.php?page=ecommerce_system&select_ecommerce=product_payment_check&action=detail&product_payment_check_id=<?=$product_payment_check_id?>&action2=edit&action=detail'"  value="<?=$submit?>"/>
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
    	<td width="10%">
        <div id="dev_picturetext">
        <center>
        ลำดับ
        </center>
        </div>
        </td>
    	<td width="14%">
        <div id="dev_picturetext">
        ชื่อผู้ชำระเงิน
        </div>
        </td>
        <td width="19%">
        <div id="dev_picturetext">
        ใบสั่งซื้อเลขที่
        </div>
        </td>
        <td width="17%">
        <div id="dev_picturetext">
        เบอร์โทร์
        </div>
        </td>
        <td width="17%">
        <div id="dev_picturetext">
        วันที่ชำระเงิน
        </div>
        </td>
        <td width="23%">
        <div id="dev_picturetext">
        <center>
        จัดการ
        </center>
        </div>
        </td>
    </tr>
    <?
	$strSQL="select * from product_payment_check";
	$result=mysql_query($strSQL);
	if(!$result){
	echo"error".mysql_error();
	}else{
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
					if(strlen($rs[product_payment_check_fullname])>20){
					$product_payment_check_fullname=mb_substr($rs[product_payment_check_fullname],0,20,"UTF-8")."...";
						echo"$product_payment_check_fullname";										  
					}else{
						echo"$rs[product_payment_check_fullname]";
						}
					?>
                    
        		</td>
        		<td><center>
        			<?=$rs[product_payment_check_order_id]?>
                    </center>
       			</td>
       			<td>
        			<?=$rs[product_payment_check_tel]?>
        		</td>
                <td>
        			<?=$rs[product_payment_check_date]?>
        		</td>
                
        		<td>
                <center>
                <div id="dev_picturelink">
                <a href="index.php?page=ecommerce_system&select_ecommerce=product_payment_check&action=detail&product_payment_check_id=<?=$rs[product_payment_check_id]?>">
                <img src="images/announcement.gif"  border="0"/>
        		ดูข้อมูล
                </a>
                 <a onClick="return confirm('คุณต้องการลบข้อมูลธนาคารนี้ ?');" href="product_payment_check_action.php?action=del&product_payment_check_id=<?=$rs[product_payment_check_id]?>">
        <img src="images/b_drop.png"  border="0"/>
        ลบ
        </a>
                </div>
                </center>
        		</td>
    		</tr>
            
            
            <? 
		}
	}
	?>
    <tr>
    	<td>
        
        </td>
        <td>
        
        </td>
        <td>
        
        </td>
        <td>
        
        </td>
        <td>
        
        </td>
    </tr>
</table>
<?
}
?>
</body>
</html>