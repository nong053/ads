<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

include_once("../config.inc.php");
$order_id=$_POST['order_id'];
$action=$_GET['action'];
$action_status=$_POST['action_status'];
$order_status=$_POST['order_status'];
if($action_status=="change_status"){
// echo"action_status$action_status";
 //echo"order_id$order_id";
//echo"change status";
// echo"order_status$order_status";
 $strSQL="update cus_order set order_status ='$order_status' where order_id='$order_id'";
 	$result=mysql_query($strSQL);
	if($result)
	{
	echo"<script>alert(\"ระบบได้ทำการเปลี่ยนสถานะเรียบร้อยแล้ว\");</script>";
	echo"<script>parent.location='index.php?page=ecommerce_system&select_ecommerce=product_check_order'</script>";
	}
}else if($action=="del"){
	
	$order_id=$_GET['order_id'];
	//echo"here delee data";
	$strSQL="delete from order_detail where order_id='$order_id'";
	$result=mysql_query($strSQL);
	if($result){
		$strSQL2="delete from cus_order where order_id='$order_id'";
		$result2=mysql_query($strSQL2);
			if($result2){
				echo"<script>alert(\"ระบบได้ลบใบสั่งซื้อเลขที่ $order_id เรียบร้อยแล้ว\");</script>";
				echo"<script>parent.location='index.php?page=ecommerce_system&select_ecommerce=product_check_order'</script>";
				}
		}else{
		echo"error".mysql_error();
		}
}
?> 
