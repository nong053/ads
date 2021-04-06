
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
$plugin_name=$_POST['plugin_name'];
$plugin_code=$_POST['plugin_code'];
$plugin_status=$_POST['plugin_status'];
$plugin_position=$_POST['plugin_position'];
$admin_id=$_POST['admin_id'];
$action=$_POST['action'];
$del=$_GET['del'];
/*
echo"admin_id$admin_id";
echo"del=$del<br>";
echo"action$action<br>";
echo"plugin_name$plugin_name<br>";
echo"plugin_code$plugin_code<br>";
echo"plugin_status$plugin_status<br>";
echo"plugin_position$plugin_position<br>";
*/

require("../config.inc.php");
//$db= new database();
if($action=="add"){
$strSQL="insert into plugin_on_web(plugin_name,plugin_code,plugin_status,plugin_position,admin_id)values('$plugin_name','$plugin_code','$plugin_status','$plugin_position','$admin_id')";
$result=mysql_query($strSQL);
if($result){
	echo"ok";
}else{
	echo"error".mysql_error();
}
}else if($action=="edit"){
	$plugin_id=$_POST['plugin_id'];
	

/*edit*/
$strSQL="update plugin_on_web set plugin_name='$plugin_name',plugin_code='$plugin_code',plugin_status='$plugin_status',plugin_position='$plugin_position' where plugin_id='$plugin_id'";
mysql_query($strSQL);
}
if($del=="del"){
	$plugin_id=$_GET['plugin_id'];
	$strSQL="DELETE from plugin_on_web where plugin_id='$plugin_id'";
	mysql_query($strSQL);
}

echo"<script>window.location=\"index.php?page=style_system&select_page=picture_style&page_style=plugin\"</script>";
?>