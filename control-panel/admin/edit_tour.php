<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- pic up date-->
<script type="text/javascript" src="../sum_js/date.js"></script>
<link type="text/css" href="../sum_js/date.css" rel="stylesheet" type="text/css" />
<!-- pic up date-->
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#dev_text{
font-size:16px; 
font-weight:bold; 
color:#FFF; 
padding:5px; 
background-color:#333;

}
#title{
	width:auto;
	height:20px;
	border:#CCC 1px dotted;
	background-color:#FFC;
	font-weight:bold;
	padding:3px;
	margin-top:5px;
}
.show_tour{
	width:auto;
	height:auto;
	
}
.show_tour #name_tour{
	width:770px;
	height:auto;
	border:#CCC 1px solid;
	padding:5px;
	margin:5px;
}
.show_tour #title_tour{
	width:768px;
	height:auto;
	border:#CCC 1px solid;
	padding:5px;
	margin-top:5px;
}
.show_tour #detail_tour{
	width:768px;
	height:auto;
	border:#CCC 1px solid;
	padding:5px;
	margin-top:5px;
}
.show_tour #itinerary_tour{
	width:768px;
	height:auto;
	border:#CCC 1px solid;
	padding:5px;
	margin-top:5px;
}
.show_tour #bg_promotion{
	width:768px;
	height:auto;
	border:#CCC 1px solid;
	padding:5px;
	margin-top:5px;
}
.show_tour #bg_promotion #price{
	
	width:200px;
	height:20px;
	border:#CCC 1px solid;
	padding:5px;
	float:left;
	}

.show_tour #bg_promotion #price_promotion{
	width:250px;
	height:20px;
	border:#CCC 1px solid;
	padding:5px;
	float:left;
	margin-left:5px;
}
.show_tour #detail_promotion{
	width:768px;
	height:auto;
	border:#CCC 1px solid;
	padding:5px;
	margin-top:5px;
}
.show_tour #bg_picture{
	width:768px;
	height:auto;
	border:#CCC 1px solid;
	padding:5px;
	margin-top:5px;
}
.show_tour #bg_picture #picture{
	width:150px;
	height:100px;
	float:left;
	border:#CCC 1px dotted;
	margin:2px;
}
</style>
</head>

<body>
<?
$id_tour=$_GET['id_tour'];

if($id_tour){
	$strSQL="select * from tour_add where id_tour='$id_tour'";
	$result=mysql_query($strSQL);
	if(!$result){
	echo"error".mysql_error();
	}else{
	$rs=mysql_fetch_array($result);
		
	}
?>

<form method="post" action="action_tour.php">
<div class="show_tour">
	<div id="dev_text">
    ทัวร์:
    <input type="text" value="<?=$rs[name_tour]?>" name="name_tour"/>
    &nbsp;&nbsp;วันที่เดินทาง
	<input name="date_tour" size="20" value="<?=$rs['date_tour']?>"> 
<a href="javascript:displayDatePicker('date_tour')">
<img border="0" src="../images_system/formcal.gif" width="16" height="16"></a>
	<br style="clear:both" />
    ปรเทศ:

     <!--ประเทศ-->
   <?
   $country_tour=$rs[country_tour];
	
	?>
    <select name="country_tour">
    
    <?
	
    $strSQL_country="select * from country_tour";
	$result_country=mysql_query($strSQL_country);
	while($rs_country=mysql_fetch_array($result_country))
	{		$country_name=$rs_country['country_name'];
			if($country_tour=="$country_name"){
				
			?>
			<option value="<?=$country_name?>" selected ><?=$country_name?></option>
            <?
			}else{
			
			?>
			<option value="<?=$country_name?>"> <?=$country_name?></option>
			<?
			}//if
     }//while
	?>
    
    </select>
    
    
    
    <!--ประเทศ-->
   
    </div>
    
    
    <div id="title">
    ข้อมูลทัวร์
    </div>
    
    <div id="title_tour">
    
    
    <!--CKEditor-->
    <textarea cols="80" id="title_tour2" name="title_tour2" rows="10" ><?=$rs[title_tour]?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'title_tour2',{

          
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
    </div>
    
     <div id="title">
    ข้อมูลทัวร์แบบละเอียด
    </div>
    
    <div id="detail_promotion">
  
     <!--CKEditor-->
    <textarea cols="80" id="detail_tour" name="detail_tour" rows="10" ><?=$rs[detail_tour]?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'detail_tour',{

          
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
    </div>
    
     <div id="title">
    ข้อมูล กิจกรรม กำหนดการ
    </div>
    
    <div id="itinerary_tour">
    
     <!--CKEditor-->
    <textarea cols="80" id="itinerary_tour2" name="itinerary_tour2" rows="10" ><?=$rs[itinerary_tour]?>
    </textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'itinerary_tour2',{

          
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
    
    </div>
    
    
     <div id="title">
    ค่าใช้จ่าย
    </div>
    
    <div id="bg_promotion">
    	<div id="price">
        ราคา:
        <input type="text" name="price_tour" value="<?=$rs[price_tour]?>" />
        </div>
        
        <div id="price_promotion">
        ราคาโปรโมชั่น:
        <input type="text" name="promotion_tour" value="<?=$rs[promotion_tour]?>" />
        
        </div>
        <br style="clear:both" />
    </div>
    
     <div id="title">
    ข้อมูลรายละเอียดของโปรโมชั่น
    </div>
    
   	<div id="detail_promotion">
   
    <textarea name="detail_promotion_tour" cols="50" rows="10"><?=$rs[detail_promotion_tour]?></textarea>
    </div>
    <? $page_select=$rs[page];
	?>
    <div id="detail_promotion">
   ให้ทัวร์นี้อยู่:
   <select name="page_select">
   <?
  
   
   
   if($page_select=="general"){
	   $selected1="selected";
   }else if($page_select=="home"){
	   
	    $selected2="selected";
   }
   ?>
   <option value="general" <?=$selected1?> >ทั่วไป</option>
   <option value="home"  <?=$selected2?> >หน้าแรก</option>
   </select>
   


    </div>
    
    
     <div id="title">
     <input type="hidden" name="action" value="edit_tour" />
     <input type="hidden" name="id_tour" value="<?=$id_tour?>" />
    <input type="submit"  value="แก้ไขข้อมูล" style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;" />
    </div>
    
</div>

</form>

<?
}else{
?>
<table cellpadding="0" cellspacing="0" width="100%">
    	<tr>
        	<td width="10%">
            <div id="dev_text">
            <center>
            ลำดับ
            </center>
            </div>
            </td>
            <td width="67%">
            <div id="dev_text">
            ทัวร์
            </div>
            </td>
            <td width="13%">
            <div id="dev_text">
            <center>
              แก้ไขทัวร์
            </center>
            </div>
            </td>
            <td width="10%">
            <div id="dev_text">
            <center>
            ลบทัวร์
            </center>
            </div>
            </td>
        </tr>
        <?
		$strSQL="select * from tour_add ";
		$result=mysql_query($strSQL);
		if(!$result){
			echo"error".mysql_error();
		}else{
			$i=1;
			while($rs=mysql_fetch_array($result)){
				$name_tour=$rs[name_tour];
				$id_tour=$rs[id_tour];
		
		?>
        <tr>
        	<td>
            <center>
            <?=$i?>
            </center>
            </td>
            <td>
           	<?=$name_tour?>
            </td>
            <td>
           
            <a href="index.php?page=tour&select_tour=edit_tour&id_tour=<?=$id_tour?>&show_data=show_data">
            <center>
            <img src="../images_system/b_browse.png" border="0"/>
            </center>
            </a>
            
            
            </td>
            <td>
            <a href="action_tour.php?id_tour=<?=$id_tour?>&action=delete_success_tour&name_tour=<?=$name_tour?>">
            <center>
            <img src="../images_system/b_drop.png" border="0" />
            </center>
            </a>
            </td>
        </tr>
        <?
			$i++;
			}//while
		
  	
	}//if result
	?>
    </table>
 <?
}//ifshow data
 ?>
</body>
</html>