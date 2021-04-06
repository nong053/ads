$("document").ready(function(){
	var validation = function(){
		var validateStr="";
		if($("#cus_email").val()==""){
			validateStr+="กรอกอีเมลล์ด้วยครับ \n";
		}
		if($("#cus_password").val()==""){
			validateStr+="กรอกรหัสผ่านด้วยครับ \n";
		}

		if(validateStr!=""){
			alert(validateStr);
			return false;
		}else{
			return true;
		}
	};


	var checkEmailFn=function(){
		//check email
		$.ajax({
			url:"Model/mSecurity.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"checkEmailAction","cus_email":$("#cus_email").val()},
			success:function(data){
				if(data=="email_is_already"){
				alert("อีเมลล์นี้มีผู้ใช้งานแล้วค่ะ");
				return false;
				}else{
					
				return true;
				}
			}
		});
	}
	$("#btnLogin").click(function(){
			
			
			if(validation()){
				$.ajax({
					url:"Model/mSecurity.php",
					type:"post",
					dataType:"json",
					data:{"paramAction":"loginAction","cus_email":$("#cus_email").val(),"cus_password":$("#cus_password").val()},
					success:function(data){
						if(data=="success"){
							alert("เข้าสู่ระบบเรียบร้อย");
							if($("#loginType").val()=="loginForManage"){
							window.location="member/index.php?loginType=loginForManage";
							
							}else{
							window.location="member/index.php?loginType=loginForNewPost";
							//window.location="index.php";
							}
						}else{
							alert("อีเมลล์ หรือ รหัสผ่านไม่ถูกต้อง");
						}
					}
				});
			}
	});


});