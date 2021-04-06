<?php 
//menu for realty sales start
function realtyCateMenuFn($cate){
$strSQL1="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where rt_contructor_cate='$cate'
";
$result1=mysql_query($strSQL1);
return  $result1;
}



/*

$strSQL2="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where   rt_contructor_cate='2'
";
$result2=mysql_query($strSQL2);

$strSQL3="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where   rt_contructor_cate='3'
";
$result3=mysql_query($strSQL3);


$strSQL4="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='4'
";
$result4=mysql_query($strSQL4);

$strSQL5="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='5'
";
$result5=mysql_query($strSQL5);

$strSQL6="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='6'
";
$result6=mysql_query($strSQL6);

$strSQL7="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='7'
";
$result7=mysql_query($strSQL7);

$strSQL8="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='8'
";
$result8=mysql_query($strSQL8);

$strSQL9="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='9'
";
$result9=mysql_query($strSQL9);
//menu for realty sales end

//menu for realty rent start
$strSQL21="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where rt_contructor_cate='1'
";
$result21=mysql_query($strSQL21);

$strSQL22="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where   rt_contructor_cate='2'
";
$result22=mysql_query($strSQL22);

$strSQL23="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where   rt_contructor_cate='3'
";
$result23=mysql_query($strSQL23);


$strSQL24="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='4'
";
$result24=mysql_query($strSQL24);

$strSQL25="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='5'
";
$result25=mysql_query($strSQL25);

$strSQL26="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='6'
";
$result26=mysql_query($strSQL26);

$strSQL27="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='7'
";
$result27=mysql_query($strSQL27);

$strSQL28="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='8'
";
$result28=mysql_query($strSQL28);

$strSQL29="
select rt_id, rt_name,rt_contructor_yet,rt_contructor_cate from realty_type where  rt_contructor_cate='9'
";
$result29=mysql_query($strSQL29);
*/
?>