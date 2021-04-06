<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");
$horozodiac_name=$_POST['horozodiac_name'];
$horoyear_name_id=$_POST['horoyear_name_id'];
$horozodiac_name_id=$_POST['horozodiac_name_id'];
$horozodiac_work=$_POST['horozodiac_work'];
$horozodiac_money=$_POST['horozodiac_money'];
$horozodiac_love=$_POST['horozodiac_love'];
$horozodiac_around=$_POST['horozodiac_around'];
$horozodiac_dothing=$_POST['horozodiac_dothing'];
$horozodiac_family=$_POST['horozodiac_family'];
$horozodiac_other=$_POST['horozodiac_other'];
$horozodiac_bigen_date=$_POST['horozodiac_bigen_date'];
$horozodiac_end_date=$_POST['horozodiac_end_date'];

//echo"horoyear_name_id=$horoyear_name_id<br>";
//echo"horozodiac_name_id$horozodiac_name_id<br>";

$strSQL="update horozodiac set horozodiac_bigen_date='$horozodiac_bigen_date',horozodiac_end_date='$horozodiac_end_date',horozodiac_work='$horozodiac_work',horozodiac_money='$horozodiac_money',horozodiac_love='$horozodiac_love',horozodiac_around='$horozodiac_around',horozodiac_dothing='$horozodiac_dothing',horozodiac_family='$horozodiac_family',horozodiac_other='$horozodiac_other' where horozodiac_name_id=$horozodiac_name_id and horoyear_id='$horoyear_name_id'";
$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
?>
<script>
alert("แก้ไขดวงเรียบร้อยแล้ว");
window.location="index.php?page=horoscope&select_horoscope=horoscopezodiac&action=edit&horozodiac_name_id=<?=$horozodiac_name_id?>&horoyear_name_id=<?=$horoyear_name_id?>&get='get'";
</script>
<?
}
?>