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

$horoday30_name_id=$_GET['horoday30_name_id'];
}else{
	
$horoday30_name_id=$_POST['horoday30_name_id'];


}
if($action=="edit"){
//$horoday30_name_id=$_POST['horoday30_name_id'];

//echo"horoday30_name_id$horoday30_name_id";
//echo"horoday30_name_id$horoday30_name_id";
$strSQL="select * from horoday30 where horoday30_name_id='$horoday30_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);


$horoday30_name=$rs[horoday30_name];
$horoday30_name_id=$rs[horoday30_name_id];
$horoday30_work=$rs[horoday30_work];
$horoday30_money=$rs[horoday30_money];
$horoday30_love=$rs[horoday30_love];
$horoday30_around=$rs[horoday30_around];
$horoday30_dothing=$rs[horoday30_dothing];
$horoday30_family=$rs[horoday30_family];
$horoday30_other=$rs[horoday30_other];
$horoday30_bigen_date=$rs[horoday30_bigen_date];
$horoday30_end_date=$rs[horoday30_end_date];



$strSQL="select * from horoday30 where horoday30_name_id='$horoday30_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$horoday30_name=$rs[horoday30_name];
echo"<b>จัดการข้อมูลดวง $horoday30_name</b><br>";
?>
<br style="clear:both" />
<form action="horoscopeday30_edit_action.php" method="post">

<table>
	
	<tr>
    	<td>
        การงาน
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horoday30_work" name="horoday30_work" rows="10" ><?=$horoday30_work?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday30_work',{

          
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
    <textarea cols="80" id="horoday30_money" name="horoday30_money" rows="10" ><?=$horoday30_money?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday30_money',{

          
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
    <textarea cols="80" id="horoday30_love" name="horoday30_love" rows="10" ><?=$horoday30_love?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday30_love',{

          
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
    <textarea cols="80" id="horoday30_around" name="horoday30_around" rows="10" ><?=$horoday30_around?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday30_around',{

          
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
    <textarea cols="80" id="horoday30_dothing" name="horoday30_dothing" rows="10" ><?=$horoday30_dothing?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday30_dothing',{

          
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
    <textarea cols="80" id="horoday30_family" name="horoday30_family" rows="10" ><?=$horoday30_family?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday30_family',{

          
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
    <textarea cols="80" id="horoday30_other" name="horoday30_other" rows="10" ><?=$horoday30_other?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horoday30_other',{

          
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
        <input type="hidden" name="horoday30_name_id" value="<?=$horoday30_name_id?>" />
        <input type="hidden" name="horoday30_name_id" value="<?=$horoday30_name_id?>" />
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
 
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="1" />
        <input type="submit" style="background-image:url(images/1.jpg); width:59px; height:60px;" value=""/><br>
       
	</form>
    </td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="2" />
        <input type="submit" style="background-image:url(images/2.jpg); width:59px; height:60px;" value=""/><br>
      
	</form>
    
    </td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="3" />
        <input type="submit" style="background-image:url(images/3.jpg); width:59px; height:60px;" value=""/><br>
       
	</form>
    
    </td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="4" />
        <input type="submit" style="background-image:url(images/4.png); width:59px; height:60px;" value=""/><br>
       
	</form>
    
    </td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="5" />
        <input type="submit" style="background-image:url(images/5.png); width:59px; height:60px;" value=""/><br>
      
	</form>
  
    </td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="6" />
        <input type="submit" style="background-image:url(images/6.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="7" />
        <input type="submit" style="background-image:url(images/7.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="8" />
        <input type="submit" style="background-image:url(images/8.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="9" />
        <input type="submit" style="background-image:url(images/9.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="10" />
        <input type="submit" style="background-image:url(images/10.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="11" />
        <input type="submit" style="background-image:url(images/11.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="12" />
        <input type="submit" style="background-image:url(images/12.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
</tr>
<tr>
	<td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="13" />
        <input type="submit" style="background-image:url(images/13.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="14" />
        <input type="submit" style="background-image:url(images/14.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="15" />
        <input type="submit" style="background-image:url(images/15.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="16" />
        <input type="submit" style="background-image:url(images/16.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="17" />
        <input type="submit" style="background-image:url(images/17.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="18" />
        <input type="submit" style="background-image:url(images/18.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="19" />
        <input type="submit" style="background-image:url(images/19.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="20" />
        <input type="submit" style="background-image:url(images/20.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="21" />
        <input type="submit" style="background-image:url(images/21.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="22" />
        <input type="submit" style="background-image:url(images/22.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="23" />
        <input type="submit" style="background-image:url(images/23.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="24" />
        <input type="submit" style="background-image:url(images/24.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
</tr>
<tr>
	<td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="25" />
        <input type="submit" style="background-image:url(images/25.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="26" />
        <input type="submit" style="background-image:url(images/26.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="27" />
        <input type="submit" style="background-image:url(images/27.png); width:59px; height:60px;" value=""/><br>
      
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="28" />
        <input type="submit" style="background-image:url(images/28.png); width:59px; height:60px;" value=""/><br>
       
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="29" />
        <input type="submit" style="background-image:url(images/29.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="30" />
        <input type="submit" style="background-image:url(images/30.png); width:59px; height:60px;" value=""/><br>
       
	</form></td>
    <td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit" method="post"> 
        
          
       <input type="hidden" name="horoday30_name_id" value="31" />
        <input type="submit" style="background-image:url(images/31.png); width:59px; height:60px;" value=""/><br>
        
	</form></td>
</tr>
</table>
<?
}
?>
</body>
</html>