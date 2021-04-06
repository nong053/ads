<?php
	/*[{
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_bike.jpg' alt='Bike'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_paint.jpg' alt='Paint'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_tunnel.jpg' alt='Tunnel'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_bike.jpg' alt='Bike'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}, {
      "content": "<div class='slide_inner'><a class='photo_link' href='#'><img class='photo' src='images/banner_paint.jpg' alt='Paint'></a><a class='caption' href='#'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class='thumb'><img src='images/f2_thumb.jpg' alt='bike is nice'></div><p>Agile Carousel Place Holder</p>"
}]*/
?>

<?php
include_once("../../class_mysql.php");
$localPath="web_design/rchaneltv";
$db = new database();
$result = $db->tableSQL("news");
$i=0;
while($rs=mysql_fetch_array($result)){



//จัดการกับรูปภาพ
		$thumbnailsPath="../../news/1/".$rs[news_id]."/thumbnail";
		if(!is_dir($thumbnailsPath)){
		echo"not found images";
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
	//manage for looping here!

	//"images $thumbnailsFile<br>";
	
$news_news_title=$rs[news_news_title];
$news_description=$rs[news_description];
$news_detail=$rs[news_detail];


	if($i==0){
	$json_file .= '{
      "content": "<div class=\'slide_inner\'><a class=\'photo_link\' href=\'#\'><img class=\'photo\' src='.$thumbnailsFile.' alt=\'Bike\'></a><a class=\'caption\' href=\'#\'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class=\'thumb\'><img src=\'images/f2_thumb.jpg\' alt=\'bike is nice\'></div><p>Agile Carousel Place Holder</p>"
	  }';
	}else{
	$json_file .= ',{
      "content": "<div class=\'slide_inner\'><a class=\'photo_link\' href=\'#\'><img class=\'photo\' src='.$thumbnailsFile.' alt=\'Bike\'></a><a class=\'caption\' href=\'#\'>Sample Carousel Pic Goes Here And The Best Part is that...</a></div>",
      "content_button": "<div class=\'thumb\'><img src=\'images/f2_thumb.jpg\' alt=\'bike is nice\'></div><p>Agile Carousel Place Holder</p>"
	  }';
	}
$i++;
}
echo "[$json_file]";

?>