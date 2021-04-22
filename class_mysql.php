<?php
class database{
	function tableSQL($table)
	{
			//echo"เรียกใช้งาน class database<br>";
			include_once("config.inc.php");
			$strSQL="select * from $table";
			$result=mysqli_query($conn,$strSQL);
			
			return $result;
		
	}
}

?>