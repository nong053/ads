$(document).ready(function(){
	
	//$("table.gridSpecialPost").kendoGrid({
		//height: 550,
       // groupable: true,
        //sortable: true,
//        pageable: {
//            refresh: true,
//            pageSizes: true,
//            buttonCount: 5
//        },
		//scrollable: false,
	//});
	
	//call main function click contract from start
	contactFormModalFn();
	//call main function click contract from end
	
	
	

	
	//click map start
	$(".mapContactModal").click(function(){
				//setupMap();
				$.ajax({
					url:"Model/mMap.php",
					type:"post",
					dataType:"html",
					data:{"paramRdgID":this.id},
					success:function(data){
						var latLong=data;
						latLong=latLong.split(",");
						setTimeout(function(){
							setupMap(true,latLong[0],latLong[1],"mapArea");
						},1000);
					}
				});
				
	});
	//click map end
	
	//click gallery realty start
	$(".imageSlideModal").click(function(){
		$.ajax({
			url:"galleryRealty.php",
			type:"post",
			dataType:"html",
			data:{"paramRdgID":this.id},
			success:function(data){
				$("#galleryRealtyArea").html(data);
			}
		});
		//
	});
	//click gallery realty end
	/*
	$(".saveForLater").click(function(){
		alert("บันทึกประกาศเพื่อเก็บไว้ดูภายหลังเรียบร้อย");
	});
	*/
});

	