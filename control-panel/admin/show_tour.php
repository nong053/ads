<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
	width:200px;
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

<div class="show_tour">
	<div id="dev_text">
    ทัวร์:<?=$rs[name_tour]?>&nbsp;วันที่เดินทาง<?=$rs[date_tour]?>&nbsp;ประเทศ:<?=$rs[country_tour]?>
    </div>
    
    
    <div id="title">
    ข้อมูลทัวร์
    </div>
    
    <div id="title_tour">
    <?=$rs[title_tour]?>
    </div>
    
     <div id="title">
    ข้อมูลทัวร์แบบละเอียด
    </div>
    
    <div id="detail_promotion">
    <?=$rs[detail_tour]?>
    </div>
    
     <div id="title">
    ข้อมูล กิจกรรม กำหนดการ
    </div>
    
    <div id="itinerary_tour">
    <?=$rs[itinerary_tour]?>
    </div>
    
    
     <div id="title">
    ค่าใช้จ่าย
    </div>
    
    <div id="bg_promotion">
    	<div id="price">
        ราคา:<?=$rs[price_tour]?>
        </div>
        
        <div id="price_promotion">
        ราคาโปรโมชั่น:<?=$rs[promotion_tour]?>
        
        </div>
        <br style="clear:both" />
    </div>
    
     <div id="title">
    ข้อมูลรายละเอียดของโปรโมชั่น
    </div>
    
   	<div id="detail_promotion">
    <?=$rs[detail_promotion_tour]?>
    </div>
    
    
     <div id="title">
    รูปภาพ &nbsp;Update<?=$rs[update_tour]?>
    </div>
    <div id="bg_picture">
       <?
	   $strSQL="select * from tour_pic where id_tour=$id_tour";
	   $result=mysql_query($strSQL);
	   if(!$result){echo"error".mysql_error();}
	   else{
		  
		  
	   while($rs=mysql_fetch_array($result)){
			
			$name_pic_tour=$rs['name_pic_tour'];
			
			?>
            <div id="picture">
            
            <img src="../mypic_tour/<?=$id_tour?>/<?=$name_pic_tour?>" width="150" height="100"/>
           
        	</div>
            <?
			}					   
	   }
	   ?>
    	
        
        <br style="clear:both" />
         <input type="button" onclick="parent.location='index.php?page=tour&select_tour=show_tour'" value="ย้อนกลับ"  style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;"/>
    </div>
</div>



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
            <td width="20%">
            <div id="dev_text">
            <center>
            โชว์ข้อมูลทัวร์
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
           
            <a href="index.php?page=tour&select_tour=show_tour&id_tour=<?=$id_tour?>&show_data=show_data">
            <center>
            <img src="../images_system/b_browse.png" border="0"/>
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