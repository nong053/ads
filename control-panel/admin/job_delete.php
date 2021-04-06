<?php 
include("../config.inc.php");
$id=$_GET['id']; 
$strSQL="delete from job where job_id=$id";
mysql_query($strSQL);
header("Location:index.php?page=job_system&select_page=job_seeker");
?>
