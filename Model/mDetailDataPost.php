
<?php 
error_reporting (E_ALL ^ E_NOTICE);
include("../config.inc.php");
$dataRDCID=$_POST['dataRDCID'];
$dataRDIID=$_POST['dataRDIID'];
$dataRDFID=$_POST['dataRDFID'];
$dataRDNPID=$_POST['dataRDNPID'];


if($_POST['paramAction']=="realtyDetailRoom"){

	$strSQL="select rdr_id,rdr_detail,rdr_unit from realty_detail_room order by rdr_id";
	$result=mysqli_query($conn,$strSQL);
	$json="";
	$i=0;
	while ($rs=mysqli_fetch_array($result)){
		?>
		 		<div class="form-group">
					<label  class="col-lg-3 control-label"> <?=$rs['rdr_detail']?></label>
				
						<div class="col-lg-2">
						<select class="realtyRoom" id="realtyRoom-<?=$rs['rdr_id']?>" name="realtyRoom">
							<option value="">-- เลือก --</option>
							<?php 
								for($i=1;$i<=300;$i++){
									?>
									<option value="<?=$rs['rdr_id']?>-<?=$i?>"><?=$i?> <?=$rs['rdr_unit']?> </option>
									<?php
								}
							?>
						</select>
					</div>
				</div>
		<?php
		
	}
	
}
if($_POST['paramAction']=="realtyDetailCharacteristic"){
	/*
	for($i=0;$i<count($dataRDCID);$i++){
	echo $dataRDCID[$i][0]."</br>";
	}
	*/
	$strSQL="select rdc_id,rdc_detail from  realty_detail_characteristic order by rdc_id";
	$result=mysqli_query($conn,$strSQL);
	$rdc_id2="";

	while ($rs=mysqli_fetch_array($result)){
	


		if (is_array($dataRDCID) && count($dataRDCID)){

		

			for($i=0;$i<count($dataRDCID);$i++){
				if($dataRDCID[$i][0]==$rs['rdc_id']){
				 $rdc_id2=$rs['rdc_id'];
				}
			}//for	
		}
		if($rdc_id2==$rs['rdc_id'])	{
		?>
		
 		<div class=" col-lg-3">
			<div class="checkbox">
				<label>
					<input type="checkbox" checked='checked'  class="characteristic" name="characteristic"  value="<?=$rs['rdc_id']?>" ><?=$rs['rdc_detail']?> 
				</label>
			</div>
		</div>
		<?php
		}else{
			?>
	 		<div class=" col-lg-3">
				<div class="checkbox">
					<label>
						<input type="checkbox"  class="characteristic" name="characteristic"  value="<?=$rs['rdc_id']?>" ><?=$rs['rdc_detail']?> 
					</label>
				</div>
			</div>
			<?php
		}
		
	}//while
	
	
}

if($_POST['paramAction']=="realtyDetailInterior"){

	$strSQL="select rdi_id,rdi_detail from  realty_detail_interior  order by rdi_id";
	$result=mysqli_query($conn,$strSQL);
	$rdi_id2="";
	while ($rs=mysqli_fetch_array($result)){
		for($i=0;$i<count($dataRDIID);$i++){
			if($dataRDIID[$i][0]==$rs['rdi_id']){
				$rdi_id2=$rs['rdi_id'];
			}
		}//for
		if($rdi_id2==$rs['rdi_id'])	{
		
		?>
		
		 		<div class=" col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" checked='checked' class="interior" name="interior"  value="<?=$rs['rdi_id']?>" ><?=$rs['rdi_detail']?> 
						</label>
					</div>
				</div>
		<?php
		
		}else{
		?>
		 		<div class=" col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" class="interior" name="interior"  value="<?=$rs['rdi_id']?>" ><?=$rs['rdi_detail']?> 
						</label>
					</div>
				</div>
		<?php
		}
		
		
	}
	
}
if($_POST['paramAction']=="realtyDetailFacility"){

	$strSQL="SELECT rdf_id,rdf_detail FROM realty_detail_facility order by rdf_id";
	$result=mysqli_query($conn,$strSQL);
	$rdf_id="";
	while ($rs=mysqli_fetch_array($result)){
		for($i=0;$i<count($dataRDFID);$i++){
			if($dataRDFID[$i][0]==$rs['rdf_id']){
				$rdf_id=$rs['rdf_id'];
			}
		}//for
		if($rdf_id==$rs['rdf_id'])	{
		?>
		 		<div class=" col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" checked='checked' class="facility"  name="facility"  value="<?=$rs['rdf_id']?>" ><?=$rs['rdf_detail']?> 
						</label>
					</div>
				</div>
		<?php
		}else{
		?>
		 		<div class=" col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" class="facility"  name="facility"  value="<?=$rs['rdf_id']?>" ><?=$rs['rdf_detail']?> 
						</label>
					</div>
				</div>
		<?php
		}
		
	}
	
}
if($_POST['paramAction']=="realtyDetailNearPlace"){

	$strSQL="select rdnp_id,rdnp_detail from realty_detail_near_place order by rdnp_id";
	$result=mysqli_query($conn,$strSQL);
	$rdnp_id="";
	while ($rs=mysqli_fetch_array($result)){
		for($i=0;$i<count($dataRDNPID);$i++){
			if($dataRDNPID[$i][0]==$rs['rdnp_id']){
				$rdnp_id=$rs['rdnp_id'];
			}
		}//for
		if($rdnp_id==$rs['rdnp_id'])	{
		?>
		 		<div class=" col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" checked='checked' class="nearPlace" name="nearPlace"  value="<?=$rs['rdnp_id']?>" ><?=$rs['rdnp_detail']?> 
						</label>
					</div>
				</div>
		<?php
		}else{
		?>
		 		<div class=" col-lg-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" class="nearPlace" name="nearPlace"  value="<?=$rs['rdnp_id']?>" ><?=$rs['rdnp_detail']?> 
						</label>
					</div>
				</div>
		<?php
		}	
	}
}
if($_POST['paramAction']=="realtySentData"){


//$rdg_id=14;
$rdg_id=$_POST['rdg_id'];
$paramCharacteristic=$_POST['paramCharacteristic'];
$paramInterior=$_POST['paramInterior'];
$paramFacility=$_POST['paramFacility'];
$paramNearPlace=$_POST['paramNearPlace'];

$paramCharacteristicArray =explode("&",$paramCharacteristic);
$paramInteriorArray =explode("&",$paramInterior);
$paramFacilityArray =explode("&",$paramFacility);
$paramNearPlaceArray =explode("&",$paramNearPlace);



/*
rdg_id
rdr_bedroom
rdr_maid
rdr_toilet
rdr_studio
rdr_deluxeRoom
rdr_excutiveRoom
rdr_masterBedroom
rdr_smallBedroom
rdr_meetingRoom
rdr_livingRoom
rdr_drawingRoom
rdr_storageRoom
rdr_kitchen
rdr_laundryRoom
rdr_parking
*/

	$rdr_bedroom=$_POST['rdr_bedroom'];
	$rdr_maid=$_POST['rdr_maid'];
	$rdr_toilet=$_POST['rdr_toilet'];
	$rdr_studio=$_POST['rdr_studio'];
	$rdr_deluxeRoom=$_POST['rdr_deluxeRoom'];
	$rdr_excutiveRoom=$_POST['rdr_excutiveRoom'];
	$rdr_masterBedroom=$_POST['rdr_masterBedroom'];
	$rdr_smallBedroom=$_POST['rdr_smallBedroom'];
	$rdr_livingRoom=$_POST['rdr_livingRoom'];
	$rdr_drawingRoom=$_POST['rdr_drawingRoom'];
	$rdr_storageRoom=$_POST['rdr_storageRoom'];
	$rdr_kitchen=$_POST['rdr_kitchen'];
	$rdr_laundryRoom=$_POST['rdr_laundryRoom'];
	$rdr_parking=$_POST['rdr_parking'];
	$rdr_meetingRoom=$_POST['rdr_meetingRoom'];


	$strSQLCheck="select * from realty_detail_room where rdg_id = '$rdg_id'";
	$resultCheck=mysqli_query($conn,$strSQLCheck);
	$resultCheckNum=mysqli_num_rows($resultCheck);
	if($resultCheckNum > 0){
		
		$strSQL="
				update realty_detail_room set 
				rdr_bedroom='$rdr_bedroom',
				rdr_maid='$rdr_maid',
				rdr_toilet='$rdr_toilet',
				rdr_studio='$rdr_studio',
				rdr_deluxeRoom='$rdr_deluxeRoom',
				rdr_excutiveRoom='$rdr_excutiveRoom',
				rdr_masterBedroom='$rdr_masterBedroom',
				rdr_smallBedroom='$rdr_smallBedroom',
				rdr_meetingRoom='$rdr_meetingRoom',
				rdr_livingRoom='$rdr_livingRoom',
				rdr_drawingRoom='$rdr_drawingRoom',
				rdr_storageRoom='$rdr_storageRoom',
				rdr_kitchen='$rdr_kitchen',
				rdr_laundryRoom='$rdr_laundryRoom',
				rdr_parking='$rdr_parking'
				where rdg_id='$rdg_id'
				";
		
		
		$sucess=mysqli_query($conn,$strSQL)or die(mysqli_error());
		
		if($sucess){
			
			$strSQLDelete="delete from realty_detail where rdg_id = '$rdg_id'";
			$resultDelete=mysqli_query($conn,$strSQLDelete);
			if($resultDelete){
				// checkbox management start
				for($i=0;$i<count($paramCharacteristicArray);$i++){
					//echo $paramCharacteristicArray[$i];
					$paramCharacteristicNum=substr($paramCharacteristicArray[$i],15);
					if($paramCharacteristicNum!=""){
						$strSQL1="insert into realty_detail(rdg_id,rdc_id)values('$rdg_id','$paramCharacteristicNum')";
						$result1=mysqli_query($conn,$strSQL1);
					}
				}
				
				for($j=0;$j<count($paramInteriorArray);$j++){
					$paramInteriorArrayNum=substr($paramInteriorArray[$j],9);
					if($paramInteriorArrayNum!=""){
						$strSQL2="insert into realty_detail(rdg_id,rdi_id)values('$rdg_id','$paramInteriorArrayNum')";
						$result2=mysqli_query($conn,$strSQL2);
					}
				}
				for($k=0;$k<count($paramFacilityArray);$k++){
					$paramFacilityNum=substr($paramFacilityArray[$k],9);
					if($paramFacilityNum!=""){
						$strSQL3="insert into realty_detail(rdg_id,rdf_id)values('$rdg_id','$paramFacilityNum')";
						$result3=mysqli_query($conn,$strSQL3);
					}
				}
				
				for($l=0;$l<count($paramNearPlaceArray);$l++){
					$paramNearPlaceNum=substr($paramNearPlaceArray[$l],10);
					if($paramNearPlaceNum!=""){
						$strSQL4="insert into realty_detail(rdg_id,rdnp_id)values('$rdg_id','$paramNearPlaceNum')";
						$result4=mysqli_query($conn,$strSQL4);
					}
				
				}
				// checkbox management end
			}
			
			if($sucess or $result1  or $result2 or $result3 or $result4 ){
				echo '["update-success"]';
			}else{
				echo '["not_success"]';
			}
			
			
			//echo'["updata-success"]';
		}
			
	}else{
		
	
	
	
	$strSQL="insert into realty_detail_room(
	rdg_id,
	rdr_bedroom,
	rdr_maid,
	rdr_toilet,
	rdr_studio,
	rdr_deluxeRoom,
	rdr_excutiveRoom,
	rdr_masterBedroom,
	rdr_smallBedroom,
	rdr_meetingRoom,
	rdr_livingRoom,
	rdr_drawingRoom,
	rdr_storageRoom,
	rdr_kitchen,
	rdr_laundryRoom,
	rdr_parking
		
	)VALUES
	(
	'$rdg_id',
	'$rdr_bedroom',
	'$rdr_maid',
	'$rdr_toilet',
	'$rdr_studio',
	'$rdr_deluxeRoom',
	'$rdr_excutiveRoom',
	'$rdr_masterBedroom',
	'$rdr_smallBedroom',
	'$rdr_meetingRoom',
	'$rdr_livingRoom',
	'$rdr_drawingRoom',
	'$rdr_storageRoom',
	'$rdr_kitchen',
	'$rdr_laundryRoom',
	'$rdr_parking'
	
	)";
	$sucess=mysqli_query($conn,$strSQL)or die(mysqli_error());
	if(!$sucess){
	echo mysqli_error();
	}else{
	
	// checkbox management start
		for($i=0;$i<count($paramCharacteristicArray);$i++){
			//echo $paramCharacteristicArray[$i];
			$paramCharacteristicNum=substr($paramCharacteristicArray[$i],15);
			if($paramCharacteristicNum!=""){
			$strSQL1="insert into realty_detail(rdg_id,rdc_id)values('$rdg_id','$paramCharacteristicNum')";
			$result1=mysqli_query($conn,$strSQL1);
			}
		}

		for($j=0;$j<count($paramInteriorArray);$j++){
			$paramInteriorArrayNum=substr($paramInteriorArray[$j],9);
			if($paramInteriorArrayNum!=""){
			$strSQL2="insert into realty_detail(rdg_id,rdi_id)values('$rdg_id','$paramInteriorArrayNum')";
			$result2=mysqli_query($conn,$strSQL2);
			}
		}
		for($k=0;$k<count($paramFacilityArray);$k++){
			$paramFacilityNum=substr($paramFacilityArray[$k],9);
			if($paramFacilityNum!=""){
			$strSQL3="insert into realty_detail(rdg_id,rdf_id)values('$rdg_id','$paramFacilityNum')";
			$result3=mysqli_query($conn,$strSQL3);
			}
		}
		
		for($l=0;$l<count($paramNearPlaceArray);$l++){
			$paramNearPlaceNum=substr($paramNearPlaceArray[$l],10);
			if($paramNearPlaceNum!=""){
			$strSQL4="insert into realty_detail(rdg_id,rdnp_id)values('$rdg_id','$paramNearPlaceNum')";
			$result4=mysqli_query($conn,$strSQL4);
			}
		
		}
	// checkbox management end
	
	if($sucess or $result1  or $result2 or $result3 or $result4 ){
		echo '["success"]';
	}else{
		echo '["not_success"]';
	}
	// checkbox management end

	
	}
	}

}
if($_POST['paramAction']=="realtyDetailDataById"){
	$RdgId=$_POST['RdgId'];
	//rdc_id start
	$strSQL1="
	select rdc_id from realty_detail where rdg_id='$RdgId' and rdc_id!='';
	";
	$result1=mysqli_query($conn,$strSQL1);
	if($result1){
	$jsonObject1="";
	$i=0;
	$jsonObject1.= "[";
	 while($rs1=mysqli_fetch_array($result1)){	
			if($i==0){
			$jsonObject1.="[\"".$rs1['rdc_id']."\"]";
			}else{
			$jsonObject1.=",[\"".$rs1['rdc_id']."\"]";
			}
			$i++;
		}
		
	$jsonObject1.="]";
	
		//rdf_id start
		$strSQL2="
		select rdf_id from realty_detail where rdg_id='$RdgId' and rdf_id!='';
		";
		$result2=mysqli_query($conn,$strSQL2);
		if($result2){
			$jsonObject2="";
			$j=0;
			$jsonObject2.= "[";
			while($rs2=mysqli_fetch_array($result2)){
				if($j==0){
					$jsonObject2.="[\"".$rs2['rdf_id']."\"]";
				}else{
					$jsonObject2.=",[\"".$rs2['rdf_id']."\"]";
				}
				$j++;
			}
			
			$jsonObject2.="]";
			//rdi_id start
			$strSQL3="
			select rdi_id from realty_detail where rdg_id='$RdgId' and rdi_id!='';
			";
			$result3=mysqli_query($conn,$strSQL3);
			if($result3){
				$jsonObject3="";
				$k=0;
				$jsonObject3.= "[";
				while($rs3=mysqli_fetch_array($result3)){
					if($k==0){
						$jsonObject3.="[\"".$rs3['rdi_id']."\"]";
					}else{
						$jsonObject3.=",[\"".$rs3['rdi_id']."\"]";
					}
					$k++;
				}
				
				$jsonObject3.="]";
				
				$strSQL4="
				select rdnp_id from realty_detail where rdg_id='$RdgId' and rdnp_id!='';
				";
				$result4=mysqli_query($conn,$strSQL4);
				if($result4){
					$jsonObject4="";
					$l=0;
					$jsonObject4.= "[";
					while($rs4=mysqli_fetch_array($result4)){
						if($l==0){
							$jsonObject4.="[\"".$rs4['rdnp_id']."\"]";
						}else{
							$jsonObject4.=",[\"".$rs4['rdnp_id']."\"]";
						}
						$l++;
					}
					
					$jsonObject4.="]";
					}//rdnp_id end
				}//rdi_id end
			
		}//rdf_id end

	}//rdc_id end

	
	$json="[{\"rdc_id\":$jsonObject1},{\"rdf_id\":$jsonObject2},{\"rdi_id\":$jsonObject3},{\"rdnp_id\":$jsonObject4}]";
	echo $json;
}

if($_POST['paramAction']=="realtyDetailRoomById"){
	$RdgId=$_POST['RdgId'];
	$strSQL="
	select * from realty_detail_room where rdg_id = '$RdgId'
	";
	$result=mysqli_query($conn,$strSQL);
	if($result){
	$rs=mysqli_fetch_array($result);
	echo "{
			 \"rdr_bedroom\":\"".$rs['rdr_bedroom']."\"
			,\"rdr_maid\":\"".$rs['rdr_maid']."\"
			,\"rdr_toilet\":\"".$rs['rdr_toilet']."\"
			,\"rdr_studio\":\"".$rs['rdr_studio']."\"
			,\"rdr_deluxeRoom\":\"".$rs['rdr_deluxeRoom']."\"
			,\"rdr_excutiveRoom\":\"".$rs['rdr_excutiveRoom']."\"
			,\"rdr_masterBedroom\":\"".$rs['rdr_masterBedroom']."\"
			,\"rdr_smallBedroom\":\"".$rs['rdr_smallBedroom']."\"
			,\"rdr_meetingRoom\":\"".$rs['rdr_meetingRoom']."\"
			,\"rdr_livingRoom\":\"".$rs['rdr_livingRoom']."\"
			,\"rdr_drawingRoom\":\"".$rs['rdr_drawingRoom']."\"
			,\"rdr_storageRoom\":\"".$rs['rdr_storageRoom']."\"
			,\"rdr_kitchen\":\"".$rs['rdr_kitchen']."\"
			,\"rdr_laundryRoom\":\"".$rs['rdr_laundryRoom']."\"
			,\"rdr_parking\":\"".$rs['rdr_parking']."\"
	}";
		}
	
	/*
	
	,\"rdr_bedroom\":\"".$rs['rdr_bedroom']."\"
	,\"rdr_maid\":\"".$rs['rdr_maid']."\"
	,\"rdr_toilet\":\"".$rs['rdr_toilet']."\"
	,\"rdr_studio\":\"".$rs['rdr_studio']."\"
	,\"rdr_deluxeRoom\":\"".$rs['rdr_deluxeRoom']."\"
	,\"rdr_excutiveRoom\":\"".$rs['rdr_excutiveRoom']."\"
	,\"rdr_masterBedroom\":\"".$rs['rdr_masterBedroom']."\"
	,\"rdr_smallBedroom\":\"".$rs['rdr_smallBedroom']."\"
	,\"rdr_meetingRoom\":\"".$rs['rdr_meetingRoom']."\"
	,\"rdr_livingRoom\":\"".$rs['rdr_livingRoom']."\"
	,\"rdr_drawingRoom\":\"".$rs['rdr_drawingRoom']."\"
	,\"rdr_storageRoom\":\"".$rs['rdr_storageRoom']."\"
	,\"rdr_kitchen\":\"".$rs['rdr_kitchen']."\"
	,\"rdr_laundryRoom\":\"".$rs['rdr_laundryRoom']."\"
	,\"rdr_parking\":\"".$rs['rdr_parking']."\"

	
	*/
}







?>