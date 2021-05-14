<link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">
<script>
	
	function check_user_uq(cus_email){
		var dataReturn="";
		$.ajax({
			url:"action/check_user.php",
			type:"post",
			dataType:"html",
			async:false,
			data:{"action":"check_user_uq","cus_email":cus_email},
			success:function(data){
				
				dataReturn=data;
			}
		});
		return dataReturn;
	}
	function check_cus(confrim){
		//alert("confrim"+confrim);
		var check="";
		
		//alert(check_user_uq($("form#form_regis #cus_email").val()));
		if(check_user_uq($("form#form_regis #cus_email").val())=="false"){
			check+="อีเมลล์นี้มีการใช้งานแล้ว!! โปรดใช้อีเมลล์อื่น\n";
		}

		
		if(document.form_regis.cus_first_name.value==""){
			check+="กรุณากรอกชื่อ\n";
		}
		if(document.form_regis.cus_last_name.value==""){
			check+="กรุณากรอกนามสกุล\n";
		}
		if(document.form_regis.cus_tel.value==""){
			check+="กรุณากรอกเบอร์โทร\n";
		}
		if(document.form_regis.cus_email.value==""){
			check+="กรุณากรอกE-mail\n";
		}
		if(document.form_regis.cus_pass.value==""){
			check+="กรุณากรอกรหัสผ่าน\n";
		}
		if(document.form_regis.cus_repass.value==""){
			check+="กรุณากรอกหรัสผ่านซ้ำ\n";
		}
		if(document.form_regis.cus_pass.value != document.form_regis.cus_repass.value){
			check+="กรอกรหัสผ่านไม่ตรงกัน\n";
		}
		
		
		if(document.form_regis.cus_confrim.value != confrim){
			check+="กรอกหัสยืนยันไม่ถูกต้องครับ\n";
		}

		





		
		if(check!=""){
			alert(check);
			return false;
		}else{
			document.form_regis.submit();
		}
		return false;
	}


</script>


<div class="row">
            <div class="col-md-12  col-sm-8">
                <form class="reg-page" id='form_regis' name='form_regis' method=post action="action/register_process.php">
                    <div class="reg-header">
                        <!-- <div class="headline headline-md">
							<h2><i class="fa fa fa-user"></i> สมัครสมาชิก</h2>
						</div> -->
                        <p>สมัครสมาชิกแล้ว? คลิ๊ก <a class="color-green" href="member/index.php">ลงชื่อเข้าใข้งาน</a> </p>                    
                    </div>

                    <input type="text" placeholder="ชื่อ *" name="cus_first_name" id="cus_first_name" class="form-control margin-bottom-5">
                   
                  
                    <input type="text" placeholder="นามสกุล *" name="cus_last_name" id="cus_last_name" class="form-control margin-bottom-5">
                    
                    
                    <input type="text" placeholder="เบอร์โทร *" name="cus_tel" id="cus_tel" class="form-control margin-bottom-5">
                   
                
                    <input type="text" placeholder="อีเมลล์ *" name="cus_email" id="cus_email" class="form-control margin-bottom-5">

                    <div class="row">
                        <div class="col-sm-6">
                    
                            <input type="password" placeholder="รหัสผ่าน *" name="cus_pass" id="cus_pass" class="form-control margin-bottom-5">
                        </div>
                        <div class="col-sm-6">
                           
                            <input type="password" placeholder="ยืนยันรหัสผ่าน *" name="cus_repass" id="cus_repass" class="form-control margin-bottom-5">
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-sm-6">
                            <label> 
                            	<?php
								$rand1=rand(1,10);
								$rand2=rand(1,10);
								$confrim=$rand1+$rand2;
								$_SESSION['confrim']=$confrim;
								?>
								<b><?php echo "$rand1 + $rand2 =?"; ?></b>
								<span class="color-red">*</span>
							</label>
                            <input type="text" name="cus_confrim" id="cus_confrim" class="form-control margin-bottom-5">
                        </div>
                        
                    </div>
                    

                    <hr>

                    <div class="row">
                        <div class="col-lg-6 checkbox">
                             <!--  <label>
                                <input type="checkbox"> 
                      			       อ่านข้อตกลง <a class="color-green" href="page_terms.html">เงื่อนไขการใช้งาน</a>  
                            </label>           -->             
                        </div>
                        <div class="col-lg-6 text-right">
                        	<input type="hidden" name="admin_id" id="admin_id" value='1'>
                            <button type="button" name="btnRegis" id="btnRegis" onclick="check_cus(<?=$confrim?>)" class="btn-u">สมัครสมาชิก</button>                        
                        </div>
                    </div>
                </form>
            </div>
        </div>