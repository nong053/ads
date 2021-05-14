<script src="Controller/page/cSpecialPost.js"></script>  
<?php 
function numResultFn($rf_id){
	global $conn;
	$strSQLnum="select count(*) as allPage from realty_data_general  where rf_id='".$rf_id."'";
	$result=mysqli_query($conn,$strSQLnum);
	$rs=mysqli_fetch_array($result);
	return $rs['allPage'];
}

$strSLQSCCate="select DISTINCT(rdg.rt_id),rt.* from realty_type  rt
INNER JOIN realty_data_general rdg
on rt.rt_id=rdg.rt_id
order by rdg.rt_id";
$resultSCCate=mysqli_query($conn,$strSLQSCCate);
while($rsSCCate=mysqli_fetch_array($resultSCCate)){

		
		//echo "rt_id=".$rsSCCate['rt_id'];

		$strSLQPsale="
		select rdg.rt_id,rt.rt_name,rdg.cus_id,rf_id,
		rdg.rdg_id,rdg_title,rdg_detail,rdg.rdg_address_no,rdg.rdg_special,
		rdg.rdg_address_province_id,p.PROVINCE_NAME,
		rdg_address_district_id,am.AMPHUR_NAME,
		rdg_address_sub_district_id,d.DISTRICT_NAME,
		rdg_address_road,rdg_post_code,
		rdg_price,rdg_price_down,rdg_price_rent,rdg_price_project,
		rdg_area_number,rdg_area_unit,ru.ru_name,
		rdg_update,
		rdg_status_post,
		rdg.rdg_estate_num,
		(select ru2.ru_name  from realty_unit ru2 where ru2.ru_id= rdg.rdg_estate_unit) as rdg_estate_unit_name,
		c.*
		from realty_data_general rdg
		LEFT JOIN province p
		ON p.PROVINCE_ID=rdg.rdg_address_province_id
		LEFT JOIN amphur am
		ON rdg.rdg_address_district_id=am.AMPHUR_ID
		LEFT JOIN district d
		ON d.DISTRICT_ID=rdg_address_sub_district_id
		LEFT JOIN realty_type rt
		ON rt.rt_id=rdg.rt_id
		LEFT JOIN realty_unit ru 
		on ru.ru_id=rdg.rdg_area_unit
		
		LEFT JOIN customer c
		ON c.cus_id= rdg.cus_id
		where  rdg.rdg_special='Y' and rdg.rdg_status='Y'
		and rdg.rt_id='".$rsSCCate['rt_id']."'	
		order by rdg.rdg_update desc   limit 5
		";
?>
 
<!--Blog Post--> 
<!-- 
<div class="row" >
	<div class='col-md-12'>
		<img src='assets/img/main/img1.jpg' height="80" width='100%'>
	</div>
</div>
-->
<?php
 $resultPsale=mysqli_query($conn,$strSLQPsale);
 $rsnum=mysqli_num_rows($resultPsale);
 if($rsnum==0){
 	//echo "1=".$rsnum;
 }else{
 	//echo "2=".$rsnum;
 
?>
<div class="blog margin-bottom-5">
<div class="row" >
	<div class="panel panel-dark-blue" style="margin-bottom: 5px;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa  fa-line-chart"></i> ประกาศพิเศษ "<?=$rsSCCate['rt_name'];?>"</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                
                                <!--  grid special start here -->
						        <table class="gridSpecialPost" style='width:100%;'>
									
									 <tbody>
                                <?php 
                               
                                while($rsPsale=mysqli_fetch_array($resultPsale)){
                                ?>	
                                
                                		<tr >
					                		<td>
					                		<!--start  post  -->
												<div class="col-md-12 shadow-wrapper" >
													<div class="tag-box tag-box-v1 box-shadow shadow-effect-2" style="background: #ffffce; min-height:105px;">
														
														<!--start button top post -->
														<!--
														<div class="row">
					                                		<div class="col-md-12">
					                                			<p>

																	<button class="btn-u btn-u-xs btn-u-orange" type="button"><i class=" fa fa-search-plus"></i> ค้นหาพบ1<?=numResultFn("1")?> ประกาศหน้าที่ 1 จาก <?=numResultFn("1")?> ประกาศ</button>
																<button class="btn-u btn-u-xs btn-u-orange" type="button"><i class="icon-social-facebook"></i> แซร์ผ่านเฟสบุ๊ค</button> 
																	<button type="button"  onClick="window.open('http://www.facebook.com/sharer.php?u=http://adsthaidd.com/index.php?page=post_sub_detail&rdg_id=<?=$rsPsale['rdg_id']?>')"; class=" btn-u-xs btn btn-facebook-inversed"><i class="fa fa-facebook"></i> แชร์ไปที่เฟสบุ๊ค</button>
																	<button type="button" onClick="window.open('https://plus.google.com/share?url=adsthaidd.com&page=post_sub_detail&rdg_id=<?=$rsPsale['rdg_id']?>')"; class="btn-u  btn-u-xs btn-googleplus-inversed"><i class="fa fa-google-plus"></i> แชร์ไปที่กูเกิล</button>
																	<button class="btn-u btn-u-xs btn-u-orange" type="button"><i class=" icon-printer "></i> ปริ้น</button>
																	
																	 <button class="btn-u btn-u-xs btn-u-orange" type="button"><i class="fa fa-download"></i> บันทึกสิ่งที่ค้นหา</button> 
																	<button class="btn-u btn-u-xs btn-u-orange" type="button"><i class="icon-grid "></i> ประกาศที่บันทึกไว้</button>
																</p>
					                                		</div>
					                                	</div>
					                                	-->
					                                	<!--end button top post -->
														
<!-- 														
														<div class="row">
															<div class="col-md-12">
															<b>(#<?=$rsPsale['rdg_id']?>)
															<?php 
															if($rsPsale['rdg_title']){

															 if(strlen($rsPsale['rdg_title'])>200){
																$text=mb_substr($rsPsale['rdg_title'],0,200,"UTF-8")."...";
																echo"$text"."";
																}else{
																
																echo $rsPsale['rdg_title']."";
																 }
															}
															?>
															<?php 
															if($rsPsale['rf_id']=="1"){//เพื่อขาย
																echo"เพื่อขาย";
															}else if($rsPsale['rf_id']=="2"){//เพื่อเช่า
																echo"เพื่อเช่า ";
															}else if($rsPsale['rf_id']=="3"){//เพื่อขายและเช่า
																echo"เพื่อขายและเช่า ";
																
															}
																
															?>
															
															<?php 
															if($rsPsale['rdg_status_post']=="soldOut"){
															echo "<font color='red'>(ขายแล้ว)</font>";
																
															}else if($rsPsale['rdg_status_post']=="rented"){
															echo "<font color='red'>(เช่าแล้ว)</font>";	
															}
															?>
															</b>
															</div>
															
															
															<brstyle='clear:both'>
														</div> -->

														
														<div class="row">
															<div class="col-md-4 col-xs-12">
															<?php 
															$strSQL="select * from realty_images where rdg_id='".$rsPsale['rdg_id']."' and  ri_set_first='0'  ORDER BY ri_set_first ";
															$result=mysqli_query($conn,$strSQL);
															$i=1;
															while($rs=mysqli_fetch_array($result)){
																//จัดการกับรูปภาพ
																$thumbnailsPath="realtyPicture/".$rsPsale['rdg_id']."/".$rs['ri_id']."/thumbnail/";
																//echo $thumbnailsPath;
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
																
																?>
																<a href="index.php?page=post_sub_detail&rdg_id=<?=$rsPsale['rdg_id']?>&rtc_id=<?=$rsSCCate['rtc_id']?>">
																
																<?php
																
																if($rsCus['thumbnailsFile']==""){
																			?>
																			<img alt="" src="images/billboards_default.jpg" width='100%' class=" img-thumbnail img-responsive">
																			<?php
																		}else{
																			?>
																			<img alt="" src="<?=$thumbnailsFile?>" width='100%' class=" img-thumbnail img-responsive">
																			<?php
																		}
																?>
																</a>
																<?php 
															}
															?>
																
															</div>
															<div class="col-md-8">
															<?php
															
															if($rsPsale['rdg_title']){
																echo "<div>";
															 	if(strlen($rsPsale['rdg_title'])>200){
																$text=mb_substr($rsPsale['rdg_title'],0,200,"UTF-8")."...";
																echo"$text"."";
																}else{
																
																echo $rsPsale['rdg_title'];
																}
																echo"</div>";
															}

															
															?>
															<div>
															<b>ที่อยู่ </b>  
															<?php if($rsPsale['PROVINCE_NAME'])echo"จังหวัด" .$rsPsale['PROVINCE_NAME'];?>
															<?php if($rsPsale['AMPHUR_NAME'])echo"อำเภอ/เขต:" .$rsPsale['AMPHUR_NAME']; ?>
															<?php if($rsPsale['DISTRICT_NAME'])echo"ตำบล/แขวง:" .$rsPsale['DISTRICT_NAME'];?>
															<?php if($rsPsale['rdg_address_no'])echo"เลขที่: ". $rsPsale['rdg_address_no'];?>
															<?php if($rsPsale['rdg_post_code'])echo"รหัสไปษณีย์:". $rsPsale['rdg_post_code'];?>
															
															</div>

															<?php
															if($rsPsale['rf_id']=="1"){//เพื่อขาย
																echo"<div><b>ราคาขาย</b>";
																if($rsPsale['rdg_price']){
																 echo " <span style='color:red;font-weight:bold;'>".number_format($rsPsale['rdg_price'])."</span> บาท";
																 
																}else{
																?>
																--
																	<!-- <button data-target="#contactFormModal" data-toggle="modal" class="btn-u btn-u-xs btn-u-green contactFormModal" type="button" id="<?=$rsPsale['cus_id']?>"><i class="fa fa-child "></i> ติดต่อผู้ลงประกาศ</button> -->
																<?php
																}
																echo"</div>";
																
															}else if($rsPsale['rf_id']=="2"){//เพื่อเช่า
																echo"<div><b>ราคาเช่า</b>";
																if($rsPsale['rdg_price_rent']){ echo  "<span style='color:red;font-weight:bold;'>".number_format($rsPsale['rdg_price_rent'])."</span> บาท";
																}else{
																	?>
																	--
																	<!-- <button data-target="#contactFormModal" data-toggle="modal" class="btn-u btn-u-xs btn-u-green contactFormModal" type="button" id="<?=$rsPsale['cus_id']?>"><i class="fa fa-child "></i> ติดต่อผู้ลงประกาศ</button> -->
																<?php
																}
																echo"</div>";
																
															}else if($rsPsale['rf_id']=="3"){//เพื่อขายและเช่า
																//echo "rdg_price=".$rsPsale['rdg_price'];
																echo"<div><b>ราคาขาย</b>";
																if($rsPsale['rdg_price']!="" and $rsPsale['rdg_price']!='0'){ 
																echo  "0 <span style='color:red;font-weight:bold;'>".number_format($rsPsale['rdg_price'])."</span> บาท";
																}
																
																
																echo"<b>,ราคาเช่า</b>";
																if($rsPsale['rdg_price_rent']!="" and $rsPsale['rdg_price_rent']!='0')  echo  " <span style='color:red;font-weight:bold;'>".number_format($rsPsale['rdg_price_rent'])."</span> บาท";
																
																if($rsPsale['rdg_price']=="" or $rsPsale['rdg_price']=='0'  or $rsPsale['rdg_price_rent']=="" or $rsPsale['rdg_price_rent']=="0"){														
																	?>
																	<!-- <button data-target="#contactFormModal" data-toggle="modal" class="btn-u btn-u-xs btn-u-green contactFormModal" type="button" id="<?=$rsPsale['cus_id']?>"><i class="fa fa-child "></i> ติดต่อผู้ลงประกาศ</button> -->
																<?php 
																}
																echo"</div>";
															}
															
															
															?>
																
															
																<div id="testimonials-9" class="">
																		<div class="font-small">
																			<div class="item active">
																			<?php 
																			$strSQLCountHit="SELECT * FROM counter1_realty where  rdg_id='".$rsPsale['rdg_id']."'";
																			$resultCountHit=mysqli_query($conn,$strSQLCountHit);
																			$num=mysqli_num_rows($resultCountHit);
																			?>	
																				<a  href="index.php?page=post_sub_detail&rdg_id=<?=$rsPsale['rdg_id']?>">		
																					<span  class="box-margin-top5" type="button"><i class="fa  fa-eye "></i> รายละเอียด</span>
																				</a>															
																				<span style='text-align:center'> ดู <?=number_format($num)?> ครั้ง</span>
																				<!-- 
																				<div class="testimonial-info">
																					<span class="testimonial-author"><em>นับผู้เข้าชม</em>
																					</span>
																				</div>
																				 -->
																			</div>
																			
																		</div>
																		
																	</div>

																




																	<!--new -->
																		
																		
																	
																	
																	<!-- profile start -->
																	<div>	
																	<a href="index.php?page=profile_post&cus_id=<?=$rsPsale['cus_id']?>">
																	
																	
																	<?php
	/*
																		if($rsCus['cus_pic']==""){
																			?>
																			<img alt="" style='margin-top:5px; opacity:0.3;' src="images/person2.png" width="50" class="img-responsive rounded-x">
																			<?php
																		}else{
																			?>
																			<img alt="" style='margin-top:5px;' src="<?=$rsCus['cus_pic']?>" width="50" class="img-responsive rounded-x">
																			<?php
																		}
*/
																	?>
																		
																	<div class='font-small' style=''><i class="fa  fa-info-circle "></i> โปรไฟล์</div>
																	</a>
																		
																	</div>
																	<!-- profile end -->
																		
																	
																	<!--new -->
															 
															
															
															
															<!-- 
															<span style='font-size: 11px;'>
															แก้ไขล่าสุด
															<?php
															
															$eng_date=strtotime($rsPsale['rdg_update']);
															echo thai_date($eng_date);
															?>
															</span>
															 -->
															</div>
							
														</div>
														<!-- 
														<div class="row box-margin-top5">
															<div class="col-md-8">
																<p>
																<button data-target="#contactFormModal" data-toggle="modal" class="btn-u btn-u-xs btn-u-green contactFormModal" type="button" id="<?=$rsPsale['cus_id']?>"><i class="fa fa-child "></i> ติดต่อผู้ลงประกาศ</button>
																<button data-target="#mapContactModal" data-toggle="modal" class="btn-u btn-u-xs btn-u-green mapContactModal" type="button" id="<?=$rsPsale['rdg_id']?>"><i class="fa  fa-car"></i> แผนที่</button>
																<button data-target="#imageSlideModal" data-toggle="modal" class="btn-u btn-u-xs btn-u-green imageSlideModal" type="button" id="<?=$rsPsale['rdg_id']?>"><i class="glyphicon glyphicon-picture"></i> ภาพสไลด์</button>
																
																</p>
															</div>
														</div>
														 -->
													</div>
												</div>
									<!-- end  post  -->	
					                		</td>
					                	</tr>
													
										               
										               
									
								<?php 
									}
                                ?>
                              				
								</tbody>
							</table>
							<!-- grid table end --> 
										              
			</div>					
		</div>
      </div>
</div>



  
 </div>

 

 	<?php 
 		}
	}
	
 	?>
 
 <script>
 	/*
	$("#saveForLater").click(function(){
		alert("บันทึกประกาศเพื่อเก็บไว้ดูภายหลังเรียบร้อย");
	});
	*/
</script>
  <div aria-labelledby="contactFormModal" role="dialog" tabindex="-1" class="modal fade" id="contactFormModal" style="display: none;">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 id="gridModalLabel" class="modal-title">ติดต่อเจ้าของไปทางประกาศ</h4>
        </div>
        <div class="modal-body">
        
          	 <!-- from contract area start -->
	         <div id="contracFormtArea"></div>
	      	 <!-- from contract area end --> 
	        
        </div>
        <!-- 
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>
         -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  <div aria-labelledby="mapContactModal" role="dialog" tabindex="-1" class="modal fade" id="mapContactModal" style="display: none;">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 id="gridModalLabel" class="modal-title">แผนที่</h4>
        </div>
        <div class="modal-body" >
          	 <!-- from contract area start -->
	         <div id="mapArea" style="width:570px; height:400px;"></div>
	      	 <!-- from contract area end --> 
        </div>
        <!-- 
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>
         -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <div aria-labelledby="imageSlideModal" role="dialog" tabindex="-1" class="modal fade" id="imageSlideModal" style="display: none;">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 id="gridModalLabel" class="modal-title">รูปภาพ</h4>
        </div>
        <div class="modal-body">
        
          <div id="galleryRealtyArea"></div>
          <!-- 
         <img alt="" src="assets/img/main/img9.jpg" width="550">
         <ul style="margin-top:2px;" class="list-unstyled">
			<button style="height:80px; width:100px;" class="btn-u btn-u-default" type="button">img1</button>
			<button style="height:80px;width:100px;" class="btn-u btn-u-default" type="button">img2</button>
			<button style="height:80px; width:100px;" class="btn-u btn-u-default" type="button">img3</button>
			<button style="height:80px; width:100px;" class="btn-u btn-u-default" type="button">img4</button>
			<button style="height:80px;width:100px;" class="btn-u btn-u-default" type="button">img5</button>
		</ul>
           -->
        </div>
        <!-- 
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>
         -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>