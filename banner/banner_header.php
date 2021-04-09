<div id="adHeader" style=" background:#dddddd; margin-top:2px; margin-bottom:2px; height:88px;" class="col-xs-10 ">
				
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