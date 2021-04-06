<? session_start();?>
<html>
<head>
<style>
table { 
font-family: ms sans serif;
font-size: 10pt; 
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Control Panel</title>
</head>

<body leftmargin="0" topmargin="0">

<table width="990" height="400" align="center" border="0" cellpadding="5" cellspacing="1">
<tr><td bgcolor="#5272A3"><font color="#ffffff"><b>Control Panel ::</b></font></td></tr>
<tr><td bgcolor="#E1E1E1" height="15"></td></tr>

<tr><td>


<table width="300" align="center" border="0" cellpadding="5" cellspacing="1">
<tr><td colspan="2" align="center"><img src="admin/images/adminloginhead.jpg"></td></tr>

<tr><td colspan="2" align="center">
<? if ($_SESSION['ERORR']==true) { echo "<font color=\"#FF0000\">username หรือ password ไม่ถูกต้อง</font>"; }?>
</td></tr>

<form action="login_process.php" method="post">
<tr><td>Username</td>
<td><input name="user" type="text" size="15"></td></tr>
<tr><td>Password</td>
<td><input name="pass" type="password" size="15"></td></tr>
<tr><td align="center">&nbsp;</td>
  <td align="left"><input name="submit" type="submit" value="Login now"></td>
</tr>
</form>
</table>

</td></tr>
</table>

</body>
</html>


<table width="990" align="center" border="0" cellpadding="5" cellspacing="1">
<tr><td bgcolor="#E1E1E1" height="15"></td></tr>
<tr><td bgcolor="#5272A3">&nbsp;</td></tr>
</table>
