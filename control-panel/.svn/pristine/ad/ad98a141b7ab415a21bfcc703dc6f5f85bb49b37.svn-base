<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<?
include("../config.inc.php");
//include("fckeditor/fckeditor.php");?>
<div id="dev_text" style="font-size:18px; font-weight:bold; color:#FFF; padding:5px; background-color:#333;">
SMALL BANNER 170 X 100 px
</div>

<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="62">
        <div id="text_home" style="font-weight:bold; padding:5px; padding-left:20px;background-color:#CCC;">
        No.
        </div>
        </td>
        <td width="185">
        <div id="text_home" style="font-weight:bold; padding:5px; background-color:#CCC;">
        Small Banner
        </div>
        </td>
        <td width="201">
        <div id="text_home" style="font-weight:bold; padding:5px; background-color:#CCC;">
        Position
        </div>
        </td>
        <td width="262">
        <div id="text_home" style="font-weight:bold; padding:5px; background-color:#CCC;">
       	Banner Detail
        </div>
        </td>
        <td width="142">
        <div id="text_home" style="font-weight:bold; padding:5px; background-color:#CCC;">
       	Banner Link
        </div>
        </td>
        <td width="142">
        <div id="text_home" style="font-weight:bold; padding:5px; background-color:#CCC;">
       	Action
        </div>
        </td>
    </tr>
    <? 
	$action=$_GET['action'];
	if($action=="edit"){
	$pic_id=$_GET['pic_id'];
	
	$strSQL="select * from picture where pic_id=$pic_id";
	//echo"hello";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);
	 $pic_type_edit=$rs[pic_type];
	 $pic_detail_edit=$rs[pic_detail];
	 $pic_link_edit=$rs[pic_link];
	 $action_banner="edit_piture.php";
	}else{
		$action_banner="add_picture.php";
	}
		
	$strSQL5 = "select * from picture";
	$result5=mysql_query($strSQL5);
	$num5=mysql_num_rows($result5);
	$i=1;
	while($rs5=mysql_fetch_array($result5)){	
	$pic_id=$rs5[pic_id];
	$pic_name=$rs5[pic_name];
	$pic_type=$rs5[pic_type];
	$pic_detail=$rs5[pic_detail];
	$pic_link=$rs5[pic_link];
	
	?>
     <tr>
     	<td>
        <center>
        <?=$i?>
        </center>
        </td>
    	<td>
        <img src="../mypicture/<?=$pic_name?>" width="20%" height="20%" />
        
        </td>
        <td>
       
        <?=$pic_type?>
		
        </td>
        <td>
        <?
        if(strlen($pic_detail)>20){
		$pic_detail=mb_substr($pic_detail,0,20,"UTF-8")."...";
		}else{
		$pic_detail=$pic_detail;
		}
		echo"$pic_detail";
		?>
        </td>
        <td>
        
        <?
        if(strlen($pic_link)>20){
		$pic_link=mb_substr($pic_link,0,20,"UTF-8")."..";
		}else{
		$pic_link=$pic_link;
		}
		echo"$pic_link";
		?>
        </td>
        <td>
        <a href="delete_picture.php?page=banner&pic_id=<?=$pic_id?>"> <img src="../images_system/b_drop.png" border="0" /></a>
        <a href="index.php?page=banner&pic_id=<?=$pic_id?>&action=edit&pic_type=<?=$pic_type?>"> <img src="../images_system/b_edit.png"  border="0"/></a>
        </td>
     </tr>
	
    
    <?
	$i++;
	}
	?>
    
   
    </table>

<form action="<?=$action_banner?>" method="post" enctype="multipart/form-data">
<table>
   		<tr>
        	<td>
            <b>Banner Upload</b>
          </td>
        </tr>
        <? 
		if(!$action=="edit"){
		?>
        <tr>
        	<td>
           
            <input type="file" name="filUpload">
            </td>
        </tr> 
         
        <?
		}
		?>
        <tr>
        	<td>
          
           
           
           <?
		
        $pic_type=$_GET['pic_type'];
		$pic_id=$_GET['pic_id'];
		
		$pic[1]="หน้าแรก";
		$pic[2]="หน้าทัวร์";
		$pic[3]="หน้าจองทัวร์";
		$pic[4]="หน้าเว็บบอร์ด";
		
		
		 $strSQL_position="select * from picture where pic_id='$pic_id'";
		 $result_position=mysql_query($strSQL_position);
		 if($result_position){
			 $num_position=mysql_num_rows($result_position);
		 }
         //$picture_important=$rs[picture_important]
		
		 ?>
		<select name="pic_type">
		  <?
		
		for($i=1;$i<=4; $i++){
			if($pic_type==$pic[$i]){
		?>
		  <option selected="selected" value="<?=$pic[$i]?>">
		    <?=$pic[$i]?>
	      </option>
		  <?
		}else{
		?>
		  <option value="<?=$pic[$i]?>">
		    <?=$pic[$i]?>
	      </option>
		  <? 
		}
	}
		?>
		  </select>
          
		
           
           
           
           ตำแหน่่ง banner
            </td> 
        </tr>
        <tr>
        	<td>
            Link ไปเว็บอื่นๆ
            </td>
        </tr>
        
        
        <tr>
        	<td>
            <input type="text" name="pic_link" value="<?=$pic_link_edit?>">ตัวอย่างเช่น http://www.google.com/
            </td>
        </tr>
       
          <tr>
        	<td><b>Banner Detail</b>
        	</td>
        </tr>
        <tr>
        
        
        	<td>
           
					
                    
                   <!--CKEditor-->
    <textarea cols="80" id="pic_detail" name="pic_detail" rows="10" ><?=$pic_detail_edit?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'pic_detail',{

          
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
           <td height="26">
           	<input type="hidden" name="pic_type_page" value="banner" >
            <input type="hidden" name="pic_id" value="<?=$pic_id?>" />
            <input name="btnSubmit" type="submit" value="Submit Now">
            
           </td>
        </tr>
       
   </table>
 </form>