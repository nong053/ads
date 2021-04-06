<?php 
	require("../config.inc.php");
	
	$picture_id = trim($_POST['picture_id']);//trim ตัดช่องว่างออก
	$picturecat_id = trim($_POST['picturecat_id']);

	$picture_name = trim($_POST['picture_name']);
	$picture_date=date("dmyhis");
	
	
	$action = $_POST['action'];
	
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
	
		$sql="UPDATE picture SET picture_name='$picture_name',picture_date='$picture_date' WHERE picture_id='$picture_id'";
		mysql_query($sql)or die (mysql_error());
		
		$picture_path = "../picture/" . $picturecat_id . "/" . $picture_id . "/";
		for($i = 0; $i < count($_FILES['picture_file']); $i++){
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
		
	}elseif ($action == "add"){
		
		$picture_date=date("dmyhis");
		
		$sql="INSERT INTO picture (picturecat_id,picture_date) VALUES ('$picturecat_id','$picture_date')";
		mysql_query($sql)or die (mysql_error());
		
		$sql="select * FROM picture where picture_date='$picture_date'";
		
		$table=mysql_query($sql) or die(mysql_error());
		$nummmm=mysql_num_rows($table);
		echo"นับบบบบบ$nummmm";
		if($table)
		
			if($row=mysql_fetch_array($table)) {
				$picture_id = $row['picture_id'];
				
				//$picture_path = iconv("UTF-8","windows-874",$picture_id);
				$picture_path = "../picture/".$picturecat_id."/";
			 
			 
			 
			 
			 mkdir_r($picture_path,0777);
			 
			 $aaa=$_FILES['picture_file'];
			
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
		/*header("Location: index.php?page=picture&picturecat_id=".$picturecat_id."");*/
	}
	/*header("Location: index.php?page=picture&picturecat_id=".$picturecat_id."");*/


?>
