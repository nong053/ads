<? session_start();

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/webbord.css" rel="stylesheet" type="text/css" />
<style>
#devbord a{
	color:#000;
}

#devtext{
	padding:5px;
	font-weight:bold;
	font-size:16px;
	
}
 #dev_picturetext {
	 padding:5px;
	 background-color:#09C;
	 color:#FFF;
	 font-size:16px;
	 
	 font-weight:bold;
 }
 #dev_picturelink a{
	 color:#000;
	 text-decoration:none;
 }
 #dev_submit{
	 padding:5px;
	 border:#999 1px solid;
 }
</style>
<div id="devbord" style="padding-left:0px;">

        
       
        
   
   <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial,Helvetica,sans-serif;
font-size:13px;">
    	<tr style="font-weight:bold; background-color:#333; height:25px; border:#CCC 1px solid;">
      
       		 <td width="64">
            <center>
            <div id="dev_picturetext">
              ลบ.
              </div>
            </center>
            </td>
       
        	<td width="118">
            <div id="dev_picturetext">
            <center>ลำดับ</center>
            </div>
            </td>
            <td width="297">
            <div id="dev_picturetext">
            หัวข้อ
            </div>
            </td>
            <td width="222">
            <div id="dev_picturetext">
            เวลาตั้งกระทู้
            </div>
            </td>
            <td width="240">
            <div id="dev_picturetext">
            ตั้งกระทู้โดย
            </div>
            </td>
            <td width="71">
            <div id="dev_picturetext">
            ตอบ
            </div>
            </td>
        </tr>
        
       
       
       <?php 
	   
	 
	  
include("webbord_split.php");
$member_user_url=trim($_SESSION['member_user_url2']);
//ทำการ select admin_id ออกมาจาก admin
$query_admin="select admin_id from admin where admin_username='".$member_user_url."'";
$result_admin=$obj_manage_data->select_data_proc($query_admin);
$rs_admin=mysql_fetch_array($result_admin);
if(!$rs_admin){
$admin_id=0;
}else{
$admin_id=$rs_admin['admin_id'];
}
if($_SESSION['admin_status']=="3"){
$admin_id=1;
}

echo"admin_id".$admin_id;
	   $strSQL="select * from topic where admin_id='$admin_id' order by topic_update desc";
	   //$result=mysql_query($strSQL);
	   $result=pu_query($dbname,$strSQL);
	   $i=1;
	   $j=1;
	   while($rs=mysql_fetch_array($result)){
		  
		$strSQL2="select * from answer where topic_id=$rs[topic_id] ";
		$result2=mysql_query("$strSQL2");
		$num = mysql_num_rows($result2);
		$bgcolor=($j++%2)?'#CCCCCC':'#ffffff';
	   ?>
        <tr bgcolor="<?=$bgcolor?>">
      
            <td>
            <a href="del_topic.php?topic_id=<?=$rs[topic_id]?>">
            <center><img src="../images_system/b_drop.png" border="0" /></center>
            </a>
            </td>
       
       
         	<td>
            <center>
            <?=$i?>
            </center>
            </td>
            
            <td>
            <div id="create017_divtable" style="width:297px;">
            <a href="index.php?page=answer&topic_id=<?=$rs[topic_id]?>">
            <img src="../images_system/date_go.png" border="0" />
            </a>
			<?php 
			
			if(strlen($rs[topic_subject])>80){
				$topic_subject=mb_substr($rs[topic_subject],0,80,"UTF-8")."...";
				echo"$topic_subject";
			}else{
				echo"$rs[topic_subject]";
			}
			?>
            
            </div>
            </td>
            
            <td>
            <?=$rs[topic_update]?>
            </td>
            
            <td>
            <?=$rs[topic_name]?>
            </td>
            
            <td>
            <center>
            <?php //จำนวนคนตอบ
			/*$strSQL3="select * from answer";
			$result=mysql_query($strSQL3);
			$num=mysql_num_rows($result);
			echo"$num";*/
			echo" $num";
			?>
            </center>
            </td>
        </tr>
       <?php
	   $i++;
	   }
	   
	   ?>
    </table>
    <?php 
	
	pu_pageloop();
	?>
</div>