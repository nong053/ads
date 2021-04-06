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
	
	
	$productcat_id = trim($_GET['productcat_id']);
	$admin_id = trim($_GET['admin_id']);
	//$product_cat_path = iconv("UTF-8","windows-874",$productcat_id);
	$product_cat_path = "../product/" . $productcat_id . "/";
	if (is_dir($product_cat_path)){
		remove_dir($product_cat_path);
	}

	$sql="DELETE FROM productcat WHERE productcat_id = $productcat_id";
	mysql_query($sql)or die (mysql_error());
	
	echo"<script>window.location=\"index.php?page=ecommerce_system&select_ecommerce=productcat\"</script>";
	
	
	//header("Location: index.php?page=product");
	/*echo"<script>window.location=\"index.php?page=productcat\"</script>";*/
?>