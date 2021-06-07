<?php session_start();?>
	<?php 
	include("../config.inc.php");
	$ses_cus_id=$_SESSION['ses_cus_id'];
	$rdg_id=$_POST['rdg_id'];
	$strSQLRDG="
	select rdg.*,rf_name,rt_name,rps_name,p.PROVINCE_NAME,
	d.DISTRICT_NAME,a.AMPHUR_NAME,ru.ru_name,
	(select ru2.ru_name  from realty_unit ru2 where ru2.ru_id= rdg.rdg_estate_unit) as rdg_estate_unit_name,
	rt.cst_type 
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
	
	where cus_id='$ses_cus_id'
	and rdg_id='$rdg_id'
	";
	$resultRDG=mysqli_query($conn,$strSQLRDG);
	$rsRDG=mysqli_fetch_array($resultRDG);
	
	

	
	
	
	$strSQL3="
	select rd.*,rdf_detail,rdc_detail,rdi_detail,rdnp_detail,cst_detail
	from realty_detail rd
	LEFT JOIN realty_detail_facility rdf
	ON rdf.rdf_id=rd.rdf_id
	LEFT JOIN realty_detail_characteristic rdc
	on rdc.rdc_id=rd.rdc_id
	LEFT JOIN realty_detail_interior rdi
	on rdi.rdi_id=rd.rdi_id
	LEFT JOIN realty_detail_near_place rdnp
	on rdnp.rdnp_id=rd.rdnp_id
	LEFT JOIN contructor_select_type cst
	ON cst.cst_id=rd.cst_id
	where rdg_id='$rdg_id'
	";
	$result3=mysqli_query($conn,$strSQL3);
	
	/*
	$result4=mysqli_query($conn,$strSQL3);
	
	$result5=mysqli_query($conn,$strSQL3);
	
	$result6=mysqli_query($conn,$strSQL3);
	*/
	
	?>
	
	<link rel="stylesheet" href="../css/cssSummary.css" />
	<script type="text/javascript" src="../Controller/cSummary.js"> </script>
		<div class="headline"><h2>สรุปข้อมูลการประกาศ(#<?=$rsRDG['rdg_id']?>)</h2></div>
		<div class="headline"><h4>ข้อมูลทั่วไป </h4></div>
		<!-- -ข้อมูลทั่วไป-->
			<div class="row">
				<label class="col-md-3 control-label titleGroup" > ประกาศเลขที่:</label>
				<div class="col-md-9"><?=$rsRDG['rdg_id']?></div>
				
			</div>
			<div class="row">
				<label class="col-md-3 control-label titleGroup" > ประกาศสำหรับ:</label>
				<div class="col-md-9"><?=$rsRDG['rf_name']?></div>
				
			</div>
	
			<div class="row">
				<label class="col-md-3 control-label titleGroup" > ประเภทอสังหาริมทรัพย์ :</label>
				<div class="col-md-9"><?=$rsRDG['rt_name']?></div>
			</div>
	
			<div class="row">
				<label class="col-md-3 control-label titleGroup" > หัวข้อประกาศ :</label>
				<div class="col-md-9"><?=$rsRDG['rdg_title']?></div>
			</div>
	
			<div class="row">
				<label class="col-md-3 control-label titleGroup" > รายละเอียดประกาศ :</label>
				<div class="col-md-9"><?=$rsRDG['rdg_detail']?></div>
			</div>
			
			
			
			
			<div style="clear:both"></div>
		<!-- -ข้อมูลทั่วไป-->
		<div class="headline"><h4>ข้อมูลราคา </h4></div>
		<!-- -ข้อมูลราคา-->
			<div class="row">
				<label class="col-md-3 control-label titleGroup" > สำหรับ<?=$rsRDG['rf_name']?> :</label>
				
				<div class="col-md-9">
				<?php 
				if($rsRDG['rf_id']=="1"){//เพื่อขาย
					echo "ราคาขาย ".number_format($rsRDG['rdg_price'])." บาท";
				}else if($rsRDG['rf_id']=="2"){//เพื่อเช่า
					echo  "ราคาเช่า ".number_format($rsRDG['rdg_price_rent'])." บาท";
				}else if($rsRDG['rf_id']=="3"){//เพื่อขายและเช่า
					echo  "ราคาขาย ".number_format($rsRDG['rdg_price'])." บาท<br>";
					echo  "ราคาเช่า ".number_format($rsRDG['rdg_price_rent'])." บาท";
				}else if($rsRDG['rf_id']=="5"){//เพื่อขายดาว์น
					echo  "ราคาขายดาว์น ".number_format($rsRDG['rdg_price_down'])." บาท";
				}
				
				?>
				</div>
			</div>
		<!-- -ข้อมูลราคา-->
	
		
		<div class="headline"><h4>ข้อมูลที่ตั้ง </h4></div>
		<!-- -ข้อมูลที่ตั้ง-->
			
			
	
	
			<div class="row">
					<label class="col-md-3 control-label titleGroup" > จังหวัด :</label>
					<div class="col-md-9"><?=$rsRDG['PROVINCE_NAME']?></div>
			</div>
			<div class="row">
					<label class="col-md-3 control-label titleGroup" > อำเภอ/เขต :</label>
					<div class="col-md-9"><?=$rsRDG['AMPHUR_NAME']?></div>
			</div>
			<div class="row">
					<label class="col-md-3 control-label titleGroup" > ตำบล/แขวง :</label>
					<div class="col-md-9"><?=$rsRDG['DISTRICT_NAME']?></div>
			</div>
			<div class="row">
					<label class="col-md-3 control-label titleGroup" > เลขที่ :</label>
					<div class="col-md-9"><?=$rsRDG['rdg_address_no']?></div>
			</div>
			<div class="row">
					<label class="col-md-3 control-label titleGroup" > ถนน  :</label>
					<div class="col-md-9"><?=$rsRDG['rdg_address_road']?></div>
			</div>
			<div class="row">
					<label class="col-md-3 control-label titleGroup" > รหัสไปรษณีย์  :</label>
					<div class="col-md-9"><?=$rsRDG['rdg_post_code']?></div>
			</div>
			
	
			
			<div class="row">
					<label class="col-md-3 control-label titleGroup" > แผนที่  :</label>
					<div class="col-md-12">
						<div id="map-canvas-summary" class="map-canvas-summary" ></div>
						
					</div>
			</div>
		<!-- -ข้อมูลที่ตั้ง-->
		<div class="headline"><h4>ข้อมูลเพิ่มเติม </h4></div>
		<!-- -ข้อมูลเพิ่มเติม-->
		<div class="row">
			<label class="col-md-3 control-label titleGroup" > ลักษณะพิเศษ  :</label>
			<div class="col-md-9">
				<ul>
				<?php 
				if($rsRDG['cst_type']=="M" or $rsRDG['cst_type']=="C" ){
					while($rs3=mysqli_fetch_array($result3)){

						if($rs3['cst_id']){
						?>
								<li>
									<?=$rs3['cst_detail'];?>
								</li>
						<?php 
						}
					};
					
				}else{

					while($rs3=mysqli_fetch_array($result3)){
		
						if($rs3['rdc_id']){
							?>
								<li>
									<?=$rs3['rdc_detail'];?>
								</li>
							<?php 
						}
					};
					
				}
				
				?>
				</ul>
			</div>
	</div>
		    

		
		<div class="headline"><h4>ข้อมูลรูปภาพ/วีดีโอ </h4></div>
		<!-- -ข้อมูลรูปภาพ/วีดีโอ-->
		<div class="headline"><h5>ข้อมูลรูปภาพ </h5></div>
			<div class="row">
			
		<?php	
			
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
			<div class="col-md-3">
				<div class="thumbnails thumbnail-style">
					<img alt="" src="<?=$thumbnailsFile?>" class="img-responsive">
				</div>
			</div>
			<?php
			$i++;
			}
	?>	
				<!-- 
				<div class="col-md-4">
					<div class="thumbnails thumbnail-style">
						<img class="img-responsive" src="../assets/img/main/img22.jpg" alt="">
						<div class="caption">
							
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnails thumbnail-style">
						<img class="img-responsive" src="../assets/img/main/img26.jpg" alt="">
						<div class="caption">
							
						
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnails thumbnail-style">
						<img class="img-responsive" src="../assets/img/main/img25.jpg" alt="">
						<div class="caption">
							
							
						</div>
					</div>
				</div>
				 -->
			</div>
			<div class="headline"><h5>ข้อมูลวีดีโอ </h5></div>
			<div class="row margin-bottom-60">
				<!-- Vimeo Video -->  
				<?php 
				$sqlVDO="select * from realty_embed_video where rdg_id='$rdg_id'";
				$resultVDO=mysqli_query($conn,$sqlVDO)or die (mysqli_error());
				$rsVDO=mysqli_fetch_array($resultVDO);
				?>
	
				<div class="col-md-12">
				
						<?=$rsVDO['rev_embed_code']?>
					
				</div>
				<?php
				?>  
				<!-- Start Vimeo Video -->         
				<!--
				<div class="col-md-6">
					<div class="responsive-video md-margin-bottom-40">
						<iframe width="100%" frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/4dmt7tQG1-w"></iframe>
					</div>
				</div>
				 --> 
				<!-- End Vimeo Video -->
			</div>
		<!-- -ข้อมูลรูปภาพ/วีดีโอ-->
		<hr>
		<div class="form-group">
			<div class="text-center">
				<button type="button" id="btn-back-step3" class="btn-u btn-u-yellow"><i class='icon-arrow-left '></i> ย้อนกลับ  </button>
				<button class="btn-u btn-u-green" type="button" id='btn-success'><i class=' icon-check '></i> บันทึกข้อมูลสมบรูณ์ </button>
			</div>
		</div>
		