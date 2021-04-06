<? session_start();
include("../config.inc.php");
if($_POST['paramAction']=="del"){
	$rss_id=$_POST['rss_id'];
	$sqlSQL="delete from realty_save_search where rss_id='$rss_id'";
	$result=mysql_query($sqlSQL);
	if($result){
		echo '["seccess"]';
	}
}
if($_POST['paramAction']=="getData"){
	$rss_id=$_POST['rss_id'];
	$sqlSQL="select *  from realty_save_search where rss_id='$rss_id'";
	$result=mysql_query($sqlSQL);
	$rs=mysql_fetch_array($result);
	if($result){

		echo "{
			 \"rt_id\":\"".$rs['rt_id']."\"
			,\"rdg_address_district_id\":\"".$rs['rdg_address_district_id']."\"
			,\"rdg_address_province_id\":\"".$rs['rdg_address_province_id']."\"
			,\"rdg_address_sub_district_id\":\"".$rs['rdg_address_sub_district_id']."\"
			,\"rdg_bts\":\"".$rs['rdg_bts']."\"
			,\"rdg_bus\":\"".$rs['rdg_bus']."\"
			,\"rdg_harbor\":\"".$rs['rdg_harbor']."\"
			,\"rdg_mrt\":\"".$rs['rdg_mrt']."\"
			,\"rdg_road\":\"".$rs['rdg_road']."\"
			,\"rdg_id\":\"".$rs['rdg_id']."\"
			,\"search_type\":\"".$rs['search_type']."\"
					
			
		}";
	}
}

if($_POST['paramAction']=="showSearch"){
	
	$strSQL="
	select rss.*,rt_name,p.PROVINCE_NAME ,a.AMPHUR_NAME,d.DISTRICT_NAME,pt.pt_detail as bts
	from realty_save_search rss
	LEFT JOIN realty_type rt 
	ON rt.rt_id=rss.rt_id
	LEFT JOIN province p 
	ON p.PROVINCE_ID=rss.rdg_address_province_id
	LEFT JOIN  amphur a
	ON a.AMPHUR_ID=rss.rdg_address_district_id
	LEFT JOIN district d 
	ON d.DISTRICT_ID = rss.rdg_address_sub_district_id
	LEFT JOIN  public_transport pt
	ON pt.pt_id=rss.rdg_bts  
	WHERE cus_id='$cus_id'

";
	$result=mysql_query($strSQL);
	?>
	<table id="gridShowSearch" class="table table-striped">
	 <colgroup>
                	<col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:55%" />
                    <col style="width:25%" />
                    <!-- 
                    <col style="width:200px" />
                     -->
                </colgroup>
		<thead>
			<tr>
				<th data-field="fileld1">#รหัส</th>
				<th data-field="fileld2">ประเภท</th>
				<th data-field="fileld3">รายละเอียด</th>
				<th data-field="fileld4">จัดการ</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($rs=mysql_fetch_array($result)){
				?>
				<tr>
					<td><?=$rs['rss_id']?></td>
					<td><?=$rs['rt_name']?></td>
					<td>
					<?=$rs['PROVINCE_NAME']?>-><?=$rs['AMPHUR_NAME']?>-><?=$rs['DISTRICT_NAME']?>
					</td>
					<td>
					<button id="<?=$rs['rss_id']?>"  class="btn btn-danger btn-xs btnDelSaveSearch"><i class="fa fa-trash-o"></i> ลบ </button>
					<button id="<?=$rs['rss_id']?>" class="btn btn-warning btn-xs btnOpenSearch"><i class="fa fa-pencil"></i> เปิดการค้นหา</button>
					
					</td>
				</tr>
				<?php 
			}
			?>
			
		</tbody>
	</table>
	
<?php 
}
?>
