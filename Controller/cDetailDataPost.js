var detailDataPostFn = function(paramRealtyID){
	//alert(paramRealtyID);
	$(document).ready(function(){
		
		
		//start call realty Room 
		
		//start call Characteristic 
		var callRealtyCharacteristic = function(dataRDCID){
		
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
		callRealtyCharacteristic();
		//END call Characteristic
		
		
		$("#btn-next-step3").click(function(){
			
			//alert("hello");

			
			
			var paramCharacteristic=$("input.characteristic").serialize();
			
			
			//console.log(paramInterior);
			//alert(paramInterior);
			//console.log(paramCharacteristic);
			
			$.ajax({
				url:"../Model/mDetailDataPost.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"realtySentData","paramCharacteristic":paramCharacteristic,
					"rdg_id":$("#paramEmbedRdgId").val(),
				},
				success:function(data){
					//alert(data);
					if(data=="success"){
						alert("บันทึกข้อมูลเรียบร้อยแล้ว");
					}else if(data=="update-success"){
						alert("แก้ไขข้อมูลเรียบร้อยแล้ว");
					}
					$("#saveDetailDataAlready").remove();
					$("body").append("<input type='hidden' name='saveDetailDataAlready' id='saveDetailDataAlready' value='Y'>");
					
				}
			});
			
			$("[href|='#imageVideo']").click();
			$("#topcontrol").click();
			return false;
	});
	//end footer button
		

	
	

	var realtySetRoom = function(room_name,room_num,room_unit){
		
		var optionHTML="";
			optionHTML+="<option value=\"\">-- เลือก --</option>";
		for(var $i=1;$i<=300;$i++){
			if(room_num==$i){
				optionHTML+="<option selected='selected' value="+$i+">"+$i+" "+room_unit+" </option>";
			}else{
				optionHTML+="<option value="+$i+">"+$i+" "+room_unit+" </option>";	
			}
		}
		$("#"+room_name).html(optionHTML);
		
	};

	
	//Start call Data again
	
	if($("#saveDetailDataAlready").val()=="Y"){
		
		//alert("call data again");
		
		
		
		//CHECK BOX
		$.ajax({
			url:"../Model/mDetailDataPost.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"realtyDetailDataById","RdgId":paramRealtyID},
			success:function(data){
				var dataRDCID=data[0]['rdc_id'];
				//var dataRDFID=data[1]['rdf_id'];
				//var dataRDIID=data[2]['rdi_id'];
				//var dataRDNPID=data[3]['rdnp_id'];
				

				callRealtyCharacteristic(dataRDCID);
				//callRealtyInterior(dataRDIID);
				//callRealtyFacility(dataRDFID);
				//callRealtyNearPlace(dataRDNPID);
			
				/*
				$.each(dataRDCID,function(index,indexEntry){
					alert(indexEntry);
				});
				*/
				
			}
		});
		
	};
	//End call Data again
	
	});
	
}