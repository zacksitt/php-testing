<?php 

	abstract class carFeature implements car{
		
		protected $car;

		function __construct(Car $car){
			$this->car = $car;
		}

		abstract function cost();
		abstract function description();
		public function color(){
			echo 'im color';
		}
	}	
?>