
<script>
function fb(app_id) { 
    var link = 'https://www.facebook.com/sharer/sharer.php?app_id=' + app_id + '&sdk=joey&u=' + encodeURIComponent(window.location.href) + '&display=popup&ref=plugin&src=share_button';
    window.open(link, 'trueplookpanya', 'left=10,top=10,width=500,height=500,toolbar=1,resizable=0');
}
</script>
<?php session_start();
include("config.inc.php");
$cus_id=$_SESSION['cus_id'];
$rdg_id=$_GET['rdg_id'];
$rtc_id=$_GET['rtc_id'];


$strSQL1="
select rdg.*,rf_name,rt_name,rps_name,p.PROVINCE_NAME,d.DISTRICT_NAME,a.AMPHUR_NAME,ru.ru_name,
(select ru2.ru_name  from realty_unit ru2 where ru2.ru_id= rdg.rdg_estate_unit) as rdg_estate_unit_name
from realty_data_general rdg
LEFT JOIN realty_for rf
ON rf.rf_id=rdg.rf_id
LEFT JOIN realty_type rt
ON rt.rt_id=rdg.rt_id
LEFT JOIN realty_project_status rps
ON rps.rps_id=rdg.rps_id
LEFT JOIN province p
ON p.PROVINCE_ID=rdg.rdg_address_province_id
LEFT JOIN district d
on d.DISTRICT_ID=rdg_address_sub_district_id
LEFT JOIN amphur a
on a.AMPHUR_ID=rdg_address_district_id
LEFT JOIN realty_unit ru 
on ru.ru_id=rdg.rdg_area_unit
where rdg_id='$rdg_id'
";
$result1=mysqli_query($conn,$strSQL1);
$rs1=mysqli_fetch_array($result1);





$strSQL3="
select rd.*,rdf_detail,rdc_detail,rdi_detail,rdnp_detail from realty_detail rd
LEFT JOIN realty_detail_facility rdf
ON rdf.rdf_id=rd.rdf_id
LEFT JOIN realty_detail_characteristic rdc
on rdc.rdc_id=rd.rdc_id
LEFT JOIN realty_detail_interior rdi
on rdi.rdi_id=rd.rdi_id
LEFT JOIN realty_detail_near_place rdnp
on rdnp.rdnp_id=rd.rdnp_id
where rdg_id='$rdg_id'
";





$result3=mysqli_query($conn,$strSQL3);







?>
<title><?=$rs1['rt_name']?>(<?=$rs1['rf_name']?>) <?=$rs1['rdg_title']?> </title>
<!--
 	<meta property="og:title" content="<?=$rs1['rt_name']?>(<?=$rs1['rf_name']?>) <?=$rs1['rdg_title']?>"/>
    <meta property="og:type" content="Advertising"/>
    <meta property="og:url" content="http://www.imdb.com/title/tt0117500/"/>
    <meta property="og:image" content="http://ia.media-imdb.com/rock.jpg"/>
    <meta property="og:site_name" content="IMDb"/>
    <meta property="fb:admins" content="USER_ID"/>
    <meta property="og:description"
          content="A group of U.S. Marines, under command of
                   a renegade general, take over Alcatraz and
                   threaten San Francisco Bay with biological
                   weapons."/>

-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9478268987509661"
     crossorigin="anonymous"></script>
	 
<script src="Controller/cPost_sub_detail.js"></script>
<link rel="stylesheet" href="css/post_sub_detail.css">
<script>

$(document).ready(function(){
	callMapSummary(<?=$rs1['rdg_id']?>);
});
</script>  

<!--Blog Post0-->      
<?php 
$rdg_id=$rs1['rdg_id'];
?>
	<div style="display: none;">
<?php
	//echo $rdg_id;
	include("useronline/each_realty.php");
?>
	</div>
<?php
?>

		<div class="blog margin-bottom-5 ">
			
		 <div class="row ">
								<div class="panel  panel-sea" style="margin-bottom: 5px;">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="glyphicon glyphicon-blackboard"></i> รายละเอียด "<?=$rs1['rt_name']?>(<?=$rs1['rf_name']?>)"</h3>
									</div>
									<div class="panel-body">
										
											<div class="row">

										


											</div>
											<!--start ads-->
											
											<?php
												//include("ads_top_post_sub_detail.php");
											?>
											<!--end ads-->


											<div class="row">


											


												<!-- Begin Easy Block -->                
												<div class="col-md-12 col-sm-12">

													

													<div class="easy-block-v2">

													
												


													<div class="alert alert-success fade in ">
														<div class="row">
																<div class="col-md-6">
																	<!--<h3 style="margin:0px;"><?=$rs1['rf_name']?><?=$rs1['rt_name']?></h3>-->
																</div>
																<div class="col-md-6" style="text-align:right; padding:2px;">
																	<h3 style="margin:0px;">เลขที่ประกาศ #<font color="red"><?=$rs1['rdg_id']?></font></h3>
																</div>
														</div>
													</div>
		

														<!--start content  basic-->
														<div class="row">
																<div class="col-md-12">
																<?php 
														
																$rdg_id=$rs1['rdg_id'];
																include 'galleryRealty.php';
																
																?>
																<div style='text-align:right;'>
																	<em>ลงประกาศเมือ: <?=$rs1['rdg_update']?> </em>
																</div>
<!-- 																
																<div class="tag-box tag-box-v1 box-shadow shadow-effect-2" style="margin-bottom:5px;">
																	<h2> <?=$rs1['rt_name']?>(<?=$rs1['rf_name']?>)</h2>
																	<p><?=$rs1['rdg_title']?> </p>
																	<p><?=$rs1['rdg_detail']?></p>
																	<p><h3 style="color:red;">ราคา <?=number_format($rs1['rdg_price'])?> บาท</h3></p>
																	
																	
																	<em>ลงประกาศเมือ: <?=$rs1['rdg_update']?> </em>
																</div> -->


																
																

																</div>
																<!-- 
																<div class="col-md-2">

																	<div class="carousel slide testimonials testimonials-v2 testimonials-bg-default" id="testimonials-9">
																		<div class="">
																			<div class="item active">
																			<?php 
																			$strSQLCountHit="SELECT * FROM counter1_realty where  rdg_id='$rdg_id'";
																			$resultCountHit=mysqli_query($conn,$strSQLCountHit);
																			$num=mysqli_num_rows($resultCountHit);
																			?>
																			
																				<p><?=number_format($num)?> ครั้ง</p>
																				<div class="testimonial-info">
																					<span class="testimonial-author">
																						นับจำนวจผู้เข้าชม
																						<em>ประกาศเลขที่ <?=$rs1['rdg_id']?></em>
																					</span>
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
																 -->	


														</div>
														<!--end content  basic-->

														<!-- start button link -->
													<p>
													
<!-- 
<a href="http://www.facebook.com/sharer.php?u= ลิงค์" target="_blank"><img src="img/facebook-variation.png" alt="Facebook" /></a>
<a href="http://twitter.com/share?url= ลิงค์" target="_blank"><img src="img/twitter-variation.png" alt="Twitter" /></a>
<a href="https://plus.google.com/share?url= ลิงค์" target="_blank"><img src="img/gplus-variation2.png" alt="Google" /></a>
-->
														
														<!-- <button type="button"  onClick="fb('1031225606922179')"; class=" btn-u-xs btn btn-facebook-inversed"><i class="fa fa-facebook"></i> แชร์ไปที่เฟสบุ๊ค</button> -->

														<!--
														<button type="button" onClick="window.open('https://plus.google.com/share?url=adsthaidd.com/<?=$_SERVER['REQUEST_URI']?>')"; class="btn-u  btn-u-xs btn-googleplus-inversed"><i class="fa fa-google-plus"></i> แชร์ไปที่กูเกิล</button>
														-->

														<!-- <button type="button" data-target="#sendToMyFriendsFormModal" data-toggle="modal"   class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-bell-o"></i> ส่งหน้านี้ให้เพิ่อน</button> -->

														<!--
<button type="button"  onClick="window.open('http://www.facebook.com/sharer.php?u=adsthaidd.com/<?=$_SERVER['REQUEST_URI']?>')"; class=" btn-u-xs btn btn-facebook-inversed"><i class="fa fa-facebook"></i> แชร์ไปที่เฟสบุ๊ค</button>
														<button type="button" onClick="window.open('https://plus.google.com/share?url=adsthaidd.com/<?=$_SERVER['REQUEST_URI']?>')"; class="btn-u  btn-u-xs btn-googleplus-inversed"><i class="fa fa-google-plus"></i> แชร์ไปที่กูเกิล</button>
														<button type="button" data-target="#sendToMyFriendsFormModal" data-toggle="modal"   class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-bell-o"></i>ส่งหน้านี้ให้เพิ่อน</button>
														-->
														<!-- 
														<button type="button" class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-envelope-o"></i> เก็บหน้านี้ไว้ดูครั้งหน้า</button>
														<button type="button" class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-download"></i>คลิ๊กดูหน้าที่จัดเก็บไว้</button>
														 -->

														<!-- <button type="button"  class=" print btn-u  btn-u-xs btn-u-green"><i class="glyphicon glyphicon-print"></i> ปริ้น</button> -->
														<!--
														<div class="fb-like" data-href="http://adsthaidd.com/index.php?page=post_sub_detail&amp;rdg_id=<?=$rs1['rdg_id']?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
														-->
													</p>
													<!--end  button link -->
													


													

														<!--<div class="easy-bg-v2 rgba-default">ใหม่</div>-->
														<div  id="gallleryDetailPostArea"></div>
														
														
															
															
															


													</div> 

												</div>


												
												<!-- End Begin Easy Block -->                
															  
											</div>

											<div class="shadow-wrapper">
													<div class="headline"><h4>ข้อมูลทั่วไป </h4></div>
	<!-- -ข้อมูลทั่วไป-->
		<div class="row">
			<label class="col-md-3 control-label titleGroup" > ประกาศสำหรับ:</label>
			<div class="col-md-9"><?=$rs1['rf_name']?></div>
			
		</div>

		<div class="row">
			<label class="col-md-3 control-label titleGroup" > ประเภทสื่อสิ่งพิมพ์:</label>
			<div class="col-md-9"><?=$rs1['rt_name']?></div>
		</div>

		<div class="row">
			<label class="col-md-3 control-label titleGroup" > หัวข้อประกาศ :</label>
			<div class="col-md-9"><?=$rs1['rdg_title']?></div>
		</div>

		<div class="row">
			<label class="col-md-3 control-label titleGroup" > รายละเอียดประกาศ :</label>
			<div class="col-md-9"><?=$rs1['rdg_detail']?></div>
		</div>
		
		
		
	
		

		<div style="clear:both"></div>
	<!-- -ข้อมูลทั่วไป-->
	<div class="headline"><h4>ข้อมูลราคา </h4></div>
	<!-- -ข้อมูลราคา-->
		<div class="row">
			<label class="col-md-3 control-label titleGroup" > ประกาศ<?=$rs1['rf_name']?> :</label>
			
			<div class="col-md-9"><?=number_format($rs1['rdg_price'])?> บาท</div>
		</div>
	<!-- -ข้อมูลราคา-->
	<div class="headline"><h4>ข้อมูลที่ตั้ง </h4></div>
	<!-- -ข้อมูลที่ตั้ง-->
		
		


		<div class="row">
				<label class="col-md-3 control-label titleGroup" > จังหวัด :</label>
				<div class="col-md-9"><?=$rs1['PROVINCE_NAME']?></div>
		</div>
		<div class="row">
				<label class="col-md-3 control-label titleGroup" > อำเภอ/เขต :</label>
				<div class="col-md-9"><?=$rs1['AMPHUR_NAME']?></div>
		</div>
		<div class="row">
				<label class="col-md-3 control-label titleGroup" > ตำบล/แขวง :</label>
				<div class="col-md-9"><?=$rs1['DISTRICT_NAME']?></div>
		</div>
		<div class="row">
				<label class="col-md-3 control-label titleGroup" > เลขที่ :</label>
				<div class="col-md-9"><?=$rs1['rdg_address_no']?></div>
		</div>
		<div class="row">
				<label class="col-md-3 control-label titleGroup" > ถนน  :</label>
				<div class="col-md-9"><?=$rs1['rdg_address_road']?></div>
		</div>
		<div class="row">
				<label class="col-md-3 control-label titleGroup" > รหัสไปรษณีย์  :</label>
				<div class="col-md-9"><?=$rs1['rdg_post_code']?></div>
		</div>
		

	
		<div class="row">
				<label class="col-md-3 control-label titleGroup" > แผนที่  :</label>
				<div class="col-md-12">
					<div id="map-canvas-summary" class="map-canvas-summary" style='width: auto;height:400px;' ></div>
					
				</div>
		</div>
	
	<!-- -ข้อมูลที่ตั้ง-->
	<div class="headline"><h4>ข้อมูลเพิ่มเติม </h4></div>
	
		<!-- -ข้อมูลเพิ่มเติม-->
		<div class="row">
			<div class="alert alert-warning fade in">
				<label class="col-md-3 control-label titleGroup" > คุณสมบัติพิเศษ  :</label>
				<div class="col-md-9">
					<ul class="list_realty_detail">
					<?php 
					while($rs3=mysqli_fetch_array($result3)){
						
						if($rs3['rdc_id']){
							?>
								<li>
									<?=$rs3['rdc_detail'];?>
								</li>
							<?php 
						}
					};
					?>
					</ul>
				</div>
				<br style="clear:both">
			</div>
		</div>

	
	
	<?php 
	$strsSQLAttach="select * from realty_doc where rdg_id='$rdg_id'";
	$reslutAttach=mysqli_query($conn,$strsSQLAttach);
	?>
	<div class="headline"><h4> <i class='fa fa-file-pdf-o'></i>เอกสารแนบ </h4></div>
	<?php 
	while($rsAttach=mysqli_fetch_array($reslutAttach)){
		?>
		<!-- -ข้อมูลราคา-->
		<div class="row">
			<div class="col-md-9"><font color="red">Download</font> <a href="realtyDoc/<?=$rsAttach['rdg_id']?>/<?=$rsAttach['rd_doc']?>"  target="_blank"><?=$rsAttach['rd_doc']?></a></div>
		</div>
		<!-- -ข้อมูลราคา-->
		<?php
	}
	?>
	<br>
	</div>

												<!-- start main box4 -->
														<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
															<h2>ฝากขอความ</h2>
															<p>
															<!-- comment start -->
															<div id="commentArea">
															
															 <div class="fb-comments" data-href="http://adsthaidd.com/index.php?page=post_sub_detail&amp;rdg_id=<?=$rdg_id?>" data-numposts="5"></div>
															</div>
															
															
									                        <!-- comment end -->
															</p>
															<p>
															</p>
														</div>
												<!-- end main box4 -->
												

							  </div>
				</div>
		   </div>
</div>
<!--End Blog Post0-->      

