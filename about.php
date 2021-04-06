<?php 

if($conn){
	$strSQLAbout="select * from article where article_id=36 and article_show='show'";
	$resultAbout=mysql_query($strSQLAbout);
	$rsAbout=mysql_fetch_array($resultAbout);
	
	echo $rsAbout['article_detail'];
}
?>