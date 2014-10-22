<HTML>
<HEAD>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
</HEAD>
<BODY>
<?php

include("car.php");

$myCar[0] = new Car('Trabant', 70);
$myCar[1] = new Car('Mercedes', 150);
$myCar[2] = new Car('Ford', 120);
$myCar[3] = new Car('Audi', 180);
$myCar[4] = new Car('Ferrari', 250);

for ($i=0; $i<sizeOf($myCar); $i++){
	echo "===============<br/>";
	echo "Samochód: ".$myCar[$i]->getModel()."<br/>";
	echo "Przyśpieszenie: ".$myCar[$i]->getAcceleration()." sekund do 100Km<br/>";
	echo "Maksymalna prędkość: ".$myCar[$i]->getVMax()." Km/h<br/>";
	echo "===============<br/>";
}

?>
</BODY>

</HEAD>