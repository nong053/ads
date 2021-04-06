<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/layout1.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div id="body">
	<div id="header_bg">
    header
	</div>
    <div id="main_menu_bg">
    main_menu_bg
    </div>
    <div id="main_banner_bg">
    main banner
    </div>
    <div id="content_bg">
    content_bg
    <?php
	switch($_GET['page']){
		case"home":require("home.php");break;
		case"contact":require("contact.php");break;
		case"about":require("about.php");break;
	}
	?>
    <a href="../../contact.php">DD
    </a>
    <a href="index.php?page=home">
    <img src="layout/layout1/image/14-16414.jpg" />
    <img src="layout/layout1/image/detail_images.jpg" />
    
    home
    </a>
    <a href="index.php?page=contact">
    contact
    </a>
    <a href="index.php?page=about">
    about
    </a>
    </div>
</div>

</body>
</html>