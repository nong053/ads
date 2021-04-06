<?php session_start();
$paramRealtyID=$_POST['paramRealtyID'];
include("../config.inc.php");
?>
	 <script src="../Controller/cDetailDataPost.js"></script> 
	<div class="tab-pane fade in " id="detailData">
	


			
			<!-- for  contractor -->
		<form id="realtyDataDetail" class="form-horizontal" role="form">
									<?php 
									/*
									$sqlSQLRT="select * from realty_type where rt_id='".$_SESSION['sesRtID']."'";
									$resultRT=mysql_query($sqlSQLRT);
									$rsRT=mysql_fetch_array($resultRT);
									
									$sqlSQLRF="select rf.rf_name from realty_data_general rdg
									LEFT JOIN realty_for rf
									ON rdg.rf_id=rf.rf_id
									where rdg_id='$paramRealtyID'";
									
									$resultRF=mysql_query($sqlSQLRF);
									$rsRF=mysql_fetch_array($resultRF);
									*/
									?>
			


			<!-- for  realty -->
			<div style="clear:both"></div>
			<div style="display:;">
			
			
						
				<div class="headline"><h4>คุณสมบัติพิเศษ</h4></div>

				<div id="areaRealtyCharacteristic"></div>

		
			<!-- for  realty -->
			</div>
			<div style="clear:both"></div>
			<div style="clear:both"></div>
	<hr>
	<div class="form-group">
		<div class="text-center">
			<button type="button" id="btn-back-step1" class="btn-u btn-u-yellow"><i class='icon-arrow-left '></i>  ย้อนกลับ  </button>
			<button type="button" id="btn-next-step3" class="btn-u btn-u-green"><i class=' icon-check '></i>  บันทึกและดำเนินการถัดไป  </button>
		</div>
	</div>
</form>
	
	<!-- End detailData -->