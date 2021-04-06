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
        ตำแหน่งงาน
        </div>
        </td>
        <td width="20%">
        <div id="devtext">
        รายละเอียด
        </div>
        </td>
        <td width="10%">
        <div id="devtext">
        ที่อยู่
        </div>
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
		$strSQL="select * from job";
		$result=mysql_query($strSQL);
		$i=1;
		while($rs=mysql_fetch_array($result)){
		?>
    <tr>

    
    	<td>
        <center>
       <a href="job_delete.php?id=<?=$rs[job_id]?>" title="ลบ">
       <img src="../images_system/b_drop.png" border="0" />
       </a>
       &nbsp;
        <?=$i?>
        </center>
        </td>
        <td>
        <?=$rs[job_position]?>
        </td>
        <td>
         <a href="job_detail.php?job_id=<?=$rs[job_id]?>&TB_iframe=true&height=350&width=500"  rel="sexylightbox" >
         <img src="../images_system/date_go.png"  border="0"/>
		</a>
		<?php if(strlen($rs[job_detail])>15){
		$job_detail=mb_substr($rs[job_detail],0,15,"UTF-8")."...";
		echo"$job_detail";
		}else{
		?>
		<?=$rs[job_detail]?>
		<?php }?>
		
        </td>
        <td>
        <?=$rs[job_address]?>
        </td>
        <td>
        <?=$rs[job_tel]?>
        </td>
        <td>
        
        <?=$rs[job_email]?>
        </td>
        <td>
        <?=$rs[job_date]?>
        </td>
        
    </tr>
    <? $i++;
	}
?>
    
</table>

