$(document).ready(function(){
	
	var showInboxFn=function(idArea,paramNewOld){
		$.ajax({
			url:"../Model/mInbox.php",
			type:"post",
			dataType:"html",
			async:false,
			data:{"paramAction":"showInbox","idArea":idArea,"paramNewOld":paramNewOld},
			success:function(data){
				$("#"+idArea).html(data);
				
				//set grid start
				 $("#gridInbox"+idArea).kendoGrid({
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
			}
		});
	};
	
	showInboxFn();
	
	//Start new inbox 
	$("[href|='#newInbox']").click(function(){
		showInboxFn("newInboxArea","N");
		 
	});
	//end new inbox  
	
	//Start old inbox 
	$("[href|='#oldInbox']").click(function(){
		showInboxFn("oldInboxArea","O");
		 
	});
	//end old inbox 
});