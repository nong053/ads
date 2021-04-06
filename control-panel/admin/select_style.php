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
#select_style_bg{
	width:auto;
	height:auto;
}
#select_style_bg #box_select_style_bg{
	width:auto;
	height:auto;
	float:left;
}
#select_style_bg #box_select_style_bg #laout_style{
	
}
#select_style_bg #box_select_style_bg #list_style{
	
}
</style>
<div id="devtext_title">
เลือกLaout
</div>
<?
$select_laout=$_POST['select_laout'];
if($select_laout){
//echo"select_laout$select_laout";
//$strSQL="INSERT INTO select_style(select_style_number)VALUES($select_laout)";
$strSQL="UPDATE select_style SET select_style_number='$select_laout' where select_style_id='1'";
mysql_query($strSQL);

}else{
 include("class_mysql.php");
 $db= new database();
 $result_select=$db->selectSQL("select_style");
 $rs_select=mysql_fetch_array($result_select);
 $select_laout=$rs_select[select_style_number];	
}


switch($select_laout){
	case"1":$checked1="checked";break;
	case"2":$checked2="checked";break;
	case"3":$checked3="checked";break;
	case"4":$checked4="checked";break;
	case"5":$checked5="checked";break;
	case"6":$checked6="checked";break;
}
?>

<form action="index.php?page=style_system&select_page=select_style" method="post">
<div id="select_style_bg">
	<div id="box_select_style_bg">
    	<div id="laout_style">
    	<img src="../images_system/layout_1.png">
        </div>
        <div id="list_style">
        <input type="radio" name="select_laout" value="1" <?=$checked1?>>เลือกLaoutนี้
        </div>
    </div>
    <div id="box_select_style_bg">
    	<div id="laout_style">
    	<img src="../images_system/layout_1.png" >
        </div>
        <div id="list_style">
        <input type="radio" name="select_laout" value="2" <?=$checked2?>>เลือกLaoutนี้
        </div>
    </div>
    <div id="box_select_style_bg">
    	<div id="laout_style">
    	<img src="../images_system/layout_1.png">
        </div>
        <div id="list_style">
        <input type="radio" name="select_laout" value="3" <?=$checked3?>>เลือกLaoutนี้
        </div>
    </div>
    <div id="box_select_style_bg">
    	<div id="laout_style">
    	<img src="../images_system/layout_1.png">
        </div>
        <div id="list_style">
        <input type="radio" name="select_laout" value="4" <?=$checked4?>>เลือกLaoutนี้
        </div>
    </div>
     <div id="box_select_style_bg">
    	<div id="laout_style">
    	<img src="../images_system/layout_1.png">
        </div>
        <div id="list_style">
        <input type="radio" name="select_laout" value="5" <?=$checked5?>>เลือกLaoutนี้
        </div>
    </div>
    <div id="box_select_style_bg">
    	<div id="laout_style">
    	<img src="../images_system/layout_1.png">
        </div>
        <div id="list_style">
        <input type="radio" name="select_laout" value="6" <?=$checked6?>>เลือกLaoutนี้
        </div>
    </div>
    <br style="clear:both">
</div>

 <br style="clear:both">
 <input type="submit" value="Next Step">
 </form>
