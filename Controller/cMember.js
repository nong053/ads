function startLoading(){
	 HoldOn.open('sk-rect');
	 }
function stopLoading(){
	HoldOn.close();
	 }

$(document).ajaxStart(function() {
	startLoading();
});
$(document).ajaxStop(function() {
	stopLoading();
});
//startcall realty for post
		var callRealtyFor = function(defaultParam,setByHome){
			
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"get",
				dataType:"json",
				data:{"paramAction":"realtyFor"},
				success:function(data){
					
					var $realtyFor="";
					
					var i=1;
					$.each(data,function(index,indexEntry){
						
						$realtyFor+="<div class=\"optonArea\" id='optonArea"+index+"'>";
							$realtyFor+="<div class=\"checkbox\">";
							$realtyFor+="<label>";
								if(i==defaultParam){
								$realtyFor+="<input type=\"radio\" checked=\"checked\" value="+indexEntry[0]+" class=\"realtyFor\" id='realtyFor-"+indexEntry[0]+"' name=\"realtyFor\">  "+indexEntry[1]+"";
								}else{
								$realtyFor+="<input type=\"radio\" value="+indexEntry[0]+" class=\"realtyFor\" id='realtyFor-"+indexEntry[0]+"' name=\"realtyFor\">  "+indexEntry[1]+"";	
								}
								$realtyFor+="</label>";
							$realtyFor+="</div>";
						$realtyFor+="</div>";
						i++;
					});
					
					
			
				$("#realtyForArea").html($realtyFor);
				
				//alert(setByHome);
				if(setByHome==1){
					$("#optonArea1").hide();
					//alert(setByHome);
				}else if(setByHome==2){
					//$("#optonArea1").hide();
					$("#optonArea0").hide();
					$("#optonArea3").hide();
				}
				
				
				
				if(defaultParam==1){
					$(".rdg_price_area").show();
					$(".rdg_price_down_area").hide();
					$(".rdg_price_rent_area").hide();
				}else if(defaultParam==2){
					$(".rdg_price_area").hide();
					$(".rdg_price_down_area").hide();
					$(".rdg_price_rent_area").show();
				}else if(defaultParam==3){
					$(".rdg_price_area").show();
					$(".rdg_price_down_area").hide();
					$(".rdg_price_rent_area").show();
				}else{
					//price defualt
					$(".rdg_price_area").show();
					$(".rdg_price_down_area").hide();
					$(".rdg_price_rent_area").hide();
				}
				//binding action for get value pricing below.
				$(".realtyFor").click(function(){
					
					if($(this).val()==1){
						$(".rdg_price_area").show();
						$(".rdg_price_down_area").hide();
						$(".rdg_price_rent_area").hide();
					}else if($(this).val()==2){
						$(".rdg_price_area").hide();
						$(".rdg_price_down_area").hide();
						$(".rdg_price_rent_area").show();
					}else if($(this).val()==3){
						$(".rdg_price_area").show();
						$(".rdg_price_down_area").hide();
						$(".rdg_price_rent_area").show();
					}else if($(this).val()==4){
						$(".rdg_price_area").show();
						$(".rdg_price_down_area").hide();
						$(".rdg_price_rent_area").hide();
					}else if($(this).val()==5){
						$(".rdg_price_area").hide();
						$(".rdg_price_down_area").show();
						$(".rdg_price_rent_area").hide();
					}
				});
				//$("#realtyFor-1").click();
					
				}
			});
		}
		//end call realty for post
		//start realty type 
		var callRealtyType = function(rt_contructor_yet,defaultParam){
		
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"get",
				dataType:"json",
				data:{"paramAction":"realtyType","rt_contructor_yet":rt_contructor_yet},
				success:function(data){
					//alert(data);
					$realtyFor="";
					var $i=0;
					
					
					$realtyFor+="<select name=\"realtyType\" id=\"realtyType\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							
							$realtyFor+="<option value=\"All\">-- เลือกประเภทสื่อสิ่งพิมพ์ --</option> ";
							
						}
						if(defaultParam==indexEntry[0]){
					
						$realtyFor+="<option selected=\"selected\" value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}else{
						$realtyFor+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";	
						}
					});
					$realtyFor+="</select>";
					
					$("#realtyTypeArea").html($realtyFor);
					
					/*
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
					*/
				}
			});
		}
		//callRealtyType();
		//end realty type
		
		//start list status project
		var callRealtyProjectStatus = function(defaultParam){
			$.ajax({
					url:"../Model/mRealtyDataGeneralAction.php",
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
							if(defaultParam==indexEntry[0]){
							$realtyProjectStatus+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}else{
							$realtyProjectStatus+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}
						});
						$realtyProjectStatus+="</select>";
						
						$("#areaProjectStatus").html($realtyProjectStatus);
					}
				});
			}
		//end list status project
		
		//start provine .
		var callProvince = function(rdg_address_province_id,rdg_address_district_id,rdg_address_sub_district_id){
		
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"province"},
				success:function(data){
					
					var provinceHtml="";
					
					provinceHtml+="<select name=\"rdg_address_province_id\" id=\"rdg_address_province_id\">";
						
						provinceHtml+="<option disabled=\"\" selected=\"\" value=\"\">-- กรุณาเลือกจังหวัด --</option>";
						
						$.each(data,function(index,indexEntry){
							if(rdg_address_province_id==indexEntry[0]){
								provinceHtml+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}else{
								provinceHtml+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}
							
						});
						
					provinceHtml+="</select>";
				
					$("#provinceArea").html(provinceHtml);
					$("#rdg_address_province_id").change(function(){
						//alert($(this).val());
						callDistrict($(this).val(),rdg_address_district_id);
					});
					
					
				}
			});
		};
		//end provine.
		//start district
		var callDistrict = function(paramProvince,rdg_address_district_id,rdg_address_sub_district_id){
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"district","paramProvince":paramProvince},
				success:function(data){
				
					var districtHtml="";
					
					districtHtml+="<select name=\"rdg_address_district_id\" id=\"rdg_address_district_id\">";
						
					districtHtml+="<option disabled=\"\" selected=\"\" value=\"\">-- กรุณาเลือกอำเภอ/เขต --</option>";
						
						$.each(data,function(index,indexEntry){
							
							if(rdg_address_district_id==indexEntry[0]){
								districtHtml+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}else{
								districtHtml+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}
							
						});
						
						districtHtml+="</select>";
				
					$("#districtArea").html(districtHtml);
					$("#rdg_address_district_id").change(function(){
						//alert($(this).val());
						callSubDistrict($(this).val(),rdg_address_sub_district_id);
					});
					
					
				}
			});
		};
		//callDistrict();
		//end district
		
		//start sub district
		var callSubDistrict = function(paramDistrictId,rdg_address_sub_district_id){
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"sub_district","paramDistrictId":paramDistrictId},
				success:function(data){
					
					var subDistrictHtml="";
					
					subDistrictHtml+="<select name=\"rdg_address_sub_district_id\" id=\"rdg_address_sub_district_id\">";
						
					subDistrictHtml+="<option disabled=\"\" selected=\"\" value=\"0\">-- กรุณาเลือกตำบล/แขวง --</option>";
						
						$.each(data,function(index,indexEntry){
							if(rdg_address_sub_district_id==indexEntry[0]){
								subDistrictHtml+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}else{
								subDistrictHtml+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
							}
							
						});
						
						subDistrictHtml+="</select>";
				
					$("#subDistrictArea").html(subDistrictHtml);
					
				}
			});
		};
		//callSubDistrict();
		//end sub district
		//start travel by bts 
		var callTavelByBTS = function(defaultParam){
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"POST",
				dataType:"JSON",
				data:{"paramAction":"publicTransport","param_pt_type":"BTS"},
				success:function(data){	

					
					
					
					$selectHTML="";
					$selectHTML+="<select name=\"rdg_bts\" id=\"rdg_bts\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$selectHTML+="<option value=\"\">-- เลือกสถานี้รถไฟฟ้า BTS  --</option> ";
						}
						if(defaultParam==indexEntry[0]){
							$selectHTML+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}else{
							$selectHTML+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}
					});
					$selectHTML+="</select>";
					$("#travelByBTSArea").html($selectHTML);
					
				}
			});
		}
		//end travel by bts 
		//start travel by MRT 
		var callTavelByMRT = function(defaultParam){
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"POST",
				dataType:"JSON",
				data:{"paramAction":"publicTransport","param_pt_type":"MRT"},
				success:function(data){	
				

					
					
					$selectHTML="";
					$selectHTML+="<select name=\"rdg_mrt\" id=\"rdg_mrt\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$selectHTML+="<option value=\"\">-- เลือกสถานี้รถไฟฟ้า MRT  --</option> ";
						}
						if(defaultParam==indexEntry[0]){
							$selectHTML+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}else{
							$selectHTML+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}
						
					});
					$selectHTML+="</select>";
					$("#travelByMRTArea").html($selectHTML);
					
				}
			});
		}
		//end travel by MRT 
		//start travel by ARL
		var callTavelByARL = function(defaultParam){
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"POST",
				dataType:"JSON",
				data:{"paramAction":"publicTransport","param_pt_type":"ARL"},
				success:function(data){	
					
					
					$selectHTML="";
					$selectHTML+="<select name=\"rdg_arl\" id=\"rdg_arl\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$selectHTML+="<option value=\"\">-- เลือกสถานี้รถไฟฟ้า ARL  --</option> ";
						}
						if(defaultParam==indexEntry[0]){
							$selectHTML+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}else{
							$selectHTML+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}
					});
					$selectHTML+="</select>";
					$("#travelByARLArea").html($selectHTML);
					
				}
			});
		}
		//end travel by ARL
		//start travel by HARBOR 
		var callTavelByHARBOR = function(defaultParam){
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"POST",
				dataType:"JSON",
				data:{"paramAction":"publicTransport","param_pt_type":"HARBOR"},
				success:function(data){	
					

					$selectHTML="";
					$selectHTML+="<select name=\"rdg_harbor\" id=\"rdg_harbor\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$selectHTML+="<option value=\"\">-- เลือกท่าเรือ  --</option> ";
						}
						if(defaultParam==indexEntry[0]){
							$selectHTML+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}else{
							$selectHTML+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}
					});
					$selectHTML+="</select>";
					$("#travelByHARBORArea").html($selectHTML);
					
				}
			});
		}
		//end travel by HARBOR 
		
		//start realty unit 
		var callRealtyUnit = function(defaultParam){
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
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
						if(defaultParam==indexEntry[0]){
							$realtyFor+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}else{
							$realtyFor+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}
						
					});
					$realtyFor+="</select>";
					$("#realtyUnitArea").html($realtyFor);
				}
			});
		}
		//end realty unit 
		//start estate unit 
		var callEstateUnit = function(defaultParam){
			
			$.ajax({
				url:"../Model/mRealtyDataGeneralAction.php",
				type:"get",
				dataType:"json",
				data:{"paramAction":"realtyUnit"},
				success:function(data){	
					$realtyFor="";
					$realtyFor+="<select name=\"rdg_estate_unit\" id=\"rdg_estate_unit\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$realtyFor+="<option value=\"\">-- เลือกหน่วย  --</option> ";
						}
						if(defaultParam==indexEntry[0]){
							$realtyFor+="<option selected='selected' value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}else{
							$realtyFor+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
						}
						
					});
					$realtyFor+="</select>";
					$("#rdgEstateUnitArea").html($realtyFor);
				}
			});
		}
		//end estate unit 
		
		
			
$(document).ready(function(){
		
		//MAIN MEMBER JS
	
		$(".logout").click(function(){
			
			$.ajax({
				url:"../Model/mSecurity.php",
				type:"post",
				dataType:"json",
				data:{"paramAction":"logoutAction"},
				success:function(data){
					if(data=="success"){
					alert("ออกจากระบบเรียบร้อย");
					window.location="../index.php";
					}
				}
			});
		});
		
});