<link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">
<script src="Controller/cLoginSendPassToEmail.js"></script>

<div class="row">
           
                <form class="reg-page" name="frmForgotPass" id="frmForgotPass" action='#' method="post">
                    <div class="reg-header">            
                        <h2>ลืมรหัสผ่าน</h2>
                    </div>

                    <div class="row">
                         <div class="col-md-9">
                            <div class="input-group margin-bottom-5">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="cus_email" name="cus_email" placeholder="อีเมลล์">
                            </div> 
                        </div> 
                        <div class="col-md-3">
                            
                            <button type="button" name="btnSendPasswordToEmail" id="btnSendPasswordToEmail" class="btn-u pull-right">ส่งรหัสผ่านไปที่ E-mail</button>                        
                        </div>

                    </div>            

                   

                    <hr>

                 
                </form>            
           
</div>