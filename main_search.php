

        <div class="container" style="margin-top:1px;">
        	<div class='row'>
                    <div class="col-xs-12 shadow-wrapper">
                        <div class="tag-box tag-box-v2 box-shadow shadow-effect-1 bgSearch">
                            
                           
 <!-- search start here-->
                                <div class="col-xs-8" style="padding-right:5px;">
            
                                    <!-- tab1-->
                                   <div class="tab-v1" >
                                            <ul class="nav nav-tabs">
                                                 <!--
                                                <li class="active"><a data-toggle="tab" href="#seachSalesRealty"> 
												<i class="fa fa-search-plus"></i> เธ�เน�เธ�เธซเธฒเธ�เธฃเธฐเธ�เธฒเธจเธ�เธฒเธขเธ�เธฃเธต</a></li>
                                               <li class=""><a data-toggle="tab" href="#searchSalesContractor">เธ�เน�เธ�เธซเธฒเธ�เธฃเธฐเธ�เธฒเธจเธ�เธฒเธขเธชเธณเธซเธฃเธฑเธ�เธ�เธนเน�เธซเธฃเธฑเธ�เน€เธซเธกเธฒ</a></li>-->
                                            </ul>                
                                            <div class="tab-content">
                                            <!-- seachSalesRealty-->
                                                <div id="seachSalesRealty" class="tab-pane fade in active" >
                                                    <div class="row" >


                                                        <?php

                                                        include("searchForSalesRealty.php");
                                                        ?>

                                                       


                                                    </div>
                                                </div>

                                                <!-- seachSalesRealty-->
                                                <!-- searchSalesContractor-->
                                                   <div id="searchSalesContractor" class="tab-pane fade in ">
                                                        <div class="row">



                                                            <?php
                                                            include("searchForSalesContractor.php");
                                                            ?>


                                                    </div>
                                                   </div>
                                                  <!-- searchSalesContractor-->


                                                
                                            </div>
                                        </div>
                                    <!-- tab1-->


                                   </div>
                                   <div class="col-xs-4" style="padding-left:5px;">
                                   <!-- tab1-->
                                   <div class="tab-v1">
                                            <ul class="nav nav-tabs">
                                                <!--
                                                <li class="active"><a data-toggle="tab" href="#seachRentRealty">
												<i class="fa fa-search-plus"></i>
												เธ�เน�เธ�เธซเธฒเธ�เธฃเธฐเธ�เธฒเธจเน€เธ�เน�เธฒเธ�เธฃเธต</a></li>
												
                                                 <li class=""><a data-toggle="tab" href="#searchRentContractor">เธ�เน�เธ�เธซเธฒเธ�เธฃเธฐเธ�เธฒเธจเน€เธ�เน�เธฒเธชเธณเธซเธฃเธฑเธ�เธ�เธนเน�เธซเธฃเธฑเธ�เน€เธซเธกเธฒ</a></li>
												 -->
                                            </ul>                
                                            <div class="tab-content">
                                            <!-- seachSalesRealty-->
                                                <div id="seachRentRealty" class="tab-pane fade in active">
                                                    <div class="row">
                                                    <div class='col-xs-12'>
                                                    <?php 
                                                    if($conn){
                                                    $strSLQBanner52="select * from banner_sum where pic_position='5'";
                                                    $resultBanner52=mysqli_query($conn,$strSLQBanner52);
                                                    $rsBanner52=mysqli_fetch_array($resultBanner52);
                                                    }

                                                    if($rsBanner7['pic_link']!=""){
                                                      ?>
                                                      <a target="_blank" href="<?=$rsBanner52['pic_link']?>">
                                                      <?php
                                                    }
                                                    ?>
                                                    <img src="control-panel/mypicture/1/<?=$rsBanner52['pic_name']?>" width="100%" height="170" />
                                                    <?php
                                                    if($rsBanner52['pic_link']!=""){
                                                      ?>
                                                      </a>
                                                      <?php
                                                    }
                                                    ?>
                           	
                                                    </div>
													
                                                       

                                                       


                                                    </div>
                                                </div>

                                                <!-- seachSalesRealty-->
                                                <!-- searchSalesContractor-->
                                                   <div id="searchRentContractor" class="tab-pane fade in ">
                                                        <div class="row">



                                                            <?php
                                                            include("searchForRentContractor.php");
                                                            ?>


                                                    </div>
                                                   </div>
                                                  <!-- searchSalesContractor-->


                                                
                                            </div>
                                        </div>
                                    <!-- tab1-->
                                   </div>
                                   <br style="clear:both">
                            <!-- search end here -->



                        </div>
                    </div>
                    
        </div>