<?php session_start();
error_reporting (E_ALL ^ E_NOTICE);
date_default_timezone_set('Asia/Jakarta');
/*#### Define  Session Start here. ####*/
	
	//echo $_SESSION['cus_id'];
	if($_SESSION['ses_cus_id']==""){
		
		echo"<script>window.location='../index.php?modal=login'</script>";
		
	}
	if($_GET['loginType']=="loginForManage"){
		$_SESSION['sesLoginType']="loginForManage";
	}else{
		$_SESSION['sesLoginType']="loginForNewPost";
		
	}
	
?>

<!DOCTYPE html> 
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>ศูนย์รวมสื่อสิ่งพิมพ์,สื่อโฆษณา</title>

    <!-- Meta -->
  
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ศูนย์รวมสื่อสิ่งพิมพ์,สื่อโฆษณา">
    <meta name="author" content="ศูนย์รวมสื่อสิ่งพิมพ์,สื่อโฆษณา">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- loading -->
    <link rel="stylesheet" href="../css/HoldOn.min.css">
    
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="../assets/css/headers/header-default.css">
    <link rel="stylesheet" href="../assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/plugins/animate.css">
    <link rel="stylesheet" href="../assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="../assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="../assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../assets/css/custom.css">
	<link rel="stylesheet" href="../assets/css/custom_member.css">

	
	
	<!-- JS Global Compulsory -->           
	<script type="text/javascript" src="../assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="../assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="../assets/plugins/smoothScroll.js"></script>
	<script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="../assets/js/custom.js"></script>
	<!-- JS Javascript Customization -->
	<script src="../Controller/cMember.js"></script>
	
	<!-- JS Page Level -->           
	<script type="text/javascript" src="../assets/js/app.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/masking.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/validation.js"></script>
	<script type="text/javascript">
	    jQuery(document).ready(function() {
	        App.init();
	        Masking.initMasking();
	        Datepicker.initDatepicker();
	        Validation.initValidation();
	        });
	</script>
	
	<!--[if lt IE 9]>
	    <script src="../assets/plugins/respond.js"></script>
	    <script src="../assets/plugins/html5shiv.js"></script>
	    <script src="../assets/plugins/placeholder-IE-fixes.js"></script>
	    <script src="../assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->
	<!--[if lt IE 10]>
	    <script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->     

	<link rel="stylesheet" href="../kendoCommercial/styles/kendo.common.min.css" />
	<link rel="stylesheet" href="../kendoCommercial/styles/kendo.default.min.css" />
	<script src="../kendoCommercial/js/kendo.all.min.js"></script>
	
	<!-- java script loading -->
	<script src="../Controller/HoldOn.min.js"></script>
	
</head>

<body>    

<div class="wrapper">
    
    
	
    <!--=== Breadcrumbs ===-->
   
    <!-- <div class="breadcrumbs margin-bottom5"> -->
        <div class="container" >
            <h1 class="pull-left">ประกาศของฉัน(<?=$_SESSION['ses_cus_email']?>)</h1>
            <!-- 
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">หน้าแรก</a></li>
                 	<?php
					   switch($_GET['page']){
					   case 'post': echo"<li class='active'>ประกาศของฉัน</li>"; break;
					   case 'profile': echo"<li class='active'>ข้อมูลส่วนตัว</li>";break;
					   case 'inbox': echo"<li class='active'>ข้อความ</li>";break;
					   case 'stats': echo"<li class='active'>สถิติ</li>";break;
					   }
					   ?>
                
            </ul>
             -->
        </div>
    <!-- </div> -->
    <!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <!-- 
            <a href="index.html" class="logo">
                <img alt="Logo" src="assets/img/logo1-default.png">
            </a>
             -->
            <!-- End Logo -->
            
          

            <!-- Toggle get grouped for better mobile display -->
            <button data-target=".navbar-responsive-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse mega-menu navbar-responsive-collapse collapse" aria-expanded="false" style="height: 1px;">
            <div class="container">
                <ul class="nav navbar-nav">
                   
                   <li><a href="?page=post&loginType=loginForManage"><i class="fa fa-sort-alpha-asc"></i> ประกาศของฉัน</a></li>
                           
                            
                  
                    <li>
                        <a href='?page=profile'><i class="fa fa-magic"></i> ข้อมูลส่วนตัว
                        </a>
                       
                    </li>
                    <li>
                        <a href='?page=stats'><i class="fa fa-quote-left"></i> ข้อมูลสถิติ
                        </a>
                       
                    </li>
                     <li>
                     	<a href='../index.php?page=profile_post&cus_id=<?=$_SESSION['ses_cus_id']?>'><i class="fa fa-asterisk"></i> ดูประกาศ </a>
                       
                    </li>
                     <li>
                        <a href='#' class="logout">
                        <i class="fa fa-power-off "></i> ออกกจากระบบ
                        </a>
                       
                    </li>
                

                    

                            

                    

                   

                    
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    
    
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <!-- Begin Sidebar Menu -->
<!--             <div class="col-md-2"> -->
<!--                 <ul class="list-group sidebar-nav-v1" id="sidebar-nav"> -->
                    <!-- Typography -->
<!--                     <li class="list-group-item list-toggle active">   -->
   
<!-- 					<a href="#collapse-typography" data-parent="#sidebar-nav" data-toggle="collapse" class="" aria-expanded="true">ข้อมูลการประกาศ</a> -->
                       <!-- <ul class="collapse in" id="collapse-typography" aria-expanded="true" style=""> -->
<!--                             <li><a href="?page=post&loginType=loginForManage"><i class="fa fa-sort-alpha-asc"></i> ประกาศของฉัน</a></li> -->
<!--                             <li> -->
                                
<!--                                 <a href="?page=profile"><i class="fa fa-magic"></i> ข้อมูลส่วนตัว</a> -->
<!--                             </li> -->
                            <!-- 
<!--                             <li> -->
<!--                                 <span class="badge badge-u">New</span>                             -->
<!--                                 <a href="?page=inbox"><i class="fa fa-ellipsis-h"></i> ข้อความของฉัน</a> -->
<!--                             </li> -->
<!--                              --> 
<!--                             <li><a href="?page=stats"><i class="fa fa-quote-left"></i> ข้อมูลสถิติ</a></li> -->
<!-- 							<li> 
                                                  
                                <a href="../index.php?page=profile_post&cus_id=<?=$_SESSION['ses_cus_id']?>"><i class="fa fa-asterisk"></i> ดูประกาศของฉัน</a>-->
<!--                             </li> -->
<!--                             <li> -->
                                                      
<!--                                 <a href="#" class="logout"><i class="fa fa-asterisk"></i> ออกจากระบบ</a> -->
<!--                             </li> -->

                            
<!--                         </ul> -->
<!--                     </li> -->
                    <!-- End Typography -->


<!--                 </ul> -->
<!--             </div> -->
            <!-- End Sidebar Menu -->

            <!-- Begin Content -->
				<div class="col-md-12">
			
					   <?php
					   switch($_GET['page']){
					   case 'post': include"post.php";break;
					   case 'profile': include"profile.php";break;
					   case 'inbox': include"inbox.php";break;
					   case 'stats': include"stats.php";break;
					   default:include"post.php";
					   
					   }
					   ?>
				</div>
            
			</div> 
			<!-- End Content -->

    </div><!--/container-->     
    <!--=== End Content Part ===-->

 
     <br style="clear:both;">
     <br style="clear:both;">
     <br style="clear:both;">
     <br style="clear:both;">
     <br style="clear:both;">
     <br style="clear:both;">
     
</div><!--/End Wrapepr-->

</body>
</html>	