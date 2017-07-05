
<?php 
	include("suv.php");
	include("sunRoof.php");
	
	$car = new suv();
	// echo $car->cost();
	// echo $car->description();
	$car1 = new sunRoof($car);
	echo $car1->cost();
	echo $car1->description();
	echo $car1->color();
?>