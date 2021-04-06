<?php 
$ans_id=$_GET['ans_id'];
$topic_id=$_GET['topic_id'];

include("../config.inc.php");

$strSQL = "delete from answer where ans_id=$ans_id";
$result=mysql_query($strSQL);
if(!$result){echo"sory".mysql_error();}else{
/*header("Location:index.php?page=answer&topic_id=$topic_id");*/
echo"<script>window.location=\"index.php?page=answer&topic_id=$topic_id\";</script>";
}
?>