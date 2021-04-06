<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/about_us.css" rel="stylesheet" type="text/css">
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
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
<?php 
/*$banner_id=$_GET['banner_id'];
$action=$_GET['action'];*/
//echo"banner$banner_id<br>";
//echo"action$action";
include("../config.inc.php");
/*include("fckeditor/fckeditor.php");*/

?>


<title>จัดการคลังความรู้</title>
<div id="dev_text" style="font-size:13px; font-weight:bold; color:#FFF; padding:5px; background-color:#333;">คลังความรู้</div>
<div class="content_about_us" style="background-color:#FFF;">
	<div id="about_us">
    
    
    
    
    
    
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
    	<tr>
            <td width="11%">
             <div id="devtext_title">ลำดับ.  
            </div>       
            </td>
            <td width="24%">
             <div id="devtext_title">หัวข้อ/Title</div>        
            </td>
            <td width="50%">
             <div id="devtext_title">รายละเอียด/Detail</div>        
            </td>
            <td width="15%">
             <div id="devtext_title">จัดการ</div>
            </td>
        </tr>
<? 
$action_Knowledge=$_GET['action_Knowledge'];
if($action_Knowledge=="edit"){
$knowledge_id=$_GET['knowledge_id'];
/*echo" here edit Knowledge_id$Knowledge_id";*/
$strSQL="select * from knowledge where Knowledge_id='$Knowledge_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$Knowledge_detail_edit=$rs[Knowledge_detail];
$Knowledge_title_edit=$rs[Knowledge_title];
$Knowledge_link_edit=$rs[Knowledge_link];
$Knowledge_id=$rs[Knowledge_id];
$Knowledge_title_eng_edit=$rs[Knowledge_title_eng];
$Knowledge_detail_eng_edit=$rs[Knowledge_detail_eng];
$action_Knowledge="edit";

}else{
	$action_Knowledge="add";
}

$strSQL="select * from knowledge where admin_id='$member_user_id'";
$result=mysql_query($strSQL);
$i=1;
while($rs=mysql_fetch_array($result)){
$Knowledge_detail=$rs[Knowledge_detail];
$Knowledge_title=$rs[Knowledge_title];
$Knowledge_del_id=$rs[Knowledge_id];
$Knowledge_link=$rs[Knowledge_link];
$Knowledge_title_eng=$rs[Knowledge_title_eng];
$Knowledge_detail_eng=$rs[Knowledge_detail_eng];
$action_Knowledge_del="del";



?>	
<tr>
	<td>
    <?=$i?>
    </td>
    <td>
 
     <?
        if(strlen($Knowledge_title)>30){
		$Knowledge_title=mb_substr($Knowledge_title,0,30,"UTF-8")."...";
		}else{
		$Knowledge_title=$Knowledge_title;
		}
		echo"$Knowledge_title";
		
		if(strlen($Knowledge_title_eng)>30){
		$Knowledge_title_eng=mb_substr($Knowledge_title_eng,0,30,"UTF-8")."...";
		}else{
		$Knowledge_title_eng=$Knowledge_title_eng;
		}
		echo"($Knowledge_title_eng)";
		?>
        
        
    </td>
    <td>
    
   
    <?
	
	if($Knowledge_link==""){
        if(strlen($Knowledge_detail)>30){
		$Knowledge_detail=mb_substr($Knowledge_detail,0,30,"UTF-8")."...";
		}else{
		$Knowledge_detail=$Knowledge_detail;
		}
		echo"$Knowledge_detail";
	}else{
	echo"ลิงไปที่เว็บ$Knowledge_link";
	}
		?>
    </td>
    <td>
    <a href="Knowledge_process.php
?Knowledge_del_id=<?=$Knowledge_del_id?>&action_Knowledge_del=<?=$action_Knowledge_del?>">
    <img src="../images_system/b_drop.png" border="0" />
    </a>
    &nbsp;
    <a href="index.php?page=Knowledge&action_Knowledge=edit&Knowledge_id=<?=$Knowledge_del_id?>">
    <img src="../images_system/b_edit.png"  border="0"/>
    </a>
    </td>
</tr>
<?
$i++;
}
?>
</table>
<br style="clear:both" />
<form action="Knowledge_process.php" method="post" enctype="multipart/form-data"> 
<table border="0" cellpadding="0" cellspacing="0" width="770">
    	
        <tr>
        	<td width="705">
            	<b>หัวข้อ</b>
            </td>
        </tr>
        <tr>
            <td>
            
            <input type="text" name="Knowledge_title" value="<?=$Knowledge_title_edit?>" />
            
           
            
             
            </td>
        </tr>
        <tr>
        	<td width="705">
            	<b>Topic</b>
            </td>
        </tr>
        <tr>
            <td>
            
            <input type="text" name="Knowledge_title_eng" value="<?=$Knowledge_title_eng_edit?>" />
            
           
            
             
            </td>
        </tr>
        <tr>
        	<td>
            <b> Extranal Link</b>
            </td>
        </tr>
        <tr>
        	<td>
            	
          <input type="text" name="Knowledge_link" value="<?=$Knowledge_link_edit?>" style="color:#999; width:200px; background-color:#FFC;"  />ลิงค์ไปเว็บอื่นๆตัวอย่างเช่น http://www.google.com
            </td>
        </tr>
          
       <tr>
        	<td><b>รายละเอียด</b>
        	</td>
        </tr>
        <tr>
        	
            <td>




<!--CKEditor-->
    <textarea cols="100%" id="Knowledge_detail" name="Knowledge_detail" rows="10" ><?=$Knowledge_detail_edit?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'Knowledge_detail',{

          
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
    
            </td>
            </tr>
             <tr>
        	<td><b>Detail</b>
        	</td>
        </tr>
        <tr>
        	
            <td>




<!--CKEditor-->
    <textarea cols="100%" id="Knowledge_detail_eng" name="Knowledge_detail_eng" rows="10" ><?=$Knowledge_detail_eng_edit?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'Knowledge_detail_eng',{

          
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
    
            </td>
            </tr>
            <tr>
            	
                <td>
                <input type="hidden" value="<?=$action_Knowledge?>" name="action_Knowledge" />
                <input type="hidden" value="<?=$Knowledge_id?>" name="Knowledge_id"/>
                <input type="submit" value="Submit Now">
                </td>
            </tr>
        
    </table>
    </form>
    </div>
</div>

