	$(document).ready(function(){
		
		//varible galbal
		var paramRealtyAndContractorType="";
		var paramRealtyID="";
		var Lat="";
		var Lng="";
		
		
		
		
		//start map
		/*
		function initialize() {
        	//13.7246005,100.6331108
          var myLatlng = new google.maps.LatLng(13.857326299999999,100.7267414);
          var mapOptions = {
            zoom: 15,
            center: myLatlng
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        
          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Share Olanlab Com'
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
        
        var x = document.getElementById("demo");
		
		function getLocation() {
		    if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition);
		    } else { 
		        x.innerHTML = "Geolocation is not supported by this browser.";
		    }
		}
		
		function showPosition(position) {
		    x.innerHTML = "Latitude: " + position.coords.latitude + 
		    "<br>Longitude: " + position.coords.longitude;	
		}
		
		
		$("#btnCreateMarker").click(function(){
			getLocation();
			return false;
		});
		*/
		var lat="";
		var long="";
		
		
	
		var showMarker="";
		function getLocation(paramShowMarker) {
			showMarker=paramShowMarker;
		    if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition);
		        
		    } else { 
		        x.innerHTML = "Geolocation is not supported by this browser.";
		    }
		}
		
		function showPosition(position) {
			//alert(position.coords.latitude);
			//alert(position.coords.longitude);
			setupMap(showMarker,position.coords.latitude,position.coords.longitude);
			
			
		}
		
		
		
	
		
		function setupMap(paramShowMarker,currentLat,currentLong) {
			
			var latLongEmbedHtml="";
			
			
			
			 
			var myOptions = {
			  zoom: 15,
			  center: new google.maps.LatLng(currentLat,currentLong),
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById('map-canvas'),
				myOptions);
			
			if(paramShowMarker==true){
				
			latLongEmbedHtml+="<input type=\"hidden\" name=\"paramLat\" id=\"paramLat\" class=\"paramLatLong\" value=\""+currentLat+"\">";
			latLongEmbedHtml+="<input type=\"hidden\" name=\"paramLong\" id=\"paramLong\" class=\"paramLatLong\" value=\""+currentLong+"\">";
			$("#paramLatLong").html(latLongEmbedHtml);
			
			var marker = new google.maps.Marker({
			map:map,
			position: new google.maps.LatLng(currentLat,currentLong),
			draggable: true
			});
			}
			
			var infowindow = new google.maps.InfoWindow({
			//map:map,
			//content: "ตำแหน่งที่ตั้ง",
			//position:  new google.maps.LatLng(13.857326299999999, 100.7267414)
			});
			


			google.maps.event.addListener(map,'click',function(event){
				
				if(!marker){
					alert("คลิ๊กปุ่มปักหมุดก่อนครับ");
					return false;
				}
	
				infowindow.open(map,marker);
				//infowindow.setContent('ปักหมุดตรงนี้' + event.latLng);
				infowindow.setContent('ปักหมุดตรงนี้');
				//alert(event.latLng);
				
				var latt="";
				var long="";
				//find lat
				latt=event.latLng+"";
				latt=latt.split(",");
				latt=latt[0].split("(");
				latt=latt[1];
				
				
				//find long
				long=event.latLng+"";
				long=long.split(",");
				long=long[1].split(")");
				long=long[0];
				
			
				
				
				infowindow.setPosition(event.latLng);
				marker.setPosition(event.latLng);
				
				/*
				alert(latt);
				alert(long);
				*/
				
				
				latLongEmbedHtml+="<input type=\"hidden\" name=\"paramLat\" id=\"paramLat\" class=\"paramLatLong\" value=\""+latt+"\">";
				latLongEmbedHtml+="<input type=\"hidden\" name=\"paramLong\" id=\"paramLong\" class=\"paramLatLong\" value=\""+long+"\">";
						
				$("#paramLatLong").html(latLongEmbedHtml);
			
			
			});


		}
		//setupMap();
		getLocation(false);
		$("#btnCreateMarker").click(function(){
			getLocation(true);
			return false;
		});
		//end map
		
		//start provine .
		var callProvince = function(){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"province"},
				success:function(data){
					
					var provinceHtml="";
					
					provinceHtml+="<select name=\"rdg_address_province_id\" id=\"rdg_address_province_id\">";
						
						provinceHtml+="<option disabled=\"\" selected=\"\" value=\"\">-- กรุณาเลือกจังหวัด --</option>";
						
						$.each(data,function(index,indexEntry){
							provinceHtml+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						});
						
					provinceHtml+="</select>";
				
					$("#provinceArea").html(provinceHtml);
					$("#rdg_address_province_id").change(function(){
						//alert($(this).val());
						callDistrict($(this).val());
					});
					
					
				}
			});
		};
		callProvince();
		//end provine 
		//start district
		var callDistrict = function(paramProvince){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"district","paramProvince":paramProvince},
				success:function(data){
				
					var districtHtml="";
					
					districtHtml+="<select name=\"rdg_address_district_id\" id=\"rdg_address_district_id\">";
						
					districtHtml+="<option disabled=\"\" selected=\"\" value=\"\">-- กรุณาเลือกอำเภอ/เขต --</option>";
						
						$.each(data,function(index,indexEntry){
							districtHtml+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						});
						
						districtHtml+="</select>";
				
					$("#districtArea").html(districtHtml);
					$("#rdg_address_district_id").change(function(){
						//alert($(this).val());
						callSubDistrict($(this).val());
					});
					
					
				}
			});
		};
		//callDistrict();
		//end district
		
		//start sub district
		var callSubDistrict = function(paramDistrictId){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"sub_district","paramDistrictId":paramDistrictId},
				success:function(data){
					
					var subDistrictHtml="";
					
					subDistrictHtml+="<select name=\"rdg_address_sub_district_id\" id=\"rdg_address_sub_district_id\">";
						
					subDistrictHtml+="<option disabled=\"\" selected=\"\" value=\"0\">-- กรุณาเลือกตำบล/แขวง --</option>";
						
						$.each(data,function(index,indexEntry){
							subDistrictHtml+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						});
						
						subDistrictHtml+="</select>";
				
					$("#subDistrictArea").html(subDistrictHtml);
					
				}
			});
		};
		//callSubDistrict();
		
		//end sub district
		
		//startcall realty for post
		var callRealtyFor = function(defaultParam){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"get",
				dataType:"json",
				data:{"paramAction":"realtyFor"},
				success:function(data){
					var $realtyFor="";
					
				
					$.each(data,function(index,indexEntry){
						
						$realtyFor+="<div class=\"optonArea\">";
							$realtyFor+="<div class=\"checkbox\">";
							$realtyFor+="<label>";
								if(index==defaultParam){
								$realtyFor+="<input type=\"radio\" checked value="+indexEntry[0]+" id='realtyFor-"+indexEntry[0]+"' name=\"realtyFor\">  "+indexEntry[1]+"";
								}else{
								$realtyFor+="<input type=\"radio\" value="+indexEntry[0]+" id='realtyFor-"+indexEntry[0]+"' name=\"realtyFor\">  "+indexEntry[1]+"";	
								}
								$realtyFor+="</label>";
							$realtyFor+="</div>";
						$realtyFor+="</div>";
					});
			
				$("#realtyForArea").html($realtyFor);
					
				}
			});
		}
		callRealtyFor(defaultParam=0);
		
		//end call realty for post
		
		//start realty type 
		var callRealtyType = function(defaultParam){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"get",
				dataType:"json",
				data:{"paramAction":"realtyType","defaultParam":defaultParam},
				success:function(data){
					$realtyFor="";
					var $i=0;
					
					
					$realtyFor+="<select name=\"realtyType\" id=\"realtyType\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							if(indexEntry[2]=="Y"){
							$realtyFor+="<option value=\"\">-- เลือกประกาศสำหรับผู้รับเหมา --</option> ";	
							}else{
							$realtyFor+="<option value=\"\">-- เลือกประเภทอสังหาริมทรัพย์  --</option> ";
							}
						}
						
						$realtyFor+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						
					});
					$realtyFor+="</select>";
					
					$("#realtyTypeArea").html($realtyFor);
					

					$("#realtyType").on("change",function(){

							//alert(this.value);
							
							if(this.value==1){
								$(".newProjectRealty").show();
								$(".showForRealty").hide();
								
							}else{
								$(".newProjectRealty").hide();
								$(".showForRealty").show();
							}
							
							//CHECK FOR Contructor Type
								paramRealtyID=this.value;
							//check for contructor type

					});
					$("#realtyType").change();
				}
			});
		}
		//callRealtyType();
		//end realty type 
		

		//Start realType Radio
		$(".realtyType1").click(function(){
			
			callRealtyType($(this).val());
			paramRealtyAndContractorType=$(this).val();
			//alert(paramRealtyAndContractor);
			
		});
		$("#realtyType1Realty").click();
		//End realType Raido
		
		
		//start realty unit 
		var callRealtyUnit = function(defaultParam){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"get",
				dataType:"json",
				data:{"paramAction":"realtyUnit"},
				success:function(data){	
					$realtyFor="";
					$realtyFor+="<select name=\"realtyUnit\" id=\"realtyUnit\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$realtyFor+="<option value=\"\">-- เลือกหน่วย  --</option> ";
						}
						$realtyFor+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
					});
					$realtyFor+="</select>";
					$("#realtyUnitArea").html($realtyFor);
				}
			});
		}
		callRealtyUnit();
		//end realty unit 
		
		//start travel by bts 
		var callTavelByBTS = function(defaultParam){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"POST",
				dataType:"JSON",
				data:{"paramAction":"publicTransport","param_pt_type":"BTS"},
				success:function(data){	
					alert(data);
					
					$selectHTML="";
					$selectHTML+="<select name=\"tavelByBTS\" id=\"tavelByBTS\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$selectHTML+="<option value=\"\">-- เลือกสถานี้รถไฟฟ้า BTS  --</option> ";
						}
						$selectHTML+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
					});
					$selectHTML+="</select>";
					$("#travelByBTSArea").html($selectHTML);
					
				}
			});
		}
		callTavelByBTS();
		//end travel by bts 
		//start travel by MRT 
		var callTavelByMRT = function(defaultParam){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"POST",
				dataType:"JSON",
				data:{"paramAction":"publicTransport","param_pt_type":"MRT"},
				success:function(data){	
					alert(data);
					
					$selectHTML="";
					$selectHTML+="<select name=\"tavelByMRT\" id=\"tavelByMRT\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$selectHTML+="<option value=\"\">-- เลือกสถานี้รถไฟฟ้า MRT  --</option> ";
						}
						$selectHTML+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
					});
					$selectHTML+="</select>";
					$("#travelByMRTArea").html($selectHTML);
					
				}
			});
		}
		callTavelByMRT();
		//end travel by MRT
		//start travel by HARBOR 
		var callTavelByHARBOR = function(defaultParam){
			$.ajax({
				url:"action/realtyDataGeneralAction.php",
				type:"POST",
				dataType:"JSON",
				data:{"paramAction":"publicTransport","param_pt_type":"HARBOR"},
				success:function(data){	
					alert(data);
					
					$selectHTML="";
					$selectHTML+="<select name=\"tavelByHARBOR\" id=\"tavelByHARBOR\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$selectHTML+="<option value=\"\">-- เลือกท่าเรือ  --</option> ";
						}
						$selectHTML+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
					});
					$selectHTML+="</select>";
					$("#travelByHARBORArea").html($selectHTML);
					
				}
			});
		}
		callTavelByHARBOR();
		//end travel by HARBOR
		
		
		//start list status project
		
		var callRealtyProjectStatus = function(defaultParam){
			$.ajax({
					url:"action/realtyDataGeneralAction.php",
					type:"post",
					dataType:"json",
					data:{"paramAction":"realtyProjectStatus"},
					success:function(data){
						
						$realtyProjectStatus="";
						$realtyProjectStatus+="<select name=\"realtyProjectStatus\" id=\"realtyProjectStatus\">";
						$.each(data,function(index,indexEntry){
							if(index==0){
								$realtyProjectStatus+="<option value=\"\">---- เลือกสถานะโครงการ  ----</option> ";
							}
							$realtyProjectStatus+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						});
						$realtyProjectStatus+="</select>";
						
						$("#areaProjectStatus").html($realtyProjectStatus);
					}
				});
			}
		callRealtyProjectStatus();
		
		//end list status project
		
			var validation = function(){
				var validateStr="";
				if($("select#realtyType").val()=="" || $("select#realtyType").val()==null){
					validateStr+="กำหนดประเภทอสังหาริมทรัพย์ด้วยค่ะ \n"
					
				}
				
				if($("select#rdg_address_province_id").val()=="" || $("select#rdg_address_province_id").val()==null){
					validateStr+="กำหนดจังหวัดด้วยค่ะ \n"
					
				}
				
				if($("select#rdg_address_district_id").val()=="" || $("select#rdg_address_district_id").val()==null){
					validateStr+="กำหนดอำเภอด้วยค่ะ \n"
					
				}
				if($("select#rdg_address_sub_district_id").val()=="" || $("select#rdg_address_sub_district_id").val()==null){
					validateStr+="กำหนดตำบลด้วยค่ะ \n"
					
				}
				if($("select#realtyUnit").val()=="" || $("select#realtyUnit").val()==null){
					validateStr+="กำหนดหน่วยของพื้นที่ด้วยค่ะ \n"
					
				}
				
				
				if(validateStr!=""){
					alert(validateStr);
					return false;
				}else{
					return true;
				}
			};
			

			//start save first step
			$("#saveStep1").click(function(){
				
				
				
				if(validation()){
				
					$.ajax({
						url:"action/realtyDataGeneralAction.php",
						type:"POST",
						dataType:"json",
						data:$( "form#formRealtyDataGe").serialize(),
						success:function(data){
							//alert(data);
							var rdg_id=data;
							alert(rdg_id);
							/*if(data=="seccess"){
								//start next to detail data
								$("[href|='#detailData']").click();
								//alert(paramRealtyAndContractor);
								
									//alert("home");
									$.ajax({
										url:"./member/detailDataPost.php",
										type:"get",
										dataType:"html",
										data:{"paramRealtyId":paramRealtyAndContractor},
										success:function(data){
											//alert(data);
											$("#detailDataPost").html(data);
										}
									});
					
								$("#topcontrol").click();
								//end next to detail data
							}
							*/
						}
					});
				}
				
				return false;
			});
			
			//start next to detail data
			//$("[href|='#detailData']").click();
			//alert(paramRealtyAndContractor);
			
			var postDeatilFn=function(paramRealtyAndContractorType,paramRealtyID){
				//alert("home");
				var urlDetailPost="";
				if(paramRealtyAndContractorType=="Y"){
				
					$.ajax({
						url:"./member/detailDataPostConstractor.php",
						type:"post",
						dataType:"html",
						//data:{"paramRealtyID":paramRealtyID},
						success:function(data){
							//alert(data);
							$("#detailDataPost").html(data);
							
							detailDataPosContructortFn(paramRealtyID);
						}
					});
				}else{
					
					$.ajax({
						url:"./member/detailDataPost.php",
						type:"post",
						dataType:"html",
						data:{"paramRealtyID":paramRealtyID},
						success:function(data){
							//alert(data);
							$("#detailDataPost").html(data);
							
							detailDataPostFn();
							
							//start footer button
							$("#btn-back-step1").click(function(){
								//alert("hello");
								$("[href|='#mainData']").click();
								$("#topcontrol").click();
								//return false;
							});
							$("#btn-next-step3").click(function(){
									//alert("hello");
								
									console.log($("select.realtyRoom").serialize());
									console.log($("input.characteristic").serialize());
									
									var paramRealtyRoom=$("select.realtyRoom").serialize();
									var paramCharacteristic=$("input.characteristic").serialize();
									
									$.ajax({
										url:"./Model/mDetailDataPost.php",
										type:"post",
										dataType:"html",
										data:{"paramAction":"realtySentData",
											
											"rdg_id":$("#rdg_id").val(),
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
											alert(data);
										}
									});
									//$("[href|='#imageVideo']").click();
									//$("#topcontrol").click();
									//return false;
							});
							//end footer button
							
						}
					});
					
				}
				
				
			};
			$("[href|='#detailData']").click(function(){
				
				postDeatilFn(paramRealtyAndContractorType,paramRealtyID);
				//alert(paramRealtyAndContractor);
			});
			
			
				

			$("#topcontrol").click();
			//end next to detail data
			//end save first step
			
			
			
			

			$("#btn-back-step2").click(function(){
					//alert("hello");
					$("[href|='#detailData']").click();
					//return false;
					$("#topcontrol").click();
			});


			/*
			$("#btn-back-step1").click(function(){
					//alert("hello");
					$("[href|='#mainData']").click();
					$("#topcontrol").click();
					//return false;
			});


			$("#btn-next-step3").click(function(){
					//alert("hello");
					$("[href|='#imageVideo']").click();
					$("#topcontrol").click();
					//return false;
			});
			*/

			$("#btn-back-step3").click(function(){
					//alert("hello");
					$("[href|='#imageVideo']").click();
					$("#topcontrol").click();
					//return false;
			});

			$("#btn-next-step4").click(function(){
					//alert("hello");
					$("[href|='#summary']").click();
					$("#topcontrol").click();
					//return false;
			});


			

	});