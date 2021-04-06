<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#devtext{
	padding:5px;
	
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#dev_bg{
	color:#666;  font-weight:bold; 
	padding:5px; font-size:13px;
}

</style>
<script src="mootools.js" type="text/javascript"></script>
<script src="sexylightbox.packed.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexylightbox.css" type="text/css" media="all" />

<script type="text/javascript">
  window.addEvent('domready', function(){
    new SexyLightBox();
    new SexyLightBox({find:'sexywhite',color:'white', OverlayStyles:{'background-color':'#000'}});
  });
</script>
<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td width="11%">
        <div id="devtext" style=" border-left:#dedede solid 1px;">
        <center>
        ลำดับ
        </center>
        </div>
        </td>
        <td width="11%">
        <div id="devtext">
        หัวข้อ
        </div>
        </td>
        <td width="20%">
        <div id="devtext">
        รายละเอียด
        </div>
        </td>
        <!--  <td width="10%">
       
        <div id="devtext">
        ที่อยู่
        </div>
         -->
        </td>
        <td width="15%">
        <div id="devtext">
        เบอร์โทร
        </div>
        </td>
        <td width="14%">
        <div id="devtext">อีเมลล์</div>
        </td>
        <td width="19%">
        <div id="devtext" style="border-right:#dedede solid 1px;">
        เวลาติดต่อ
        </div>
        </td>
    </tr>
    <?php 
include("../config.inc.php");

//##### Check manage user login start #####
$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก table contact
$query_contact="select admin_id from contact WHERE
contact.admin_id=(select admin_id from admin
where admin_username='".$member_user_url."');";
$result_contact=$obj_manage_data->select_data_proc($query_contact);
$rs_num=mysql_num_rows($result_contact);

//ทำการ select admin_id ออกมาจาก admin
$query_admin_id="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin_id=$obj_manage_data->select_data_proc($query_admin_id);
$rs_admin_id=mysql_fetch_array($result_admin_id);

if(!$rs_num){
$values=0;
}else{
$values = $rs_admin_id['admin_id'];
}
if($_SESSION['admin_status']=="3"){

$values=1;
}
//##### Check manage user login end #####

		$strSQL="select * from contact  where admin_id=$values";
		$result=mysql_query($strSQL);
		$i=1;
		while($rs=mysql_fetch_array($result)){
		?>
    <tr>
    	<td>
        <center>
       <a href="contact_delete.php?id=<?=$rs[contact_id]?>" title="ลบ">
       <img src="../images_system/b_drop.png" border="0" />
       </a>
       &nbsp;
        <?=$i?>
        </center>
        </td>
        <td>
        <?=$rs[contact_title]?>
        </td>
        <td>
         <a href="contact_detail.php?contact_id=<?=$rs[contact_id]?>&TB_iframe=true&height=350&width=500"  rel="sexylightbox" >
         <img src="../images_system/date_go.png"  border="0"/>
		</a>
		<?php if(strlen($rs[contact_detail])>15){
		$contact_detail=mb_substr($rs[contact_detail],0,15,"UTF-8")."...";
		echo"$contact_detail";
		}else{
		?>
		<?=$rs[contact_detail]?>
		<?php }?>
		
        </td>
        <!-- 
        <td>
        <?//$rs[contact_address]?>
        </td>
         -->
        <td>
        <?=$rs[contact_tel]?>
        </td>
        <td>
        
        <?=$rs[contact_email]?>
        </td>
        <td>
        <?=$rs[contact_date]?>
        </td>
        
    </tr>
    <? $i++;
	}
?>
</table>

