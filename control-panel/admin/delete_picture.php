<? ob_start();
$pic_id=$_GET['pic_id'];
$page=$_GET['page'];
$admin_id=$_GET['admin_id'];
include("../config.inc.php");

$strSQL5="select * from banner_sum where pic_id='$pic_id'";
$result5=mysql_query($strSQL5);
$num5=mysql_num_rows($result5);
if($num5){	
$rs5=mysql_fetch_array($result5);
$pic_name=$rs5[pic_name];


$path_big_picture="../mypicture/$admin_id/$pic_name";
//echo"path_big_picture$path_big_picture";

if($path_big_picture){	
unlink("$path_big_picture");
}
	

$strSQL="delete from banner_sum where pic_id=$pic_id";
mysql_query($strSQL);
//header("Location:index.php?page=product&prdductcat_id=$productcat_id");
echo"<script> window.location=\"index.php?page=$page\"</script>";
}
?>