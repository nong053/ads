<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
class database{
	function table($table)
	{
			include("../config.inc.php");
			$strSQL="select * from $table";
			$result=mysql_query($strSQL);
			
			return $result;
		
	}
}
$db = new database();
/*
$db= new database();
$result=$db->table("main_menu");
$num=mysql_num_rows($result);
$rs=mysql_fetch_array($result);
echo "test oop".$rs[main_menu_id];
*/

$id_hotel=$_GET['id_hotel'];

if($id_hotel){
	$strSQL="select * from hotel_add where id_hotel='$id_hotel'";
	$result=mysql_query($strSQL);
	if(!$result){
	echo"error".mysql_error();
	}else{
	$rs=mysql_fetch_array($result);
		
	}
?>

<div class="show_tour">
	<div id="devtext_name">
    โรงแรม:<?=$rs[name_hotel]?>&nbsp;จังหวัด:
	<?
	$province_id=$rs[province_id];
	$result_province=$db->table("province where province_id='$province_id'");
	$rs_province=mysql_fetch_array($result_province);
	echo $rs_province[province_name];
	
	?>&nbsp;ตำแหน่งการแสดงผล
	<?
	$main_menu_id=$rs[position_id];
	/*echo"$main_menu_id";*/
    
	$result_main_menu=$db->table("main_menu where main_menu_id='$main_menu_id'");
	$rs_main_menu=mysql_fetch_array($result_main_menu);
	echo $rs_main_menu[main_menu_name];
	
	?>
    </div>

    <div id="title">
    ข้อมูลโรงแรมเื้บื้องต้น
    </div>

    <div id="title_tour">
    <?=$rs[title_hotel]?>
    </div>
    
     <div id="title">
    ข้อมูลโรงแรมแบบละเอียด
    </div>
    
    <div id="detail_promotion">
    <?=$rs[detail_hotel]?>
    </div>
    
    
    
    <div id="title">
    ค่าใช้จ่าย
    </div>
    
    <div id="bg_promotion">
    	<div id="price">
        ราคา:<?=$rs[price_hotel]?>
        </div>
        
        <div id="price_promotion">
        ราคาโปรโมชั่น:<?=$rs[promotion_hotel]?>
        
        </div>
        <br style="clear:both" />
    </div>
    
     <div id="title">
    ข้อมูลรายละเอียดของโปรโมชั่น
    </div>
    
   	<div id="detail_promotion">
    <?=$rs[detail_promotion_hotel]?>
    </div>
    
    <div id="title">
    แผนที่โรงแรม
    </div>
    
   	<div id="detail_promotion">
    <?=$rs[map_hotel]?>
    </div>
    
    
    <div id="title">
    รูปภาพ &nbsp;Update<?=$rs[update_hotel]?>
    </div>
    <div id="bg_picture">
       <?
	   $strSQL="select * from hotel_pic where id_hotel=$id_hotel";
	   $result=mysql_query($strSQL);
	   if(!$result){echo"error".mysql_error();}
	   else{
		  
		  
	   while($rs=mysql_fetch_array($result)){
			
			$name_pic_hotel=$rs['name_pic_hotel'];
			
			?>
            <div id="picture">
            
            <img src="../mypic_hotel/<?=$id_hotel?>/<?=$name_pic_hotel?>" width="150"/>
           
        	</div>
            <?
			}					   
	   }
	   ?>
    	
        
        <br style="clear:both" />
         <input type="button" onclick="parent.location='index.php?page=hotel_system&select_page=show_hotel'" value="ย้อนกลับ"  style="width:100px; height:20px; background-color:#CCC; border:#999 solid 1px;"/>
    </div>
</div>



<?
}else{
?>
<table cellpadding="0" cellspacing="0" width="100%">
    	<tr>
        	<td width="8%">
            <div id="devtext_name">
            <center>
            ลำดับ
            </center>
            </div>
            </td>
            <td width="33%">
            <div id="devtext_name">
            ชื่อโรงแรม
            </div>
            </td>
            <td width="31%">
            <div id="devtext_name">
            จังหวัด
            </div>
            </td>
            <td width="28%">
            <div id="devtext_name">
            <center>
            แสดงข้อมูลโรงแรม
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
			$db=new database();
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
           	<?
            $province_id=$rs[province_id];
			$result_province=$db->table("province where province_id=$province_id");
			$rs_province=mysql_fetch_array($result_province);
			echo $rs_province['province_name'];
			
			?>
            </td>
            <td>
           
            <a href="index.php?page=hotel_system&select_page=hotel_show&id_hotel=<?=$id_hotel?>&show_data=show_data">
            <center>
            <img src="../images_system/b_browse.png" border="0"/>รายละเอียด
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