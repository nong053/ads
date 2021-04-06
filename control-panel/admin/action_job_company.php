<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");


$action=$_POST['action'];
$action_del=$_GET['action'];



if($action_del=="del"){
$jobcat_id=$_GET['jobcat_id'];
/*echo"jobcat_id$jobcat_id";*/
$strSQL="delete from realty_type_cate where rtc_id='$jobcat_id'";
$result=mysql_query($strSQL);
if(!$result){
 	echo"error".mysql_error();
	}
}

if($action=="add"){


$jobcat_title=$_POST['jobcat_title'];
$jobcat_detail=$_POST['jobcat_detail'];
$jobcat_bgcolor=$_POST['jobcat_bgcolor'];

$strSQL="insert into realty_type_cate(rtc_name,rtc_detail,rtc_bg_color)values('$jobcat_title','$jobcat_detail','$jobcat_bgcolor')";

$result=mysql_query($strSQL);
if(!$result){
	echo"error".mysql_error();
	}else{
	return true;
	}
}	
if($action=="edit"){

$jobcat_id=$_POST['jobcat_id'];
$jobcat_title=$_POST['jobcat_title'];
$jobcat_detail=$_POST['jobcat_detail'];
$jobcat_bgcolor=$_POST['jobcat_bgcolor'];

//echo"cat_webdir_id$cat_webdir_id";

$strSQL="update realty_type_cate set rtc_name='$jobcat_title',rtc_detail='$jobcat_detail',rtc_bg_color='$jobcat_bgcolor' where rtc_id='$jobcat_id'";
$result=mysql_query($strSQL);
if(!$result){echo"error".mysql_error();}
}

?>
