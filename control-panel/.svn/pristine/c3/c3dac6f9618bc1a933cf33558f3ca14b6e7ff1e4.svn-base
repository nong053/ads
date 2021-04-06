
<?php
/*
$field_select="webre_id,webre_url,cat_webre_package ,admin_status";
$table_condition="web_register,webcat_register,admin
where web_register.webre_cat_id=webcat_register.cat_webre_id 
and web_register.admin_id=admin.admin_id ";
$result=$obj_manage_data->select_data($table_condition,$field_select);
*/

$webre_id=$_GET['webre_id'];
//echo"webre_id"+$webre_id;

function __autoload($file){
require_once("../oop/".$file.".php");
}
$obj_manage_data = new manage_data();

	$field_select="webre_id,webre_url,webre_detail ,webre_start ,webre_end,webre_update ,cat_webre_package,cat_webre_detail ,admin_status,admin_name,admin_surname,admin_username ,admin_password,admin_status,admin_email ,admin_address ,admin_tel";
	$table_condition="web_register,webcat_register,admin
where web_register.webre_cat_id=webcat_register.cat_webre_id 
and web_register.admin_id=admin.admin_id  and webre_id='$webre_id'";
	$result=$obj_manage_data->select_data($table_condition,$field_select);
	$rs=mysql_fetch_array($result);
	$num=mysql_num_rows($result);
	//echo"num=$num";

?>
<table>

	<tbody>
	
		<tr>
			<td>
			เว็บไชต์ ID
			</td>
			<td>
			<?=$rs[webre_id]?>
			</td>
		</tr>

		<tr>
			<td>
			เว็บ URL
			</td>
			<td>
			<?=$rs[webre_url]?>
			</td>
		</tr>

		<tr>
			<td>
			รายละเอียดเว็บ
			</td>
			<td>
			<?=$rs[webre_detail]?>
			</td>
		</tr>

		<tr>
			<td>
			เริ่มใช้งาน
			</td>
			<td>
			<?=$rs[webre_start]?>
			</td>
		</tr>

		<tr>
			<td>
			หมดอายุ
			</td>
			<td>
			<?=$rs[webre_end]?>
			</td>
		</tr>

		<tr>
			<td>
			Package
			</td>
			<td>
			<?=$rs[cat_webre_package]?>
			</td>
		</tr>

		<tr>
			<td>
			รายละเอียด Package
			</td>
			<td>
			<?=$rs[cat_webre_detail]?>
			</td>
		</tr>

		<tr>
			<td>
			ชื่อผู้ดูแลระบบ
			</td>
			<td>
			<?=$rs[admin_name]?>
			</td>
		</tr>

		<tr>
			<td>
			นามสกุลผู้ดูแลระบบ
			</td>
			<td>
			<?=$rs[admin_surname]?>
			</td>
		</tr>
		
			<tr>
			<td>
			User
			</td>
			<td>
			<?=$rs[admin_username]?>
			</td>
		</tr>
		<tr>
			<td>
			Password
			</td>
			<td>
			<?=$rs[admin_password]?>
			</td>
		</tr>
		<tr>
			<td>
			สถานะเว็บไชต์
			</td>
			<td>
			<?=$rs[admin_status]?>
			</td>
		</tr>
		<tr>
			<td>
			อีเมลล์
			</td>
			<td>
			<?=$rs[admin_email]?>
			</td>
		</tr>
		<tr>
			<td>
			เบอร์โทร
			</td>
			<td>
			<?=$rs[admin_tel]?>
			</td>
		</tr>
		<tr>
			<td>
			ที่อยู่
			</td>
			<td>
			<?=$rs[admin_address]?>
			</td>
		</tr>
		<tr>
			<td>
			แก้ไขล่าสุด
			</td>
			<td>
			<?=$rs[webre_update]?>
			</td>
		</tr>
	</tbody>
</table>