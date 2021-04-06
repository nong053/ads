<?	
include("../config.inc.php");

$pic_type_page=$_POST['pic_type_page'];
//$pic_type=$_POST['pic_type'];
$main_menu_id=$_POST['main_menu_id'];
$pic_detail=$_POST['pic_detail'];
$pic_detail_eng=$_POST['pic_detail_eng'];
$pic_link=$_POST['pic_link'];
$pic_id=$_POST['pic_id'];
$pic_name=$_POST['pic_name'];

$pic_display=$_POST['pic_display'];
$pic_position=$_POST['pic_position'];


$admin_id=$_POST['admin_id'];

//echo"pic_type778899$pic_type<br>";
//echo"pic_detail$pic_detail<br>";
//echo"pic_link$pic_link<br>";
//echo"ssssssssssssssssssspic_id$pic_id<br>";
//echo"pic_type_page$pic_type_page<br>";
if($_FILES["filUpload"]["tmp_name"]!=""){
	$strSQL5="select * from banner_sum where pic_id='$pic_id'";
	$result5=mysql_query($strSQL5);
	$num5=mysql_num_rows($result5);
	if($num5){
		$rs5=mysql_fetch_array($result5);
		$pic_name=$rs5[pic_name];
	
	
		$path_big_picture="../mypicture/$admin_id/$pic_name";
		//echo"path_big_picture$path_big_picture";
	
		if($path_big_picture){
			@unlink("$path_big_picture");
		}
	
	}
	@copy(copy($_FILES["filUpload"]["tmp_name"],"../mypicture/$admin_id/".$_FILES["filUpload"]["name"]));
}
//echo $_FILES["filUpload"]["name"];
if($_FILES["filUpload"]["tmp_name"]!=""){
	$strSQL="update banner_sum set pic_name='".$_FILES["filUpload"]["name"]."',pic_type='$pic_type',pic_detail='$pic_detail',pic_detail_eng='$pic_detail_eng',pic_link='$pic_link',main_menu_id='$main_menu_id',pic_display='$pic_display',pic_position='$pic_position' where pic_id=$pic_id" ;
}else{
	$strSQL="update banner_sum set pic_type='$pic_type',pic_detail='$pic_detail',pic_detail_eng='$pic_detail_eng',pic_link='$pic_link',main_menu_id='$main_menu_id',pic_display='$pic_display',pic_position='$pic_position' where pic_id=$pic_id" ;
}

$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
}else{
	echo"<script>window.location=\"index.php?page=$pic_type_page\";</script>";
	
	}
	

?>