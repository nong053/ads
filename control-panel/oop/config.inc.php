<?php
extract($_REQUEST);
$hostname="127.0.0.1";

$username="root";
$password="root";
$dbname="ads_db";

/*
$username="adsthaidd";
$password="010535546";
$dbname="adsthaid_db";
*/

mysql_connect($hostname,$username,$password);
mysql_query("SET NAMES utf8");
mysql_select_db($dbname);



?>