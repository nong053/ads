
//var rdg_id=14;	
var rdg_id=$("#paramEmbedRdgId").val();	
var imageVideoFn=function(rdg_id){
		
		//set file button
		//$(".buttonText").text('เลือกรูปภาพ');
		
		$('#btnUploadPicture').on('click', function() {
		    var file_data = $('#picture_file').prop('files')[0];   
		    var form_data = new FormData();                  
		    form_data.append('picture_file', file_data);
		    form_data.append('rdg_id', rdg_id);
		    form_data.append('action', "addPicture");
		   // console.log(form_data);                             
		    $.ajax({
		                url: '../Model/mImageVideo.php', // point to server-side PHP script 
		                dataType: 'json',  // what to expect back from the PHP script, if anything
		                cache: false,
		                contentType: false,
		                processData: false,
		                data: form_data,                         
		                type: 'post',
		                async:false,
		                success: function(data){
		                    console.log(data); // display response from the PHP script, if any
		                    if(data=="picture_empty"){
		                    	alert("เลือกรูปภาพก่อนค่ะ");
		                    }else if(data=="success"){
		                    	alert("บันทึกรูปภาพสำเร็จ");
		                    	$("span.badge").remove();
		                    	showPictureFn();
		                    }
		                }
		     });
		    return false;
		});


	};
	
var docUploadFn=function(rdg_id){
	showDocFn(rdg_id);
		//set file button
		//$(".buttonUpFile").text('เลือกไฟล์ pdf');
		
		$('#btnUploadDoc').on('click', function() {
		    var file_data = $('#doc_file').prop('files')[0];   
		    var form_data = new FormData();                  
		    form_data.append('doc_file', file_data);
		    form_data.append('rdg_id', rdg_id);
		    form_data.append('action', "addPDF");
		   // console.log(form_data);                             
		    $.ajax({
		                url: '../Model/mImageVideo.php', // point to server-side PHP script 
		                dataType: 'json',  // what to expect back from the PHP script, if anything
		                cache: false,
		                contentType: false,
		                processData: false,
		                data: form_data,                         
		                type: 'post',
		                async:false,
		                success: function(data){
		                    console.log(data); // display response from the PHP script, if any
		                    if(data=="picture_empty"){
		                    	alert("เลือกไฟล์เอกสารก่อนค่ะ");
		                    }else if(data=="success"){
		                    	alert("บันทึกเอกสาร สำเร็จ");
		                    	$("span.badge").remove();
		                    	showDocFn(rdg_id);
		                    }
		                }
		     });
		    return false;
		});


	};
	var deldocFn=function(id){
		$.ajax({
			url:"../Model/mImageVideo.php",
			type:"post",
			dataType:"html",
			data:{"paramAction":"delDoc","rd_id":id},
			success:function(data){
				
				showDocFn(rdg_id);
			}
		});
	
	}
	var showDocFn=function(rdg_id){
		$.ajax({
			url:"../Model/mImageVideo.php",
			type:"post",
			dataType:"html",
			data:{"paramAction":"showDoc","rdg_id":rdg_id},
			 async:false,
			success:function(data){
				$("#showfileAttach").html(data);
					
					$(".docDel").click(function(){
						deldocFn(this.id);
						return false;
					});
					
					
				}
			
		});
	}
	
	var showPictureFn=function(){
		$.ajax({
			url:"../Model/mImageVideo.php",
			type:"post",
			dataType:"html",
			data:{"paramAction":"showPicture","rdg_id":rdg_id},
			 async:false,
			success:function(data){
				
				$("#showAllPictureArea").html(data);
				$(".setFirst").click(function(){
					//alert(this.id);
					var ri_id=this.id;
					ri_id=ri_id.split("-");
					ri_id=ri_id[1];
					//call setFirstFn function.
					setFirstFn(rdg_id,ri_id);
					return false;
				});
				
				$(".delPicture").click(function(){
					//alert(this.id);
					var ri_id=this.id;
					ri_id=ri_id.split("-");
					ri_id=ri_id[1];
					//call setFirstFn function.
					if(confirm("ยืนยันการลบรูปนี้!")){
						delPictureFn(rdg_id,ri_id);
						showPictureFn();
					}
					
					return false;
				});
				
			}
		});
	}
	showPictureFn();
	
	var setFirstFn = function(rdg_id,ri_id){
		$.ajax({
			url:"../Model/mImageVideo.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"setFirst","rdg_id":rdg_id,"ri_id":ri_id},
			success:function(data){
				if(data=="success"){
					alert("ตั้งเป็นรูปหน้าปกเรียบร้อย");
					showPictureFn();
				}
			}
		});
			
	}
	var delPictureFn = function(rdg_id,ri_id){
		$.ajax({
			url:"../Model/mImageVideo.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"delPicture","rdg_id":rdg_id,"ri_id":ri_id},
			success:function(data){
				if(data=="success"){
					//alert("ลบรูปภาพเรียบร้อยแล้ว");
					showPictureFn();
				}
			}
		});
	}
	$("#saveStep3").click(function(){
		var rev_embed_code=$("#rev_embed_code").val();
		
		$.ajax({
			url:"../Model/mImageVideo.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"saveEmbedVdo","rdg_id":rdg_id,"rev_embed_code":rev_embed_code},
			success:function(data){
				if(data=="success"){
					alert("บันทึกข้อมูลเรียบร้อย");
					setTimeout(function(){
					$("[href|='#summary']").click();
					$("#topcontrol").click();
					},1000);
					//showPictureFn();
				}
			}
		});
		
	});
	
	var showEmbedCodeFn=function(){
		$.ajax({
			url:"../Model/mImageVideo.php",
			type:"post",
			dataType:"html",
			data:{"paramAction":"showEmbedVdo","rdg_id":rdg_id},
			success:function(data){
				
				$("#rev_embed_code").val(data);
			}
		});
	}
	showEmbedCodeFn();
	
	//back button
	$("#btn-back-step2").click(function(){
		//alert("hello");
		$("[href|='#detailData']").click();
		//return false;
		$("#topcontrol").click();
	});


