<style>
#dev_bg{
	color:#666; background:#efefef; font-weight:bold; border:#dedede solid 1px;
	padding:5px; font-size:13px;
}
</style>


<?php 
//Admin
	if($_SESSION['admin_name']=='admin' ){
		
?>
	
<?
}else{	
?>
	 
<?
}
?>


<?php 
	//E-Shopping 
	if($role_id==1 or $_SESSION['admin_name']=='admin'){
	
?>
	
<?
}else{	
?>
	 
<?
}
?>
<?php 
//E-Horoscope 
	if($role_id==2 or $_SESSION['admin_name']=='admin'){
		
?>
	
<?
}else{	
?>
	 
<?
}
?>
<?php 
// 	E-Travel/Tour 
	if($role_id==3 or $_SESSION['admin_name']=='admin' ){
		
?>
	
<?
}else{	
?>
	 
<?
}
?>
<?php 
//E-MLM 
	if($role_id==4 or $_SESSION['admin_name']=='admin' ){
		
?>
	
<?
}else{	
?>
	 
<?
}
?>
<?php 
//E-Reservation Hotel  
	if($role_id==5 or $_SESSION['admin_name']=='admin'){
		
?>
	
<?
}else{	
?>
	 
<?
}
?>
<?php 
//E-Tv/Radio online 
	if($role_id==6 or $_SESSION['admin_name']=='admin' ){
		
?>
	
<?
}else{	
?>
	 
<?
}
?>




<div id="dev_bg">
จัดการข้อมูลหลังร้าน
</div>
<table>

	<tr>
    	<td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=home">
        <img src="../images_system/Contacts.png" border=0>
		</a>
        </div>
       
      </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=article_system">
        <img src="../images_system/Mail_alt.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=contact">
        <img src="../images_system/iFile.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=about">
        <img src="../images_system/Macristocracy.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
<?php 
	//Admin 
	if($_SESSION['admin_name']=='admin' ){
	
?>
		<a href ="index.php?page=style_system">
        <img src="../images_system/Maps_alt.png" border=0>
		</a>
<?
}else{	
?>
		
        <img src="../images_system/Maps_alt.png" border=0>
		
<?
}
?>

	
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">

<?php 
// 	E-Travel/Tour 
	if($role_id==3 or $_SESSION['admin_name']=='admin' ){
?>
		<a href ="index.php?page=tour">
        <img src="../images_system/Phone.png" border=0>
		</a>
<?
}else{	
?>
	    
        <img src="../images_system/Phone.png" border=0>
		
<?
}
?>


        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
<?php 
// 	E-Reservation Hotel 
if($role_id==5 or $_SESSION['admin_name']=='admin'){	
?>
	<a href ="index.php?page=hotel_system">
        <img src="../images_system/Calendar.png" border=0>
		</a>
<?
}else{	
?>
	
        <img src="../images_system/Calendar.png" border=0>
		
<?
}
?>
		
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=menu_system">
        <img src="../images_system/Phone.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<?php 
	//Admin 
	if($_SESSION['admin_name']=='admin' ){
	
?>
	<a href ="index.php?page=web_directory">
        <img src="../images_system/Calendar.png" border=0>
		</a>
<?
}else{	
?>
	
        <img src="../images_system/Calendar.png" border=0>
	
<?
}
?>
		
        </div>
        </td>
    </tr>
  
    <tr>
    	<td>
        <center>
        หน้าแรก
        </center>
        </td>
        <td>
        <center>
        
        บทความ
        </center>
        </td>
        <td>
        <center>
       ติดต่อเรา 
       </center>
        </td>
        <td>
        <center>
        เกี่ยวกับเรา
        </center>
        </td>
        <td>
        <center>
        รูปแบบการแสดงผล
        </center>
        </td>
        <td>
        <center>
        ระบบทัวร์
        </center>
        </td>
        <td>
        <center>
        ระบบโรงแรม
        </center>
        </td>
        <td>
        <center>
        จัดการเมนู
        </center>
        </td>
        <td>
        <center>
        บัญชีเว็บไซต์
        </center>
        </td>
    </tr>
    <tr>
    	<td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=vdo_system">
        <img src="../images_system/Remote.png" border=0>
		</a>
        </div>
      </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=seo_system">
        <img src="../images_system/Things.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=member_system">
        <img src="../images_system/BeejiveIM_alt2.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
				<?php 
	//E-Shopping  
	if($role_id==1 or $_SESSION['admin_name']=='admin'){
	
?>
<a href ="index.php?page=ecommerce_system">
        <img src="../images_system/Cydia.png" border=0>
		</a>
<?
}else{	
?>
	
   
        <img src="../images_system/Cydia.png" border=0>
		
	
<?
}
?>
		
	
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=webbord">
        <img  src="../images_system/1285599217_Notes_alt.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
				<?php 
	//E-Horoscope  
	if($role_id==2 or $_SESSION['admin_name']=='admin'){
	
?>
	<a href ="index.php?page=horoscope">
        <img src="../images_system/Safari.png" border=0>
		</a>
<?
}else{	
?>
	
  
        <img src="../images_system/Safari.png" border=0>
		
	
<?
}
?>
		
		
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=#">
        <img src="../images_system/YouTube.png" border=0>
		</a>
        </div>
        </td>
         <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=Knowledge">
        <img src="../images_system/Safari.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
				<?php 
	//E-Travel/Tour  
	if($role_id==3 or $_SESSION['admin_name']=='admin' ){
	
?>
	<a href ="index.php?page=tour">
        <img src="../images_system/YouTube.png" border=0>
		</a>
<?
}else{	
?>

        <img src="../images_system/YouTube.png" border=0>

	
<?
}
?>
	
        </div>
        </td>
    </tr>
    <tr>
    	<td>
        <center>
        วีดีโอ
        </center>
        </td>
        <td>
        <center>
        SEO
        </center>
        </td>
        <td>
        <center>
      	สมาชิก
        </center>
        </td>
        <td>
        <center>
        สินค้า
        </center>
        </td>
        <td>
        <center>
        เว็บบอร์ด
        </center>
        </td>
        <td>
        <center>
        ระบบดูดวง
        </center>
        </td>
        <td>
        <center>
        ทีวีออนไลน์
        </center>
        </td>
        <td>
        <center>
        คลังความรู้
        </center>
        </td>
        <td>
        <center>
        ทัวร์ท่องเทียว
        </center>
        </td>
    </tr>
    <tr>
    	<td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=banner">
        <img src="../images_system/App_Store.png" border=0>
		</a>
        </div>
      </td>
        <td>
        <div id="devtext" style="padding:10px;">
	<?php 
	//Admin 
	if($_SESSION['admin_name']=='admin' ){
	
?>
	<a href ="index.php?page=admin">
        <img src="../images_system/Maps.png" border=0>
		</a>
<?
}else{	
?>

     
        <img src="../images_system/Maps.png" border=0>
	
	
<?
}
?>
		
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=picturecat">
        <img src="../images_system/Photos.png" border=0>
		</a>
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
						<?php 
	// 	E-MLM 
	if($role_id==4 or $_SESSION['admin_name']=='admin' ){
	
?>
	<a href ="index.php?page=mlm_system">
        <img src="../images_system/Settings.png" border=0>
		</a>
<?
}else{	
?>

    
        <img src="../images_system/Settings.png" border=0>
	
	
<?
}
?>
		
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=#">
        <img src="../images_system/iTunes.png" border=0>
		</a>
        </div>
        </td>
       <td>
        <div id="devtext" style="padding:10px;">
						<?php 
	//Admin  
	if($_SESSION['admin_name']=='admin' ){
	
?>
<a href ="index.php?page=news_system">
        <img src="../images_system/Settings.png" border=0>
		</a>
<?
}else{	
?>

    
        <img src="../images_system/Settings.png" border=0>
	

	
<?
}
?>
		
        </div>
        </td>
        <td>
        <div id="devtext" style="padding:10px;">
		<a href ="index.php?page=job_system">
        <img src="../images_system/iTunes.png" border=0>
		</a>
        </div>
        </td>
    </tr>
    <tr>
    	<td>
        <center>
        แบนเนอร์
        </center>
        </td>
        <td>
        <center>
        ผู้ดูแลระบบ
        </center>
        </td>
        
        <td>
        <center>
        รูปภาพ
        </center>
        </td>
        <td>
        <center>
        ระบบเครือข่าย
        </center>
        </td>
        <td>
        <center>
        วิทยุออนไลน์
        </center>
        </td>
        <td>
        <center>
        ระบบข่าวสาร(rss)
        </center>
        </td>
        <td>
        <center>
        ร่วมงานกับเรา
        </center>
        </td>
       
    </tr>
</table>