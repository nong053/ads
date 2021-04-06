<? ob_start();
$banner_id=$_GET['banner_id'];
$page=$_GET['page'];
include("../config.inc.php");

$strSQL5="select * from home_banner where banner_id='$banner_id'";
$result5=mysql_query($strSQL5);
$num5=mysql_num_rows($result5);
if($num5){	
$rs5=mysql_fetch_array($result5);
$banner_name=$rs5[banner_name];


$path_big_picture="../home_banner/$banner_name";
//echo"path_big_picture$path_big_picture";


		
unlink("$path_big_picture");
	

$strSQL="delete from home_banner where banner_id=$banner_id";
mysql_query($strSQL);
//header("Location:index.php?page=product&prdductcat_id=$productcat_id");
echo"<script> window.location=\"index.php?page=$page\"</script>";
}
?>