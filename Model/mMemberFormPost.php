<?php session_start();

	if($_POST['paramAction']=="getDataSes"){
	echo"{\"sesRtID\":\"".$_SESSION['sesRtID']."\",
			\"sesRfID\":\"".$_SESSION['sesRfID']."\",
			\"sesSpecialPost\":\"".$_SESSION['sesSpecialPost']."\",
			\"sesRtContructorYet\":\"".$_SESSION['sesRtContructorYet']."\",
			\"sesCusEnable\":\"".$_SESSION['ses_cus_enable']."\"
	
	}";
	}
	?>