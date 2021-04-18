<?php session_start();?>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script src="../Controller/cProfile.js"></script>
<?php 
include("../config.inc.php");
//echo $ses_cus_id;
$ses_cus_id=$_SESSION['ses_cus_id'];
$strSQLCus="select * from customer where cus_id='$ses_cus_id'";
$resultCus=mysqli_query($conn,$strSQLCus);
$rsCus=mysqli_fetch_array($resultCus);
?>

<div class="tag-box tag-box-v2 box-shadow shadow-effect-2">


<form method="post"  action="../control-panel/admin/member_action.php" role="form" class="form-horizontal" enctype="multipart/form-data">
	<div class="headline"><h4>ข้อมูลรูปภาพ/Logo</h4></div>
	
	<div class="form-group">
		<div class='col-lg-2'> 
			
		 </div>
		<label class="col-lg-3 control-label "  for="cus_first_name" style='text-align: left;'>
			<img class='rounded-x' src="../control-panel/member_img/<?=$rsCus[cus_pic]?>"  border="0" width="100"/><br> 
		</label>
		<div class="col-lg-5">
			
		</div>
	</div>
	
	<div class="form-group">
		<div class='col-lg-2'> 
			
		 </div>
		<label class="col-lg-3 control-label titleGroup"  for="cus_first_name">
			<input type="file" name="cus_pic" /> 
		</label>
		<div class="col-lg-5">
		
			<input type='hidden' name='actionProfile' value='reback_profile'>
			<input type='hidden' name='cus_id' value='<?=$rsCus['cus_id']?>'>
			<input type='submit' class='btn-u btn-u-green' value='อัปโหลดรูปภาพ'>
		</div>
	</div>
	
</form>
<form role="form" id="formCus" name="formCus" class="form-horizontal">

	<div class="headline"><h4>รายละเอียดเพิ่มเติม</h4></div>
	<div class="form-group">
		
		<div class="col-lg-12">
			<!--CKEditor-->
		    <textarea cols="80" id="cus_other" name="cus_other" rows="2" ><?=$rsCus['cus_other']?></textarea>
		    <script type="text/javascript">
		        //<![CDATA[
		            CKEDITOR.replace( 'cus_other',{
		            	enterMode: CKEDITOR.ENTER_BR,
		                shiftEnterMode: CKEDITOR.ENTER_BR,
		                height: '200px'
		     
		            } );
		        //]]>
		    </script>
		    <!--CKEditor-->
		</div>
	</div>
	<div class="headline"><h4>ข้อมูลส่วนตัว</h4></div>
	
	

	<div class="form-group">												
		<label for="inputEmail1" class="col-lg-3 control-label"> คำนำหน้า</label>
		
		
		<div class=" col-lg-1">
				<?php 
				//echo "cus_title_name=".$rsCus['cus_title_name'];
				?>
				<label>
					<select name='cus_title_name' id='cus_title_name'>
					<?php 
					
					if($rsCus['cus_title_name']==1){
					?>
						<option value='1' selected='selected'>นาย</option>
						<option value='2'>นาง</option>
						<option value='3'>นางสาว</option>
						<option value='4'>บจก.</option>
						<option value='5'>บมจ.</option>
						<option value='6'>หจก.</option>
						<option value='7' >ร้าน</option>
					<?php
					
					}if($rsCus['cus_title_name']==2){
						?>
						<option value='1' >นาย</option>
						<option value='2' selected='selected'>นาง</option>
						<option value='3'>นางสาว</option>
						<option value='4'>บจก.</option>
						<option value='5'>บมจ.</option>
						<option value='6'>หจก.</option>
						<option value='7' >ร้าน</option>
						<?php

					}if($rsCus['cus_title_name']==3){
						?>
						<option value='1' >นาย</option>
						<option value='2'>นาง</option>
						<option value='3' selected='selected'>นางสาว</option>
						<option value='4'>บจก.</option>
						<option value='5'>บมจ.</option>
						<option value='6'>หจก.</option>
						<option value='7' >ร้าน</option>
						<?php

					}if($rsCus['cus_title_name']==4){
						?>
						<option value='1' >นาย</option>
						<option value='2'>นาง</option>
						<option value='3'>นางสาว</option>
						<option value='4' selected='selected'>บจก.</option>
						<option value='5'>บมจ.</option>
						<option value='6'>หจก.</option>
						<option value='7' >ร้าน</option>
						<?php

					}if($rsCus['cus_title_name']==5){
						?>
						<option value='1'>นาย</option>
						<option value='2'>นาง</option>
						<option value='3'>นางสาว</option>
						<option value='4'>บจก.</option>
						<option value='5' selected='selected'>บมจ.</option>
						<option value='6'>หจก.</option>
						<option value='7' >ร้าน</option>
						<?php

					}if($rsCus['cus_title_name']==6){
						?>
						<option value='1' >นาย</option>
						<option value='2'>นาง</option>
						<option value='3'>นางสาว</option>
						<option value='4'>บจก.</option>
						<option value='5'>บมจ.</option>
						<option value='6' selected='selected'>หจก.</option>
						<option value='7' >ร้าน</option>
						<?php
					}if($rsCus['cus_title_name']==7){
						?>
						<option value='1' >นาย</option>
						<option value='2'>นาง</option>
						<option value='3'>นางสาว</option>
						<option value='4'>บจก.</option>
						<option value='5'>บมจ.</option>
						<option value='6'>หจก.</option>
						<option value='7' selected='selected'>ร้าน</option>
						<?php
					}
					?>
						
					</select>
				</label>
			
		</div>

	</div>

	<div class="form-group company" >
		<label class="col-lg-3 control-label titleGroup"  for="cus_first_name" id='cus_company'></label>
		<div class="col-lg-5">
			<input type="text" placeholder="" id="cus_first_name" name="cus_company" class="form-control"value="<?=$rsCus['cus_company']?>">
		</div>
	</div>
	<div class="form-group person" >
		<label class="col-lg-3 control-label titleGroup"  for="cus_first_name"> ชื่อ</label>
		<div class="col-lg-5">
			<input type="text" placeholder="ชื่อ" id="cus_first_name" name="cus_first_name" class="form-control"value="<?=$rsCus['cus_first_name']?>">
		</div>
	</div>

	<div class="form-group person">
		<label class="col-lg-3 control-label titleGroup"  for="cus_last_name"> นามสกุล</label>
		<div class="col-lg-5">
			<input type="text" placeholder="นามสกุล" id="cus_last_name" name="cus_last_name" class="form-control" value="<?=$rsCus['cus_last_name']?>">
		</div>
	</div>

	<div class="form-group person">
		<label class="col-lg-3 control-label titleGroup"  for="cus_birthday_dd"> วัน/เดือน/ปีเกิด</label>
		<div class="col-lg-9">
			<select class="optionInput_register x-small inlinebox" id="cus_birthday_dd" name="cus_birthday_dd">
			<option selected="" value="">- เลือกวัน -</option>
			<?php 
				for($i=1;$i<=31;$i++){
					if($i==$rsCus['cus_birthday_dd']){
						?>
						<option selected='selected'  value="<?=$i?>"><?=$i?></option> 
						<?php
					}else{
					?>
					<option  value="<?=$i?>"><?=$i?></option> 
					<?php
					}
				}	
				?>
			</select>
			<?php 
			$arrayMonth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		
			?>
			<select id="cus_birthday_mm" name="cus_birthday_mm">
				<option selected="" value="">- เลือกเดือน -</option>
				<?php 
				for($i=0;$i<count($arrayMonth);$i++){
					if(($i+1)==$rsCus['cus_birthday_mm']){
					?>
					<option  selected='selected' value="<?=$i+1?>"><?=$arrayMonth[$i]?></option> 
					<?php
					}else{
					?>
					<option  value="<?=$i+1?>"><?=$arrayMonth[$i]?></option> 
					<?php
					}
				}
				?>
				
			</select>
			<?php 
			$yyyyStart= date("Y")+543;
			$yyyyEnd= date("Y")+443;
			?>
			<select  class="optionInput_register x-small inlinebox" id="cus_birthday_yyyy" name="cus_birthday_yyyy">
				<option selected="" value="">- เลือกปี -</option>
				<?php 
				
				for($i=$yyyyStart;$i>=$yyyyEnd;$i--){
					if($i==$rsCus['cus_birthday_yyyy']){
					?>
						<option selected='selected' value="<?=$i?>"><?=$i?></option> 
					<?php
					}else{
					?>
						<option  value="<?=$i?>"><?=$i?></option> 
					<?php
					}
					?>
					
					<?php
				}
				?>
				 
				 
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_email"> อีเมล์</label>
		<div class="col-lg-5">
			<input type="text" placeholder="อีเมล์" id="cus_email" name="cus_email" class="form-control" value="<?=$rsCus['cus_email']?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_tel"> เบอร์โทร</label>
		<div class="col-lg-5">
			<input type="text" placeholder="เบอร์โทร" id="cus_tel" name="cus_tel" class="form-control" value="<?=$rsCus['cus_tel']?>">
		</div>
	</div>


	

	<div class="form-group">												
		<label for="cus_show_tel" class="col-lg-3 control-label"> แสดงเบอร์โทรศัพท์มือถือ</label>
		<div class=" col-lg-1">
			<div class="checkbox">
				<label>
					<?php 
					if($rsCus['cus_show_tel']=="show"){
					?>
					<input checked='checked' name="cus_show_tel" id="cus_show_tel" type="radio" value="show">แสดง 
					<?php
					}else{
					?>
					<input name="cus_show_tel" id="cus_show_tel" type="radio" value="show">แสดง
					<?php
					}
					?>
					
				</label>
			</div>
		</div>
		<div class=" col-lg-2">
			<div class="checkbox">
				<label>
					<?php 
					if($rsCus['cus_show_tel']=="hide"){
					?>
					<input  name="cus_show_tel" id="cus_show_tel" type="radio" value="show"> ไม่แสดง 
					<?php
					}else{
					?>
					<input checked='checked' name="cus_show_tel" id="cus_show_tel" type="radio" value="hide"> ไม่แสดง 
					<?php
					}
					?>
					
				</label>
			</div>
		</div>
		
	</div>


	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_tel2"> เบอร์โทรศัพท์มือถือ</label>
		<div class="col-lg-5">
			<input type="text" placeholder="เบอร์โทรศัพท์มือถือ " id="cus_tel2" name="cus_tel2" value="<?=$rsCus['cus_tel2']?>" class="form-control">
		</div>
	</div>


	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_province"> จังหวัด</label>
		<div class="col-lg-9" >
			<div id="provinceArea">
				<select  class="optionInput" id="cus_province" name="cus_province">
				  <option selected="" value="">-- กรุณาเลือกจังหวัด --</option> 
				</select>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_district"> อำเภอ/เขต</label>
		<div class="col-lg-9" >
		
			<div id="districtArea">
				<select  class="" id="cus_district" name="cus_district">
				<option selected="" value="">-- กรุณาเลือกอำเภอ/เขต --</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_sub_district"> แขวง/ตำบล</label>
		<div class="col-lg-9" >
		
			<div id="subDistrictArea">
				<select class="" id="cus_sub_district" name="cus_sub_district">
					<option selected="" value="">-- กรุณาเลือกแขวง/ตำบล --</option>
				</select>
			</div>
		</div>
	</div>


	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_village_no">บ้านเลขที่</label>
		<div class="col-lg-5">
			<input type="text" placeholder="บ้านเลขที่" id="cus_village_no" name="cus_village_no" value="<?=$rsCus['cus_village_no']?>" class="form-control">
		</div>
	</div>


	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_road">ถนน, ซอย</label>
		<div class="col-lg-5">
			<input type="text" placeholder="ถนน, ซอย" id="cus_road" name="cus_road" class="form-control" value="<?=$rsCus['cus_road']?>">
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_postal_code">รหัสไปรษณีย์</label>
		<div class="col-lg-5">
			<input type="text" placeholder="รหัสไปรษณีย์" id="cus_postal_code" name="cus_postal_code" class="form-control" value="<?=$rsCus['cus_postal_code']?>">
		</div>
	</div>
 
	<div class="form-group">
		<div class="col-lg-offset-3 col-lg-9">
			<input type="hidden"  name="cus_id" value="<?=$rsCus['cus_id']?>">
			<input type="hidden"  name="paramAction" value="updateProfile">
			<button type="submit" class="btn-u btn-u-green" id="btnCusSubmit">  บันทึกข้อมูล  </button>
		</div>
	</div>

	
	
</form>
<form role="form" id="formChangePass" class="form-horizontal">
	<div class="headline"><h4>เปลี่ยนแปลงรหัสผ่าน</h4></div>

	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_new_pass">รหัสผ่านใหม่</label>
		<div class="col-lg-5">
			<input type="text" placeholder="รหัสผ่านใหม่" id="cus_new_pass" name="cus_new_pass"  class="form-control">
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label titleGroup"  for="cus_confirm_new_pass">ยืนยัน รหัสผ่าน</label>
		<div class="col-lg-5">
			<input type="password" placeholder="ยืนยัน รหัสผ่าน" id="cus_confirm_new_pass" name="cus_confirm_new_pass" class="form-control">
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-offset-3 col-lg-9">
			<input type="hidden"  name="paramAction" value="updatePass">
			<input type="hidden"  name="cus_id" value="<?=$rsCus['cus_id']?>">
			<button type="submit" class="btn-u btn-u-green" id="btnChangePass">  เปลี่ยนรหัสผ่าน  </button>
		</div>
	</div>

</form>
</div>