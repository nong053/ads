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
$horozodiac_name_id=$_GET['horozodiac_name_id'];
}else{
	
$horoyear_name_id=$_POST['horoyear_name_id'];
//echo"horoyear_name_id$horoyear_name_id<br>";
$horozodiac_name_id=$_POST['horozodiac_name_id'];
//echo"horozodiac_name_id$horozodiac_name_id<br>";

}
//echo"horoyear_name_id$horoyear_name_id<br>";
//echo"horozodiac_name_id$horozodiac_name_id<br>";

if($action=="edit"){

//echo"horozodiac_name_id$horozodiac_name_id";
$strSQL="select * from horozodiac where horoyear_id='$horoyear_name_id' and horozodiac_name_id='$horozodiac_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);


$horozodiac_name=$rs[horozodiac_name];
$horozodiac_name_id=$rs[horozodiac_name_id];
$horozodiac_work=$rs[horozodiac_work];
$horozodiac_money=$rs[horozodiac_money];
$horozodiac_love=$rs[horozodiac_love];
$horozodiac_around=$rs[horozodiac_around];
$horozodiac_dothing=$rs[horozodiac_dothing];
$horozodiac_family=$rs[horozodiac_family];
$horozodiac_other=$rs[horozodiac_other];
$horozodiac_bigen_date=$rs[horozodiac_bigen_date];
$horozodiac_end_date=$rs[horozodiac_end_date];



$strSQL="select * from horoyear where horoyear_name_id='$horoyear_name_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$horoyear_name=$rs[horoyear_name];
echo"<b>จัดการข้อมูลราศี $horozodiac_name</b><br>";
echo"<b>$horoyear_name</b>";
?>
<form action="horoscopezodiac_edit_action.php" method="post">

<table>
	<tr>
    	<td>
        <font face="MS Sans Serif">
<!-- ข้อควรระวัง : ชื่อของ Input จะต้องมี name เป็นค่าเดียวกับที่อยู่ในส่วน <a href=...> ด้วยนะครับ ดูตัวอย่างการใช้
ด้านล่าง สังเกตตรงคำว่า date นะ -->
<?
$strSQL="select * from horoyear where horoyear_name_id='$horoyear_name_id'";
$result=mysql_query($strSQL);
?>
</font><input name="horozodiac_bigen_date" size="20" value="<?=$horozodiac_bigen_date?>"> 
<a href="javascript:displayDatePicker('horozodiac_bigen_date')">
<img border="0" src="../images_system/formcal.gif" width="16" height="16"></a>
        
        <font face="MS Sans Serif">
<!-- ข้อควรระวัง : ชื่อของ Input จะต้องมี name เป็นค่าเดียวกับที่อยู่ในส่วน <a href=...> ด้วยนะครับ ดูตัวอย่างการใช้
ด้านล่าง สังเกตตรงคำว่า date นะ -->
</font><input name="horozodiac_end_date" size="20" value="<?=$horozodiac_end_date?>"> 
<a href="javascript:displayDatePicker('horozodiac_end_date')">
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
    <textarea cols="80" id="horozodiac_work" name="horozodiac_work" rows="10" ><?=$horozodiac_work?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horozodiac_work',{

          
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
    <textarea cols="80" id="horozodiac_money" name="horozodiac_money" rows="10" ><?=$horozodiac_money?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horozodiac_money',{

          
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
    <textarea cols="80" id="horozodiac_love" name="horozodiac_love" rows="10" ><?=$horozodiac_love?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horozodiac_love',{

          
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
    <textarea cols="80" id="horozodiac_around" name="horozodiac_around" rows="10" ><?=$horozodiac_around?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horozodiac_around',{

          
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
    <textarea cols="80" id="horozodiac_dothing" name="horozodiac_dothing" rows="10" ><?=$horozodiac_dothing?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horozodiac_dothing',{

          
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
    <textarea cols="80" id="horozodiac_family" name="horozodiac_family" rows="10" ><?=$horozodiac_family?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horozodiac_family',{

          
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
    <textarea cols="80" id="horozodiac_other" name="horozodiac_other" rows="10" ><?=$horozodiac_other?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'horozodiac_other',{

          
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
        <input type="hidden" name="horozodiac_name_id" value="<?=$horozodiac_name_id?>" />
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
    <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="1" />
        
        <input type="submit" style="background-image:url(images/1214012207.jpg); width:100px; height:75px;" value="" name="aa"/><br>
        ราศีมังกร
	</form>
      </td>
        <td>
      
      
      <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="2" />
        <input type="submit" style="background-image:url(images/1214012225.jpg); width:100px; height:75px;" value=""/><br>
        ราศีกุมภ์
	</form>
      </td>
        <td>
         <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="3" />
        <input type="submit" style="background-image:url(images/1214012241.jpg); width:100px; height:75px;" value=""/><br>
        ราศีมีน
	</form>
        
        
    </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="4" />
        <input type="submit" style="background-image:url(images/re_1214012053.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        ราศีเมษ 
	</form>
      
      
      </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="5" />
        <input type="submit" style="background-image:url(images/re_1214012071.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        ราศีพฤษภ
	</form>
      
      
      </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="6" />
        <input type="submit" style="background-image:url(images/re_1214012088.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
       ราศีมิถุน
	</form>
        
        
        
        </td>
        <td>
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="7" />
    	<input type="submit" style="background-image:url(images/re_1214012103.jpg); width:100px; height:75px;" value=""/ name="nong2" />
    	<br>
        ราศีกรกฎ
	</form>
       
        
        </td>
      
    </tr>
    <tr>
    	<td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="8" />
        <input type="submit" style="background-image:url(images/re_1214012119.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        ราศีสิงห์
	</form>
        
        </td>
        <td>
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="9" />
        <input type="submit" style="background-image:url(images/1214012134.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
         ราศีกันย์
	</form>
        
        </td>
        <td>
        
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="10" />
        <input type="submit" style="background-image:url(images/1214012155.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
         ราศีตุลย์ 
	</form>
       
        </td>
        <td>
        
        
        <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="11" />
        <input type="submit" style="background-image:url(images/1214012171.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
        ราศีพิจิก
	</form>
       
        </td>
        <td>
        
        
         <form action="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit" method="post">   
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
    	<input type="hidden" name="horozodiac_name_id" value="12" />
        <input type="submit" style="background-image:url(images/1214012187.jpg); width:100px; height:75px;" value=""/ name="nong"><br>
       ราศีธนู
	</form>
       
        </td>
      
    </tr>
</table>
<?
}
?>
</body>
</html>