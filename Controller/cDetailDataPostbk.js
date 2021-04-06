var detailDataPostFn = function(paramRealtyID){
	//alert(paramRealtyID);
	$(document).ready(function(){
		
		//start call realty Room 
		var callRealtyRoom = function(){
			$.ajax({
				url:"../Model/mDetailDataPost.php",
				type:"post",
				dataType:"html",
				data:{"paramAction":"realtyDetailRoom"},
				success:function(data){
					alert(data);
					$("#areaRealtyRooms").html(data);
				}
			});
		};
		//callRealtyRoom();
		//start call realty Room 
		
		//start call Characteristic 
		var callRealtyCharacteristic = function(dataRDCID){
			//alert(dataRDCID);
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
		//callRealtyCharacteristic();
		//END call Characteristic
		
		//START Call Interior 
		var callRealtyInterior = function(dataRDIID){
			$.ajax({
				url:"../Model/mDetailDataPost.php",
				type:"post",
				dataType:"html",
				data:{"paramAction":"realtyDetailInterior","dataRDIID":dataRDIID},
				success:function(data){
					$("#areaRealtyInterior").html(data);
				}
			});
		};
		//callRealtyInterior();
		//END Call Interior
		
		//START Call Facility 
		var callRealtyFacility = function(dataRDFID){
			$.ajax({
				url:"../Model/mDetailDataPost.php",
				type:"post",
				dataType:"html",
				data:{"paramAction":"realtyDetailFacility","dataRDFID":dataRDFID},
				success:function(data){
					$("#areaRealtyFacility").html(data);
				}
			});
		};
		//callRealtyFacility();
		//END Call Facility
		
		
		//START Call NearPlace 
		var callRealtyNearPlace = function(dataRDNPID){
			$.ajax({
				url:"../Model/mDetailDataPost.php",
				type:"post",
				dataType:"html",
				data:{"paramAction":"realtyDetailNearPlace","dataRDNPID":dataRDNPID},
				success:function(data){
					$("#areaRealtyNearPlace").html(data);
				}
			});
		};
		//callRealtyNearPlace();
		//END Call NearPlace
		
		
		
		$("#btn-next-step3").click(function(){
			
			//alert("hello");

			
			var paramRealtyRoom=$("select.realtyRoom").serialize();
			var paramCharacteristic=$("input.characteristic").serialize();
			var paramInterior=$("input.interior").serialize();
			var paramFacility=$("input.facility").serialize();
			var paramNearPlace=$("input.nearPlace").serialize();
			
			console.log(paramInterior);
			//alert(paramInterior);
			//console.log(paramCharacteristic);
			
			$.ajax({
				url:"../Model/mDetailDataPost.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"realtySentData","paramCharacteristic":paramCharacteristic,
					"paramInterior":paramInterior,"paramFacility":paramFacility,"paramNearPlace":paramNearPlace,
					
					"rdg_id":$("#paramEmbedRdgId").val(),
					"rdr_bedroom":$("#rdr_bedroom").val(),
					"rdr_maid":$("#rdr_maid").val(),
					"rdr_toilet":$("#rdr_toilet").val(),
					"rdr_studio":$("#rdr_studio").val(),
					"rdr_deluxeRoom":$("#rdr_deluxeRoom").val(),
					"rdr_excutiveRoom":$("#rdr_excutiveRoom").val(),
					"rdr_masterBedroom":$("#rdr_masterBedroom").val(),
					"rdr_smallBedroom":$("#rdr_smallBedroom").val(),
					"rdr_meetingRoom":$("#rdr_meetingRoom").val(),
					"rdr_livingRoom":$("#rdr_livingRoom").val(),
					"rdr_drawingRoom":$("#rdr_drawingRoom").val(),
					"rdr_storageRoom":$("#rdr_storageRoom").val(),
					"rdr_kitchen":$("#rdr_kitchen").val(),
					"rdr_laundryRoom":$("#rdr_laundryRoom").val(),
					"rdr_parking":$("#rdr_parking").val()
					
				
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
		

	
	//alert(paramRealtyID);
	
	

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
		
		//REALTY ROOM START
		$.ajax({
			url:"../Model/mDetailDataPost.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"realtyDetailRoomById","RdgId":paramRealtyID},
			success:function(data){
				//console.log(data["rdr_bedroom"]);
				realtySetRoom("rdr_bedroom",data["rdr_bedroom"],"ห้อง");
				//console.log(data["rdr_maid"]);
				realtySetRoom("rdr_maid",data["rdr_maid"],"ห้อง");
				//console.log(data["rdr_toilet"]);
				realtySetRoom("rdr_toilet",data["rdr_toilet"],"ห้อง");
				//console.log(data["rdr_studio"]);
				realtySetRoom("rdr_studio",data["rdr_studio"],"ห้อง");
				//console.log(data["rdr_deluxeRoom"]);
				realtySetRoom("rdr_deluxeRoom",data["rdr_deluxeRoom"],"ห้อง");
				//console.log(data["rdr_excutiveRoom"]);
				realtySetRoom("rdr_excutiveRoom",data["rdr_excutiveRoom"],"ห้อง");
				//console.log(data["rdr_masterBedroom"]);
				realtySetRoom("rdr_masterBedroom",data["rdr_masterBedroom"],"ห้อง");
				//console.log(data["rdr_smallBedroom"]);
				realtySetRoom("rdr_smallBedroom",data["rdr_smallBedroom"],"ห้อง");
				//console.log(data["rdr_meetingRoom"]);
				realtySetRoom("rdr_meetingRoom",data["rdr_meetingRoom"],"ห้อง");
				//console.log(data["rdr_livingRoom"]);
				realtySetRoom("rdr_livingRoom",data["rdr_livingRoom"],"ห้อง");
	 			//console.log(data["rdr_drawingRoom"]);
	 			realtySetRoom("rdr_drawingRoom",data["rdr_drawingRoom"],"ห้อง");
				//console.log(data["rdr_storageRoom"]);
				realtySetRoom("rdr_storageRoom",data["rdr_storageRoom"],"ห้อง");
	 			//console.log(data["rdr_kitchen"]);
	 			realtySetRoom("rdr_kitchen",data["rdr_kitchen"],"ห้อง");
	 			//console.log(data["rdr_laundryRoom"]);
	            realtySetRoom("rdr_laundryRoom",data["rdr_laundryRoom"],"ห้อง");
	           //console.log(data["rdr_parking"]);
	            realtySetRoom("rdr_parking",data["rdr_parking"],"คัน");
	            
			}
		});
		//REALTY ROOM END
		
		//CHECK BOX
		$.ajax({
			url:"../Model/mDetailDataPost.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"realtyDetailDataById","RdgId":paramRealtyID},
			success:function(data){
				var dataRDCID=data[0]['rdc_id'];
				var dataRDFID=data[1]['rdf_id'];
				var dataRDIID=data[2]['rdi_id'];
				var dataRDNPID=data[3]['rdnp_id'];
				

				callRealtyCharacteristic(dataRDCID);
				callRealtyInterior(dataRDIID);
				callRealtyFacility(dataRDFID);
				callRealtyNearPlace(dataRDNPID);
			
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