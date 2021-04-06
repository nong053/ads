<?php ob_start();?>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<?

$list_date = $_POST['list_date'];
$list_hour_from = $_POST['list_hour_from'];
$list_minute_from = $_POST['list_minute_from'];
$list_hour_to = $_POST['list_hour_to'];
$list_minute_to = $_POST['list_minute_to'];
$list_name = $_POST['list_name'];
$list_picture = $_FILES['list_picture']['name'];
$list_detail = $_POST['list_detail'];

//copy($_FILES['list_picture']['tmp_name'],$_FILES['list_picture']['name']);
/*
echo"list_date $list_date <br>";
echo"list_hour_from $list_hour_from <br>";
echo"list_minute_from $list_minute_from <br>";
echo"list_hour_to $list_hour_to <br>";
echo"list_minute_to $list_minute_to <br>";
echo"list_name $list_name <br>";
echo"list_picture $list_picture <br>";
echo"list_detail $list_detail <br>";
*/

if($_POST['action_post']=="add"){
	//echo"add2";
	$rand=rand(1,10000);
	$date=date("d-m-y-h-i-s");
	$file_type = $_FILES["list_picture"]["type"];
	$pic_newname=$date.$rand;

	//$type= substr("NaiTan",3); 

	$type= explode("/",$file_type);
	$filePicture=$pic_newname.".".$type[1];
	if(copy($_FILES["list_picture"]["tmp_name"],"../schedule_plan/".$filePicture))
	{
		//*** Insert Record ***//
		include("../config.inc.php");
		//$objDB = mysql_select_db("web_born_db");
		$strSQL = "INSERT INTO schedule_plan";
		$strSQL .="(list_date,list_hour_from,list_minute_from,list_hour_to,list_minute_to,list_name,list_picture,list_detail) VALUES ('$list_date','$list_hour_from','$list_minute_from','$list_hour_to','$list_minute_to','$list_name','$filePicture','$list_detail')";
		$objQuery = mysql_query($strSQL);	
		if($objQuery){
			echo"<script>window.location=\"index.php?page=tv_system\";</script>";
		}
	}
}//add
if($_GET['action_get']=="del"){
	include("oop/manage_data.php");
	function __autoload($filename){
	require($filename.".php");
	}
	$bj_manage_data = new manage_data();
	$table="schedule_plan";
	$list_id=$_GET['list_id'];
	$condition="list_id=$list_id";
	
	$result_select=$bj_manage_data->select_data("schedule_plan where list_id=$list_id");
	$rs_select=mysql_fetch_array($result_select);
	//echo "list_picture".$rs_select[list_picture];
	
	@unlink("../schedule_plan/$rs_select[list_picture]");
	
	$result=$bj_manage_data->delete_data($table,$condition);
	if(!$result){
	//echo "error".mysql_error();
	echo"<script>window.location=\"index.php?page=tv_system\";</script>";
	}else{
	
	echo"<script>window.location=\"index.php?page=tv_system\";</script>";
	}
		
}
if($_POST['action_post']=="edit"){
	include("oop/manage_data.php");
	
	$bj_manage_data = new manage_data();
	$table="schedule_plan";
	$list_id=$_POST['list_id'];
	$condition="list_id=$list_id";
	echo "list_id $list_id";
	$result_select=$bj_manage_data->select_data("schedule_plan where list_id=$list_id");
	$rs_select=mysql_fetch_array($result_select);
	//echo "list_picture".$rs_select[list_picture];
	
	
	if(!$result){
	echo "error".mysql_error();
	}else{
	@unlink("../schedule_plan/$rs_select[list_picture]");
	echo"<script>window.location=\"index.php?page=tv_system\";</script>";
	}



//manage image
	$rand=rand(1,10000);
	$date=date("d-m-y-h-i-s");
	$file_type = $_FILES["list_picture"]["type"];
	$pic_newname=$date.$rand;

	//$type= substr("NaiTan",3); 

	$type= explode("/",$file_type);
	$filePicture=$pic_newname.".".$type[1];
	if(copy($_FILES["list_picture"]["tmp_name"],"../schedule_plan/".$filePicture))
	{

	
	$obj_manage_data=new manage_data();
	echo "$list_id";
	$setfield="list_hour_from='$list_hour_from',list_minute_from='$list_minute_from',list_hour_to='$list_hour_to',list_minute_to='$list_minute_to',list_name='$list_name',list_picture='$filePicture',list_detail='$list_detail'";
	$condition="list_id=$list_id";
	$result=$obj_manage_data->edit_data($table,$setfield,$condition);
	if(!$result){
	echo mysql_error();
	}else{
	echo"<script>window.location=\"index.php?page=tv_system\";</script>";
	}
	}//if copy images file

}
?>

