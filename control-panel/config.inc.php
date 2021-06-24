<?php
extract($_REQUEST);
$hostname="localhost";


$username="root";
$password="";
$dbname="adskosana_db";

/*
$username="dashboa2_adsuser";
$password="010535546";
$dbname="dashboa2_adsdb";
*/

$result=mysql_connect($hostname,$username,$password);
mysql_query("SET NAMES utf8");
mysql_select_db($dbname);
if(!$result){
echo"con't connection database";
}else{
//echo"connection successfully";	
}
?>