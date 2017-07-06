
<?php
interface car{
	public function cost();
	public function description();
}

abstract class carFeature implements car{
	protected $car;
	function __construct(Car $car){
		$this->car = $car;
	}
	abstract function cost();
	abstract function description();
}

class sunRoof extends carFeature{
	function cost(){
		return $this->car->cost()  + 1500;
	}
	function description(){
		return $this->car->description() . ', high end weeel';
	}
}

class suv implements car{
	function cost(){
		return 3000;
	}
	function description(){
		return 'suv';
	}
}

	$car = new suv();
	echo $car->cost();
	echo $car->description();
	$car1 = new sunRoof($car);
	echo $car1->cost();
	echo $car1->description();
?>
