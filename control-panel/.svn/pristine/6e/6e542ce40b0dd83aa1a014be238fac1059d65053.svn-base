<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../config.inc.php");



/* ลบรูปภาพ cat*/

$id_youtupe=$_GET['id_youtupe'];
$id_cat_youtupe=$_GET['id_cat_youtupe'];

$path_thumbnail="../youtupe/".$id_cat_youtupe."/".$id_youtupe."/thumbnail/";
$path_big_picture="../youtupe/".$id_cat_youtupe."/".$id_youtupe."/";

			if($handle=opendir($path_thumbnail)){
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


$strSQL="delete from youtupe where id_youtupe=$id_youtupe";
mysql_query($strSQL);
//header("Location:index.php?page=youtupe&prdductcat_id=$id_cat_youtupe");
echo"<script> window.location=\"index.php?page=vdo_system&select_page=youtube&id_cat_youtupe=$id_cat_youtupe\"</script>";

/* catลบรูปภาพ*/

