<?php session_start()?>
<!DOCTYPE html> 
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>อสังหาริมทรัพย์</title>

    <!-- Meta -->
  
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/custom_member.css">


	<!-- JS Global Compulsory -->           
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Javascript Customization -->
	<script src="assets/js/custom/member.js"></script>
	
	<!-- JS Page Level -->           
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/masking.js"></script>
	<script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/validation.js"></script>
	<script type="text/javascript">
	    jQuery(document).ready(function() {
	        App.init();
	        Masking.initMasking();
	        Datepicker.initDatepicker();
	        Validation.initValidation();
	        });
	</script>
	<!--[if lt IE 9]>
	    <script src="assets/plugins/respond.js"></script>
	    <script src="assets/plugins/html5shiv.js"></script>
	    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
	    <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->
	<!--[if lt IE 10]>
	    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->     


	
</head>

<body>    

<div class="wrapper">
    <!--=== Header ===-->    
    <div class="header">
        <div class="container">
            
            
           

           
        </div><!--/end container-->

      
    </div>
    <!--=== End Header ===-->
	
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs margin-bottom5">
        <div class="container">
            <h1 class="pull-left">ประกาศของฉัน</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">หน้าแรก</a></li>
                <li><a href="">ประกาศ</a></li>
                <li class="active">ประกาศของฉัน</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <!-- Begin Sidebar Menu -->
            <div class="col-md-3">
                <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
                    <!-- Typography -->
                    <li class="list-group-item list-toggle active">  
   
					<a href="#collapse-typography" data-parent="#sidebar-nav" data-toggle="collapse" class="" aria-expanded="true">ข้อมูลการประกาศ</a>
                       <ul class="collapse in" id="collapse-typography" aria-expanded="true" style="">
                            <li><a href="?page=post"><i class="fa fa-sort-alpha-asc"></i> ประกาศของฉัน</a></li>
                            <li>
                                
                                <a href="?page=profile"><i class="fa fa-magic"></i> ข้อมูลส่วนตัว</a>
                            </li>
                            <li>
                                <span class="badge badge-u">New</span>                            
                                <a href="?page=inbox"><i class="fa fa-ellipsis-h"></i> ข้อความของฉัน</a>
                            </li>
                            <li><a href="?page=stats"><i class="fa fa-quote-left"></i> ข้อมูลสถิติ</a></li>
							<li>
                                                  
                                <a href="#"><i class="fa fa-asterisk"></i> ดูหน้าประกาศ</a>
                            </li>
                            <li>
                                                      
                                <a href="#"><i class="fa fa-asterisk"></i> ออกจากระบบ</a>
                            </li>

                            
                        </ul>
                    </li>
                    <!-- End Typography -->


                </ul>
            </div>
            <!-- End Sidebar Menu -->

            <!-- Begin Content -->
				<div class="col-md-9">
			
					   <?php
					   switch($_GET['page']){
					   case 'post': include"post.php";break;
					   case 'profile': include"profile.php";break;
					   case 'inbox': include"inbox.php";break;
					   case 'stats': include"stats.php";break;
					   
					   }
					   ?>
				</div>
            
			</div> 
			<!-- End Content -->

    </div><!--/container-->     
    <!--=== End Content Part ===-->

      <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
					<!--
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>    
                    </div>
					--><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>เมนูหน้าหลักเว็ปไซด์</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">ฝากประกาศโครงการใหม่</a>
                                 
                                </li>
                                <li>
                                    <a href="#">ฝากประกาศอสังหาริมทรพัย์ใกล้แหล่งท่องเที่ยว</a>
                                
                                </li>
                                <li>
                                    <a href="#">ฝากประกาศอสังหาริมทรัพย์เพื่อเช่า </a>
                                    
                                </li>
								<li>
                                    <a href="#">ฝากประกาศอสังหาริมทรัพย์เพื่อขาย </a>
                                </li>

								<li>
                                    <a href="#">ฝากประกาศอสังหาริมทรัพย์ใกล้ รถไฟฟ้าบีทีเอส</a>
                                </li>
									<li>
                                    <a href="#">ฝากประกาศอสังหาริมทรัพย์ใกล้ รถไฟฟ้าใต้ดินเอ็ม อาร์ ท</a>
                                </li>

								<li>
                                    <a href="#">ฝากประกาศอสังหาริมทรัพย์ใกล้ ท่าเรือ แม่น้ำเจ้าพระยา</a>
                                </li>

								<li>
                                    <a href="#">ฝากประกาศอสังหาริมทรัพย์ใกล้ รถไฟฟ้าแอร์พอร์ตลิงค</a>
                                </li>

								<li>
                                    <a href="#">ค้นหาอสังหาริมทรัพย์กับรถประจำทาง ขสมก กรุงเทพฯ</a>
                                </li>

								<li>
                                    <a href="#">ฝากประกาศตัวแทนขายวัสดุก่อสร้าง</a>
                                </li>

								<li>
                                    <a href="#">ฝากประกาศผู้รับเหมาทั่วไป</a>
                                </li>

								<li>
                                    <a href="#">ฝากประกาศโรงแรมและรีสอร์ท</a>
                                </li>

                            </ul>
                        </div>
                    </div><!--/col-md-3-->  
                    <!-- End Latest --> 
                    
                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>การบริการเว็ปไซต์</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">เกี่ยวกับเรา</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ฝากลงประกาศฟรี</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">สมัครสมาชิกใหม่</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">สมัตรสมาชิกผ่านFacebook</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ลืมรหัส</a><i class="fa fa-angle-right"></i></li>

							<li><a href="#">แผนผังเวปไซต์</a><i class="fa fa-angle-right"></i></li>
							<li><a href="#">แชร์เฟสบุค</a><i class="fa fa-angle-right"></i></li>
							<li><a href="#">แปลภาษา</a><i class="fa fa-angle-right"></i></li>
							<li><a href="#">นโยบายและเงื่อนไข</a><i class="fa fa-angle-right"></i></li>
							<li><a href="#">ข้อตกลงการบริการ</a><i class="fa fa-angle-right"></i></li>
							<li><a href="#">วิธีการใช้</a><i class="fa fa-angle-right"></i></li>

                        </ul>
                    </div><!--/col-md-3-->
					
					<!-- End Link List -->    
					  <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>โครงการจากผู้ก่อสร้าง</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">ศุภาลัย</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">แสนสิริ</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">เสนาดีเวลลอปเม้นท์</a><i class="fa fa-angle-right"></i></li>
							 <li><a href="#">เอสซี แอสเสท</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ไรมอน แลนด์</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">พฤกษา</a><i class="fa fa-angle-right"></i></li>
							 <li><a href="#">ปริญสิริ</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ควอลิตี้ เฮ้าส</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">อนันดา</a><i class="fa fa-angle-right"></i></li>
							 <li><a href="#">ออริจิ้น พร็อพเพอร์ตี้</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">เอพี</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">โนเบิล</a><i class="fa fa-angle-right"></i></li>
							 <li><a href="#">นารายณ์พร็อพเพอร์ตี้</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">เจ้าพระยามหานคร</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">แสนด์ แอนด์ เฮ้าส</a><i class="fa fa-angle-right"></i></li>
							 <li><a href="#">ลลิล</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">เมเจอร์ ดีเวลลอปเม้นท์</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">อารียา</a><i class="fa fa-angle-right"></i></li>
							 <li><a href="#">พร็อพเพอร์ตี้เพอร์เฟค</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">แอล.พี.เอ็น.</a><i class="fa fa-angle-right"></i></li>
							
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->    
                    <!-- End Link List -->    
					  <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>ติดต่อโฆษณา</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">ฝากลงประกาศโครงการใหม่</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ฝากลงประกาศอสังหาริมทรัพย์เพื่อเช่าและขาย</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ฝากลงประกาศตัวแทนขายวัสดุก่อสร้าง</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ฝากลงประกาศผู้รับเหมา</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">ฝากลงประกาศโรงแรมและ รีสอร์ท</a><i class="fa fa-angle-right"></i></li>


                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->    

					<!-- End Link List -->    
					  <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>ข้อมูลและข่าวสาร</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">สินเชื่อเพื่ออยู่อาศัย และบ้าน</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">การคำนวณดอกเบี้ยแต่ละธนาคาร</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">อัตราการแลกเปลี่ยนเงินตรา</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->    


				

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>ติดต่อโฆษณา</h2></div>                         
                        <address class="md-margin-bottom-40">
                            25, Lorem Lis Street, Orange <br />
                            California, US <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div> 
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                     
                        <p>
                            2015 &copy; All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div> 
        </div><!--/copyright-->
    </div>     
    <!--=== End Footer Version 1 ===-->
</div><!--/End Wrapepr-->

</body>
</html>	