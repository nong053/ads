<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- pic up date-->
<script type="text/javascript" src="../sum_js/date.js"></script>
<link type="text/css" href="../sum_js/date.css" rel="stylesheet" type="text/css" />
<!-- pic up date-->
<!-- 
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>CKE-->
<!-- CKE-->
</head>

<body>
<?
$action=$_GET['action'];

$get=$_GET['get'];
if($get){
$horoyear_name_id=$_GET['horoyear_name_id'];
$horomonth_name_id=$_GET['horomonth_name_id'];
}else{
	
$horoyear_name_id=$_POST['horoyear_name_id'];
$horomonth_name_id=$_POST['month'];

}
//echo"horoyear_name_id$horoyear_name_id<br>";
//echo"horomonth_name_id$horomonth_name_id<br>";

if($action=="edit"){

//echo"horomonth_name_id$horomonth_name_id";
$strSQL="select * from horomonth where horoyear_id='$horoyear_name_id' and horomonth_name_id='$horomonth_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);


$horomonth_name=$rs[horomonth_name];
$horomonth_name_id=$rs[horomonth_name_id];
$horomonth_work=$rs[horomonth_work];
$horomonth_money=$rs[horomonth_money];
$horomonth_love=$rs[horomonth_love];
$horomonth_around=$rs[horomonth_around];
$horomonth_dothing=$rs[horomonth_dothing];
$horomonth_family=$rs[horomonth_family];
$horomonth_other=$rs[horomonth_other];
$horomonth_bigen_date=$rs[horomonth_bigen_date];
$horomonth_end_date=$rs[horomonth_end_date];



$strSQL="select * from horoyear where horoyear_name_id='$horoyear_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$horoyear_name=$rs[horoyear_name];
echo"<b>จัดการข้อมูลดวงเดือน $horomonth_name</b><br>";
echo"<b>$horoyear_name</b>";
?>
<form action="horoscopemonth_edit_action.php" method="post">

<table>
	<tr>
    	<td>
        <font face="MS Sans Serif">
<!-- ข้อควรระวัง : ชื่อของ Input จะต้องมี name เป็นค่าเดียวกับที่อยู่ในส่วน <a href=...> ด้วยนะครับ ดูตัวอย่างการใช้
ด้านล่าง สังเกตตรงคำว่า date นะ -->
</font><input name="horomonth_bigen_date" size="20" value="<?=$horomonth_bigen_date?>"> 
<a href="javascript:displayDatePicker('horomonth_bigen_date')">
<img border="0" src="../images_system/formcal.gif" width="16" height="16"></a>
        
        <font face="MS Sans Serif">
<!-- ข้อควรระวัง : ชื่อของ Input จะต้องมี name เป็นค่าเดียวกับที่อยู่ในส่วน <a href=...> ด้วยนะครับ ดูตัวอย่างการใช้
ด้านล่าง สังเกตตรงคำว่า date นะ -->
</font><input name="horomonth_end_date" size="20" value="<?=$horomonth_end_date?>"> 
<a href="javascript:displayDatePicker('horomonth_end_date')">
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
    <textarea cols="80" id="horomonth_work" name="horomonth_work" rows="10" ><?=$horomonth_work?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horomonth_work',{

          
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
    <textarea cols="80" id="horomonth_money" name="horomonth_money" rows="10" ><?=$horomonth_money?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horomonth_money',{

          
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
    <textarea cols="80" id="horomonth_love" name="horomonth_love" rows="10" ><?=$horomonth_love?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horomonth_love',{

          
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
    <textarea cols="80" id="horomonth_around" name="horomonth_around" rows="10" ><?=$horomonth_around?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horomonth_around',{

          
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
    <textarea cols="80" id="horomonth_dothing" name="horomonth_dothing" rows="10" ><?=$horomonth_dothing?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horomonth_dothing',{

          
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
    <textarea cols="80" id="horomonth_family" name="horomonth_family" rows="10" ><?=$horomonth_family?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horomonth_family',{

          
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
    <textarea cols="80" id="horomonth_other" name="horomonth_other" rows="10" ><?=$horomonth_other?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horomonth_other',{

          
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
        <input type="hidden" name="horomonth_name_id" value="<?=$horomonth_name_id?>" />
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
   
    </td>
    <td>
    
    </td>
    </tr>
</table>
<table>
	
	<tr>
    	<td>
    <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="1" />
        
        <input type="submit" style="background-image:url(images/1214012207.jpg); width:100px; height:75px;" value="" name="aa"/><br>
        มกราคม
	</form>
      </td>
        <td>
      
      
      <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="2" />
        <input type="submit" style="background-image:url(images/1214012225.jpg); width:100px; height:75px;" value=""/><br>
        กุมภาพันธ์
	</form>
      </td>
        <td>
         <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="3" />
        <input type="submit" style="background-image:url(images/1214012241.jpg); width:100px; height:75px;" value=""/><br>
        มีนาคม
	</form>
        
        
    </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="4" />
        <input type="submit" style="background-image:url(images/re_1214012053.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        เมษายน
	</form>
      
      
      </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="5" />
        <input type="submit" style="background-image:url(images/re_1214012071.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        พฤษภา่คม
	</form>
      
      
      </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="6" />
        <input type="submit" style="background-image:url(images/re_1214012088.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        มิถุนายน
	</form>
        
        
        
        </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="7" />
        <input type="submit" style="background-image:url(images/re_1214012103.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        กรกฎาคม
	</form>
       
        
        </td>
      
    </tr>
    <tr>
    	<td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="8" />
        <input type="submit" style="background-image:url(images/re_1214012119.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        สิงหาคม
	</form>
        
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="9" />
        <input type="submit" style="background-image:url(images/1214012134.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        กันยายน
	</form>
        
        </td>
        <td>
        
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="10" />
        <input type="submit" style="background-image:url(images/1214012155.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        ตุลาคม
	</form>
       
        </td>
        <td>
        
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="11" />
        <input type="submit" style="background-image:url(images/1214012171.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        พฤศจิกายน
	</form>
       
        </td>
        <td>
        
        
         <form action="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit" method="post">   
    <select name="horoyear_name_id">
    <?
	$strSQL_SE="select * from horoyear";
	$result=mysql_query($strSQL_SE);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    	<option value="<?=$i?>" style="width:70px;">
       
        <?=$rs[horoyear_name]?>
        </option>
    <?
	$i++;
	}
	?>
    </select><br>
    	<input type="hidden" name="month" value="12" />
        <input type="submit" style="background-image:url(images/1214012187.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        ธันวาคม
	</form>
       
        </td>
      
    </tr>
</table>
<?
}
?>
</body>
</html>