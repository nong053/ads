<?php
error_reporting (E_ALL ^ E_NOTICE);
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



$conn=mysqli_connect($hostname,$username,$password);
mysqli_query($conn,"SET NAMES utf8");
mysqli_select_db($conn,  $dbname);







?>