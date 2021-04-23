<?php session_start();
error_reporting (E_ALL ^ E_NOTICE);
	if($_POST['paramAction']=="getDataSes"){
	echo"{\"sesRtID\":\"".$_SESSION['sesRtID']."\",
			\"sesRfID\":\"".$_SESSION['sesRfID']."\",
			\"sesSpecialPost\":\"".$_SESSION['sesSpecialPost']."\",
			\"sesRtContructorYet\":\"".$_SESSION['sesRtContructorYet']."\",
			\"sesCusEnable\":\"".$_SESSION['ses_cus_enable']."\"
	
	}";
	}
	?>