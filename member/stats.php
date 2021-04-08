<?php session_start();
$cus_id=$_SESSION['ses_cus_id'];
include("../config.inc.php");
/*count hit overall*/
$strSQLCountAll="select count(*) as countHit from realty_data_general rdg
LEFT JOIN counter1_realty cr 
ON cr.rdg_id=rdg.rdg_id
where rdg.cus_id='$cus_id'";
$resultCountAll=mysqli_query($conn,$strSQLCountAll);
$rsCountAll=mysqli_fetch_array($resultCountAll);
/*this count to day start*/
$strSQLCountToDay="
SELECT COUNT(DATE) AS CounterToday FROM realty_data_general rdg 
LEFT JOIN counter_realty cr 
ON rdg.rdg_id=cr.rdg_id
where rdg.cus_id='$cus_id'
and DATE = '".date("Y-m-d")."'";
$resultCountToDay=mysqli_query($conn,$strSQLCountToDay);
$rsCountToDay=mysqli_fetch_array($resultCountToDay);
//echo $rsCountToDay['CounterToday']."<br>";
/*this count to day end*/

/*this count Yesterday start*/
$strSQLCountYesterday="
SELECT dr.NUM as NUM FROM realty_data_general rdg 
LEFT JOIN daily_realty dr 
ON rdg.rdg_id=dr.rdg_id
where rdg.cus_id='$cus_id'
and DATE = '".date('Y-m-d',strtotime("-1 day"))."'
		";
$resultCountYesterday=mysqli_query($conn,$strSQLCountYesterday);
$rsCountYesterday=mysqli_fetch_array($resultCountYesterday);
//echo $rsCountYesterday['NUM']."<br>";;
/*this count Yesterday  end*/

/*this count this month  start*/
$strSQLCountThisMonth="
		SELECT sum(dr.NUM) as NUM FROM realty_data_general rdg 
LEFT JOIN daily_realty dr 
ON rdg.rdg_id=dr.rdg_id
where rdg.cus_id='$cus_id'
and DATE_FORMAT(DATE,'%Y-%m')  = '".date('Y-m')."'
		";
$resultCountThisMonth=mysqli_query($conn,$strSQLCountThisMonth);
$rsCountThisMonth=mysqli_fetch_array($resultCountThisMonth);
//echo $rsCountThisMonth['NUM']."<br>";;
/*this count this month  end*/

/*this count last month  start*/
$strSQLCountLastMonth="
		SELECT sum(dr.NUM) as NUM FROM realty_data_general rdg 
LEFT JOIN daily_realty dr 
ON rdg.rdg_id=dr.rdg_id
where rdg.cus_id='$cus_id'
and DATE_FORMAT(DATE,'%Y-%m')  = '".date('Y-m',strtotime("-1 month"))."'
		";
$resultCountLastMonth=mysqli_query($conn,$strSQLCountLastMonth);
$rsCountLastMonth=mysqli_fetch_array($resultCountLastMonth);
//echo $rsCountLastMonth['NUM']."<br>";;
/*this count last month  end*/

/*this count this year  start*/
$strSQLCountThisYear="
		SELECT sum(dr.NUM) as NUM FROM realty_data_general rdg 
LEFT JOIN daily_realty dr 
ON rdg.rdg_id=dr.rdg_id
where rdg.cus_id='$cus_id' and DATE_FORMAT(DATE,'%Y')  = '".date('Y')."' 
		";
$resultCountThisYear=mysqli_query($conn,$strSQLCountThisYear);
$rsCountThisYear=mysqli_fetch_array($resultCountThisYear);
//echo $rsCountThisYear['NUM']."<br>";;
/*this count this year  end*/

/*this count last year   start*/
$strSQLCountLastYear="
		SELECT sum(dr.NUM) as NUM FROM realty_data_general rdg 
LEFT JOIN daily_realty dr 
ON rdg.rdg_id=dr.rdg_id
where rdg.cus_id='$cus_id'
and DATE_FORMAT(DATE,'%Y')  = '".date('Y',strtotime("-1 year"))."'
		";
$resultCountLastYear=mysqli_query($conn,$strSQLCountLastYear);
$rsCountLastYear=mysqli_fetch_array($resultCountLastYear);
//echo $rsCountLastYear['NUM']."<br>";;
/*this count last year  end*/


//include_once '../useronline/count_data_only.php';
?>


		<!-- <script src="../Controller/cStats.js"></script> -->
	<div class="headline"><h4>สถิติเกี่ยวกับประกาศทั้งหมด	</h4></div>
	<!-- กล่องข้อความ -->
		<div class="col-md-12">
				<div class="panel panel-sea margin-bottom-40">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-edit"></i> รายการสถิติเกี่ยวกับประกาศทั้งหมด</h3>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>รายการ</th>
								<th>จำนวนคนเข้าดู/จำนวนครั้ง</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>จำนวนคนที่เปิดประกาศของคุณในวันนี้</td>
								
								<td><?php echo number_format($rsCountToDay['CounterToday'],0);?> คน</td>
								
							</tr>
							<tr>
								<td>จำนวนคนที่เปิดประกาศของคุณเมื่อวาน</td>
								
								<td><?php echo number_format($rsCountYesterday['NUM'],0);?> คน</td>
								
							</tr>
							<tr>
								<td>จำนวนคนที่เปิดประกาศของคุณในเดือนนี้</td>
								
								<td><?php echo number_format($rsCountThisMonth['NUM'],0);?> คน</td>
								
							</tr>
							<tr>
								<td>จำนวนคนที่เปิดประกาศของคุณในเดือนที่แล้ว</td>
								
								<td>
								<?php echo number_format($rsCountLastMonth['NUM'],0);?> คน
								</td>
								
							</tr>
							<tr>
								<td>จำนวนคนที่เปิดประกาศของคุณในปีนี้</td>
								
								<td><?php echo number_format($rsCountThisYear['NUM'],0);?> คน</td>
								
							</tr>
							<tr>
								<td>จำนวนคนที่เปิดประกาศของคุณในปีที่แล้ว</td>
								
								<td><?php echo number_format($rsCountLastYear['NUM'],0);?> คน</td>
								
							</tr>
							<tr>
								<td>จำนวนครั้งที่ประกาศของคุณถูกเปิดทั้งหมด</td>
								
								<td><?=$rsCountAll['countHit']?> ครั้ง</td>
								
							</tr>
							<!-- 
							<tr>
								<td>จำนวนข้อความที่ได้รับจากลูกค้า</td>
								<td>N/A</td>
								<td>N/A</td>
							</tr>
						 	-->
							
						</tbody>
					</table>
				</div>                  
			</div>
		<!-- กล่องข้อความ -->      
<?php 
/*select realty for stats start here*/
/*count hit overall*/
$strSQLCountByRealty="
select * from realty_data_general rdg
where rdg.cus_id='$cus_id'";
$resultCountByRealty=mysqli_query($conn,$strSQLCountByRealty);

/*
$strSQLCountAll="select count(*) as countHit from realty_data_general rdg
LEFT JOIN counter1_realty cr
ON cr.rdg_id=rdg.rdg_id
where rdg.cus_id='$cus_id' and rdg.rdg_id='$rdg_id'";
$resultCountAll=mysqli_query($conn,$strSQLCountAll);
$rsCountAll=mysqli_fetch_array($resultCountAll);
*/
/*this count to day start*/
?>
	<div class="headline"><h4>สถิติประกาศปัจจุบัน</h4></div>

			<div class="col-md-12">
				<div class="panel panel-sea margin-bottom-40">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-edit"></i> รายการสถิติประกาศปัจจุบัน</h3>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>

								<th>ประกาศ</th>
								<th>ทั้งหมด</th>
								<th>ย้อนหลัง 1 เดือน</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							while($rsCountByRealty=mysqli_fetch_array($resultCountByRealty)){
							$strSQLCountAll="select count(*) as countHit from realty_data_general rdg
							LEFT JOIN counter1_realty cr
							ON cr.rdg_id=rdg.rdg_id
							where rdg.cus_id='$cus_id' and rdg.rdg_id='".$rsCountByRealty['rdg_id']."'";
							$resultCountAll=mysqli_query($conn,$strSQLCountAll);
							$rsCountAll=mysqli_fetch_array($resultCountAll);
							
							/*this count this month  start*/
							$strSQLCountThisMonth="
							SELECT sum(dr.NUM) as NUM FROM realty_data_general rdg
							LEFT JOIN daily_realty dr
							ON rdg.rdg_id=dr.rdg_id
							where rdg.cus_id='$cus_id'
							and DATE_FORMAT(DATE,'%Y-%m')  = '".date('Y-m')."'
							and rdg.rdg_id='".$rsCountByRealty['rdg_id']."'
		";
							$resultCountThisMonth=mysqli_query($conn,$strSQLCountThisMonth);
							$rsCountThisMonth=mysqli_fetch_array($resultCountThisMonth);
							/*this count this month  end*/
							?>
							<tr>
								<td> 
								<?=$rsCountByRealty['rdg_title']?>
				
								</td>
								<td><?=$rsCountAll['countHit']?></td>
								<td><?
								if($rsCountThisMonth['NUM']=="" or $rsCountThisMonth['NUM']==0){
									echo"0";
								}else{
									echo $rsCountThisMonth['NUM'];
								}
								?></td>
							</tr>
							<?php 
							}
							?>
							
						
							
						</tbody>
					</table>
				</div>                  
			</div>
		<!-- กล่องข้อความ -->      
