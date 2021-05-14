
<?php 
if($conn){
	$sqlSQLCN="select * from realty_type where rt_contructor_yet='N'";
	$resultCN=mysqli_query($conn,$sqlSQLCN);

	
	
	include'query_public_transport.php';
	
	$sqlSQLRT="select * from realty_type order by rt_id";
	$resultTR=mysqli_query($conn,$sqlSQLRT);
	
	$sqlSQLRF="select * from realty_for order by rf_id";
	$resultRF=mysqli_query($conn,$sqlSQLRF);
	
}
?>
<script>
						
</script>	
<script src="Controller/cSearchForSalesRealty.js"></script>
<!-- action="index.php?page=post_detail"  -->

<form id="formSearchForSales" name="formSearchForSales"  class="sky-form" id="sky-form4" method='post' novalidate="novalidate" >
	<header >
		<div class="headline headline-xs">
		
			<h2 style='color:white;'><i class="fa fa-search pull-left2"></i> ค้นหาประกาศ</h2>
			
			<span class='pull-right2'>
				<span class="input-group-btn">                        
					 <button class="btn-u btn-post btn-u-orange" onclick="location.href='member/index.php';">
					 
	                	<i class="fa fa-cloud"></i> ลงประกาศ<font color='white ' style='font-size:16px;'><b> "ฟรี"</b></font>	        
	                  
	                </button>
                </span>
                
               
			</span>
			<br style="clear:both;">
		</div>
		<?php 
		while($rsCN=mysqli_fetch_array($resultCN)){
			?>
			<!-- 
			<button type="button"  id="<?=$rsCN['rt_id']?>" class="btn-u btn-mainmenu mainMenuPost">ขาย<?=$rsCN['rt_name']?></button> 
			 -->
			<?php
		}
		?>
		
		
	
		
	
										</header>
	
							
										
	
										<fieldset>  
										
	  										<div class="row">
	  											<div class="col-md-2 col-padding-2">
													 <section>
														<label class="select">
															<select name="rt_id" id='rt_id'>
																<option value="All" selected="">เลือกสื่อสิ่งพิมพ์ทั้งหมด</option>
																<?php 
																while($rsTR=mysqli_fetch_array($resultTR)){
																	?>
																	<option value="<?=$rsTR['rt_id']?>"><?=$rsTR['rt_name']?></option>
																	<?php
																}
																?>
															<select>
														<i></i>
														</label>
														</section>
												</div>
												
												<div class="col-md-2 col-padding-2">
													 <section>
														<label class="select">
															<select name="rf_id">
																<option value="All" selected="">เลือกประกาศทุกประเภท</option>
																<?php 
																while($rsRF=mysqli_fetch_array($resultRF)){
																	?>
																	<option value="<?=$rsRF['rf_id']?>"><?=$rsRF['rf_name']?></option>
																	<?php
																}
																?>
															<select>
														<i></i>
														</label>
														</section>
												</div>
												
	  										
													<div class="col-md-2 col-padding-2">
															<section>
																<label class="select" id="provinceArea" >
																
																	
																</label>
																<i></i>
															</section>
													</div>
													<div class="col-md-2 col-padding-2">
															<section>
																<label class="select" id="districtArea">
																				<select name="rdg_address_district_id" id="rdg_address_district_id">
																					<option selected="" value="All">เลือกทุกอำเภอ/เขต</option>

																				</select>
																
																	<i></i>
																</label>
															</section>
													</div>
													<div class="col-md-2 col-padding-2">
															<section>
																<label class="select" id="subDistrictArea">
																	<select name="rdg_address_sub_district_id" id="rdg_address_sub_district_id">
																		<option  selected="" value="All">เลือกทุกตำบล/แขวง</option>
																	</select>
																	<i></i>
																</label>
															</section>
													</div>

													<div class="col-md-2 col-padding-2">
														<button type="submit"  class="btn-u btn-u-green btn-search1">
														<i class="fa fa-search"></i> ค้นหา
														</button>
													</div>

													<!-- <div class="col-md-6 col-padding-2">
														<section>
																<input type="text" name="rdg_id" class="form-control" placeholder="กรอกเลขที่ประกาศ">
														</section>
													</div> -->
													
														
					
		</div>
		
		
		
	</fieldset>
	
		<div class='submitSearchL'>
			
			
			<input type="hidden" name="search_type" value='1' >
			<!-- 
			<button class="btn-u  btn-u-xs btn-u-light-green" id="btnSaveSearch" ><i class=" fa fa-folder-open "></i> บันทึกการค้นหา</button>
			<button class="btn-u  btn-u-xs btn-u-dark-blue" ><i class="fa fa-envelope-o"></i> แจ้งเตือนทางอีเมลล์</button>
			 -->
	
		</div>
		
		<div class='submitSearchR'>
			<div id="parameterEmbedAreaSale"></div>
			
		</div>
		
	
	
	
	</form>	
	
	

