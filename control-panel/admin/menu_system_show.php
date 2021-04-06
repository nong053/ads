<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    	<tr>
        	
            <td width="11%">
             <div id="devtext_name">ลำดับ.  
            </div>       
            </td>
            <td width="24%">
             <div id="devtext_name">ชื่อเมนู</div>        
            </td>
            <td width="50%">
             <div id="devtext_name">รายละเอียด</div>        
            </td>
            <td width="15%">
             <div id="devtext_name">จัดการ</div>
            </td>
        </tr>
<? 
include("../config.inc.php");
$action_menu=$_GET['action_menu'];
if($action_menu=="edit"){
$menu_id=$_GET['menu_id'];
$strSQL="select * from menu where menu_id=$menu_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$menu_detail_edit=$rs[menu_detail];
$menu_name_edit=$rs[menu_name];
$menu_link_edit=$rs[menu_link];
$menu_id=$rs[menu_id];
$action_menu="edit";
}else{
	$action_menu="add";
}
$strSQL="select * from main_menu";
$result=mysql_query($strSQL);
$i=1;
while($rs=mysql_fetch_array($result)){
$menu_detail=$rs[main_menu_detail];
$menu_name=$rs[main_menu_name];
$menu_del_id=$rs[main_menu_id];
$menu_link=$rs[main_menu_link];
$action_menu_del="del";
?>	
<tr>
	<td>
    <?=$i?>
    </td>
    <td>
 
     <?
        if(strlen($menu_name)>30){
		$menu_name=mb_substr($menu_name,0,30,"UTF-8")."...";
		}else{
		$menu_name=$menu_name;
		}
		echo"$menu_name";
		?>
    </td>
    <td>
    
   
    <?
	
	if($menu_link==""){
        if(strlen($menu_detail)>30){
		$menu_detail=mb_substr($menu_detail,0,30,"UTF-8")."...";
		}else{
		$menu_detail=$menu_detail;
		}
		echo"$menu_detail";
	}else{
	echo"ลิงไปที่เว็บไซต์ $menu_link";
	}
	?>
    </td>
    <td>
    <a href="menu_process.php
?menu_del_id=<?=$menu_del_id?>&action_menu_del=<?=$action_menu_del?>">
    <img src="../images_system/b_drop.png" border="0" />
    </a>
    &nbsp;
    <a href="index.php?page=menu&action_menu=edit&menu_id=<?=$menu_del_id?>">
    <img src="../images_system/b_edit.png"  border="0"/>
    </a>
    </td>
</tr>
<?
$i++;
}
?>
</table>
<br style="clear:both" />
</body>
</html>