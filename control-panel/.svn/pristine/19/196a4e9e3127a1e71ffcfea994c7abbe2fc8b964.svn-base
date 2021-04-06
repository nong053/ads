<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$horoday30_name=$_POST['horoday30_name'];
$horoyear_name_id=$_POST['horoyear_name_id'];
$horoday30_name_id=$_POST['horoday30_name_id'];
$horoday30_work=$_POST['horoday30_work'];
$horoday30_money=$_POST['horoday30_money'];
$horoday30_love=$_POST['horoday30_love'];
$horoday30_around=$_POST['horoday30_around'];
$horoday30_dothing=$_POST['horoday30_dothing'];
$horoday30_family=$_POST['horoday30_family'];
$horoday30_other=$_POST['horoday30_other'];
$horoday30_bigen_date=$_POST['horoday30_bigen_date'];
$horoday30_end_date=$_POST['horoday30_end_date'];

//echo"horoyear_name_id=$horoyear_name_id<br>";
//echo"horoday30_name_id$horoday30_name_id<br>";

$strSQL="update horoday30 set horoday30_work='$horoday30_work',horoday30_money='$horoday30_money',horoday30_love='$horoday30_love',horoday30_around='$horoday30_around',horoday30_dothing='$horoday30_dothing',horoday30_family='$horoday30_family',horoday30_other='$horoday30_other' where horoday30_name_id=$horoday30_name_id";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
?>
<script>
alert("แก้ไขดวงเรียบร้อยแล้ว");
window.location="index.php?page=horoscope&select_horoscope=horoscopeday30&action=edit&horoday30_name_id=<?=$horoday30_name_id?>&horoyear_name_id=<?=$horoyear_name_id?>&get='get'";
</script>
<?
}
?>