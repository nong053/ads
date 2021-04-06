<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	require("../config.inc.php");
	function remove_dir($dir) { 
	$handle = opendir($dir); 
	while (false!==($item = readdir($handle))) { 
		if($item != '.' && $item != '..') { 
			if(is_dir($dir.'/'.$item))  { 
				remove_dir($dir.'/'.$item); 
			}else{ 
				unlink($dir.'/'.$item); 
			} 
		} 
	} 
	closedir($handle); 
	if(rmdir($dir)) { 
		$success = true; 
	}        
	return $success; 
	} 
	
	
	$picturecat_id = trim($_GET['picturecat_id']);
	$admin_id = trim($_GET['admin_id']);
	//$picture_cat_path = iconv("UTF-8","windows-874",$picturecat_id);
	$picture_cat_path = "../picture/$admin_id/" . $picturecat_id . "/";
	if (is_dir($picture_cat_path)){
		remove_dir($picture_cat_path);
	}

	$sql="DELETE FROM picturecat WHERE picturecat_id = $picturecat_id";
	mysql_query($sql)or die (mysql_error());
	
	
	
	$strSQL="delete from picture where picturecat_id = $picturecat_id";
	mysql_query($strSQL);
	
	//header("Location: index.php?page=product");
	echo"<script>window.location=\"index.php?page=picturecat\"</script>";
?>