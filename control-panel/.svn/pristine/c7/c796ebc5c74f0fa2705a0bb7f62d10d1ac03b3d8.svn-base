<? ob_start();

$pic_type_page=$_POST['pic_type'];
$pic_type=$_POST['pic_type'];
$link=$_POST['pic_link'];
//$position=$_POST['position'];
$pic_detail=$_POST['pic_detail'];
//echo"$pic_type<br>";
//echo"$link<br>";
//echo"$pic_detail<br>";

	if(copy($_FILES["filUpload"]["tmp_name"],"../mypicture/".$_FILES["filUpload"]["name"]))
	{
		
//echo"hello mycopy";
		//*** Insert Record ***//
		
		include("../config.inc.php");
		//$objDB = mysql_select_db("web_born_db");
		if($link=="" or $link=="http://"){
		$link="";
		}
		$strSQL = "INSERT INTO picture ";
		$strSQL .="(pic_name,pic_type,pic_detail,pic_link) VALUES ('".$_FILES["filUpload"]["name"]."','$pic_type','$pic_detail','$link')";
		$objQuery = mysql_query($strSQL);	
		if($objQuery){
			echo"<script>window.location=\"index.php?page=$pic_type_page\";</script>";
			}
	}else{
	echo"<script>alert(\"banner is empty\");</script>";
	echo"<script>window.location=\"index.php?page=banner\";</script>";
	}
?>

