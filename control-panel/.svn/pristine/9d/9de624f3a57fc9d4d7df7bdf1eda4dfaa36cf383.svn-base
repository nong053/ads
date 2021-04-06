<html>

	<head>
<link href="kendoui/styles/kendo.common.min.css" rel="stylesheet" />
<link href="kendoui/styles/kendo.default.min.css" rel="stylesheet" />
<style>
.txtTitle{
padding:5px;
font-size:12px;

}
#tableTv tbody{
font-size:12px;
font-weight:normal;
}
a{
text-decoration:none;
	
}
#title_activity a{
	color:black;

}
a{
color:black;
}
#title_activity a:hover{
	text-decoration:underline;

}
.footer_menu_main a{
color:white;
}
</style>
<script type="text/javascript">
//set table suffter
	//$.noConflict();
	
</script>
	<?php
	include_once("oop/manage_data.php");
	$localPath="web_design/rchaneltv";
	?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//SEO START
$name_title=$_GET['name_title'];//is name to call title
## ทำการ require เอาclass database;
			include_once("class_mysql.php");
			$db = new database();		
 		## set logo area.
$main_menu_id2=$_GET['main_menu_id'];
if($_GET['page']=="" or $_GET['page']=="home"){
$result_seo = $db->tableSQL("seo where 	seo_id = 5");
			$rs_seo = mysql_fetch_array($result_seo);
			$object_seo_id=$rs_seo['seo_id'];
			$object_seo_tag1=$rs_seo['seo_tag1'];
			$object_seo_tag2=$rs_seo['seo_tag2'];
			$object_seo_tag3=$rs_seo['seo_tag3'];
			$object_seo_keyword=$rs_seo['seo_keyword'];
?>
			
			<title><?=$object_seo_tag1?> <?=$object_seo_tag2?> <?=$object_seo_tag3?></title>
            <meta name="Description" content="<?=$object_seo_keyword?>" />
            <meta name="KeyWords" content="<?=$object_seo_tag1?>,<?=$object_seo_tag2?>,<?=$object_seo_tag3?>"/>
<?

}
if($main_menu_id2){
	// echo"main_menu_id2$main_menu_id2";
$result_seo = $db->tableSQL("seo where 	seo_position = '$main_menu_id2'");
			$rs_seo = mysql_fetch_array($result_seo);
			$object_seo_id=$rs_seo['seo_id'];
			$object_seo_tag1=$rs_seo['seo_tag1'];
			$object_seo_tag2=$rs_seo['seo_tag2'];
			$object_seo_tag3=$rs_seo['seo_tag3'];
			$object_seo_keyword=$rs_seo['seo_keyword'];
			$seo="yes";
			?>
            <title><?=$object_seo_tag1?> <?=$object_seo_tag2?> <?=$object_seo_tag3?></title>
            <meta name="Description" content="<?=$object_seo_keyword?>" />
            <meta name="KeyWords" content="<?=$object_seo_tag1?>,<?=$object_seo_tag2?>,<?=$object_seo_tag3?>"/>
            
            

 
            <?
}else{
	$seo="no";
	?>
    <title><?=$name_title?></title>
    <?
}
//SEO END

## set logo area.
			$result_logo = $db->tableSQL("object_system where object_position = 'header_logo'");
			$rs_logo = mysql_fetch_array($result_logo);
			$object_name_logo=$rs_logo['object_name'];
			$object_color_logo=$rs_logo['object_color'];
			$object_width_logo=$rs_logo['object_width'];
			$object_height_logo=$rs_logo['object_height'];

## set banner area.
		
			$result_banner = $db->tableSQL("banner_sum");
			





			


?>
		<link href="<?=$localPath?>/css/index.css" rel="stylesheet"  type="text/css"/>
		<link href="<?=$localPath?>/css/menu.css" rel="stylesheet"  type="text/css"/>
		<link href="<?=$localPath?>/css/gallery.css" rel="stylesheet"  type="text/css"/>

		

		
		
		<!-- carousel	start-->
		<link rel="stylesheet" href="<?=$localPath?>/css/agile_carousel.css" type='text/css'>
		<script src="<?=$localPath?>/js/agile_carousel.alpha.js"></script>


		<script>
		$.getJSON("carousel_data.php", function(data) {
			$(document).ready(function(){
				$("#multiple_slides_visible").agile_carousel({
					carousel_data: data,
					carousel_outer_height: 300,
					carousel_height: 300,
					slide_height: 300,
					carousel_outer_width: 490,
					slide_width: 232,
					number_slides_visible: 3,
					transition_time: 330,
					control_set_1: "previous_button,next_button",
					control_set_2: "group_numbered_buttons",
					persistent_content: ""       
				});
			});
		});
		</script>

		<!-- carousel	start-->

		<script type="text/javascript">
		$(document).ready(function(){
		$("#row3").css({"border-radius":"5px",
					    "-moz-border-radius":"5px",
						"-webkit-border-radius":"5px"
						
					   });
		});
		</script>
		<title>R-chanel</title>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
		<!-- Script start-->
        <script>

            $(document).ready(function() {
                $("#menu").kendoMenu({
				//theme:$(document).data("kendoSkin")|| "metro"
				//theme: $(document).data("kendoSkin") || "metro"
				});

				//$('.k-content #megaStore #menu li').css({"padding":"5px"});
            });
        </script>
		<!-- Script start-->


		
		
	</head>
	<body>
	<!--fadebook-->

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- fadebook-->

	<div id="Mainbody">
		<div id="row1">
				<div id="column11">
					<div id="icon_tw">
						<div class="title_icon">
						<a href="http://www.twitter.com">
						Sign in
						</a>
						</div>
				
					</div>
					<div id="icon_fw">
						<div class="title_icon">
						<a href="http://www.fadebook.com">
						Sign in
						</a>
						</div>
					</div>
					<div class="iconTop">
						<div class="title_icon">
						<a href="login.php">
						Login
						</a>
						</div>
					</div>
					<div class="iconTop">
						<div class="title_icon">
						<a href="index.php?page=register&name_title=สมัครสมาชิก">
						Register
						</a>
						</div>
					</div>
				</div>				
		</div>
		<div id="mainContent">
			<div id="mainContent1">
					<div id="row2">
						<div id="column21">
						
						 <img src="object_system/<?=$object_name_logo?>" width="<?=$object_width_logo?>" height="<?=$object_height_logo?>" />

						</div>
						<div id="column22">
						
						</div>
						<div id="column23">
						
						</div>
					</div>
					<div id="row3">
						<!-- menu start-->
						 <div id="example" class="k-content">
								<div id="megaStore">
									<ul id="menu">
										<li>
											<a href="index.php?page=home">
											หน้าแรก
											</a>
											
										</li>
										<li>
										<a href="index.php?page=tv_reback&name_title=รายการย้อนหลัง">
											รายการย้อนหลัง
										</a>
										</li>
											
				<?php
				//menu Start						
                $result_main_menu = $db->tableSQL("main_menu");
				while($rs_main_menu = mysql_fetch_array($result_main_menu)){
				if($rs_main_menu[plugin]=="article"){
				  $link_main__menu="index.php?page=article&main_menu_id=$rs_main_menu[main_menu_id]";
                  }else if($rs_main_menu[plugin]=="article_ge"){
				  	 $link_main__menu="index.php?page=article&main_menu_id=$rs_main_menu[main_menu_id]&article_ge=article_ge";
				  }else if($rs_main_menu[plugin]=="link"){
					 $link_main__menu="$rs_main_menu[main_menu_link]"; 
				  }else{
					 $link_main__menu="$rs_main_menu[plugin]";
				  }
				?>
                	<li>
                    	<a href="<?=$link_main__menu?>&name_title=<?=$rs_main_menu[main_menu_name]?>"><?=$rs_main_menu[main_menu_name]?></a>
                    </li>
                    <?
				}
				//menu End
				?>


									</ul>
								</div>
								
							</div>
						<!-- menu end-->
					</div>
			</div>
			<div id="mainContent2">

			<?php
			//if not home or page is null value
			 if($_GET['page']=="" or $_GET['page']=="home"){
			?>
			
					<div id="row4">
						<?php
						include_once("vdo_system.php");
						?>
					</div>
					<div id="titleW">
						<div id="txtw">
						
					กิจกกรรม/ข่าวสาร
						
					
						
						</div>
					</div>
					<div id="row5">
						<div id="column51">
							<!-- Gallery Start-->
							<div class="slideshow_wrapper slideshow_wrapper_single">
								<div class="slideshow" id="multiple_slides_visible">
								</div>
								<div class="slideshow_description">
								</div>
							</div>
							<!-- Gallery End-->
						</div>
						<div id="column52">
						
						<!-- box-->
						<div class="mainBox">
							
								<div class="boxTop">

									<div class="boxTitle">
									fadebook
									</div>
								
								</div>
								<div class="boxCenter">
								<!-- fadebook-->
								<div class="fb-like-box" data-href="http://www.facebook.com/pages/R-Channel/329214263835900" data-width="280" data-height="270" data-show-faces="true" data-stream="false" data-header="true"></div>
								<!-- fadebook-->
									<?php
									$bj_manage = new manage_data();
									$resultNews=$bj_manage->select_data("news where news_cat_id=2");
									while($rsNews=mysql_fetch_array($resultNews)){
									$news_cat_id=$rsNews[news_cat_id];
									//จัดการกับรูปภาพ
									$thumbnailsPath="news/".$news_cat_id."/".$rsNews[news_id]."/thumbnail/";
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
									<a href="index.php?page=news&name_title=News&news_id=<?=$rsNews[news_id]?>">
									<img src="<?=$thumbnailsFile?>" width="100" border="0"/><br>
									<?
									echo $rsNews[news_title]."...";
									}
									?>
									</a>
								</div>
								<div class="boxBottom">
							
								</div>
						</div>
						<!-- box-->
						</div>
					</div>

					<div id="row6">
						<div id="column61">
							<div id="titleS">
								<div id="txtS">
								ข่าวสารทั่วไป
								</div>
							</div>
							<div class="content_column">
							<!--Begin News-->
							<iframe src ="http://www.zabzaa.com/news/entertain/entertain.php" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=No width=685 height=360>
							</iframe>
							<div class="fb-like-box" data-href="http://www.facebook.com/pages/R-Channel/329214263835900" data-width="680" data-height="500" data-show-faces="true" data-stream="true" data-header="true"></div>

							<div class="fb-comments" data-href="http://www.facebook.com/pages/R-Channel/329214263835900" data-num-posts="3" data-width="680"></div>
							<!--
							<iframe width="685" scrolling="auto" height="450" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" name="newsfeed" src="http://www.arip.co.th/rssreader.php?cat=1&amp;num=4&amp;rich=true&amp;url=http://www.ch8tcc.com&amp;width=685&amp;height=450"></iframe>
							-->
							<!--End News -->
							</div>

							<div id="titleS">
								<div id="txtS">
								รายการย้อนหลัง
								</div>
							</div>
							<div class="content_column">
							<?php
								$bj_manage = new manage_data();
								$resultYoutube=$bj_manage->select_data("youtupe where id_youtupe !=1 order by id_youtupe desc");
								//$rows=mysql_num_rows($resultYoutube);
								while($rsYoutube = mysql_fetch_array($resultYoutube)){
								$embed=$rsYoutube[embed_youtupe ];
								$title_youtupe=$rsYoutube[title_youtupe];
								$id_youtupe=$rsYoutube[id_youtupe];
								$id_cat_youtupe=$rsYoutube[id_cat_youtupe];
								
									$detail_youtupe=$rsYoutube[detail_youtupe];
								
								$thumbnailsPath="youtupe/".$id_cat_youtupe."/".$rsYoutube[id_youtupe]."/thumbnail";

								

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

								//echo "pic".$thumbnailsFile ;
								?>
								<div class="scope_tv_reback" style="width:330px; float:left;">
								<b><?=$title_youtupe?><br></b>
											<div class="divTvReBack" style="float:left; padding:5px;">
											<a href="index.php?page=tv_reback&name_title=รายการย้อนหลัง&youtube_id=<?=$id_youtupe?>">
											<img src="<?=$thumbnailsFile?>" width="100" height="100" border="0" />
											</a>
											<div class="divTvDetail">
												
												
											</div>
											</div>
											<div class="divReBackLeft"  style="float:rigth">
											<div class="text_vdo" style="padding:5px;">
											<a href="index.php?page=tv_reback&name_title=รายการย้อนหลัง&youtube_id=<?=$id_youtupe?>">
											<?
												if(strlen($detail_youtupe)>150){
									$news_description1 = mb_substr($detail_youtupe,0,150,"UTF-8")."...";
									}else{
									$news_description1=$detail_youtupe;
									}

									echo $news_description1;
									
									?>
									</a>
									</div>
											</div>
								</div>
								<?
								}
							?>
							
								
								<br style="clear:both">
								<a href="index.php?page=tv_reback&name_title=รายการย้อนหลัง">ดูเพิ่มเติม...</a>
							</div>

							<div id="titleS">
								<div id="txtS">
								สินค้าแนะนำ
								</div>
							</div>
							<div class="content_column">

<!-- ตารางรายการ/สินค้า-->
<?php
	function __autoload($filename){
	require_once($filename.".php");
	}
	$bj = new manage_data();
include("product.php");
	
?>
<br style="clear:both">
<!-- ตารางรายการ/สินค้า-->
        


							</div>

							<div id="titleS">
								<div id="txtS">
								เว็บบอร์ด
								</div>
							</div>
							<div class="content_column">
							
							<?php
							include_once("webboard.php");
							?>
							</div>
						</div>



						


						<div id="column62">
							<!-- box-->
						<div class="mainBox">
							
								<div class="boxTop">

									<div class="boxTitle">
									กิจกรรม/Update
									
									</div>
								
								</div>
								<div class="boxCenter">
								<table>
								
								
								<?php
									$bj_manage = new manage_data();
									$resultNews=$bj_manage->select_data("news where news_cat_id=2");
									while($rsNews=mysql_fetch_array($resultNews)){
									$news_cat_id=$rsNews[news_cat_id];
									//จัดการกับรูปภาพ
									$thumbnailsPath="news/".$news_cat_id."/".$rsNews[news_id]."/thumbnail/";
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

									<tr >
									<td width="100">
									<div id="pic_activity" style="float:left; ">
									<a href="index.php?page=news&name_title=News&news_id=<?=$rsNews[news_id]?>">
									<img src="<?=$thumbnailsFile?>" width="100" border="0"/>
									</a>
									</div>
									</td>
									<td>
									<div id="title_activity" style=" padding:5px;float:left;">
									<a href="index.php?page=news&name_title=News&news_id=<?=$rsNews[news_id]?>">
									<?
									echo $rsNews[news_title]."<br>";
									if(strlen($rsNews[news_description])>150){
									$news_description = mb_substr($rsNews[news_description],0,150,"UTF-8")."...";
									}else{
									$news_description=$rsNews[news_description];
									}
									echo $news_description;
									
									?>
									</a>
									</div>
									
									
									</td>
									</tr>
								<?
									}

								?>
								</table>
								
								</div>
								<div class="boxBottom">
							
								</div>
								<br style="clear:both">
						</div>
						<!-- box-->
						<!-- box-->
						<!--
						<div class="mainBox">
							
								<div class="boxTop">

									<div class="boxTitle">
									รายการทั้งหมด
									</div>
								
								</div>
								<div class="boxCenter">
									<?php
									$resultList=$bj->select_data("schedule_plan");
									while($rsList=mysql_fetch_array($resultList)){
										?>
										<div class="divMainbox">
										<a href="index.php?page=schedule_plan&list_id=<?=$rsList[list_id]?>">
										<img src="schedule_plan/<?=$rsList[list_picture]?>" width="135"  border="0">
										</a>
										</div>
										<?
									}

									?>

								<br style="clear:both">
									
								</div>
								<div class="boxBottom">
							
								</div>
						</div>
						-->
						
						<div class="mainBox">
							<!-- banner image-->
								<?php
			while($rs5 = mysql_fetch_array($result_banner)){
			$pic_id=$rs5[pic_id];
			$pic_name=$rs5[pic_name];
			
								?>
								<a href="index.php?page=banner_detail&pic_id=<?=$pic_id?>">
								 <img src="mypicture/<?=$pic_name?>" width="280" height="100"  border="0"/>
								 </a>
								<br style="clear:both">
							<!-- banner image-->

							<?
								}
							?>
						</div>
						<!-- box-->

						<!-- box-->
						<div class="mainBox">
							<!-- banner image-->
								<!-- widgets-->
									<div align="center">
									<embed src="http://widget.sanook.com/swf/main.swf" flashvars="xmlPath=http://widget.sanook.com/rss-diy/rss_xml.php?NjQ5Mjg=" width="350" height="600" bgcolor="#FFFFFF" wmode="transparent">
									</embed>
									</div>
		
								<!-- widgets-->
							<!-- banner image-->
						</div>
						<!-- box-->
						<!-- box-->
						
								<center>
								<!-- Histats.com  START (html only)-->
<a href="http://www.histats.com" alt="page hit counter" target="_blank" >
<embed src="http://s10.histats.com/1041.swf"  flashvars="jver=1&acsid=2033489&domi=4"  quality="high"  width="200" height="30" name="1041.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" /></a>
<img  src="http://sstatic1.histats.com/0.gif?2033489&101" alt="counters" border="0">
<!-- Histats.com  END  -->
</center>

						<!-- box-->

						</div>
						<br style="clear:both">
					</div>


					
<?php
			}else{
			
			//include other follow menu  but is not home
			
						
						switch($_GET['page']){
							case"product":$require="product.php";break;
							case"product_detail":$require="product_detail.php";break;
							case"gallery":$require="gallery.php";break;
							case"article":$require="article.php";break;
							case"banner_detail":$require="banner_detail.php";break;
							case"home":$require="home.php";break;
							case"webboard":$require="webboard.php";break;
							case"answer":$require="answer.php";break;
							case"new_topic":$require="new_topic.php";break;
							case"contact":$require="contact.php";break;
							case"cart":$require="cart.php";break;
							case"confrim_order":$require="confrim_order.php";break;
							case"register":$require="register.php";break;
							case"forgot_pass":$require="forgot_pass.php";break;
							case"confrim":$require="confrim.php";break;
							case"pay":$require="pay.php";break;
							case"rule":$require="rule.php";break;
							case"payment":$require="payment.php";break;
							case"customer_area":$require="customer_area.php";break;
							case"news":$require="news.php";break;
							case"schedule_plan":$require="schedule_plan.php";break;
							case"schedule_tv":$require="schedule_tv.php";break;
							case"tv_reback":$require="tv_reback.php";break;
							
							
							default:$require="home.php";break;
							
						}//switch

						?>
						<div id="titleW">
							<div id="txtw">
							<?=$name_title;?>
							</div>
							
						</div>
						<div id="detailContent">
							<?
							require("$require");
							?>
						</div>
						<br style="clear:both">
						
<?
}//else
?>




					<div id="row7">
						<div id="column71">
							<ul id="footer_menu" style="heigth:100px;">
								
								<?php	
			$result_cat_youtube = $db->tableSQL("cat_youtupe");
			while($rs_cat_youtube = mysql_fetch_array($result_cat_youtube)){
			$title_cat_youtupe=$rs_cat_youtube['title_cat_youtupe'];
			$id_cat_youtupe=$rs_cat_youtube['id_cat_youtupe'];
			
			?>
								<li class="footer_menu_main"><a href="index.php?page=tv_reback">
								<?=$title_cat_youtupe?>
								</a>
									<ul>
										
								<?
									$result_youtupe = $db->tableSQL("youtupe where id_cat_youtupe = $id_cat_youtupe");
									while($rs_youtupe = mysql_fetch_array($result_youtupe)){
									$title_youtupe=$rs_youtupe['title_youtupe'];
									?>
									<li><?=$title_youtupe?></li>
									<?
									}
								?>
									</ul>
								</li>
			<?
			
			}
								?>
								
							</ul>
							
							<div id="bottom_right">
						
							</div>
						</div>
						
					</div>
			</div>



		</div>








</div>



	</body>
</html>