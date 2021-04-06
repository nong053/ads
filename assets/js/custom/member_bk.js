	$(document).ready(function(){
		
		//varible galbal
		var paramRealtyAndContractor="";
		
		
		
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
				data:{"paramAction":"realtyType"},
				success:function(data){
					$realtyFor="";
					
					
					$realtyFor+="<select name=\"realtyType\" id=\"realtyType\">";
					$.each(data,function(index,indexEntry){
						if(index==0){
							$realtyFor+="<option value=\"\">-- เลือกประเภทอสังหาริมทรัพย์  --</option> ";
						}
						$realtyFor+="<option value=\""+indexEntry[0]+"\">"+indexEntry[1]+"</option> ";
					});
					$realtyFor+="</select>";
					
					$("#realtyTypeArea").html($realtyFor);
					

					$("#realtyType").on("change",function(){

							alert(this.value);
							paramRealtyAndContractor=this.value;

					});
					$("#realtyType").change();
				}
			});
		}
		callRealtyType();
		//end realty type 
		
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
							$realtyFor+="<option value=\"\">-- เลือกหน่วยอสังหาริมทรัพย์  --</option> ";
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
		
		

		
		
			

			
			$("#saveStep1").click(function(){
				
					$("[href|='#detailData']").click();
					alert(paramRealtyAndContractor);
					if(("realty2"==paramRealtyAndContractor) 
						|| ("realty3"==paramRealtyAndContractor)
						|| ("realty4"==paramRealtyAndContractor)
						|| ("realty5"==paramRealtyAndContractor)
						|| ("realty6"==paramRealtyAndContractor)
						|| ("realty7"==paramRealtyAndContractor)
						|| ("realty8"==paramRealtyAndContractor)
						|| ("realty9"==paramRealtyAndContractor)
						|| ("realty10"==paramRealtyAndContractor)
						|| ("realty11"==paramRealtyAndContractor)
						|| ("realty12"==paramRealtyAndContractor)
						|| ("realty13"==paramRealtyAndContractor)
						|| ("realty14"==paramRealtyAndContractor)
						|| ("realty15"==paramRealtyAndContractor)

					){
						//alert("home");
						$.ajax({
							url:"./member/detailDataPostHome.php",
							type:"get",
							dataType:"html",
							success:function(data){
								//alert(data);
								$("#detailDataPost").html(data);
							}
						});

					}else if("realty3"==paramRealtyAndContractor){

						$.ajax({
							url:"./member/detailDataPostCondo.php",
							type:"get",
							dataType:"html",
							success:function(data){
								//alert(data);
								$("#detailDataPost").html(data);
							}
						});


					}else if("contractor1"==paramRealtyAndContractor){
						$.ajax({
							url:"./member/detailDataPostConstractor.php",
							type:"get",
							dataType:"html",
							success:function(data){
								//alert(data);
								$("#detailDataPost").html(data);
							}
						});

					}

					
				$("#topcontrol").click();
				//	return false;
					 //$('html, body').animate({scrollTop:0}, 'slow');
			});

			$("#btn-back-step2").click(function(){
					//alert("hello");
					$("[href|='#detailData']").click();
					//return false;
					$("#topcontrol").click();
			});



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