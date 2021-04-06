<?php
extract($_REQUEST);
$hostname="localhost";
/*
$username="root";
$password="010535546";
$dbname="ads_db";
*/

$username="adsthaidd";
$password="zX1dIU7Dp";
$dbname="adsthaidd_db";


mysql_connect($hostname,$username,$password);
mysql_query("SET NAMES utf8");
mysql_select_db($dbname);



?>