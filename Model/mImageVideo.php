<?php 
	require("../config.inc.php");
	
	$picture_id = trim($_POST['picture_id']);//trim ตัดช่องว่างออก
	$picturecat_id = trim($_POST['picturecat_id']);
	$picture_detail = trim($_POST['picture_detail']);
	$picture_detail_eng = trim($_POST['picture_detail_eng']);
	$picture_important =$_POST['picture_important'];
	$admin_id =$_POST['admin_id'];
	
	$picture_date=date("d-m-y:h:i:s");
	$action = $_POST['action'];
	$rdg_id =$_POST['rdg_id'];
	$ri_id =$_POST['ri_id'];
	$rev_embed_code =$_POST['rev_embed_code'];
	
	
	
	
	//check ค่าว่าง

		if($action=="add"){
			if(!$_FILES['picture_file']['name'][0]){
				echo '["picture_empty"]';
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

			//	$white = imagecolorallocate($dst2, 255, 255, 255);
				$white = imagecolorallocate($dst2, 209, 75, 126);
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
	
		$sql="UPDATE picture SET picture_detail='$picture_detail',picture_detail_eng='$picture_detail_eng',picture_important='$picture_important',picture_date='$picture_date' WHERE picture_id='$picture_id'";
		mysqli_query($conn,$sql)or die (mysqli_error());
		
		
	}elseif ($action == "add"){
		
		/*
		$strSQL_num_pic= "select * from picture where picturecat_id='$picturecat_id'";
		$result_num_pic=mysqli_query($conn,$strSQL_num_pic);
		$num_pic=mysqli_num_rows($result_num_pic);
		
		
		
		$num_pic=$num_pic+1;
		$picture_important=$num_pic;*/
		
		$ri_set_first="#";
		
		
		
		$sql="INSERT INTO realty_images (rdg_id,ri_set_first) VALUES ('$rdg_id','$ri_set_first')";
		mysqli_query($conn,$sql)or die (mysqli_error());
		$ri_id = mysqli_insert_id();
				//$picture_path = iconv("UTF-8","windows-874",$picture_id);
				$picture_path = "../realtyPicture/" . $rdg_id . "/" . $ri_id . "/";
				
			 	mkdir_r($picture_path,0777);
			 	
				for($i = 0; $i < count($_FILES['picture_file']); $i++){
					//echo"for-picture_file ";
				mkdir_r($picture_path,0777);
					if(is_file($_FILES['picture_file']['tmp_name'][$i])){
						echo"is_file";
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
							echo"pdf";
							
						}else{
							echo"image";
							resizeImages($i,$picture_file[$i],700,700,200,200,$picture_path);
							
						}
					}
				}
			
		
	}else{
		//header("Location:index.php?page=picture&picturecat_id=".$picturecat_id."&admin_id=".$admin_id."");
	}
	//header("Location:index.php?page=picture&picturecat_id=".$picturecat_id."&admin_id=".$admin_id."");


	
	if($_POST['action']=="test"){
		
		if ( 0 < $_FILES['file']['error'] ) {
			echo 'Error: ' . $_FILES['picture_file']['error'] . '<br>';
		}
		else {
			move_uploaded_file($_FILES['picture_file']['tmp_name'], '../realtyPicture/' . $_FILES['picture_file']['name']);
		}
		
	}
	

	
if($_POST['action']=="addPDF"){	
	
	if((!$_FILES['doc_file']['name'][0]) and ($picture_file['type'] == "application/pdf")){
		echo '["doc_empty"]';
		echo "step1";
		exit();
	
	}
	if(trim($_FILES["doc_file"]["tmp_name"]) != "")
	{
		
		$doc_date=date("d-m-y-h-i-s");
		$rd_doc=$doc_date.$_FILES["doc_file"]["name"];
		$sql="INSERT INTO realty_doc (rdg_id,rd_doc) VALUES ('$rdg_id','$rd_doc')";
		mysqli_query($conn,$sql)or die (mysqli_error());
		$doc_path = "../realtyDoc/" . $rdg_id;
		mkdir_r($doc_path,0777);
			
			
		
		$result=move_uploaded_file($_FILES["doc_file"]["tmp_name"],"../realtyDoc/".$rdg_id."/".$rd_doc);
		if($result){
			echo'["success"]';
		}else{
		echo mysqli_error();
		}
	}
}	
if($_POST['paramAction']=="showDoc"){

	$strSQL="select * from realty_doc where rdg_id='$rdg_id' ORDER BY rd_id ";
	$result=mysqli_query($conn,$strSQL);

	$i=1;
	?>
		<ul>
		<?php
		while($rs=mysqli_fetch_array($result)){
			?>
				
					<li><i class='fa fa-trash '></i> <a href="#" class='docDel' id='<?=$rs['rd_id']?>'><?=$rs['rd_doc']?></a></li>
			
			<?php
		}
		?>
		</ul>
		<?php
	}
if($_POST['paramAction']=="delDoc"){
	$rd_id=$_POST['rd_id'];
	
	$strSQL1="select * from realty_doc WHERE rd_id='$rd_id'";
	$result1=mysqli_query($conn,$strSQL1);
	$rs1=mysqli_fetch_array($result1);
	$path_doc="../realtyDoc/".$rs1['rdg_id']."/".$rs1['rd_doc'];
	
	$unlink=@unlink("$path_doc");
	
	
		$strSQL="delete from realty_doc  WHERE rd_id='$rd_id'";
		$result=mysqli_query($conn,$strSQL);
		if($result){
			//continue
			echo $rdg_id;
		}
	
	
}

if($_POST['action']=="addPicture"){
	if(!$_FILES['picture_file']['name'][0]){
		echo '["picture_empty"]';
		exit();
	
	}
	if(trim($_FILES["picture_file"]["tmp_name"]) != "")
		{
			
			
			$strSQL="select * from realty_images  where rdg_id='$rdg_id'";
			$result=mysqli_query($conn,$strSQL);
			$num=mysqli_num_rows($result);
			if($num==0){
				$ri_set_first="0";
			}else{
				$ri_set_first="1";
			}
			
			
			
			$picture_date=date("d-m-y-h-i-s");
			$sql="INSERT INTO realty_images (rdg_id,ri_set_first) VALUES ('$rdg_id','$ri_set_first')";
			mysqli_query($conn,$sql)or die (mysqli_error($conn));
			$ri_id = mysqli_insert_id($conn);
			$picture_path = "../realtyPicture/" . $rdg_id . "/" . $ri_id . "/thumbnail/";
			mkdir_r($picture_path,0777);
			
			
			$images = $_FILES["picture_file"]["tmp_name"];
			$new_images = "Picture".$picture_date."-".$_FILES["picture_file"]["name"];
			//$new_images700 = "Picture700_".$_FILES["picture_file"]["name"];
			//copy($_FILES["picture_file"]["tmp_name"],"../MyResize/".$_FILES["picture_file"]["name"]);
			$width1=300; //*** Fix Width & Heigh (Autu caculate) ***//
			$size=GetimageSize($images);
			$height=round($width1*$size[1]/$size[0]);
			$images_orig = ImageCreateFromJPEG($images);
			$photoX = ImagesX($images_orig);
			$photoY = ImagesY($images_orig);
			$images_fin = ImageCreateTrueColor($width1, $height);
			ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width1+1, $height+1, $photoX, $photoY);
			ImageJPEG($images_fin,"../realtyPicture/" . $rdg_id . "/" . $ri_id . "/thumbnail/".$new_images);
			ImageDestroy($images_orig);
			ImageDestroy($images_fin);
			
			
			$width2=700; //*** Fix Width & Heigh (Autu caculate) ***//
			$size=GetimageSize($images);
			$height=round($width2*$size[1]/$size[0]);
			$images_orig = ImageCreateFromJPEG($images);
			$photoX = ImagesX($images_orig);
			$photoY = ImagesY($images_orig);
			$images_fin = ImageCreateTrueColor($width2, $height);
			ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width2+1, $height+1, $photoX, $photoY);
			ImageJPEG($images_fin,"../realtyPicture/" . $rdg_id . "/" . $ri_id . "/".$new_images);
			ImageDestroy($images_orig);
			ImageDestroy($images_fin);
			
			echo'["success"]';
		}
}
	
	
	if($_POST['paramAction']=="showPicture"){

		$strSQL="select * from realty_images where rdg_id='$rdg_id' ORDER BY ri_set_first ";
		$result=mysqli_query($conn,$strSQL);
		
		$i=1;
		while($rs=mysqli_fetch_array($result)){
			//จัดการกับรูปภาพ
			$thumbnailsPath="../realtyPicture/".$rdg_id."/".$rs['ri_id']."/thumbnail/";
			if(!is_dir($thumbnailsPath)){
			
			}else{ //else
				
				if($handle= opendir($thumbnailsPath)){
					$imagesFiles = array();
					while(false!=($file=readdir($handle))){
						if($file!="." && $file!=".."){
							$thumbnailsFile = $thumbnailsPath."/".$file;
							$fileType = pathinfo($thumbnaisFile);//แสดงpath
							$fileType = strtolower($fileType['extension']);//แสดงpathพร้อม แสดงนามสกุล
							$allowedtypes=array("png","jpeg","jpd","gif");
		
							if(is_file($thumbnailsFile)&& in_array($fileType,$allowedtypes))
							{
								$imagesFiles[]=$thumbnailsFile;
							}
								
						}
					}
					closedir($handle);
				}
				sort($imagesFiles);
				if(count($imagesFiles)>0){
					$thumbnailsFile = $imagesFiles[0];
				}
		
			}//else
			//ปิดจัดการรูปภาพ
		?>
		<div class="col-md-4">
			<div class="thumbnails thumbnail-style">
				<img alt="" src="<?=$thumbnailsFile?>" class="img-responsive">
				<div class="caption">
					
					<p>
					<a class="btn-u btn-u-xs btn-u-red delPicture" id="delId-<?=$rs['ri_id']?>" href="#"><i class="icon-trash  margin-left-5"></i></a>
					<?php 
					
					if($rs['ri_set_first']==1){
						?>
						<a class="btn-u btn-u-xs setFirst btn-u-yellow" href="#" id="id-<?=$rs['ri_id']?>"><i class='icon-ban'></i> ตั้งเป็นหน้าปก </a>
						<?php
					}else{
						?>
						<a class="btn-u btn-u-xs setFirst" href="#" id="id-<?=$rs['ri_id']?>"><i class='icon-check'></i> ตั้งเป็นหน้าปก </a>
						<?php 
					}
					?>
					
					</p>
				</div>
			</div>
		</div>
		
		
		
		<?php
		$i++;
		}
   
	}
	

	if($_POST['paramAction']=="setFirst"){

		$strSQL="UPDATE realty_images SET ri_set_first='1' WHERE rdg_id='$rdg_id'";
		$result=mysqli_query($conn,$strSQL);
		if($result){
			$strSQL2="UPDATE realty_images SET ri_set_first='0' WHERE rdg_id='$rdg_id' and ri_id='$ri_id'";
			$result2=mysqli_query($conn,$strSQL2);
			if($result2){
				echo'["success"]';
			}
		}
		
	}
	if($_POST['paramAction']=="delPicture"){


		
		$path_thumbnail="../realtyPicture/".$rdg_id."/".$ri_id."/thumbnail";
		$path_big_picture="../realtyPicture/".$rdg_id."/".$ri_id."";
		
		if($handle=@opendir($path_thumbnail)){
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
			

	
		$strSQL="delete from realty_images  WHERE ri_id='$ri_id'";
		$result=mysqli_query($conn,$strSQL);
		if($result){

			//continue
			echo'["success"]';
		}
	
	}
	if($_POST['paramAction']=="saveEmbedVdo"){
		$sqlCheck="select * from realty_embed_video where rdg_id='$rdg_id'";
		$resultCheck=mysqli_query($conn,$sqlCheck)or die (mysqli_error());
		$rsNumCheck=mysqli_num_rows($resultCheck);
		if($rsNumCheck){

			$sql="UPDATE realty_embed_video SET rev_embed_code='$rev_embed_code' WHERE rdg_id='$rdg_id'";
			$result=mysqli_query($conn,$sql)or die (mysqli_error());
			if($result){
				echo'["success"]';
			}
			
		}else{

			$sql="INSERT INTO realty_embed_video (rdg_id,rev_embed_code) VALUES ('$rdg_id','$rev_embed_code')";
			$result=mysqli_query($conn,$sql)or die (mysqli_error());
			if($result){
				echo'["success"]';
			}
			
		}
	}
	if($_POST['paramAction']=="showEmbedVdo"){
		$sqlCheck="select * from realty_embed_video where rdg_id='$rdg_id'";
		$resultCheck=mysqli_query($conn,$sqlCheck)or die (mysqli_error());
		$rs=mysqli_fetch_array($resultCheck);
		
		echo $rs['rev_embed_code'];
		
	}
?>
