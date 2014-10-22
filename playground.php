<HTML>
<HEAD>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
</HEAD>
<BODY>
<?php

include("car.php");

$myCar[0] = new Car('Trabant', 150);

for ($i=0; $i<sizeOf($myCar); $i++){
	echo "===============<br/>";
	echo "Samochód: ".$myCar[$i]->getModel()."<br/>";
	echo "Przyśpieszenie: ".$myCar[$i]->getAcceleration()."<br/>";
	echo "Maksymalna prędkość: ".$myCar[$i]->getVMax()."<br/>";
	echo "===============<br/>";
}
//$myCar->drive();
?>
</BODY>

</HEAD>