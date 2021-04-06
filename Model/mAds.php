<?php 
include("../config.inc.php");
$rt_id=$_POST['embed_rt_id'];
$strSQL="SELECT * FROM 	realty_type where rt_id='$rt_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$rt_contructor_cate= $rs['rt_contructor_cate'];
//echo "rt_contructor_cate=".$rt_contructor_cate;

if($_POST['action']=="adsRL"){
	
	$strSLQBannerAH="select * from banner_sum where pic_position='8' and pic_display='Y' and (main_menu_id='All' or main_menu_id='home')"; 
	$resultBannerAH=mysql_query($strSLQBannerAH);
	$rsAH=mysql_fetch_array($resultBannerAH);
	
	if($rsAH['pic_name']){
		?>
		<img src="control-panel/mypicture/1/<?=$rsAH['pic_name']?>" width="100%" height="100%" />
		<?php
		}else{
		$strSLQBannerLR="select * from banner_sum where pic_position='8' and pic_display='Y' and main_menu_id='$rt_contructor_cate'";
		$resultBannerLR=mysql_query($strSLQBannerLR);
		$rsLR=mysql_fetch_array($resultBannerLR);
		
		if($rsLR['pic_name']){
			?>
			<img src="control-panel/mypicture/1/<?=$rsLR['pic_name']?>" width="100%" height="100%" />
			<?php
			}
	}
	
	
}
?>