<meta http-equiv="content-type" content="text/html; charcet=utf-8" />
<?php 
include("../config.inc.php");
$picturecat_id=$_POST['picturecat_id'];
$picturecat_name=$_POST['picturecat_name'];
$picturecat_detail=$_POST['picturecat_detail'];
$picturecat_name_eng=trim($_POST['picturecat_name_eng']);
$picturecat_detail_eng=trim($_POST['picturecat_detail_eng']);

$strSQL="update picturecat set picturecat_name='$picturecat_name',picturecat_name_eng='$picturecat_name_eng',picturecat_detail='$picturecat_detail',picturecat_detail_eng='$picturecat_detail_eng' where picturecat_id=$picturecat_id";
$result=mysql_query($strSQL);
if(!$result){
echo"nonon".mysql_error();
}
//header("Location:index.php?page=picturecat");
echo"<script>window.location=\"index.php?page=picturecat\";</script>";

?>