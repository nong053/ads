<style>
.txtTitle{
padding:5px;
}
a{
text-decoration:none;
	
}
</style>
<?php 
include_once("../class_mysql.php");
$db = new database();
$result=$db->tableSQL("schedule_plan");
?>


<table width="100%" id="tableTv">
	<thead>
		<tr bgcolor="#dddddd">
			<th>
			<div class="txtTitle">
			ลำดับ
			</div>
			</th>
			<th>
			<div class="txtTitle">
			ชื่อรายการ
			</div>
			</th>
			<th>
			<div class="txtTitle">
			รูปรายการ
			</div>
			</th>
			<th>
			<div class="txtTitle">
			เริ่มเวลา
			</div>
			</th>
			<th>
			<div class="txtTitle">
			จบเวลา
			</div>
			</th>
			<th>
			<div class="txtTitle">
			จัดการ
			</div>
			</th>
		</tr>
	</thead>
	<tbody>
<?php
$i=1;
while($rs=mysql_fetch_array($result)){
//echo $rs[list_date]."<br>";
//echo $rs[list_name]."<br>";
?>
		<tr>
			<td>
			<center>
			<?=$i?>
			</center>
			</td>
			<td>
			<?=$rs[list_name]?>
			</td>
			<td>
			<center>
			<img src="../schedule_plan/<?=$rs[list_picture]?>" width="100">
			</center>
			</td>
			<td>
			<center>
			<?=$rs[list_hour_from]?>:<?=$rs[list_minute_from]?>
			</center>
			</td>
			<td>
			<center>
			<?=$rs[list_hour_to]?>:<?=$rs[list_minute_to]?>
			</center>
			</td>
			<td>
			<center>
			<a href="schedule_plan_manage.php?action_get=del&list_id=<?=$rs[list_id]?>">
			ลบ
			</a>
			&nbsp;
			<a href="index.php?page=tv_system&list_id=<?=$rs[list_id]?>&action_get=edit">
			แก้ไข
			</a>
			</center>
			</td>
		</tr>
<?
$i++;
}
?>
		
	</tbody>
</table>


<!-- edit-->
<?php
include_once("oop/manage_data.php");
$bj = new manage_data();

if($_GET['action_get']=="edit"){
$list_id=$_GET['list_id'];
echo"edit herer";
$result_select=$bj->select_data("schedule_plan where list_id=$list_id");
$rs_select=mysql_fetch_array($result_select);
$list_id = $rs_select['list_id'];
$list_date = $rs_select['list_date'];
$list_hour_from = $rs_select['list_hour_from'];
$list_minute_from = $rs_select['list_minute_from'];
$list_hour_to = $rs_select['list_hour_to'];
$list_minute_to = $rs_select['list_minute_to'];
$list_name = $rs_select['list_name'];
$list_detail = $rs_select['list_detail'];


$submit=" แก้ไขข้อมูล";
$action_post="edit";
}else{
$submit="บันทึกข้อมูล";
$action_post="add";
$list_date = "";
$list_hour_from = "";
$list_minute_from = "";
$list_hour_to = "";
$list_minute_to = "";
$list_name = "";
$list_detail="";
}
?>


<form id="form_schedule" name="form_schedule" method="POST"  enctype="multipart/form-data" action="schedule_plan_manage.php">
	<table>
		<tr>
			<td>
			ชื่อรายการ
			</td>
			<td>
			<input type="text" id="list_name" name="list_name" value="<?=$list_name?>">
			</td>
		</tr>
	
		<tr>
			<td>
			รูปภาพประกอบ
			</td>
			<td>
			<input type="file" id="list_picture" name="list_picture" >
			</td>
		</tr>
	</table>
	<!--
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
	-->
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
			if($list_hour_from == $i){
			?>
			<option value="<?=$i?>" selected><?=$i?></option>
			<?
			}else{
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}
			}	
			?>
			
			</select>
			</td>


			<td>นาที</td>
			<td>
			<select id="list_minute_from" name="list_minute_from">
			<?php
			
			for($i=1; $i<=60; $i++){
			if($list_minute_from == $i){
			?>
			<option value="<?=$i?>" selected><?=$i?></option>
			<?
			}else{
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}
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
			if($list_hour_to == $i){
			?>
			<option value="<?=$i?>" selected><?=$i?></option>
			<?	
			}else{
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}
			}	
			?>
			
			</select>
			</td>


			<td>นาที</td>
			<td>
			<select id="list_minute_to" name="list_minute_to">
			<?php
			for($i=1; $i<=60; $i++){
			
			if($list_hour_to == $i){
			?>
			<option value="<?=$i?>" selected><?=$i?></option>
			<?	
			}else{
			?>
			<option value="<?=$i?>"><?=$i?></option>
			<?
			}
			}	
			?>
			
			</select>
			</td>
		</tr>
	</table>
	
		<table>
		<tr>
			<td>รายละเอียด</td>
		</tr>
		<tr>
			
			<td colspan="2">
			<textarea id="list_detail" name="list_detail"><?=$list_detail?></textarea>
	
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
			</td>
			<td>
			<input type="submit" id="submit" value="<?=$submit?>">
			<input type="hidden" name="action_post" value="<?=$action_post?>">
			<input type="hidden" name="list_id" value="<?=$list_id?>">
			</td>
			<td>
			<input type="reset" value="ยกเลิก" onclick="window.location='index.php?page=tv_system'">
			</td>
		</tr>
	</table>
</form>
	<!-- -->