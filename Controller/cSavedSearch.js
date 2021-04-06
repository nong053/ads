$(document).ready(function(){

	var showSavedSearchFn=function(){
		
		$.ajax({
			url:"Model/mShowSearch.php",
			type:"post",
			dataType:"html",
			async:false,
			data:{"paramAction":"showSearch"},
			success:function(data){
				$("#savedSearchArea").html(data);
				
				//set grid start
				 $("#gridShowSearch").kendoGrid({
		             //height: 550,
		             sortable: true,
		             dataSource: {
		                 pageSize: 5
		             },
		             pageable: {
		                 refresh: true,
		                 pageSizes: true,
		                 buttonCount: 5
		             },
		         });
				//set grid end
				 
				//Management Del or Open Search Start
				
					$(".btnDelSaveSearch").click(function(){
						 if(confirm("ยืนยันการลบข้อมูลนี้")){
							$.ajax({
								url:"Model/mShowSearch.php",
								type:"post",
								dataType:"json",
								async:false,
								data:{"paramAction":"del","rss_id":this.id},
								success:function(data){
									showSavedSearchFn();
								}
							});
						 }
					});
					$(".btnOpenSearch").click(function(){
						$.ajax({
							url:"Model/mShowSearch.php",
							type:"post",
							dataType:"json",
							async:false,
							data:{"paramAction":"getData","rss_id":this.id},
							success:function(data){
								alert(data)
							}
						});
					});
					
				 //Management Del or Open Search End
				
			}
		});
	};
	
	showSavedSearchFn();
});