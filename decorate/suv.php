<?php
include("car.php");

class suv implements car{
	function cost(){
		return 3000;
	}

	function description(){
		return 'suv';
	}
}