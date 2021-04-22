
	var validationSendPasswordToEmail = function(){
		var validateStr="";
		if($("#cus_email").val()==""){
			validateStr="กรอกอีเมลล์ด้วยครับ \n";
		}
		
		if(validateStr!=""){
			alert(validateStr);
			return false;
		}else{
			return true;
		}
	};

$(document).ready(function(){


	$("#btnSendPasswordToEmail").on("click",function(){
			
		
			if(validationSendPasswordToEmail()){
				$.ajax({
					url:"Model/mSecurity.php",
					type:"post",
					dataType:"json",
					data:{"paramAction":"forgotPassword","cus_email":$("#cus_email").val()},
					success:function(data){
					
						if(data=="success"){
							alert("ส่งรหัสผ่านไปที่อีเมลล์ของท่านเรียบร้อย");
							
						}else if(data=="error"){
							alert("เกิดข้อผิดพลาด ไม่สามารถส่งรหัสผ่านไปที่อีเมลล์ได้");
						}else{
							alert("อีเมลล์ไม่ถูกต้อง");
						}
					}
				});
			}
	});

});