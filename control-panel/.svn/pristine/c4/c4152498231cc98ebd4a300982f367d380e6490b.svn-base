<script type="text/javascript">
//$.noConflict();
//$.noConflict();
jQuery(document).ready(function($){

	$(':file').change(function(){
    var file = this.files[0];
    name = file.name;
    size = file.size;
    type = file.type;

    //your validation

	
	});

	$("form#form_schedule").live("submit",function(){
	var formData = new FormData($('form')[0]);
	//alert(formData);
	//alert($(this).serialize());
	$.ajax({
	url:"schedule_plan_manage.php",
	type:"POST",
	dataType:"html",
	data:$(this).serialize(),
	success:function(data){
	alert(data);
	}
	})

	return false;
	});
});
</script>

<form id="form_schedule" name="form_schedule" method="POST"  enctype="multipart/form-data">
	<table>
		<tr>
			<td>วันที่</td>
			<td>
			<select id="list_date" name="list_date">
			<?php
			for($i=1; $i<=31; $i++){
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}	
			?>
			</select>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td colspan="2">เริ่มเวลา</td>
		</tr>
		<tr>
			<td>ชั่วโมง</td>
			<td>
			<select id="list_hour_from" name="list_hour_from">
			<?php
			for($i=1; $i<=24; $i++){
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}	
			?>
			
			</select>
			</td>


			<td>นาที</td>
			<td>
			<select id="list_minute_from" name="list_minute_from">
			<?php
			for($i=1; $i<=60; $i++){
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}	
			?>
			
			</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">ถึงเวลา</td>
			
		</tr>
		<tr>
			<td>ชั่วโมง</td>
			<td>
			<select id="list_hour_to" name="list_hour_to">
			<?php
			for($i=1; $i<=24; $i++){
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}	
			?>
			
			</select>
			</td>


			<td>นาที</td>
			<td>
			<select id="list_minute_to" name="list_minute_to">
			<?php
			for($i=1; $i<=60; $i++){
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}	
			?>
			
			</select>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
			ชื่อรายการ
			</td>
			<td>
			<input type="text" id="list_name" name="list_name">
			</td>
		</tr>
	
		<tr>
			<td>
			รูปภาพประกอบ
			</td>
			<td>
			<input type="file" id="list_picture" name="list_picture">
			</td>
		</tr>
		</table>
		<table>
		<tr>
			<td>รายละเอียด</td>
		</tr>
		<tr>
			
			<td colspan="2">
			<textarea id="list_detail" name="list_detail"></textarea>
	
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
			</td>
			<td>
			<input type="submit" value="บันทึกข้อมูล">
			</td>
			<td>
			<input type="reset" value="ยกเลิก">
			</td>
		</tr>
	</table>
</form>
	<!-- -->