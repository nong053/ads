<?php 
include("../config.inc.php");
if($_POST['paramAction']=="contructor_select_type"){
	
	$dataCSTID=$_POST['dataCSTID'];
	
	if($_POST['cst_type']=="F"){
		$cst_type="M";
	}else{
		$cst_type=$_POST['cst_type'];
	}
	$paramRealtyID=$_POST['paramRealtyID'];
	
	$cst_id2="";
	
	$strSQL="select cst_id,cst_detail,cst_type from contructor_select_type where cst_type='$cst_type'";
	$result=mysql_query($strSQL);

	while ($rs=mysql_fetch_array($result)){
		
		for($i=0;$i<count($dataCSTID);$i++){
			if($dataCSTID[$i][0]==$rs['cst_id']){
				$cst_id2=$rs['cst_id'];
			}
		}//for
		
		if($cst_id2==$rs['cst_id'])	{
					?>
							<div class=" col-lg-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" checked='checked' class="contructor" name="contructor"  value="<?=$rs['cst_id']?>" ><?=$rs['cst_detail']?> 
									</label>
								</div>
							</div>
						
						<?php
		}else{
					?>
					 		<div class=" col-lg-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="contructor" name="contructor"  value="<?=$rs['cst_id']?>" ><?=$rs['cst_detail']?> 
									</label>
								</div>
							</div>
					<?php
		}
		
		
	}
	
}
if($_POST['paramAction']=="getRealtyTypeId"){
	//$strSQL="select rt_id from realty_data_general where rdg_id='$paramRealtyID'";
	$strSQL="select cst_type from realty_data_general where rdg_id='$paramRealtyID'";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);
	echo "[".$rs['cst_type']."]";
}

if($_POST['paramAction']=="getRealtyTypeCate"){
	$strSQL="select rdg.*,rt.cst_type,rt.rt_name from realty_data_general  rdg
LEFT JOIN realty_type rt
ON rdg.rt_id=rt.rt_id
WHERE rdg_id='$paramRealtyID'";
	
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);
	echo "[[\"".$rs['cst_type']."\"],[\"".$rs['rt_name']."\"]]";
}


if($_POST['paramAction']=="Save"){


	//$rdg_id=14;
	$rdg_id=$_POST['rdg_id'];
	
	$paramContructor=$_POST['paramContructor'];
	$paramContructorArray =explode("&",$paramContructor);
	

			
		$strSQLDelete="delete from realty_detail where rdg_id = '$rdg_id'";
		$resultDelete=mysql_query($strSQLDelete);
		if($resultDelete){
		
		// checkbox management start
			for($i=0;$i<count($paramContructorArray);$i++){
					
				//echo $paramCharacteristicArray[$i];
					$paramContructorNum=substr($paramContructorArray[$i],11);
					
					if($paramContructorNum!=""){
					$strSQL1="insert into realty_detail(rdg_id,cst_id)values('$rdg_id','$paramContructorNum')";
					$result1=mysql_query($strSQL1);
					}
				}

				// checkbox management end
				
				if($result1){
					echo '["success"]';
				}else{
					echo "error".mysql_error();
					
				}
		}

}
if($_POST['paramAction']=="realtyDetailDataById"){
	$RdgId=$_POST['RdgId'];
	//rdc_id start
	$strSQL1="
	select cst_id from realty_detail where rdg_id='$RdgId' and cst_id!='';
	";
	$result1=mysql_query($strSQL1);
	if($result1){
		$jsonObject1="";
		$i=0;
		$jsonObject1.= "[";
	 while($rs1=mysql_fetch_array($result1)){
			if($i==0){
				$jsonObject1.="[\"".$rs1['cst_id']."\"]";
			}else{
				$jsonObject1.=",[\"".$rs1['cst_id']."\"]";
			}
			$i++;
		}

		$jsonObject1.="]";

	}//rdc_id end


	$json="[{\"cst_id\":$jsonObject1}]";
	
	echo $json;
}











?>