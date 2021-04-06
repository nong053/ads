$action=$_GET['action'];
	if($action=="edit"){
	$pic_id=$_GET['pic_id'];
	
	$strSQL="select * from banner_sum where pic_id='$pic_id'";
	//echo"hello";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);
	 $pic_type_edit=$rs[pic_type];
	 $pic_detail_edit=$rs[pic_detail];
	 $pic_detail_eng_edit=$rs[pic_detail_eng];
	 $main_menu_id_edit=$rs[main_menu_id];
	 
	 $pic_position_edit=$rs['pic_position'];
	 $pic_display_edit=$rs['pic_display'];
	 
	 $pic_link_edit=$rs[pic_link];
	 $action_banner="edit_piture.php";
	}else{
		$action_banner="add_picture.php";
	}
	