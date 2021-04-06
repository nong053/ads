<html>

	<head>
	
	<?php
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
if($_GET['page']=="" ){
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
		
			$result_banner = $db->tableSQL("object_system where object_position = 'header_banner'");
			$rs_banner = mysql_fetch_array($result_banner);
			$object_name_banner=$rs_banner['object_name'];
			$object_color_banner=$rs_banner['object_color'];
			$object_width_banner=$rs_banner['object_width'];
			$object_height_banner=$rs_banner['object_height'];





			


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
					carousel_outer_height: 390,
					carousel_height: 360,
					slide_height: 360,
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
				theme: $(document).data("kendoSkin") || "metro"
				});

				//$('.k-content #megaStore #menu li').css({"padding":"5px"});
            });
        </script>
		<!-- Script start-->


		
		
	</head>
	<body>
	<div id="Mainbody">
		<div id="row1">
				<div id="column11">
					<div id="icon_tw">
						<div class="title_icon">
						<a href="http://www.twiter.com">
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
						<a href="index.php?page=login">
						Login
						</a>
						</div>
					</div>
					<div class="iconTop">
						<div class="title_icon">
						<a href="index.php?page=register">
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
											<a href="index.php?home">
											หน้าแรก
											</a>
											
										</li>
										<li>
											รายการย้อนหลัง
											<ul>
												<li>
													<div id="template" class="k-content" style="padding: 10px;">
													<?php
			## set category vdo youtube area.
		
			$result_cat_youtube = $db->tableSQL("cat_youtupe");
			while($rs_cat_youtube = mysql_fetch_array($result_cat_youtube)){
			 $title_cat_youtupe=$rs_cat_youtube['title_cat_youtupe'];
			 $id_cat_youtupe=$rs_cat_youtube['id_cat_youtupe'];
			 
			 ?>
			<ol style="margin-left:20px;"><b><?=$title_cat_youtupe;?></b>
				
			<?
			$result_youtupe = $db->tableSQL("youtupe where id_cat_youtupe = $id_cat_youtupe");
			while($rs_youtupe = mysql_fetch_array($result_youtupe)){
			$title_youtupe=$rs_youtupe['title_youtupe'];
			?>
			<li><?=$title_youtupe?></li>
			<?
			}
			?>
			
			</ol>
			 <?
			}
													?>
														
													
														
														
													</div>
												</li>
												
											</ul>
											
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
						<div id="column41">
						
						<!-- vdo-->
					

						<object  class="video-object" width="640" height="360"><param name="movie" value="http://www.youtube.com/v/-k69jaqNCF0?version=3&amp;hl=th_TH"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param>
						<param name="wmode" value="transparent"> </param>
						<embed src="http://www.youtube.com/v/-k69jaqNCF0?version=3&amp;hl=th_TH" type="application/x-shockwave-flash" width="640" height="360" allowscriptaccess="always" allowfullscreen="true" wmode="transparent"></embed></object>
						<!-- vdo-->
						<!--<param name="wmode" value="opaque" />-->
						</div>
						<div id="column42">
							<div class="box_menu">
							box1
							</div>
							<div class="box_menu">
							box2
							</div>
							<div class="box_menu">
							box3
							</div>
							<div class="box_menu">
							box4
							</div>
							<div class="box_menu">
							box5
							</div>
							<div class="box_menu">
							box6
							</div>
							<div class="box_menu">
							box7
							</div>
							<div class="box_menu">
							box8
							</div>
							<div class="box_menu">
							box9
							</div>
						</div>
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
									กิจกรรม/Update
									</div>
								
								</div>
								<div class="boxCenter">
								
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
								รายการย้อนหลัง
								</div>
							</div>
						</div>

						<div id="column62">
							<!-- box-->
						<div class="mainBox">
							
								<div class="boxTop">

									<div class="boxTitle">
									fade book
									</div>
								
								</div>
								<div class="boxCenter">
								
								</div>
								<div class="boxBottom">
							
								</div>
						</div>
						<!-- box-->
							<!-- box-->
						<div class="mainBox">
							
								<div class="boxTop">

									<div class="boxTitle">
									นับจำนวนผู้เข้าชม
									</div>
								
								</div>
								<div class="boxCenter" style="height:100px;">
								
								</div>
								<div class="boxBottom">
							
								</div>
						</div>
						<!-- box-->
						<!-- box-->
						<div class="mainBox">
							<!-- banner image-->
								 <img src="object_system/<?=$object_name_banner?>" width="<?=$object_width_logo?>" height="<?=$object_height_logo?>" />
								<br style="clear:both">
							<!-- banner image-->
						</div>
						<!-- box-->
						</div>
						<br style="clear:both">
					</div>


					
<?php
			}else{
			
			//include other follow menu  but is not home
			
						
						switch($_GET['page']){
							case"product":$require="product.php";break;
							case"product_detail":$require="product_detail_try.php";break;
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
							
							default:$require="home.php";break;
							
						}//switch

						?>
						<div id="titleW">
							<div id="txtw">
							กิจกกรรม/ข่าวสาร
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
								<li class="footer_menu_main"><?=$title_cat_youtupe?>
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