<script>
$(document).ready(function(){
	
	$(".box_menu").hover(function(){
	$(this).css({"opacity":"0.5"});
	

	},function(){
	$(this).css({"opacity":"1"});

	});
	
	$(".box_menu").click(function(){
	
	
	$.ajax({
		url:"web_design/rchaneltv/get_vdo.php",
		type:"GET",
		dataType:"text",
		data:{"id_youtupe":$($(this),".id_youtupe").text()},
		success:function(data){
		//console.log(data);
		$("#vdo_youtube").empty();
		$("#vdo_youtube").append(data);
		}
	});
	
	//console.log($($(this),".id_youtupe").text());
	});

	/*tv online is default*/
	$.ajax({
		url:"web_design/rchaneltv/get_vdo.php",
		type:"GET",
		dataType:"text",
		data:{"id_youtupe":"/1"},
		success:function(data){
		//console.log(data);
		$("#vdo_youtube").empty();
		$("#vdo_youtube").append(data);
		}
	});
	

});
</script>
<div id="column41">
						
						<!-- vdo-->
					
						<div id="vdo_youtube">

						<!--<iframe width="540" height="360" src="http://www.youtube.com/embed/-k69jaqNCF0" frameborder="0" allowfullscreen></iframe>-->

						</div>
						<!-- vdo-->
						</div>
						<div id="column42">
						<!-- require new latest vdo -->
						<!-- streaming-->						
						<div class="box_menu" style="background-image:url(images_system/streaming.jpg);
							
	background-position:center;">

								<div class="titleTopYoutubeBg">
									<div class="titleTopYoutube">
								ถ่ายทอดสด
									</div>
									<div class="id_youtupe" style="display:none;">
									/1
									</div>
								</div>
								<!--
								<div class="contentYoutube">
								<?=$embed?>
								</div>
								-->
							</div>
							<!-- streaming-->	
						<?php
						
						
						$bj_manage = new manage_data();
						$result_youtube = $bj_manage->select_data("youtupe order by id_youtupe DESC LIMIT 8");
						///$rum_vdo = mysql_num_rows($result_youtube);
						while($rs_youtube = mysql_fetch_array($result_youtube)){
$embed=$rs_youtube[embed_youtupe];
$title_youtupe=$rs_youtube[title_youtupe];
$id_youtupe=$rs_youtube[id_youtupe];
$id_cat_youtupe=$rs_youtube[id_cat_youtupe];

	$thumbnailsPath="youtupe/".$id_cat_youtupe."/".$rs_youtube[id_youtupe]."/thumbnail";
		
		
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
	//ปิดจัดการรูปภ
							
							?>
							
							<div class="box_menu" style="background-image:url(<?=$thumbnailsFile?>);
							
	background-position:center;">

								<div class="titleTopYoutubeBg">
									<div class="titleTopYoutube">
									<?=$title_youtupe?>
									</div>
									<div class="id_youtupe" style="display:none;">
									/<?=$id_youtupe?>
									</div>
								</div>
								<!--
								<div class="contentYoutube">
								<?=$embed?>
								</div>
								-->
							</div>
							<?
						}
						
						?>
							
						</div>