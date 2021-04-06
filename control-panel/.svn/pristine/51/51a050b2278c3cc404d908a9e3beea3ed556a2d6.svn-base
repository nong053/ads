<!-- jquery ui-->

<script src="../jQueryUI/js/jquery-1.8.0.min.js"></script>
<script src="../jQueryUI/js/jquery-ui-1.8.23.custom.min.js"></script>
<link href="../jQueryUI/css/custom-theme/jquery-ui-1.8.23.custom.css" rel="stylesheet" type="text/css">
<!-- jquery ui-->
<script>
$.noConflict();
  jQuery(document).ready(function($) {
	  //function show data
	  var show_data = function(){
	  $.ajax({
						url:'action_webre.php',
						type:'post',
						dataType:'html',
						cache:false,
						data:{'action':'show_data_del_edit'},
						success:function(data){
						//alert(data);
						$("table#show_data tbody").html(data);
						}
		});
	  }
	  show_data();

	  //click check detail website start
	  $(".detail_webRegister").live("click",function(){
	  //alert(this.id);
	  var this_webre_id=this.id;
	  var webre_id=this_webre_id.substring("8");
	 //alert(webre_id);
				$.ajax({
					url:'webre_detail.php',
					type:'get',
					dataType:'html',
					data:{'webre_id':webre_id},
					success:function(data){
					//alert(data);
					$("#detail_dialog").html(data);
					$("#detail_dialog").dialog({
					 modal: true,
					 buttons: {
						Ok: function() {
						$( this ).dialog( "close" );
						}
					}
					});
					}
				});
	  });
	  //click check detail website end

	$("#webre_start").datepicker();
	$("#webre_end").datepicker();
	$(".button").button();

//SUBMIT HERE
$("#form_web_register").submit(function(){
var admin_name =$("#admin_name").val();
var admin_surname = $("#admin_surname").val();
var admin_username =$("#admin_username").val();
var admin_password =$("#admin_password").val();
var admin_status =$("#admin_status").val();
var admin_email =$("#admin_email").val();
var admin_address =$("#admin_address").val();
var admin_tel =$("#admin_tel").val();
var action = $("#action").val();
var admin_id = $("#admin_id").val();
//alert("action"+action);
//alert("admin_name="+admin_name+"\n"+"admin_surname="+admin_surname+"\n"+"admin_username="+admin_username+"\n"+"admin_password="+admin_password+"\n"+"admin_status="+admin_status+"\n"+"admin_email="+admin_email+"\n"+"admin_address="+admin_address+"\n"+"admin_tel="+admin_tel+"\n");
	$.ajax({
	url:'action_webre_admin.php',
	type:'POST',
	dataType:'json',
	cache:'false',
	data:{'admin_id':admin_id,'admin_name':admin_name,'admin_surname':admin_surname,'admin_username':admin_username,'admin_password':admin_password,'admin_status':admin_status,'admin_email':admin_email,'admin_address':admin_address,'admin_tel':admin_tel,'action':action},
	success:function(data){
		//alert(data);
		if(data['result']=="success"){
			var admin_id = $("#admin_id").val();
			var webre_url  = $("#webre_url").val();
			var webre_detail  = $("#webre_detail").val(); 	
			var webre_start  = $("#webre_start").val();
			var webre_end  = $("#webre_end").val();
			var webre_cat_id  = $("#cat_webre_package").val(); 	
			/*
			alert("webre_url "+$("#webre_url").val());
			alert("webre_detail "+$("#webre_detail").val());
			alert("webre_start "+$("#webre_start").val());
			alert("webre_end "+$("#webre_end").val());
			alert("webre_cat_id "+$("#cat_webre_package").val());
			*/
			$.ajax({
				url:'action_webre.php',
				type:'post',
				dataType:'json',
				cache:false,
				data:{'webre_url':webre_url,'webre_detail':webre_detail,'webre_start':webre_start,'webre_end':webre_end,'webre_cat_id':webre_cat_id,'admin_id':admin_id,'action':'edit'},
				success:function(data){
					//alert(data['result']);
					if(data['result']=="success"){
							alert("Edit is Successfully");
							show_data();
					}
				}//if function success2
			});//ajax
		}//if success
	}//if function success1
	});
		return false;
	})
	/*Delete data*/
	$(".manage_del").live("click",function(){
		if(confirm("ยืนยันการลบข้อมูล")){
		var webre_id = this.id;
		webre_id = webre_id.substring(8);
		$.ajax({
			url:'action_webre.php',
			type:'post',
			dataType:'json',
			data:{'webre_id':webre_id,'action':'delete'},	
			success:function(data){
				if(data['result']=='success'){
					show_data();
					$("#editDisplay").hide();
				}
			}
		});
		}//confrim
	});

	/*Edit data Start*/
	$(".manage_edit").live("click",function(){
		$("#editDisplay").show();
		var webre_id = this.id;
		webre_id = webre_id.substring(8);
		 $.ajax({
						url:'action_webre.php',
						type:'post',
						dataType:'json',
						cache:false,
						data:{'action':'show_edit_data','webre_id':webre_id},
						success:function(data){
						/*
						console.log(data['webre_url']);
						console.log(data['webre_detail']);
						console.log(data['webre_start']);
						console.log(data['webre_end']);
						console.log(data['cat_webre_package']);

						*/
						$("#webre_url").val(data['webre_url']);
						$("#webre_detail").val(data['webre_detail']);
						$("#webre_start").val(data['webre_start']);
						$("#webre_end").val(data['webre_end']);
						$("#cat_webre_package").val(data['cat_webre_package']);

						console.log(data['admin_name']);
						console.log(data['admin_surname']);
						console.log(data['admin_username']);
						console.log(data['admin_password']);
						console.log(data['admin_status']);
						console.log(data['admin_email']);
						console.log(data['admin_website']);
						console.log(data['admin_send_email']);
						console.log(data['admin_address']);
						console.log(data['admin_tel']);
						
						$("#admin_name").val(data['admin_name']);
						$("#admin_surname").val(data['admin_surname']);
						$("#admin_username").val(data['admin_username']);
						$("#admin_password").val(data['admin_password']);
						$("#admin_status").val(data['admin_status']);

						$("#admin_email").val(data['admin_email']);
						$("#admin_website").val(data['admin_website']);
						$("#admin_send_email").val(data['admin_send_email']);
						$("#admin_address").val(data['admin_address']);
						$("#admin_tel").val(data['admin_tel']);
						$("#admin_id").val(data['admin_id']);

						}
		});

	});
	/*Edit data End*/

  });/*jQuery*/
</script>
<!-- sexy light-->

<script src="mootools.js" type="text/javascript"></script>
<script src="sexylightbox.packed.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexylightbox.css" type="text/css" media="all" />

<script type="text/javascript">


  window.addEvent('domready', function(){
    new SexyLightBox();
    new SexyLightBox({find:'sexywhite',color:'white', OverlayStyles:{'background-color':'#000'}});
  });

</script>



<!-- sexy light-->

<style>
.detail_webRegister{
cursor:pointer;
}
#devtext_name{
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
#editDisplay{
display:none;
}
.manage_data{
cursor:pointer;
display:inline;
}

</style>


<!--
ตัวอย่าง
<input type="button" onclick="ShowResult('test_ajax.php?')" value="click here" />-->
<!--<input type="button" onblur="postResult()" value="post ajax" />-->
<!--<div id="Result">
</div>
<div id="resultArea1"></div>
<div id="resultArea"></div>

<form name="form1"  method="post" action="">
 <input type="text" name="test"/>
 
 <input type="button" onclick="postResult('post_ajax.php')"  value="click"/>
</form>
-->
<table border="0" cellpadding="0" cellspacing="0" width="100%" id="show_data">
<thead>
	<tr>
    	<th>
        <div id="devtext_name">
        <center>
        ลำดับที่
        </center>
        </div>
		</th>
		 <th>
        <div id="devtext_name">
        ชื่อเว็บ
        </div>
        </th>
        <th>
        <div id="devtext_name">
        package
        </div>
        </th>
        <th>
        <div id="devtext_name">
        สถานะเว็บ
        </div>
        </th>
         <th>
        <div id="devtext_name">
        <center>
        ดูรายละเอียด
        </center>
        </div>
        </th>
       
    </tr>
	<thead>
	<tbody>

	</tbody>
</table>



<table>
	<tr>
    	<td>
         
        <div id="Result"></div>
       
        </td>
    </tr>
</table>
<div id="editDisplay">
<table>
	<tr>
    	<td>
        แก้ไขข้อมูลเว็บ
        </td>
    </tr>
</table>

<form name="form_web_register" id="form_web_register" >
<table>

	<tr>
    	<td>
        Package
        </td>
        <td>
        
        <select name="cat_webre_package " id="cat_webre_package">
        <?php
		$strSQL="select * from webcat_register";
		$result=mysql_query($strSQL);
		while($rs=mysql_fetch_array($result)){
		?>
        	<option value="<?=$rs[cat_webre_id]?>"><?=$rs[cat_webre_package]?></option>
            
         <?
		}
		 ?>
        </select>
        </td>
    </tr>
    <tr>
    	<td>
        URL:
        </td>
        <td>
        <input type="txt" name="webre_url " id="webre_url"/>
        </td>
    </tr>
    
    <tr>
    	<td>
        รายละเอียดเว็บ
        </td>
        <td>
        <textarea name="webre_detail" id="webre_detail"></textarea>
        </td>
    </tr>
   
    <tr>
    	<td>
       เริ่มใช้งาน
        </td>
        <td>
        <input type="txt" name="webre_start" id="webre_start">
        </td>
    </tr>
    <tr>
    	<td>
        หมดอายุการใช้งาน
        </td>
        <td>
        <input type="txt" name="webre_end" id="webre_end">
        </td>
    </tr>
	<!-- addmin -->
	<tr><td>----</td><td>---</td></tr>
	 <tr>
    	<td>
        สถานะการแสดงผล
        </td>
        <td>
        <select name="admin_status" id="admin_status">
        <option value="0">รอตรวจสอบ</option>
        <option value="1">แสดงผล</option>
       <!-- <option value="stop">ระงับการแสดงผล</option>-->
        </select>
        </td>
    </tr>
	 <tr>
    	<td>
        ชื่อผู้ใช้งาน
        </td>
        <td>
        <input type="txt" name="admin_name" id="admin_name">
        </td>
    </tr>
 <tr>
    	<td>
		นามสกุลผู้ใช้งาน
        </td>
        <td>
        <input type="txt" name="admin_surname" id="admin_surname">
        </td>
    </tr>
<tr>
    	<td>
	User name
        </td>
        <td>
        <input type="txt" name="admin_username" id="admin_username">for web free :: www.workphp.com/username
        </td>
    </tr>
<tr>
    	<td>
	Password
        </td>
        <td>
        <input type="txt" name="admin_password" id="admin_password" >
        </td>
    </tr>

<tr>
    	<td>
	ที่อยู่
        </td>
        <td>
		<textarea name="admin_address" id="admin_address"></textarea>
       
        </td>
    </tr>
<tr>

    	<td>
	E-mail
        </td>
        <td>
        <input type="txt" name="admin_email" id="admin_email">
        </td>
    </tr>
<tr>
    	<td>
	เบอร์โทร
        </td>
        <td>
        <input type="txt" name="admin_tel" id="admin_tel">
        </td>
    </tr>
	
    <tr>
    	<td colspan="2">
       <input type="hidden" name="action" id="action" value="edit" />
	
	   <input type="hidden" name="admin_id" id="admin_id" value="" />
       <input type="submit" name="btn_submit" id="btn_submit" class="button" value="แก้ไข"/>
	   <input type="reset" name="btn_reset" id="btn_reset"  class="button" value="ยกเลิก"/>
        </td>
    </tr>
</table>
</form>
</div><!-- eidt display -->
