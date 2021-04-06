<meta http-equiv="content-type" content="text/html; chaset=utf-8" />
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
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
<style>
 #dev_picturetext{
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:14px;
	 
	 font-weight:bold;
 }
#dev_bank{
	border:#999 5px solid;
	-moz-border-radius:15px;
	-webkit-border-radius:15px;
	
	/*มุมโค้ง*/
}
#dev_title{
	border:#09C 5px solid;
	background-color:#09F;
	-moz-border-radius:5px;
	-webkit-border-radius:15px;
	padding:5px;
	color:#FFF;
}
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
</style>
<?
$product_payment_bank=$_GET['product_payment_bank'];
//echo"product_payment_bank$product_payment_bank";
if($product_payment_bank=="product_payment_bank"){	
?>
	<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="13%">
        <div id="dev_picturetext">
        <center>
        ลำดับที่
        </center>
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
        <center>
        จัดการ
        </center>
        </div>
        </td>
    </tr>
    <?
	include_once("../config.inc.php");
	$strSQL="select * from product_payment_bank";
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
        <?=$rs[payment_bank_name]?>
        </td>
        <td>
        <?=$rs[payment_bank_number]?>
        </td>
        <td>
        <?=$rs[payment_bank_ฺฺbranch]?>
        </td>
        <td>
        <div id="dev_picturelink">
        <center>
        <a onClick="return confirm('คุณต้องการลบข้อมูลธนาคารนี้ ?');" href="product_payment_bank_action.php?action=del&payment_bank_id=<?=$rs[payment_bank_id]?>">
        <img src="images/b_drop.png"  border="0"/>
        ลบ
        </a>
        
        <a href="index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_bank=product_payment_bank&payment_bank_id=<?=$rs[payment_bank_id]?>&action=edit">
        <img src="images/b_edit.png" border="0" />
        แก้ไข
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
$action=$_GET['action'];
if($action=="edit"){
	$payment_bank_id=$_GET['payment_bank_id'];
	echo"payment_bank_id$payment_bank_id";
	$strSQL="select * from product_payment_bank where payment_bank_id='$payment_bank_id'";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);
	//echo"hreeeeeeeee e3dit";
	$action="edit";
	$payment_bank_id=$rs['payment_bank_id'];
	$payment_bank_name=$rs['payment_bank_name'];
	//echo"payment_bank_name$payment_bank_name";
	$payment_bank_ฺฺbranch=$rs['payment_bank_ฺฺbranch'];
	$payment_bank_number=$rs['payment_bank_number'];
	$payment_bank_ฺฺother=$rs['payment_bank_ฺฺother'];
	$submit="แก้ไขข้อมูลธนาคาร";
	$action="edit";
}else{
	$action="add";
	$payment_bank_name="";
	$payment_bank_ฺฺbranch="";
	$payment_bank_number="";
	$payment_bank_other="";
	$submit="เพิ่มรายชื่อธนาคาร";
	$action="add";
	}
?>
<br style="clear:both" />
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
        <textarea name="payment_bank_other"><?=$payment_bank_ฺฺother?></textarea>
        </td>
    </tr>
    	<td>
        </td>
    	<td>
        <input type="hidden" name="action" value="<?=$action?>" />
        <input type="submit" value="<?=$submit?>" />
        <input type="reset" value="Clear" />
        <?
		if($action=="edit"){
			?>
         <input type="hidden" name="payment_bank_id" value="<?=$payment_bank_id?>" />
            <input type="button" onclick="parent.location='index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_bank=product_payment_bank'" value="กลับไปเพิ่มข้อมูลธนาคาร" />
            <? 
		}
		?>
        
        </td>
    </tr>
</table>
</form>
<?
}else{
?>
<br>
<div id="dev_title">
<b> วิธีการชำระเงิน</b>
</div>
<br>
<div id="dev_bank">

<table>

	<tr>
    	<td>
        <div id="dev_picturelink">
        <a href="index.php?page=ecommerce_system&select_ecommerce=product_payment_methods&product_payment_bank=product_payment_bank">
        <img src="images/Stocks_alt.png" border="0" /><br>
        เพิ่มข้อมูลธนาคาร
        </a>
        </div>
        </td>
        <td>
        <img src="images/BeejiveIM_alt2.png" /><br>
        ชำระเงินผ่านธนาณัติ
        </td>
        <td>
        <img src="images/App_Store.png" /><br>
        ชำระเงินผ่านบัตรเครดิต
        </td>
    	<td>
        <img src="images/Camera.png" /><br>
        ชำระเงินตามที่นัดหมาย
        </td>
      	
    </tr>
</table>
</div>
<form method="post" action="product_payment_methods_edit.php">
<table>
<tr>
	<td>
    <div id="dev_title">
   รายละเอียดเพิ่มเติม
   </div>
   <br>
    </td>
</tr>
<?
include_once("../config.inc.php");
$strSQL="select * from product_payment_methods";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$product_payment_methods_detail=$rs[product_payment_methods_detail];
?>
<tr>
	<td>
<!-- CKE-->
 <!--CKEditor-->
    <textarea cols="80" id="product_payment_methods_detail" name="product_payment_methods_detail" rows="10" ><?=$product_payment_methods_detail?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'product_payment_methods_detail',{

          
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            } );
        //]]>
    </script>
    <!--CKEditor-->
    </td>
  </tr>
  <tr>
  	<td>
    <input type="submit" value="Submit"  />
    
    </td>
  </tr>
</table>
</form>
<?
} //if action
?>