<?php session_start();
$cus_id=$_SESSION['cus_id'];
include("../config.inc.php");
$idArea=$_POST['idArea'];
$paramNewOld=$_POST['paramNewOld'];

if($_POST['paramAction']=="showInbox"){
	
	$strSQL="
	select rdg_id,rt.rt_name,rdg_price,rdg_create,rdg_status,rdg_update 
	from realty_data_general rdg
	INNER JOIN realty_type rt
	ON rdg.rt_id=rt.rt_id

";
	$result=mysql_query($strSQL);
	?>
	<table id="gridInbox<?=$idArea?>" class="table table-striped">
	 <colgroup>
                	<col />
                    <col />
                    <col />
                    <col  />
                    <col  />
                    <col />
                    <!-- 
                    <col style="width:200px" />
                     -->
                </colgroup>
		<thead>
			<tr>
				<th data-field="fileld1">#รหัส</th>
				<th data-field="fileld2">ประเภท</th>
				<th data-field="fileld3">จาก</th>
				<th data-field="fileld4">ข้อความ</th>
				<th data-field="fileld5">วันที่</th>
				<th data-field="fileld6">จัดการ</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>2013719</td>
				<td>ขายบ้าน</td>
				<td>คุณกองสิน ฟองดา</td>
				<td>ต้องการเข้าดูบ้าน</td>
				<td>10/06/58</td>
				<td>
				<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> ลบ </button>
				<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> ดูข้อความ</button>
				<!-- <button class="btn btn-success btn-xs"><i class="fa fa-share"></i> เก็บไว้ดูทีหลัง</button> -->
				</td>
			</tr>
		</tbody>
	</table>
	
<?php 
}
?>