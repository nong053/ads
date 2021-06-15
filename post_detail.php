
<?php 
include("realty_split.php");
include_once 'config.inc.php';
//realty main start
$rt_id=$_POST['rt_id'];


if($_POST['rdg_address_province_id']){
	$rdg_address_province_id=$_POST['rdg_address_province_id'];
}else{
	$rdg_address_province_id="All";
}
if($_POST['rdg_address_district_id']){
	$rdg_address_district_id=$_POST['rdg_address_district_id'];
}else{
	$rdg_address_district_id="All";
}
if($_POST['rdg_address_sub_district_id']){
	$rdg_address_sub_district_id=$_POST['rdg_address_sub_district_id'];
}else{
	$rdg_address_sub_district_id="All";
}

if($rt_id==""){
	$rt_id="All";
}
if($rf_id==""){
	$rf_id="All";
}


$rdg_bts=$_POST['rdg_bts'];
if($rdg_bts==""){
	$rdg_bts="All";
}
$rdg_bus=$_POST['rdg_bus'];
if($rdg_bus==""){
	$rdg_bus="All";
}
$rdg_harbor=$_POST['rdg_harbor'];
if($rdg_harbor==""){
	$rdg_harbor="All";
}
$rdg_id=$_POST['rdg_id'];
if($rdg_id==""){
	$rdg_id="All";
}
$rdg_mrt=$_POST['rdg_mrt'];
if($rdg_mrt==""){
	$rdg_mrt="All";
}
$rdg_address_road=$_POST['rdg_address_road'];
if($rdg_address_road==""){
	$rdg_address_road="All";
}
//realty main start
//realty sub post start
$rdg_price_start=$_POST['rdg_price_start'];
$rdg_price_end=$_POST['rdg_price_end'];
$rdg_area_number=$_POST['rdg_area_number'];
$rdg_area_unit=$_POST['rdg_area_unit'];
$rdr_bedroom=$_POST['rdr_bedroom'];

//realty sub post end
if($_POST['paramAction']=="searchQuick"){
	$searchQuick=$_POST['searchQuick'];
	$rf_id=$_POST['rf_id'];
	
	$strSQLPostDetail="
	select rdg.*,rt_name,rf_name,rps_name from realty_data_general rdg
	LEFT JOIN realty_type rt
	ON rdg.rt_id=rt.rt_id
	LEFT JOIN realty_for rf
	ON rdg.rf_id=rf.rf_id
	LEFT JOIN realty_project_status rps
	ON rdg.rps_id=rps.rps_id
	WHERE  (rdg_title like '%$searchQuick%')
	and (rdg.rf_id='$rf_id')
	and rdg.rdg_status='Y'
	order by rdg.rdg_update desc
	";
	
	
}
	
	$strSQLPostDetail="

	
	select rdg.*,rt_name,rf_name,rps_name from realty_data_general rdg
	LEFT JOIN realty_type rt 
	ON rdg.rt_id=rt.rt_id
	LEFT JOIN realty_for rf
	ON rdg.rf_id=rf.rf_id
	LEFT JOIN realty_project_status rps
	ON rdg.rps_id=rps.rps_id
	
	WHERE 
	
	(rdg.rt_id='$rt_id' or 'All'='$rt_id')
	AND (rdg.rf_id='$rf_id' or 'All'='$rf_id')
	AND (rdg.rdg_address_province_id='$rdg_address_province_id' or 'All'='$rdg_address_province_id')
	AND (rdg.rdg_address_district_id='$rdg_address_district_id' or 'All'='$rdg_address_district_id')
	AND (rdg.rdg_address_sub_district_id='$rdg_address_sub_district_id' or 'All'='$rdg_address_sub_district_id')
	and rdg.rdg_status='Y'
	order by rdg.rdg_update desc

	";

	/*
	echo"rt_id=$rt_id<br>";
	echo"rf_id=$rf_id<br>";
	echo"rdg_address_province_id=$rdg_address_province_id<br>";
	echo"rdg_address_district_id=$rdg_address_district_id<br>";
	echo"rdg_address_sub_district_id=$rdg_address_sub_district_id<br>";
	*/
	$resultPostDetail=mysqli_query($conn,$strSQLPostDetail);
	
	
	$resultPostDetail2=mysqli_query($conn,$strSQLPostDetail);
	$rsPostDetail2=mysqli_fetch_array($resultPostDetail2);
	
	
	$strSQLRT2="select * from realty_type where rt_id='".$_POST['rt_id']."'";
	$resultRT2=mysqli_query($conn,$strSQLRT2);
	$rsRT2=mysqli_fetch_array($resultRT2);
	
	
	
		$resultNum=mysqli_query($conn,$strSQLPostDetail);
		$numNum=mysqli_num_rows($resultNum);
	
	

?>
<?php
	$strSQLRT="select * from realty_type where rt_id='$rt_id'";
	$resultRT=mysqli_query($conn,$strSQLRT);
	$rsRT=mysqli_fetch_array($resultRT);
?>
<title><?=$rsRT['rt_name']?></title>

<script src="Controller/page/cPostDetail.js"></script>    	
<div class="blog margin-bottom-5">
		 <!--
			<div class="row" >
				<div class=''>
					<img src='fixBanner/banner668x85.jpg' height="80" width='100%' class='img-thumbnail'>
				</div>
			</div>
		-->
			<div class="row" >
	
				<div class='' id='totalMap' style='height:300px; '>
					
				</div>
			</div>


		 <div class="row">
					<div class="panel  panel-sea" style="margin-bottom: 5px;">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="glyphicon glyphicon-blackboard"></i> ผลการค้นหา "
							
							<?php 
							if($rt_id=='All'){
								echo"สื่อสิ่งพิมพ์ทั้งหมด";
							}else{
							/*
							$strSQLRT="select * from realty_type where rt_id='$rt_id'";
							$resultRT=mysqli_query($conn,$strSQLRT);
							$rsRT=mysqli_fetch_array($resultRT);
							*/
							echo $rsRT['rt_name'];
							}
							?>
							
							"</h3>
						</div>

						

						<div class="panel-body">

											<div class="row">

												<!-- Begin Easy Block -->                
												<div class="col-md-12 col-sm-12">

													

													<div class="easy-block-v2">

													<!-- start button link -->
													<!-- 
													<p>
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-cloud"></i> แชร์ไปที่เฟสบุ๊ค/กูเกิล</button>
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-bell-o"></i>ส่งหน้านี้ให้เพิ่อน</button>
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-envelope-o"></i> เก็บหน้านี้ไว้ดูครั้งหน้า</button> 
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-download"></i>คลิ๊กดูหน้าที่จัดเก็บไว้</button>
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-download"></i>ปริ้น</button>
													
													</p>-->
													<!--end  button link -->
												


													<div class="alert alert-success fade in ">
														<div class="row">
																<div class="col-md-6">
																	<h3 style="margin:0px;">
																	<?php 
																	if($rf_id=='All'){
																		echo"ทุกประเภท(ขาย/เช่า/ขายและเช่า)";
																	}else{
																	$strSQLRF="select * from realty_for where rf_id='$rf_id'";
																	$resultRF=mysqli_query($conn,$strSQLRF);
																	$rsRF=mysqli_fetch_array($resultRF);
																	echo "ประกาศ".$rsRF['rf_name'];
																	}
																	?>
																	
																	</h3>
																</div>
																<!-- <div class="col-md-6" style="text-align:right; padding:2px;">
																	<h3 style="margin:0px;"><?=$rsPostDetail2['rt_name']?></h3>
																</div> -->
														</div>
													</div>

													


												

														<!--<div class="easy-bg-v2 rgba-default">ใหม่</div>
														<img src="assets/img/main/img9.jpg" alt="">       
													
														<ul class="list-unstyled" style="margin-top:2px;">
															<button type="button" class="btn-u btn-u-default" style="height:80px; width:100px;">img1</button>
															<button type="button" class="btn-u btn-u-default" style="height:80px;width:100px;">img2</button>
															<button type="button" class="btn-u btn-u-default" style="height:80px; width:100px;">img3</button>
															<button type="button" class="btn-u btn-u-default" style="height:80px; width:100px;">img4</button>
															<button type="button" class="btn-u btn-u-default" style="height:80px;width:100px;">img5</button>
															<button type="button" class="btn-u btn-u-default" style="height:80px; width:100px;">img6</button>
														</ul>    
															-->
															
													<table id="gridPostDedail">
										                
										                <thead>
										                    <tr>
										                        <th data-field="make">	ค้นหาพบ <?=$numNum;?> รายการ</th>
										                       
										                    </tr>
										                </thead>
										                <tbody>
															<?php 
															while($rsPostDetail=mysqli_fetch_array($resultPostDetail)){															
															?>
															
										                    <tr>
										                        <td>
												                       
												                   
												                  
												              
												              
															<!-- start list realty -->
															<div class="col-md-12 shadow-wrapper">
																<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
																	<!-- <h2><?=$rsPostDetail['rdg_title']?></h2> -->
																	<div class="row">
																		<div class="col-md-3">
																		
																		<?php 
																			$strSQL="select * from realty_images where rdg_id='".$rsPostDetail['rdg_id']."' and  ri_set_first='0'  ORDER BY ri_set_first ";
																			$result=mysqli_query($conn,$strSQL);
																			$i=1;
																			$rs=mysqli_fetch_array($result);
																				//จัดการกับรูปภาพ
																				$thumbnailsPath="realtyPicture/".$rsPostDetail['rdg_id']."/".$rs['ri_id']."/thumbnail";
																				if(!is_dir($thumbnailsPath)){
																					$thumbnailsFile="";
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
																				
																				if($thumbnailsFile==""){
																					?>
																					<img alt="" src="images/billboards_default.jpg" width="300" class="img-responsive img-thumbnail">
																					<?php
																				}else{
																					?>
																					<img alt="" src="<?=$thumbnailsFile?>" width="300" class="img-responsive img-thumbnail">
																					<?php
																				}
																				?>

																				

																				
																				<?php 
																			
																		?>

																		</div>
																		<div class="col-md-9">
																		
																		<?php if(strlen($rsPostDetail['rdg_title'])>300){
																		$rdg_title=mb_substr($rsPostDetail['rdg_title'],0,300,"UTF-8")."...";
																		echo"$rdg_title"."<br>";
																		}else{
																		?>
																		<?=$rsPostDetail['rdg_title']?></b><br>
																		<a href="index.php?page=post_sub_detail&rdg_id=<?=$rsPostDetail['rdg_id']?>" target="_blank">
																		ดูรายละเอียด
																		<!-- <button  type="button" class="btn-u  btn-u-xs btn-u-red"     type="button"><i class="fa fa-search-plus "></i> ดูรายละเอียด</button> -->
																		</a>
																		<?php }?>

																		</div>

																	</div>
																</div>
															</div>
															<!-- end list realty -->
															</td>
															</tr>
															
															<?php
															}
															
															?>
															</tbody>
												          </table>
												          
												          
													</div> 

												</div>
												
												<!-- End Begin Easy Block -->                
															  
											</div>

							  </div>
				</div>
		   </div>
</div>
<!--End Blog Post0-->  
 




