$(document).ready(function(){

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
	//callProvince();
	
	
	$.ajax({
		url:"../Model/mProfile.php",
		type:"post",
		dataType:"json",
		data:{"paramAction":"selectIDPDSD"},
		success:function(data){
			console.log(data['cus_province']);
			console.log(data['cus_district']);
			console.log(data['cus_sub_district']);
			
			callProvince(data['cus_province'],data['cus_district'],data['cus_sub_district']);
			callDistrict(data['cus_province'],data['cus_district'],data['cus_sub_district']);
			callSubDistrict(data['cus_district'],data['cus_sub_district']);
		}
	});
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
	
	//submit cus start
	function CKupdate(){
	    for ( instance in CKEDITOR.instances )
	        CKEDITOR.instances[instance].updateElement();
	}
	$("#formCus").submit(function(){
		
		CKupdate();
		
		$.ajax({
			url:"../Model/mProfile.php",
			type:"post",
			dataType:"json",
			data:$(this).serialize(),
			success:function(data){
				
				if(data='success'){
					alert("บันทึกข้อมูลเรียบร้อย");
				}
			}
		});
		return false;
	});
	//submit cus end
//submit cus start
	$("#formChangePass").submit(function(){
		
		if($("#cus_new_pass").val()!=$("#cus_confirm_new_pass").val()){
			alert("รหัสไม่ตรงกัน");
		}else{
			$.ajax({
				url:"../Model/mProfile.php",
				type:"post",
				dataType:"json",
				data:$(this).serialize(),
				success:function(data){
					if(data='success'){
						alert("แก้ไขรหัสผ่านเรียบร้อย");
					}
				}
			});
		}
		return false;
	});
	//submit cus end
	
	$("#cus_title_name").change(function(){
		//alert($(this).val());
		//alert($("#cus_title_name option:selected").text());
		if($(this).val()==1 || $(this).val()==2 || $(this).val()==2 ){
			$(".person").show();
			$(".company").hide();
		
		}else{
			$(".person").hide();
			$(".company").show();
			$("#cus_company").text("ชื่อ"+$("#cus_title_name option:selected").text());
		}
	});
	$("#cus_title_name").change();
});