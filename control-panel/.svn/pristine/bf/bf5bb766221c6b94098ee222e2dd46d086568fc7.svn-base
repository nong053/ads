<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$horofortninghtly_name=$_POST['horofortninghtly_name'];
$horoyear_name_id=$_POST['horoyear_name_id'];
$horofortninghtly_name_id=$_POST['horofortninghtly_name_id'];


echo "horofortninghtly_name_id$horofortninghtly_name_id";
$horofortninghtly_work=$_POST['horofortninghtly_work'];
$horofortninghtly_money=$_POST['horofortninghtly_money'];
$horofortninghtly_love=$_POST['horofortninghtly_love'];
$horofortninghtly_around=$_POST['horofortninghtly_around'];
$horofortninghtly_dothing=$_POST['horofortninghtly_dothing'];
$horofortninghtly_family=$_POST['horofortninghtly_family'];
$horofortninghtly_other=$_POST['horofortninghtly_other'];
$horofortninghtly_bigen_date=$_POST['horofortninghtly_bigen_date'];
$horofortninghtly_end_date=$_POST['horofortninghtly_end_date'];

//echo"horoyear_name_id=$horoyear_name_id<br>";
//echo"horofortninghtly_name_id$horofortninghtly_name_id<br>";

$strSQL="update horofortninghtly set horofortninghtly_bigen_date='$horofortninghtly_bigen_date',horofortninghtly_end_date='$horofortninghtly_end_date',horofortninghtly_work='$horofortninghtly_work',horofortninghtly_money='$horofortninghtly_money',horofortninghtly_love='$horofortninghtly_love',horofortninghtly_around='$horofortninghtly_around',horofortninghtly_dothing='$horofortninghtly_dothing',horofortninghtly_family='$horofortninghtly_family',horofortninghtly_other='$horofortninghtly_other' where horofortninghtly_name_id=$horofortninghtly_name_id";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
?>
<script>
alert("แก้ไขดวงเรียบร้อยแล้ว");
window.location="index.php?page=horoscope&select_horoscope=horoscopefortninghtly&action=edit&horofortninghtly_name_id=<?=$horofortninghtly_name_id?>&horoyear_name_id=<?=$horoyear_name_id?>&get='get'";
</script>
<?
}
?>