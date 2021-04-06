
<?php 
include("realty_split.php");
include_once 'config.inc.php';

	$cus_id=$_GET['cus_id'];
	$strSQLPostDetail="

	
	select rdg.*,rt_name,rf_name,rps_name,c.* from realty_data_general rdg
	LEFT JOIN realty_type rt 
	ON rdg.rt_id=rt.rt_id
	LEFT JOIN realty_for rf
	ON rdg.rf_id=rf.rf_id
	LEFT JOIN realty_project_status rps
	ON rdg.rps_id=rps.rps_id
  LEFT JOIN customer c
	ON c.cus_id=rdg.cus_id
	WHERE  rdg.cus_id='$cus_id'
			
	
	
			";
	$resultPostDetail=mysql_query($strSQLPostDetail);
	
	$strSQLCus="
	select * from customer 
	WHERE  cus_id='$cus_id'
	";
	$resultPostCus=mysql_query($strSQLCus);
	$rsCus=mysql_fetch_array($resultPostCus);
	//$resultPostDetail=pu_query($dbname,$strSQLPostDetail);
	
	

	
	
?>
<script src="Controller/page/cPostDetail.js"></script>    	
<div class="blog margin-bottom-5">
		
		 <div class="row">
					<div class="panel  panel-red" style="margin-bottom: 5px;">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> โปรไฟล์ของ<?=$rsCus['cus_first_name']?></h3>
						</div>
						<div class="panel-body">

											<div class="row">

												<!-- Begin Easy Block -->                
												<div class="col-md-12 col-sm-12">

													

													<div class="easy-block-v2">

													<!-- start button link -->
													<p>
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-cloud"></i> แชร์ไปที่เฟสบุ๊ค/กูเกิล</button>
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-bell-o"></i>ส่งหน้านี้ให้เพิ่อน</button>
														<!-- <button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-envelope-o"></i> เก็บหน้านี้ไว้ดูครั้งหน้า</button> -->
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-download"></i>คลิ๊กดูหน้าที่จัดเก็บไว้</button>
														<button type="button" class="btn-u  btn-u-xs  btn-u-green"><i class="fa fa-download"></i>ปริ้น</button>
													
													</p>
													<!--end  button link -->
												


													

													<div class="alert alert-warning  fade in ">
														<div class="row">
																<div class="col-md-10">
																	<?=$rsCus['cus_other']?>
																</div>
																<div class="col-md-2" style="text-align:right; padding:2px;">
																	<h3 style="margin:0px;"></h3>
																	
																	<?

																		if($rsCus['cus_pic']==""){
																			?>
																			<img alt="" src="images/person2.png" width="80" class="img-responsive">
																			<?
																		}else{
																			?>
																			<img alt="" src="<?=$rsCus['cus_pic']?>" width="80" class="img-responsive">
																			<?
																		}

																	?>
																	<!--
																	<img width="80" border="0" class="rounded-x" src="control-panel/member_img/<?=$rsCus['cus_pic']?>">
																	-->
																	
																</div>
														</div>
													</div>


												

														
															
													<table id="gridPostDedail">
										                <colgroup>
										                    <col />
										                   
										                </colgroup>
										                <thead>
										                    <tr>
										                        <th data-field="make">	ประกาศทั้งหมด</th>
										                       
										                    </tr>
										                </thead>
										                <tbody>
															<?php 
															while($rsPostDetail=mysql_fetch_array($resultPostDetail)){															
															?>
															
										                    <tr>
										                        <td>
												                       
												                   
												                  
												              
												              
															<!-- start list realty -->
															<div class="col-md-12 shadow-wrapper">
																<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
																	<h4><?=$rsPostDetail['rdg_title']?></h4>
																	<div class="row">
																		<div class="col-md-3">
																		
																		<?php 
																			$strSQL="select * from realty_images where rdg_id='".$rsPostDetail['rdg_id']."' and  ri_set_first='0'  ORDER BY ri_set_first ";
																			$result=mysql_query($strSQL);
																			$i=1;
																			$rs=mysql_fetch_array($result);
																				//จัดการกับรูปภาพ
																				$thumbnailsPath="realtyPicture/".$rsPostDetail['rdg_id']."/".$rs[ri_id]."/thumbnail/";
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
																				
																				if($thumbnailsFile==""){
																					?>
																					<img alt="" src="images/billboards_default.jpg" width="300" class="img-responsive">
																					<?
																				}else{
																					?>
																					<img alt="" src="<?=$thumbnailsFile?>" width="300" class="img-responsive">
																					<?
																				}

																				?>

																				<?php 
																			
																		?>

																		</div>
																		<div class="col-md-9">
																		<?=$rsPostDetail['rdg_detail']?><br>

																		<p>
																		<!-- 
																		<button type="button" class="btn-u  btn-u-xs btn-u-green"><i class="fa fa-child "></i> ติดต่อผู้ลงประกาศ</button>
																		<button type="button" class="btn-u  btn-u-xs btn-u-green"><i class="fa  fa-car"></i> แผนที่</button>
																		<button type="button" id="<?=$rsPostDetail['rdg_id']?>" class="btn-u  btn-u-xs btn-u-green btnSavePost"><i class="fa fa-download"></i> เก็บไว้ดูภายหลัง</button>
																		 -->
																		<button type="button" class="btn-u  btn-u-xs btn-u-red"  onclick="window.location.href='index.php?page=post_sub_detail&rdg_id=<?=$rsPostDetail['rdg_id']?>'"  type="button"><i class="fa fa-building "></i> ดูรายละเอียด</button>
																		
																		</p>
																		</div>

																	</div>
																</div>
															</div>
															<!-- end list realty -->
															</td>
															</tr>
															
															<?php
															}
															pu_pageloop();
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

