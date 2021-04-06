$(document).ready(function(){
	//callProvince("","","","2");
	$("table#gridPostDedail").kendoGrid({
		//height: 550,
       // groupable: true,
        //sortable: true,
       
		pageable: {
           /* refresh: true,*/
            pageSizes: false,
            buttonCount: 5
        },
        
		scrollable: false,
	});
	$(".k-pager-info").hide();
	
	$("form#formSubPost").submit(function(){
		
		$.ajax({
			url:"post_detail.php",
			type:"post",
			dataType:"html",
			data:$(this).serialize(),
			success:function(data){
				$("#mainContrainArea").html(data);
				
				
				
				
			}
		});
		return false;
		
	
	});
	$(".btnSavePost").click(function(){
		//alert(this.id);
		var rdg_id=this.id;
		$.ajax({
			url:"Model/mSavedPost.php",
			type:"post",
			dataType:"json",
			data:{"paramAction":"checkUnique","rdg_id":rdg_id},
			success:function(data){
				//alert(data);
				if(data=="unique"){
					
					$.ajax({
						url:"Model/mSavedPost.php",
						type:"post",
						dataType:"json",
						data:{"paramAction":"savePost","rdg_id":rdg_id},
						success:function(data){
							if(data=='success'){
								alert("บันทึกประกาศเรียบร้อย");
							}
							
						}
					});
					
				}else{
					alert("ประกาศนี้ถูกบันทึกแล้ว");
				}
				
			}
		});
		
		return false;
	});
});