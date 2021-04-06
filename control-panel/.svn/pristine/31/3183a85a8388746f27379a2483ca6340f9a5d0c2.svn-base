<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#dev_text{
font-size:16px; 
font-weight:bold; 
color:#FFF; 
padding:5px; 
background-color:#333;

}
#dev_text_show{
	width:auto;
	height:auto;
	background-color:#FFC;
	padding:5px;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
$id_tour=$_GET['id_tour'];
$id_book=$_GET['id_book'];

$strSQL="select * from tour_book where id_book='$id_book'";
$result=mysql_query($strSQL);
if(!$result){
echo"error".mysql_error();
}else{
$rs=mysql_fetch_array($result);
$number_book=$rs['number_book'];
	
	$strSQL2="select * from tour_add where id_tour='$id_tour'";
	$result2=mysql_query($strSQL2);
	if(!$result2){
	echo"error".mysql_error();
	}else{
	$rs2=mysql_fetch_array($result2);
	}
	
	$name_tour=$rs2['name_tour'];
	$price_tour=$rs2['price_tour'];
	$promotion_tour=$rs2['promotion_tour'];

$id_book=$rs['id_book'];
$name_book=$rs['name_book'];
$email_book=$rs['email_book'];
$address_book=$rs['address_book'];
$tel_book=$rs['tel_book'];
$fax_book=$rs['fax_book'];
$date_book=$rs['date_book'];
$other_book=$rs['other_book'];



}
if($_GET['action']=="edit"){
?>
<form method="post" action="action_order_tour.php">
<table>
	<tr>
    	<td>
        จองทัวร์
    	</td>
        <td>
       <?=$name_tour?>
    	</td>
    </tr>
    <?
	if(!$promotion_tour)
	{
	?>
    <tr>
    	<td>
        ราคา 
    	</td>
        <td>
        <?=$price_tour?>
    	</td>
    </tr>
    
    <?
	}else{
		
	?>
    <tr>
    	<td>
        ราคาโปรโมชั่น
    	</td>
        <td>
        <?=$promotion_tour?>
    	</td>
    </tr>
    <?
	}
	?>
    <tr>
    	<td>
        ชื่อ
    	</td>
        <td>
        <input type="text" name="name_book" value="<?=$name_book?>"/>
    	</td>
    </tr>
    <tr>
    	<td>
        อีเมลล์
    	</td>
        <td>
        <input type="text" name="email_book" value="<?=$email_book?>" />
    	</td>
    </tr>
    <tr>
    	<td>
        ทีอยู่
    	</td>
        <td>
        <textarea name="address_book"><?=$address_book ?></textarea>
    	</td>
    </tr>
    <tr>
    	<td>
        เบอร์โทร
    	</td>
        <td>
        <input type="text" name="tel_book" value="<?=$tel_book?>" />
    	</td>
    </tr>
    <tr>
    	<td>
        เบอร์แฟก
    	</td>
        <td>
        <input type="fax_book" name="fax_book"  value="<?=$fax_book?>"/>
    	</td>
    </tr>
     <tr>
    	<td>
        วันที่จอง:
    	</td>
        <td>
        <?=$date_book?>
       
    	</td>
    </tr>
     <tr>
    	<td>
        อื่นๆ
    	</td>
        <td>
        <textarea name="other_book"><?=$other_book?></textarea>
    	</td>
    </tr>
    
     <tr>
    	<td>
       
    	</td>
        <td>
        <input type="hidden" name="action" value="edit" />
        <input type="hidden" name="id_book" value="<?=$id_book?>" />
        <input type="submit" value="แก้ไขข้อมูล" style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;" />
    	</td>
    </tr>
    
</table>
</form>
<?
}else if($_GET['action']=="show"){








?>
<form method="post" action="action_order_tour.php">
<table>
	<tr>
    	<td>
        เลขที่การจอง
    	</td>
        <td>
       <div id="dev_text_show">
       <?=$number_book?>
       </div>
    	</td>
    </tr>
	<tr>
    	<td>
        จองทัวร์
    	</td>
        <td>
       <div id="dev_text_show">
       <?=$name_tour?>
       </div>
    	</td>
    </tr>
   <?
   if(!$promotion_tour){
	   
   ?>
    <tr>
    	<td>
        ราคาทัวร์
    	</td>
        <td>
       <div id="dev_text_show">
      <?=$price_tour?>
       </div>
    	</td>
    </tr>
    <?
   }else{
	?>
    <tr>
    	<td>
        ราคาทัวร์โปรโมชั่น
    	</td>
        <td>
       <div id="dev_text_show">
      <?=$promotion_tour?>
       </div>
    	</td>
    </tr>
    <?
   }
	?>
    <tr>
    	<td>
        ชื่อ
    	</td>
        <td>
        <div id="dev_text_show">
       <?=$name_book?>
       </div>
    	</td>
    </tr>
    <tr>
    	<td>
        อีเมลล์
    	</td>
        <td>
        <div id="dev_text_show">
        <?=$email_book?>
       </div>
    	</td>
    </tr>
    <tr>
    	<td>
        ทีอยู่
    	</td>
        <td>
        <div id="dev_text_show">
        <?=$address_book?>
       </div>
    	</td>
    </tr>
    <tr>
    	<td>
        เบอร์โทร
    	</td>
        <td>
        <div id="dev_text_show">
        <?=$tel_book?>
       </div>
    	</td>
    </tr>
    <tr>
    	<td>
        เบอร์แฟก
    	</td>
        <td>
       <div id="dev_text_show">
        <?=$fax_book?>
       </div>
    	</td>
    </tr>
     <tr>
    	<td>
        วันที่จอง:
    	</td>
        <td>
        <div id="dev_text_show">
        <?=$date_book?>
       </div>
        
    	</td>
    </tr>
     <tr>
    	<td>
        อื่นๆ
    	</td>
        <td>
        <div id="dev_text_show">
        <?=$other_book?>
       </div>
    	</td>
    </tr>
    
     <tr>
    	<td>
       
    	</td>
        <td>
        
      
       <input type="button" onclick="parent.location='index.php?page=tour&select_tour=show_order_tour'" value="ย้อนกลับ"  style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;"/>
       
  
    	</td>
    </tr>
    
</table>
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
    	<td width="22%">
        <div id="dev_text">
        จองทัวร์
        </div>
        </td>
       
        <td width="20%">
        <div id="dev_text">
        ชื่อ
        </div>
        </td>
       
        <td width="21%">
        <div id="dev_text">
        เบอร์โทร
        </div>
        </td>
        <td width="11%">
        <div id="dev_text">
        ดูข้อมูล</div>
        </td>
        <td width="8%">
        <div id="dev_text">
        แก้ไข
        </div>
        </td>
         <td width="7%">
        <div id="dev_text">
        ลบ
        </div>
        </td>
    </tr>
    <?
	$strSQL="select * from tour_book,tour_add where tour_book.id_tour=tour_add.id_tour";
	$result=mysql_query($strSQL);
	if(!$result){
	echo"error".mysql_error();
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
        <?
        if(strlen($rs[name_tour])>20){
					$name_tour=mb_substr($rs[name_tour],0,30,"UTF-8")."..";
					}else{
					$name_tour=$rs[name_tour];
					}
        echo"$name_tour";
		?>
        </td>
        
        <td> 
		
         <?
        if(strlen($rs[name_book])>20){
					$name_book=mb_substr($rs[name_book],0,20,"UTF-8")."..";
					}else{
					$name_book=$rs[name_book];
					}
        echo"$name_book";
		?>
        </td>
        
        
        <td>
        <?=$rs[tel_book]?>
        </td>
        <td>
        <a href="index.php?page=tour&select_tour=show_order_tour&id_book=<?=$rs[id_book]?>&id_tour=<?=$rs[id_tour]?>&action=show">
        <center>
        <img src="../images_system/date_go.png" border="0"/>
        </center>
        </a>
        </td>
        <td>
         <a href="index.php?page=tour&select_tour=show_order_tour&id_book=<?=$rs[id_book]?>&id_tour=<?=$rs[id_tour]?>&action=edit">
        <center>
        <img src="../images_system/b_edit.png" border="0" />
        </center>
        </a>
        </td>
        <td>
        <center>
        <a href="action_order_tour.php?id_book=<?=$rs['id_book']?>&action=del">
        <img src="../images_system/b_drop.png" border="0" />
        </a>
        </center>
        </td>
    </tr>
   
	<? $i++;
	}//while
}//if
	
    ?>
</table>
<?
}//if top 
?>
</body>
</html>