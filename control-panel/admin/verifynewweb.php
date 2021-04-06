<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
    	<td>
        <div id="devtext_title">
        <center>
        ลำดับที่
        </center>
        </div>
    	<td>
        <div id="devtext_title">
        โฮมเำพจ
        </div>
        </td>
        <td>
        <div id="devtext_title">
        รายละเอียดเว็บ
        </div>
        </td>
        <td>
        <div id="devtext_title">
        สถานะเว็บ
        </div>
        </td>
         <td>
        <div id="devtext_title">
        <center>
        ดูรายละเีอียด
        </center>
        </div>
        </td>
       
    </tr>
    <?php 
	$strSQL="select * from webdir";
	$result = mysql_query($strSQL);
	$i=1;
	while($rs=mysql_fetch_array($result)){
	?>
    <tr>
    	<td>
        <center>
        <?=$i?>
        </center>
        </td>
        <td>
        <?=$rs[webdir_homepage]?>
        </td>
        <td>
        <?=$rs[webdir_detail]?>
        </td>
        <td>
        <?=$rs[webdir_status]?>
        </td>
       	<td>
        <center>
        <a href="webdir_detail.php?webdir_id=<?=$rs[webdir_id]?>&webdir_cat=<?=$rs[webdir_cat]?>>&TB_iframe=true&height=350&width=500" rel="sexylightbox">
        detail
        </a>
        </center>
        </td>
		
    </tr>
   
    <? $i++;
	} 
	?>
</table>
</body>
</html>