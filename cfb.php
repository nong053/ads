<?php
require 'sdk/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '124891997861326',
  'secret' => 'e6d78af44e5eea39be1812c4078b577f',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// Save to mysql
if ($user) {
	if($_GET["code"] != "")
	{
	
				$objConnect = mysql_connect("localhost","realthairealty","010535546") or die(mysql_error());
				$objDB = mysql_select_db("realthai_db");
				mysql_query("SET NAMES UTF8");
				$strSQL ="  INSERT INTO  customer (cus_id,cus_first_name,admin_id,cus_update) 
					VALUES
					('".trim($user_profile["id"])."',
					'".trim($user_profile["name"])."',
					'1',
					'".trim(date("Y-m-d H:i:s"))."')";
				
				$objQuery  = mysql_query($strSQL);
				
				$_SESSION['ses_cus_id']=$user_profile["id"];
				$_SESSION['ses_cus_first_name']=$user_profile["name"];
				
				mysql_close();
				header("location:index.php");
				exit();
	}
}

// Logout
if($_GET["Action"] == "Logout")
{
	$facebook->destroySession();
	header("location:index.php");
	exit();
}



?>
<?php if ($_SESSION['ses_cus_id']){
echo "ses_cus_id=".$_SESSION['ses_cus_id'];
} 
?>
<!-- login by face book end-->
 <a href="<?php echo $loginUrl; ?>">
 สมัครสมาชิกผ่านเฟสบุ๊ค
</a>