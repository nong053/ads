<style>
#devtext_title{	
	padding:5px;
	font-weight:bold;
	font-size:13px;
	border-top:#dedede solid 1px;
	border-bottom:#dedede solid 1px;
	background:#efefef;
}
#devtext a{
	color:#000;
	text-decoration:none;

	 
}
</style>
<?
$vdo="เพิ่มหมวดวีดีโอ";
$action2="เพิ่มหมวดวีดีโอ";
$action3="add";
$action=$_GET['action'];
$id_cat_youtupe2=$_GET['id_cat_youtupe2'];
if($action=="edit"){
?>
<a href="index.php?page=you_tupe">เพิ่มหมวดวีดีโอ</a>
<? 
$vdo="แก้ไขหมวดวีดีโอ";
$action2="แก้ไขหมวดวีดีโอ";
$action3="edit";
$strSQL="select * from cat_youtupe where id_cat_youtupe=$id_cat_youtupe2";
$result=mysql_query($strSQL);
if(!$result){echo"error".mysql_error();}
$rs=mysql_fetch_array($result);
$title_cat_youtupe=$rs[title_cat_youtupe];

}
?>
<form method="post" action="action_youtube_cat.php">
<table width="100%"  border="0" cellpadding="0" cellspacing="0" id="devtext">
	
   
    
    <tr bgcolor="#CCCCCC">
    	<td align="center">
        <div id="devtext_title">
        ลำดับที่.
        </div>
        </td>
        <td>
        <div id="devtext_title">
        ชื่อหมวด วีดีโอ
        </div>
        </td>
        <td>
        <div id="devtext_title">
       จัดการ
       </div>
        </td>
    </tr>
   <hr />
    <?
	include("../config.inc.php");
	$strSQL="select * from cat_youtupe";
	$result=mysql_query($strSQL);
	while($rs=mysql_fetch_array($result)){
		$id_cat_youtupe=$rs[id_cat_youtupe];
		
	?> 
    
    <tr>
    	<td align="center">
        <?=$rs[id_cat_youtupe]?>
        </td>
        <td>
        <a href="index.php?page=vdo_system&select_page=youtube&id_cat_youtupe=<?=$id_cat_youtupe?>">
        <?=$rs[title_cat_youtupe]?>
        </a>
        </td>
        
        <td>
        <a href="action_youtube_cat.php?id_cat_youtupe=<?=$id_cat_youtupe?>&action=del">
        ลบ
        </a>
        <a href="index.php?page=vdo_system&select_page=youtube_cat&action=edit&id_cat_youtupe2=<?=$id_cat_youtupe?>">
        แก้ไข
        </a>
        </td>
    </tr>
     <? }?>
     <tr>
     	<td>
<div id="hhh" style="height:5px;">
</div>        
        </td>
        <td>
        </td >
     </tr>
     <tr>
    	<td>
         <?=$vdo?>
        </td>
        <td>
        <input type="text" name="title_cat_youtupe" value="<?=$title_cat_youtupe?>" />
        </td>
    </tr>
    <tr>
    	<td>
      
        </td>
        <td>
        <div id="hhh" style="height:5px;">
</div>  
        <input type="hidden" name="id_cat_youtupe" value="<?=$id_cat_youtupe2?>" />
        <input type="hidden" name="action" value="<?=$action3?>" />
        <input type="submit" value="<?=$action2?>"  name="submitaa" />
        </td>
    </tr>
  
</table>


</form>
