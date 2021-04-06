<?php 
$rdg_id=$_GET['rdg_id'];

if($conn){
	$strSLQBanner1="select * from banner_sum where pic_position='1'";
	$resultBanner1=mysql_query($strSLQBanner1);
	
	$strSLQBanner2="select * from banner_sum where pic_position='2'";
	$resultBanner2=mysql_query($strSLQBanner2);
	
	$strSLQBanner3="select * from banner_sum where pic_position='3'";
	$resultBanner3=mysql_query($strSLQBanner3);
	
	$strSLQBanner4="select * from banner_sum where pic_position='4'";
	$resultBanner4=mysql_query($strSLQBanner4);
	
	$strSLQBanner5="select * from banner_sum where pic_position='5'";
	$resultBanner5=mysql_query($strSLQBanner5);
	
	
	
	
}
?>
<script src="Controller/page/cRight_content.js"></script>
<style>
	.right_content{
	margin-left:2px;
	}
</style>
<!--Start Right Content -->
        	<div class="col-xs-4 magazine-page "> 
                <!-- Blog Posts -->
                <div class="row">
				<!--Start Ads-->
				<!-- 
					<div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">
					
					<div class="shadow-wrapper">
						<blockquote class="hero box-shadow shadow-effect-2">
							<p style="height:80px;">
							Ads IMG
							</p>
						</blockquote>
					</div>
					
                    </div>
                    -->
					<!--End Ads-->
                    <!-- <div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2"> -->
                        
                        <div class="magazine-posts-img">
                            <a href="#">
                            <?php 
                            $rsBanner1=mysql_fetch_array($resultBanner1);
                            //echo $rsBanner1['pic_name'];
                            ?>
                             <img src="control-panel/mypicture/1/<?=$rsBanner1['pic_name']?>" width="100%" height="100%" />
                            <!-- <img alt="" src="assets/img/main/img10.jpg" class="img-responsive"> -->
                            </a>
                                                      
                        </div>
                    <!--</div>-->

                   <!--  <div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">-->
                        
                        <div class="magazine-posts-img">
                        
                            <a href="#">
                            
                           <?php 
                            $rsBanner2=mysql_fetch_array($resultBanner2);
                            //echo $rsBanner1['pic_name'];
                            ?>
                             <img src="control-panel/mypicture/1/<?=$rsBanner2['pic_name']?>" width="100%" height="100%" />
                            
                            </a>
                                                            
                        </div>
                   <!--  </div>  -->

                   
                 
                 

					<!--  <div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">-->
                        
                        <div class="magazine-posts-img">
                        
                            <a href="#">
                            
                            <?php 
                            $rsBanner3=mysql_fetch_array($resultBanner3);
                            //echo $rsBanner1['pic_name'];
                            ?>
                             <img src="control-panel/mypicture/1/<?=$rsBanner3['pic_name']?>" width="100%" height="100%" />
                            
                            </a>
                                                            
                        </div>
                     <!--  </div> -->
					<!--  <div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">-->
                        
                        <div class="magazine-posts-img">
                            <a href="#">
                            
                            <?php 
                            $rsBanner4=mysql_fetch_array($resultBanner4);
                            //echo $rsBanner1['pic_name'];
                            ?>
                             <img src="control-panel/mypicture/1/<?=$rsBanner4['pic_name']?>" width="100%" height="100%" />
                           
                            </a>
                                                            
                        </div>
                     <!--  </div> -->

				

					<!--  <div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">-->
                        
                        <div class="magazine-posts-img">
                            <a href="#">
                            
                           
                              <?php 
                            $rsBanner5=mysql_fetch_array($resultBanner5);
                            //echo $rsBanner1['pic_name'];
                            ?>
                             <img src="control-panel/mypicture/1/<?=$rsBanner5['pic_name']?>" width="100%" height="100%" />
                           
                            </a>
                                                            
                        </div>
                     <!--  </div> -->
					


					<!--  <div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">-->
                        
                        <div class="row">
								<div class="col-xs-6">
								 <iframe id="ifrmBanner" scrolling="no" src="http://www.bangkokbank.com/MajorRates/MainBannerThai.htm" width="170" height="155" frameborder="0"></iframe> 
								</div>
								<div class="col-xs-6">
								<iframe marginWidth=0 marginHeight=0 src="http://www.bangkokbank.com/fxbanner/banner1.htm" frameBorder=0 width=173 scrolling=no height=165></iframe> 
								</div>
						</div>
						
                      
                       
                   <!--  </div> -->

					<!--Start Ads-->
					<!-- 
					<div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">
						<div class="shadow-wrapper">
							<blockquote class="hero box-shadow shadow-effect-2">
								<p style="height:80px;">
								Ads IMG
								</p>
							</blockquote>
						</div>
                    </div>
                    -->
					<!--End Ads-->

					<!--Start Short Search-->
					<!-- 
				<div class="magazine-posts col-xs-12 col-xs-6 margin-bottom-2">
					<div class="shadow-wrapper">
						<blockquote class="hero box-shadow shadow-effect-2">
							
						
								<div class="headline"><h2>บริการฟรี</h2></div>
								<button type="button" class="btn-u btn-u-blue"><i class="fa fa-cloud"></i>  ลงประกาศขาย</button>
								<button type="button" class="btn-u btn-u-red"><i class="fa fa-bell-o"></i>ลงประกาศให้เช่า</button>
							
						</blockquote>
					</div>
                    </div>
                     -->
					



					




					
                 	 <!-- banking -->
                    <div class="row " style="display:none;"> 
                        <div class="col-xs-12 shadow-wrapper">
	                        <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
	                           <div class="headline"><h2>นับจำนวนผู้เข้าชม</h2></div>
		                        <?php 
		                      	 include("useronline/count_user_over_all.php");
		                        ?>
	                        </div>
	                    </div>                          
                 	</div>
                 	<!-- banking -->
                 	
                 	
                 	

					</div> 
					   
				
					<?php
						if($_GET["page"]=="post_sub_detail"){
						?>
						<!--start  box near realty -->
						<div class="panel panel-sea">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks"></i>ประกาศใกล้เคียง</h3>
                            </div>
                            <div class="panel-body">
							 <!--  grid special start here -->
					        <table class="gridRelate">
								 <colgroup>
									<col />
								 </colgroup>
								 <thead>
								 <tr>
									<th data-field="make">	</th>
								 </tr>
								 </thead>
								 <tbody>
							<?php 
							$strSQLSimilar="select * from realty_data_general where rdg_status='Y' limit 15 ";
							$resultSimilar=mysql_query($strSQLSimilar);
							while($rsSimilar=mysql_fetch_array($resultSimilar)){
								?>
								<!--start sub box near realty -->
								<tr>
								<td>
	                               <div class="row">
											<div class="col-xs-4">
												<div class="magazine-posts-img">
													<a href="#">
													<?php 
													$strSQL="select * from realty_images where rdg_id='".$rsSimilar['rdg_id']."' and  ri_set_first='0'  ORDER BY ri_set_first  ";
													$result=mysql_query($strSQL);
													$i=1;
													$rs=mysql_fetch_array($result);
														//จัดการกับรูปภาพ
														$thumbnailsPath="realtyPicture/".$rsSimilar['rdg_id']."/".$rs['ri_id']."/thumbnail/";
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
														
														<img alt="" src="<?=$thumbnailsFile?>" class="img-responsive">
														
													
													
													</a>						
												</div>
											</div>
											<div class="col-xs-8">
											<b style="color:#1abc9c;">
											<a href="index.php?page=post_sub_detail&rdg_id=<?=$rsSimilar['rdg_id']?>">
											
											<?php if(strlen($rsSimilar[rdg_title])>55){
											$rdg_title=mb_substr($rsSimilar[rdg_title],0,55,"UTF-8")."...";
											echo"$rdg_title";
											}else{
											?>
											<?=$rsSimilar['rdg_title']?></b>
											<?php }?>
											</a>
											
											<font color="red"><?=number_format($rsSimilar['rdg_price']);?>  บาท</font>
											</div>
								   </div>
								    <hr>
								    </td>
								    </tr>
								  <!--end box near realty -->
								<?php
							}
							
							?>
							
							</tbody>
							</table>
							   
                                
                            </div>
                        </div>
						<!--start box near realty -->
						<?
						}
					?>
				


                <!-- End Blog Posts -->
            </div>
            <!-- End Right Content -->