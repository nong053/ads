<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<style type="text/css">
<!--
 #dev_picturetext{
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:15px;
	 
	 font-weight:bold;
 }
  #dev_picturetext2{
	 padding:5px;
	 font-size:14px;
	 font-weight:bold;
	 float:left;
	 width:130px;
 }
 #dev_check{
	 border:#CCC dotted 1px;
	 float:left;
	 width:auto;
	 padding:5px;
	 padding-left:20px;
	 padding-right:20px;
	 -moz-border-radius:5px;
	 -webkit-border-radius:15px;
	 
	 
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
 #dev_title{
	border:#09C 5px solid;
	background-color:#09F;
	-moz-border-radius:5px;
	-webkit-border-radius:15px;
	padding:5px;
	color:#FFF;
	font-weight:bold;
}
-->
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
if($action2=="edit"){
$news_id=$_GET['news_id'];
$select_news=$_GET['select_news'];
$news_cat_id=$_GET['news_cat_id'];

$strSQL="select* from news where news_id='$news_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$news_id=$rs['news_id'];
$news_title=$rs[news_title];
$news_description=$rs[news_description];
$news_detail=$rs[news_detail];
$action="edit";
$submit="แก้ไขข้อมูล";


}else{
	$news_title="";
	$news_detail="";
	$news_detail="";
	$news_update="";
	$action="add";
	$submit="เพิ่มข้อมูล";
}
include_once("news_split.php");
	$news_cat_id=$_GET['news_cat_id'];
	if(!$news_cat_id){
	$news_cat_id=1;
	}
$strSQL="select * from news where news_cat_id='$news_cat_id' order by news_update desc";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
?>
<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td width="10%">
        <div id="dev_picturetext">
        <center>
        ลำดับ
        </center>
        </div>
        </td>
    	<td width="14%">
        <div id="dev_picturetext">
        หัวข้อข่าว
        </div>
        </td>
        <td width="26%">
        <div id="dev_picturetext">
        รายละเอียด(ย่อ)
        </div>
        </td>
        <td width="16%">
        <div id="dev_picturetext">
        รูปภาพ
        </div>
        </td>
        <td width="16%">
        <div id="dev_picturetext">
        วันที่อัปเดต
        </div>
        </td>
        <td width="18%">
        <div id="dev_picturetext">
        <center>
        จัดการ
        </center>
        </div>
        </td>
    </tr>
    <?PHP
	
	//$strSQL="select * from news where picturecat_id=$picturecat_id ORDER BY picture_important ";
	//$result=mysql_query($strSQL);
	$result=pu_query($dbname,$strSQL);
	
	$i=1;
	while($rs=mysql_fetch_array($result)){
	

	
	
	//จัดการกับรูปภาพ
	$thumbnailsPath="../news/".$news_cat_id."/".$rs[news_id]."/thumbnail/";
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
    			<td>
                <center>
				<?=$i?>
                </center>
                </td>
    			<td>
                <?=$rs[news_title]?>
                </td>
    			
        		<td><center>
        			<?=$rs[news_description]?>
                    </center>
       			</td>
       			<td>
        		<img src="<?=$thumbnailsFile?>" width="50%" /></td>
                <td>
        			<?=$rs[news_update]?>
        		</td>
                
        		<td>
                <center>
                <div id="dev_picturelink">
                <a href="index.php?page=news_system&select_news=new_variety&news_id=<?=$rs[news_id]?>&action2=edit&news_cat_id=<?=$rs[news_cat_id]?>">
                <img src="images/b_edit.png"  border="0"/>
        		แก้ไขข้อมูล
                </a>
                 <a onClick="return confirm('คุณต้องการลบข้อมูลนี้ ?');" href="news_process.php?actionget=del&news_id=<?=$rs[news_id]?>&news_cat_id=<?=$rs[news_cat_id]?>&select_news=new_variety">
        <img src="images/b_drop.png"  border="0"/>
        ลบ
        </a>
                </div>
                </center>
        		</td>
    		</tr>
            
            
            <?
		
	$i++;	
	}
	
?>
 
  
</table>
<table>
	<tr>
    	<td>
		<? $numpu=pu_pageloop("news_cat_id=".$news_cat_id."&select_news=new_variety"); ?>
        </td>
    </tr>
</table>
<br style="clear:both" />
<div id="dev_title">
เพิ่มข่าว
</div>
<form method="post" action="news_process.php" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td>
    หัวข้อ
    <br>
    <input type="text" name="news_title"  value="<?=$news_title?>" />
    </td>
 </tr>
 
 <?
 if($action2!="edit"){
 ?>
  <tr>
    <td>
    รูปภาพ<br>
    <input type="file" name="picture_file[]"  />
    
    </td>
</tr>
 <? 
 }
 ?>
 
 <tr>
    <td>
    รายละเอียด(ย่อ)<br>
    <textarea name="news_description" cols="50" rows="10"><?=$news_description?></textarea>
    </td>
</tr>
<tr>
	<td>
    
    รายละเอียดทั้งหมด<br>
     <!--CKEditor-->
    <textarea cols="80" id="news_detail" name="news_detail" rows="10" ><?=$news_detail?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'news_detail',{

          
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
 <tr>

<tr>
	<td>
 
<input type="hidden" value="<?=$news_cat_id?>" name="news_cat_id" />
<input type="hidden" value="<?=$news_id?>"  name="news_id"/>
<input type="hidden" value="<?=$action?>" name="action" />
<input type="hidden" name="select_page" value="new_variety" />
<?
if($action2=="edit"){
?>
<input type="submit" value="<?=$submit?>" />
<input type="button" onclick="parent.location='index.php?page=news_system&select_news=<?=$select_news?>&news_cat_id=<?=$news_cat_id?>'" value="ยกเลิกการแก้ไข" />
<? 
}else{
?>
<input type="submit" value="<?=$submit?>" />
<input type="reset"  value="Reset"/>

<? 
}
?>
    </td>
</tr>

</table>
</form>
</body>
</html>