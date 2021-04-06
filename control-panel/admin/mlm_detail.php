<?
include("../config.inc.php");
$member_id=$_GET['member_id'];
$strSQL="select * from member where member_id=$member_id ";
$result=mysql_query($strSQL);
$num = mysql_num_rows($result);
$rs=mysql_fetch_array($result);

?>
<form method="post" action="edit_downline.php">
<table>
	<tr>
    	<td>
        ชื่อผูื้ใช้:
        </td>
        <td>
      
        <?=$rs[member_user]?>
        </td>
        <td> 
		
        <input type="text"  name="member_user" value="<?=$rs[member_user]?>" disabled="disabled"/>
        </td>
   		
   </tr>
   <tr>
        <td>
        password:
        </td>
        <td>
		<?=$rs[member_password]?>
        <td>
		<input type="text"  name="member_password" value="<?=$rs[member_password]?>"/> 
        </td>
		
        
        
        </td>
        
   </tr>
   <tr>
        <td>
        ชื่อ-นามสกุล:
        </td>
        <td>
		<?=$rs[member_fullname]?>
        </td>
        <td>
		
        <input type="text"  name="member_fullname" value="<?=$rs[member_fullname]?>"/> 
        
        </td>
       
   </tr>
   <tr>
        <td>
        รหัสบัตรประชาชน:
        </td>
        <td>
		<?=$rs[member_idcard]?>
        </td>
        <td>
		
        <input type="text"  name="member_idcard" value="<?=$rs[member_idcard]?>"/> 
        
        </td>
        
   </tr>
  	<tr>
        <td>
        วัน-เดือนปี-เกิด:
        </td>
        <td>
		<?=$rs[member_brithday]?>
        </td>
        <td>
		
        <input type="text"  name="member_brithday" value="<?=$rs[member_brithday]?>"/> 
       
        </td>
        
   </tr>
   <tr>
        <td>
        ที่อยู่:
        </td>
        <td>
		<?=$rs[member_address]?>
        </td>
        <td>
		
        <input type="text"  name="member_address" value="<?=$rs[member_address]?>"/> 
        
        </td>
       
   </tr>
   <tr>
        <td>
        แขวง/ตำบล:
        </td>
        <td>
		<?=$rs[member_district]?>
        </td>
        <td>
		
        <input type="text"  name="member_district" value="<?=$rs[member_district]?>"/> 
        
        </td>
        
    </tr>
   <tr>
        <td>
        อำเภอ/เขต:
        </td>
        <td>
		<?=$rs[member_prefecture]?>
        </td>
        <td>
		
        <input type="text"  name="member_prefecture" value="<?=$rs[member_prefecture]?>"/> 
        
        </td>
        
    </tr>
   <tr>
        <td>
        จังหวัด:
        </td>
        <td>
		<?=$rs[member_province]?>
        </td>
        <td>
		
        <input type="text"  name="member_province" value="<?=$rs[member_province]?>"/> 
        
        </td>
        
    </tr>
   <tr>
        <td>
        ประเทศ:
        </td>
        
        <td>
        <?=$rs[member_country]?>
        </td>
        <td>
		
        <input type="text"  name="member_country" value="<?=$rs[member_country]?>"/> 
        
        </td>
        
    </tr>
   <tr>
        <td>
        รหัสไปรษณีย์:
        </td>
        
        <td>
        <?=$rs[member_post]?>
        </td>
        <td>
		
        <input type="text"  name="member_post" value="<?=$rs[member_post]?>"/> 
        
        </td>
        
    </tr>
   <tr>
        <td>
        เบอร์โทรศัพท์:
        </td>
        
        <td>
        <?=$rs[member_tel]?>
        </td>
        <td>
		
        <input type="text"  name="member_tel" value="<?=$rs[member_tel]?>"/> 
        
        </td>
        
   </tr>
   <tr>
        <td>
        อีเมลล์:
        </td>
        <td>
        <?=$rs[member_email]?>
        </td>
        <td>
		
        <input type="text"  name="member_email" value="<?=$rs[member_email]?>"/> 
        
        </td>
        
    </tr>
   <tr>
        <td>
        ID UPLINE:
        </td>
        <td>
        <?=$rs[member_id_upline]?>
        </td>
        <td>
		
        <input type="text"  name="member_id_upline" value="<?=$rs[member_id_upline]?>"/> 
       
        </td>
        
   </tr>
   <tr>
        <td>
        NAME UPLINE:
        </td>
        <td>
        <?=$rs[member_name_upline]?>
        </td>
        <td>
		
        <input type="text"  name="member_name_upline" value="<?=$rs[member_name_upline]?>"/> 
        
        </td>
        
    </tr>
   <tr>
        <td>
        ชื่อธนาคาร:
        </td>
        <td>
        <?=$rs[member_bank]?>
        </td>
        <td>
		
        <input type="text"  name="member_bank" value="<?=$rs[member_bank]?>"/> 
       
        </td>
        
    </tr>
   <tr>
        <td>
        สาขาธนาคาร:
        </td>
        <td>
        <?=$rs[member_branch_bank]?>
        </td>
        <td>
		
        <input type="text"  name="member_branch_bank" value="<?=$rs[member_branch_bank]?>"/> 
       
        </td>
        
   </tr>
   <tr>
        <td>
        หมายเลขบัญชี:
        </td>
        <td>
        <?=$rs[member_account_number]?>
        </td>
        <td>
		
        <input type="text"  name="member_account_number" value="<?=$rs[member_account_number]?>"/> 
       
        </td>
        
    </tr>
   <tr>
        <td>
        ชื่อผู้รับประโยชน์:
        </td>
        <td>
        <?=$rs[member_beneficiaries]?>
        </td>
        <td>
		
        <input type="text"  name="member_beneficiaries" value="<?=$rs[member_beneficiaries]?>"/> 
       
        </td>
       

    </tr>
    <tr>
        <td>
        <!-- 
        <a href="delete_downline.php?member_id=<? //$rs[member_id]?>">
        ลบข้อมูล
        </a>
        -->
        
        </td>
        <td>
         
       
       
        </td>
        
      

    </tr>
   
    
</table> 
<table>
    <tr>
    	<td>
        
         <input type="button" name="del" value="ลบข้อมูล" onclick="location.href='delete_downline.php?member_id=<?=$rs[member_id]?>'" />
       <input type="hidden" name="member_id" value="<?=$rs[member_id]?>"  />
        <input type="submit" value="แก้ไขข้อมูล" />
        <input type="button"name="link" value="ย้อนกลับ" onClick="history.back()">
        
        </td>
    </tr>
</table>
</form>