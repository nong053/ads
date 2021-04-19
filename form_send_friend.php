<link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">
<script src="Controller/page/cSendToFriend.js"></script>

<div class="row">
            <div class="col-md-12  col-sm-6">
                <form class="reg-page" name="frmTofriend" id="frmTofriend">
                  
                    <div class="input-group margin-bottom-10">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" id="email_my_friend" name="email_my_friend" placeholder="อีเมลล์">
                    </div>  
                    
                      <div class="input-group margin-bottom-10">
                        <span class="input-group-addon"><i class="fa fa-stack-overflow"></i></span>
                        <textarea class="form-control" id="detail_to_my_friend" name="detail_to_my_friend" placeholder="รายละเอียด"></textarea>
                    </div>                      
                    
                    <div class="row">
                       
                        <div class="col-md-6">
                        	<input type='hidden' name="url_to_friend" id="url_to_friend" value="www.realthairealty.com/<?=$_SERVER["REQUEST_URI"]?>">
                            <button type="button" name="btnSendMyFriend" id="btnSendMyFriend" class="btn-u pull-right">ส่งให้เพื่อน</button>                        
                        </div>
                    </div>
                </form>            
            </div>
        </div>