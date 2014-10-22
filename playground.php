<HTML>
<HEAD>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
</HEAD>
<BODY>
<?php

include("car.php");

$myCar = new Car('Trabant', 150);

echo "===============<br/>";
echo "Samochód: ".$myCar->getModel()."<br/>";
echo "Przyśpieszenie: ".$myCar->getAcceleration()."<br/>";
echo "Maksymalna prędkość: ".$myCar->getVMax()."<br/>";
echo "===============<br/>";

//$myCar->drive();
?>
</BODY>

</HEAD>