<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$horomonth_name=$_POST['horomonth_name'];
$horoyear_name_id=$_POST['horoyear_name_id'];
$horomonth_name_id=$_POST['horomonth_name_id'];
$horomonth_work=$_POST['horomonth_work'];
$horomonth_money=$_POST['horomonth_money'];
$horomonth_love=$_POST['horomonth_love'];
$horomonth_around=$_POST['horomonth_around'];
$horomonth_dothing=$_POST['horomonth_dothing'];
$horomonth_family=$_POST['horomonth_family'];
$horomonth_other=$_POST['horomonth_other'];
$horomonth_bigen_date=$_POST['horomonth_bigen_date'];
$horomonth_end_date=$_POST['horomonth_end_date'];

//echo"horoyear_name_id=$horoyear_name_id<br>";
//echo"horomonth_name_id$horomonth_name_id<br>";

$strSQL="update horomonth set horomonth_bigen_date='$horomonth_bigen_date',horomonth_end_date='$horomonth_end_date',horomonth_work='$horomonth_work',horomonth_money='$horomonth_money',horomonth_love='$horomonth_love',horomonth_around='$horomonth_around',horomonth_dothing='$horomonth_dothing',horomonth_family='$horomonth_family',horomonth_other='$horomonth_other' where horomonth_name_id=$horomonth_name_id and horoyear_id='$horoyear_name_id'";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
?>
<script>
alert("แก้ไขดวงเรียบร้อยแล้ว");
window.location="index.php?page=horoscope&select_horoscope=horoscopemonth&action=edit&horomonth_name_id=<?=$horomonth_name_id?>&horoyear_name_id=<?=$horoyear_name_id?>&get='get'";
</script>
<?
}
?>