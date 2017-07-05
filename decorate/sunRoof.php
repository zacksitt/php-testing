<?php

include("carFeature.php");
class sunRoof extends carFeature{

	function cost(){
		return $this->car->cost()  + 1500;
	}

	function description(){
		return $this->car->description() . ', high end weeel';
	}
}