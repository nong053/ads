<?php 
include("../config.inc.php");
$rdg_address_district_id=$_POST['rdg_address_district_id'];
$rdg_address_province_id=$_POST['rdg_address_province_id'];
$rdg_address_sub_district_id=$_POST['rdg_address_sub_district_id'];
$rdg_id=$_POST['rdg_id'];
$rf_id=$_POST['rf_id'];
$rt_id=$_POST['rt_id'];
$search_type=$_POST['search_type'];

/*
echo "rdg_address_district_id=".$rdg_address_district_id;
echo "rdg_address_province_id=".$rdg_address_province_id;
echo "rdg_address_sub_district_id=".$rdg_address_sub_district_id;
echo "rdg_id=".$rdg_id;
echo "rf_id=".$rf_id;
echo "rt_id=".$rt_id;
echo "search_type=".$search_type;
*/


$strSQL="
select rdg_title,rdg_map,rdg_id from realty_data_general
WHERE (rdg_address_province_id='$rdg_address_province_id' OR 'All' ='$rdg_address_province_id')
AND (rdg_address_district_id='$rdg_address_district_id' OR 'All' ='$rdg_address_district_id')
AND (rdg_address_sub_district_id='$rdg_address_sub_district_id' OR 'All' ='$rdg_address_sub_district_id')
AND (rdg_id='$rdg_id' OR '' ='$rdg_id')
AND (rf_id='$rf_id' OR 'All' ='$rf_id')
AND (rt_id='$rt_id' OR 'All' ='$rt_id')
AND rdg_map!=','
";
$result=mysqli_query($conn,$strSQL);


$rows = array();
while($rs=mysqli_fetch_array($result)) {
    $rows[] = $rs;
}
print json_encode($rows);
//echo "[\"test\"]";


//echo "rt_contructor_cate=".$rt_contructor_cate;

?>