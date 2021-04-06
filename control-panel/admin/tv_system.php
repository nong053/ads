<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../jQueryUI/js/jquery-ui-1.8.23.custom.min.js"></script>
<link href="../jQueryUI/css/custom-theme/jquery-ui-1.8.23.custom.css" rel="stylesheet" type="text/css">


<!-- CKE-->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- CKE-->


<script>
$.noConflict();
jQuery(document).ready(function($){
//$("tabs").

	$("#tabs").tabs();
	
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

		

	$("#tab1").trigger("click");

	//set table suffter
	$("#tableTv tbody tr:odd").css({"background":"#EEF2F7"});
	$("#tableTv tbody tr:even").css({"background":"#DFE6EF"});
});
</script>
<div id="tabs">
	<ul>
		<li>
		<a href="#content1" id="tab1">ตารางออกอากาศ</a>
		</li>
	</ul>
	<div id="content1">
	
		<?php
		include("schedule_plan.php");
		?>
	</div>
</div>
