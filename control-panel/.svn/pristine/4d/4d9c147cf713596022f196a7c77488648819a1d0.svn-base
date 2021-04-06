<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	require("../config.inc.php");
	$admin_id = $_GET['admin_id'];
	if($admin_id == '1'){
		?>
		<script>
			alert("ไม่อนุญาติให้ลบ Super User !");
			window.history.back();
		</script>
		<?
		exit();
	}
	$sql="DELETE FROM admin WHERE admin_id='$admin_id'";
	mysql_query($sql)or die (mysql_error());
	//header("Location: index.php?page=admin");
?>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php?page=admin">