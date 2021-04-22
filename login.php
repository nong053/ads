<link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">
<script src="Controller/cLogin.js"></script>

<div class="row">
            <div class="col-md-12  col-sm-6">
                <form class="reg-page" name="frmLogin" id="frmLogin">
                    <div class="reg-header">            
                        <h2>ลงชื่อเข้าใช้งาน</h2>
                    </div>

                    <div class="input-group margin-bottom-5">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" id="cus_email" name="cus_email" placeholder="อีเมลล์">
                    </div>                    
                    <div class="input-group margin-bottom-5">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" id="cus_password" name="cus_password"  class="form-control" placeholder="รหัสผ่าน">
                    </div>                    
					
                    <div class="row">
                    	<!-- 
                        <div class="col-md-6 checkbox">
                            <label><input type="checkbox"> จำรหัสผ่าน</label>                        
                        </div>
                         -->
                        <div class="col-md-12 col-sm-12" >
                        	<input type='hidden' name='loginType' id='loginType' value='loginForManage'><!-- loginForPost,loginForManage -->
                            <button type="button" name="btnLogin" id="btnLogin" style='width:100%;' class="btn-u pull-right">เข้าสู่ระบบ</button>
                                                 
                        </div>

                        <!-- <div class="col-md-12" style='text-align: right; margin-top:10px;'>
                             <a href="#" onclick="window.location.href='<?=$loginUrl?>'">หรือลงชื่อเข้าใช้งานผ่าน facebook</a>  
                        </div> -->
                         
                    </div>

                    <hr>
                    <a href="#" id='registerFormModalLoginPage'>หรือสมัครสามาชิก</a> 
                    <h4>ลืมรหัสผ่านใช่มั้ย ?</h4>
                    <p>ไม่ต้องกังวล, <a href="index.php?page=forgot_pass" class="color-green">คลิ๊ก</a> ส่งรหัสผ่านไปทาง E-mail.</p>
                </form>            
            </div>
        </div>