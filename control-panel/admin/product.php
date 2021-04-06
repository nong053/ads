<meta http-equiv="content-type" content="text/html; chaset=utf-8" />
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<style>
@charset "utf-8";

/* CSS Document */
#content{
width:650px;
background-color:ffffff;
}
#content #title tr td{
width:640px;
background:#00FF00;
}
#content #title #1{
width:50px;
float:left;
}
#content #title #2{
width:200px;

}
#content #title #3{
width:400px;
}
#content #title #4{
width:100px;
}

#footer{
width:650px;
height:100px;
}
#footer #tr{
width:auto;
margin:0px;
padding:1px;
height:1px;
}
#footer #tr #text_footer{
width:150px;
float:left;
}
#footer #tr #text_feild{
width:350px;
float:left;
}
#footer #tr #text_submit{
width:400px;
padding:0px 0px 0px 150px;
}
/* หน้าสินค้า*/
.content_product{
width:auto;
padding:0px 0px 5px 0px;
}
.content_title_product{
width:auto;
padding:5px;
background-color:#09C;
color:#FFF;
font-size:14px;
font-weight:bold;
}
.content_1_product{
padding-left:15px;
width:82px;
float:left;

}
.content_2_product{
width:120px;
padding-left:10px;

float:left;
}
.content_3_product{
width:300px;
padding-left:10px;

float:left;
}
.content_4_product{
width:80px;
padding-left:10px;

float:left;
}
.content_5_product{
width:100px;
/*padding-left:10px;*/
padding-right:10px;

float:right;
}

.product_manage{
width:650px;
}
.prodcut_manage_title{
widows:640px;
margin:5px;
}
.product_manage_text{
width:100px;
float:left;
}
.product_manage_textfiled{
width:500px;
float:left;
}
.product_submit{
width:640px;
padding:0px 0px 0px 100px;
}
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
</style>
<?php
 
include("../config.inc.php");
//include("fckeditor/fckeditor.php");
include("product_split.php");
$productcat_id=$_GET['productcat_id'];
$strSQL="select * from productcat where productcat_id='$productcat_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
//echo"<a href=\"index.php?page=productcat\">";
//echo"กลับไปยังหมวดสินค้า";
//echo"</a>";
//echo"-->$rs[productcat_name]";
?>
<div class="content_product">
	<div class="content_title_product"><!-- create table-->
		<div class="content_1_product">ลำดับ</div><!-- row-->
		<div class="content_2_product">รูปสินค้า</div><!-- row-->
		<div class="content_3_product">ชื่อสินค้า</div><!-- row-->
		<div class="content_4_product">โปรโมชั่น</div><!-- row-->
		<div class="content_5_product">การจัดการ</div><!-- row-->
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
	
	
	
	
	
		echo"<div class=\"content_1_product\"  style=\"padding-left:30px;\">";
		
		echo"$i";//ลำดับที่
		
		echo"</div>";
		echo"<div class=\"content_2_product\">";
		if(!$thumbnailsFile){
		echo"<img src=\"images/U_HEB003y.png\" height=\"100\" width=\"100\">";
		}else{
		echo"<img src=\"$thumbnailsFile\" height=\"100\" width=\"100\">";
		}
		echo"</div>";		
		
		echo"<div class=\"content_3_product\">";
		if(strlen($rs[product_name])>20){
		$product_name=mb_substr($rs[product_name],0,20,"UTF-8")."...";
		}else{
		$product_name=$rs[product_name];
		}
		echo"$product_name";
		echo"</div>";
		
		echo"<div class=\"content_4_product\">";
		echo"$rs[product_promotion]";
		echo"</div>";
		echo"<div class=\"content_5_product\">";
		echo"<div id=\"dev_picturelink\">";
		
		
		echo"<a onClick=\"return confirm('คุณต้องการลบสินค้านี้ ?');\" href=\"product_delete.php?action=delete&product_id=$rs[product_id]&productcat_id=$productcat_id\">";
		?>
                <img src="images/b_drop.png" border="0" />
        <?
		echo"ลบ";
		echo"</a>";
		echo"<a href=\"index.php?page=ecommerce_system&select_ecommerce=product&product&action=edit&product_id=$rs[product_id]&productcat_id=$rs[productcat_id]\">";
		?>
                <img src="images/b_edit.png" border="0" />
        <?
		echo"แก้ไข";
		
		echo"</a>";
		echo"</div>";
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
$submit="แก้ไขข้อมูลสินค้า";
$product_id=$_GET['product_id'];
$strSQL="select * from product where product_id=$product_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$product_name= $rs[product_name];
$product_title= $rs[product_title];
echo"product_name $product_name";
$product_price= $rs[product_price];
$product_promotion= $rs[product_promotion];
$product_amount= $rs[product_amount];
$product_detail= $rs[product_detail];
$product_color= $rs[product_color];
$product_size= $rs[product_size];


$product_name_eng= $rs[product_name_eng];
$product_price_eng= $rs[product_price_eng];
$product_title_eng= $rs[product_title_eng];
$product_detail_eng= $rs[product_detail_eng];

}else{
$submit="เพิ่มสินค้า";
$product_name="";
$product_title="";
$product_price="";
$product_promotion="";
$product_amount="";
$product_detail="";

$product_name_eng= "";
$product_price_eng= "";
$product_title_eng= "";
$product_detail_eng= "";

$action="add";
}
?>

<form action="product_process.php" method="post" enctype="multipart/form-data">
	<div class="product_manage">
		<div class="prodcut_manage_title">
			<div class="product_manage_text">ชื่อสินค้า</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_name" value="<?=$product_name?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title">
			<div class="product_manage_text">ราคา</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_price" value="<?=$product_price?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">Product Name</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_name_eng" value="<?=$product_name_eng?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title">
			<div class="product_manage_text">Price</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_price_eng" value="<?=$product_price_eng?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title">
			<div class="product_manage_text">สี</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_color" value="<?=$product_color?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title">
			<div class="product_manage_text">ขนาด</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_size" value="<?=$product_size?>" size="30"/>
			</div>
			<br style="clear:both" />
		</div>
			<div class="prodcut_manage_title">
			<div class="product_manage_text">โปรโมชั่น</div>
			<div class="product_manage_textfiled">
			 
			 
			  <input type="radio" value="Yes" name="product_promotion"checked="checked"  />
			 โปรโมชั่น
			 			 <?php
			 if($product_promotion=="Yes"){
			 echo"checked";
			 }
			 ?> 
             <input name="product_promotion" type="radio" value="No"  />
			 ไม่ใช่โปรโมชั่น
			 <?php
			 if($product_promotion=="No"){
			 echo"checked";
			 }
			 ?>
			 </div>
			<br style="clear:both" />
		</div>
		<div class="prodcut_manage_title">
			<div class="product_manage_text">จำนวนสินค้า</div>
			<div class="product_manage_textfiled">
			<input type="text" name="product_amount" value="<?=$product_amount?>" size="5"/>
			</div>
			<br style="clear:both" />
		</div>
        
		<div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า1</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า2</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า3</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า4</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">PDF</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">PDF</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <!--<div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า2</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า3</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รูปสินค้า4</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>
        <div class="prodcut_manage_title">
			<div class="product_manage_text">ไฟล์ PDF</div>
			<div class="product_manage_textfiled">
			  <input type="file" name="product_file[]"  />
			</div>
			<br style="clear:both" />
		</div>-->
		<div class="prodcut_manage_title">
			<div class="product_manage_text">รายละเอียดเบื้องต้น</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>
        
		<div class="product_manage_title">
			<div class="product_submit">
			<input type="hidden" name="productcat_id" value="<?=$productcat_id?>" />
			<input type="hidden" name="product_id" value="<?=$rs[product_id]?>" />
			<input type="hidden" name="action" value="<?=$action?>" />
			
			
			</div>
		</div> 
	
	
    <!--CKEditor-->
    <textarea cols="80" id="product_title" name="product_title" rows="10" ><?=$product_title?></textarea>
    
    <!--CKEditor-->
    
    <div class="prodcut_manage_title">
			<div class="product_manage_text">Detail</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>
        
        <!--CKEditor-->
    <textarea cols="80" id="product_title_eng" name="product_title_eng" rows="10" ><?=$product_title_eng?></textarea>
    
    <!--CKEditor-->
    
    
    
    
    	
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รายละเอียด</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>
         <!--CKEditor-->
    <textarea cols="80" id="product_detail" name="product_detail" rows="10" ><?=$product_detail?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'product_detail',{

          
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            } );
        //]]>
    </script>
    <!--CKEditor-->
     
     
     <div class="prodcut_manage_title">
			<div class="product_manage_text">More Detail</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>
         <!--CKEditor-->
    <textarea cols="80" id="product_detail_eng" name="product_detail_eng" rows="10" ><?=$product_detail_eng?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'product_detail_eng',{

          
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            } );
        //]]>
    </script>
    <!--CKEditor-->
        
    
    </div>
    
    
    
    <br>
    <input type="submit" name="submit" value="<?=$submit?>" />
    <input type="reset" name="reset" value="Clear" />
</form>


