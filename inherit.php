<?php 
class ParentClass{
	function __construct(){
		echo 'parent construct';
	}

	function hello(){
		echo 'Parent HELLO!';
	}
}

class ChildClass extends ParentClass{
	function __construct(){
		parent::__construct();
	}

	function say(){
		$this->hello();
	}

	function talk(){
		echo 'talk from child';
	}
}

$obj = new ChildClass();
$obj->say();
$obj->talk();