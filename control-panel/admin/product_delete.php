<? ob_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include("../config.inc.php");
$action=$_GET['action'];

if($action="delete"){
$exam_id=$_GET['exam_id'];
$productcat_level2_id=$_GET['productcat_level2_id'];



$strSQL="delete from exam where exam_id=$exam_id";
mysql_query($strSQL);
//header("Location:index.php?page=product&prdductcat_id=$productcat_id");
echo"<script> window.location=\"index.php?page=ecommerce_system&select_ecommerce=product&productcat_level2_id=$productcat_level2_id\"</script>";
//header(window.location=\'index.php?page=ecommerce_system&select_ecommerce=product&productcat_id=$productcat_id\');

}//action==delete

?>