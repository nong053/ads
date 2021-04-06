<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
include("../config.inc.php");
$cus_id=$_GET['cus_id'];

//echo"cus_id$cus_id";
$action=$_GET['action'];

if($action=="detail"){
	
$strSQL="select * from customer where cus_id='$cus_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
?>
<div id="dev_title">
รายละเอียดข้อมูลผู้สั่งซื้อสินค้า
</div>
<table>
	<tr>
    	<td>
        <div id="dev_picturetext2">
        รูปภาพ:
        </div>
        <div id="dev_check">
        <?
		if(!$action2=="edit"){
		echo"img";
		$submit="แก้ไขข้อมูล";
		}else{
		$submit="บันทึกแก้ไขข้อมูล";
		echo"del img";
		}
		?>
        </div>
        </td>
   </tr>
   <tr>
      
    	<td>
        <div id="dev_picturetext2">
        ชื่อ-นามกุล:
        </div>
        <div id="dev_check">
        <?
		if(!$action2=="edit"){
		echo"$rs[cus_fullname]";
		}else{
		?>
        <input type="text" name="cus_fullname" />
        <? 
		}
		?>
        </div>
        </td>
   </tr>
   <tr>
        <td>
        <div id="dev_picturetext2">
        user:
        </div>
        <div id="dev_check">
        <?
		if(!$action2=="edit"){
		echo"$rs[cus_user]";
		}else{
		?>
        <input type="text" name="cus_user" />
        <? 
		}
		?>
        </div>
        </td>
   </tr>
   <tr>
        <td>
        <div id="dev_picturetext2">
        password:
        </div>
        <div id="dev_check">
        <?
		if(!$action2=="edit"){
		echo"$rs[cus_pass]";
		}else{
		?>
        <input type="text" name="cus_pass" />
        <? 
		}
		?>
        </div>
        </td>
   </tr>
   <tr>
        <td>
        <div id="dev_picturetext2">
        บริษัท:
        </div>
        <div id="dev_check">
        <?
		if(!$action2=="edit"){
		echo"$rs[cus_company]";
		}else{
		?>
        <input type="text" name="cus_company" />
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
        <?
		if(!$action2=="edit"){
		echo"$rs[cus_address]";
		}else{
		?>
        <input type="text" name="cus_address" />
        <? 
		}
		?>
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
		if(!$action2=="edit"){
		echo"$rs[cus_tel]";
		}else{
		?>
        <input type="text" name="cus_tel" />
        <? 
		}
		?>
        </div>
        </td>
   </tr>
   <tr>
        <td>
        <div id="dev_picturetext2">
        เบอร์แฟกซ์:
        </div>
        <div id="dev_check">
        <?
		if(!$action2=="edit"){
		echo"$rs[cus_fax]";
		}else{
		?>
        <input type="text" name="cus_fax" />
        <? 
		}
		?>
        </div>
        </td>
   </tr>
   <tr>
        <td>
        <div id="dev_picturetext2">
        อื่น ๆ:
        </div>
        <div id="dev_check">
        <?
		if(!$action2=="edit"){
		echo"$rs[cus_other]";
		}else{
		?>
        <textarea name="cus_other"></textarea>
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
            <input type="button" onclick="parent.location='index.php?page=ecommerce_system&select_ecommerce=product_check_order&action=detail&cus_id=<?=$cus_id?>'" value="ยกเลิกการแก้ไข" />
            <?
			}else{
			?>
            <!-- แก้ไข-->
            <input type="button" onclick="parent.location='index.php?page=ecommerce_system&select_ecommerce=product_check_order'"  value="ย้อนกลับ"/>
           <?
			}
		   ?>
            </div>
        </td>
    </tr>
</table>
<? 
}else if($action=="detail_product"){
$order_id=$_GET['order_id'];
?>

<div id="dev_title" >
รายละเอียดใบสั่งซื้อเลขที่:<?=$order_id?>
</div>
<br style="clear:both" />
    <table cellpadding="0" cellspacing="0" width="100%">
    	<tr>
        	<td>
            <div id="dev_picturetext">
            <center>
            ลำดับ
            </center>
            </div>
            </td>
            <td>
            <div id="dev_picturetext">
            สินค้า
            </div>
            </td>
            <td>
            <div id="dev_picturetext">
            หน่วย
            </div>
            </td>
            <td>
            <div id="dev_picturetext">
            ราคา/หน่วย
            </div>
            </td>
            <td>
            <div id="dev_picturetext">
            ราคารวม
            </div>
            </td>
        </tr>
        <? 

	

	
	//echo"order_id$order_id";
	//detail product
	$strSQL="select * from order_detail where order_id='$order_id'";
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
            <?  $strSQL2="select * from product where product_id='$rs[product_id]'";
				$result2=mysql_query($strSQL2);
				$rs2=mysql_fetch_array($result2);

			?>
            <div id="dev_picturelink">
            <a href="product_check_order.php?action=detail_product_item&product_id=<?=$rs[product_id]?>">
            <img src="images/announcement.gif" border="0" />
            <?=$rs2[product_name]?>
            </a>
            </div>
            </td>
            <td>
            <?=$rs[order_detail_amount]?>
            </td>
            <td>
            <?=$rs[order_detail_cost]?>
            </td>
            <td>
            <?
			$sumprice=$rs[order_detail_amount]*$rs[order_detail_cost];
            ?>
            <?=$sumprice?>
            </td>
        </tr>
      <?
	  $i++;
	}
	  ?>
    </table>
    <? 
}else if($action=="detail_product_item"){
	$product_id=$_GET['product_id'];
	$strSQL="select * from product where product_id='$product_id'";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);
	
?>
<div  id="dev_title">
รายละเอียดสินค้า
</div>
<table>
	<tr>
    	<td>
        <div id="dev_picturetext2">
        ชื่อสินค้า
        </div>
        <div id="dev_check">
        <?=$rs[product_name]?>
        </div>
    	</td>
    </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        รายละเอียดสินค้า
        </div>
        <div id="dev_check">
         <?=$rs[product_detail]?>
        </div>
        </td>
     </tr>
   
    <tr>
        <td>
        <div id="dev_picturetext2">
        ราคา
        </div>
        <div id="dev_check">
         <?=$rs[product_price]?>
        </div>
        </td>
      </tr>
    
     <tr>
        <td>
        <div id="dev_picturetext2">
        สถานะโปรโมชั่น
        </div>
        <div id="dev_check">
         <?=$rs[product_promotion]?>
        </div>
    	</td>
     </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        ราคาโปรโมชั่น
        </div>
        <div id="dev_check">
         <?=$rs[product_promotion_price]?>
        </div>
    	</td>
     </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        รายละเอียดโปโมชั่น
        </div>
        <div id="dev_check">
         <?=$rs[product_promotion_detail]?>
        </div>
        </td>
        
     </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        จำนวนสินค้าคงคลัง
        </div>
        <div id="dev_check">
         <?=$rs[product_amount]?>
        </div>
    	</td>
     </tr>
    <tr>
        <td>
        <div id="dev_picturetext2">
        วันที่ อับเดตล่าสุด
        </div>
        <div id="dev_check">
         <?=$rs[product_date]?>
        </div>
        </td>
       
    </tr>
</table>

<? 
}else{

?>
<table cellpadding="0" cellspacing="0" width="100%">

	<tr>
    	<td>
        <div id="dev_picturetext">
        ลำดับ
        </div>
        </td>
        <td>
        <div id="dev_picturetext">
        ชื่อผู้สั่งซื้อ
        </div>
        </td>
        <td>
        <div id="dev_picturetext">
        ราคารวม
        </div>
        </td>
        <td>
        <div id="dev_picturetext">
        สถานะการชำระเงิน
        </div>
        </td>
        <td>
        <div id="dev_picturetext">
        วันที่สั่งซื้อ
        </div>
        </td>
        
        <td>
        <div id="dev_picturetext">
        ใบสั่งซื้อเลขที่
        </div>
        </td>
       
        <td>
        <div id="dev_picturetext">
        <center>
        จัดการ
        </center>
        </div>
        </td>
        
    </tr>
    <?
	
    $strSQL="select * from customer,cus_order where customer.cus_id=cus_order.cus_id";
	$result=mysql_query($strSQL);
	$num=mysql_num_rows($result);
	
	if(!$result){
		echo"error".mysql_query();
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
        <div id="dev_picturelink">
        <a href="product_check_order.php?action=detail&cus_id=<?=$rs[cus_id]?>&TB_iframe=true&height=550&width=700" rel="sexylightbox">

        <img src="images/announcement.gif" border="0" />
        <?
		if(strlen($rs[cus_fullname])>15){
			$cus_fullname=mb_substr($rs[cus_fullname],0,15,"UTF-8")."...";
		echo"$cus_fullname";
		}else{
		echo $rs[cus_fullname];
        }
		?>
        </a>
        </div>
        </td>
        <td>
        <?=$rs[order_tatal]?>
        </td>
        <td>
        <div id="dev_picturelink">
        <a href="product_check_status.php?order_status=<?=$rs[order_status]?>&order_id=<?=$rs[order_id]?>&TB_iframe=true&height=220&width=350"  rel="sexylightbox">
        <img src="images/knowledgebase.gif" border="0" />
        <?=$rs[order_status]?>
        </a>
        </div>
        </td>
        <td>
        <?=$rs[order_date]?>
        </td>
        
        <td>
        <center>
        <?=$rs[order_id]?>
        </center>
        </td>
        
        <td>
        <center>
        <div id="dev_picturelink">
        <a href="product_check_order.php?action=detail_product&order_id=<?=$rs[order_id]?>&TB_iframe=true&height=550&width=700" rel="sexylightbox">
        <img src="images/announcement.gif" border="0" />
        ดูข้อมูลสินค้า 
        </a>
        <a href="product_check_order_action.php?action=del&order_id=<?=$rs[order_id]?>">
       <img src="images/b_drop.png" border="0" />
       ลบ
       </a>
       </div>
       </center>
        </td>
    </tr>
	<? 
	$i++;
	}//while
}//if
	?>
 <?
}
 ?>
</table>
</body>
</html>