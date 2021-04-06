<?
include_once("config.inc.php");

$user=trim($_POST['user']);
$email=trim($_POST['email']);
$admin_id=trim($_POST['admin_id']);
//echo"user$user";
$sstrSQL_cus="customer where  cus_email='$email' ";
$result_cus = mysql_query($sstrSQL_cus);
$num_cus = mysql_num_rows($result_cus);
//echo"num_cus$num_cus<br>";
$rs_cus = mysql_fetch_array($result_cus);

$cus_email=$rs_cus[cus_email];
$cus_pass=$rs_cus[cus_pass];


if(!$rs_cus){
	echo"<script>alert('E-mail ไม่ถูกต้อง');</script>";
	?>
	
    <meta http-equiv="refresh" content="0; URL='index.php'" /> 
    <?
}else{
	$to=$email;
	$title="รหัสผ่านในการใช้งาน www.realthaireaty.com";
	$content="User:$cus_email Password:$cus_pass";
	$header="www.realthaireaty.com";
	$sendmail=@mail($to,$title,$content,$header);
	if($sendmail){
		echo"<script>alert('สงข้อมูลเรียบร้อยแล้ว');</script>";
	}
	?>
    <meta http-equiv="refresh" content="0; URL='index.php'" /> 
    <?
}



?>