<?php
ini_set('display_errors', '1'); //no error=0 all error=1
//include './config.inc.php';


$server = "127.0.0.1";
/*
$db_user="adsthaidd_user";
$db_pass="010535546";
$database="adsthaidd_db";
*/


$db_user = "root";
$db_pass = "root";
$database = "ads_db";

mysql_connect($server,$db_user,$db_pass);
$rdg_id=161;
$title = "your title";
date_default_timezone_set('Asia/Bangkok');
mysql_select_db($database);
$strSQL = " SELECT DATE FROM counter_realty where rdg_id='$rdg_id' LIMIT 0,1";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if($objResult["DATE"] != date("Y-m-d"))
{
	
	$strSQL = " INSERT INTO daily_realty (DATE,NUM,rdg_id) SELECT '".date('Y-m-d',strtotime("-1 day"))."',COUNT(*) AS intYesterday,$rdg_id FROM  counter_realty cr WHERE 1 AND DATE = '".date('Y-m-d',strtotime("-1 day"))."' or cr.rdg_id!='$rdg_id'";
	$r=mysql_query($strSQL);
	
	$strSQL = " DELETE FROM counter_realty WHERE DATE != '".date("Y-m-d")."' and  rdg_id='$rdg_id'";
	mysql_query($strSQL);
	
}
$strSQL = "INSERT INTO counter_realty (DATE,IP,rdg_id) VALUES ('".date("Y-m-d")."','".$_SERVER["REMOTE_ADDR"]."','$rdg_id') ";

mysql_query($strSQL);


$strSQL = " SELECT COUNT(DATE) AS CounterToday FROM counter_realty WHERE DATE = '".date("Y-m-d")."' and rdg_id='$rdg_id'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$strToday = $objResult["CounterToday"];
$strSQL = " SELECT NUM FROM daily_realty WHERE DATE = '".date('Y-m-d',strtotime("-1 day"))."' and rdg_id='$rdg_id' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$strYesterday = $objResult["NUM"];
$strSQL = " SELECT SUM(NUM) AS CountMonth FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y-%m')  = '".date('Y-m')."' and rdg_id='$rdg_id'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$strThisMonth = $objResult["CountMonth"];
$strSQL = " SELECT SUM(NUM) AS CountMonth FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y-%m')  = '".date('Y-m',strtotime("-1 month"))."' and rdg_id='$rdg_id'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$strLastMonth = $objResult["CountMonth"];
$strSQL = " SELECT SUM(NUM) AS CountYear FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y')  = '".date('Y')."' and rdg_id='$rdg_id'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$strThisYear = $objResult["CountYear"];
$strSQL = " SELECT SUM(NUM) AS CountYear FROM daily_realty WHERE DATE_FORMAT(DATE,'%Y')  = '".date('Y',strtotime("-1 year"))."' and rdg_id='$rdg_id'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$strLastYear = $objResult["CountYear"];
mysql_close();
?>
<!-- 
Statistics <?php echo $title;?>
Today<?php echo number_format($strToday,0);?>
Yesterday<?php echo number_format($strYesterday,0);?>
ThisMonth<?php echo number_format($strThisMonth,0);?>
LastMonth<?php echo number_format($strLastMonth,0);?>
ThisYear<?php echo number_format($strThisYear,0);?>
LastYear<?php echo number_format($strLastYear,0);?>
Online
 -->
<?php 
$timeoutseconds = 300;
$timestamp=time();
$timeout=$timestamp-$timeoutseconds;
mysql_connect($server, $db_user, $db_pass) or die ("Useronline Database CONNECT Error");
mysql_db_query($database, "INSERT INTO useronline_realty VALUES ('$timestamp','".$_SERVER["REMOTE_ADDR"]."','".$_SERVER["PHP_SELF"]."','$rdg_id')") or die("Useronline Database INSERT Error");
mysql_db_query($database, "DELETE FROM useronline_realty WHERE timestamp<$timeout and rdg_id='$rdg_id'" ) or die("Useronline Database DELETE Error");
$result=mysql_db_query($database, "SELECT DISTINCT ip FROM useronline_realty WHERE file='".$_SERVER["PHP_SELF"]."' and rdg_id='$rdg_id'") or die("Useronline Database SELECT Error");
$user =mysql_num_rows($result);
mysql_close();
/* echo"$user";*/

mysql_connect($server, $db_user, $db_pass) or die ("counter1 Database CONNECT Error");
$counter=mysql_db_query($database, "SELECT * FROM counter1_realty where  rdg_id='$rdg_id'") or die("counter1 Database SELECT Error");
$counter1 =mysql_num_rows($counter);
mysql_db_query($database, "INSERT INTO counter1_realty VALUES ('$timestamp','".$_SERVER["REMOTE_ADDR"]."','".$rdg_id."')") or die("counter1 Database INSERT Error");
/*echo $counter1;*/
?>
