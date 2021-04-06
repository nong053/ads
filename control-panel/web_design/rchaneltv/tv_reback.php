<style type="text/css">
 #column41{
	
	/*border:1px solid red;*/
	width:530px;
	float:left;
	padding:5px;
	padding-top:10px;
	margin-left:5px;
	overflow:hidden;

}
 #column42{
	
	/*border:1px solid red;*/
	width:430px;
	float:left;
	padding:5px;
	padding-top:10px;
}

 #column42 .box_menu{
	background-color:#3CA5DD;
	width:138px !important;
	width:135px ;
	height:116px;
	float:left;
	border-radius:10px 0px 10px 0px;
	margin:2px;
	overflow:hidden;
}
#column42 .box_menu .titleTopYoutubeBg{
font-size:12px;
padding-left:5px;
padding-top:5px;
z-index:10000000;
background:#000000;
padding:5px;
opacity:0.6;
position:relative;

}

 #column42 .box_menu .titleTopYoutubeBg .titleTopYoutube{

color:white;
z-index:100000;




}

 #column43{
	
	/*border:1px solid red;*/
	width:990px;
	float:left;
	padding:5px;
	padding-top:10px;
}

 #column43 .box_menu{
	background-color:#3CA5DD;
	width:135px !important;
	width:130px ;
	height:116px;
	float:left;
	border-radius:10px 0px 10px 0px;
	margin:2px;
	overflow:hidden;
}
#column43 .box_menu .titleTopYoutubeBg{
font-size:12px;
padding-left:5px;
padding-top:5px;
z-index:10000000;
background:#000000;
padding:5px;
opacity:0.6;
position:relative;

}

 #column43 .box_menu .titleTopYoutubeBg .titleTopYoutube{

color:white;
z-index:100000;




}

</style>
<?php

if($_GET[youtube_id]){
$youtube_id=trim($_GET[youtube_id]);


include_once("oop/manage_data.php");

$bj_manage = new manage_data();
$result_youtube = $bj_manage->select_data("youtupe where id_youtupe = $youtube_id");
$rs_youtube = mysql_fetch_array($result_youtube);
?>
<center>
<?
echo $rs_youtube[embed_youtupe]."<br>";
echo $rs_youtube[title_youtupe];
?>
</center>
<div id="detail_vdo_youtube" style="padding:5px">

<?php
echo $rs_youtube[detail_youtupe];
?>
<div>


<?
}else{
?>
<script>

$(document).ready(function(){
	
	$("#tabs").tabs();
	
	$("#tabs ul li a").click(function(){
		//console.log($(this).attr("href"));
		var $cate_id=$(this).attr("href");
		$cate_id=$cate_id.split('#');
		$.ajax({
			url:'get_cat_youtube.php',
			type:'GET',
			dataType:'html',
			data:{'id_cat_youtube':$cate_id[1]},
			success:function(data){
			//alert($cate_id[1]);
			$("#"+$cate_id[1]).empty();
			$("#"+$cate_id[1]).append(data);
			}
		});
	
	});
	$("#tabs ul li a:eq(0)").trigger("click");


	

	
	$(".box_menu").hover(function(){
	$(this).css({"opacity":"0.5"});
	

	},function(){
	$(this).css({"opacity":"1"});

	});
	
	$(".box_menu").live("click",function(){
	
	
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
	//ปิดจัดการรูป
							
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
						<br style="clear:both">

						






<br style="clear:both">

<div id="tabs">
	<ul>
<?php
$result_cat_youtube = $bj_manage->select_data("cat_youtupe");
$i=1;
$link_cat_id[]="";
while($rs_cat_youtube = mysql_fetch_array($result_cat_youtube)){
?>
<li id="<?=$rs_cat_youtube[id_cat_youtupe]?>"><a href="#content<?=$i?>-<?=$rs_cat_youtube[id_cat_youtupe]?>"><?=$rs_cat_youtube[title_cat_youtupe]?></a></li>
<?
$link_cat_id[$i]="content".$i."-".$rs_cat_youtube[id_cat_youtupe];
$i++;
}
?>
		

	</ul>
	<?php
	for($j=1;$j<=count($link_cat_id); $j++){
	?>
	<div id="<?=$link_cat_id[$j]?>"></div>
	<?
	}
	?>
	
	<br style="clear:both">
	<br style="clear:both">
</div>

<?
} //if
?>