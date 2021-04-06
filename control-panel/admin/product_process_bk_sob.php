<meta http-equiv="content-type" content="text/html; chaset=utf-8" />
<?php 
	require("../config.inc.php");
	
	$exam_id = trim($_POST['exam_id']);//trim ตัดช่องว่างออก
	$productcat_level2_id = trim($_POST['productcat_level2_id']);
	$exam_title = trim($_POST['exam_title']);
	$exam_choice_is_true = trim($_POST['exam_choice_is_true']);
	$exam_explain = $_POST['exam_explain'];
	$exam_enable = $_POST['exam_enable'];
	
/*
	echo "product_id=".$product_id."<br>";
	echo "productcat_level2_id=".$productcat_level2_id."<br>";
	echo "exam_title=".$exam_title."<br>";
	echo "exam_choice_is_true=".$exam_choice_is_true."<br>";
	echo "exam_explain=".$exam_explain."<br>";
	echo "exam_enable=".$exam_enable."<br>";




	echo "action=".$action."<br>";
*/
	
	
/*
exam_id
exam_title
exam_enable
exam_choice_is_true
exam_update
productcat_level2_id
exam_explain

*/


$currentDate=date("Y-m-d h:i:s");
									
if ($action == "edit"){	


		$sql="UPDATE exam SET exam_title='$exam_title',exam_enable='$exam_enable',exam_choice_is_true='$exam_choice_is_true',
		exam_update='$exam_update',exam_explain='$exam_explain',exam_update='$currentDate'
		WHERE exam_id='$exam_id'";
		mysql_query($sql)or die (mysql_error());
		
		
		
	}elseif ($action == "add"){
		
/*
exam_id
exam_title
exam_enable
exam_choice_is_true
exam_update
productcat_level2_id
exam_explain

*/
		
		
		$sql="INSERT INTO exam(exam_title,exam_enable,exam_choice_is_true,exam_update,productcat_level2_id,exam_explain)VALUES('$exam_title','$exam_enable','$exam_choice_is_true','now()','$productcat_level2_id','$exam_explain')";
		$result=mysql_query($sql);
		if(!$result){
		//echo mysql_error();
		}
		

		//header("Location: index.php?page=ecommerce_system&select_ecommerce=product&productcat_id=".$productcat_id."");
	}
	//header("Location: index.php?page=ecommerce_system&select_ecommerce=product&productcat_id=".$productcat_id."");
	echo"<script> window.location=\"index.php?page=ecommerce_system&select_ecommerce=product&productcat_id=$productcat_id&productcat_level2_id=$productcat_level2_id\"</script>";



?>
