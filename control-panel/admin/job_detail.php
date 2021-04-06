<?php 
include("../config.inc.php");
$job_id=$_GET['job_id'];
$strSQL="select job_detail from job where job_id=$job_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
echo $rs[job_detail];
?>
