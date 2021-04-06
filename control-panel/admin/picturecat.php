<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/web_cat/admin/css.css" type="text/css" rel="stylesheet"/>
<title>Untitled Document</title>
<style type="text/css">
<!--
 #dev_picturetext {
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:16px;
	 
	 font-weight:bold;
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
-->
</style>
</head>

<body>
<?php 
include("../config.inc.php");

?>

	
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			
			<tr >
				<td width="54">
                <div id="dev_picturetext">
				ลำดับ
                </div>
				</td>
				<td width="100">
                <div id="dev_picturetext">
				หมวดรูปภาพ
                </div>
                </td>
				<td width="176"> 
                <div id="dev_picturetext">
				รายละเอียดรูปภาพ
                </div>
				</td>
				<td width="130">
                <div id="dev_picturetext">
				จำนวนรูปถาพ
                </div>
				</td>
				<td width="105">
                <div id="dev_picturetext">
				จัดการรูปภาพ
                </div>
                </td>
			</tr> 
			
			
			<?php 

$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก admin
$query_admin="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin=$obj_manage_data->select_data_proc($query_admin);
$rs_admin=mysql_fetch_array($result_admin);

if(!$rs_admin){
$admin_id=0;
}else{
$admin_id=$rs_admin['admin_id'];
}
if($_SESSION['admin_status']=="3"){
$admin_id=1;
}
echo"admin_id".$admin_id;


			$strSQL="select * from picturecat where admin_id='$admin_id'";
			$result=mysql_query($strSQL);
			$i=1;
			while($rs=mysql_fetch_array($result)){
			
				$strSQL2="select * from picture where picturecat_id=$rs[picturecat_id]";
				$result2=mysql_query($strSQL2);
				$num=mysql_num_rows($result2);
			echo"<tr>";
				echo"<td>";
				echo"<center>";
				echo"<div id=\"dev_picturelink\">";
				echo $i;
				echo"</div>";
				echo"</center>";
				echo"</td>";
				echo"<td>";
				
				echo"<div id=\"dev_picturelink\">";
				echo"<a href=\"index.php?page=picture&picturecat_id=$rs[picturecat_id]&admin_id=$admin_id\">";
				?>
                <img src="images/announcement.gif" border="0"/>
                <? 
				echo $rs[picturecat_name];
				echo"</a>";
				echo"</div>";
				
				echo"</td>";
				echo"<td>";
				
				echo"<div id=\"dev_picturelink\">";
				echo $rs[picturecat_detail];
				echo"</div>";
				
				echo"</td>";
				echo"<td>";
				echo"<div id=\"dev_picturelink\">";
				echo"$num";
				echo"</div>";
				echo"</td>";
				echo"<td>";
				
				echo"<div id=\"dev_picturelink\">";
				
				echo"<a onClick=\"return confirm('คุณต้องการลบหมวดสินค้านี้');\" href=\"picturecat_delete.php?picturecat_id=$rs[picturecat_id]&admin_id=$admin_id\">";
				?>
                <img src="images/b_drop.png" border="0" />
                <? 
				echo"ลบ";
				echo"</a>
				&nbsp;";
				echo"<a href=\"index.php?page=picturecat&action=edit&picturecat_id=$rs[picturecat_id]\">";
				?>
                <img src="images/b_edit.png" border="0" />
                <? 
				echo"แก้ไข";
				echo"</a>";
				
				echo"</div>";
				echo"</td>";
			echo"</tr>";
			$i++;
			}
			?>
</table>
		<br style="clear:both" />
		<br style="clear:both" />
		<br style="clear:both" />
				
		<?php if($_GET['action']=="edit"){
		$picturecat_id=$_GET['picturecat_id'];
		$strSQL="select * from picturecat where picturecat_id=$picturecat_id";
		$result=mysql_query($strSQL);
		if(!$result){echo"nono".mysql_error();}
		$rs=mysql_fetch_array($result);
		$picturecat_name=$rs[picturecat_name];
		$picturecat_detail=$rs[picturecat_detail];
		$picturecat_name_eng=$rs[picturecat_name_eng];
		$picturecat_detail_eng=$rs[picturecat_detail_eng];
		$action="picturecat_edit.php";
		$submit="แก้ไขหมวดรูปภาพ";
		
		} else{
		$action="picturecat_insert.php";
		$submit="เพิ่มหมวดรูปภาพ";
		$picturecat_name="";
		$picturecat_detail="";
		$picturecat_name_eng="";
		$picturecat_detail_eng="";
		}
		?>
		<br style="clear:both" />
		<br style="clear:both" />		
		

        
        <form action="<?=$action?>" method="post">
        <table>
        	<tr>
            	
                <td>
                ชื่อหมวดรูปภาพ
                </td>
                <td>
                <input type="text" name="picturecat_name" value="<?=$picturecat_name?>" />
                </td>
            </tr>
            <tr>
            	
                <td>
                รายละเอิยดหมวดรูปภาพ
                </td>
                <td>
                <input type="text" name="picturecat_detail" value="<?=$picturecat_detail?>" />
                </td>
            </tr>
            <tr>
            	
                <td>
                Category Picture
                </td>
                <td>
                <input type="text" name="picturecat_name_eng" value="<?=$picturecat_name_eng?>" />
                </td>
            </tr>
            <tr>
            	
                <td>
                Detail Category Picture
                </td>
                <td>
                <input type="text" name="picturecat_detail_eng" value="<?=$picturecat_detail_eng?>" />
                </td>
            </tr>
            <tr>
            	<td>
                </td>
                <td>
                <input type="hidden" name="picturecat_id" value="<?=$picturecat_id?>" id="dev_submit" />
				<input type="hidden" name="admin_id" value="<?=$admin_id?>" id="admin_id" />
                <input type="submit" value="<?=$submit?>" />
                </td>
            </tr>
        </table>
        </form>

</body>
</html>
