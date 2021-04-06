<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#devtext_name{
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#dev_text{
font-size:16px; 
font-weight:bold; 
color:#FFF; 
padding:5px; 
background-color:#333;
}

#devtext_name{
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
//$new_hotel=$_GET['new_hotel'];รับจาก action_hotel
$id_hotel=$_GET['id_hotel'];//รับจาก action_hotel
$edit_pic_hotel=$_GET['edit_pic_hotel'];

if(!$id_hotel){
?>
<!--<div id="dev_text" style="font-size:18px; font-weight:bold; color:#FFF; padding:5px; background-color:#333;">
BIG BANNER 800 X 400 px
</div>-->
	
	<table cellpadding="0" cellspacing="0" width="100%">
    	<tr>
        	<td width="10%">
            <div id="devtext_name">
            <center>
            ลำดับ
            </center>
            </div>
            </td>
            <td width="50%">
            <div id="devtext_name">
            ชื่อโรงแรม
            </div>
            </td>
            <td width="21%">
            <div id="devtext_name">
            <center>
            จัดการรูปภาพ
            </center>
            </div>
            </td>
        </tr>
        <?
		$strSQL="select * from hotel_add ";
		$result=mysql_query($strSQL);
		if(!$result){
			echo"error".mysql_error();
		}else{
			$i=1;
			while($rs=mysql_fetch_array($result)){
				$name_hotel=$rs[name_hotel];
				$id_hotel=$rs[id_hotel];
		
		?>
        <tr>
        	<td>
            <center>
            <?=$i?>
            </center>
            </td>
            <td>
           	<?=$name_hotel?>
            </td>
            <td>
            <center>
            <!--
            <a href="index.php?page=hotel&select_page=add_picfile&id_hotel=<?=$id_hotel?>">
            เพิ่ม
            </a>
            &nbsp;-->
            
            
            <a href="index.php?page=hotel_system&select_page=hotel_add_pic&id_hotel=<?=$id_hotel?>&edit_pic_hotel=edit_pic_hotel">
            <img src="../images_system/b_insrow.png" border="0" />
            </a>
            &nbsp;
            <a href="action_hotel.php?id_hotel=<?=$id_hotel?>&action=del_dir_pic&name_hotel=<?=$name_hotel?>">
            <img src="../images_system/b_drop.png" border="0" />
            </a>
            </center>
            </td>
        </tr>
        <?
			$i++;
			}//while
		
  	
	}//if result
	?>
    </table>
    

    
    
<?
}else{// new hotel come


	$strSQL_namehotel="select * from hotel_add where id_hotel='$id_hotel'";
	$result_namehotel=mysql_query($strSQL_namehotel);
	if(!$result_namehotel){
	echo"error".mysql_error();
	}
	$rs_namehotel=mysql_fetch_array($result_namehotel);
	$namehotel=$rs_namehotel[name_hotel];
	

if($hotel_edit_pic){
$strSQL="select * from hotel_pic where id_hotel='$id_hotel'";
$result=mysql_query($strSQL);

	if(!$result){
		echo"error".mysql_error();
	}else{
		?>
        <table width="100%" cellpadding="0" cellspacing="0">
        	<tr>
            	
           	 	<td width="20%">
                <div id="devtext_name">
                <center>
             	ลำดับ
                </center>
                </div>
             	</td>
             	<td width="69%">
                <div id="devtext_name">
             	รูปทัวร์
                </div>
             	</td>
                <td width="11%">
                <div id="devtext_name">
             	จัดการ
                </div>
             	</td>
            </tr>
           	
		
		<?
		$i=1;
		while($rs=mysql_fetch_array($result)){
		$name_pic_hotel=$rs[name_pic_hotel];
		$id_pic_hotel=$rs[id_pic_hotel];
		
		?>
            
			<tr>
            	<td>
                <center>
                <?=$i?>
                </center>
            	</td>
            	<td>
                <img src="../mypic_hotel/<?=$id_hotel?>/<?=$name_pic_hotel?>" width="100"/>
                
                </td>
                <td>
                <center>
                <a href="action_hotel.php?id_hotel=<?=$id_hotel?>&id_pic_hotel=<?=$id_pic_hotel?>&action=del_pic&name_pic_hotel=<?=$name_pic_hotel?>">
               <img src="../images_system/b_drop.png" border="0" />
                </a>
                </center>
                </td>
            </tr>
            
		<?
        $i++;
		}
	?>
    </table>
    <?
	}

$text_title="กำลังแก้ไขรูปภาพ";
}else{
$text_title="กำลังเพิ่มรูปภาพ";
}
?>
<br style="clear:both" />
<div id="devtext_name">
<?=$text_title?>:<?=$namehotel?>
</div>
<form action="action_hotel.php" method="post" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        รูปภาพ1
        </td>
        <td>
       <input type="file" name="picfile[]" />
        </td>
    </tr>
    <tr>
    	<td>
        รูปภาพ2
        </td>
        <td>
       <input type="file" name="picfile[]" />
        </td>
    </tr>
    <tr>
    	<td>
        รูปภาพ3
        </td>
        <td>
       <input type="file" name="picfile[]" />
        </td>
    </tr>
    <tr>
    	<td>
        รูปภาพ4
        </td>
        <td>
       <input type="file" name="picfile[]" />
        </td>
    </tr>
    <tr>
    	<td>
        
        </td>
        <td>
        <input type="hidden" name="id_hotel" value="<?=$id_hotel?>" />
        <input type="hidden" name="action" value="add_picfile" />
       <input type="submit" name="add_picfile" value="บันทึกรูปภาพ" style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;" />
        </td>
    </tr>
</table>
</form>
<?
}
?>
</body>
</html>