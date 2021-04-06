<?php session_start();
include("../config.inc.php");
 /*
contact_id
contact_fullname
contact_title
contact_detail
contact_address
contact_tel
contact_email
contact_date
admin_id
admin_id

  */
 $rdg_id=$_POST['rdg_id'];
 
 $strSQL="select c.* from realty_data_general rdg
left JOIN contact c 
ON c.admin_id=rdg.cus_id
where rdg.rdg_id = '$rdg_id' order by c.contact_id desc";
 $result=mysql_query($strSQL);
 
 ?>
<div class="carousel slide testimonials testimonials-v2 testimonials-bg-default" id="testimonials-9">
                            <div class="carousel-inner">
                             <!--  grid special start here -->
					        <table class="gridComment">
								 <colgroup>
									<col />
								 </colgroup>
								 <thead>
								 <tr>
									<th data-field="make">	</th>
								 </tr>
								 </thead>
								 <tbody>
			                              <?php 
			                              while($rs=mysql_fetch_array($result)){
			                              	?>
			                              	<tr>
						                		<td>
							                		<!--start  post  -->
					                              	 <div class="item active">
					                                    <p>
					                                   <?=$rs['contact_title']?><br>
					                                    <?=$rs['contact_detail']?>
					                                    </p>
					                                    <div class="testimonial-info">
					                                    <img alt="" src="assets/img/testimonials/user.jpg" class="rounded-x">
					                                        <span class="testimonial-author">
					                                            <?=$rs['contact_fullname']?>
					                                            <em>สอบถามวันที่ <?=$rs['contact_date']?></em>
					                                        </span>
					                                    </div>
					                                </div>
					                                
				                                <hr>
				                                <br style='clip: both'>
			                                </td>
			                               </tr>
			                              	<?php
			                              }
			                              ?>
                               </tbody>
                               </table>
                               
                               
                                
                               
                            </div>
</div>