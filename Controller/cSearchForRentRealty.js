//start provine.
callProvince("","","","_rent");
//end provine.
		
$(document).ready(function(){

	$(".mainMenuPostRent").click(function(){
		
		$(".mainMenuPostRent").removeClass("btn-stackoverflow-inversed").css({"background":""});;
		$(this).addClass("btn-stackoverflow-inversed").css({"background":"orange"});
		$(".paramrtEmbed").remove();
		var paramEmbedPostId="<input type='hidden' value='"+this.id+"' name='embed_rt_id' id='embed_rt_id' class='paramrtEmbed'>";
		var paramEmbedPostName="<input type='hidden' value='"+$(this).text()+"' name='embed_rt_name' id='embed_rt_name' class='paramrtEmbed'>";
		$("#parameterEmbedAreaRent").html(paramEmbedPostId+""+paramEmbedPostName);
	});
	
	$("form#formSearchForRent").submit(function(){
		
		$(".realty_path_home").html("<a href='index.php?page=home'>หน้าแรก</a> ");
		$(".realty_path_type").text("/ "+"ขาย"+" /");
		$(".realty_path_name").text($("#embed_rt_name").val());
		
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
	
	$("from#fromSearchQuickRent").submit(function(){
		alert("ok");
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