<?php 
$topic_id=$_GET['topic_id'];

include("../config.inc.php");

$strSQL = "delete from topic where topic_id=$topic_id";
$result=mysql_query($strSQL);
if(!$result){echo"sory".mysql_error();}else{
/*header("Location:index.php?page=webbord");*/
echo"<script>window.location=\"index.php?page=webbord\";</script>";
}
?>