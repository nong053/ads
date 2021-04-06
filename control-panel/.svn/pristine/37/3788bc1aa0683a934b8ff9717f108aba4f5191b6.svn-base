<meta http-equiv="content-type" content="text/html; chaset=utf-8" />
<style type="text/css">
<!--
 #dev_picturetext {
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:16px;
	 
	 font-weight:bold;
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
-->
</style>
<?php
 
include("../config.inc.php");
//include("fckeditor/fckeditor.php");
include("picture_split.php");
$picturecat_id=$_GET['picturecat_id'];
$admin_id=$_GET['admin_id'];
echo"admin=$admin_id";
$strSQL="select * from picture where picturecat_id='$picturecat_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);

?>

<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td width="8%">
        <div id="dev_picturetext">
        ลำดับ
        </div>
        </td>
        <td width="27%">
        <div id="dev_picturetext">
        รูปภาพ
        </div>
        </td>
        <td width="27%">
        <div id="dev_picturetext">
        ข้อมูลรูปภาพ
        </div>
        </td>
        <td width="19%">
        <div id="dev_picturetext">ระดับความสำคัญ</div>
   </td>
         <td width="19%">
        <div id="dev_picturetext">
        จัดการรูปภาพ
        </div>
        </td>
        
   </tr>
        
        
       	
	<?PHP
	
	$strSQL="select * from picture where picturecat_id=$picturecat_id ORDER BY picture_important ";
	//$result=mysql_query($strSQL);
	$result=pu_query($dbname,$strSQL);
	
	$i=1;
	while($rs=mysql_fetch_array($result)){
	

	
	
	//จัดการกับรูปภาพ
	$thumbnailsPath="../picture/$admin_id/".$picturecat_id."/".$rs[picture_id]."/thumbnail/";
		if(!is_dir($thumbnailsPath)){
		
		}else{ //else
		if($handle= opendir($thumbnailsPath)){
		$imagesFiles = array();
		while(false!=($file=readdir($handle))){
				if($file!="." && $file!=".."){
					$thumbnailsFile = $thumbnailsPath."/".$file;
					$fileType = pathinfo($thumbnaisFile);//แสดงpath
					$fileType = strtolower($fileType['extension']);//แสดงpathพร้อม แสดงนามสกุล
					$allowedtypes=array("png","jpeg","jpd","gif");
				
					if(is_file($thumbnailsFile)&& in_array($fileType,$allowedtypes))
					{
					$imagesFiles[]=$thumbnailsFile;
					}
			
				}
			}
			closedir($handle);
		}
		sort($imagesFiles);
		if(count($imagesFiles)>0){
		$thumbnailsFile = $imagesFiles[0];
		}
		
	}//else
	//ปิดจัดการรูปภาพ

	?>
    	<tr>
    	<td>
        <center>
        <?=$i?>
        </center>
        </td>
        <td>
        <img src="<?=$thumbnailsFile?>" />
        </td>
        <td>
        
        <?php if(strlen($rs[picture_detail])>15){
		$picture_detail=mb_substr($rs[picture_detail],0,15,"UTF-8")."...";
		echo"$picture_detail";
		}else{
		?>
		<?=$rs[picture_detail]?>
		<?php }?>
        </td>
        <td>
        <center>
        
        ระดับความสำคัญ<?=$rs[picture_important]?>
        </center>
        
        </td>
        <td>
        <center>
       
        
        
        
        
        
         <a href="picture_delete.php?action=delete&picture_id=<?=$rs[picture_id]?>&picturecat_id=<?=$picturecat_id?>&admin_id=<?=$admin_id?>" onclick="return confirm('ท่านต้องการลบ รูปภาพนี้');">
        <img src="images/b_drop.png" border="0">
        </a>
        
        
        
        
        
        &nbsp;
        <a href="index.php?page=picture&action=edit&admin_id=<?=$admin_id?>&picture_id=<?=$rs[picture_id]?>&picturecat_id=<?=$rs[picturecat_id]?>&picture_important=<?=$rs[picture_important]?>">
        <img src="images/b_edit.png" border="0"  />
        </a>
        </center>
        </td>
     </tr>




	<?
	$i++;
	}
?>
    
    
    
    
    
</table>
<? $numpu=pu_pageloop("picturecat_id=".$picturecat_id); ?>

<?php
if($_GET['action']=="edit"){
$submit="แก้ไขข้อมูลรูปภาพ";
$picture_id=$_GET['picture_id'];
$admin_id=$_GET['admin_id'];
$strSQL="select * from picture where picture_id=$picture_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$picture_detail= $rs[picture_detail];
$picture_detail_eng= $rs[picture_detail_eng];
$picturecat_id=$rs[picturecat_id];
$action="edit";
}else{
$submit="เพิ่มรูปภาพ";
$picture_detail="";
$action="add";
}
?>

<form action="picture_process.php" method="post" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        	
        </td>
        <td>
        </td>
    </tr>
   <? if($action!="edit"){ ?>
	<tr>
    	<td>
        รูปภาพ1
        </td>
        <td>
        <input type="file" name="picture_file[]" />
        </td>
    </tr>
    
    <?
   }
	?>
   	<tr>
    	<td>รายละเอียด
        </td>
        <td>
        <textarea name="picture_detail" cols="50"><?=$picture_detail?></textarea>
        </td>
    </tr>
    <tr>
    	<td>Detail
        </td>
        <td>
        <textarea name="picture_detail_eng" cols="50"><?=$picture_detail_eng?></textarea>
        </td>
    </tr>
    
    <tr>
    	<td>
        </td>
    	<td>
        
		
		<?
		if($action=="edit"){
        $picture_important=$_GET['picture_important'];
		
		 $strSQL_position="select * from picture where picturecat_id='$picturecat_id'";
		 $result_position=mysql_query($strSQL_position);
		 if($result_position){
			 $num_position=mysql_num_rows($result_position);
		 }
         //$picture_important=$rs[picture_important]
		
		 ?>
		<select name="picture_important">
		  <?
		
		for($i=1;$i<=$num_position; $i++){
			if($picture_important==$i){
		?>
		  <option selected="selected" value="<?=$i?>">ระดับความสำคัญ
		    <?=$i?>
	      </option>
		  <?
		}else{
		?>
		  <option value="<?=$i?>">ระดับความสำคัญ
		    <?=$i?>
	      </option>
		  <? 
		}
	}
		?>
		  </select>
          &nbsp;หมายเหตุตัวเลขระดับความสำคัญน้อย รูปภาพจะอยู่ตำแหน่งต้นๆ
		<?
		}//if
		?>
        
        </td>
    </tr>
    <tr>
    	<td>
       
        </td>
        <td>
		
		   <input type="hidden" name="admin_id" value="<?=$admin_id?>" />
        	<input type="hidden" name="picturecat_id" value="<?=$picturecat_id?>" />
			<input type="hidden" name="picture_id" value="<?=$rs[picture_id]?>" />
			<input type="hidden" name="action" value="<?=$action?>" />
       		<input type="submit" value="<?=$submit?>" />
          
          <? if($action=="edit"){ ?>
           <input type="button" onclick="parent.location='index.php?page=picture&picturecat_id=<?=$picturecat_id?>&admin_id=<?=$admin_id?>'"  value="กลับไปเพิ่มรูปภาพ"/>
           <?
		  }
           ?>
            <input type="button" onclick="parent.location='index.php?page=picturecat'"  value="กลับไปหมวดรูปภาพ"/>
        </td>
    </tr>
</table>
</form>



