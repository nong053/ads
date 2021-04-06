<?php session_start();
include("../config.inc.php");
$cus_id=$_SESSION['cus_id'];
$rt_id=$_POST['embed_rt_id'];
$rdg_address_district_id=$_POST['rdg_address_district_id'];
$rdg_address_province_id=$_POST['rdg_address_province_id'];
$rdg_address_sub_district_id=$_POST['rdg_address_sub_district_id'];
$rdg_bts=$_POST['rdg_bts'];
$rdg_bus=$_POST['rdg_bus'];
$rdg_harbor=$_POST['rdg_harbor'];
$rdg_mrt=$_POST['rdg_mrt'];
$rdg_road=$_POST['rdg_road'];
$rdg_id=$_POST['rdg_id'];
$search_type=$_POST['search_type'];

$strSQL="insert into realty_save_search
(cus_id,rt_id,rdg_address_district_id,rdg_address_province_id,rdg_address_sub_district_id,
rdg_bts,rdg_bus,rdg_harbor,rdg_mrt,rdg_road,rdg_id,search_type)
values
('$cus_id','$rt_id','$rdg_address_district_id','$rdg_address_province_id','$rdg_address_sub_district_id',
'$rdg_bts','$rdg_bus','$rdg_harbor','$rdg_mrt','$rdg_road','$rdg_id','$search_type')";
$result=mysql_query($strSQL);
if($result){
	echo'["seccess"]';
}else{
	echo mysql_error();
}



?>