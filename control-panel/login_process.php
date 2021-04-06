<? session_start(); ob_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("config.inc.php");
$user=$_POST['user'];
$pass=$_POST['pass'];

$strSQL="select * from admin where admin_username='$user'&& admin_password='$pass'";
$result=mysql_query($strSQL);

$_SESSION['member_user_url2']="admin";

if($num=mysql_num_rows($result)){
	$rs=mysql_fetch_array($result);
	$_SESSION['admin_name']=$rs['admin_name'];
	$_SESSION['admin_surname']=$rs['admin_surname'];
	$_SESSION['admin_status']=$rs['admin_status'];
	$_SESSION['admin_ERROR']="";
	//header("Location:admin/index.php");
	echo"<script>window.location='admin/index.php'</script>";
	
	}else{
		$strSQL2="select * from customer where cus_user='$user' and cus_pass='$pass'";
		$result2=mysql_query($strSQL2);
		$rs=mysql_fetch_array($result2);
		
		 	if($num=mysql_num_rows($result2)){
				
			$_SESSION['cus_user']=$rs[cus_user];
			$_SESSION['cus_pass']=$rs[cus_pass];
			$_SESSION['cus_name']=$rs[cus_fullname];
			$_SESSION['cus_id']=$rs[cus_id];
			echo"<script>window.location='index.php'</script>";
			}	
			
		 }
		 $_SESSION['ERORR']="รหัสผ่านไม่ถูกต้อง";
		 echo"<script>window.location='index.php'</script>";

?>