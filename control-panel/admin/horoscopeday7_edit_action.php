<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$horoday7_name=$_POST['horoday7_name'];
$horoyear_name_id=$_POST['horoyear_name_id'];
$horoday7_name_id=$_POST['horoday7_name_id'];
$horoday7_work=$_POST['horoday7_work'];
$horoday7_money=$_POST['horoday7_money'];
$horoday7_love=$_POST['horoday7_love'];
$horoday7_around=$_POST['horoday7_around'];
$horoday7_dothing=$_POST['horoday7_dothing'];
$horoday7_family=$_POST['horoday7_family'];
$horoday7_other=$_POST['horoday7_other'];
$horoday7_bigen_date=$_POST['horoday7_bigen_date'];
$horoday7_end_date=$_POST['horoday7_end_date'];

//echo"horoyear_name_id=$horoyear_name_id<br>";
//echo"horoday7_name_id$horoday7_name_id<br>";

$strSQL="update horoday7 set horoday7_work='$horoday7_work',horoday7_money='$horoday7_money',horoday7_love='$horoday7_love',horoday7_around='$horoday7_around',horoday7_dothing='$horoday7_dothing',horoday7_family='$horoday7_family',horoday7_other='$horoday7_other' where horoday7_name_id=$horoday7_name_id";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
?>
<script>
alert("แก้ไขดวงเรียบร้อยแล้ว");
window.location="index.php?page=horoscope&select_horoscope=horoscopeday7&action=edit&horoday7_name_id=<?=$horoday7_name_id?>&horoyear_name_id=<?=$horoyear_name_id?>&get='get'";
</script>
<?
}
?>