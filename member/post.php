 <?php session_start();?>
 <!-- Tabs -->

    
 <script src="../Controller/cPost.js"></script>
 
 
 <?php 

    if($_GET['loginType']=="loginForManage" ){
    	?>
    	<script>
		$(document).ready(function(){
		 
		 postFn("loginForManage");
		});
 		</script>
    	<?php
    }else{
    	?>
    	<script>
		$(document).ready(function(){
		 postFn("<?=$_SESSION['sesLoginType']?>");
		});
		 </script>
		 
    	<?php
    }
    ?>

 <link rel="stylesheet" href="../assets/css/post.css">
 
  <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAHeFJa2RjWISo7BNSHF4FomY4bcPXlhtY"  type="text/javascript"></script> 
 <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
 <!-- <div class="tag-box tag-box-v2 box-shadow shadow-effect-2"> -->
 <div class=" box-shadow shadow-effect-21">
	


			
                <div class="tab-v1">
                    <ul class="nav nav-tabs">
                       
                        <li ><a href="#currentPost" data-toggle="tab">ประกาศปัจจุบัน</a></li>
                        <li><a href="#nonePost" data-toggle="tab">ประกาศที่ไม่แสดง</a></li>
						<!-- <li><a href="#expirePost" data-toggle="tab">ประกาศหมดอายุ</a></li> -->
						<li class=""><a href="#memberNewPost" data-toggle="tab">ลงประกาศใหม่</a></li>
							
						
						<!-- 
						<li class=""><a href="#newPostContructor" data-toggle="tab">Constractor</a></li>
						<li class="active"><a href="#newPost" data-toggle="tab">ลงประกาศใหม่</a></li>
						 -->
                    </ul>                
                    <div class="tab-content">
                        <!-- Start newPost -->
                        <div class="tab-pane fade in active " id="newPost">	  
								<!-- newPost-->
								<!-- Start Tabs-->
								<div id="newPostForm"  class="postRealty"></div>
								<!-- End Tabs-->

                        </div>
                        <!-- End newPost -->
                        <!-- Start newPost member -->
                        <div class="tab-pane fade in " id="memberNewPost">	  
								<!-- newPost-->
								<!-- Start Tabs-->
								<div id="postForm-memberNewPost" class="postRealty">Test</div>
								<!-- End Tabs-->
                        </div>
                        <!-- End newPost member -->
                        
                          <!-- Start newPost Constructor -->
                        <div class="tab-pane fade in " id="newPostContructor">	  
								<!-- newPost-->
								<!-- Start Tabs-->
								<div id="postForm-newPostContructor"  class="postRealty">Test2</div>
								<!-- End Tabs-->
                        </div>
                        <!-- End newPost Constructor -->
                        
						 <!-- newPost-->
                        <div class="tab-pane fade in " id="currentPost">
                            <!-- Content1-->   	
							<!-- รายการประกาศปัจจุบัน -->
							
							<div class="col-md-12">
								<div class="panel panel-sea margin-bottom-40">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-edit"></i> รายการประกาศปัจจุบัน</h3>
									</div>
									
									<div id="currentPostArea"></div>

								</div> 
								                
							</div>
							
							
							<div id="postForm-currentPostArea" class="postRealty"></div> 
							<!-- รายการประกาศปัจจุบัน -->

                        </div>
                        <!-- End newPost -->
						 <!-- newPost-->
                        <div class="tab-pane fade in " id="nonePost">
                            <!-- Content1-->   	    
							<!-- รายการประกาศที่ไม่แสดง -->
							<div class="col-md-12">
									<div class="panel panel-sea margin-bottom-40">
										<div class="panel-heading">
											<h3 class="panel-title"><i class="fa fa-edit"></i> รายการประกาศที่ไม่แสดง</h3>
										</div>
										
										<div id="nonePostArea"></div>
										<!-- 
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#รหัส</th>
													<th>รายการ</th>
													<th>ราคา</th>
													<th>วันที่หมดอายุ</th>
													<th>สถานะ</th>
													<th>จัดการ</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2013721</td>
													<td>เช่าบ้าน</td>
													<td>7,000</td>
													<td>10/09/58</td>
													<td>ไม่แสดง</td>
													<td>
													<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> ลบ </button>
													<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> แก้ไข</button>
													<button class="btn btn-success btn-xs"><i class="fa fa-share"></i> แสดง</button>
													
													</td>
												</tr>
												<tr>
													<td>2013722</td>
													<td>เช่าบ้าน</td>
													<td>8,000</td>
													<td>10/09/58</td>
													<td>ไม่แสดง</td>
													<td>
													<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> ลบ </button>
													<button class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> แก้ไข</button>
													<button class="btn btn-success btn-xs"><i class="fa fa-share"></i> แสดง</button>
													
													</td>
												</tr>
												
											</tbody>
										</table>
										 -->
									</div>                  
								</div>
								<div id="postForm-nonePostArea" class="postRealty"></div> 
							<!-- รายการประกาศปัจจุบัน -->

                        </div>
                        <!-- End newPost -->
						 <!-- newPost-->
                        <div class="tab-pane fade in " id="expirePost">
                            <!-- Content1-->   	   
							<!-- รายการประกาศที่หมดอายุ -->
							<div class="col-md-12">
									<div class="panel panel-sea margin-bottom-40">
										<div class="panel-heading">
											<h3 class="panel-title"><i class="fa fa-edit"></i> รายการประกาศที่หมดอายุ</h3>
										</div>
										
										<div id="expirePostArea"></div>
										
									</div>                  
								</div>
								<div id="postForm-expirePostArea" class="postRealty"></div> 
							<!-- รายการประกาศที่หมดอายุ -->

                        </div>
                        <!-- End newPost -->
						</div>
					</div>
					 <!-- Tabs End -->
	<br style="clear:both">
</div>



				
          
