<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
$get=$_GET['get'];
if($get){

$horoday7_name_id=$_GET['horoday7_name_id'];
}else{
	
$horoday7_name_id=$_POST['horoday7_name_id'];


}
if($action=="edit"){
//$horoday7_name_id=$_POST['horoday7_name_id'];

//echo"horoday7_name_id$horoday7_name_id";
//echo"horoday7_name_id$horoday7_name_id";
$strSQL="select * from horoday7 where horoday7_name_id='$horoday7_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);


$horoday7_name=$rs[horoday7_name];
$horoday7_name_id=$rs[horoday7_name_id];
$horoday7_work=$rs[horoday7_work];
$horoday7_money=$rs[horoday7_money];
$horoday7_love=$rs[horoday7_love];
$horoday7_around=$rs[horoday7_around];
$horoday7_dothing=$rs[horoday7_dothing];
$horoday7_family=$rs[horoday7_family];
$horoday7_other=$rs[horoday7_other];
$horoday7_bigen_date=$rs[horoday7_bigen_date];
$horoday7_end_date=$rs[horoday7_end_date];



$strSQL="select * from horoday7 where horoday7_name_id='$horoday7_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$horoday7_name=$rs[horoday7_name];
echo"<b>จัดการข้อมูลดวง $horoday7_name</b><br>";
?>
<br style="clear:both" />
<form action="horoscopeday7_edit_action.php" method="post">

<table>
	
	<tr>
    	<td>
        การงาน
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoday7_work" name="horoday7_work" rows="10" ><?=$horoday7_work?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday7_work',{

          
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
    <textarea cols="80" id="horoday7_money" name="horoday7_money" rows="10" ><?=$horoday7_money?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday7_money',{

          
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
    <textarea cols="80" id="horoday7_love" name="horoday7_love" rows="10" ><?=$horoday7_love?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday7_love',{

          
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
    <textarea cols="80" id="horoday7_around" name="horoday7_around" rows="10" ><?=$horoday7_around?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday7_around',{

          
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
    <textarea cols="80" id="horoday7_dothing" name="horoday7_dothing" rows="10" ><?=$horoday7_dothing?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday7_dothing',{

          
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
    <textarea cols="80" id="horoday7_family" name="horoday7_family" rows="10" ><?=$horoday7_family?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday7_family',{

          
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
    <textarea cols="80" id="horoday7_other" name="horoday7_other" rows="10" ><?=$horoday7_other?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday7_other',{

          
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
        <input type="hidden" name="horoday7_name_id" value="<?=$horoday7_name_id?>" />
        <input type="hidden" name="horoday7_name_id" value="<?=$horoday7_name_id?>" />
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
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday7_name_id" value="1" />
        <input type="submit" style="background-image:url(images/Calendar_7.png); width:59px; height:60px;" value=""/><br>
       
	</form>
    
        
        </td>
        <td>
         <form action="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday7_name_id" value="2" />
        <input type="submit" style="background-image:url(images/Calendar_1.png); width:59px; height:60px;" value=""/><br>
       
	</form>
        
        </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday7_name_id" value="3" />
        <input type="submit" style="background-image:url(images/Calendar_2.png); width:59px; height:60px;" value=""/><br>
       
	</form>
        
      
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday7_name_id" value="4" />
        <input type="submit" style="background-image:url(images/Calendar_3.png); width:59px; height:60px;" value=""/><br>
       
	</form>
       
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday7_name_id" value="5" />
        <input type="submit" style="background-image:url(images/Calendar_4.png); width:59px; height:60px;" value=""/><br>
       
	</form>
        
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday7_name_id" value="6" />
        <input type="submit" style="background-image:url(images/Calendar_5.png); width:59px; height:60px;" value=""/><br>
       
	</form>
       
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday7_name_id" value="7" />
        <input type="submit" style="background-image:url(images/Calendar_6.png); width:59px; height:60px;" value=""/><br>
       
	</form>
        
        </td>
    </tr>
</table>
<?
}
?>
</body>
</html>