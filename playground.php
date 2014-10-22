<HTML>
<HEAD>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
</HEAD>
<BODY>
<?php

include("car.php");
$myCarEngine[0] = new Engine(70);
$myCarEngine[1] = new Engine(100);
$myCarEngine[2] = new Engine(120);
$myCarEngine[3] = new Engine(170);
$myCarEngine[4] = new Engine(270);
$myCar[0] = new Car('Trabant', $myCarEngine[0]);
$myCar[1] = new Car('Mercedes', $myCarEngine[1]);
$myCar[2] = new Car('Ford', $myCarEngine[2]);
$myCar[3] = new Car('Audi', $myCarEngine[3]);
$myCar[4] = new Car('Ferrari', $myCarEngine[4]);

for ($i=0; $i<sizeOf($myCar); $i++){
	echo "===============<br/>";
	echo "Samochód: ".$myCar[$i]->getModel()."<br/>";
	echo "Moc: ".$myCarEngine[$i]->getHP()."<br/>";
	echo "Przyśpieszenie: ".$myCar[$i]->getAcceleration()." sekund do 100km<br/>";
	echo "Maksymalna prędkość: ".$myCar[$i]->getVMax()." km/h<br/>";
	echo "===============<br/>";
}
?>
</BODY>

</HEAD>