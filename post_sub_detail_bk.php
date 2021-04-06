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
$result1=mysql_query($strSQL1);
$rs1=mysql_fetch_array($result1);





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





$result3=mysql_query($strSQL3);




?>
<script src="Controller/cPost_sub_detail.js"></script>
<link rel="stylesheet" href="css/post_sub_detail.css">
<script>
/*
$(document).ready(function(){
	callMapSummary(<?=$rs1['rdg_id']?>);
});
*/
</script>  

<!--Blog Post0-->      
<?php 
$rdg_id=$rs1['rdg_id'];
?>
	<div style="display: none;">
<?php
	echo $rdg_id;
	include("useronline/each_realty.php");
?>
	</div>
<?php
?>
		<div class="blog margin-bottom-5">
		 <div class="row">
								<div class="panel  panel-red" style="margin-bottom: 5px;">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-tasks"></i> รายละเอียด "<?=$rs1['rt_name']?>(<?=$rs1['rf_name']?>)"</h3>
									</div>
									<div class="panel-body">
										
											<div class="row">

										


											</div>
											<!--start ads-->
											<div class="shadow-wrapper">
											
													<!--  
													<p style="height:80px;">
													Ads IMG
													</p>
													-->
													<?php 
													$strSLQBanner6="select * from banner_sum where pic_position='6'";
													$resultBanner6=mysql_query($strSLQBanner6);
													$rsBanner6=mysql_fetch_array($resultBanner6);
													?>
													 <img src="control-panel/mypicture/1/<?=$rsBanner6['pic_name']?>" width="100%" height="100%" />
												
											</div>
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
																	<h3 style="margin:0px;">รหัสประกาศเลขที่ #<font color="red"><?=$rs1['rdg_id']?></font></h3>
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
																<div class="tag-box tag-box-v1 box-shadow shadow-effect-2" style="margin-bottom:5px;">
																	<h2> <?=$rs1['rt_name']?>(<?=$rs1['rf_name']?>)</h2>
																	<p><?=$rs1['rdg_title']?> </p>
																	<p><?=$rs1['rdg_detail']?></p>
																	<p><h3 style="color:red;">ราคา <?=number_format($rs1['rdg_price'])?> บาท</h3></p>
																	
																	
																	<em>ลงประกาศเมือ: <?=$rs1['rdg_update']?> </em>
																</div>


																
																

																</div>
																<!-- 
																<div class="col-md-2">

																	<div class="carousel slide testimonials testimonials-v2 testimonials-bg-default" id="testimonials-9">
																		<div class="">
																			<div class="item active">
																			<?php 
																			$strSQLCountHit="SELECT * FROM counter1_realty where  rdg_id='$rdg_id'";
																			$resultCountHit=mysql_query($strSQLCountHit);
																			$num=mysql_num_rows($resultCountHit);
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
													
														<button type="button"  onClick="window.open('http://www.facebook.com/sharer.php?u=adsthaidd.com/<?=$_SERVER['REQUEST_URI']?>')"; class=" btn-u-xs btn btn-facebook-inversed"><i class="fa fa-facebook"></i> แชร์ไปที่เฟสบุ๊ค</button>
														<button type="button" onClick="window.open('https://plus.google.com/share?url=adsthaidd.com/<?=$_SERVER['REQUEST_URI']?>')"; class="btn-u  btn-u-xs btn-googleplus-inversed"><i class="fa fa-google-plus"></i> แชร์ไปที่กูเกิล</button>
														<button type="button" data-target="#sendToMyFriendsFormModal" data-toggle="modal"   class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-bell-o"></i>ส่งหน้านี้ให้เพิ่อน</button>
														<!-- 
														<button type="button" class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-envelope-o"></i> เก็บหน้านี้ไว้ดูครั้งหน้า</button>
														<button type="button" class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-download"></i>คลิ๊กดูหน้าที่จัดเก็บไว้</button>
														 -->
														<button type="button"  class=" print btn-u  btn-u-xs btn-u-green"><i class="fa fa-download"></i>ปริ้น</button>
														<div class="fb-like" data-href="http://adsthaidd.com/index.php?page=post_sub_detail&amp;rdg_id=<?=$rs1['rdg_id']?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
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
		

		<!--
		<div class="row">
				<label class="col-md-3 control-label titleGroup" > แผนที่  :</label>
				<div class="col-md-12">
					<div id="map-canvas-summary" class="map-canvas-summary" style='width: 655px;height:400px;' ></div>
					
				</div>
		</div>
		-->
	<!-- -ข้อมูลที่ตั้ง-->
	<div class="headline"><h4>ข้อมูลเพิ่มเติม </h4></div>
	
		<!-- -ข้อมูลเพิ่มเติม-->
		<div class="row">
			<div class="alert alert-warning fade in">
				<label class="col-md-3 control-label titleGroup" > คุณสมบัติพิเศษ  :</label>
				<div class="col-md-9">
					<ul class="list_realty_detail">
					<?php 
					while($rs3=mysql_fetch_array($result3)){
						
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
	$reslutAttach=mysql_query($strsSQLAttach);
	?>
	<div class="headline"><h4> <i class='fa fa-file-pdf-o'></i>เอกสารแนบ </h4></div>
	<?php 
	while($rsAttach=mysql_fetch_array($reslutAttach)){
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
															<h2>ฝากขอความไว้กับประกาศนี้</h2>
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
												<!-- start main box5 -->
														<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
															<h2>ติดต่อเจ้าของไปทางประกาศทาง E-mail</h2>
															<p>
															<!--  form contact email start -->
															<form name="contactUsForm" id="contactUsForm" action="#" class="sky-form">
																<fieldset>                  
																			
																			<section>
																				<label class="label">พิมพ์ข้อความ</label>
																				<label class="textarea textarea-resizable">
																					<textarea name="contact_detail" id="contact_detail" rows="3"></textarea>
																				</label>
																			</section>
																			
																			<section>
																				<label class="label">ชื่อ</label>
																				<label class="input">
																					<input type="text" name="contact_fullname" id="contact_fullname">
																				</label>
																			</section>
																			<section>
																				<label class="label">เบอร์โทร</label>
																				<label class="input">
																					<input type="text" name="contact_tel" id="contact_tel">
																				</label>
																			</section>
																			<section>
																				<label class="label">อีเมลล์</label>
																				<label class="input">
																					<input type="text" name="contact_email" id="contact_email">
																				</label>
																			</section>
																			
																			<section>
																				<label class="label"><?
																				$rand1=rand(1,10);
																				$rand2=rand(1,10);
																				$confrim=$rand1+$rand2;
																				$_SESSION['sesConfrim2']=$confrim;
																				?>
																				<b><? echo "$rand1 + $rand2 =?"; ?></b>
																				<span class="color-red">*</span>
																				</label>
																				<label class="input" style='wdith:100px;'>
																					<input type="text" name="cus_confrim" id="cus_confrim" class="form-control margin-bottom-20">
																				</label>
																				
																			</section>
																			
																			
																			
																			
																</fieldset>
																<footer>
																
																<input type="hidden" name="admin_id" value="<?=$rs1['cus_id']?>">
																<input type="hidden" name="robot_gen" id="robot_gen" value="<?=$confrim?>">
																<input type="hidden" name="rdg_id" id="rdg_id" value="<?=$rs1['rdg_id']?>">
																<input type="hidden" name="paramAction" value="sendEmail">
																<button type="submit" id="btnContactUsForm" class="btn-u">คลิ๊กเพื่อส่งอีเมลล์</button>
																
																</footer>
															</form>
															<!--  form contact email end -->
															</p>
														</div>
												<!-- end main box5 -->

							  </div>
				</div>
		   </div>
</div>
<!--End Blog Post0-->      

