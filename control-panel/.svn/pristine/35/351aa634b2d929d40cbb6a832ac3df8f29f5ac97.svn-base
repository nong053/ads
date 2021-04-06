<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- 
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>CKE-->
<!-- CKE-->
<style>

</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
$action=$_GET['action'];
if($action=="edit"){
$horoyear_name_id=$_GET['horoyear_name_id'];
//echo"horoyear_name_id$horoyear_name_id";
$strSQL="select * from horoyear where horoyear_id='$horoyear_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);


$horoyear_name=$rs[horoyear_name];
$horoyear_name_id=$rs[horoyear_name_id];
$horoyear_work=$rs[horoyear_work];
$horoyear_money=$rs[horoyear_money];
$horoyear_love=$rs[horoyear_love];
$horoyear_around=$rs[horoyear_around];
$horoyear_dothing=$rs[horoyear_dothing];
$horoyear_family=$rs[horoyear_family];
$horoyear_other=$rs[horoyear_other];

echo"<b>จัดการข้อมูลดวงปี $horoyear_name</b>";
?>
<form action="horoscopeyear_edit_action.php" method="post">

<table>
	<tr>
    	<td>การงาน
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoyear_work" name="horoyear_work" rows="10" ><?=$horoyear_work?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoyear_work',{

          
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
    	<td>การเงิน
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoyear_money" name="horoyear_money" rows="10" ><?=$horoyear_money?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoyear_money',{

          
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
    	<td>ความรัก
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoyear_love" name="horoyear_love" rows="10" ><?=$horoyear_love?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoyear_love',{

          
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
    	<td>คนรอบข้าง
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoyear_around" name="horoyear_around" rows="10" ><?=$horoyear_around?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoyear_around',{

          
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
    	<td>สิ่งที่ควรทำ
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoyear_dothing" name="horoyear_dothing" rows="10" ><?=$horoyear_dothing?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoyear_dothing',{

          
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
    	<td>เรื่องครอบครัว
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoyear_family" name="horoyear_family" rows="10" ><?=$horoyear_family?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoyear_family',{

          
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
    	<td>อื่น ๆ
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoyear_other" name="horoyear_other" rows="10" ><?=$horoyear_other?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoyear_other',{

          
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
        <input type="submit" value="submit" />
        <input type="reset" value="clear" />
        <input type="hidden" name="horoyear_name_id" value="<?=$horoyear_name_id?>" />
        </td>
    </tr>
</table>
</form>

<? 
}else{ //action edit
?>
<table>
	<tr>
    	<td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=1">
        <img src="images/U_HITd001.jpg" border="0" />
        </a>
      </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=2">
      <img  src="images/U_USI002.png"  border="0" />
        </a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=3">
        <img src="images/t0033.png"  border="0" />
    	</a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=4">
      <img src="images/t003.png" border="0" />
        </a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=5">
      <img src="images/U_TAT003.png"  border="0"/>
        </a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=6">
        <img src="images/U_HEB003.png"  border="0"/>
        </a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=7">
        <img src="images/U_UMA003.png"  border="0"/>
      	</a>
        </td>
    </tr>
    <tr>
    	<td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=8">
        <img src="images/U_HIT001.png"  border="0"/>
        </a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=9">
        <img src="images/U_HEB003y.png"  border="0"/>
        </a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=10">
        <img src="images/U_UMAt003.png" border="0" />
        </a>
        </td>
        <td>
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=11">
        <img src="images/U_UMAddt003.png"  border="0"/>
        </a>
        </td>
        <td>
        
        <a href="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=12">
        <img src="images/U_HIkk001.png"  border="0"/>
      	</a>
        </td>
    </tr>
</table>
<?
} //if edit
?>
</body>
</html>