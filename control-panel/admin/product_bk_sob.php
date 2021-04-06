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
width:auto;
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
$productcat_level2_id=$_GET['productcat_level2_id'];
$strSQLLevel2="select * from productcat_level2 where productcat_level2_id='$productcat_level2_id'";
$resultLevel2=mysql_query($strSQLLevel2);
$rsLevel2=mysql_fetch_array($resultLevel2);
$productcat_id=$rsLevel2['productcat_id'];
//echo"<a href=\"index.php?page=productcat\">";
//echo"กลับไปยังหมวดสินค้า";
//echo"</a>";
//echo"-->$rs[productcat_name]";
?>
<div class="content_product">
	<div class="content_title_product"><!-- create table-->
		<div class="content_1_product">ลำดับ</div><!-- row-->
		
		<div class="content_3_product">ข้อสอบ</div><!-- row-->
		<div class="content_4_product">แสดง</div><!-- row-->
		<div class="content_5_product">การจัดการ</div><!-- row-->
		<br style="clear:both" />
	</div>
	
	<?PHP
	$strSQL="select * from exam where productcat_level2_id='$productcat_level2_id'";
	//$result=mysql_query($strSQL);
	$result=pu_query($dbname,$strSQL);
	
	$i=1;
	while($rs=mysql_fetch_array($result)){


	
	
	
	
		echo"<div class=\"content_1_product\"  style=\"padding-left:30px;\">";
		
		echo"$i";//ลำดับที่
		
		echo"</div>";
		echo"<div class=\"content_2_product\">";
			echo "&nbsp;".$rsLevel2[productcat_name]."(ID".$rs[exam_id].")";
		echo"</div>";		
		
	
		
		echo"<div class=\"content_4_product\">";
		echo"$rs[exam_enable]";
		echo"</div>";
		echo"<div class=\"content_5_product\">";
		
		
		echo"<div id=\"dev_picturelink\">";
		
		
		echo"<a onClick=\"return confirm('คุณต้องการลบสินค้านี้ ?');\" href=\"product_delete.php?action=delete&exam_id=$rs[exam_id]
		&productcat_level2_id=$productcat_level2_id\">";
		?>
                <img src="images/b_drop.png" border="0" />
        <?
		echo"ลบ";
		echo"</a>";
		echo"<a href=\"index.php?page=ecommerce_system&select_ecommerce=product&action=edit&exam_id=$rs[exam_id]&productcat_level2_id=$productcat_level2_id\">";
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
	pu_pageloop("productcat_level2_id=".$productcat_level2_id);
	?>

</div>
<br style="clear:both" />
<br style="clear:both" />
<br style="clear:both" />


<?php
if($_GET['action']=="edit"){
$submit="แก้ไข";
$exam_id=$_GET['exam_id'];
$strSQL="select * from exam where exam_id=$exam_id";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
/*
exam_id
exam_title
exam_enable
exam_choice_is_true
exam_update
productcat_level2_id
exam_explain
exam_name



*/
$exam_title= $rs[exam_title];
$exam_enable= $rs[exam_enable];
$exam_choice_is_true= $rs[exam_choice_is_true];
$productcat_level2_id= $rs[productcat_level2_id];
$exam_explain= $rs[exam_explain];
/*
echo "exam_choice_is_true=".$exam_choice_is_true."<br>";
echo "productcat_level2_id=".$productcat_level2_id."<br>";
echo "exam_explain=".$exam_explain."<br>";

*/

}else{
$submit="เพิ่ม";
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
			<!--<div class="product_manage_text">แสดง</div>-->

			<div class="product_manage_textfiled">
			 
			 
			  <input type="radio" value="Yes" name="exam_enable"checked="checked"  />
			 แสดง
			 			 <?php
			 if($exam_enable=="Yes"){
			 echo"checked";
			 }
			 ?> 
             <input name="exam_enable" type="radio" value="No"  />
			 ไม่แสดง
			 <?php
			 if($exam_enable=="No"){
			 echo"checked";
			 }
			 ?>
			 </div>
			<br style="clear:both" />
		</div>
		 <!--
		<div class="prodcut_manage_title">
			<div class="product_manage_text">หัวข้อโจทย์</div>
			<div class="product_manage_textfiled">
			<input type="text" name="examp_name" value="<?=$examp_name?>" size="50"/>
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
		<!--
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
		-->
	
    <!--CKEditor-->
  <!--  <textarea cols="80" id="product_title" name="product_title" rows="10" ><?=$product_title?></textarea>-->
    
    <!--CKEditor-->
    <!--
    <div class="prodcut_manage_title">
			<div class="product_manage_text">Detail</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>
        
       
    <textarea cols="80" id="product_title_eng" name="product_title_eng" rows="10" ><?=$product_title_eng?></textarea>
    -->
    <!--CKEditor-->
    
    
    
    
    	
        <div class="prodcut_manage_title">
			<div class="product_manage_text">รายละเอียดโจทย์</div>
			<div class="product_manage_textfiled">
			
            
			</div>
			<br style="clear:both" />
		</div>
         <!--CKEditor-->
    <textarea cols="80" id="exam_title" name="exam_title" rows="10" ><?=$exam_title?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'exam_title',{

          
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            } );
        //]]>
    </script>
   
      
	 คำตอบ

	<?php

		if($exam_choice_is_true=="A"){
		?>
		A <input type="radio" name="exam_choice_is_true" value="A" checked>
		<?
		}else{
		?>
		A <input type="radio" name="exam_choice_is_true" value="A" >
		<?
		}

		if($exam_choice_is_true=="B"){
		?>
		B <input type="radio" name="exam_choice_is_true" value="B" checked>
		<?
		}else{
		?>
		B <input type="radio" name="exam_choice_is_true" value="B" >
		<?
		}

		if($exam_choice_is_true=="C"){
		?>
		C <input type="radio" name="exam_choice_is_true" value="C" checked>
		<?
		}else{
		?>
		C <input type="radio" name="exam_choice_is_true" value="C" >
		<?
		}

		if($exam_choice_is_true=="D"){
		?>
		D <input type="radio" name="exam_choice_is_true" value="D" checked>
		<?
		}else{
		?>
		D <input type="radio" name="exam_choice_is_true" value="D" >
		<?
		}

		if($exam_choice_is_true=="E"){
		?>
		E <input type="radio" name="exam_choice_is_true" value="E" checked>
		<?
		}else{
		?>
		E <input type="radio" name="exam_choice_is_true" value="E" >
		<?
		}
	?>
		
			
		
		

		 <!--CKEditor-->
     
     
     <br>
	 <br>
	 อธิบายคำตอบ
     
    <textarea cols="100" id="exam_explain" name="exam_explain" rows="10" ><?=$exam_explain?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'exam_explain',{

          
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
	 <input type="hidden" name="action" value="<?=$action?>" />
	 <input type="hidden" name="productcat_level2_id" value="<?=$productcat_level2_id?>" />
	 <input type="hidden" name="exam_id" value="<?=$exam_id?>" />
    <input type="reset" name="reset" value="เคลียร์" onclick="window.location.assign('index.php?page=ecommerce_system&select_ecommerce=product&productcat_id=<?=$productcat_id?>&productcat_level2_id=<?=$productcat_level2_id?>')"/>
	<input type="button" name="btnBack" value="ย้อนกลับ"onclick="window.location.assign('index.php?page=ecommerce_system&select_ecommerce=productcat_level2&productcat_id=<?=$productcat_id?>')" />
</form>


