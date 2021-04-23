<?php session_start();
$ses_cus_id=$_SESSION['ses_cus_id'];



include("../config.inc.php");

$rdg_id=$_POST['rdg_id'];
$idArea=$_POST['idArea'];
$status=$_POST['status'];


if($_POST['paramAction']=="showCurrentPost"){
	//echo "ses_cus_id=".$ses_cus_id;
	$strSQL="
	select *
	from realty_data_general rdg
	INNER JOIN realty_type rt
	ON rdg.rt_id=rt.rt_id
	where cus_id='$ses_cus_id' and rdg_status='$status' order by rdg_id 
";
	$result=mysqli_query($conn,$strSQL);
	?>
	<table id="gridCurentPost<?=$idArea?>">
                <colgroup>
                	<col style="width:50px" />
                	<col style="width:100px" />
                    <col style="width:350px" />
                    <!-- <col /> -->
                    <col style="width:150px" />
                    <!-- <col style="width:120px" />
                    <col style="width:100px" />
                    <col style="width:200px" /> -->
                </colgroup>
                <thead>
                    <tr>
                        <th data-field="fileld1"><b>#รหัส</b></th>
                        <th data-field="fileld2"><b>หมวด</b></th>
                        <th data-field="fileld3"><b>รายการ</b></th>
                        <!-- <th data-field="fileld4">ราคา</th> -->
                        <!-- <th data-field="fileld5"><b>วันที่ประกาศ</b></th>
                        <th data-field="fileld6"><b>สถานะประกาศ</b></th>
                        <th data-field="fileld7"><b>ประเภท</b></th> -->
                        <th data-field="fileld8"><b>จัดการ</b></th>
                       
                    </tr>
                </thead>
                <tbody >
	<?php
	while($rs=mysqli_fetch_array($result)){
		?>
		<tr>
			<td>#<?=$rs['rdg_id']?></td>
			<td><?=$rs['rt_name']?></td>
			<td>
			
			<?php 
			if(strlen($rs['rdg_title'])>50){
				$text=mb_substr($rs['rdg_title'],0,50,"UTF-8")."...";
				echo"$text"."";
			}else{
			
			echo $rs['rdg_title'];
			}
			echo "<div><b>วันที่ประกาศ</b>: ".$rs['rdg_create']."</div>";

			echo"<div><b>สถานะ</b>: ";
				if($rs['rdg_status_post']=="N"){
				echo "<font color='green'>ยังไม่ขาย/เช่า</font>";
				}else if($rs['rdg_status_post']=="soldOut"){
					echo "<font color='red'>ขายแล้ว</font>";
				}else if($rs['rdg_status_post']=="rented"){
					echo "<font color='red'>เช่าแล้ว</font>";
				}else{
					echo "<font color='green'>ยังไม่ขาย/เช่า</font>";
				}
			echo"</div>";
			echo"<div><b>ประเภท</b>: ";
			if($rs['rdg_special']=="Y"){
				echo"<font color='green'>ประกาศพิเศษ</font>";
			}ELSE{
				echo"ประกาศฟรี";
			}
			echo"</div>";

			?>
			</td>
			
			<td>
			<button class="btn btn-danger  btnDelPost<?=$idArea?>" id='delPostId-<?=$rs['rdg_id']?>'><i class="fa fa-trash-o"></i> ลบ </button>
			<button class="btn btn-warning  btnEditPost<?=$idArea?>" id='editPostId-<?=$rs['rdg_id']?>'><i class="fa fa-pencil"></i> แก้ไข</button>
			<?php 
			if($status=="Y"){
				?>
				<button class="btn btn-danger  btnDisablePost<?=$idArea?>" id='disablePostId-<?=$rs['rdg_id']?>'><i class="fa fa-share"></i> ไม่แสดง</button>
				<?php
			}else{
				?>
				<button class="btn btn-success  btnAblePost<?=$idArea?>" id='ablePostId-<?=$rs['rdg_id']?>'><i class="fa fa-share"></i> แสดง</button>
				<?php
			}
			?>
			
			</td>
		</tr>						
		<?php
	}
?>
	     
                </tbody>
            </table>
<?php 
}
function delePictureFn($rdg_id,$ri_id){
	//echo $rdg_id."-".$ri_id;
	$path_thumbnail="../realtyPicture/".$rdg_id."/".$ri_id."/thumbnail";
	$path_big_picture="../realtyPicture/".$rdg_id."/".$ri_id."";
	
	
	if($handle=@opendir($path_thumbnail)){
		$imagesFile=array();
		while(false!==($file=readdir($handle))){
			if($file !="." && $file !=".."){
				$thumbnailsFile=$path_thumbnail."/".$file;
				$big_picture_File=$path_big_picture."/".$file;
				unlink("$thumbnailsFile");
				unlink("$big_picture_File");
			}
	
		}
		closedir($handle);//ต้องปิดทุกครั้งไม่งั้นลบfolderไม่ได้
	}

	if(is_dir($path_thumbnail)){
		rmdir("$path_thumbnail");
	}
	if(is_dir($path_big_picture)){
		rmdir("$path_big_picture");
	}
	
}

if($_POST['paramAction']=="disableOrAblePost"){
		$strSQL="update realty_data_general set rdg_status='$status'  where rdg_id='$rdg_id'";
		$result=mysqli_query($conn,$strSQL);
		if($result){
			echo'["success"]';
		}
		
}

if($_POST['paramAction']=="delCurrentPost"){


	$strSQLChecked="
	select * from realty_detail where rdg_id='$rdg_id'
	";
	$resultChecked=mysqli_query($conn,$strSQLChecked);
	$rsChecked=mysqli_num_rows($resultChecked);
	
	//if($rsChecked>0){



		$sqlSelectRI="select * from realty_images where rdg_id='$rdg_id'";
		$resultRI=mysqli_query($conn,$sqlSelectRI);
		if($resultRI){
			while($rsRI=mysqli_fetch_array($resultRI)){
				delePictureFn($rdg_id,$rsRI['ri_id']);
			};
			
		//}
		
		
		
		$sqlRealtyImages="delete from realty_images where rdg_id='$rdg_id'";
		$sqlRealtyEmbedVideo="delete from realty_embed_video rdg_id='$rdg_id'";
		$sqlRealtyDetailRoom="delete from realty_detail_room rdg_id='$rdg_id'";
		
		$resultDelRealtyImages=mysqli_query($conn,$sqlRealtyImages);
		$resultDelRealtyEmbedVideo=mysqli_query($conn,$sqlRealtyEmbedVideo);
		$resultDelRealtyDetailRoom=mysqli_query($conn,$sqlRealtyDetailRoom);
		
		if($resultDelRealtyImages || $resultDelRealtyEmbedVideo || $resultDelRealtyDetailRoom){
			//start delete floder
			//echo"delete is ok";
			$path_main_picture="../realtyPicture/".$rdg_id."";
			if(is_dir($path_main_picture)){
				@rmdir("$path_main_picture");
			}
			//end delete floder
			echo '["success"]';
		}
	
	}
	
	$strSQL="
	delete from realty_data_general where rdg_id='$rdg_id'
	";
	$result=mysqli_query($conn,$strSQL);
	
}
?>