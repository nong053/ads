<?php
class rangle{
	public $x=10;
	public $y=20;
	function draw_rangle($x=""){
	echo "<br>rangle 555 width ".$x;
	}
}
class rangle_black extends rangle{
	function rangle_show($x){
	echo"<br>$x use rangle_black";
	$this->draw_rangle($x);
	}
}
$obj_rangle_black = new rangle_black;
@$obj_rangle_black->rangle_show(20);

$obj_rangle = new rangle;
$obj_rangle->draw_rangle(100);
?>