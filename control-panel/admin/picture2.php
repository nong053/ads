<meta http-equiv="content-type" content="text/html; chaset=utf-8" />

<?php
 
include("../config.inc.php");
//include("fckeditor/fckeditor.php");
include("picture_split.php");
$productcat_id=$_GET['productcat_id'];
$strSQL="select * from productcat where productcat_id='$productcat_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
echo"<a href=\"index.php?page=productcat\">";
echo"กลับไปยังหมวดสินค้า";
echo"</a>";
echo"-->$rs[productcat_name]";
?>

<table>
	<tr>
    	<td>
        ลำดับ
        </td>
        <td>
        รูปภาพ
        </td>
        <td>
        ชื่อรูปภาพ
        </td>
        
   </tr>
        
        
        <?PHP
	$strSQL="select * from product where productcat_id=$productcat_id";
	//$result=mysql_query($strSQL);
	$result=pu_query($dbname,$strSQL);
	
	$i=1;
	while($rs=mysql_fetch_array($result)){

	//จัดการกับรูปภาพ
	$thumbnailsPath="../product/".$productcat_id."/".$rs[product_id]."/thumbnail/";
		if(!is_dir($thumbnailsPath)){
		
		}else{ //else
		if($handle= opendir($thumbnailsPath)){
		$imagesFiles = array();
		while(false!=($file=readdir($handle))){
			$picture_name=$rs[picture_name];
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
        <?=$i?>
        </td>
        <td>
        <img src="<?=$thumbnailsFile?>" />
        </td>
        <td>
        <?=$picture_name?>
        </td>
        <td>
       <? echo"<a href=\"product_delete.php?action=delete&product_id=$rs[product_id]&productcat_id=$productcat_id\">";
	   ?>
        <img src="images/b_drop.png" border="0" />
        <? echo"</a>"; ?>
        &nbsp;
        <img src="images/b_edit.png" border="0"  />
        </td>
     </tr>
    <?
	$i++;
	{	
	?>
    
</table>



<div class="content_product">
	<div class="content_title_product"><!-- create table-->
		<div class="content_1_product">ลำดับ</div><!-- row-->
		<div class="content_2_product">รูปภาพ</div>
		<!-- row-->
	  <div class="content_3_product">ชื่อรูปภาพ</div><!-- row--><!-- row--><!-- row-->
		<br style="clear:both" />
	</div>
	
	<?PHP
	$strSQL="select * from product where productcat_id=$productcat_id";
	//$result=mysql_query($strSQL);
	$result=pu_query($dbname,$strSQL);
	
	$i=1;
	while($rs=mysql_fetch_array($result)){
	
	//จัดการกับรูปภาพ
	$thumbnailsPath="../product/".$productcat_id."/".$rs[product_id]."/thumbnail/";
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
	
	
	
	
	
		echo"<div class=\"content_1_product\">";
		echo"$i";//ลำดับที่
		echo"</div>";
		echo"<div class=\"content_2_product\">";
		echo"<img src=\"$thumbnailsFile\" height=\"100\" width=\"100\">";
		echo"</div>";		
		
		echo"<div class=\"content_3_product\">";
		
		
		$product_name=$rs[product_name];
		
		echo"$product_name";
		echo"</div>";
		
		echo"<div class=\"content_4_product\">";
		echo"$rs[product_promotion]";
		echo"</div>";
		echo"<div class=\"content_5_product\">";
		echo"<a href=\"index.php?page=product&action=edit&product_id=$rs[product_id]&productcat_id=$rs[productcat_id]\">";
		echo"แก้ไข";
		echo"</a>&nbsp";
		echo"<a href=\"product_delete.php?action=delete&product_id=$rs[product_id]&productcat_id=$productcat_id\">";
		echo"ลบ";
		echo"</a>";
		echo"</div>";
		echo"<br style=\"clear:both\">";
		

	$i++;
	
	} 
	pu_pageloop("productcat_id=".$productcat_id);
	?>

</div>
<br style="clear:both" />
<br style="clear:both" />
<br style="clear:both" />


<?php
if($_GET['action']=="edit"){
$submit="แก้ไขรูปภาพ";
$product_id=$_GET['product_id'];
$strSQL="select * from product where product_id=$product_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$product_name= $rs[product_name];
echo"product_name $product_name";
$product_price= $rs[product_price];
$product_promotion= $rs[product_promotion];
$product_amount= $rs[product_amount];
$product_detail= $rs[product_detail];
}else{
$submit="เพิ่มรูปภาพ";
$product_name="";
$product_price="";
$product_promotion="";
$product_amount="";
$product_detail="";
$action="add";
}
?>






<form action="picture_process.php" method="post" enctype="multipart/form-data">
<table>
	<tr>
    	<td>
        	รูปภาพ
        </td>
        <td>
        </td>
    </tr>
	<tr>
    	<td>
        
        </td>
        <td>
        <input type="file" name="picture_file[]" />
        </td>
    </tr>
    <tr>
    	<td>
        
        </td>
        <td>
        <input type="file" name="picture_file[]" />
        </td>
    </tr>
    <tr>
    	<td>
        
        </td>
        <td>
        <input type="file" name="picture_file[]" />
        </td>
    </tr>
    <tr>
    	<td>
        
        </td>
        <td>
        <input type="file" name="picture_file[]" />
        </td>
    </tr>
    <tr>
    	<td>
        </td>
        <td>
        	<input type="hidden" name="productcat_id" value="<?=$productcat_id?>" />
			<input type="hidden" name="product_id" value="<?=$rs[product_id]?>" />
			<input type="hidden" name="action" value="<?=$action?>" />
       		<input type="submit" value="<?=$submit?>" />
        </td>
    </tr>
</table>
</form>







<form action="picture_process.php" method="post" enctype="multipart/form-data">
	<div class="product_manage">
		<div class="prodcut_manage_title">
			<div class="product_manage_text"><span class="content_3_product">ชื่อรูปภาพ</span></div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_name" value="<?=$product_name?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title">
      <div class="product_manage_text">รูปภาพ</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title"><br style="clear:both" />
		</div>
		<div class="product_manage_title">
			<div class="product_submit">
			<input type="hidden" name="productcat_id" value="<?=$productcat_id?>" />
			<input type="hidden" name="product_id" value="<?=$rs[product_id]?>" />
			<input type="hidden" name="action" value="<?=$action?>" />
			<input type="submit" name="submit" value="<?=$submit?>" />
			
			</div>
		</div> 
	
	</div>
</form>


