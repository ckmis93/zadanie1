<HTML>
<HEAD>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
</HEAD>
<BODY>
<?php

include("car.php");

$myCar[0] = new Car('Opel', 70);
$myCar[1] = new Car('Mercedes', 150);
$myCar[2] = new Car('Fiat', 120);
$myCar[3] = new Car('Maseratti', 180);
$myCar[4] = new Car('Ferrari', 250);

for ($i=0; $i<sizeOf($myCar); $i++){
	echo "===============<br/>";
	echo "Samochód: ".$myCar[$i]->getModel()."<br/>";
	echo "Moc: ".$myCar[$i]->engine->getHP()."<br/>";
	echo "Przyśpieszenie: ".$myCar[$i]->getAcceleration()." sekund do 100km<br/>";
	echo "Maksymalna prędkość: ".$myCar[$i]->getVMax()." km/h<br/>";
	echo "===============<br/>";
}

?>
</BODY>

</HEAD>
