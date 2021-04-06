<script type="text/javascript" src="../assets/plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){

/*
	$.ajax({
		url:"../Model/mDetailDataPost.php",
		type:"post",
		dataType:"json",
		data:{"paramAction":"realtyDetailDataById","paramRealtyID":14},
		success:function(data){
			var dataRDCID=data[0]['rdc_id'];
			var dataRDFID=data[1]['rdf_id'];
			var dataRDIID=data[2]['rdi_id'];
			var dataRDNP=data[3]['rdnp_id'];
			
			$.each(dataRDCID,function(index,indexEntry){
				alert(indexEntry);
			});
			
		}
	});
*/

	$.ajax({
		url:"../Model/mDetailDataPost.php",
		type:"post",
		dataType:"json",
		data:{"paramAction":"realtyDetailRoomById","paramRealtyID":14},
		success:function(data){
			console.log(data["rdr_bedroom"]);
			console.log(data["rdr_maid"]);
			console.log(data["rdr_toilet"]);
			console.log(data["rdr_studio"]);
			console.log(data["rdr_deluxeRoom"]);
			console.log(data["rdr_excutiveRoom"]);
			console.log(data["rdr_masterBedroom"]);
			console.log(data["rdr_smallBedroom"]);
			console.log(data["rdr_meetingRoom"]);
			console.log(data["rdr_livingRoom"]);
 			console.log(data["rdr_drawingRoom"]);
			console.log(data["rdr_storageRoom"]);
 			console.log(data["rdr_kitchen"]);
            console.log(data["rdr_laundryRoom"]);
            console.log(data["rdr_parking"]);
		}
	});

	//realtyDetailRoomById
});
</script>