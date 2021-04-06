<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../jQueryUI/js/jquery-ui-1.8.20.custom.min.js"></script>
<link href="../jQueryUI/css/smoothness/jquery-ui-1.8.20.custom.css" rel="stylesheet" type="text/css">
<script src="http://malsup.github.com/jquery.form.js"></script>

<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->


<script>
$.noConflict();
jQuery(document).ready(function($){
//$("tabs").
	$("#tabs").tabs();
	$("#tab1").click(function(){
	//alert("hello");
		$.ajax({
		url:"schedule_plan.php",
		type:"GET",
		cache:false,
		dataType:"html",
		success:function(data){
		$("#content1").append(data);

		 function editor(editor_name){

            CKEDITOR.replace(editor_name,{
            filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            } );

		}


		//set editor
		editor("list_detail");
		//set editor
		//submit 1 for ajaxForm because must press 2 times
		$("form#form_schedule").trigger("submit");
		//submit 1 for CKETOR because must press 2 times
		setTimeout(function(){
		$("form#form_schedule").trigger("submit");
		},1000)
		

		}
		});
	
	});
	$("#tab1").trigger("click");
});
</script>
<div id="tabs">
	<ul>
		<li>
		<a href="#content1" id="tab1">ตารางออกอากาศ</a>
		</li>
	</ul>
	<div id="content1">
	













	</div>
</div>
