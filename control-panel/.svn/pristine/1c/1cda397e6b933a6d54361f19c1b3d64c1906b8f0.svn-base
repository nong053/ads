<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/about_us.css" rel="stylesheet" type="text/css">
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<?php 
include("../config.inc.php");
//include("fckeditor/fckeditor.php");
$strSQL="select * from customer_rule";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$cus_rule_th=$rs[cus_rule_th];
$cus_rule_eng=$rs[cus_rule_eng];

?>
<div class="content_about_us">
	<div id="about_us">
    
   
   

   
   
  <form action="process_member_rule.php" method="post" enctype="multipart/form-data">        
     <table>     
          <tr>
        	
            <td>
            <div id="about_us_div" style="width:600px;">
           	  <? //$home_title?>
             
              <? //$home_detail?>
            </div>
           
            <br style="clear:both">
            </td>
        </tr>
          
        <tr>
        	<td>รายละเอียดเพิ่มเติม
        	</td>
        </tr>
        <tr>
        	<td>
            <!--CKEditor-->
    <textarea cols="80" id="cus_rule_th" name="cus_rule_th" rows="10" ><?=$cus_rule_th?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'cus_rule_th',{

          
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
        	<td>Detail English
        	</td>
        </tr>
           <tr>
        	<td>
            <!--CKEditor-->
    <textarea cols="80" id="cus_rule_eng" name="cus_rule_eng" rows="10" ><?=$cus_rule_eng?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'cus_rule_eng',{

          
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
        </table>
  
    
    
    
    
   
    <table border="0" cellpadding="0" cellspacing="0" width="600">
    	
      
          
       
        <tr>
        	
            <td>
           
            </td>
            <tr>
            	
                <td>
          
                <input type="submit" value="บันทึกข้อมูล">
                </td>
            </tr>
        </tr>
    </table>
    </form>
    </div>
</div>

