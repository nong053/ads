<script src='Controller/cSavedPost.js'></script>
<div class="easy-block-v2">

	<!-- start button link -->
	<p>
		<button class="btn-u btn-u-green" type="button"><i class="fa fa-cloud"></i> แชร์ไปที่เฟสบุ๊ค/กูเกิล</button>
		<button class="btn-u btn-u-green" type="button"><i class="fa fa-bell-o"></i>ส่งหน้านี้ให้เพิ่อน</button>
	
		
		<button class="btn-u btn-u-green" type="button"><i class="fa fa-download"></i>ปริ้น</button>
	
	</p>
	<!--end  button link -->



	<div class="alert alert-success fade in ">
		<div class="row">
				<div class="col-md-6">
					<h3 style="margin:0px;">ประกาศที่ถูกบันทึกไว้</h3>
				</div>
				
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
			
			
				<?php 
				if($conn){
					$strSQLSavedPost="select * from realty_save_post where cus_id='$cus_id'";
					$resultSavedPost=mysql_query($strSQLSavedPost);
					
					while($rsSavedPost=mysql_fetch_array($resultSavedPost)){
							
							$strSQLSP2="select * from realty_data_general where rdg_id='".$rsSavedPost['rdg_id']."'";
							$resultSP2=mysql_query($strSQLSP2);
							$rsSP2=mysql_fetch_array($resultSP2);
							
							//echo $rsSP2['rdg_id'];
							?>
							<!-- start list realty -->
							<div class="col-md-12 shadow-wrapper">
								<div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
									<h2><?=$rsSP2['rdg_title']?></h2>
									<div class="row">
										<div class="col-md-3">
										<?php 
													$strSQL="select * from realty_images where rdg_id='".$rsSP2['rdg_id']."' and  ri_set_first='0'  ORDER BY ri_set_first ";
													$result=mysql_query($strSQL);
													$i=1;
													$rs=mysql_fetch_array($result);
														//จัดการกับรูปภาพ
														$thumbnailsPath="realtyPicture/".$rsSP2['rdg_id']."/".$rs['ri_id']."/thumbnail/";
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
										<img width="300" class="img-responsive" src="<?=$thumbnailsFile?>" alt="">
												
										</div>
										<div class="col-md-9">
										<?=$rsSP2['rdg_detail']?>
				
										<p>
											<button class="btn-u  btn-u-xs btn-u-green" type="button"><i class="fa fa-child "></i> ติดต่อผู้ลงประกาศ</button>
										<button class="btn-u  btn-u-xs btn-u-green" type="button"><i class="fa  fa-car"></i> แผนที่</button>
										
										<button onclick="window.location.href='index.php?page=post_sub_detail'" class="btn-u  btn-u-xs btn-u-red" type="button"><i class="fa fa-building "></i> ดูรายละเอียด</button>
										<button  class="btn-u  btn-u-xs btn-u-red btnDelSavedPost" id="<?=$rsSP2['rdg_id']?>" type="button"><i class="fa fa-building "></i> ลบ</button>
										
										</p>
										</div>
				
									</div>
								</div>
							</div>
							<!-- end list realty -->
							<?php
					}
					
					
					
				}
				?>														
			
																		
			
																		
	</div>