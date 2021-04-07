<?php session_start();
include("config.inc.php");

$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
$thai_month_arr=array(
		"0"=>"",
		"1"=>"มกราคม",
		"2"=>"กุมภาพันธ์",
		"3"=>"มีนาคม",
		"4"=>"เมษายน",
		"5"=>"พฤษภาคม",
		"6"=>"มิถุนายน",
		"7"=>"กรกฎาคม",
		"8"=>"สิงหาคม",
		"9"=>"กันยายน",
		"10"=>"ตุลาคม",
		"11"=>"พฤศจิกายน",
		"12"=>"ธันวาคม"
);
function thai_date($time){
	global $thai_day_arr,$thai_month_arr;
	$thai_date_return="วัน".$thai_day_arr[date("w",$time)];
	$thai_date_return.= "ที่ ".date("j",$time);
	$thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];
	$thai_date_return.= " พ.ศ.".(date("Yํ",$time)+543);
	$thai_date_return.= "  ".date("H:i",$time)." น.";
	return $thai_date_return;
}

//echo $_SESSION['sesLoginType'];
?>





<!DOCTYPE html> 
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
<!--
    <title>ศูนย์รวมป้ายโฆษณา ลงประกาศสื่อสิ่งพิมพ์ฟรี ,สื่อสิ่งพิมพ์,สื่อโฆษณา,ป้ายบิลบอร์ด</title>
-->
    <!-- Meta -->
  
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

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
	 <link rel="stylesheet" href="assets/css/custom_kosit.css">
	 <link rel="stylesheet" href="css/index.css">
	 <link rel="stylesheet" href="assets/plugins/brand-buttons/brand-buttons-inversed.css">
	  
	  <!-- loading -->
    <link rel="stylesheet" href="css/HoldOn.min.css">
	  
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
	<script type="text/javascript" src="Controller/cMain.js"></script>
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
	
<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCA5Egg2g8Qu-bbgidkJMhRCyAQqyxSYBk"  type="text/javascript"></script> 
<!--
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHeFJa2RjWISo7BNSHF4FomY4bcPXlhtY" async defer></script>  
 -->
<!--	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> -->
	
	
	<link rel="stylesheet" href="kendoCommercial/styles/kendo.common.min.css" />
	<link rel="stylesheet" href="kendoCommercial/styles/kendo.default.min.css" />
	<script src="kendoCommercial/js/kendo.all.min.js"></script>
	
	<!-- java script loading -->
	<script src="Controller/HoldOn.min.js"></script>
	
	<style>
	.container{
  max-width: none !important;
  width: 1000px;
}


	</style>

<style> 
@import url(css/fonts/thsarabunnew.css);
body{ font-family: 'THSarabunNew', sans-serif; font-size: 0.95em; line-height: 1.7em; background: #e1e1e1; }
</style>


<!-- face book login start -->	
	<?php
require 'sdk/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '1031225606922179',
  'secret' => '77df1cb799aabb38ead4e37880cbcb67',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// Save to mysql
if ($user) {

	if($_GET["code"] != "")
	{
		$_SESSION['ses_cus_id']=$user_profile["id"];
		$_SESSION['ses_cus_first_name']=$user_profile["name"];
		echo $_SESSION['ses_cus_id'];
		
				
				$strSQL ="  INSERT INTO  customer (cus_id,cus_first_name,admin_id,cus_update) 
					VALUES
					('".$_SESSION['ses_cus_id']."',
					'".$_SESSION['ses_cus_first_name']."',
					'1',
					'".trim(date("Y-m-d H:i:s"))."')";
				
				$objQuery  = mysqli_query($conn,$strSQL);
				
				
				
				?>
					<script>
						alert("เข้าระบบเรียบร้อยแล้ว");
					</script>
				<?php
				
				mysqli_close();
				//header("location:index.php");
				?>
					<script>
						window.location='index.php';
					</script>
				<?php
				exit();
	}
}

// Logout
if($_GET["Action"] == "Logout")
{
	$facebook->destroySession();
	header("location:index.php");
	exit();
}
?>
<!-- face book login end -->	
</head>

<body> 

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.5&appId=1031225606922179";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<?php 

$strSLQBannerLR="select * from banner_sum where pic_position='8' and 
		(main_menu_id='home' or main_menu_id='All') and pic_display='Y'";
$resultBannerLR=mysqli_query($conn,$strSLQBannerLR);
$rsLR=mysqli_fetch_array($resultBannerLR);

  

?>


<div class='adLeft adsLR'  >

<?php 
if($rsLR['pic_name']){
?>
	  <img src="control-panel/mypicture/1/<?=$rsLR['pic_name']?>" width="100%" height="100%" /> 
<?php 
}
 ?>
</div>
<div class='adRight adsLR' >
<?php 
if($rsLR['pic_name']){
?>
	 <img src="control-panel/mypicture/1/<?=$rsLR['pic_name']?>" width="100%" height="100%" />
<?php }?>
</div>
<?php 

	if($_GET['modal']=="login"){
		
		?>
		<script>
		$(document).ready(function(){
			$(".loginFormModal").click();
			$("#loginType").val("loginForPost");
		});
		
		</script>
		<?php

	}
?>

<div class="wrapper">
    <!--=== Header ===-->    
    <div class="header">
        <div class="container " style="margin-bottom: 0px;">
            
					<!-- 
					<div class="col-xs-2">
						
						<a class="logo" href="index.html">
							<img src="assets/img/logo1-default.png" alt="Logo">
							
						</a>
						 
					</div>
					 -->
					<div id="adHeader" style=" background:#dddddd; margin-top:2px; height:88px;" class="col-xs-8 ">
				
					<?php 
					$strSLQBanner7="select * from banner_sum where pic_position='7'";
					$resultBanner7=mysqli_query($conn,$strSLQBanner7);
					$rsBanner7=mysqli_fetch_array($resultBanner7);
					if($rsBanner7['pic_link']!=""){
						?>
						<a target="_blank" href="<?=$rsBanner7['pic_link']?>">
						<?php
					}
					?>

					 <img src="control-panel/mypicture/1/<?=$rsBanner7['pic_name']?>" width="100%" height="100%" />
					 <?php
					 if($rsBanner7['pic_link']!=""){
						?>
						</a>
						<?php
					}
					?>

					</div>
					<div class="col-xs-4">
					 <!-- Topbar -->
						<div class="topbar" style="padding: 2px 0;">

                            <div class="row">
                                <div class="col-xs-6" style=" padding-left:2px;padding-right:1px;">
                                   
                                    <button class="btn btn-social btn-block btn-facebook-inversed " style="height:50px;" onclick="window.location.href='<?=$loginUrl?>'">
                                      <i class="fa fa-facebook"></i> 
                                      	
                                      	เข้าสู่ระบบผ่านเฟสบุ๊ค
                                      
                                    </button>
                                   
                                </div>
                                
                                

                                 <div class="col-xs-6" style="padding-left:0px;padding-right:0px;" > 
                                  
                                    <div id="google_translate_element" class="btn-block btn-android-inversed" style="height:50px;"></div>
									<script>
									function googleTranslateElementInit() {
									  new google.translate.TranslateElement({
									    pageLanguage: 'th'
									  }, 'google_translate_element');
									}
									</script>
									<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                </div>
                                
                                <div class="col-xs-6" style="padding-left:2px;padding-right:1px;">
                                    <button data-target="#registerFormModal" data-toggle="modal"   class="btn btn-social  btn-block btn-xing-inversed" style="height:38px;">
                                      
                                      <i class="fa fa-rss"></i> สมัครสมาชิก
                                    </button>
                                </div>

                                 <div class="col-xs-6"style="padding-left:0px;padding-right:0px;" >
                                     	
                                     	<?php 
                                     
                                     	if($_SESSION['ses_cus_email']!=""){
                                     		?>
                                     	
                                     		<button onclick="location.href='member/index.php?loginType=loginForManage'" class="btn btn-social  btn-block btn-xing-inversed loginFormModal" style="height:38px;">
		                                      <i class="fa fa-dropbox"></i> เข้าสู่ระบบ
		                                    </button>
                                     		<?php
                                     	}else{
                                     		?>
                                     		<button  data-target="#loginFormModal" data-toggle="modal" class="btn btn-social  btn-block btn-xing-inversed loginFormModal" style="height:38px;">
		                                      <i class="fa fa-dropbox"></i> เข้าสู่ระบบ
		                                    </button>
                                     		<?php
                                     	}
                                     	?>
	                                   
                                   
                                </div>
                            </div>

							
						</div>
						<!-- End Topbar -->
					</div>
		
			
           

           
        </div><!--/end container-->


    </div>
    <!--=== End Header ===-->
	
	
	
	
</div>
	<!--===End Top Buttons ===-->
	<!--===Start Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container bgMainMenu" >
        
			 <div class="pull-left" style="margin-bottom: 2px;margin-top: 0px;">
			 
			 
               <ul class="nav navbar-nav">
                  
                    <li >
                        <a class='linkMainMenu ' href="index.php?page=home">
                            <i class="fa fa-home"></i> หน้าแรก
                        </a>
					</li>    
					 
					 <li>
                        <a class='linkMainMenu mainmenuTop' id='1' href="#">
                           <i class="fa fa-cc-amex "></i> ป้ายบิลบอร์ด
                        </a>
					</li>
					<li >
                        <a class='linkMainMenu mainmenuTop' id='2' href="#">
                          <i class="fa  fa-cc "></i> ป้ายแบนเนอร์
                        </a>
					</li> 
					<li>
                        <a class='linkMainMenu mainmenuTop' id='3' href="#">
                           <i class="fa  fa-cube "></i> ป้าย LED
                        </a>
					</li> 
					
					<li>
                        <a class='linkMainMenu mainmenuTop'  id='4' href="#">
                           <i class="fa fa-slideshare "></i> ป้ายคัทเอ้าท์
                        </a>
					</li> 
					
					 <li >
                        <a class='linkMainMenu mainmenuTop' id='9' href="#">
                           <i class="fa fa-building "></i> ป้ายกล่องไฟ
                        </a>
					</li> 
					 <li >
                        <a class='linkMainMenu mainmenuTop' id='10'href="#">
                         <i class="fa fa-cubes "></i> ป้ายสติ๊กเกอร์
                        </a>
					</li> 
					
					 
					
					 <!-- 
					 <li >
                        <a class='linkMainMenu' href="index.php?page=advertise">
                          <i class="fa fa-rss"></i> ติดต่อโฆษณา
                        </a>
					</li> 
					 -->
					<?php 
					if($_SESSION['ses_cus_id']){
				
					?>
				
					<li >
                        <a id="logout" class='linkMainMenu' href="#">
                          <i class="fa fa-rss"></i> ออกจากระบบ
                        </a>
					</li> 
					 <?php 
					 }
					 ?>
                </ul>
            </div>

			
			
			
			<?php 
			if($_SESSION['ses_cus_email']){
			?>
			<!-- 
            <ul class="pull-right breadcrumb">
                <li class="active"><i class="fa fa fa-user"></i>คุณ <?=$_SESSION['ses_cus_first_name']?> กำลังอยู่ในระบบ(
                	<a href="#" id="logout">
                	ออกจากระบบ
                	</a>
                	)</li>
            </ul>
             -->
            <?php }?>
			
        </div>
        
    </div><!--/breadcrumbs-->
   
     <div class="container linkNav" > 
     	<span class='realty_path_home'></span> 
     	<span class='realty_path_type'></span> 
     	<a href="#"><span class='realty_path_name'></span></a> 
     	<?php 
     	switch($_GET['page']){
         
     		case"sitemap":echo("<a href='index.php?page=home'>หน้าแรก</a> / <a href='#'>แผนผังเว็บไซต์ </a>"); break;
     		case"contact":echo("<a href='index.php?page=home'>หน้าแรก</a> / <a href='#'>ติดต่อเรา</a>"); break;
     		case"advertise":echo("<a href='index.php?page=home'>หน้าแรก</a> / <a href='#'>ติดต่อโฆษณาหน้าแรก</a>"); break;
     		case"about":echo("<a href='index.php?page=home'>หน้าแรก</a> / <a href='#'>เกี่ยวกับเรา</a>"); break;
     		case"condition":echo("<a href='index.php?page=home'>หน้าแรก</a> / <a href='#'>งื่อนไข</a>"); break;
     		case"postSaved":echo("<a href='index.php?page=home'>หน้าแรก</a> / <a href='#'>ประกาศที่บันทึกไว้</a>"); break;
     		
     		
     		}
     	
     	?>
     </div>
  
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->


                           <!-- start not show search if get value below.-->
							<?php
								if(($_GET['page']!="sitemap") 
								and ($_GET['page']!="contact")
								and ($_GET['page']!="advertise")
								and ($_GET['page']!="about")
								and ($_GET['page']!="condition")
								//and ($_GET['page']!="register")
								//and ($_GET['page']!="login")
								and ($_GET['page']!="forgot_pass")
								and ($_GET['page']!="post_sub_detail")
								and ($_GET['page']!="profile_post")
								){
								include("main_search.php");
								}
							?>
						   <!-- start not show search if get value below.-->

          

    <div class="container content">		
    	<div class="row blog-page"> 
    	<div class='col-xs-12'>   
            <!-- Left Content -->
        	<div class="col-xs-8">
              <div id="mainContrainArea">

			<?php
				

					switch($_GET['page']){
					case"home":include("home_content.php"); break;
					//case"post_detail":include("post_detail.php"); break;
					case"post_sub_detail":include("post_sub_detail.php"); break;
					case"sitemap":include("sitemap.php"); break;
					case"contact":include("contact.php"); break;
					case"advertise":include("advertise.php"); break;
					case"about":include("about.php"); break;
					case"condition":include("condition.php"); break;
					//case"register":include("register.php"); break;
					//case"login":include("login.php"); break;
					case"forgot_pass":include("forgot_pass.php"); break;
					
					case"postSaved":include("postSaved.php"); break;
					case"showSearch":include("showSearch.php"); break;
					case"profile_post":include("profile_post.php"); break;

					default:include("home_content.php");
					}
					
			?>
			</div>


            </div>
            <!-- End Left Content -->

            <!-- Start Right Content -->
			
			<?php
			
				if($_GET['page']!="contact"){
				include("right_content.php");
				}
			
			?>

			<!-- End Right Content -->
        </div><!--/row-->   
        </div><!-- col-xs-12 -->     
    </div> 
    <!--=== End Content Part ===-->

     
    

    
    
</div><!--/End Wrapepr-->

 <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row rowFooter">
                    <!-- About -->
					<!--
                    <div class="col-xs-3 xs-margin-bottom-40">
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>    
                    </div>
					--><!--/col-xs-3-->
                    <!-- End About -->

                    
                    
                    <!-- Link List -->
                    <div class="col-xs-4 xs-margin-bottom-40">
                        <div class="headline"><h2>เมนูหลัก</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="index.php">หน้าแรก</a><i class="fa fa-angle-right " ></i></li>
                            <li><a href="#">ป้ายบิลบอร์ด</a><i class="fa fa-angle-right mainmenuTop" id='15'></i></li>
                            <li><a href="#">ป้าย LED</a><i class="fa fa-angle-right mainmenuTop" id='39'></i></li>
                            <li><a href="#">ป้าย คัทเอ้าท์</a><i class="fa fa-angle-right mainmenuTop" id='13'></i></li>
                            <li><a href="#">ป้ายกล่องไฟ</a><i class="fa fa-angle-right mainmenuTop" id='4'></i></li>
                            <li><a href="#">ป้ายสติ๊กเกอร์</a><i class="fa fa-angle-right mainmenuTop" id='11'></i></li>

						
                        </ul>
                    </div><!--/col-xs-3-->
					
					<!-- End Link List -->    
					   
                    <!-- End Link List -->    
					  <!-- Link List -->
                    <div class="col-xs-4 xs-margin-bottom-40">
                        <div class="headline"><h2>เกี่ยวกับเรา</h2></div>
                        <ul class="list-unstyled link-list">
                            <li>
                            <a href="#">ศูนย์รวมป้ายโฆษณา ,สื่อสิ่งพิมพ์,สื่อโฆษณา,ป้ายบิลบอร์ด,ป้าย LED,ป้าย คัทเอ้าท์,ป้ายกล่องไฟ,ป้ายสติ๊กเกอร์</a>
                            </li>


                        </ul>
                    </div><!--/col-xs-3-->
                    <!-- End Link List -->    

					<!-- End Link List -->    
					  


				

                    <!-- Address -->
                    <div class="col-xs-4 map-img xs-margin-bottom-40">
                        <div class="headline"><h2>ติดต่อเรา</h2></div>                         
                        <address class="xs-margin-bottom-40">
                       	หมู่บ้านรื่นฤดี 5 ถนนหทัยราษฎร์ 10<br>
						แขวงบางชัน เขต คลองสามวา กรุงเทพ 10510<br>
						เลขประจำตัวผู้เสียภาษี 010355302604<br>
						โทร: +6680-992-6565 <br>
						Email1: <a href="mailto:adsthaidd@hotmail.com" class="">adsthaidd@hotmail.com</a><br>
                        Email2: <a href="mailto:sale@adsthaidd.com" class="">sale@adsthaidd.com</a><br>
                        Chat Control Panel: <a target='_blank' href="https://s2.mylivechat.com/webconsole/" class="">Click</a>
                        
                        </address>
                    </div><!--/col-xs-3-->
                    <!-- End Address -->
                </div>
            </div> 
        </div><!--/footer-->

        <div class="copyright ">
            <div class="container">
                <div class="row rowFooter">
                    <div class="col-xs-6">                     
                        <p>
                            2021 &copy; All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="http://www.adskosana.com">www.adskosana.com</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <!-- 
                    <div class="col-xs-6">
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
                     -->
                    <!-- End Social Links -->
                </div>
            </div> 
        </div><!--/copyright-->
    </div>     
    
    <!--=== End Footer Version 1 ===-->





<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->
<!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->     



<!--  Start Module Login -->
<div aria-labelledby="loginFormModal" role="dialog" tabindex="-1" class="modal fade" id="loginFormModal" style="display: none;">
    <div role="document" class="modal-dialog-login">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 id="gridModalLabel" class="modal-title">เข้าสู่ระบบ</h4>
        </div>
        <div class="modal-body">
        
          	 <!-- from login area start -->
	        <?php  include("login.php");?>
	      	 <!-- from login area end --> 
	        
        </div>
        <!-- 
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>
         -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!--  End Module Login -->
  
  <!--  Start Module Register -->
<div aria-labelledby="registerFormModal" role="dialog" tabindex="-1" class="modal fade" id="registerFormModal" style="display: none;">
    <div role="document" class="modal-dialog-register">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 id="gridModalLabel" class="modal-title">สมัครสมาชิก<font color='red'><b>ฟรี</b></font></h4>
        </div>
        <div class="modal-body">
        
          	 <!-- from login area start -->
	        <?php  include("register.php");?>
	      	 <!-- from login area end --> 
	        
        </div>
        <!-- 
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>
         -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!--  End Module Register -->
  
  
  <!--  Start Module Register -->
<div aria-labelledby="sendToMyFriendsFormModal" role="dialog" tabindex="-1" class="modal fade" id="sendToMyFriendsFormModal" style="display: none;">
    <div role="document" class="modal-dialog-register">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 id="gridModalLabel" class="modal-title">ส่งประกาศนี้ให้เพื่อน</h4>
        </div>
        <div class="modal-body">
        
          	 <!-- from send mail to my friends area start -->
	       			<?php  include("form_send_friend.php");?>
	      	 <!-- from send mail to my friends area end --> 
	        
        </div>
        <!-- 
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>
         -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!--  End Module Register -->

  <!--chat start-->
  
  <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=71502250"></script>
  
</body>
</html>	






