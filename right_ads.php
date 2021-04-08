<div class="row">

<div class="magazine-posts-img">
    <?php 
    $rsBanner1=mysqli_fetch_array($resultBanner1);
    if($rsBanner1['pic_link']!=""){
      ?>
      <a target="_blank" href="<?=$rsBanner1['pic_link']?>">
      <?php
    }
    ?>
     <img  class="img-thumbnail" src="control-panel/mypicture/1/<?=$rsBanner1['pic_name']?>" width="100%" height="100%" />
  
     <?php
    if($rsBanner1['pic_link']!=""){
      ?>
      </a>
      <?php
    }
    ?>                       
</div>

<div class="magazine-posts-img">
   <?php 
    $rsBanner2=mysqli_fetch_array($resultBanner2);
    if($rsBanner2['pic_link']!=""){
      ?>
      <a target="_blank" href="<?=$rsBanner2['pic_link']?>">
      <?php
    }
    ?>
     <img  class="img-thumbnail" src="control-panel/mypicture/1/<?=$rsBanner2['pic_name']?>" width="100%" height="100%" />
     <?php
    if($rsBanner2['pic_link']!=""){
      ?>
      </a>
      <?php
    }
    ?>                              
</div>
<div class="magazine-posts-img">
    <?php 
    $rsBanner3=mysqli_fetch_array($resultBanner3);
    if($rsBanner3['pic_link']!=""){
      ?>
      <a target="_blank" href="<?=$rsBanner3['pic_link']?>">
      <?php
    }
    ?>
     <img  class="img-thumbnail" src="control-panel/mypicture/1/<?=$rsBanner3['pic_name']?>" width="100%" height="100%" />
    
     <?php
    if($rsBanner3['pic_link']!=""){
      ?>
      </a>
      <?php
    }
    ?>                             
</div>

<div class="magazine-posts-img" style='padding-bottom:5px;'>
    <?php 
    $rsBanner4=mysqli_fetch_array($resultBanner4);
    if($rsBanner4['pic_link']!=""){
      ?>
      <a target="_blank" href="<?=$rsBanner4['pic_link']?>">
      <?php
    }
    ?>
     <img  class="img-thumbnail" src="control-panel/mypicture/1/<?=$rsBanner4['pic_name']?>" width="100%" height="100%" />
     <?php
    if($rsBanner4['pic_link']!=""){
      ?>
      </a>
      <?php
    }
    ?>
                                    
</div>

</div> 
