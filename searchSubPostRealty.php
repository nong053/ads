<?php 
function numResultFn($rt_id){
	$strSQLnum="select count(*) as allPage from realty_data_general  where rt_id='".$rt_id."'";
	$result=mysql_query($strSQLnum);
	$rs=mysql_fetch_array($result);
	return $rs['allPage'];
}


function resultUnit(){
	$strSQL="select * from realty_unit order by ru_sort";
	$result=mysql_query($strSQL);
	return $result;
}
include'query_public_transport.php';




?>
 <!--Blog Post0--> 
 		<?php 
 		if($_POST['rdg_address_province_id2']!="" or $_POST['rdg_address_district_id2']!="" or $_POST['rdg_address_sub_district_id2']){
 		?>
 		<script>
 		callProvince("<?=$_POST['rdg_address_province_id2']?>","<?=$_POST['rdg_address_district_id2']?>","<?=$_POST['rdg_address_sub_district_id2']?>","2");
 		callDistrict("<?=$_POST['rdg_address_province_id2']?>","<?=$_POST['rdg_address_district_id2']?>","","2");
 		callSubDistrict("<?=$_POST['rdg_address_district_id2']?>","<?=$_POST['rdg_address_sub_district_id2']?>","2");
 		</script>
 		<?php 
 		}else if($_POST['rdg_address_province_id']!="" or $_POST['rdg_address_district_id']!="" or $_POST['rdg_address_sub_district_id']){
 		?>
 		<script>
 		callProvince("<?=$_POST['rdg_address_province_id']?>","<?=$_POST['rdg_address_district_id']?>","<?=$_POST['rdg_address_sub_district_id']?>","2");
 		callDistrict("<?=$_POST['rdg_address_province_id']?>","<?=$_POST['rdg_address_district_id']?>","","2");
 		callSubDistrict("<?=$_POST['rdg_address_district_id']?>","<?=$_POST['rdg_address_sub_district_id']?>","2");
 		</script>
 		<?php	
 		}else if($_POST['rdg_address_province_id_rent']!="" or $_POST['rdg_address_district_id_rent']!="" or $_POST['rdg_address_sub_district_id_rent']){
		?>
 		<script>
 		callProvince("<?=$_POST['rdg_address_province_id_rent']?>","<?=$_POST['rdg_address_district_id_rent']?>","<?=$_POST['rdg_address_sub_district_id_rent']?>","2");
 		callDistrict("<?=$_POST['rdg_address_province_id_rent']?>","<?=$_POST['rdg_address_district_id_rent']?>","","2");
 		callSubDistrict("<?=$_POST['rdg_address_district_id_rent']?>","<?=$_POST['rdg_address_sub_district_id_rent']?>","2");
 		</script>
 		<?php
		}else{
 		?>
 		<script>
 		callProvince("","","","2");
 		</script>	
 		<?php
 		}
 		?>
	
	
<?php 

if($rsRT2['rt_contructor_yet']=="Y"){

}else{
	

?>									
<div class="row">						
	<form id="formSubPost" name="formSubPost" class="sky-form" id="sky-form4" action="#" novalidate="novalidate">
						<header>
							<div class="headline headline-md">
								
								<h2>ค้นหาประกาศ <span id='realtyName'><?=$_POST['embed_rt_name']?> </span></h2>
							</div>
							<?php 

			if($_POST['search_type']=="1"){
				if($_POST['rdg_rf']=="5"){
					?>
					<input type="radio" name="rdg_rf"  value="1"> ขายขาด
					<input type="radio" name="rdg_rf" checked='checked' value="5"> ขายดาวน์
					<!-- <input type="radio" name="rdg_rf"  value="3"> ขายและเช่า -->
					<?php
				}else if($_POST['rdg_rf']=="1"){
					?>
					<input type="radio" name="rdg_rf" checked='checked' value="1"> ขายขาด
					<input type="radio" name="rdg_rf" value="5"> ขายดาวน์
					<!-- <input type="radio" name="rdg_rf" value="3"> ขายและเช่า -->
					<?php
					
				}else if($_POST['rdg_rf']=="3"){
					?>
					<input type="radio" name="rdg_rf" value="1"> ขายขาด
					<input type="radio" name="rdg_rf" value="5"> ขายดาวน์
					<!-- <input type="radio" name="rdg_rf"  checked='checked' value="3"> ขายและเช่า -->
					<?php
					
				}else{
					?>
					<input type="radio" name="rdg_rf"  value="1"> ขายขาด
					<input type="radio" name="rdg_rf" value="5"> ขายดาวน์
					<!-- <input type="radio" name="rdg_rf"  value="3"> ขายและเช่า -->
					<?php
				}
			}
			if($_POST['search_type']=="2"){	

				 if($_POST['rdg_rf']=="2"){
						?>
						<input type="radio" name="rdg_rf" checked='checked' value="2"> เช่า
						<!-- <input type="radio" name="rdg_rf"   value="3"> ขายและเช่า -->
						<?php
						
					}else if($_POST['rdg_rf']=="3"){
						?>
						<input type="radio" name="rdg_rf"  value="2"> เช่า
						<!-- <input type="radio" name="rdg_rf" checked='checked'  value="3"> ขายและเช่า -->
						<?php
					}
			}
			?>
			
			
		</header>
	
	
		<fieldset> 
			<div class="row">
	
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-2">
				<div class="shadow-wrapper">
					<blockquote class="hero box-shadow shadow-effect-2">
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
									<?php
									if($_POST['rdg_price_start']==""){
										 $rdg_price_start='9999999';
									}else{
										 $rdg_price_start=$_POST['rdg_price_start'];
									}
									
									?>
										<select name="rdg_price_start">
											
											<option value="All" selected="selected" > ราคาขายเริ่มต้น </option>
											<?php 
											for($i=1;$i<=100;$i++){
												$number=(10*$i)*10000;
												$numCommas=number_format($number);
												if($number==$rdg_price_start){
													?>
													<option selected='selected'  value="<?=$number?>"><?=$numCommas?></option>
													<?php
												}else{
													?>
													<option value="<?=$number?>"><?=$numCommas?></option>
													<?php
												}
											}
											?>
										</select>
										<i></i>
									</label>
								</section>
						</div>
	
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
									
										<?php
										if($_POST['rdg_price_end']==""){
											 $rdg_price_end='9999999';
										}else{
											 $rdg_price_end=$_POST['rdg_price_end'];
										}
										?>
										<select name="rdg_price_end">
											<option value="All" selected="" > ราคาขายสูงสุด</option>
											<?php 
											for($i=1;$i<=100;$i++){
												$number=(10*$i)*10000;
												$numCommas=number_format($number);
												if($number == $rdg_price_end){
													?>
													<option selected='selected' value="<?=$number?>"><?=$numCommas?></option>
													<?php
												}else{
													?>
													<option value="<?=$number?>"><?=$numCommas?></option>
													<?php
												}
												
											}
											if(">20000000"==$_POST['rdg_price_end']){
												?>
												<option selected='selected' value=">20000000" selected="" > 20,000,000  ขึ้นไป</option>
												<?php
											}else{
												?>
												<option value=">20000000" > 20,000,000  ขึ้นไป</option>
												<?php
											}
											?>
											
											
										</select>
										<i></i>
									</label>
								</section>
						</div>
	
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select class="AreaSelect" tabindex="2" name="rdg_area_number">
											<option value="All">ขนาดพื้นที่</option>
											<?php 
											for($i=1;$i<=100;$i++){
												if($rdg_area_number==($i*5)){
												?>
												<option selected='seleted' value="<?=$i*5?>"><?=$i*5?></option>
												<?php
												}else{
												?>
												<option value="<?=$i*5?>"><?=$i*5?></option>
												<?php	
												}
												
											}
											?>
											<option value=">500">500  ขึ้นไป</option>
											
											</select>
										<i></i>
									</label>
								</section>
						</div>
	
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select class="UnitSelect" tabindex="3" name="rdg_area_unit">
										<option value="All">หน่วยพื้นที่</option>
										<?php 
										$result=resultUnit();
										while($rs=mysql_fetch_array($result)){
											if($rs['ru_id']==$_POST['rdg_area_unit']){
											?>
												<option selected='selected' value="<?=$rs['ru_id']?>"><?=$rs['ru_name']?></option>
											<?php
											}else{
											?>
												<option value="<?=$rs['ru_id']?>"><?=$rs['ru_name']?></option>
											<?php 
											}	
										}
										?>
											
											</select>
										<i></i>
									</label>
								</section>
						</div>
	
	
					<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select class="Room1Select" tabindex="4" name="rdr_bedroom">
											<option value="All">ห้องนอน</option>
											<?php 
											for($i=1;$i<=300;$i++){
												if($i==$_POST['rdr_bedroom']){
												?>
												<option selected='selected' value="<?=$i?>"><?=$i?></option>
												<?php	
												}else{
												?>
												<option value="<?=$i?>"><?=$i?></option>
												<?php
												}
											}
											?>
										</select>
										<i></i>
									</label>
								</section>
						</div>
						<br style="clear:both">
					</blockquote>
				</div>
				</div>											 
			</div>
			<div class="row">													
				<div class="col-md-12 col-padding-2">
				<label class="input">
					<input type="text" placeholder="ค้นหา" name="searchTxt">
				</label>
				</div>											
			</div>
		</fieldset> 
		<fieldset>   
			<div class="row">
						<div class="col-md-4 col-padding-2">
							 <section>
							 
									<label class="select" id="provinceArea2" >
										
										<i></i>
									</label>
									
								</section>
						</div>
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<label class="select" id="districtArea2">
														<select name="rdg_address_district_id" id="rdg_address_district_id">
															<option selected="" value="All">-- เลือกอำเภอ/เขต --</option>
	
														</select>
										
											<i></i>
										</label>
										<i></i>
									</label>
								</section>
						</div>
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<label class="select" id="subDistrictArea2">
											<select name="rdg_address_sub_district_id" id="rdg_address_sub_district_id">
												<option  selected="" value="All">-- เลือกตำบล/แขวง --</option>
											</select>
											<i></i>
										</label>
										<i></i>
									</label>
								</section>
						</div>
	
						
	
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select name="rdg_address_road">
											<option   value="All">เลือกถนน</option>
											<?php 
												while($rsRoadNo=mysql_fetch_array($resultRoadNo)){
													if($rsRoadNo['rdg_address_road']==$_POST['rdg_address_road'])	{
													?>
													<option selected='selected' value="<?=$rsRoadNo['rdg_address_road']?>"><?=$rsRoadNo['rdg_address_road']?></option>
													<?php
													}else{
													?>
													<option value="<?=$rsRoadNo['rdg_address_road']?>"><?=$rsRoadNo['rdg_address_road']?></option>
													<?php	
													}
												}
											?>
											
										</select>
										<i></i>
									</label>
								</section>
						</div>
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select class="Room1Select" tabindex="4" name="rdg_address_soi">
											<option value="All">เลือกซอย</option>
												<?php 
													while($rsSoi=mysql_fetch_array($resultSoi)){
														if($rsSoi['rdg_address_soi']==$_POST['rdg_address_soi']){
														?>
														<option selected='selected' value="<?=$rsSoi['rdg_address_soi']?>"><?=$rsSoi['rdg_address_soi']?></option>
														<?php
														}else{
														?>
														<option value="<?=$rsSoi['rdg_address_soi']?>"><?=$rsSoi['rdg_address_soi']?></option>
														<?php
														}
													}
												?>
										</select>
										<i></i>
									</label>
								</section>
						</div>
	
	
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select name="rdg_bts">
											<option  selected="" value="All">เลือกรถไฟฟ้าบีทีเอส</option>
												<?php 
												while($rsBTS=mysql_fetch_array($resultBTS)){
													if($rsBTS['pt_id']==$_POST['rdg_bts']){
													?>
													<option selected='selected' value="<?=$rsBTS['pt_id']?>"><?=$rsBTS['pt_detail']?></option>
													<?php
													}else{
													?>
													<option value="<?=$rsBTS['pt_id']?>"><?=$rsBTS['pt_detail']?></option>
													<?php
													}
												}
												?>
										</select>
										<i></i>
									</label>
								</section>
						</div>
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select name="rdg_mrt">
											<option  selected="" value="All">ใกล้รถไฟฟ้าใต้ดิน</option>
											<?php 
												while($rsMRT=mysql_fetch_array($resultMRT)){
													if($rsMRT['pt_id']==$_POST['rdg_mrt']){																				
													?>
													<option selected='selected' value="<?=$rsMRT['pt_id']?>"><?=$rsMRT['pt_detail']?></option>
													<?php
													}else{
													?>
													<option value="<?=$rsMRT['pt_id']?>"><?=$rsMRT['pt_detail']?></option>
													<?php	
													}
												}
												?> 	
										</select>
										<i></i>
									</label>
								</section>
						</div>
	
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select name="rdg_bus">
											<option  value="All">ใกล้สายรถเมย์ ก.ท.ม.</option>
											<?php 
											while($rsBusNo=mysql_fetch_array($resultBusNo)){
												
												if($rsBusNo['rdg_bus']==$_POST['rdg_bus']){
												?>
												<option selected='selected' value="<?=$rsBusNo['rdg_bus']?>"><?=$rsBusNo['rdg_bus']?></option>
												<?php
												}else{
												?>
												<option value="<?=$rsBusNo['rdg_bus']?>"><?=$rsBusNo['rdg_bus']?></option>
												<?php	
												}
											}
											?>
										</select>
										<i></i>
									</label>
								</section>
						</div>
	
						<div class="col-md-4 col-padding-2">
							 <section>
									<label class="select">
										<select name="rdg_harbor">
											<option  selected="" value="All">ใกล้ท่าเรือ</option>
											<?php 
												while($rsHARBOR=mysql_fetch_array($resultHARBOR)){
													if($rsHARBOR['pt_id']==$_POST['rdg_harbor']){
													?>
													<option selected='selected' value="<?=$rsHARBOR['pt_id']?>"><?=$rsHARBOR['pt_detail']?></option>
													<?php
													}else{
													?>
													<option value="<?=$rsHARBOR['pt_id']?>"><?=$rsHARBOR['pt_detail']?></option>
													<?php	
													}
												}
											?>
										</select>
										<i></i>
									</label>
								</section>
						</div>
			</div>
			
			
			
		</fieldset>
		<footer>
			<!-- <button class="btn-u btn-u-light-green" type="submit">บันทึกการค้นหา</button> -->
			<input type='hidden' name='paramAction' value='searchSubPost'>
			<div class="parameterEmbedArea">
			
			<input type='hidden' name='search_type' value='<?=$_POST['search_type']?>'>
			<input type='hidden' name='embed_rt_id' value='<?=$embed_rt_id?>'>
			<input type='hidden' name='embed_rt_name' value='<?=$_POST['embed_rt_name']?>'>
			
			
			</div>
			<button class="btn-u btn-u-dark-blue" type="submit">แจ้งเตือนทางอีเมลล์</button>
			<button class="btn-u btn-u-orange" type="submit ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ค้นหาประกาศ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
		</footer>
		
		
	</form>
</div>
<?php }?>
