<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

include_once("../config.inc.php");
$cus_id=$_POST['cus_id'];
$action=$_GET['action'];
$action_status=$_POST['action_status'];
$cus_status=$_POST['cus_status'];
if($action_status=="change_status"){
// echo"action_status$action_status";
 //echo"cus_id$cus_id";
//echo"change status";
// echo"order_status$order_status";
 $strSQL="update customer set cus_enable='$cus_status' where cus_id='$cus_id'";
 	$result=mysql_query($strSQL);
	if($result)
	{
	echo"<script>alert(\"ระบบได้ทำการเปลี่ยนสถานะเรียบร้อยแล้ว\");</script>";
	echo"<script>parent.location='index.php?page=member_system'</script>";
	}
}else if($action=="del"){
	
	$cus_id=$_GET['cus_id'];
	//echo"here delee data";
	$strSQL="delete from customer where cus_id='$cus_id'";
	$result=mysql_query($strSQL);
	if($result){
		
				echo"<script>alert(\"ระบบได้ลบข้อมูลเรียบร้อยแล้ว\");</script>";
				echo"<script>parent.location='index.php?page=member_system'</script>";
		}else{
		echo"error".mysql_error();
		}
}
?> 
