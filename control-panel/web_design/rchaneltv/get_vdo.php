<?php

$id_youtupe=trim($_GET[id_youtupe]);
$ex_id_youtupe=explode("/",$id_youtupe);

include_once("../../oop/manage_data.php");

$bj_manage = new manage_data();
$result_youtube = $bj_manage->select_data("youtupe where id_youtupe = $ex_id_youtupe[1]");
$rs_youtube = mysql_fetch_array($result_youtube);
echo $rs_youtube[embed_youtupe];
?>