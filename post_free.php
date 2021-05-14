<style>


 @media (min-width: 768px) {
     .postFreeImage {
      width: 100%;
	  height:100%;
    } 
  }
  @media (min-width: 992px) {
    .postFreeImage {
		/* width: 100%; */
        height:100px;
   
    }
  }

</style>
<div class="blog margin-bottom-5">
<div class="row">
	<div style="margin-bottom: 5px;" class="panel panel-dark-blue">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa  fa-line-chart"></i>ประกาศสื่อสิ่งพิมพ์ล่าสุด</h3>
                            </div>
                            <div class="panel-body">
	                                <div class="row">
		                               
		                             
									 	<!-- start -->
										  <?php 
										 $strSQLPostDetail2="
										 
										 select rdg.*,rt_name,rf_name,rps_name from realty_data_general rdg
										 LEFT JOIN realty_type rt
										 ON rdg.rt_id=rt.rt_id
										 LEFT JOIN realty_for rf
										 ON rdg.rf_id=rf.rf_id
										 LEFT JOIN realty_project_status rps
										 ON rdg.rps_id=rps.rps_id
										-- where 
										-- rdg.rdg_special='N'
										order by rdg.rdg_update desc
										limit 10
					
										
										 ";
										 $resultPostDetail2=mysqli_query($conn,$strSQLPostDetail2);
										 
										while($rsPostDetail=mysqli_fetch_array($resultPostDetail2)){															
										?>
								
										<!-- start list realty -->
										<div class="col-md-6 shadow-wrapper" >
											<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
												 <!--
												 <h2>1-><?=$rsPostDetail['rdg_title']?></h2> 
												  <h2>2-><?=$rsPostDetail['rdg_id']?></h2> 
													-->	
												<div class="row postFreeHome">
													<div class="col-md-4">
												
													
													<!-- PIC -->
													<?php 
														$strSQL="select * from realty_images where rdg_id='".$rsPostDetail['rdg_id']."' and  ri_set_first='0'  ORDER BY ri_set_first ";
													  // echo $strSQL;
														$result=mysqli_query($conn,$strSQL);
														$i=1;
														$rs=mysqli_fetch_array($result);
															//จัดการกับรูปภาพ
															$thumbnailsPath="realtyPicture/".$rsPostDetail['rdg_id']."/".$rs['ri_id']."/thumbnail/";
															//echo "thumbnailsPath=".$thumbnailsPath;
															if(!is_dir($thumbnailsPath)){
																$thumbnailsFile="";
															}else{ //else
														
																if($handle= opendir($thumbnailsPath)){
																	$imagesFiles = array();
																	while(false!=($file=readdir($handle))){
																		if($file!="." && $file!=".."){
																			$thumbnailsFile = $thumbnailsPath."/".$file;
																			//echo "thumbnailsFile2=".$thumbnailsFile;
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
																					<img alt="<?=$rsPostDetail['rdg_title']?>" src="images/billboards_default.jpg"   class="img-responsive  img-thumbnail postFreeImage">
																					<?php
																				}else{
																					?>
																					<img alt="<?=$rsPostDetail['rdg_title']?>" src="<?=$thumbnailsFile?>"  class="img-responsive  img-thumbnail postFreeImage">
																					<?php
																				}
															
															?>
															<!--
															<img alt="" src="<?=$thumbnailsFile?>" width="300" class="img-responsive">
															-->
															<a href="index.php?page=post_sub_detail&rdg_id=<?=$rsPostDetail['rdg_id']?>" target="_blank">
															<button type="button" class="btn-u  btn-u-xs btn-u-red" style='width:100%;'    type="button"><i class="fa  fa-eye "></i> ดูรายละเอียด</button>
															</a>
														<!-- PIC -->

													</div>
													<div class="col-md-8">
													
													<!-- DETAIL -->
														
													
												
													<?php if(strlen($rsPostDetail['rdg_title'])>100){
													$rdg_detail=mb_substr($rsPostDetail['rdg_title'],0,100,"UTF-8")."...";
													echo"$rdg_detail"."<br>";
													}else{
													?>
													<?=$rsPostDetail['rdg_title']?>
													<?php }?>
													
													
													<!-- DETAIL -->
													
													</div>

												</div>
											</div>
										</div>
										<!-- <br style='clear:both'> -->
										<!-- end list realty -->
										<?php
										}
										
										?>
										<!-- end -->
										          
									</div>					
								</div>
						      </div>
	</div>
 </div>