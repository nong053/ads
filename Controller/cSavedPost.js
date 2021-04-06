$(document).ready(function(){
	$(".btnDelSavedPost").click(function(){
		
		 if(confirm("ยืนยันการลบข้อมูลนี้")){
				$.ajax({
					url:"Model/mSavedPost.php",
					type:"post",
					dataType:"json",
					async:false,
					data:{"paramAction":"del","rdg_id":this.id},
					success:function(data){
						location.reload(); 
					}
				});
			 }
	});
});