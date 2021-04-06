<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","realthairealty","010535546") or die(mysql_error());
$objDB = mysql_select_db("realthai_db");
mysql_query("SET NAMES UTF8");
$strSQL = "SELECT * FROM customer";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="400" border="1">
  <tr>
    <th><div align="center">Facebook ID </div></th>
    <th><div align="center">Name </div></th>
    <th><div align="center">CreateDate </div></th>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["cus_id"];?></div></td>
    <td><?php echo $objResult["cus_first_name"];?></td>
    <td><div align="center"><?php echo $objResult["cus_update"];?></div></td>
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>