<?php 
include("../config.inc.php");
$contact_id=$_GET['contact_id'];
$strSQL="select contact_detail from contact where contact_id=$contact_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
echo $rs[contact_detail];
?>
