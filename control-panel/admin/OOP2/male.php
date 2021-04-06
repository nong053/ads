<?php
require_once("human.php");
class male extends human{

	public function show_text(){
	echo $this->say();
	}

}

$obj_male = new male;
$obj_male->show_text();
?>