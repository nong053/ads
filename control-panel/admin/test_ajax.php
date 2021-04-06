<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$webdir_cat=$_POST['webdir_cat'];
$webdir_url=$_POST['webdir_url'];
$webdir_homepage=$_POST['webdir_homepage'];
$webdir_detail=$_POST['webdir_detail'];
$webdir_tag1 =$_POST['webdir_tag1'];
$webdir_tag2 =$_POST['webdir_tag2'];
$webdir_tag3 =$_POST['webdir_tag3'];

$webdir_keyword =$_POST['webdir_keyword'];
$webdir_email =$_POST['webdir_email'];
$webdir_status =$_POST['webdir_status'];

echo"$webdir_cat<br>";
echo"$webdir_url<br>";
echo"$webdir_homepage<br>";
echo"$webdir_detail<br>";
echo"$webdir_tag1<br>";
echo"$webdir_tag2<br>";
echo"$webdir_tag3<br>";

echo"$webdir_keyword<br>";
echo"$webdir_email<br>";
echo"$webdir_status<br>";
?>
</body>
</html>