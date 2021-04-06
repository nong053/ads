<?php 
	require("../config.inc.php");

	$news_id = trim($_POST['news_id']);//trim ตัดช่องว่างออก
	$news_title = trim($_POST['news_title']);
	$news_description = trim($_POST['news_description']);
	$news_update=date("d-m-y:h:i:s");
	$news_detail =$_POST['news_detail'];
	$news_cat_id = trim($_POST['news_cat_id']);
	$action = $_POST['action'];
	$actionget=$_GET['actionget'];
	$select_page=$_POST['select_page'];
	
	
	if($actionget=="del"){
	$news_id=$_GET['news_id'];
	$news_cat_id=$_GET['news_cat_id'];
	$select_news=$_GET['select_news'];

	$path_thumbnail="../news/".$news_cat_id."/".$news_id."/thumbnail/";
	$path_big_picture="../news/".$news_cat_id."/".$news_id."/";
			if($handle=opendir($path_thumbnail)){
				$imagesFile=array();
				while(false!==($file=readdir($handle))){
					if($file !="." && $file !=".."){
					$thumbnailsFile=$path_thumbnail."/".$file;
					$big_picture_File=$path_big_picture."/".$file;
					unlink("$thumbnailsFile");
					unlink("$big_picture_File");
				}

			}
			closedir($handle);//ต้องปิดทุกครั้งไม่งั้นลบfolderไม่ได้
		}
	if(is_dir($path_thumbnail)){
	rmdir("$path_thumbnail");
	} 
	if(is_dir($path_big_picture)){
	rmdir("$path_big_picture");
	}
$strSQL="delete from news where news_id='$news_id'";
mysql_query($strSQL);
//header("Location:index.php?page=picture&prdductcat_id=$news_cat_id");
echo"<script> window.location=\"index.php?page=news_system&select_news=$select_news&news_cat_id=$news_cat_id\"</script>";

	}
	//echo"news_id$news_id<br>";
	//echo"news_title$news_title<br>";
	//echo"news_description$news_description<br>";
	//echo"news_update$news_update<br>";
	//echo"news_detail$news_detail<br>";
	//echo"news_cat_id$news_cat_id<br>";
	//echo"action$action<br>";
	//check ค่าว่าง
		
		
		if($action=="add"){
			if(!$_FILES['picture_file']['name'][0]){
				echo"<script>alert(\"กรุณาอัปโหลดภาพด้วยครับ\");</script>";
				echo"<script>window.location=\"index.php?page=news_system&select_news=new_politics&news_cat_id=".$news_cat_id."\";</script>";
				exit();
				
			}
		}
			//check ค่าว่าง
	
	function mkdir_r($dirName, $rights=0777){
		$dirs = explode('/', $dirName);//แยกสัญลักษ์ออกจากตัวอักษร
		$dir='';
		foreach ($dirs as $part) {
			$dir.=$part.'/';
			if (!is_dir($dir) && strlen($dir)>0)
				mkdir($dir, $rights);
		}
	}
	
	function chmod_r($path, $filemode) { 
		if (!is_dir($path)) 
			return chmod($path, $filemode); 
	
		$dh = opendir($path); 
		while (($file = readdir($dh)) !== false) { 
			if($file != '.' && $file != '..') { 
				$fullpath = $path.'/'.$file; 
				if(is_link($fullpath)) 
					return FALSE; 
				elseif(!is_dir($fullpath)) 
					if (!chmod($fullpath, $filemode)) 
						return FALSE; 
				elseif(!chmod_r($fullpath, $filemode)) 
					return FALSE; 
			} 
		} 
	
		closedir($dh); 
	
		if(chmod($path, $filemode)) 
			return TRUE; 
		else 
			return FALSE; 
	}

	function resizeImages($loop,$image,$max_width,$max_height,$max_width2,$max_height2,$images_path) {
		$images_thumbnail_path = $images_path . "/thumbnail";

		
		if(!is_dir($images_path)){
			umask (0);
			mkdir_r($images_path,0777);
		}/*else{
			umask (0);
			chmod_r($images_path,0777);
		}*/
		
		if(!is_dir($images_thumbnail_path)){
			umask (0);
			mkdir_r($images_thumbnail_path,0777);
		}/*else{
			umask (0);
			chmod_r($images_thumbnail_path,0777);
		}*/
		
		$allowedtypes = array("image/x-png","image/png","image/jpeg","image/pjpeg","image/gif");
		$datename = date("YdmHis");
		
		if((is_file($image['tmp_name'])) && ($image['error']=='0') && (in_array($image['type'],$allowedtypes))){
			$imageSize = getimagesize($image['tmp_name']);
			$width = $imageSize[0];
			$height = $imageSize[1];
				
			$x_ratio = $max_width / $width;
			$y_ratio = $max_height / $height;
			
			if(($width <= $max_width) && ($height <= $max_height)){
				$tn_width = $width;
				$tn_height = $height;
			}elseif(($x_ratio * $height) < $max_height){
				$tn_height = ceil($x_ratio * $height);
				$tn_width = $max_width;
			}else{
				$tn_width = ceil($y_ratio * $width);
				$tn_height = $max_height;
			}
			
			$x_ratio = $max_width2 / $width;
			$y_ratio = $max_height2 / $height;
			
			if(($width <= $max_width2) && ($height <= $max_height2)){
				$tn_width2 = $width;
				$tn_height2 = $height;
			}elseif(($x_ratio * $height) < $max_height2){
				$tn_height2 = ceil($x_ratio * $height);
				$tn_width2 = $max_width2;
			}else{
				$tn_width2 = ceil($y_ratio * $width);
				$tn_height2 = $max_height2;
			}
			
			ini_set('memory_limit', '64M');
			
			$max_width_center = ceil($max_width2 / 2);
			$max_height_center = ceil($max_height2 / 2);
			
			$tn_width_center = ceil($tn_width2 / 2);
			$tn_height_center = ceil($tn_height2 / 2);
			
			$x = $max_width_center - $tn_width_center;
			$y = $max_height_center - $tn_height_center;
			
			$dst = ImageCreateTrueColor($tn_width, $tn_height);
			if(($image['type'] == "image/x-png") || ($image['type'] == "image/png")){
				imagesavealpha($dst, true);
				$trans_colour = imagecolorallocatealpha($dst, 0, 0, 0, 127);
				imagefill($dst, 0, 0, $trans_colour);
			}else{
				$white = imagecolorallocate($dst, 255, 255, 255);
				imagefill($dst, 0, 0, $white);
			}
			
			$dst2 = ImageCreateTrueColor($max_width2, $max_height2);
			if(($image['type'] == "image/x-png") || ($image['type'] == "image/png")){
				imagesavealpha($dst2, true);
				$trans_colour = imagecolorallocatealpha($dst2, 0, 0, 0, 127);
				imagefill($dst2, 0, 0, $trans_colour);
			}else{
				$white = imagecolorallocate($dst2, 255, 255, 255);
				imagefill($dst2, 0, 0, $white);
			}
			
			if(($image['type'] == "image/x-png") || ($image['type'] == "image/png")){
			
				$src = imagecreatefrompng($image['tmp_name']);
				imagecopyresampled($dst, $src, 0, 0, 0, 0, $tn_width, $tn_height, $width, $height);
				$fileName = $images_path ."/". $datename . $loop .".png";
				imagepng($dst,$fileName);
				
				imagecopyresampled($dst2, $src, $x, $y, 0, 0, $tn_width2, $tn_height2, $width, $height);
				$fileName = $images_thumbnail_path ."/". $datename . $loop .".png";
				imagepng($dst2,$fileName);
				
			}elseif(($image['type'] == "image/jpeg") || ($image['type'] == "image/pjpeg")){
			
				$src = imagecreatefromjpeg($image['tmp_name']);
				imagecopyresampled($dst, $src, 0, 0, 0, 0, $tn_width, $tn_height, $width, $height);
				$fileName = $images_path ."/". $datename . $loop . ".jpg";
				imagejpeg($dst,$fileName,100);
				
				imagecopyresampled($dst2, $src, $x, $y, 0, 0, $tn_width2, $tn_height2, $width, $height);
				$fileName = $images_thumbnail_path ."/". $datename . $loop . ".jpg";
				imagejpeg($dst2,$fileName,100);
				
			}else{
			
				$src = imagecreatefromgif($image['tmp_name']);
				imagecopyresampled($dst, $src, 0, 0, 0, 0, $tn_width, $tn_height, $width, $height);
				$fileName = $images_path ."/". $datename . $loop . ".gif";
				imagegif($dst,$fileName);
				
				imagecopyresampled($dst2, $src, $x, $y, 0, 0, $tn_width2, $tn_height2, $width, $height);
				$fileName = $images_thumbnail_path ."/". $datename . $loop . ".gif";
				imagegif($dst2,$fileName);
				
			}

			ImageDestroy($src);
			ImageDestroy($dst);
			ImageDestroy($dst2);
			return true;
		}
		
	}



									
	if ($action == "edit"){
	
		$sql="UPDATE news SET 	news_title='$news_title',news_description='$news_description',news_detail='$news_detail',news_update='$news_update' WHERE news_id='$news_id'";
		mysql_query($sql)or die (mysql_error());
		
		
	}elseif ($action == "add"){
		$news_cat_id=$_POST['news_cat_id'];
		/*
		$strSQL_num_pic= "select * from news where news_cat_id='$news_cat_id'";
		$result_num_pic=mysql_query($strSQL_num_pic);
		$num_pic=mysql_num_rows($result_num_pic);
		
		
		
		$num_pic=$num_pic+1;
		$picture_important=$num_pic;*/
		
		//$picture_important="#";
		

		
		$sql="INSERT INTO news(news_title, news_description,news_update,news_detail,	news_cat_id) VALUES ('$news_title','$news_description','$news_update','$news_detail','$news_cat_id')";
		mysql_query($sql)or die (mysql_error());
		
		$sql="select * FROM news WHERE news_update ='$news_update'";
		$table=mysql_query($sql) or die(mysql_error());
		if($table)
		
			if($row=mysql_fetch_array($table)) {
				$news_id = $row['news_id'];
				//$picture_path = iconv("UTF-8","windows-874",$news_id);
				$picture_path = "../news/" . $news_cat_id . "/" . $news_id . "/";

			 	mkdir_r($picture_path,0777);
				$aaa[0]=$_FILES['picture_file'];
				
				for($i = 0; $i < count($_FILES['picture_file']); $i++){
				mkdir_r($picture_path,0777);
					if(is_file($_FILES['picture_file']['tmp_name'][$i])){
					
						$picture_file[$i] = array (
							'name' => $_FILES['picture_file']['name'][$i],
							'type' => $_FILES['picture_file']['type'][$i],
							'tmp_name' => $_FILES['picture_file']['tmp_name'][$i],
							'error' => $_FILES['picture_file']['error'][$i],
							'size' => $_FILES['picture_file']['size'][$i],
						);
						if(($picture_file[$i]['type'] == "application/pdf") && ($picture_file[$i]['error'] == '0')){
							$now = date("YdmHis").$i;
							$picture_pdf_path = $picture_path . "/pdf";
							$pdf_file = $picture_pdf_path ."/". $now . ".pdf";
							if(!is_dir($picture_pdf_path)){
								umask (0);
								mkdir_r($picture_pdf_path,0777);
								
							}/*else{
								umask (0);
								chmod_r($picture_pdf_path,0777);
							}*/
							@move_uploaded_file($picture_file[$i]['tmp_name'], $pdf_file);
							
						}else{
						
							resizeImages($i,$picture_file[$i],700,700,200,200,$picture_path);
							
						}
					}
				}
			}
		
	}else{
		
		header("Location:index.php?page=news_system&select_news=$select_page&news_cat_id=".$news_cat_id."");
	}
	header("Location:index.php?page=news_system&select_news=$select_page&news_cat_id=".$news_cat_id."");


?>
