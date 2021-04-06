<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include_once("../config.inc.php");
$ans_id=$_POST['ans_id'];
$topic_id=$_POST['topic_id'];
$ans_detail=$_POST['ans_detail'];

$strSQL="update answer set ans_detail='$ans_detail' where ans_id='$ans_id'";
$result=mysql_query($strSQL);
if($result){
echo"<script>alert(\"ระบบแก้ไขข้อมูลเรียบร้อยแล้ว\");</script>";
echo"<script>window.location=\"index.php?page=answer&topic_id=$topic_id\";</script>";
}else{
	echo"error".mysql_error();
	}
?>