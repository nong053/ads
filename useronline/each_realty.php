<?php
ini_set('display_errors', '1'); //no error=0 all error=1
include 'config.inc.php';

$title = "โฆษณา";
date_default_timezone_set('Asia/Bangkok');

$strSQL = " SELECT DATE FROM counter_realty where rdg_id='$rdg_id' LIMIT 0,1";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if($objResult["DATE"] != date("Y-m-d"))
{
	
	$strSQL = " INSERT INTO daily_realty (DATE,NUM,rdg_id) SELECT '".date('Y-m-d',strtotime("-1 day"))."',COUNT(*) AS intYesterday,$rdg_id FROM  counter_realty cr WHERE 1 AND DATE = '".date('Y-m-d',strtotime("-1 day"))."' or cr.rdg_id!='$rdg_id'";
	$r=mysqli_query($conn,$strSQL);
	
	$strSQL = " DELETE FROM counter_realty WHERE DATE != '".date("Y-m-d")."' and  rdg_id='$rdg_id'";
	mysqli_query($conn,$strSQL);
	
}
$strSQL = "INSERT INTO counter_realty (DATE,IP,rdg_id) VALUES ('".date("Y-m-d")."','".$_SERVER["REMOTE_ADDR"]."','$rdg_id') ";

mysqli_query($conn,$strSQL);


$strSQL = " SELECT COUNT(DATE) AS CounterToday FROM counter_realty WHERE DATE = '".date("Y-m-d")."' and rdg_id='$rdg_id'";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$strToday = $objResult["CounterToday"];
$strSQL = " SELECT NUM FROM daily_realty WHERE DATE = '".date('Y-m-d',strtotime("-1 day"))."' and rdg_id='$rdg_id' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$strYesterday = $objResult["NUM"];
$strSQL = " SELECT SUM(NUM) AS CountMonth FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y-%m')  = '".date('Y-m')."' and rdg_id='$rdg_id'";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$strThisMonth = $objResult["CountMonth"];
$strSQL = " SELECT SUM(NUM) AS CountMonth FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y-%m')  = '".date('Y-m',strtotime("-1 month"))."' and rdg_id='$rdg_id'";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$strLastMonth = $objResult["CountMonth"];
$strSQL = " SELECT SUM(NUM) AS CountYear FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y')  = '".date('Y')."' and rdg_id='$rdg_id'";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$strThisYear = $objResult["CountYear"];
$strSQL = " SELECT SUM(NUM) AS CountYear FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y')  = '".date('Y',strtotime("-1 year"))."' and rdg_id='$rdg_id'";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$strLastYear = $objResult["CountYear"];
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $title;?></title>
</head>
<body >
<table width="183" border="1" style="border-color: red;border-style: dotted;">
	<tr>
		<td colspan="2" align="center">Statistics <?php echo $title;?></td>
	</tr>
	<tr>
		<td width="98">Today</td>
		<td width="75" align="center"><?php echo number_format($strToday,0);?></td>
	</tr>
	<tr>
		<td >Yesterday</td>
		<td align="center"><?php echo number_format($strYesterday,0);?></td>
	</tr>
	<tr>
		<td>ThisMonth</td>
		<td align="center"><?php echo number_format($strThisMonth,0);?></td>
	</tr>
	<tr>
		<td>LastMonth</td>
		<td align="center"><?php echo number_format($strLastMonth,0);?></td>
	</tr>
	<tr>
		<td>ThisYear</td>
		<td align="center"><?php echo number_format($strThisYear,0);?></td>
	</tr>
	<tr>
		<td>LastYear</td>
		<td align="center"><?php echo number_format($strLastYear,0);?></td>
	</tr>
	<tr>
		<td>Online</td>
		<td align="center"><?php 
$timeoutseconds = 300;
$timestamp=time();
$timeout=$timestamp-$timeoutseconds;


mysqli_query($conn, "INSERT INTO useronline_realty VALUES ('$timestamp','".$_SERVER["REMOTE_ADDR"]."','".$_SERVER["PHP_SELF"]."','$rdg_id')");

mysqli_query($conn, "DELETE FROM useronline_realty WHERE timestamp<$timeout and rdg_id='$rdg_id'" ) ;

$result=mysqli_query($conn, "SELECT DISTINCT ip FROM useronline_realty WHERE file='".$_SERVER["PHP_SELF"]."' and rdg_id='$rdg_id'");

$user =mysqli_num_rows($result);


echo"$user";
;?></td>
</tr>
<tr>
	<td>Hit</td>
	<td align="center"><?php 
		
		$counter=mysqli_query($conn, "SELECT * FROM counter1_realty where  rdg_id='$rdg_id'") or die("counter1 Database SELECT Error");
		$counter1 =mysqli_num_rows($counter);
		mysqli_query($conn, "INSERT INTO counter1_realty VALUES ('$timestamp','".$_SERVER["REMOTE_ADDR"]."','".$rdg_id."')") ;
		echo $counter1;
		//mysqli_close($conn);
		;?></td>
	</tr>
</table>
</body>
<html>
