<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?	
	//header("Content-Type: text/html; charset=utf-8");
	function pu_query($dbname,$sql,$ListPerPage=5)
	{
		global $pages;
		global $totalpage;

		$result=mysql_db_query($dbname,$sql);
		if (empty($pages))	$pages=1;
		$num=mysql_num_rows($result);
		$rt = $num%$ListPerPage;
				
		//หาจำนวนหน้าทั้งหมด
		$totalpage = ($rt!=0) ? floor($num/$ListPerPage)+1 : floor($num/$ListPerPage); 
		$goto = ($pages-1)*$ListPerPage;

		$sql .= " LIMIT $goto,$ListPerPage";
		$result=mysql_db_query($dbname,$sql);

		return $result;
	}

	function pu_pageloop($option="",$align="left")
	{
		global $pages;
		global $totalpage;
		
		
		echo "<div id=\"pages\">";

		// วนลูปแสดงเลขหน้าทั้งหมด แบบเป็นช่วงๆ ช่วงละ 10 หน้า
		$b=floor($pages/10); 
		$c=(($b*10));

		if($c>1) {
			$prevpage = $c-1;
			echo "<a href='index.php?page=news_system&pages=$prevpage&$option' title='10 หน้าก่อนนี้' class=\"page\">&laquo;</a>&nbsp; \n";
		}

		// สร้าง link เพื่อไปหน้าก่อน
		if($pages>1 && $pages<=$totalpage) {
			$prevpage = $pages-1;
			echo "<a href='index.php?page=news_system&pages=$prevpage&$option' title='หน้าก่อน' class=\"page\">หน้าก่อน</a>&nbsp; \n";
		}else{
			//echo "หน้าก่อน&nbsp;";
		}
		
		echo " <b>";
		
		for($i=$c; $i<$pages ; $i++) {
			if($i>0)
			echo "<a href='index.php?page=news_system&pages=$i&$option' class=\"page\">$i</a>&nbsp; \n";
		}

		echo "<span class=\"page2\" >$pages</span>&nbsp; \n";

		for($i=($pages+1); $i<($c+10) ; $i++) {
			if($i<=$totalpage)
			echo "<a href='index.php?page=news_system&pages=$i&$option' class=\"page\">$i</a>&nbsp; \n";
		}

		echo "</b> ";
		
		// สร้าง link เพื่อไปหน้าถัดไป
		if($pages!=$totalpage) {
			$nextpage = $pages+1;
			echo "<a href='index.php?page=news_system&pages=$nextpage&$option' title='หน้าถัดไป' class=\"page\">หน้าถัดไป</a>&nbsp; \n";
		}
		
		if($c>=0) {
			if(($c+10)<$totalpage){
				$nextpage = $c+10;
				echo "<a href='index.php?page=news_system&pages=$nextpage' title='10 หน้าถัดไป' class=\"page\">&raquo</a>&nbsp; \n";
			}
		}
		
		
		
		//echo "</td></tr>\n";
		//echo "</table>\n";
		echo "</div>";
	}// จบฟังก์ชั่น pu_split

?>