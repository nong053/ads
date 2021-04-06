<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
<script src="../sum_js/jquery.min.js"></script>
<script>
$(document).ready(function(){
	alert("hello jquery");
});
</script>
-->
<link href="css/about_us.css" rel="stylesheet" type="text/css">
<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->
<?php 
include("../config.inc.php");



$member_user_url=trim($_SESSION['member_user_url2']);
//##### Check table home start #####
//ทำการ select admin_id ออกมาจาก table home
$query_home="select admin_id from home WHERE
home.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_home=$obj_manage_data->select_data_proc($query_home);
$rs_num=mysql_num_rows($result_home);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

//ทำการเพิ่มข้อมูลเมื่อมี User ใหม่เข้ามา
if(!$rs_num){
	$table="home";
	$field="admin_id";
	$values = $rs_admin_id['admin_id'];
	$obj_manage_data->insert_data($table,$field,$values);
}
//##### Check table home end #####

//include("fckeditor/fckeditor.php");

$values = $rs_admin_id['admin_id'];
if($_SESSION['admin_status']=="3"){
	//echo"admin here";
	$values=1;
}
$strSQL="select * from home where admin_id='$values'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
$home_detail=$rs[home_detail];
$home_title=$rs[home_title];
$home_detail_eng=$rs[home_detail_eng];

?>
<div class="content_about_us">
	<div id="about_us">
    <div style="font-size:13px; font-weight:bold; color:#FFF; padding:5px; background-color:#333;" id="dev_text">
	          รายละเอียดเพิ่มเติมหน้าแรก
	</div>
    <table>
    <? $strSQL5 = "select * from banner_sum where pic_type='home'";
	$result5=mysql_query($strSQL5);
	$num5=mysql_num_rows($result5);
	while($rs5=mysql_fetch_array($result5)){	
	$pic_name=$rs5[pic_name];
	$pic_id=$rs5[pic_id];
	
	?>
	<img src="../mypicture/<?=$pic_name?>" height="100" />
    <a href="delete_picture.php?page=home&pic_id=<?=$pic_id?>">
    <img src="images/b_drop.png" border="0" />ลบ.
    </a>
    <?
	}
	?>
    
    
    </table>
   
  

<!--
     <form name="form1" method="post" action="add_picture.php" enctype="multipart/form-data">
   <table>
   		<tr>
        	<td>
            อัปโหลด รูปภาพ
            </td>
        </tr>
        <tr>
        	<td>
            <input type="file" name="filUpload">
            </td>
           <td>
           	<input type="hidden" name="pic_type" value="home" >
            <input name="btnSubmit" type="submit" value="Submit">
            
           </td>
        </tr>
       
   </table>
   </form>  
   
 -->  
   
   
   
  <form action="process_home.php" method="post" enctype="multipart/form-data">        
     <table>     
         
          
       
        <tr>
        	<td>
            <!--CKEditor-->
    <textarea cols="80" id="home_detail" name="home_detail" rows="10" ><?=$home_detail?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'home_detail',{

          
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
           <tr style='display:none;'>
        	<td>Detail English
        	</td>
        </tr>
           <tr style='display:none;'>
        	<td>
            <!--CKEditor-->
    <textarea cols="80" id="home_detail_eng" name="home_detail_eng" rows="10" ><?=$home_detail_eng?></textarea>
    <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'home_detail_eng',{
			//"../ckfinder/ckfinder.html"
            filebrowserBrowseUrl : '../ckfinder/ckfinder.html',
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
				<input type="hidden" name="admin_id" id="admin_id" value="<?= $rs_admin_id['admin_id']?>">
                <input type="hidden" value="add" name="action" />
                <input type="submit" value="บันทึก">
				<input type="reset" value="ยกเลิก" id="reset">
                </td>
            </tr>
        </tr>
    </table>
    </form>
    </div>
</div>

