var detailDataPosContructortFn = function(paramRealtyID){

	
	
		
		//contructor select type
		//var cst_type="";
		
		//START Call Contructor Radio 
		
		var callRadioContructor = function(cst_type,dataCSTID){
			
			$.ajax({
				url:"../Model/mDetailDataPostContructor.php",
				type:"post",
				dataType:"html",
				data:{"paramAction":"contructor_select_type","cst_type":cst_type,"dataCSTID":dataCSTID},
				success:function(data){
					$("#areaDataPostContructor").html(data);
				}
			});
		};
		
		//END Call Contructor Radio
		//start call Characteristic 
		/*
		var callRealtyCSTID = function(cst_id){
			$.ajax({
				url:"../Model/mDetailDataPost.php",
				type:"post",
				dataType:"html",
				data:{"paramAction":"realtyDetailCharacteristic","dataRDCID":dataRDCID},
				success:function(data){
					$("#areaRealtyCharacteristic").html(data);
				}
			});
		};
		callRealtyCSTID();
		*/
		//END call Characteristic
		/*
		var callCSTType1=function(){
			$.ajax({
				url:"../Model/mDetailDataPostContructor.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"getRealtyTypeId","paramRealtyID":paramRealtyID},
				success:function(data){
					var cst_type=data;
					//alert(cst_type);
					callRadioContructor(cst_type);
				//map data
				}
			});
		}
		*/
		//callCSTType();
		
		
		
		var callCSTCate=function(dataCSTDATA){
			$.ajax({
				url:"../Model/mDetailDataPostContructor.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"getRealtyTypeCate","paramRealtyID":paramRealtyID},
				success:function(data){
					
					//alert(data[0][0]);
					if(dataCSTDATA!=undefined){
					callRadioContructor(data[0][0],dataCSTDATA);
					}else{
					callRadioContructor(data[0][0]);	
					}
					
					console.log(data[1]);
					if(data[0][0]=="3"){
						
						$(".titleContructor").html("คุณสมบัติสำหรับ"+data[1]);
					}else{
						$(".titleContructor").html("คุณสมบัติสำหรับ"+data[1]);
					}
				//map data
				}
			});
		}
		
		
		
		//materials
		
		// click save contractor detail start.

		$("#btn-next-step3").click(function(){
			
			var paramContructor=$("input.contructor").serialize();
			//alert(paramContructor);
			//alert($("#paramEmbedRdgId").val());
			
			if(paramContructor!=""){
				$.ajax({
					url:"../Model/mDetailDataPostContructor.php",
					type:"post",
					dataType:"json",
					data:{"paramAction":"Save","paramContructor":paramContructor,
						"rdg_id":$("#paramEmbedRdgId").val(),
					},
					success:function(data){
						//alert(data);
						if(data=="success"){
							alert("บันทึกข้อมูลเรียบร้อยแล้ว");
							setTimeout(function(){
								$("[href|='#imageVideo']").click();
								$("#topcontrol").click();
							},1000);
							
						}
						$("#saveDetailDataAlready").remove();
						$("body").append("<input type='hidden' name='saveDetailDataAlready' id='saveDetailDataAlready' value='Y'>");
					}
				});
			}else{
				alert("คุณยังไม่ได้เลือกรายละเอียดเพิ่มเติม");
			}
			
			
			return false;
		});
		// click save contractor detail start.
		
		

		
		//Start call Data again
		
		if($("#saveDetailDataAlready").val()=="Y"){
			
			
			
		
			//CHECK BOX
			$.ajax({
				url:"../Model/mDetailDataPostContructor.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"realtyDetailDataById","RdgId":paramRealtyID},
				success:function(data){
					var dataCSTDATA=data[0]['cst_id'];
					
					callCSTCate(dataCSTDATA);
					//callCSTCate();
				}
			});
			
		}else{
			callCSTCate();
		}
		//End call Data again
		
		
		
		
	
	
}