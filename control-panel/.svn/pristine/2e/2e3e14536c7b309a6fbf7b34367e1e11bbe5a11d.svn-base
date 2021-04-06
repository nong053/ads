<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$member_id=$_GET['member_id'];
$strSQL="delete from member where member_id=$member_id";
$result=mysql_query($strSQL);
if(!$result){echo"error".mysql_error();}else{
echo"<script>window.location=\"index.php?page=mlm_system&select_mlm=mlm\"</script>";
}

?>