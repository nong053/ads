//start provine.
callProvince();
//end provine.


function initMapTotal(jsonObjEncode) {
	var mapOptions = {
	  center: {lat: 13.847860, lng: 100.604274},
	  zoom: 10,
	}
		
	var maps = new google.maps.Map(document.getElementById("totalMap"),mapOptions);

	var marker, info;

	// console.log("------------1");
	// console.log(jsonObjEncode);
	
	var jsonObj;
	if(jsonObjEncode==undefined){
		// jsonObj = [{"location":"วัดลาดปลาเค้า", "lat": "13.846876", "lng": "100.604481"},
	  	// 		  {"location":"หมู่บ้านอารียา", "lat": "13.847766", "lng": "100.605768"},
	  	// 		  {"location":"สปีดเวย์", "lat": "13.845235", "lng": "100.602711"},
	  	// 		  {"location":"สเต็ก ลุงหนวด", "lat": "13.862970", "lng": "100.613834"}];

					jsonObj = [];
	}else{
		jsonObj=jsonObjEncode;
	}
	// console.log("------------2");
	// console.log(jsonObjEncode);
	 
	 var image = {
	          //url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
	          //url:"https://cdn0.iconfinder.com/data/icons/business-pack-4/512/billboard-512.png",
	          // This marker is 20 pixels wide by 32 pixels high.
	          size: new google.maps.Size(20, 32),
	          // The origin for this image is (0, 0).
	          origin: new google.maps.Point(0, 0),
	          // The anchor for this image is the base of the flagpole at (0, 32).
	          anchor: new google.maps.Point(0, 32)
	        };

	 
	$.each(jsonObj, function(i, item){

		marker = new google.maps.Marker({
		   position: new google.maps.LatLng(item.lat, item.lng),
		   map: maps,
		   icon: image,
		   title: item.location,
		   url:item.url
		});

	  info = new google.maps.InfoWindow();


	  google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
		return function() {
		   info.setContent(item.location);
		   info.open(maps, marker);

		  
		}
	  })(marker, i));
	
	  google.maps.event.addListener(marker, 'click', (function(marker, i) {
		return function() {
		//    info.setContent(item.location);
		//    info.open(maps, marker);
		window.location.href = this.url;
		  
		}
	  })(marker, i));

	  

	});

	//alert("hello jquery");

}
		
$(document).ready(function(){


	
	$("form#formSearchForSales").submit(function(){
		//alert($("#rt_id").val());
		//alert($("#rf_id").val());
		
		//$(".realty_path_home").html("<a href='index.php?page=home'>หน้าแรก</a> ");
		//$(".realty_path_type").text("/ "+"เช่า"+" /");
		//$(".realty_path_name").text($("#embed_rt_name").val());
		
		/* call ajax for start*/
		/*
		$.ajax({
			url:"Model/mAds.php",
			type:"post",
			dataType:"html",
			data:{"action":"adsRL","embed_rt_id":$("#embed_rt_id").val()},
			success:function(data){
				
				$(".adsLR").html(data);
				
			}
		});
		*/
		/* call ajax for end*/
		
		$.ajax({
			url:"post_detail.php",
			type:"post",
			dataType:"html",
			async:false,
			data:$(this).serialize(),
			success:function(data){
				$("#mainContrainArea").html(data);


				

			}
		});
		
		//$("#totalMap").show();
		// call total map start
		
				$.ajax({
					url:"Model/mTotalMap.php",
					type:"post",
					dataType:"json",
					data:$(this).serialize(),

					success:function(data){
						
			  			
			  			var latLng=[];
			  			var jsonObj="[";
			  			$.each(data,function(index,indexEntry){

			  				latLng=indexEntry['rdg_map'].split(",");
			  			
			  				if(index==0){
			  					jsonObj+="{";
			  					
			  				}else{
			  					jsonObj+=",{";
			  					
			  				}
			  				jsonObj+="\"location\":\""+indexEntry['rdg_title']+"\",\"lat\":\""+latLng[0]+"\",\"lng\":\""+latLng[1]+"\",\"url\":\"index.php?page=post_sub_detail&rdg_id="+indexEntry['rdg_id']+"\"";
			  				
			  		

			  				jsonObj+="}";

			  			});
			  			jsonObj+="]";

			  			var jsonObjEncode=eval("("+jsonObj+")");
			  	
						initMapTotal(jsonObjEncode);
						
					}
				});
				
				// call total map end

		



		return false;
	});
	
	$("#fromSearchQuick").submit(function(){
		
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
	
	$("#btnSaveSearch").click(function(){
		
		console.log($("form#formSearchForSales").serialize());
		
		//alert("hello");
		$.ajax({
			url:"Model/mSaveSearch.php",
			type:"post",
			dataType:"html",
			data:$("form#formSearchForSales").serialize(),
			success:function(data){
				console.log(data);
			}
		});
		
		
		return false;
	});
});