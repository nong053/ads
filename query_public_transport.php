<?php 
$sqlSQLBTS="SELECT * FROM public_transport where pt_type='BTS' order by pt_detail";
$resultBTS=mysqli_query($conn,$sqlSQLBTS);

$sqlSQLMRT="SELECT * FROM public_transport where pt_type='MRT' order by pt_detail";
$resultMRT=mysqli_query($conn,$sqlSQLMRT);

$sqlSQLARL="SELECT * FROM public_transport where pt_type='ARL' order by pt_detail";
$resultARL=mysqli_query($conn,$sqlSQLARL);

$sqlSQLHARBOR="SELECT * FROM public_transport where pt_type='HARBOR' order by pt_detail";
$resultHARBOR=mysqli_query($conn,$sqlSQLHARBOR);

$sqlSQLRoadNo="select DISTINCT rdg_address_road from realty_data_general where rdg_address_road !='' order by rdg_address_road";
$resultRoadNo=mysqli_query($conn,$sqlSQLRoadNo);

$sqlSQLBusNo="select DISTINCT rdg_bus from realty_data_general where rdg_bus !='' order by rdg_bus";
$resultBusNo=mysqli_query($conn,$sqlSQLBusNo);

$sqlSQLSoi="select DISTINCT rdg_address_soi from realty_data_general where rdg_address_soi !='' order by rdg_address_soi";
$resultSoi=mysqli_query($conn,$sqlSQLSoi);


?>