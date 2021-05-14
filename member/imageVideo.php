<script type="text/javascript" src="../bootstrap-filestyle/src/bootstrap-filestyle.min.js"> </script>
<script type="text/javascript" src="../Controller/cImageVideo.js"> </script>
 <link rel="stylesheet" href="../css/cssImageVideo.css">

											
	<div class="headline"><h4>วีดีโอจาก Youtube </h4></div>
	<div class="form-group">
		<div class="alert alert-warning fade in">
			<strong>วิธีการฝังวิดีโอมีดังนี้!</strong> 
			<ul>
				<li>เข้าสู่หน้าวีดีโอของคุณ บน Youtube.com</li>
				<li>คลิกลิงก์แชร์ที่อยู่ด้านล่างของวิดีโอ</li>
				<li>คัดลอกโค้ดทีได้ มาวางลงในกล่องด้านล่างนี้</li>
			</ul>
		</div>
	
	
		<label class="col-lg-3 control-label titleGroup" for="rev_embed_code"> ฝังวีดีโอจาก Youtubeที่นี้</label>
		<div class="col-lg-9">
			<textarea rows="6" placeholder="Code Youtube Embedded" id="rev_embed_code" name="rev_embed_code" class="form-control"></textarea>
		</div>
	</div>
	
	
	<div class="headline"><h4>อัปโหลดรูปภาพ</h4></div>
	<!-- upload images -->
	<form name="formUploadPicture" method="post" action="../Model/mImageVideo.php" class="formUploadPicture" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
			<div class="fileUploadArea">
				<input type="file"  id="picture_file"   name="picture_file[]" class="picture_file filestyle " data-input="false">
				<input type="hidden"  name="action"  id="action" value="add"  >
			</div>
			<div class="btnUploadArea">
				<button type="button" id="btnUploadPicture" class=" btn-u-green  disPlaInline"><i class =' icon-cloud-upload'></i> Upload</button>
			</div>
		</div>
	</div>
	</form>
	<div class="row">
		<div id="showAllPictureArea"></div>
	</div>
	<hr>
	<div class="headline"><h4>อัปโหลดไฟล์เอกสาร(.doc,.excel,.ppt,.pdf)</h4></div>
	<!-- upload images -->
	<form name="formUploadDoc" method="post" action="../Model/mImageVideo.php" class="formUploadPicture" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
			<div class="fileUploadArea">
				<input type="file"  id="doc_file"   name="doc_file[]" class="doc_file filestyle " data-input="false">
				<input type="hidden"  name="action"  id="action" value="add"  >
			</div>
			<div class="btnUploadArea">
				<button type="button" id="btnUploadDoc" class=" btn-u-green  disPlaInline"><i class ='icon-cloud-upload'></i> Upload</button>
			</div>
		</div>
	</div>
	</form>
	<div id='showfileAttach'></div>
	
	
	<hr>
	<div class="form-group margin-top10">
			<div class="text-center">
				<button type="button" id="btn-back-step2" class="btn-u btn-u-yellow"><i class='icon-arrow-left '></i> ย้อนกลับ  </button>
				<button type="button" id="saveStep3" class="btn-u btn-u-green"><i class=' icon-check '></i> บันทึกและดำเนินการถัดไป  </button>
			</div>
		</div>
	<!-- upload images -->
