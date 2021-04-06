<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
 #dev_picturetext{
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:15px;
	 
	 font-weight:bold;
 }
  #dev_picturetext2{
	 padding:5px;
	 font-size:14px;
	 font-weight:bold;
	 float:left;
	 width:130px;
 }
 #dev_check{
	 border:#CCC dotted 1px;
	 float:left;
	 width:auto;
	 padding:5px;
	 padding-left:20px;
	 padding-right:20px;
	 -moz-border-radius:5px;
	-webkit-border-radius:15px;
	 
	 
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
 #dev_title{
	border:#09C 5px solid;
	background-color:#09F;
	-moz-border-radius:5px;
	-webkit-border-radius:15px;
	padding:5px;
	color:#FFF;
	font-weight:bold;
}
-->
</style>
<?
include_once("../config.inc.php");
$action=$_POST['action'];
$action2=$_GET['action2'];
//echo"action2$action2";
$cus_fullname=$_POST['cus_fullname'];
$cus_email=$_POST['cus_email'];
$cus_user=$_POST['cus_user'];
$cus_pass=$_POST['cus_pass'];
$cus_companys=$_POST['cus_company'];
$cus_fullname=$_POST['cus_fullname'];
$cus_tel=$_POST['cus_tel'];
$cus_fax=$_POST['cus_fax'];
$cus_other=$_POST['cus_other'];
$cus_address=$_POST['cus_address'];
$cus_id=$_POST['cus_id'];






//picture
$path_object="../member_img/";
	if(!is_dir($path_object)){
	umask(0);
	mkdir($path_object,777);
}
$file_member=$_FILES["cus_pic"]["name"];//--ต้องแก้ไข

if($file_member){
$file_name=$file_member;//--ต้องแก้ไข

	

	$file_array=explode(".",$file_name);
	$file_1=$file_array[0];
	$file_2=$file_array[1];
	$file_1=strtolower($file_1);
	$file_2=strtolower($file_2);
	$now=date("dmyihs");
	$file_1=$file_1.$now.'.'.$file_2;
	
	
	
	if($file_2 =="jpg" or $file_2=="gif" or $file_2=="png" or $file_2=="jpeg" or $file_2=="swf"){
			if(is_dir($path_object))
			{
			$object_picture=$file_1;
			copy($_FILES["cus_pic"]["tmp_name"],"../member_img/".$object_picture);//--ต้องแก้ไข
			
				$strSQLs="select * from customer where cus_id='$cus_id'";
				$results=mysql_query($strSQLs);
				$rss=mysql_fetch_array($results);
				//delete
				$unlink="../member_img/".$rss['cus_pic'];
				if($unlink){
				@unlink($unlink); //@ไม่ต้องการให้มันฟอ้งถ้าไม่มีไฟลล์ให้ลบ
				}
				
				$strSQL="update customer set cus_pic='$object_picture' where cus_id='$cus_id'";
				$result=mysql_query($strSQL);
				if($result){
					if($_POST['actionProfile']=="reback_profile"){
						echo"<script>window.location=\"../../member/index.php?page=profile\"</script>";
					}
				}
			}
				
				
}


}else{
	//picture member default
	$object_picture="";
	
}
//mangement picture

if($action=="edit"){
$cus_update=date("d-m-y:h:i:s");
$strSQL="update customer set cus_email='$cus_email',cus_user='$cus_user',cus_pass='$cus_pass',cus_company='$cus_company',cus_fullname='$cus_fullname',cus_address='$cus_address',cus_tel='$cus_tel',cus_fax='$cus_fax',cus_pic='$object_picture',cus_other='$cus_other',cus_update='$cus_update' where cus_id='$cus_id'";
$result=mysql_query($strSQL);
if(!$result){
	echo"no update".mysql_error();
}else{
	echo"<script>alert(\"แก้ไขข้อมูลเรียบร้อย\")</script>";
	echo"<script>window.location=\"index.php?page=member_system&cus_id=$cus_id&detail_cus=detail_cus\"</script>";
	}
}else if($action2=="check_member"){
?>
<div id="dev_title" >
จัดการสถานะของสมาชิก
</div>
<?
$cus_id=$_GET['cus_id'];
//echo"order_status$order_status";
?>
<br style="clear:both" />
<div id="dev_title">
<form action="member_action2.php" method="post">
<table>
	<tr>
    <? /*
	$strSQL="select * from cus_order order_id='$order_id'";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);*/
	if($order_status=="Yes"){
	$selected1="checked";}else{$selected2="checked";}
	?>
     	<td width="343"><input type="radio"  name="cus_status" value="Yes" <?=$selected1?> />&nbsp; เปิดการใช้งาน
        </td>
    </tr>
    <tr>
     	<td><input type="radio" name="cus_status" value="No"  <?=$selected2?>/>&nbsp; ปิดการใช้งาน
        </td>
    </tr>
    <tr>
    	<td>
        <input type="submit" value="บันทึกการเปลี่ยนแปลง" />
        <input type="hidden" value="change_status" name="action_status" />
        <input type="hidden" value="<?=$cus_id?>" name="cus_id" />
       
        <input type="button" onclick="parent.location='index.php?page=member_system'" value="ยกเลิกการแปลี่ยนแปลง" />
        </td>
    </tr>
</table>
</form>
</div>
<? 
}
?>