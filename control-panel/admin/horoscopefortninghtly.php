<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<!-- pic up date-->
<script type="text/javascript" src="../sum_js/date.js"></script>
<link type="text/css" href="../sum_js/date.css" rel="stylesheet" type="text/css" />
<!-- pic up date-->
<body>


<?
$get=$_GET['get'];
if($get){

$horofortninghtly_name_id=$_GET['horofortninghtly_name_id'];
}else{
	
$horofortninghtly_name_id=$_POST['horofortninghtly_name_id'];


}
if($action=="edit"){
//$horofortninghtly_name_id=$_POST['horofortninghtly_name_id'];

echo"horofortninghtly_name_id$horofortninghtly_name_id";
//echo"horofortninghtly_name_id$horofortninghtly_name_id";
$strSQL="select * from horofortninghtly where horofortninghtly_name_id='$horofortninghtly_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);


$horofortninghtly_name=$rs[horofortninghtly_name];
$horofortninghtly_name_id=$rs[horofortninghtly_name_id];
$horofortninghtly_work=$rs[horofortninghtly_work];
$horofortninghtly_money=$rs[horofortninghtly_money];
$horofortninghtly_love=$rs[horofortninghtly_love];
$horofortninghtly_around=$rs[horofortninghtly_around];
$horofortninghtly_dothing=$rs[horofortninghtly_dothing];
$horofortninghtly_family=$rs[horofortninghtly_family];
$horofortninghtly_other=$rs[horofortninghtly_other];
$horofortninghtly_bigen_date=$rs[horofortninghtly_bigen_date];
$horofortninghtly_end_date=$rs[horofortninghtly_end_date];



$strSQL="select * from horoyear where horoyear_name_id='$horoyear_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$horoyear_name=$rs[horoyear_name];
echo"<b>จัดการข้อมูลดวง $horofortninghtly_name</b><br>";
echo"<b>$horoyear_name</b>";
?>
<form action="horoscopefortninghtly_edit_action.php" method="post">

<table>
	<tr>
    	<td>
        <font face="MS Sans Serif">
<!-- ข้อควรระวัง : ชื่อของ Input จะต้องมี name เป็นค่าเดียวกับที่อยู่ในส่วน <a href=...> ด้วยนะครับ ดูตัวอย่างการใช้
ด้านล่าง สังเกตตรงคำว่า date นะ -->
</font><input name="horofortninghtly_bigen_date" size="20" value="<?=$horofortninghtly_bigen_date?>"> 
<a href="javascript:displayDatePicker('horofortninghtly_bigen_date')">
<img border="0" src="../images_system/formcal.gif" width="16" height="16"></a>
        
        <font face="MS Sans Serif">
<!-- ข้อควรระวัง : ชื่อของ Input จะต้องมี name เป็นค่าเดียวกับที่อยู่ในส่วน <a href=...> ด้วยนะครับ ดูตัวอย่างการใช้
ด้านล่าง สังเกตตรงคำว่า date นะ -->
</font><input name="horofortninghtly_end_date" size="20" value="<?=$horofortninghtly_end_date?>"> 
<a href="javascript:displayDatePicker('horofortninghtly_end_date')">
<img border="0" src="../images_system/formcal.gif" width="16" height="16"></a>
        </td>
    </tr>
	<tr>
    	<td>การงาน
        </td>
        
    </tr>
    <tr>
    	<td>
        <!--CKEditor-->
    <textarea cols="80" id="horofortninghtly_work" name="horofortninghtly_work" rows="10" ><?=$horofortninghtly_work?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horofortninghtly_work',{

          
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
    <textarea cols="80" id="horofortninghtly_money" name="horofortninghtly_money" rows="10" ><?=$horofortninghtly_money?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horofortninghtly_money',{

          
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
    <textarea cols="80" id="horofortninghtly_love" name="horofortninghtly_love" rows="10" ><?=$horofortninghtly_love?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horofortninghtly_love',{

          
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
    <textarea cols="80" id="horofortninghtly_around" name="horofortninghtly_around" rows="10" ><?=$horofortninghtly_around?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horofortninghtly_around',{

          
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
    <textarea cols="80" id="horofortninghtly_dothing" name="horofortninghtly_dothing" rows="10" ><?=$horofortninghtly_dothing?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horofortninghtly_dothing',{

          
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
    <textarea cols="80" id="horofortninghtly_family" name="horofortninghtly_family" rows="10" ><?=$horofortninghtly_family?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horofortninghtly_family',{

          
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
    <textarea cols="80" id="horofortninghtly_other" name="horofortninghtly_other" rows="10" ><?=$horofortninghtly_other?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horofortninghtly_other',{

          
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
        <input type="hidden" name="horofortninghtly_name_id" value="<?=$horofortninghtly_name_id?>" />
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
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post"> 
        
          
       <input type="hidden" name="horofortninghtly_name_id" value="1" />
        <input type="submit" style="background-image:url(images/1214012207.jpg); width:100px; height:75px;" value=""/><br>
        1-15มกราคม
	</form>
      </td>
      <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="2" />
        <input type="submit" style="background-image:url(images/1214012207.jpg); width:100px; height:75px;" value=""/><br>
        16-31มกราคม
	</form>
      </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="3" />
        <input type="submit" style="background-image:url(images/1214012225.jpg); width:100px; height:75px;" value=""/><br>
        1-15กุมภาพันธ์
	</form>
        
     
      </td>
        <td>
       <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="4" />
        <input type="submit" style="background-image:url(images/1214012225.jpg); width:100px; height:75px;" value=""/><br>
       16-29กุมภาพันธ์
	</form>   
      
      </td>
       
       
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="5" />
        <input type="submit" style="background-image:url(images/1214012241.jpg); width:100px; height:75px;" value=""/><br>
       1-15มีนาคม
	</form>  
        
        
    </td>
    <td>
        
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="6" />
        <input type="submit" style="background-image:url(images/1214012241.jpg); width:100px; height:75px;" value=""/><br>
       16-31มีนาคม
	</form>  
    </td>
   </tr>
   <tr> 
    
        <td>
      
      <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="7" />
        <input type="submit" style="background-image:url(images/re_1214012053.jpg); width:100px; height:75px;" value=""/><br>
       1-15เมษายน
	</form> 
      
      </td>
      <td>
      
      <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="8" />
        <input type="submit" style="background-image:url(images/re_1214012053.jpg); width:100px; height:75px;" value=""/><br>
       16-30เมษายน
	</form> 
      
      
      </td>
      
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="9" />
        <input type="submit" style="background-image:url(images/re_1214012071.jpg); width:100px; height:75px;" value=""/><br>
       1-15พฤษภา่คม
	</form>
      
      
      </td>
      <td>
    
      
      <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="10" />
        <input type="submit" style="background-image:url(images/re_1214012071.jpg); width:100px; height:75px;" value=""/><br>
       16-31พฤษภา่คม
	</form>
      </td>
      
      
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="11" />
        <input type="submit" style="background-image:url(images/re_1214012088.jpg); width:100px; height:75px;" value=""/><br>
       1-15มิถุนายน
	</form>
       
        
        </td>
        <td>
         <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="12" />
        <input type="submit" style="background-image:url(images/re_1214012088.jpg); width:100px; height:75px;" value=""/><br>
       16-30มิถุนายน
	</form>
       
        
        </td>
        
      </tr>
      <tr>
        <td>
       
        
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="13" />
        <input type="submit" style="background-image:url(images/re_1214012103.jpg); width:100px; height:75px;" value=""/><br>
       1-15กรกฎาคม
		</form>
        
        </td>
        
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="14" />
        <input type="submit" style="background-image:url(images/re_1214012103.jpg); width:100px; height:75px;" value=""/><br>
        16-31กรกฎาคม
		</form>
        
        </td>
      
   
    	<td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="15" />
        <input type="submit" style="background-image:url(images/re_1214012119.jpg); width:100px; height:75px;" value=""/><br>
        1-15สิงหาคม
		</form>
        
        </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="16" />
        <input type="submit" style="background-image:url(images/re_1214012119.jpg); width:100px; height:75px;" value=""/><br>
        16-31สิงหาคม
		</form>
        </td>
        
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="17" />
        <input type="submit" style="background-image:url(images/1214012134.jpg); width:100px; height:75px;" value=""/><br>
        1-15กันยายน
		</form>
        
        
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="18" />
        <input type="submit" style="background-image:url(images/1214012134.jpg); width:100px; height:75px;" value=""/><br>
        16-30กันยายน
		</form>
       
        </td>
        
        
      </tr>
      <tr>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="19" />
        <input type="submit" style="background-image:url(images/1214012155.jpg); width:100px; height:75px;" value=""/><br>
        1-15ตุลาคม
		</form>
        
        
       
        </td>
         <td>
         
         
         <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="20" />
        <input type="submit" style="background-image:url(images/1214012155.jpg); width:100px; height:75px;" value=""/><br>
        16-31ตุลาคม
		</form>
       
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="21" />
        <input type="submit" style="background-image:url(images/1214012171.jpg); width:100px; height:75px;" value=""/><br>
        1-15พฤศจิกายน
		</form>
        
        
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="22" />
        <input type="submit" style="background-image:url(images/1214012171.jpg); width:100px; height:75px;" value=""/><br>
        16-30พฤศจิกายน
		</form>
        
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="23" />
        <input type="submit" style="background-image:url(images/1214012187.jpg); width:100px; height:75px;" value=""/><br>
        1-15ธันวาคม
		</form>
        
        
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit" method="post">   
       <input type="hidden" name="horofortninghtly_name_id" value="24" />
        <input type="submit" style="background-image:url(images/1214012187.jpg); width:100px; height:75px;" value=""/><br>
        16-31ธันวาคม
		</form>
        
        </td>
      
    </tr>
</table>
<?
}
?>
</body>
</html>