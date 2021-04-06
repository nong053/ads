<?php session_start();

include("../config.inc.php");
$rdg_id=$_POST['paramRdgID'];
$strSQL="select rdg_map from realty_data_general where rdg_id='$rdg_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
echo $rs['rdg_map'];

?>