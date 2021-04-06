<?php session_start();
include("../config.inc.php");
?>
<!-- Tabs -->
<div class="tab-v1">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#mainData" data-toggle="tab">ข้อมูลทั่วไป</a></li>
		<li><a href="#detailData" data-toggle="tab">รายละเอียดเพิ่มเติม</a></li>
		<li><a href="#imageVideo" data-toggle="tab">รูปภาพ/วีดีโอ</a></li>
		<li><a href="#summary" data-toggle="tab">สรุป</a></li>
	</ul>                
	<div class="tab-content">
		<!-- mainData  -->
		<div class="tab-pane fade in active" id="mainData">
					 <!-- start content mainData-->
					 <form role="form" id="formRealtyDataGe" name="formRealtyDataGe" class="form-horizontal" action="#">
						<div class="headline"><h4>ข้อมูลอสังหาริมทรัพย์</h4></div>
							<div class="form-group">
								<label class="col-lg-3 control-label" > ประกาศสำหรับ</label>
								<div id="realtyForArea"></div>
							</div>
							
							<div class="form-group">
								<label class="col-lg-3 control-label"> ประเภทประกาศ</label>
								<div class="col-lg-9 control-label-l">
									<?php 
								
									if($_SESSION['sesSpecialPost']=="N"){
										?>
										<div class="rdg_special_text">ประกาศฟรี</div>
										<?php
									}else{
										?>
										<div class="rdg_special_text">ประกาศพิเศษ</div>
										<?php
									}
									?>
								</div>
							</div>
							
							<div class="form-group">
							
								<label class="col-lg-3 control-label"> ประเภทประกาศ</label>
								
								<?php 
								
								$sqlSQLRT="select * from realty_type where rt_id='".$_SESSION['sesRtID']."'";
								$resultRT=mysql_query($sqlSQLRT);
								$rsRT=mysql_fetch_array($resultRT);
								?>
								<div class="control-label-l">	<?=$rsRT['rt_name']?>	</div>
								<!-- 
								<div id="realtyForArea">
									<div class="optonArea">
										<div class="checkbox">
											<label>
											<div id="realtyType1Area" class="disPlaInline">
											
											<input type="radio" name="realtyType1" class="realtyType1"  id="realtyType1Realty" value="N" checked="checked"> อสังหาริมทรัพย์ทั่วไป 
											<input type="radio" name="realtyType1" class="realtyType1" value="Y"> สำหรับผู้รับเหมา 
											
											</div>
											<label class="select" id="realtyTypeArea"> 
											</label>
											
										</div>
									</div>
								</div>
								 -->
								
							</div>
							
							
							
							
							<!--start form-group-->
							<!--
							 <div class="form-group">
								<label class="col-lg-3 control-label" for="realtyType">  เลือกประเภทอสังหาริมทรัพย์ </label>
								<div class=" col-lg-5">
									
									 <label class="select" id="realtyTypeArea"> -->
										<!-- 
																		<select name="realtyType" id="realtyType">
																		
																			<option disabled=""  value="0">---- รายการอสังหาริมทรัพย์ ----</option>
																				<option value="realty1">โครงการใหม่</option> 
																				<option selected="selected"  value="realty2">บ้าน</option> 
																				<option value="realty3">คอนโดมิเนียม	</option>
																				<option value="realty4">ทาว์นเฮ้าส์/ทาว์นโฮม	</option>
																				<option value="realty5">เกส์ตเฮ้าส์ </option>
																				<option value="realty6">โฮมออฟฟิศ </option>
																				<option value="realty7">โรงงาน/โกดัง</option>
																				<option value="realty8">ที่ดิน</option> 
																				<option value="realty9">อพาร์ทเม้นท์</option> 
																				<option value="realty10">เชิงพาณิชย์</option> 
																				<option value="realty11">หอพัก </option> 
																				<option value="realty12">โรงแรม </option> 
																				<option value="realty13">รีสอร์ท </option> 
																				<option value="realty14">อาคารสํานักงาน </option> 
																				<option value="realty15">อสังหาริมทรัพย์อื่นๆ </option> 
																				<option value="">---- รายการผู้รับเหมา  ----</option> 
																				<option value="contractor1">ผู้รับเหมาฐานราก </option> 
																				<option value="contractor2">ผู้รับเหมาตกแต่ง </option> 
																				<option value="contractor3">อพาร์ทเม้นท์</option> 
																				<option value="contractor4">รายการรับเหมาอื่นๆ </option> 
																				
																		</select>
 																		
																		<i></i>
																	</label>
																
																</div>
															</div>
															-->
							<!--end form-group-->
							
							

							

							<div class="form-group">
								<label class="col-lg-3 control-label" for="rdg_title"> หัวข้อประกาศ </label>
								<div class="col-lg-9">
									<input type="text" placeholder="หัวข้อประกาศ" id="rdg_title" name="rdg_title" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label" for="rdg_detail"> รายละเอียดประกาศ </label>
								<div class="col-lg-9">
									<textarea placeholder="รายละเอียดประกาศ" rows="6" id="rdg_detail" name="rdg_detail" class="form-control"></textarea>
								</div>
							</div>
							
							
							
			                    
			                
							
							<div class="alert alert-success fade in margin-bottom-40 newProjectRealty">
							<!-- start status project  -->
							<div class="form-group ">
									<label class="col-lg-3 control-label" for="realtyType">  สถานะโครงการ</label>
									<div class=" col-lg-5">
										<label class="select" id="areaProjectStatus">
											<!-- 
											<select name="realtyType">
												<option disabled="" selected="" value="0">---- รายการสถานะโครงการ ----</option>
													<option value="1">โครงการกําลังสร้าง	</option> 
													<option value="2">โครงการเปิดจองก่อนเริ่มสร้าง</option> 
													<option value="3">โครงการพึ่งสร้างเสร็จห้องเปล่า </option> 
													<option value="4">โครงการพึ่งสร้างเสร็จกําลังตกแต่งภายใน </option> 
													<option value="5">โครงการสร้างเสร็จพร้อมตกแต่งภายใน </option> 
													<option value="5">โครงการสร้างเสร็จพร้อมตกแต่งเฟอร์นิเจอร์  </option> 
													<option value="5">โครงการพึ่งสร้างเสร็จพร้อม   </option> 
													<option value="5">โครงการพึ่งสร้างเสร็จพร้อมอยู่   </option> 
											</select>
											 -->
											<i></i>
										</label>
									
									</div>
								</div>
								
								
							<!-- end status project  -->
															
															<div class="form-group newProjectRealty">
																		<label class="col-lg-3 control-label" for="rdg_name_project"> ชื่อโครงการ</label>
																		<div class="col-lg-5">
																			<input type="text" placeholder="ชื่อโครงการ" id="rdg_name_project" name="rdg_name_project" class="form-control">
																		</div>
															</div>
															<div class="form-group newProjectRealty">
																<label class="col-lg-3 control-label" for="rdg_owner_project"> เจ้าของโครงการ (ชื่อบริษัทหรือผู้จดทะเบียนกรรมสิทธิ์)  </label>
																<div class="col-lg-9">
																	<input type="text" placeholder="เจ้าของโครงการ" id="rdg_owner_project" name="rdg_owner_project" class="form-control">
																</div>
															</div>
															
															<div class="form-group newProjectRealty">
																<label class="col-lg-3 control-label" for="rdg_address_project"> ที่อยู่โครงการ  </label>
																<div class="col-lg-9">
																	<textarea placeholder="ทีอยู่โครงการ" id="rdg_address_project" name="rdg_address_project" class="form-control"></textarea>
																</div>
															</div>
															<div class="form-group newProjectRealty">
																<label for="rdg_price" class="col-lg-3 control-label"> ราคาโครงการเริ่มต้น </label>
																<div class="col-lg-5">
																	<input type="text" class="form-control" name="rdg_price_project" id="rdg_price_project" placeholder="ราคา">
																</div>
															</div>
															
															</div>
															
 
															<div class="headline"><h4>รายละเอียดที่ตั้ง</h4></div>
																	
																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_address_province_id">  จังหวัด</label>
																		<div class=" col-lg-5">
																			<label class="select" id="provinceArea">
																				<select name="rdg_address_province_id" id="rdg_address_province_id">
																						<option disabled="" selected="" value="0">-- กรุณาเลือกจังหวัด --</option>
																						<option value="1">กรุงเทพ</option> 
																						 <option value="2">นครนายก </option> 
																						<option value="3"> ปราจีนบุรี </option> 
																						<option value="4"> สระแก้ว </option> 
																						<option value="5"> ฉะเชิงเทรา </option> 
																						<option value="6"> ชลบุรี </option> 
																						<option value="7"> ระยอง </option> 
																						<option value="8"> จันทบุรี </option> 
																						<option value="9"> ตราด  </option> 
 
																				</select>

																				<i></i>
																			</label>
																		</div>
																	</div>



																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_address_district_id">  อำเภอ/เขต:</label>
																		<div class=" col-lg-5">
																			<label class="select" id="districtArea">
																				<select name="rdg_address_district_id" id="rdg_address_district_id">
																					<option disabled="" selected="" value="0">-- กรุณาเลือกอำเภอ/เขต --</option>

																				</select>

																				<i></i>
																			</label>
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_address_sub_district_id">  * ตำบล/แขวง:</label>
																		<div class=" col-lg-5">


																			<label class="select" id="subDistrictArea">
																				<select name="rdg_address_sub_district_id" id="rdg_address_sub_district_id">
																					<option disabled="" selected="" value="0">-- กรุณาเลือกตำบล/แขวง --</option>
																				</select>

																				<i></i>
																			</label>
																		</div>
																	</div>

																	

																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_address_no"> เลขที่ </label>
																		<div class="col-lg-2">
																			<input type="text" placeholder="เลขที่" name="rdg_address_no" id="rdg_address_no" class="form-control">
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_address_road"> ถนน</label>
																		<div class="col-lg-5">
																			<input type="text" placeholder="ถนน" name="rdg_address_road" id="rdg_address_road" class="form-control">
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_address_post_code"> รหัสไปรษณีย์</label>
																		<div class="col-lg-2">
																			<input type="text" placeholder="รหัสไปรษณีย์" name="rdg_address_post_code" id="rdg_address_post_code" class="form-control">
																		</div>
																	</div>

																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_map"> ปักหมุดแผนที่</label>
																		<div class="col-lg-9 " > <button class="btn-u btn-u-orange" id="btnCreateMarker">คลิ๊กเพื่อปักหมุด</button></div>
																		<div class="col-lg-12">
																			
																			
																			 	<div id="map-canvas"></div>
																				<p id="demo"></p>
																		</div>
																	</div>

															
															<div class="showForRealty">
															<div class="headline"><h4>ข้อมูลด้านราคา</h4></div>

																	<div class="form-group rdg_price_area">
																		<label class="col-lg-3 control-label" for="rdg_price"> ราคาขาย </label>
																		<div class="col-lg-5">
																			<input type="text" placeholder="ราคา" id="rdg_price" name="rdg_price" class="form-control">
																		</div>
																	</div>
																	<div class="form-group rdg_price_rent_area">
																		<label class="col-lg-3 control-label" for="rdg_price_rent"> ราคาเช่า </label>
																		<div class="col-lg-5">
																			<input type="text" placeholder="ราคา" id="rdg_price_rent" name="rdg_price_rent" class="form-control">
																		</div>
																	</div>
																	<div class="form-group rdg_price_down_area">
																		<label class="col-lg-3 control-label" for="rdg_price_down"> ราคาขายดาวน์ </label>
																		<div class="col-lg-5">
																			<input type="text" placeholder="ราคา" id="rdg_price_down" name="rdg_price_down" class="form-control">
																		</div>
																	</div>
															</div>
															
															<div class="headline"><h4>ข้อมูลด้านการเเดินทาง(ในเขตกรุงเทพและปริมณฑล)</h4></div>
																
																
																	<div class="form-group">
																		<label class="col-lg-3 control-label" for=""> สายรถไฟฟ้า BTS </label>
																		<div class="col-lg-5" id="travelByBTSArea">
																		
																		
																		
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-lg-3 control-label" for=""> สายรถไฟฟ้า MRT</label>
																		<div class="col-lg-5" id="travelByMRTArea">
																			
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-lg-3 control-label" for=""> สายรถไฟฟ้า ARL</label>
																		<div class="col-lg-5" id="travelByARLArea">
																			
																		</div>
																	</div>
																	
																	
																	<div class="form-group">
																		<label class="col-lg-3 control-label" for=""> เรือโดยสาร</label>
																		<div class="col-lg-5" id="travelByHARBORArea">
																			
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_bus"> สายรถประจำทาง</label>
																		<div class="col-lg-3">
																				<input type="text" class="form-control" id="rdg_bus" name="rdg_bus" placeholder="สายรถประจำทางเช่น 80,113">
																		</div>
																	</div>
																	
																
																
																<div class="">	
																<div class="headline"><h4>พื้นที่อสังหาริมทรัพย์ </h4></div>

																	<div class="form-group">
																		<label class="col-lg-3 control-label" for="rdg_area_number"> </label>
																		<div class="col-lg-2">
																			<input type="text" placeholder="ใส่ตัวเลขเท่านั้น" id="rdg_area_number" name="rdg_area_number" class="form-control">
																			
																		</div>

																		<div class=" col-lg-2">


																			<label class="select" id="realtyUnitArea">
																				<!-- 
												<select name="rdg_area_unit">
													<option value="0" selected="" disabled="">-- กรุณาเลือกหน่วย --</option>
													

														 <option value="1">ตารางเมตร</option> ี
														 <option value="2">ตารางเมตร</option> 
														 <option value="3">ไร่</option> 
														 <option value="4">งาน </option>
														 <option>ห้อง </option> ่
														<option value="5"> หลัง</option> 
														<option value="6"> แพ </option> 
														
												</select>
													 -->
												<i></i>
											</label>
										</div>
										
									</div>
								</div>

								

							<div class="form-group">
								<div class="col-lg-offset-3 col-lg-9">
									<input type="hidden" name="paramAction" id="paramAction" value="realtyDataGeneralSave">
									
									<div id="paramEmbedRdgIdArea"></div>
									<div id="paramLatLong"></div>
									<button id="saveStep1" class="btn-u btn-u-green" type="button">  ถัดไป  </button>
								</div>
							</div>
					</form>
		<!-- End content mainData-->
		</div>
		<!-- End mainData -->
		 <!--Start detailData  -->
		<div class="tab-pane fade in " id="detailData">


				<div id="detailDataPost"></div>


			<br style="clear:both">

			
			<br style="clear:both">

		</div>
		<!-- End detailData -->

		<!-- imageVideo -->
		
		<div class="tab-pane fade" id="imageVideo">
		<div id="imageVideoArea"></div>
		
		


		</div>
		
		<!-- End imageVideo -->

		<!-- summary -->
		<div class="tab-pane fade" id="summary">
		<div id="summaryArea"></div>
				

		</div>
		<!-- End summary -->
		

	</div>
</div>
<!-- End Tabs-->