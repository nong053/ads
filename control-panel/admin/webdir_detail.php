<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
include("../config.inc.php");
$webdir_id=$_GET['webdir_id'];
$webdir_cat=$_GET['webdir_cat'];
$strSQL="select * from webdir where webdir_id='$webdir_id'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);

?>
<table>

	<tr>
    	<td>
        หมวดสาระบัญ
        </td>
        <td>
        <?
		$strSQL2="select * from cat_webdir where cat_webdir_id='$webdir_cat'";
		$result2=mysql_query($strSQL2);
		$rs2=mysql_fetch_array($result2);
		echo $rs2[cat_webdir_title];
		?>
        </td>
    </tr>
    <tr>
    	<td>
        URL:
        </td>
        <td>
        <?=$rs[webdir_url]?>
        </td>
    </tr>
    <tr>
    	<td>
        โอมเพจ
        </td>
        <td>
        <?=$rs[webdir_homepage]?>
        </td>
    </tr>
    <tr>
    	<td>
        รายละเอียดเว็บ
        </td>
        <td>
        <?=$rs[webdir_detail]?>
        </td>
    </tr>
    <tr>
    	<td>
       Tag1
        </td>
        <td>
        <?=$rs[webdir_tag1]?>
        </td>
    </tr>
    <tr>
    	<td>
        Tag2
        </td>
        <td>
        <?=$rs[webdir_tag2]?>
        </td>
    </tr>
    <tr>
    	<td>
        Tag3
        </td>
        <td>
        <?=$rs[webdir_tag3]?>
        </td>
    </tr>
    <tr>
    	<td>
        Keyword
        </td>
        <td>
        <?=$rs[webdir_keyword]?>
        </td>
    </tr>
    <tr>
    	<td>
        email:
        </td>
        <td>
        <?=$rs[webdir_mail]?>
        </td>
    </tr>
    <tr>
    	<td>
        สถานะการแสดงผล
        </td>
        <td>
        <?=$rs[webdir_status]?>
        </td>
    </tr>
    
    
    
</table>