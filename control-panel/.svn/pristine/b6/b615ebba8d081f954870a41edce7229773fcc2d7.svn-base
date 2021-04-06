<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$horoyear_name=$_POST['horoyear_name'];
$horoyear_name_id=$_POST['horoyear_name_id'];
$horoyear_work=$_POST['horoyear_work'];
$horoyear_money=$_POST['horoyear_money'];
$horoyear_love=$_POST['horoyear_love'];
$horoyear_around=$_POST['horoyear_around'];
$horoyear_dothing=$_POST['horoyear_dothing'];
$horoyear_family=$_POST['horoyear_family'];
$horoyear_other=$_POST['horoyear_other'];


$strSQL="update horoyear set horoyear_work='$horoyear_work',horoyear_money='$horoyear_money',horoyear_love='$horoyear_love',horoyear_around='$horoyear_around',horoyear_dothing='$horoyear_dothing',horoyear_family='$horoyear_family',horoyear_other='$horoyear_other' where horoyear_name_id=$horoyear_name_id";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}
?>
<script>
alert("แก้ไขดวงเรียบร้อยแล้ว");
window.location="index.php?page=horoscope&select_horoscope=horoscopeyear&action=edit&horoyear_name_id=<?=$horoyear_name_id?>";
</script>