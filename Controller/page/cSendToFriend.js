$("document").ready(function(){

	var validation = function(){
		var validateStr="";
		if($("#email_my_friend").val()==""){
			validateStr+="กรอกอีเมลล์ด้วยครับ \n";
		}
		

		if(validateStr!=""){
			alert(validateStr);
			return false;
		}else{
			return true;
		}
	};
	
	
	$("#btnSendMyFriend").click(function(){
			
			
			if(validation()){
				$.ajax({
					url:"Model/mSendToMyfriend.php",
					type:"post",
					dataType:"json",
					data:{"paramAction":"sendToFriend","email_my_friend":$("#email_my_friend").val(),
						"url_to_friend":$("#url_to_friend").val(),"detail_to_my_friend":$("#detail_to_my_friend").val()},
					success:function(data){
						if(data=="success"){
							alert("ส่งหน้านี้ให้เพื่อนเรียบร้อย");
							
						}else{
							alert("เกิดข้อผิดพลาด ไม่สามารถส่งลิงค์นี้ให้เพื่อนได้");
						}
					}
				});
			}
	});
});