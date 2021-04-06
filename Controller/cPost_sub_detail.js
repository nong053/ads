
	var callMapSummary=function(rdg_id){
		//alert(rdg_id);
		$.ajax({
			url:"Model/mSummary.php",
			type:"post",
			dataType:"text",
			async:false,
			data:{"rdg_id":rdg_id,"paramAction":"getMap"},
			success:function(data){
				
				//####rdg_map####
				//alert()13.857326299999999,100.7267414
				var latLong=data;
			//	alert(latLong);
				latLong=latLong.split(",");
				setTimeout(function(){
					setupMap(true,latLong[0],latLong[1],"map-canvas-summary");
					//alert(latLong[0]);
					//alert(latLong[1]);
				},2000);
			}
		});
	};
	
	var commentFn=function(rdg_id){

		/*comment start*/
		$.ajax({
			url:"./Model/mComment.php",
			type:"post",
			dataType:"html",
			data:{"rdg_id":rdg_id},
			success:function(data){
				$("#commentArea").html(data);
				$("table.gridComment").kendoGrid({
					//height: 550,
					   dataSource: {pageSize: 5},
				        pageable: {
				            refresh: true,
				           // pageSizes: true,
				            //buttonCount: 5
				        },
						scrollable: false,
					});
			}
		
		});
		/*comment end*/
	};
	/*validation comment start*/
	function check_comment_form(robot_gen){
		//alert("confrim"+confrim);
		//cus_confrim
		//contact_fullname
		//contact_tel
		//cus_confrim
		var check="";
		
		if($("#contact_detail2").val()==""){
			check+="กรอกรายละเอียดด้วยครับ\n";
		}
		if($("#contact_fullname2").val()==""){
			check+="กรอกชื่อด้วยครับ\n";
		}
		if($("#contact_tel2").val()==""){
			check+="กรอกเบอร์โทรด้วยครับ\n";
		}
		if(robot_gen != $("#cus_confrim2").val()){
			check+="บวกเลขไม่ถูกต้องครับ\n";
		}
		
		
		if(check!=""){
			return check;
			//return false;
		}else{
			return "ok";
		}
	}
	/*validation comment end*/
	
	$(document).ready(function(){
		
		$(".print").click(function(){
			window.print();
		});
		
		//click contract from start
		$("form#contactUsForm").submit(function(){
			
			var varidate=check_contact_form($("#robot_gen").val());
			if(varidate!="ok"){
				alert(varidate);
			}else{
				
				$.ajax({
					url:"./Model/mContact.php",
					type:"post",
					dataType:"json",
					data:$(this).serialize(),
					success:function(data){
						if(data=="success"){
							alert("ส่งอีเมลล์เรียบร้อย");
							
						}
					}
				
				});
			}
			
			return false;
		});
		//click contract from end
		/*comment start*/
		/*
		$("form#commentForm").submit(function(){
			
			var varidate=check_comment_form($("#robot_gen2").val());
			if(varidate!="ok"){
				alert(varidate);
			}else{
				
				$.ajax({
					url:"./Model/mContact.php",
					type:"post",
					dataType:"json",
					data:$(this).serialize(),
					success:function(data){
						if(data=="success"){
							alert("ฝากข้อความเรียบร้อย");
							commentFn($("#rdg_id2").val());
						}
					}
				});
				
	
			}
			
			return false;
		});
		*/
		//commentFn('161');
		/*comment end*/
	});