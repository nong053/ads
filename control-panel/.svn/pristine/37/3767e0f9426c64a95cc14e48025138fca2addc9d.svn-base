<? ob_start();
$id_catmyvdo=$_GET['id_catmyvdo'];
//echo"id_catmyvdo$id_catmyvdo";
?>
<style>
#devtext_title{
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#dev_l{
border-left:#dedede solid 1px;
border-top:#dedede solid 1px;
border-bottom:#dedede solid 1px;
background:#efefef;
	padding:5px;
	font-weight:bold;
	font-size:13px;
}
#dev_r{
border-top:#dedede solid 1px;
border-bottom:#dedede solid 1px;
background:#efefef;
border-right:#dedede solid 1px;
	padding:5px;
	font-weight:bold;
	font-size:13px;
}
</style>

<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td width="10%">
        <div id="dev_l">
        <center>
        ลำดับ
        </center>
        </div>
        </td>
        <td width="23%">
         <div id="devtext_title">
        ชื่อวีดีโอ
        </div>
        </td>
        <td width="25%">
         <div id="devtext_title">
        ภาพวีดีโอ
        </div>
        </td>
        <td width="28%">
         <div id="devtext_title">
        ตำแหน่ง วีดีโอ
        </div>
        </td>
        <td width="14%">
         <div id="dev_r">
        จัดการ
        </div>
        </td>
    </tr>
    <?
	$action_edit=$_GET['action'];
	
	if($action_edit=="edit"){
		$id_myvdo=$_GET['id_myvdo'];
		$strSQL="select * from myvdo where id_myvdo=$id_myvdo";
		$result=mysql_query($strSQL);
		$rs=mysql_fetch_array($result);
		$name_myvdo_edit=$rs['name_myvdo'];
		
	$action="edit";
	}else{
	$action="add";
	}
	
	$strSQL="select * from myvdo where id_catmyvdo='$id_catmyvdo'";
	$result=mysql_query($strSQL);
	if($result){
		$n=1;
		while($rs=mysql_fetch_array($result))
		{
			$id_myvdo=$rs['id_myvdo'];
			//$id_catmyvdo=$rs['id_catmyvdo'];
			$pic_myvdo=$rs['pic_myvdo'];
			$vdo_myvdo=$rs['vdo_myvdo'];
			$name_myvdo=$rs['name_myvdo'];
			$position_myvdo=$rs['position_myvdo'];
			//echo"fffposition_myvdo$position_myvdo";
			
			
		
	?>
  <tr>
    	<td>
        <center>
        <?=$n?>
        </center>
        </td>
        <td>
        <?=$name_myvdo?>
        </td>
        <td>
        
        <img src="../myvdo/<?=$id_catmyvdo?>/<?=$id_myvdo?>/pic_vdo/<?=$pic_myvdo?>" width="100" height="100" />
        
        <? //echo"1$id_catmyvdo<br>";
		//echo"2$id_myvdo<br>";
		//echo"3$pic_myvdo<br>";
		?>
       
      </td>
        
        <td>
        <div id="devtextposition" style="width:18px; height:auto; border:solid 1px #666;">
        <?=$position_myvdo?>
        
 		</div>
       
  		</td>
        <td>
        <a href="index.php?page=vdo_system&select_page=myvdo&id_myvdo=<?=$id_myvdo?>&action=edit&id_catmyvdo=<?=$id_catmyvdo?>&position_myvdo=<?=$position_myvdo?>" >
        <img src="../images_system/b_edit.png" border="0" title="แก้ไขได้เฉพาะชื่อเท่านั้น ถ้าท่าต้องการแก้ไขวีดีโอควรลบวีดีโอแล้วอัปโหลดใหม่">
        </a>
        
        &nbsp;
        
        <a href="action_myvdo.php?id_myvdo=<?=$id_myvdo?>&action=del&id_catmyvdo=<?=$id_catmyvdo?>&pic_myvdo=<?=$pic_myvdo?>&vdo_myvdo=<?=$vdo_myvdo?>" onclick="return confirm('ท่านต้องการลบ วีดีโอ<?=$vdo_myvdo?>');">
        <img src="../images_system/b_drop.png" border="0">
        </a>
        </td>
    </tr>
<?
	$n++;
	}//while
} //if result
?>



</table>
<br style="clear:both" />
<form  action="action_myvdo.php" method="post" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        ชื่อวีดีโอ
        </td>
        <td>
        <input type="text" name="name_myvdo" value="<?=$name_myvdo_edit?>">
        </td>
		<?
        if($action=="edit"){
		?>
      <tr>
      	<td>
        ลำดับความสำคัญ
        </td>
        <td> 
		<?
        $position_myvdo=$_GET['position_myvdo'];
		
		 $strSQL_position="select * from myvdo";
		 $result_position=mysql_query($strSQL_position);
		 if($result_position){
			 $num_position=mysql_num_rows($result_position);
		 }
         //$position_myvdo=$rs[position_myvdo]
		
		 ?>
 		 <select name="position_myvdo">
        <?
		
		for($i=1;$i<=$num_position; $i++){
			if($position_myvdo==$i){
		?>
   		 	<option selected="selected"><?=$i?></option>
        <?
		}else{
		?>
        	<option><?=$i?></option>
        <? 
		}
	}
		?>
  		</select>
    
        </td>
    </tr> 
     <?
		}//edit
	  ?>
    <tr>
    	<td>
        รูปภาพ(jpg,png,gif)
        </td>
        <td>
        <input type="file" name="pic_vdo">
        </td>
        <td>
        </td>
    </tr>
     <tr>
    	<td>
        วีดีโอ(flv)
        </td>
        <td>
        <input type="file" name="myvdo">
        </td>
        </td>
        </tr>
    </tr>
    <tr>
    	<td>
        
        </td>
        <td>
        <input type="hidden" value="<?=$action?>" name="action" />
        <input type="hidden" value="<?=$id_myvdo?>" name="id_myvdo" />
        <input type="hidden" value="<?=$id_catmyvdo?>" name="id_catmyvdo">
        <input type="submit" value="Submit Now">
      </td>
    </tr>
</table>
</form>