<div class="shadow-wrapper">
											
    <?php 
    $strSLQBanner6="select * from banner_sum where pic_position='6'";
    $resultBanner6=mysqli_query($conn,$strSLQBanner6);
    $rsBanner6=mysqli_fetch_array($resultBanner6);
    ?>
        <img class='img-thumbnail' src="control-panel/mypicture/1/<?=$rsBanner6['pic_name']?>" width="100%" height="100%" />

</div>