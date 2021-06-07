<?php 
$rdg_id=$_GET['rdg_id'];

if($conn){
	$strSLQBanner1="select * from banner_sum where pic_position='1'";
	$resultBanner1=mysqli_query($conn,$strSLQBanner1);
	
	$strSLQBanner2="select * from banner_sum where pic_position='2'";
	$resultBanner2=mysqli_query($conn,$strSLQBanner2);
	
	$strSLQBanner3="select * from banner_sum where pic_position='3'";
	$resultBanner3=mysqli_query($conn,$strSLQBanner3);
	
	$strSLQBanner4="select * from banner_sum where pic_position='4'";
	$resultBanner4=mysqli_query($conn,$strSLQBanner4);
	
	$strSLQBanner5="select * from banner_sum where pic_position='5'";
	$resultBanner5=mysqli_query($conn,$strSLQBanner5);
	
	
	
	
}
?>
<script src="Controller/page/cRight_content.js"></script>
<style>
	.right_content{
	/* margin-left:2px; */
	}
	.magazine-posts-img{
		padding-left: 5px;
		padding-top:5px;
	}
</style>
<!--Start Right Content -->
<div class='row'>
        	<div class="col-md-4 magazine-page "> 
                <!-- Blog Posts -->
					<?php
					//include("right_ads.php");
					?>
					<?php
						//if($_GET["page"]=="post_sub_detail" or $_GET["page"]=="home"){
						?>
						<!--start  box near realty -->
						<div class="panel panel-sea" >
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-blackboard"></i>ประกาศใกล้เคียง</h3>
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
							$strSQLSimilar="select * from realty_data_general where rdg_status='Y' order by rdg_update desc limit 15 ";
							$resultSimilar=mysqli_query($conn,$strSQLSimilar);
							while($rsSimilar=mysqli_fetch_array($resultSimilar)){
								?>
								<!--start sub box near realty -->
								<tr >
								<td>
	                               <div class="row" style="margin-bottom:5px;">
											<div class="col-md-4">
												<div class="magazine-posts-img">
													<!-- <a href="#"> -->
													<?php 
													$strSQL="select * from realty_images where rdg_id='".$rsSimilar['rdg_id']."' and  ri_set_first='0'  ORDER BY ri_set_first  ";
													$result=mysqli_query($conn,$strSQL);
													$i=1;
													$rs=mysqli_fetch_array($result);
														//จัดการกับรูปภาพ
														$thumbnailsPath="realtyPicture/".$rsSimilar['rdg_id']."/".$rs['ri_id']."/thumbnail/";
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
																					<img alt="" src="images/billboards_default.jpg" width="100%" class="img-thumbnail img-responsive">
																					<?php
																				}else{
																					?>
																					<img alt="" src="<?=$thumbnailsFile?>" width="100%"  class="img-thumbnail img-responsive">
																					<?php
																				}
														?>
														<!--
														<img alt="" src="<?=$thumbnailsFile?>" class="img-responsive">
														-->
													
													<!-- </a>						 -->
												</div>
											</div>
											<div class="col-md-8" style="margin-top:5px;">
												<div style="color:black;">
												<a href="index.php?page=post_sub_detail&rdg_id=<?=$rsSimilar['rdg_id']?>">
												
												<?php if(strlen($rsSimilar['rdg_title'])>55){
												$rdg_title=mb_substr($rsSimilar['rdg_title'],0,55,"UTF-8")."...";
												echo"$rdg_title";
												}else{
												?>
												<?=$rsSimilar['rdg_title']?>
												
												<?php }?>
												</a>
												</div>
												
												<!-- <div><font color="red"><?=number_format($rsSimilar['rdg_price']);?>  บาท</font></div> -->
											</div>
								   	</div>
								    <!-- <hr> -->
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
						<?php
						//}
					?>
				


                <!-- End Blog Posts -->
            </div>
            <!-- End Right Content -->
			</div>